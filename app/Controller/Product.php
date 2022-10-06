<?php
include_once "DbConnection.php";
class Product extends DbConnection
{
    public $conn;


    public function createProduct($data)
    {


        $uploadDir="./../../assets/users/images/";
        $file=$_FILES['image']['name'];
        $renameFile=date('Y-m-d').time().$file;
        $uploadFile=$uploadDir . $renameFile;

        move_uploaded_file($_FILES['image']['tmp_name'],$uploadFile );
      
        try {
            $_SESSION['old'] = $data;



            if (empty($data['product_name'])) {
                $_SESSION['errors']['product_name'] = 'Required';
            } 


            if (isset($_SESSION['errors'])) {
                
                return false;
            }
            // print_r($_SESSION['old']['category_name']);
            // exit();

            // todo database insert

            $sql= "INSERT INTO products (product_name, product_details,price,qty,image,category) VALUES (:p_name, :p_details,:p_price,:p_qty,:p_img,:category) ";
            $saveCategory= $this->conn->prepare($sql);
            $saveCategory->execute([
                'p_name' => $data['product_name'],
                'p_details' => $data['product_details'],
                'p_price' => $data['price'],
                'p_qty' => $data['qty'],
                'p_img' => $uploadFile,
                'category'=> $data['category']
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
        $sql="SELECT * FROM products ";
        $product= $this->conn->query($sql);
        $data=$product->fetchAll(PDO::FETCH_ASSOC);
        // echo ("<pre>");
        // print_r($data);
        // die();
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
