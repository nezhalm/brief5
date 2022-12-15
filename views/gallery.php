<?php
$_SESSION['login'] = false;
require_once('./controllers/UsersController.php');
include_once('./controllers/bijouxcontroller.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- style css link  -->
    <link rel="stylesheet" href="./views/stylegallery.css?v=<?php echo time(); ?>">

    <title>PlayTech - Home</title>

    <!-- google font  link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Poppins:ital,wght@0,100;0,200;0,300;1,300;1,400;1,800;1,900&display=swap" rel="stylesheet">

    <!-- font awesome link "icone" -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- boxicon link -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!-- bootstrap link -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- meta data include -->

</head>

<body>

    <?php
    include_once "./views/includes/navbar.php";
       include "./script.php";
    ?>
    
       <?php foreach ($bijouxx as $bijoux): ?>
   <div class="roW">
    
                    <img src="./image/<?= $bijoux['image']; ?>" alt="gg">
                    <div class="menu-text">
                        <div class="menu-left">
                            <h4><?= $bijoux['nom_produit'];  ?></h4>
                        </div>
                        <div class="menu-right">
                            <h5><?=$bijoux['prix']; ?>DH</h5>
                        </div>
                    </div>
                   

                    <div class="foteerPlat">
                        <div class="addPlat">
                            <a href="./admin/modifier_produit.php?id=<?= $row['id_produit'] ?>"><i class='bx bxs-edit'></i></a>
                            <a href="./admin/supprimer_produit.php?id=<?= $row['id_produit'] ?>" onclick="return checkdelet('<?= $row['libelle_produit'] ?>')"><i class='bx bxs-trash-alt'></i></a>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>



    


    <a href="#intro" class="sctrooL">
        <i class='bx bxs-up-arrow-circle bx-md'></i>
    </a>
    <?php
    include_once "./views/includes/footer.php";
    ?>
  
</body>

</html>