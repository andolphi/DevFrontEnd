<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Language" content="pt-br">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
    <title>Document</title>


</head>
<body>
    <div id="header">
        <div id="topo">
            <h1><img class="logo" src="image/logo.png" alt="logo" /></h1>
            <ul id="nav1">
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Preços</a></li>
                <li><a href="#">Desenvolvedores</a></li>
                
            </ul>
            <div id="space-nav"></div>
            <ul id="nav2">
                <li><a href="#"><img src="image/lupa.png" alt="Procurar"></a></li>
                <li><a href="#">Ajuda</a></li>
                <li><a href="#">Contato</a></li>
                <li><a href="#" class="link-comecar">Começar</a></li>
                
                            
            </ul>
        </div>
        <div id="banner">

        </div>    
    </div>
    
    <div id="white">
        <div id="client"><img src="image/graphicriver.png" alt="graphicriver" ></div>
        <div id="client"><img src="image/themeforest.png" alt="themeforest" ></div>
        <div id="client"><img src="image/audiojungle.png" alt="audiojungle" ></div>
        <div id="client"><img src="image/codecanyon.png" alt="codecanyon" ></div>
        
    </div>
    <div id="separator"></div>
    <div id="white">

    </div>
    <div id="services">
        <div id="service-1" >
            <img src="image/ico-1.png" >
            <p id="titulo1" class="title1service"></p>
            <p id="descricao1" class="description1service"></p>
        </div>
        <div id="service-2">
            <img src="image/ico-2.png" >
            <p id="titulo2" class="title2service"></p>
            <p id="descricao2" class="description2service"></p>
        </div>
        <div id="service-1">
            <img src="image/ico-3.png" >
            <p id="titulo3" class="title1service"></p>
            <p id="descricao3" class="description1service"></p>
        </div>
    </div>
    <div id="white">

    </div>
    <div id="separator"></div>
    <div id="client-suport">
        <p class="titlesuport">Atendimento ao Cliente</p>
        <p class="descriptionsuport"></p>
    </div>
    <div id="newsletter">
        <div id="topNewsletter"></div>
        <p class="titlenewsletter">Newsletter</p>
        <p class="descnewsletter">Receba nossas informações por email e fique sabendo de todas as novidades.</p>
        <form id="form-newsletter" action="#">
            <input class="input-email-newsletter" type="text" size="30" placeholder="Seu Email">
            <input class="button-newsletter" type="submit" value="Salvar">
        </form>
    </div>
    <div id="footer">

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
    <script type="text/javascript">
        $.get( "http://localhost:8181/ezoom/public/api/servico/1", function(data) {
            $('#titulo1').html(data['titulo']);
            $('#descricao1').html(data['descricao']);
        });
        $.get( "http://localhost:8181/ezoom/public/api/servico/2", function(data) {
            $('#titulo2').html(data['titulo']);
            $('#descricao2').html(data['descricao']);
        });
        $.get( "http://localhost:8181/ezoom/public/api/servico/3", function(data) {
            $('#titulo3').html(data['titulo']);
            $('#descricao3').html(data['descricao']);
        });
    </script>

</body>
</html>