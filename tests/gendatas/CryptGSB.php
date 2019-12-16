<?php
require './fonctions.php';

$pdo = new PDO('mysql:host=localhost;dbname=gsb_frais', 'root', '');
$pdo->query('SET CHARACTER SET utf8');
HashmdpVisiteur($pdo);