<?php
class BijouxController{
    public function GetAllBijoux(){//function
        $bijoux = Bijoux::getAll();
        return $bijoux ;
    }
}
?>