<?php

class CategorieModele extends AccesBd
{

    public function tout()
    {
        $sql = "SELECT  * FROM categorie";
        return $this->lireTout($sql);

    }



}