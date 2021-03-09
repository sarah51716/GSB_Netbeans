<?php
/**
 * Gestion de l'accueil
 *
 * PHP Version 7
 *
 * @category  PPE
 * @package   GSB
 * @author    Sarah Delahaye <sarah@delahaye.pro>
 * @author    Beth Sefer
 */

if ($comptableEstConnecte) {
    include 'vues/v_accueil_comptable.php';
} else if ($visiteurEstConnecte){
    include 'vues/v_accueil_visiteur.php';
}
else {
    include 'vues/v_connexion.php';
}
