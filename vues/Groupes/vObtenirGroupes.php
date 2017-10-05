<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

        <?php

        use modele\dao\GroupeDAO;
        use modele\dao\AttributionDAO;
        use modele\dao\Bdd;
       
require_once __DIR__ . '/../../includes/autoload.php';
 Bdd::connecter();

        include("includes/_debut.inc.php");

        echo "
<br>
<table width='40%' cellspacing='0' cellpadding='0' class='tabNonQuadrille'>
   <tr class='enTeteTabNonQuad'>
      <td colspan='4'><strong>Groupes</strong></td>
   </tr>";
        $lesGroupes = GroupeDAO::getAll();

        foreach ($lesGroupes as $unGroupe) {
            $id = $unGroupe->getId();
            $nom = $unGroupe->getNom();
            echo "
      <tr class='ligneTabNonQuad'> 
         <td width='15%'>$id</td>
         <td width='33%'>$nom</td>"
         
        ;
//            <td width='26%' align='center'>
//            <a href='cGestionGroupes.php?action=detailGp&id=$id'>
//         Modifier</a>
         

            // S'il existe déjà des attributions pour le groupe, il faudra
            // d'abord les supprimer avant de pouvoir supprimer le groupe
//    if (!existeAttributionsGroupe($connexion, $id)) {
//            $lesAttributionsDeCeGroupe = AttributionDAO::getAllByIdGp($id);
//            if (count ($lesAttributionsDeCeGroupe) == 0) {
//                echo "
//            <td width='26%' align='center'>
//            <a href='cGestionGroupes.php?action=demanderSupprimerGp&id=$id'>
//            Supprimer</a></td>";
//            } else {
//                echo "<td width='26%'>&nbsp; </td>";
//            }
            echo "               
    </tr>";
        }
        echo "    
</table><br>
<a href='cGestionGroupes.php?action=demanderCreerGp'>
Création d'un groupe</a>";

        include("includes/_fin.inc.php");
        ?>
   
