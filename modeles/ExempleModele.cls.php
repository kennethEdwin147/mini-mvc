<?php

class ExempleModele extends AccesBd
{

    public function tout()
    {
        $sql = "SELECT  * FROM categorie";
        return $this->lireTout($sql);
    }

    public function un()
    {
        $sql = "";
        return $this->lireUn($sql);
        # code...
    }



}