<?php
require_once "functions.php";
require_once "header.php";
if(isset($_POST) && !empty($_POST)){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password = password_hash($password, PASSWORD_ARGON2I);
    var_dump($password);
    signUp($email, $password);  
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