<?php
require_once 'includes/header.php';
require_once 'includes/footer.php';
require_once './autoload.php';
if(isset($_POST['submit'])){
     $newBijoux = new BijouxController();
// creer l'objet men lcontroller 
     $newBijoux->addBijoux();
// print_r($bijoux);
}


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
            <h2>Ajouter un produit</h2>
            <p class="erreur_message">
              
            </p>
            <form enctype="multipart/form-data" action="" method="POST">
                <label>Nom du produit</label>
                <input type="text" name="nom_produit" required>
                <label>prix</label>
                <input type="text" name="prix" required>
                <label>quantité</label>
                <input type="number" name="quantite" required>
                <label>image</label>
                <input id="add_img_input" name='image' type="file" accept="image/png, image/jpg, image/gif, image/jpeg" />
                <input type="submit" value="Ajouter" name="submit">
            </form>
        </div>
                </div>
             </div>
        </div>

    </div>

</div>

    
</body>