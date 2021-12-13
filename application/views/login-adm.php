<!DOCTYPE html>
<head>
    <meta charset="utf-8">
	<title>login</title>
</head>
<body>
    <form action="<?= base_url()?>index.php/Login_Adm/storeAdm" method="post">
    <div class="imgcontainer">
        <img src="img_avatar2.png" alt="Avatar" class="avatar"><br>
    </div>

    <div class="container">
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required><br>

        <label for="senha"><b>Senha</b></label>
        <input type="senha" placeholder="Enter Senha" name="senha" required><br>

        <button type="submit">Login</button>
        <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
        <button type="button" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
    </form> 
</body>
</html>