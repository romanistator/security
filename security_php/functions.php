<?php

function dbconnect(){
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=exo2_sql','root','');
        return $pdo;
    }
    catch(PDOException $e){
        echo "ca marche pas";
    }
}

function login($email, $password){
    $dbh = dbconnect();
    $stmt = $dbh->prepare("SELECT * FROM users WHERE users.email = :toto");// au lieu d'executer la requete directement comme avec query(), on prepare la requete
    $stmt->bindParam(":toto",$email);// on definit à quelle variable on affecte le marqueur :toto
    $stmt->execute();// on execute la requete pour de vrai
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    $passwordSaved = $user["password"];

    if($user && password_verify($password, $passwordSaved)){
        //comparaison du password saisi avec celui de la bdd
        echo "Utilisateur connecté";
    }
    else{
        echo "Mauvais mot de passe";

    }
    
}
// function verifIsExistEmail($email){
//     $dbh = dbconnect();
//     $stmt = $dbh->prepare("SELECT email FROM users WHERE users.email = :toto");
//     $stmt->bindParam(":toto",$email);
//     $stmt->execute();
//     $mail = $stmt->fetch(PDO::FETCH_ASSOC);
//     if($mail){
//         return false;
//     }
//     else{
//         return
//     }
// }

// depuis une nouvelle page, formulaire d'inscription en utilisant une requête préparée
function signUp($email, $password){
    $dbh = dbconnect();
    $stmt = $dbh->prepare("INSERT INTO users VALUES(null,:mail, :pass)");
    $stmt->bindParam(":mail",$email);
    $stmt->bindParam(":pass",$password);
    $stmt->execute();
}
//password_hash