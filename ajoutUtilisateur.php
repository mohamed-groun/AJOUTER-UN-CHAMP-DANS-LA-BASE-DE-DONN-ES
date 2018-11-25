<?php
require 'connexionPDO.php';

$cin=htmlentities($_POST['cin']);
$nom=htmlentities($_POST['nom']);
$prenom=htmlentities($_POST['prenom']);
$age=htmlentities($_POST['age']);
if (($cin=="") || ($cin<0)) {
    header('location:ajoutUtilisateur.html');
    echo "<script type='text/javascript'> alert('cin non valide');</script>";

}

else {
    $cnxPDO = ConnexionPDO::getInstance();
    $requete = "INSERT INTO `utilisateur` (`Cin`, `Nom`, `Prenom`, `Age`) VALUES (:cin, :nom, :prenom, :age)";
    $req = $cnxPDO->prepare($requete);
    $req->execute(
        array(
            'cin' => $cin,
            'nom' => $nom,
            'prenom' => $prenom,
            'age' => $age,
        )

    );
    header('location:cnxBD.php');
}
