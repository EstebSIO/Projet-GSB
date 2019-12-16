<?php
/**
 * Vue ValiderFrais
 *
 * PHP Version 7
 *
 * @category  PPE
 * @package   GSB
 * @author    Réseau CERTA <contact@reseaucerta.org>
 * @author    José GIL <jgil@ac-nice.fr>
 * @copyright 2017 Réseau CERTA
 * @license   Réseau CERTA
 * @version   GIT: <0>
 * @link      http://www.reseaucerta.org Contexte « Laboratoire GSB »
 */

?>
<h2>Validation des fiches de frais</h2>
<div class="row">
    <div class="col-md-4">
        <h3>Sélectionner un visiteur : </h3>
    </div>
    <div class="col-md-4">
        <select id="lstVisiteur" name="lstVisteur" class="form-control">
            <option value="">--Selection--</option>
            <?php
            foreach ($lesVisiteurs as $unVisiteur) {
                $idVisiteur = $unVisiteur['id'];
                $nomVisiteur = $unVisiteur['nom'];
                $prenomVisiteur = $unVisiteur['prenom'];
                if ($idVisiteur == $visiteurASelectionner) {

                   /* ?>
                    <option selected value="<?php echo $idVisiteur ?>">
                        <?php echo $nomVisiteur . " " . $prenomVisiteur ?> </option>
                    <?php
                } else {
                    */?>
                    <option value="<?php echo $idVisiteur ?>">
                        <?php echo $nomVisiteur . " " . $prenomVisiteur ?> </option>
                    <?php
                }
            }
            ?>    
        </select>
    </div>
    
    <div class="col-md-4">
        <h3>Sélectionner un mois : </h3>
    </div>
    <div class="col-md-4" id="containerMois">
        <select id="lstMois" name="lstMois" class="form-control">
            <?php
            if(is_array($lesMois)){
                foreach ($lesMois as $unMois) {
                    $idMois = $unMois['mois'];
                    $mois = $unMois['numMois'];
                    $annee = $unMois['numAnnee'];
                       ?>
                        <option value="<?php echo $idMois ?>">
                            <?php echo $mois . "/" . $annee ?> </option>
                        <?php
                }
            }?>
        </select>
    </div>
</div>
<script src="./js/remplirMois.js"></script>