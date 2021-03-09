<?php
/**
 * Vue Erreurs
 *PHP Version 7
 * @category  PPE
 * @package   GSB
 * @author    Sarah Delahaye <sarah@delahaye.pro>
 * @author Beth Sefer
 */
?>
<div class="alert alert-danger" role="alert">
    <?php
    foreach ($_REQUEST['erreurs'] as $erreur) {
        echo '<p>' . htmlspecialchars($erreur) . '</p>';
    }
    ?>
</div>