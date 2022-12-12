
<?php
require_once 'includes/header.php';
require_once './autoload.php';

if(isset($_POST['submit'])){
    $loginuser = new UsersController();
   $loginuser-> authentifier();
}

?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-6 mx-auto">
			<?php include('./views/includes/alert.php');?>
             <div class="card">
				<div class="card-header">
					<h3 class="text-center">Connexion</h3>
				</div>
              <div class="card-body bg-light">
             
            <form  method="post" class="mr-1" >
             
               <div class="form-group">
				    <input type="text" name="nom_client" placeholder="nom et prenom" class="form-control">
			   </div>
               
			   
			   <div class="form-group">
				    <input type="password" name="password" placeholder="mot de passe" class="form-control">
			   </div>
			   <button name="submit" class="btn btn-sm btn-primary">Connexion</button>
                
            </form>

         </div>
		 <div class="card-footer">
			<a href=" <?php echo BASE_URL ;?>register" class="btn btn-link">Inscription</a>
		 </div>
                </div>
             </div>
        </div>

    </div>

<!-- </div> -->

    
</body>