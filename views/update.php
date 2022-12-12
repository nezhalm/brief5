<?php


require_once './views/includes/header.php';
require_once './autoload.php';

if (isset($_POST['id'])) {
    $exitbijoux = new BijouxController();
    $bijoux =  $exitbijoux->getOneBijoux();
}

if (isset($_POST['submit'])) {
    // echo 'jhjkhjkhjkh jhjk hkhjk hjkh jkh jkh jk k j h';
    // die();
    $exit = new BijouxController();
    $exit->updateBijoux();
}

?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-body bg-light">
                    <a href="<?php echo BASE_URL; ?>" class="btn btn-sm btn-secondery mr-2 mb-2">
                        <i class="fa fa-home"></i>
                    </a>
                    <div class="form">
                        <!-- <a href="../gestion.php?id=" class="back_btn"><i class='bx bx-arrow-back'></i></a> -->
                        <h2>modifier un produit</h2>

                        <form enctype="multipart/form-data"  method="post">
                            <div>
                                <label class="form-text">nom du produit</label>
                                <input class="form-control" type="text" name="nom_produit" value="<?php echo $bijoux->nom_produit;  ?>">
                                <input type="hidden" name="id" value="<?php echo $bijoux->id;?>">

                            </div>
                            <label class="form-text">prix</label>
                            <input class="form-control" type="text" name="prix" value="<?php echo $bijoux->prix; ?>">
                            <label class="form-text">quantité</label>
                            <input class="form-control" type="number" name="quantite" value="<?php echo $bijoux->quantite; ?>">
                            <label class="form-text">image
                                <img style="width: 60px;" src="./image/<?=$bijoux->image?>" alt="img">
                                <input class="form-control" id="add_img_input" name='image' type="file" accept="image/png, image/jpg, image/gif, image/jpeg" value="<?= $bijoux->image ?>" />
                            </label>

                            <button name="submit" class="btn btn-primary mt-3 ">modifier</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</body>