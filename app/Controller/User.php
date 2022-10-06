<?php
include_once "DbConnection.php";
class User extends DbConnection
{
    public $conn;

    public function createUser($data)
    {

//   echo"<pre>";
//         print_r($data);
//         exit();
       

        $sql="INSERT INTO users (first_name,last_name,phone,email,address,gender,password) VALUES (:first_name, :last_name, :phone, :email,:address,:gender,:password) ";
            $saveUser= $this->conn->prepare($sql);
            $saveUser->execute([
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'phone' => $data['phone'],
                'email' => $data['email'],
                'address' => $data['address'],
                'gender' => $data['gender'],
                'password' => md5($data['password']),
            ]);

            return true;
      
      
        // try {
        //     $_SESSION['old'] = $data;



        //     if (empty($data['category_name'])) {
        //         $_SESSION['errors']['category_name'] = 'Required';
        //     } 


        //     if (isset($_SESSION['errors'])) {
              
        //         return false;
        //     }
            // print_r($_SESSION['old']['category_name']);
            // exit();

            // todo database insert
/*
            $sql="INSERT INTO users (first_name,last_name,phone,email,address,gender,password) VALUES (:first_name, :last_name, :phone, :email,:address,:gender,:password) ";
            // print_r($sql);
            // exit();
            $saveUser= $this->conn->prepare($sql);
            $saveUser->execute([
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'phone' => $data['phone'],
                'email' => $data['email'],
                'address' => $data['address'],
                'gender' => $data['gender'],
                'password' => $data['password'],
            ]);

            */

            


        //     //session
        //     unset($_SESSION['old']);
        //     $_SESSION['message'] = 'Successfully Created';
        //     return true;
        // } catch (Exception $th) {
        //     $_SESSION['errors']['sqlError'] = $th->getMessage();
        // }

        
    

    }


    public function UserLogin($data){

        $email=$data["email"];
        $password=md5($data["password"]);
        // echo $email .$password;
        // exit();
        $sql="SELECT * FROM users where email='$email' AND password='$password' ";
        $user= $this->conn->query($sql);
        $data=$user->fetch(PDO::FETCH_ASSOC);
        // echo $data['phone'];
        // exit();
        
        return $data;
    }

    public function viewUser()
    {
        $sql="SELECT * FROM users ";
        $users= $this->conn->query($sql);
        $data=$users->fetchAll(PDO::FETCH_ASSOC);
        // echo ("<pre>");
        // print_r($data);
        // die();
        return $data;
    }

    public function editUser($id)
    {

        $sql="SELECT * FROM users WHERE id=$id ";
        $category= $this->conn->query($sql);
        $data=$category->fetch(PDO::FETCH_ASSOC);
        
        return $data;

    }
    public function updateUser($data)
    {
        
        $id= $_GET['id'];

        $sql="UPDATE categories SET category_name=:c_name, description=:c_description WHERE id=:id";
        $saveCategory= $this->conn->prepare($sql);
        $saveCategory->execute([
            'c_name' => $data['category_name'],
            'c_description' => $data['category_discription'],
            'id' => $id
        ]);
    }
    public function deleteUser(int $id)
    {
      
        $delete = $this->conn->prepare("DELETE FROM  categories where id=:c_id");
        $delete->execute([
            'c_id' => $id
        ]);
    }
}

?>
