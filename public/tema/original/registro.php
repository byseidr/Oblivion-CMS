<?php Oblivion\Account::registrar($db) ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script data-ad-client="ca-pub-1233643693898528" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <style type="text/css">
        @charset "UTF-8";
        [ng\:cloak],
        [ng-cloak],
        [data-ng-cloak],
        [x-ng-cloak],
        .ng-cloak,
        .x-ng-cloak,
        .ng-hide:not(.ng-hide-animate) {
            display: none !important;
        }
        
        ng\:form {
            display: block;
        }
        
        .ng-animate-shim {
            visibility: hidden;
        }
        
        .ng-anchor {
            position: absolute;
        }
    </style>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" type="image/x-icon" href="https://i.imgur.com/uRUsL19.png">

    <title>
        <?php echo NOME ?> - Criar um avatar</title>

    <meta name="keywords" content="<?php echo NOME ?>, habblet, habblethotel, habblive, habb, lella, lellahotel,lella hotel, habbinfo, habbinfo hotel, habblive, habblive hotel, habbolatino, habbletlatino, habblet, habblethotel, crazzy, habb, habbhotel , furnis , mobs, client, cliente, client hotel, clienthotel, atualizado, catalogo">
    <meta name="robots" content="all">
    <meta name="Googlebot" content="index, follow">

    <meta property="image" content="">
    <meta property="description" content="">

    <meta property="og:title" content="<?php echo NOME ?> Hotel">
    <meta property="og:image" content="">
    <meta property="og:description" content="<?php echo NOME ?>, habblet, habblethotel, habblive, habb, lella, lellahotel,lella hotel, habbinfo, habbinfo hotel, habblive, habblive hotel, habbolatino, habbletlatino, habblet, habblethotel, crazzy, habb, habbhotel , furnis , mobs, client, cliente, client hotel, clienthotel, atualizado, catalogo">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:type" content="game">
    <meta property="og:url" content="<?php echo URL ?>">
    <meta property="og:site_name" content="<?php echo NOME ?> Hotel">
    <meta property="og:locale" content="pt_BR">
    <meta property="fb:app_id" content="-">
    <meta property="article:tag" content="quiz">
    <meta property="article:author" content="<?php echo FACEBOOK ?>">
    <meta property="article:publisher" content="<?php echo FACEBOOK ?>">

    <meta name="twitter:card" content="photo">
    <meta name="twitter:title" content="<?php echo NOME ?> Hotel">

    <script src="<?php echo URL ?>/tema/<?php echo TEMA ?>/css_files/OneSignalSDK.js" async=""></script>

    <script src="<?php echo URL ?>/tema/<?php echo TEMA ?>/css_files/OneSignalPageSDKES6.js" async=""></script>
    <link href="<?php echo URL ?>/tema/<?php echo TEMA ?>/css_files/css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo URL ?>/tema/<?php echo TEMA ?>/css_files/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo URL ?>/tema/<?php echo TEMA ?>/css_files/animate.css">
    <link href="<?php echo URL ?>/tema/<?php echo TEMA ?>/css_files/all.css" rel="stylesheet" type="text/css">
    <?php include __DIR__ . '/styles.php'; ?>
    <script src="<?php echo URL ?>/tema/<?php echo TEMA ?>/css_files/angular.min.js" type="text/javascript"></script>
    <script src="<?php echo URL ?>/tema/<?php echo TEMA ?>/css_files/angular-animate.min.js" type="text/javascript"></script>
    <script src="<?php echo URL ?>/tema/<?php echo TEMA ?>/css_files/jquery-3.4.1.min.js"></script>
    <script src="<?php echo URL ?>/tema/<?php echo TEMA ?>/css_files/api.js" async="" defer=""></script>
    <script src="<?php echo URL ?>/tema/<?php echo TEMA ?>/css_files/popper.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo URL ?>/tema/<?php echo TEMA ?>/css_files/bootstrap.min.js" crossorigin="anonymous"></script>
    <script>
        function getCookie(cname) {
            var name = cname + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return null;
        }

        function setCookie(cname, value) {
            document.cookie = 'client_preference=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
            var d = new Date();
            d.setTime(d.getTime() + (900 * 24 * 60 * 60 * 1000));
            var expires = "expires=" + d.toUTCString();
            document.cookie = cname + "=" + value + ";" + expires + ";path=/";
        }

        function getAverageRGB(imgEl) {

            var blockSize = 5, // only visit every 5 pixels
                defaultRGB = {
                    r: 0,
                    g: 0,
                    b: 0
                }, // for non-supporting envs
                canvas = document.createElement('canvas'),
                context = canvas.getContext && canvas.getContext('2d'),
                data, width, height,
                i = -4,
                length,
                rgb = {
                    r: 0,
                    g: 0,
                    b: 0
                },
                count = 0;

            if (!context) {
                return defaultRGB;
            }

            height = canvas.height = imgEl.naturalHeight || imgEl.offsetHeight || imgEl.height;
            width = canvas.width = imgEl.naturalWidth || imgEl.offsetWidth || imgEl.width;

            context.drawImage(imgEl, 0, 0);

            try {
                data = context.getImageData(0, 0, width, height);
            } catch (e) {
                /* security error, img on diff domain */
                return defaultRGB;
            }

            length = data.data.length;

            while ((i += blockSize * 4) < length) {
                ++count;
                rgb.r += data.data[i];
                rgb.g += data.data[i + 1];
                rgb.b += data.data[i + 2];
            }

            // ~~ used to floor values
            rgb.r = ~~(rgb.r / count);
            rgb.g = ~~(rgb.g / count);
            rgb.b = ~~(rgb.b / count);

            return rgb;

        }

        function getLuma(rgb) {
            return 0.2126 * rgb.r + 0.7152 * rgb.g + 0.0722 * rgb.b; // per ITU-R BT.709
        }

        function timerIncrement() {
            idleTime = idleTime + 1;
            if (idleTime > 10) {
                idleUser = true;

            }
        }

        function getTimeAgo(time) {
            var units = [{
                name: "segundo",
                limit: 60,
                in_seconds: 1
            }, {
                name: "minuto",
                limit: 3600,
                in_seconds: 60
            }, {
                name: "hora",
                limit: 86400,
                in_seconds: 3600
            }, {
                name: "dia",
                limit: 604800,
                in_seconds: 86400
            }, {
                name: "semana",
                limit: 2629743,
                in_seconds: 604800
            }, {
                name: "mês",
                limit: 31556926,
                in_seconds: 2629743
            }, {
                name: "ano",
                limit: null,
                in_seconds: 31556926
            }];
            var diff = (new Date() - new Date(time * 1000)) / 1000;
            var isAgo = true;

            if (diff < 0)
                isAgo = false;

            if (diff < 5)
                return "agora";
            var i = 0,
                unit;
            while (unit = units[i++]) {
                if (diff < unit.limit || !unit.limit) {
                    var diff = Math.floor(diff / unit.in_seconds);

                    if (i == 6)
                        return diff + " " + (diff > 1 ? "meses" : "mês") + (isAgo ? " atrás" : "");
                    else
                        return diff + " " + unit.name + (diff > 1 ? "s" : "") + (isAgo ? " atrás" : "");
                }
            };
        }

        var app = angular.module('formApp', ['ngAnimate']);

        app.filter('trustAsHtml', ['$sce', function($sce) {
            return function(text) {
                return $sce.trustAsHtml(text);
            };
        }]);
    </script>
    <style type="text/css">
        .mx-tip-panel:focus {
            outline: 0;
        }
        
        .mx_keyword {
            line-height: 20px;
            color: #333333;
            font-size: 14px;
            letter-spacing: 0.2px;
            font-family: PingFangSC-Semibold;
        }
        
        .mx-scrollbar::-webkit-scrollbar {
            width: 8px;
            height: 1px;
        }
        
        .mx-scrollbar {
            overflow-y: auto;
            max-height: 380px;
        }
        
        .mx-scrollbar::-webkit-scrollbar-thumb {
            border-radius: 4px;
            background: #C0C0C0;
        }
        
        .mx-scrollbar::-webkit-scrollbar-track {
            border-radius: 4px;
            background: #eeeeee;
        }
        
        .maxthon_tip {
            background-color: white;
            border: none;
        }
        
        .maxthon_tip:active {
            background-color: #E6F4FF;
            border: 1px solid #449EFB;
        }
        
        .maxthon_tip:hover {
            background-color: #E6F4FF;
            border: 1px solid #449EFB;
        }
    </style>
    <style type="text/css">
        #maxthon-1eec22d4-0232-4212-8283-6f2ac8f967-iframe {
            display: block!important;
            position: absolute!important;
            visibility: visible!important;
            z-index: 2147483647!important;
            border-style: none!important;
            opacity: 1!important;
            margin: 0!important;
            padding: 0!important;
            box-shadow: 0 0 5px rgba(0, 0, 0, .3)!important;
            border: 1px solid #b3b3b3!important
        }
    </style>
    <style type="text/css">
        #maxthon-1eec22d4-0232-4212-8283-6f2ac8f967-iframe {
            display: block!important;
            position: absolute!important;
            visibility: visible!important;
            z-index: 2147483647!important;
            border-style: none!important;
            opacity: 1!important;
            margin: 0!important;
            padding: 0!important;
            box-shadow: 0 0 5px rgba(0, 0, 0, .3)!important;
            border: 1px solid #b3b3b3!important
        }
    </style>
