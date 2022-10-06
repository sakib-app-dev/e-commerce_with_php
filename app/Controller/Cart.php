<?php
include_once "DbConnection.php";
class Cart extends DbConnection
{
    public $conn;


    public function addToCart($data)
    {

        try {
            // $_SESSION['old'] = $data;

            // if (empty($data['product_id'])) {
            //     $_SESSION['errors']['product_id'] = 'Required';
            // } 


            // if (isset($_SESSION['errors'])) {
                
            //     return false;
            // }
            // print_r($_SESSION['old']['category_name']);
            // exit();

            // todo database insert
            // $p_id=$_GET['id'];
            $sql= "INSERT INTO carts (user_id, product_id,qty) VALUES (:u_id, :p_id,:p_qty)";
            $saveCategory= $this->conn->prepare($sql);
            $saveCategory->execute([
                'u_id' => '1',
                'p_id' => $_GET['id'],
                'p_qty' => $data['qty']
            ]);


            //session
            unset($_SESSION['old']);
            $_SESSION['message'] = 'Successfully Created';
            return true;
        } catch (Exception $th) {
            $_SESSION['errors']['sqlError'] = $th->getMessage();
        }

        
    

    }

    public function viewProduct()
    {
        $sql="SELECT * FROM carts ";
        $product= $this->conn->query($sql);
        $data=$product->fetchAll(PDO::FETCH_ASSOC);
        // echo ("<pre>");
        // print_r($data);
        // die();
        return $data;
    }

    public function CartProduct()
    {
        $id=$_SESSION['id'];
        $sql="SELECT * FROM carts WHERE user_id='$id' ";
        $category= $this->conn->query($sql);
        $data=$category->fetchAll(PDO::FETCH_ASSOC);

        // print_r($data);
        
        
        
        return $data;

    }
    public function UserProduct($data)
    {
        
        $sql="SELECT * FROM products WHERE id='$data' ";
        $category= $this->conn->query($sql);
        $data=$category->fetchAll(PDO::FETCH_ASSOC);

        // print_r($data);
        
        
        
        return $data;

    }
    public function editProduct($id)
    {

        $sql="SELECT * FROM products WHERE id=$id ";
        $category= $this->conn->query($sql);
        $data=$category->fetch(PDO::FETCH_ASSOC);
        
        return $data;

    }
    public function updateProduct($data)
    {
        
        $id= $_GET['id'];

        
        $uploadDir="./../../assets/users/images/";
        $file=$_FILES['image']['name'];
        $renameFile=date('Y-m-d').time().$file;
        $uploadFile=$uploadDir . $renameFile;

        move_uploaded_file($_FILES['image']['tmp_name'],$uploadFile );



        $sql="UPDATE products SET product_name=:p_name, product_details=:p_details,price=:p_price,qty=:p_qty,image=:p_img,category=:p_category WHERE id=:id";
        $saveCategory= $this->conn->prepare($sql);
        $saveCategory->execute([
            'p_name' => $data['product_name'],
            'p_details' => $data['product_details'],
            'p_price' => $data['price'],
            'p_qty' => $data['qty'],
            'p_img' => $uploadFile,
            'p_category' => $data['category'],
            'id' => $id
        ]);
    }
    public function deleteProduct(int $id)
    {
      
        $delete = $this->conn->prepare("DELETE FROM  products where id=:p_id");
        $delete->execute([
            'p_id' => $id
        ]);
    }
}

?>
