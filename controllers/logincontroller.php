<?php 
class loginController {
    function loginController(){
        if(isset($_POST['submit'])){
            if(isset($_POST['admin'])){

                $email = $_POST['nom_client'];
                $password = $_POST['password'];
                $login = new login;
                $login->loginAdmin($email,$password);
            }else{
                $email = $_POST['nom_client'];
                $password = $_POST['password'];
                $login = new login;
                $login->loginUser($email,$password);
            }
        }
    }
}
?>