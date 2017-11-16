<?php
namespace modele\dao;
use modele\metier\Representation;
use modele\metier\Groupe;
use modele\dao\LieuDAO;
use modele\dao\GroupeDAO;
use \PDO;

class RepresentationDAO {

    
    protected static function enregVersMetier(array $enreg) {
        $id = $enreg['ID_REP'];
        $idLieu = $enreg['ID_LIEU'];
        $idGroupe = $enreg['ID_GROUPE'];
        $dateRep = $enreg['DATE_REP'];
        $heureDebut = $enreg['HEURE_DEB'];
        $heureFin = $enreg['HEURE_FIN'];
       
        $objetLieu = LieuDAO::getOneById($idLieu);
        $objetGroupe = GroupeDAO::getOneById($idGroupe);
  
        $uneRepresentation = new Representation($id, $objetLieu, $objetGroupe, $dateRep, $heureDebut, $heureFin);
        return $uneRepresentation;
    }
    
 
    protected static function metierVersEnreg(Representation $uneRepresentation, PDOStatement $stmt) {

        $stmt->bindValue(':id', $uneRepresentation->getId());
        $stmt->bindValue(':idlieu', $uneRepresentation->getLeLieu());
        $stmt->bindValue(':idgroupe', $uneRepresentation->getLeGroupe());
        $stmt->bindValue(':daterep', $uneRepresentation->getDateRep());
        $stmt->bindValue(':heuredebut', $uneRepresentation->getHeureDebut());
        $stmt->bindValue(':heurefin', $uneRepresentation->getHeureFin());
    }
    
    public static function getAll() {
        $lesObjets = array();
        $requete = "SELECT * FROM Representation";
        $stmt = Bdd::getPdo()->prepare($requete);
        $ok = $stmt->execute();
        if ($ok) {

            while ($enreg = $stmt->fetch(PDO::FETCH_ASSOC)) {
  
                $lesObjets[] = self::enregVersMetier($enreg);
            }
        }
        return $lesObjets;
    }

    public static function getOneById($id) {
        $objetConstruit = null;
        $requete = "SELECT * FROM Representation WHERE ID_REP = :id";
        $stmt = Bdd::getPdo()->prepare($requete);
        $stmt->bindParam(':id', $id);
        $ok = $stmt->execute();

        if ($ok && $stmt->rowCount() > 0) {
            $objetConstruit = self::enregVersMetier($stmt->fetch(PDO::FETCH_ASSOC));
        }
        return $objetConstruit;
    }
    
    
}