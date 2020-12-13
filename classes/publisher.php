<?php
    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath.'/../lib/database.php');
    include_once ($filepath.'/../helpers/format.php');
?>



<?php 
    class publisher {

        private $db;
        private $fm;

        public function __construct()
        {
            $this->db = new Database();
            $this->fm = new Format();
        }
        public function insert_publisher($pub_id, $pub_name)
        {
            #kiểm tra nhập hợp lệ 
            $pub_id = $this->fm->validation($pub_id);
            $pub_name = $this->fm->validation($pub_name);
            #kết nốt database
            $pub_id = mysqli_real_escape_string($this->db->link, $pub_id);
            $pub_name = mysqli_real_escape_string($this->db->link, $pub_name);

           
            if(empty($pub_id) || empty($pub_name)) {
                $alert = "<span class='error'>ID Nhà xuất bản và Tên Nhà xuất bản không được để trống</span>";
                return $alert;
            } else {
                $query = "SELECT * FROM publisher";
                $result = $this->db->select($query);

                while ($row = mysqli_fetch_assoc($result)) {
                    if($row['pub_id'] == $pub_id){
                        $alert = "<span class='error'>Đã có Nhà xuất bản này</span>";
                        return $alert;
                    }
                }
                #----------------------------------------
                $query_1 = "INSERT INTO publisher(pub_id, pub_name) VALUES('$pub_id', '$pub_name')";
                $result_1 = $this->db->insert($query_1);

                if($result_1) {
                    $alert = "<span class='success'>Thêm Nhà xuất bản thành công</span>";
                    return $alert;
                } else {
                    $alert = "<span class='error'>Thêm Nhà xuất bản không thành công</span>";
                    return $alert;
                }
            }
           
        }

        public function show_publisher()
        {
            $query = "SELECT * FROM publisher order by pub_id desc";
            $result = $this->db->select($query);
            return $result;
        }

        public function update_publisher($pub_name, $pub_id)
        {
            #kiểm tra nhập hợp lệ 
            $pub_id = $this->fm->validation($pub_id);
            $pub_name = $this->fm->validation($pub_name);
            #kết nốt database
            $pub_id = mysqli_real_escape_string($this->db->link, $pub_id);
            $pub_name = mysqli_real_escape_string($this->db->link, $pub_name);

           
            if(empty($pub_name)) {
                $alert = "<span class='error'>Tên Nhà xuất bản không được để trống</span>";
                return $alert;
            } else {               
                $query = "UPDATE publisher SET pub_name = '$pub_name' WHERE pub_id = '$pub_id'";
                $result= $this->db->update($query);

                if($result) {
                    $alert = "<span class='success'>Sửa Nhà xuất bản thành công</span>";
                    return $alert;
                } else {
                    $alert = "<span class='error'>Sửa Nhà xuất bản không thành công</span>";
                    return $alert;
                }
            }
        }

        public function del_publisher($del_id)
        {
            $query = "DELETE FROM publisher WHERE pub_id = '$del_id'";
            $result = $this->db->delete($query);
            if($result) {
                $alert = "<span class='success'>Xóa Nhà xuất bản thành công</span>";
                return $alert;
            } else {
                $alert = "<span class='error'>Xóa Nhà xuất bản không thành công</span>";
                return $alert;
            }
        }

        public function getpubbyId($pub_id)
        {
            $query = "SELECT * FROM publisher WHERE pub_id = '$pub_id'";
            $result = $this->db->select($query);
            return $result;
        }

    }
?>