</head>

<body ng-app="formApp" class="animated fadeIn ng-scope">
    <div id="sound"></div>

    <div class="cookies-warning animated bounce">
        <i class="fas fa-exclamation-triangle" style="font-size: 20px; float: left; margin-right: 20px"></i> Nós utilizamos cookies para melhorar a sua experiência aqui dentro. Ao continuar utilizando nosso site você está de acordo com isso.
        <span style="float: right; color: rgba(255, 255, 255, .8); font-size: 18px">OK?</span>
    </div>
    <div id="master-topbg" ng-controller="gameHeaderController" class="ng-scope">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <a href="<?php echo URL ?>/index">
                        <div id="master-logo"></div>
                    </a>
                </div>
                <div class="col-md-6">
                    <div class="pull-right">
                        <div style="float:right; margin-top: 10px; padding:10px; text-align: center; background-color: #fff; border-radius: 5px;">
                            <div style="padding: 6px; width: 60px;  line-height: 80%;">
                                <span class="onlineUsersNumber ng-binding"><?php Oblivion\Data::usuarios_online($db) ?></span>
                                <small ng-show="usersOnStatus !== 0" class="" style="">
                                <i ng-show="usersOnStatus &gt; 0" style="color:#459b4a" class="fas fa-level-up ng-hide" aria-hidden="true"></i>
                                <i ng-show="usersOnStatus &lt; 0" style="color:#c43c3c" class="fas fa-level-down ng-hide" aria-hidden="true"></i>
                            </small>
                                <br>
                                <small>online's</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Fixed navbar -->
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="container">
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav w-100">
                        <li class="nav-item  active">
                            <a class="nav-link" href="<?php echo URL ?>/index">Início</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="<?php echo URL ?>/registro">Registre-se</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-5">
            <h3 style="color:#1e262c;font-weight: bold;margin-top:0px">Registre-se</h3>
            <h5 style="color: #a7a7a7;margin-bottom:30px">A poucos passos do paraíso...</h5>
            <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div id="alerts"></div>
                         <?php
                        if (isset($_SESSION['erro']))
                        {
                            echo '<div class="alert alert-primary" role="alert">';
                            echo $_SESSION['erro'];
                            unset($_SESSION['erro']);
                            echo '</div>';
                        }
                        ?>
                        <form method="post" id="" class="ng-pristine ng-valid">
                            <div class="form-group">
                                <label>Nome de Usuário</label>
                                <input type="text" class="form-control" name="usuario_salsa" id="username" required="">
                            </div>
                            <div class="form-group">
                                <label>Senha</label>
                                <input type="password" name="senha_salsa" class="form-control" id="password" required="">
                            </div>
                            <div class="form-group">
                                <label>Confirmar Senha</label>
                                <input type="password" name="senha_repetir" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label>E-mail</label>
                                <input type="email" name="email" class="form-control" id="email" required="">
                            </div>

                            <?php if (CAPTCHA == 1)
                            {
                                $salgcpa = rand(1000, 9000);
                                ?>


                                <div class="form-group">
                                <label>Digite o Captcha:</label> <?php echo $salgcpa ?>
                                <input hidden="" value="<?php echo $salgcpa ?>" type="text" class="form-control" name="captcha" id="captcha">
                                <input placeholder="Digite o número acima aqui..." type="text" class="form-control" name="captcha_repetir" id="captcha_repetir" required="">
                                </div>




                            <?php } ?>


                            <button type="submit" name="registrar"  class="btn btn-primary g-recaptcha" style="float: right">Criar meu avatar</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

    <div style="font-weight: 14px;background: #1e262c; padding: 10px;border-top: 4px solid #1b2228;margin-top: 30px">
        <div class="container">

            <span style="color:#a7a7a7">
            © 2019 - <?php echo ANO ?> Rede <?php echo NOME ?> Corporation Ltd. Todos os direitos reservados.
               </span>
        </div>
    </div>

    <div style="visibility: hidden; position: absolute; width: 100%; top: -10000px; left: 0px; right: 0px; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0;">
        <div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.5;"></div>
        <div style="margin: 0px auto; top: 0px; left: 0px; right: 0px; position: absolute; border: 1px solid rgb(204, 204, 204); z-index: 2000000000; background-color: rgb(255, 255, 255); overflow: hidden;">

        </div>
    </div>

</body>

</html>