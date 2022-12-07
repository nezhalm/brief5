<?php
// require_once './controllers/HomeController.php';
// require_once('./controllers/bijouxcontroller.php');
require_once('./views/includes/header.php');
require_once('./autoload.php');
$home = new HomeController();
$pages = ['home', 'add', 'update', 'delete','login'];


if(isset($_GET['page'])){
    if(in_array($_GET['page'],$pages)){
        $page = $_GET['page'];
        $home->index($page);
        $data = new BijouxController();
        $bijoux = $data->GetAllBijoux();
        var_dump($bijoux);
    }
    else{
    include('views/includes/404.php');
    }
}else{
    $home->index('home');
}
?>

<?php 
require_once('./views/includes/footer.php');
?>