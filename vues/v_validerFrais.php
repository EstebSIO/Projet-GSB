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
    <div class="col-md-4">
        <select id="lstMois" name="lstMois" class="form-control">
            
        </select>
    </div>
</div>
<script type="text/javascript">
    var visiteur = document.getElementById("lstVisiteur");
    visiteur.addEventListener('change', function() {
          hydrater();
      });

    function hydrater(){  
        var idVisiteur = document.getElementById("lstVisiteur").value;
        var lstMois = document.getElementById("lstMois");
        lstMois.innerHTML='';
        var Mois = [Math.random(), Math.random(), Math.random()]<?php /* 
        $mois = $pdo->getLesMoisDisponibles();
        echo json_encode($mois);*/ ?>;


        for(var i = 0; i < Mois.length; i++) {
            var opt = Mois[i];
            var el = document.createElement("option");
            el.textContent = opt;
            el.value = opt;
            lstMois.appendChild(el);
        }
    }

</script>