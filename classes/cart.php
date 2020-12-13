<?php 
    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath.'/../lib/database.php');
    include_once ($filepath.'/../helpers/format.php');
?>



<?php 
    class cart{

        private $db;
        private $fm;

        public function __construct()
        {
            $this->db = new Database();
            $this->fm = new Format();
        }
        
        public function add_to_Cart($quantity, $id)
        {
            $quantity = $this->fm->validation($quantity);
            $quantity = mysqli_real_escape_string($this->db->link, $quantity);
            $id = mysqli_real_escape_string($this->db->link, $id);
            $ses_id = session_id();

            $query = "SELECT * FROM book WHERE book_id = '$id'";
            $result = $this->db->select($query)->fetch_assoc();
            
            $img = $result['img'];
            $book_name = $result['book_name'];
            $price = $result['price'];

            $query_check_cart =   "SELECT * FROM cart WHERE book_id = '$id' AND ses_id = '$ses_id'";
            $query_check_cart = $this->db->select($query_check_cart);
            if(mysqli_num_rows($query_check_cart) > 0 ) {
                $msg = "<span class='error'> Sách này đã được thêm vào giỏ hàng rồi </span>";
                return $msg;
            } else {
                $query_insert = "INSERT INTO cart(book_id, ses_id, book_name, price, quantity, img) 
                VALUES('$id', '$ses_id', '$book_name', '$price', '$quantity', '$img')";

                $result_insert = $this->db->insert($query_insert);

                if($result_insert) {
                    header('location:cart_book.php');    
                } else {
                    header('location:404.php');       
                }   
            }
            
        }

        public function getBookCart()
        {
            $ses_id = session_id();
            $query = "SELECT * FROM cart WHERE ses_id = '$ses_id'";
            $result = $this->db->select($query);
            return $result;
        }

        public function update_quantity_cart($quantity, $cart_id) 
        {
            $quantity = mysqli_real_escape_string($this->db->link, $quantity);
            $cart_id = mysqli_real_escape_string($this->db->link, $cart_id);

            $query = "UPDATE cart SET 
            quantity = '$quantity'
            WHERE cart_id = '$cart_id'";

            $result = $this->db->update($query);

            if($result) {
                header("location:cart_book.php");
               
            } else {
                $msg = "<span class='error'> Số lượng sách không được cập nhật </span>";
                return $msg;
            }
        }

        public  function del_book_cart($delcart_id)
        {
            $delcart_id = mysqli_real_escape_string($this->db->link, $delcart_id);
            $query = "DELETE FROM cart WHERE cart_id = '$delcart_id'";
            $result = $this->db->delete($query);
            if($result) {
                header("location:cart_book.php");   
            } else {
                $alert = "<span class='error'>Xóa sách trpng giỏ hàng không thành công</span>";
                return $alert;
            }
        }
        public function check_cart()
        {
            $ses_id = session_id();
            $query = "SELECT * FROM cart WHERE ses_id = '$ses_id'";
            $result = $this->db->select($query);
            return $result;
        }
        public function del_all_data_cart()
        {
            $ses_id = session_id();
            $query = "DELETE FROM cart WHERE ses_id = '$ses_id'";
            $result = $this->db->select($query);
            return $result;
        }
    }
?>