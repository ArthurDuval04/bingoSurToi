<?php
    include '../entityAD/classEtudiant.php';

    $etu = new Etudiant('2','Jean','Dupont');
    
    var_dump($etu);

 

    echo $etu->recuperePrenom();
    $etu->donnerPrenom("José");
    


?>