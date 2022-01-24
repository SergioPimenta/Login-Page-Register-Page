<?php
if(isset($_POST['acao'])){


include_once('config.php');

$nome = $_POST['nome'];
$apelido = $_POST['apelido'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];
$sexo = $_POST['genero'];


$result = mysqli_query($conexao, "INSERT INTO pessoas(Nome, Apelido, Email, Telefone, Senha, Sexo) 
VALUES ('$nome','$apelido','$email','$telefone','$senha','$sexo')");


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="RegisterPage.css">
</head>
<body>
    <div class="container">
        <div class="Up">
        <div class="title">Registration</div>
        <div class="voltar"><a href="index.html">Voltar</a></div>
        </div>
        <form action="RegisterPage.php" method="POST">
            <div class="user__details">
                <div class="input__box">
                    <span class="details">Full Name</span>
                    <input type="text" name="nome" placeholder="Enter your name" required>
                </div>
                <div class="input__box">
                    <span class="details">Username</span>
                    <input type="text" name="apelido" placeholder="Enter your username" required>
                </div>
                <div class="input__box">
                    <span class="details">E-mail</span>
                    <input type="email" name="email" placeholder=" Enter your e-mail" required="email">
                </div>
                <div class="input__box">
                    <span class="details">Phone Number</span>
                    <input type="number" name="telefone" placeholder="Enter your number" required>
                </div>
                <div class="input__box">
                    <span class="details">Password</span>
                    <input type="password" name="senha" placeholder="Enter your password" required>
                </div>
                <div class="input__box">
                    <span class="details">Confirm Password</span>
                    <input type="password" placeholder="Confirm your password" required="mb_substitute_character">
                </div>
                <div class="gender__details">
                    <input type="radio" name="genero" value="Male" id="dot-1">
                    <input type="radio" name="genero" value="Female" id="dot-2">
                    <input type="radio" name="genero" value="Other" id="dot-3">
                    <span class="gender__title">Gender</span>
                    <div class="category">
                        <label for="dot-1">
                            <span class="dot one"></span>
                            <span class="gender">Male</span>
                        </label>
                        <label for="dot-2">
                            <span class="dot two"></span>
                            <span class="gender">Female</span>
                        </label>
                        <label for="dot-3">
                            <span class="dot three"></span>
                            <span class="gender">Other</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="button">
                <input type="submit" name="acao" value="Register">
            </div>
        </form>
    </div>
    
</body>
</html>