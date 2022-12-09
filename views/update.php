<?php
require_once 'includes/header.php';
require_once 'includes/footer.php';
require_once 'autoload.php';
require_once('controllers/bijouxcontroller.php');

$produits = new BijouxController();
$produit = $produits->getOneBijoux(); 

?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-10 mx-auto">
             <div class="card">
              <div class="card-body bg-light">
                <a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-secondery mr-2 mb-2">
                <i class="fa fa-home"></i>
              </a>
              <div class="form">
            <!-- <a href="../gestion.php?id=" class="back_btn"><i class='bx bx-arrow-back'></i></a> -->
            <h2>modifier un produit</h2>
            <p class="erreur_message">
             
            </p>
            <form enctype="multipart/form-data" action="" method="POST">
                <label>Nom du produit</label>
                <input type="text" name="nom_produit" value="<?php echo $produit ?>" required>
                <label>prix</label>
                <input type="text" name="prix" value="<?php echo $produit->prix; ?>" required>
                <label>quantité</label>
                <input type="number" name="quantite" value="<?php echo $produit->quantite; ?>" required>
                <label>image</label>
                <img src="image/uploade/<?= $bijoux['image'];?>" alt="img">
                <input id="add_img_input" name='image' type="file" accept="image/png, image/jpg, image/gif, image/jpeg" value="<?php echo $produit->image; ?>"/>
                <input type="submit" value="modifier" name="submit">
            </form>
        </div>
                </div>
             </div>
        </div>

    </div>

</div>

    
</body>