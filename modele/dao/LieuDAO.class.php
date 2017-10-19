<?php

namespace modele\dao;

use modele\metier\Lieu;
use PDO;


class LieuDAO {


    protected static function enregVersMetier(array $enreg) {
        $id = $enreg['id'];
        $nomLieu = $enreg['nom'];
        $adresseLieu = $enreg['adr'];
        $capaciteaccueil = $enreg['capacite'];
        $unLieu = new Groupe($id, $nomLieu, $adresseLieu, $capaciteaccueil);

        return $unLieu;
    }


    public static function getAll() {
        $lesObjets = array();
        $requete = "SELECT * FROM Lieu";
        $stmt = Bdd::getPdo()->prepare($requete);
        $ok = $stmt->execute();
        if ($ok) {
            // Tant qu'il y a des enregistrements dans la table
            while ($enreg = $stmt->fetch(PDO::FETCH_ASSOC)) {
                
                $lesObjets[] = self::enregVersMetier($enreg);
            }
        }
        return $lesObjets;
    }

 
    public static function getOneById($id) {
        $objetConstruit = null;
        $requete = "SELECT * FROM Lieu WHERE id = :id";
        $stmt = Bdd::getPdo()->prepare($requete);
        $stmt->bindParam(':id', $id);
        $ok = $stmt->execute();
        // attention, $ok = true pour un select ne retournant aucune ligne
        if ($ok && $stmt->rowCount() > 0) {
            $objetConstruit = self::enregVersMetier($stmt->fetch(PDO::FETCH_ASSOC));
        }
        return $objetConstruit;
    }



}
