<?php
class BijouxController{
    public function GetAllBijoux(){//function
        $bijoux = Bijoux::getAll();
        return $bijoux ;
    }
    public function addBijoux(){
        if(isset($_POST['submit'])){
            $data = array(
                'nom_produit' => $_POST['nom_produit'],
                'prix' => $_POST['prix'],
                'quantite' => $_POST['prix'],
                'image' => $_FILES['image']['name'],
               
            );
            $result = Bijoux::add($data);
            if($result === 'ok'){
                header('location:'. BASE_URL);
            }else{
                echo $result;
            }
        }

}

public function getOneBijoux(){
    if(isset($_POST['id'])){
        $data = array(
            'id_produit'=>$_POST['id_produit']
        );
    
        $bijoux = Bijoux::getBijoux($data);
        return $bijoux;
    }
}
 


}
function updateBijoux(){
    if(isset($_POST['submit'])){ 
         $Bijoux = new BijouxController();
         // creer l'objet men lcontroller 
         $produit = $Bijoux->getOneBijoux();
        }   
}

?>