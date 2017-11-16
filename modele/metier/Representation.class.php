<?php
namespace modele\metier;


class Representation {
  
    
    private $id;
    private $leLieu;
    private $leGroupe;
    private $dateRep;
    private $heureDebut ;
    private $heureFin ;
    
    
    function __construct($id, Lieu $leLieu, Groupe $leGroupe, $dateRep, $heureDebut, $heureFin) {
        $this->id = $id;
        $this->leLieu = $leLieu;
        $this->leGroupe = $leGroupe;
        $this->dateRep = $dateRep;
        $this->heureDebut = $heureDebut;
        $this->heureFin= $heureFin;
        
    }
    
    function getId() {
        return $this->id;
    }
    function getLeLieu() {
        return $this->leLieu;
    }
    function getLeGroupe() {
        return $this->leGroupe;
    }
    function getDateRep() {
        return $this->dateRep;
    }
    function getHeureDebut() {
        return $this->heureDebut;
    }
    function getHeureFin() {
        return $this->heureFin;
    }
    function setId($id) {
        $this->id = $id;
    }
    function setLeLieu(Lieu $leLieu) {
        $this->leLieu = $leLieu;
    }
    function setLeGroupe(Groupe $leGroupe) {
        $this->leGroupe = $leGroupe;
    }
    function setDateRep(Date $dateRep) {
        $this->dateRep = $dateRep;
    }
    function setHeureDebut(temps $heureDebut) {
        $this->heureDebut = $heureDebut;
    }
    function setHeureFin(temps $heureFin) {
        $this->heureFin = $heureFin;
    }
}