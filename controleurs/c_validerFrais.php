<?php
/**
 * Gestion de l'affichage des frais
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

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
switch ($action) {
case 'selectionnerVisiteur':
    $lesVisiteurs = $pdo->getVisiteurs();
    $lesCles = array_keys($lesVisiteurs);
    $visiteurASelectionner = $lesCles[0];
    if (isset($_POST['idVisiteur'])){
        $lesMois = $pdo->getLesMoisEtat($_POST['idVisiteur'],'CL');}
    include 'vues/v_validerFrais.php';
    break;
}
