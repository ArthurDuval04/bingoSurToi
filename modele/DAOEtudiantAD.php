<?php 
    
    include '../global/config.php';
    include '../libs/pdo2.php';
    function getLesEtudiantsAD(){
        $pdo =PDO2::getInstance();
        $etu=$pdo->query("SELECT * FROM etudiant");
        $LesEtudiants=$etu->fetchAll();
        return $LesEtudiants;
    }
    function getUnEtudiantAD($id){
        $pdo =PDO2::getInstance();
    
        $etu=$pdo->prepare("SELECT * FROM etudiant WHERE id=:id");
        $etu->bindValue(':id',$id);
        $etu->execute();
        $LesEtudiants=$etu->fetchObject();
        return $LesEtudiants;
    }

    function addUnEtudiantAD($nomEtu,$prenomEtu){
        $pdo =PDO2::getInstance();
        $etu=$pdo->prepare("INSERT INTO etudiant(nom, prenom) VALUES (:nom,:prenom)");
        $etu->bindValue(':nom',$nomEtu);
        $etu->bindValue(':prenom',$prenomEtu);
        if($etu->execute()){
           $resultat =  $prenomEtu.' '.$nomEtu.' créé';
        }
        else $resultat ='Erreur';

        return $resultat;
    }
    function updateUnEtudiantAD($unObjetEtudiant){

        $pdo =PDO2::getInstance();
        $etu=$pdo->prepare("UPDATE etudiant SET nom=:nom,prenom=:prenom WHERE id=:id");
        $etu->bindValue(':nom',$unObjetEtudiant->getNom());
        $etu->bindValue(':prenom',$unObjetEtudiant->getPrenom());
        $etu->bindValue(':id',$unObjetEtudiant->getId());
        if($etu->execute()){
            
            $resultat =  $unObjetEtudiant->getPrenom().' '.$unObjetEtudiant->getNom().' modifié';
         }
         else $resultat ='Erreur';
 
         return $resultat;
    
    }

    function deleteUnEtudiantAD($id){
    
        $pdo =PDO2::getInstance();
        $chercheEtu=$pdo->prepare("DELETE FROM etudiant WHERE id=:id");
        $bv1=$chercheEtu->bindValue(':id',$id);
    
        if($chercheEtu->execute()){
            $resultat = 'Etudiant '.$id.' supprimé';
        }
        else $resultat = 'Erreur';

        return $resultat;

        
    
    }
?>