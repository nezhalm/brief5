<?php 
class Bijoux {
    static public function getAll(){
        $stmt = DB::connect()->prepare('SELECT * FROM bijoux');
        $stmt->execute();
         return $stmt->fetchAll();
    }
    static public function add($data){
        $stmt = DB::connect()->prepare('INSERT INTO  bijoux(nom_produit,quantite,prix,image) VALUES (:nom_produit,:quantite,:prix,:image)');

        $stmt->bindParam(':nom_produit', $data['nom_produit']);
        $stmt->bindParam(':prix', $data['prix']);
        $stmt->bindParam(':quantite', $data['quantite']);
        // $stmt->bindParam(':image', "hghg");
        $stmt->bindParam(':image', $data['image']);
        if($stmt->execute()){
            return 'ok'; 
        }else{
            return 'error';
        }
       
    }
    static public function getBijoux($data){
        $id_produit = $data['id_produit'];
        try{
        $query = 'SELECT * FROM bijoux WHERE id_produit=:id_produit';
        $stmt=DB::connect()->prepare($query);
        // baramettre binding
        $stmt->execute(array(":id_produit"=>$id_produit));
        //on le recupere sous forme dun object
        $bijoux=$stmt->fetchAll(PDO::FETCH_OBJ);
        return $bijoux; 

        }catch(PDOException $e){
            echo 'erreur' . $e->getMessage();
        }
    }
}

?>