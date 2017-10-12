<?php

namespace modele\metier;

/**
 * Description of Groupe
 * un groupe musical se produisant au festival
 * @author prof
 */
class Lieu {

    /**
     * identifiant du groupe ("gxxx")
     * @var string
     */
    private $id;

    /**
     * nom du groupe
     * @var string
     */
    private $nomLieu;

    /**
     * nom du responsable du groupe
     * @var string 
     */
    private $adresseLieu;


    /**
     * effectif du groupe
     * @var integer
     */
    private $capaciteaccueil;

    
    function __construct($id, $nomLieu, $adresseLieu, $capaciteaccueil) {
        $this->id = $id;
        $this->nomLieu = $nomLieu;
        $this->adresseLieu = $adresseLieu;
        $this->capaciteaccueil = $capaciteaccueil;
    }

    function getId() {
        return $this->id;
    }

    function getNomLieu() {
        return $this->nomLieu;
    }

    function getAdresseLieu() {
        return $this->adresseLieu;
    }

    function getCapaciteaccueil(){
        return $this->capaciteaccueil;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNomLieu($nomLieu) {
        $this->nomLieu = $nomLieu;
    }

    function setAdresseLieu($adresseLieu) {
        $this->adresseLieu = $adresseLieu;
    }

    function setCapaciteaccueil($capaciteaccueil) {
        $this->capaciteaccueil = $capaciteaccueil;
    }

}