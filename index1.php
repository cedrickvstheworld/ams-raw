<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
         <!-- FORMULAIRE DE CONNEXION -->
    <div class="card">
        <h2>Login</h2>
            <!-- SE CONNECTER / S'INSCRIRE -->
        <div class="login_register">
            <a href="index.php" class="login">User</a>
            <a href="admin.php" class="register">Admin</a>
        </div>

            <!-- FORMULAIRE --> 
        <form class="form" action="tenant.php" method="post">
            <?php if(isset($_GET['error'])) { ?>
                <p 
                style="background: #F7CD08; color: black; padding: 10px; width: 95%; border-radius: 5px;">
                <?php echo $_GET['error']; ?></p>
            <?php }?>
            <input type="email" placeholder="Email Adress" name="email">
            <input type="password" placeholder="Password" name="password">
            <!-- BUTTON LOGIN -->
            <button type="submit" class="login_btn">Login</button>
            <a href="">Forget password</a>
        </form>
    </div>
</body>
</html>