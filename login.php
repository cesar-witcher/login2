<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login-tela</title>
    <style>
        body{
            margin:0;
            padding:0;
            font-family: tahoma, verdana, geneva, sans-serif;
            color:rgb(90,90,90);
        }
        body{
            background: linear-gradient(135deg, #aeaeae, #aeaeae);
        }
        .wrapper {
            display:flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login {
            width: 400px;
            height: 300px;
            background: white;
            border-radius: 20px;
            box-shadow: 0 0 2px 0 rgba(0,0,0,0.2), 0 0 20px 0 rgba(0,0,0,0.2);
            display:flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;

        }
        input{
            border-radius:6px;
            margin: 10px 0px;
            padding: 5px;
            box-shadow: none;
            border: 1px solid gray;
        }

        button{
            border-radius: 6px;
            padding: 10px;
            color: black;
            background: white;
        }
    </style>
</head>
<body>
    <div class="wrapper">    
        <div class="login">
             <h2>Faça login.</h2>
             <form action="logar.php" method="post">
                <div>
                    <input type="email" name="email" placeholder="E-mail"/>
                </div>
                 <div>
                    <input type="password" name="senha" placeholder="senha"/>
                </div> 
                <div>
                    <button type="submit">Logar</button>
                </div>                
             </form>
        </div>
    </div>
</body>
</html>