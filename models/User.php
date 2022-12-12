<?php 
class User{
    static public function createUser($data){
        $stmt = DB::connect()->prepare('INSERT INTO  user (nom_client,mail,password) VALUES (:nom_client,:mail,:password)');

        $stmt->bindParam(':nom_client', $data['nom_client']);
        $stmt->bindParam(':mail', $data['mail']);
        $stmt->bindParam(':password', $data['password']);
       
        if($stmt->execute()){
            return 'ok'; 
        }else{
            return 'error';
        }
    }
    static public function login($data){
    $id_client = $data['nom_client'];
    try{
        $query = 'SELECT * FROM user where nom_client=:nom_client ';
        $stmt=DB::connect()->prepare($query);
        $stmt->execute(array(":nom_client" => $id_client));
        $user = $stmt->fetch(PDO::FETCH_OBJ);
        return $user;
        if($stmt->execute()){
            return 'ok';
        }
      }catch(PDOExeption $e){
        echo 'erreur'.$e->getMessage();
      }
    }
}




?>
