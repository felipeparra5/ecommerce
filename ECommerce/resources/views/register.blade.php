<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Carrinho | Kond Jersey's</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="imagens/png" href="imagens/favicon.png">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
<head>
    <style>
body{
	width: 100vw;
	height: 100vh;
	background-image: url(imagens/CAPA.png);
	background-size: 100%;
	background-repeat: no-repeat;
}
    </style>
<body>
    <div class="header">

    <div class="container">
        <div class="navbar"> 
            <div class="logo">
                <img src="imagens/LogoKondf.png" width="125px">
            </div>
            <nav>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Produtos</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Contato</a></li>
                    <li><a href="">Perfil</a></li>
                </ul>
            </nav>
            <img src="imagens/Cartzinho.png" width="30px" height="30px">
        </div>
    </div>
</div>

<!-- conta -->
<div class="conta-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <div class="forms">
                    <div class="form-btn">
                        <span onclick="login()">Login</span>
                        <span onclick="registrar()">Registro</span>
                        <hr id="Indicador">
                    </div>
                    <form id="LoginForm">
                        <input type="text" placeholder="Nome de Usuário">
                        <input type="password" placeholder="Senha">
                        <button type="submit" class-="btn">Login</button>
                        <a href="">Esqueceu a senha?</a>
                    </form>
                    <form id="RegForm">
                        <input type="text" placeholder="Nome de Usuário">
                        <input type="email" placeholder="Email">
                        <input type="password" placeholder="Senha">
                        <button type="submit" class-="btn">Registrar</button>
                        <a href="">Esqueceu a senha?</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
        <script>
        var LoginForm = document.getElementById("LoginForm");
        var RegForm = document.getElementById("RegForm");
        var Indicador= document.getElementById("Indicador");

            function registrar(){
                RegForm.style.transform = "translateX(0px)";
                Login.style.transform = "translateX(0px)";
            }
            function login(){
                RegForm.style.transform = "translateX(300px)";
                Login.style.transform = "translateX(300px)";
            }
        </script>
</body>
</html>