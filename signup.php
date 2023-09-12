<?php
require_once "functions.php";
require_once "header.php";
if(isset($_POST) && !empty($_POST)){    
    $email = secureEmail($_POST["email"]);
    if($email){
        $password = $_POST["password"];
        $password = password_hash($password, PASSWORD_DEFAULT);
        signUp($email, $password);
    }
    else{
        echo "Cette adresse email n'est pas valide";
    }

  
}
?>

<body>
    <main class="container">
        <h1 class="text-center">Inscrivez vous</h1>
        <form class="text-center" action ="" method ="post">
            <div>
                <label for="email" >Email</label>
                <input class="mt-3 form-control" type="mail" name="email" id="email">
            </div>
            <div>
                <label for="password">Password</label>
                <input class="mt-3 text-center form-control" type="password" name="password" id="password">
            </div>
            <input class="mt-3" type="submit" value="Inscrire">
        </form>
    </main>
</body>
</html>