<?php 
    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath.'/../lib/database.php');
    include_once ($filepath.'/../helpers/format.php');
?>



<?php 
    class book{

        private $db;
        private $fm;

        public function __construct()
        {
            $this->db = new Database();
            $this->fm = new Format();
        }
        public function insert_book($data, $files)
        {
            #kết nốt database
            $book_id = mysqli_real_escape_string($this->db->link, $data['book_id']);
            $book_name = mysqli_real_escape_string($this->db->link, $data['book_name']);
            $category = mysqli_real_escape_string($this->db->link, $data['category']);
            $publisher = mysqli_real_escape_string($this->db->link, $data['publisher']);
            $description = mysqli_real_escape_string($this->db->link, $data['description']);
            $price = mysqli_real_escape_string($this->db->link, $data['price']);
            $status = mysqli_real_escape_string($this->db->link, $data['status']);
            // Kiểm tra hình ảnh, lấy hình ảnh cho vào folder upload
            $permited = array('jpg','jpeg','png','gif');
            $file_name = $_FILES['img']['name'];
            $file_size = $_FILES['img']['size'];
            $file_temp = $_FILES['img']['tmp_name'];

            $div = explode('.', $file_name);
            $file_ext = strtolower(end($div));
            $unique_img = substr(md5(time()), 0, 10).'.'.$file_ext;
            $uploaded_img = "upload/".$unique_img;

           
            if($book_id ==""|| $book_name ==""|| $category ==""|| $publisher ==""
            || $description ==""|| $price ==""|| $status ==""|| $file_name =="") {
                $alert = "<span class='error'>Các trường nhập liệu không được để trống</span>";
                return $alert;
            } else {
                $query = "SELECT * FROM book";
                $result = $this->db->select($query);

                while ($row = mysqli_fetch_assoc($result)) {
                    if($row['book_id'] == $book_id){
                        $alert = "<span class='error'>Đã có sách này</span>";
                        return $alert;
                    }
                }
                #----------------------------------------
                move_uploaded_file($file_temp, $uploaded_img);
                $query_1 = "INSERT INTO book(book_id, book_name, description, price, img, status, pub_id, cat_id) 
                VALUES('$book_id', '$book_name', '$description', '$price', '$unique_img', '$status', '$publisher', '$category')";
                $result_1 = $this->db->insert($query_1);

                if($result_1) {
                    $alert = "<span class='success'>Thêm Sách thành công</span>";
                    return $alert;
                } else {
                    $alert = "<span class='error'>Thêm Sách không thành công</span>";
                    return $alert;
                }
            }
           
        }

        public function show_book()
        {
            // $query = "SELECT * FROM book order by book_id desc";
            $query = "SELECT book.*, publisher.pub_name, category.cat_name 
            FROM book  INNER JOIN publisher ON book.pub_id = publisher.pub_id
            INNER JOIN category ON book.cat_id = category.cat_id
            ORDER BY book.book_id desc";
            $result = $this->db->select($query);
            return $result;
        }

        public function update_book($data, $files, $id)
        {
             #kết nốt database
             $book_name = mysqli_real_escape_string($this->db->link, $data['book_name']);
             $category = mysqli_real_escape_string($this->db->link, $data['category']);
             $publisher = mysqli_real_escape_string($this->db->link, $data['publisher']);
             $description = mysqli_real_escape_string($this->db->link, $data['description']);
             $price = mysqli_real_escape_string($this->db->link, $data['price']);
             $status = mysqli_real_escape_string($this->db->link, $data['status']);
             // Kiểm tra hình ảnh, lấy hình ảnh cho vào folder upload
             $permited = array('jpg','jpeg','png','gif');
             $file_name = $_FILES['img']['name'];
             $file_size = $_FILES['img']['size'];
             $file_temp = $_FILES['img']['tmp_name'];
 
             $div = explode('.', $file_name);
             $file_ext = strtolower(end($div));
             $unique_img = substr(md5(time()), 0, 10).'.'.$file_ext;
             $uploaded_img = "upload/".$unique_img;

             if($book_name ==""|| $category ==""|| $publisher ==""
             || $description ==""|| $price ==""|| $status =="") {
                $alert = "<span class='error'>Các trường nhập liệu không được để trống</span>";
                return $alert;
            } else { 
                if(!empty($file_name)){
                    //Nếu người dùng chọn ảnh mới
                    if($file_size > 204800) {
                        $alert = "<span class='error'> Dung lượng hình ảnh chỉ được nhỏ hơn 2 MB</span>";
                        return $alert;
                    } else if(in_array($file_ext, $permited) === false) {
                        $alert = "<span class='error'>Chỉ có thể upload các file có đuôi:-".implode(', ',$permited)."</span>";
                        return $alert;
                    }
                    move_uploaded_file($file_temp, $uploaded_img);
                    $query = "UPDATE book SET 
                    book_name = '$book_name', 
                    description = '$description', 
                    price = '$price' ,
                    img = '$unique_img', 
                    status = '$status' ,
                    pub_id = '$publisher', 
                    cat_id = '$category' 
                    WHERE book_id = '$id'";
                } else {
                    // Nếu người dùng không chọn ảnh mới
                    $query = "UPDATE book SET 
                    book_name = '$book_name', 
                    description = '$description', 
                    price = '$price' ,
                    status = '$status' ,
                    pub_id = '$publisher', 
                    cat_id = '$category' 

                    WHERE book_id = '$id'";
                } 

                $result= $this->db->update($query);
                if($result) {
                    $alert = "<span class='success'>Sửa sách thành công</span>";
                    return $alert;
                } else {
                    $alert = "<span class='error'>Sửa sách không thành công</span>";
                    return $alert;
                }
            }
        }

        public function del_book($id)
        {

            $query = "DELETE FROM book WHERE book_id = '$id'";
            $result = $this->db->delete($query);
            if($result) {
                $alert = "<span class='success'>Xóa sách thành công</span>";
                return $alert;
            } else {
                $alert = "<span class='error'>Xóa sách không thành công</span>";
                return $alert;
            }
        }

        public function getbookbyId($id)
        {
            $query = "SELECT * FROM book WHERE book_id = '$id'";
            $result = $this->db->select($query);
            return $result;
        }

        /// END BACKEND

        /// START FONT-END
        public function getBookwithStatus(){
            $query = "SELECT * FROM book WHERE status = '1' LIMIT 4";
            $result = $this->db->select($query);
            return $result;
        }
        public function  getBookNew(){
            $book_1_trang = 4;
            if(!isset($_GET['trang'])) {
                $trang = 1;
            } else {
                $trang = $_GET['trang'];
            }
            $tung_trang = ($trang - 1)*$book_1_trang;
            $query = "SELECT * FROM book ORDER BY book_id desc LIMIT $tung_trang,$book_1_trang";
            $result = $this->db->select($query);
            return $result;
        }
        public function get_all_book()
        {
            $query = "SELECT * FROM book";
            $result = $this->db->select($query);
            return $result;
        }
        public function  getDetails($id){
            $query = "SELECT book.*, publisher.pub_name, category.cat_name 
            FROM book  INNER JOIN publisher ON book.pub_id = publisher.pub_id
            INNER JOIN category ON book.cat_id = category.cat_id 
            WHERE book.book_id = '$id'";
            
            $result = $this->db->select($query);
            return $result;
        }
        
        public function get_lastest_GD()
        {
            $query = "SELECT * FROM book WHERE book.pub_id ='gd' ORDER BY book_id desc LIMIT 1";
            $result = $this->db->select($query);
            return $result;
        }
        public function get_lastest_HCM()
        {
            $query = "SELECT * FROM book WHERE pub_id ='hcm' ORDER BY book_id desc LIMIT 1";
            $result = $this->db->select($query);
            return $result;
        }
        public function get_lastest_VHTT()
        {
            $query = "SELECT * FROM book WHERE pub_id ='vhtt' ORDER BY book_id desc LIMIT 1";
            $result = $this->db->select($query);
            return $result;
        }
        public function get_lastest_TN()
        {
            $query = "SELECT * FROM book WHERE pub_id ='tn' ORDER BY book_id desc LIMIT 1";
            $result = $this->db->select($query);
            return $result;
        }
        
        public function search_book($tukhoa)
        {
            $tukhoa = $this->fm->validation($tukhoa);
            $query = "SELECT * FROM book WHERE book_name LIKE '%$tukhoa%'";
            $result = $this->db->select($query);
            return $result;
        }
        public function getbookCungLoai($id_cungloai)
        {
            $id_cungloai = $this->fm->validation($id_cungloai);
            $query = "SELECT * FROM book WHERE book.cat_id='$id_cungloai' ORDER BY book_id desc";

            
            $result = $this->db->select($query);
            return $result;
        }
    }
?>