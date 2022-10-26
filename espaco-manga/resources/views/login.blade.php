<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="css/login.css" rel="stylesheet" type="text/css" />
    <title>Document</title>
</head>
<body>
    <header>
        <div class="row">
            <div class="col">
                <div class="logo">
                    Espaço <span>Mangá</span>
                </div>
            </div>
            <div class="col">
                <form action="" class="barra__pesquisa">
                    <input type="text" name="pesquisa" class="barra_pesquisa">
                </form>
            </div>
            <div class="col-5">
                <nav class="navbar">
                    <ul class="navbar_menu">
                        <li class="navbar_item">
                            <a href="#">Lançamentos</a>
                        </li>
                        <li class="navbar_item">
                            <a href="#">Populares</a>
                        </li>
                        <li class="navbar_item">
                            <a href="#">Gênero</a>
                        </li>
                        <li class="navbar_item">
                            <a href="#"><b>Iniciar Sessão</b></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <div class="conteudo">
        <div class="row" id="row-conteudo">
            <div class="col" id="massege">
                <h2 class="title">
                    Lorem <span>ipsum</span> dolor sit amet, <span>consectetur</span> adipiscing elit, sed do 
                </h2>
            </div>
            <div class="col" id="login-content">
                <form action="">
                    <input type="email" name="email" placeholder="email" required><br>
                    <input type="password" name="senha" placeholder="senha" riquired><br>
                    <p>Não possui <a href="#" style="text-decoration: none;">cadastro?</a></p><br>
                    <input type="submit" value="Entrar">
                </form>
            </div>
        </div>
    </div>
</body>
</html>