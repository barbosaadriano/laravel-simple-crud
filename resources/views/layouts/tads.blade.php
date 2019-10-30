<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title> {{ config('app.name') }} @yield('title','Minha App')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9190ed886e.js" crossorigin="anonymous"></script>
        <style>     
            @yield('custom-style')
            nav {
                background: #333;
                padding: 10px;
                color: #eee;
                font-size:36px;
            }
            .menu-itens {
                display: inline-block;
            }
            .menu-itens a {
                text-decoration: none;
                color: #eee;
                margin: 10px;
            }
            .menu-itens a:hover {
                color: #eaa;
            }
        </style>
</head>
<body>
<nav>        
    <div class="container">
        {{ config('app.name', 'Tads') }}
        <div class="menu-itens">
            <a href="/home"><i class="fas fa-home"></i></a>
            <a href="/home"><i class="fab text-info fa-facebook-f"></i></a>
            @yield('menu')
        </div>
    </div>
</nav>
<div class="container">
  
    <div class="conteudo">
        @yield('conteudo')
    </div>
    <footer>
        powered by Tads / SA
    </footer>
</div>
</body>
</html>