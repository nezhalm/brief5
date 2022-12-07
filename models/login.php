<?php 
class login {
    function loginAdmin($nom_client,$password){
    $test = new DB;
    $conn = $test->DB();
    $admin = $conn->prepare("SELECT * FROM admin WHERE nom_client= ? and password= ?");
    $admin->execute([$nom_client,$password]);
    $row =  $admin->fetch();
    if(isset($row)){
    $_SESSION['admin'] = $nom_client;
    header("Location: ../view/dachBoard.php");
    }else{
    echo '<div class="user">incorrect</div>';
    }
}
}

?>
