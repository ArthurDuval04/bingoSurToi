<?php 
    include '../modele/DAOEtudiantAD.php';
    include '../entityAD/classEtudiant.php';
    $etu1 = new Etudiant('2','tata','toto');
    var_dump($etu1);
    // test update etudiant
    var_dump(updateUnEtudiantAD($etu1));

?>