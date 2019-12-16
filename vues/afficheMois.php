<?php
$lesMois = json_encode($pdo->getLesMoisDisponibles($_POST['idVisiteur']));
                foreach ($lesMois as $unMois) {
                    $idMois = $unMois['mois'];
                    $mois = $unMois['numMois'];
                    $annee = $unMois['numAnnee'];
                       ?>
                        <option value="<?php echo $idMois ?>">
                            <?php echo $mois . "/" . $annee ?> </option>
                        <?php
                }
