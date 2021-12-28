
<html>
    <head>
    	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
        <title>Login</title>
        <link rel="stylesheet" href="css.css">
</head>
    <body>
        <div class="container">

            <form class="login"action="loginproses.php" method="POST" >
        <h3>LOGIN </h3>
             
        <p>
            Username : <br>
            <input type="text" id="user" name="username" placeholder="username"/>
        </p>
 
        <p>
            Password : <br>
            <input type="Password" id="pass" name="password" placeholder="password"/>
        </p>
 
        <p>
        <button type="submit" id="btn" name="login" default>Log In</button>
        </p>
    </form>
        </div>
    </body>
</html>


