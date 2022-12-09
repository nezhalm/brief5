
<?php

require_once './autoload.php';
$data = new BijouxController();
$bijoux = $data->GetAllBijoux();
// print_r($bijoux);
?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-10 mx-auto">
             <div class="card">
              <div class="card-body bg-light">
                <a href="<?php echo BASE_URL;?>add">
                <i class="fa-regular fa-plus"></i>
              </a>
              <table class="table">
  <thead>
    <tr>
      <th scope="col">nom du produit</th>
      <th scope="col">prix</th>
      <th scope="col">quantite</th>
      <th scope="col">image</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>

    <?php foreach ($bijoux as $bijoux): ?>
    <tr>
      <th scope="row"><?php echo $bijoux['nom_produit']; ?></th>
      <td><?php echo $bijoux['prix']; ?></td>
      <td><?php echo $bijoux['quantite']; ?></td>
      <td><img src="image/uploade/<?= $bijoux['image'];?>" alt="img"></td>
      <td class="d-flex flex-row">
        <!-- form d'icon update  -->
           <form methode="post" class="mr-1" action="update">
            <!-- l'orsque on clic -> page update -->
                 <input type="hidden" name="id" value="<?php echo $bijoux['id_produit']; ?>">
                 <button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
           </form>
                   <!-- form d'icon delete  -->
                   <form methode="post" class="mr-1" action="delete">
                 <input type="hidden" name="id" value="<?php echo $bijoux['id_produit']; ?>">
                 <button class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
           </form>
      </td>
    </tr>
    <?php endforeach;?>




                  </tbody>
               </table>
              </div>
             </div>
        </div>

    </div>

</div>