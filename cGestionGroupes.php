<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use modele\dao\GroupeDAO;
use modele\metier\Groupe;
use modele\dao\Bdd;

require_once __DIR__ . '/includes/autoload.php';
Bdd::connecter();

include("includes/_gestionErreurs.inc.php");
//include("includes/gestionDonnees/_connexion.inc.php");l
//include("includes/gestionDonnees/_gestionBaseFonctionsCommunes.inc.php");
// 1ère étape (donc pas d'action choisie) : affichage du tableau des 
// établissements 
if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'initial';
}

$action = $_REQUEST['action'];

// Aiguillage selon l'étape
switch ($action) {
    case 'initial' :
        include("vues/Groupes/vObtenirGroupes.php");
        break;
    case 'detailGroupes':
        $id = $_REQUEST['id'];
        include("vues/Groupes/vObtenirGroupes.php");
        break;

    case 'demanderCreerGroupes':
        include("vues/Groupes/vObtenirGroupes.php");
        break;

    case 'demanderModifierGroupes':
        $id = $_REQUEST['id'];
        include("vues/Groupes/vObtenirGroupes.php");
        break;

}


// Fermeture de la connexion au serveur MySql
Bdd::deconnecter();
