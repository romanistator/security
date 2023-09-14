<?php
session_start();
//var_dump($_SESSION);
require_once "functions.php";
require_once "header.php";

if(isset($_POST) && !empty($_POST)){
    $email = $_POST["email"];
    $password = $_POST["password"];
    login($email, $password);
    if($_SESSION["user"]){
        header("location:index.php?message=Vous êtes connecté&status=success");
    }
    else{
        header("location:index.php?message=Echec de la connexion&status=danger");
    }
    
}

?>

<body>
    <main class="container">
        <?php
        if(isset($_GET["message"]) && !empty($_GET["message"])){?>
            <div class="alert alert-<?php echo $_GET["status"]?> alert-dismissible fade show" role="alert">
                <strong><?php echo $_GET["message"] ?></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
        }
        if(isset($_SESSION["user"])){?>
            <a href = "logout.php">Déconnexion</a>
        <?php
        }else{?>
            <a href="signup.php">Inscription</a>
        <?php
        }
        ?>
        
        <h1 class="text-center">Connectez vous</h1>
        <form class="text-center" action ="" method ="post">
            <div>
                <label for="email" >Email</label>
                <input class="mt-3 form-control" type="mail" name="email" id="email">
            </div>
            <div>
                <label for="password">Password</label>
                <input class="mt-3 form-control" type="password" name="password" id="password">
            </div>
            <input class="mt-3" type="submit" value="Se connecter">
        </form>
    </main>
</body>
</html>