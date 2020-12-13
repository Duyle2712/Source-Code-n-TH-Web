<?php 
    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath.'/../lib/database.php');
    include_once ($filepath.'/../helpers/format.php');
?>



<?php 
    class category {

        private $db;
        private $fm;

        public function __construct()
        {
            $this->db = new Database();
            $this->fm = new Format();
        }
        public function insert_category($cat_id, $cat_name)
        {
            #kiểm tra nhập hợp lệ 
            $cat_id = $this->fm->validation($cat_id);
            $cat_name = $this->fm->validation($cat_name);
            #kết nốt database
            $cat_id = mysqli_real_escape_string($this->db->link, $cat_id);
            $cat_name = mysqli_real_escape_string($this->db->link, $cat_name);

           
            if(empty($cat_id) || empty($cat_name)) {
                $alert = "<span class='error'>ID loại sách và Tên loại sách không được để trống</span>";
                return $alert;
            } else {
                $query = "SELECT * FROM category";
                $result = $this->db->select($query);

                while ($row = mysqli_fetch_assoc($result)) {
                    if($row['cat_id'] == $cat_id){
                        $alert = "<span class='error'>Đã có loại sách này</span>";
                        return $alert;
                    }
                }
                #----------------------------------------
                $query_1 = "INSERT INTO category(cat_id, cat_name) VALUES('$cat_id', '$cat_name')";
                $result_1 = $this->db->insert($query_1);

                if($result_1) {
                    $alert = "<span class='success'>Thêm loại sách thành công</span>";
                    return $alert;
                } else {
                    $alert = "<span class='error'>Thêm loại sách không thành công</span>";
                    return $alert;
                }
            }
           
        }

        public function show_category()
        {
            $query = "SELECT * FROM category order by cat_id desc";
            $result = $this->db->select($query);
            return $result;
        }

        public function update_category($cat_name, $cat_id)
        {
            #kiểm tra nhập hợp lệ 
            $cat_id = $this->fm->validation($cat_id);
            $cat_name = $this->fm->validation($cat_name);
            #kết nốt database
            $cat_id = mysqli_real_escape_string($this->db->link, $cat_id);
            $cat_name = mysqli_real_escape_string($this->db->link, $cat_name);

           
            if(empty($cat_name)) {
                $alert = "<span class='error'>Tên loại sách không được để trống</span>";
                return $alert;
            } else {               
                $query = "UPDATE category SET cat_name = '$cat_name' WHERE cat_id = '$cat_id'";
                $result= $this->db->update($query);

                if($result) {
                    $alert = "<span class='success'>Sửa loại sách thành công</span>";
                    return $alert;
                } else {
                    $alert = "<span class='error'>Sửa loại sách không thành công</span>";
                    return $alert;
                }
            }
        }

        public function del_category($del_id)
        {
            $query = "DELETE FROM category WHERE cat_id = '$del_id'";
            $result = $this->db->delete($query);
            if($result) {
                $alert = "<span class='success'>Xóa loại sách thành công</span>";
                return $alert;
            } else {
                $alert = "<span class='error'>Xóa loại sách không thành công</span>";
                return $alert;
            }
        }

        public function getcatbyId($cat_id)
        {
            $query = "SELECT * FROM category WHERE cat_id = '$cat_id'";
            $result = $this->db->select($query);
            return $result;
        }
        public function show_category_fontend()
        {
            $query = "SELECT * FROM category order by cat_id desc";
            $result = $this->db->select($query);
            return $result;
        }

        public function get_book_by_cat($id)
        {
            $query = "SELECT * FROM book WHERE cat_id = '$id' order by book_id desc LIMIT 8";
            $result = $this->db->select($query);
            return $result;
        }
        public function get_cat_name($id)
        {
            $query = "SELECT cat_name FROM category WHERE cat_id = '$id'";
            $result = $this->db->select($query);
            return $result;
        }

    }
?>