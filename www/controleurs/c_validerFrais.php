<?php
/**
 * Gestion des frais
 * PHP Version 7
 *
 * @category  PPE
 * @package   GSB
 * @author    Sarah Delahaye <sarah@delahaye.pro>
 * @author Beth Sefer
*/
$mois = getMois(date('d/m/Y'));
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
switch ($action) {
    case 'visiteuretmois':
        $getVisiteur = $pdo->getLesVisiteurs();
        // on met les noms des visiteurs appeles avec la fonction getLesVisiteurs dans la variable getvisiteur
        $lesClesVisiteur = array_keys($getVisiteur);
        // on met les visiteurs sous forme de tableau dans lesCLesVisiteur
        $visiteurASelectionner = $lesClesVisiteur[0];
        // on met dans visiteurASelectionner le 1er visiteur de la liste
        $lesMois = getLes12DerniersMois($mois);
        // on demande les 12 derniers mois grace au mois actuel
        $lesClesMois = array_keys($lesMois);
        //on met les mois sous forme de tableau dans lesClesMois
        $moisASelectionner = $lesClesMois[0];
        //on met dans moisASelectionner le mois de la liste
        include 'vues/v_visiteuretmois.php';
        //chaque case est lie a une vue ici on a cree la vue v_visiteuretmois
        break;
        
}

/*
$idVisiteur = $_SESSION['idVisiteur'];
$mois = getMois(date('d/m/Y'));
$numAnnee = substr($mois, 0, 4);
$numMois = substr($mois, 4, 2);
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
switch ($action) {
case 'saisirFrais':
    if ($pdo->estPremierFraisMois($idVisiteur, $mois)) {
        $pdo->creeNouvellesLignesFrais($idVisiteur, $mois);
    }
    break;
case 'validerMajFraisForfait':
    $lesFrais = filter_input(INPUT_POST, 'lesFrais', FILTER_SANITIZE_STRING);
    if (lesQteFraisValides($lesFrais)) {
        $pdo->majFraisForfait($idVisiteur, $mois, $lesFrais);
    } else {
        ajouterErreur('Les valeurs des frais doivent être numériques');
        include 'vues/v_erreurs.php';
    }
    break;
case 'validerCreationFrais':
    $dateFrais = filter_input(INPUT_POST, 'dateFrais', FILTER_SANITIZE_STRING);
    $libelle = filter_input(INPUT_POST, 'libelle', FILTER_SANITIZE_STRING);
    $montant = filter_input(INPUT_POST, 'montant', FILTER_VALIDATE_FLOAT);
    var_dump($montant);
    valideInfosFrais($dateFrais, $libelle, $montant);
    if (nbErreurs() != 0) {
        include 'vues/v_erreurs.php';
    } else {
        $pdo->creeNouveauFraisHorsForfait(
            $idVisiteur,
            $mois,
            $libelle,
            $dateFrais,
            $montant
        );
    }
    break;
case 'supprimerFrais':
    $idFrais = filter_input(INPUT_GET, 'idFrais', FILTER_SANITIZE_STRING);
    $pdo->supprimerFraisHorsForfait($idFrais);
    break;
}
$lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($idVisiteur, $mois);
$lesFraisForfait = $pdo->getLesFraisForfait($idVisiteur, $mois);
require 'vues/v_listeFraisForfait.php';
require 'vues/v_listeFraisHorsForfait.php';
*/
