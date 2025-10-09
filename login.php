<?php
require_once '../config/database.php';
require_once '../models/Usuario.php';

if ($_POST) {
    $database = new Database();
    $db = $database->getConnection();
    
    $usuario = new Usuario($db);
    
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    if ($usuario->login($email, $senha)) {
        session_start();
        $_SESSION['usuario_id'] = $usuario->id;
        $_SESSION['usuario_nome'] = $usuario->nome;
        $_SESSION['usuario_email'] = $usuario->email;
        $_SESSION['nivel'] = $usuario->nivel;
        
        header("Location: dashboard.php");
        exit();
    } else {
        $erro = "Email ou senha inválidos!";
    }
}
include("./includes/head.php");
?>
<section class="form-container">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="title">Login</p>
                <form class="form">
                    <div class="input-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" placeholder="">
                    </div>
                    <div class="input-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="">
                        <div class="forgot">
                            <a rel="noopener noreferrer" href="#">Forgot Password ?</a>
                        </div>
                    </div>
                    <button class="sign">Sign in</button>
                </form>
                <div class="social-message">
                    <div class="line"></div>
                    <p class="message">Login with social accounts</p>
                    <div class="line"></div>
                </div>
                <p class="signup">Don't have an account?
                    <a rel="noopener noreferrer" href="#" class="">Sign up</a>
                </p>
            </div>
        </div>
    </div>
</section>
<?php
    include("./includes/footer.php");
?>