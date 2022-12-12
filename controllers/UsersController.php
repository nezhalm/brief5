<?php 
class UsersController {
   public function register(){
        if(isset($_POST['submit'])){
                $options = [ 'cost'=>12 ];
                $password = password_hash($_POST['password'],PASSWORD_BCRYPT,$options);
                $data = array(
                     'nom_client' =>$_POST['nom_client'],
                     'mail' =>$_POST['mail'],
                     'password' => $password ,
                );
               
            $result = User::createUser($data);
            if($result ==='ok'){
                session::set('success','le compte est creer avec succes');
                Redirect::to('login');
            }else{
                echo $result;
            }
        }
    }


    ///////////////////////////////////////////

    public function authentifier(){
        if(isset($_POST['submit'])){
             $data['nom_client']=$_POST['nom_client'];
             $data['password']=$_POST['password'];
            $result = User::login($data);
            if($result->nom_client === $_POST['nom_client'] &&  $result->password === $_POST['password'] && $result->is_admin == 1){
                $_SESSION['logged'] = true;
                $_SESSION['nom_client'] = $result->nom_client;
                Redirect::to('home');
            }
            else{
                session::set('error','nom ou mot de pass incorrect');
            
                Redirect::to('login');
            }
         } 
    }
}
//$result->nom_client === $_POST['nom_client'] &&
?>