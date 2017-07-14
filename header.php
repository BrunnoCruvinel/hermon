<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!--Título-->
    <title></title>
    <!--Favicon-->
    <link rel="shortcut icon" type="image/ico" href="favicon.ico">
    <!--Botstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!--Estilos-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/mediaqueries.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.min.css">
    <!--Fonte-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600,700" rel="stylesheet">
</head>

<body>
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <header class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-1 col-sm-1 col-xs-4 logo relative">
                    <img class="absolute" src="img/logo.png" style="max-width:">
                </div>

                <div class="col-md-offset-1 col-sm-11 col-md-8 hidden-xs">
                    <nav>
                        <ul>
                            <li><a href="fundacao.php">A Fundação</a></li>
                            <li><a href="unidades.php">Matriz / Unidades</a></li>
                            <li><a href="fotos.php">Fotos</a></li>
                            <li><a href="doar.php">Doar</a></li>
                            <li><a href="blog.php">Blog</a></li>
                            <li><a href="contato.php">Contato</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-2 hidden-sm hidden-xs">
                    <div class="social">
                        <a href="#" target="_blank"><img src="img/face.png"></a>
                        <a href="#" target="_blank"><img src="img/twitter.png"></a>
                        <a href="#" target="_blank"><img src="img/insta.png"></a>
                        <a href="#" target="_blank"><img src="img/youtube.png"></a>
                    </div>
                </div>
                <div class="col-xs-12 hidden-lg hidden-md hidden-sm">
                  <a href="javascript:void(0)" class="mais">
                    <span class="glyphicon glyphicon-menu-hamburger"

                    style="margin-top:3rem;margin-bottom:20px;float: right;font-size: 32px;" aria-hidden="true"></span></a>

                    <ul id="menuMobile">
                      <li><a href="fundacao.php">A Fundação</a></li>
                      <li><a href="unidades.php">Matriz / Unidades</a></li>
                      <li><a href="fotos.php">Fotos</a></li>
                      <li><a href="doar.php">Doar</a></li>
                      <li><a href="blog.php">Blog</a></li>
                      <li><a href="contato.php">Contato</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </header>
