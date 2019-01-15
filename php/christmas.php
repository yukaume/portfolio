<?php 
$gift = array(
    'A'=>'ジュリーク'. '<br><a href="https://jurlique-japan.com/"><img src="../img/hana.png" alt=""></a>',
    'B'=>'ニュクス'. '<br><a href="https://www.nuxe.co.jp/"><img src="../img/home.png" alt=""></a>'
);

$giftrand = array_rand($gift);


?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Christmas Special</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="../css/bulma.css">
    <link rel="stylesheet" href="../css/bulma.css.map">
    <link rel="stylesheet" href="../css/bulma.min.css">
    <style type="text/css">
        html,
        body {
            font-family: 'ヒラギノ明朝 ProN W6', 'HiraMinProN-W6';
        }

        img {
            padding: 5px;

        }

        .navbar {
            padding: 3px auto;
            text-align: center;
        }

        #name {
            font-size: 20px;
            color: #454545;
        }

        .title {
            text-align: center;
            margin: 50px auto;
            justify-content: center;
            color: black;
        }

        .hero.is-info {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(../img/christmas.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        #gift {
            text-align: center;
            margin: 20px auto;
            justify-content: center;
        }

        #control {
            display: flex;
            justify-content: center;
            font-size: 15px;
        }

        /* .control{
            display:block;
        } */
    </style>
</head>

<body class="has-background-grey-lighter">
    <section class="hero is-info is-fullheight">
        <div class="hero-head">
            <nav class="navbar-end">
                <div class="container">
                    <div class="navbar-brand">
                        <div class="navbar-burger" data-target="navMenu" aria-label="menu" aria-expanded="false">
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                        </div>
                        <div class="navbar-menu" id="navMenu">
                            <div class="navbar-end">
                                <span class="navbar-item">
                                    <a class="button is-white is-outlined is-small" href="http://umegaki113.sakura.ne.jp/ec/php/top.php">
                                        <span class="icon">
                                            <i class="fa fa-home"></i>
                                        </span>
                                        <span>HOME</span>
                                    </a>
                                </span>
                                <span class="navbar-item">
                                    <a class="button is-white is-outlined is-small" href="http://umegaki113.sakura.ne.jp/ec/php/productlist.php">
                                        <span class="icon">
                                            <i class="fa fa-star"></i>
                                        </span>
                                        <span>PRODUCT</span>
                                    </a>
                                </span>
                                <span class="navbar-item">
                                    <a class="button is-white is-outlined is-small" href="http://umegaki113.sakura.ne.jp/ec/php/blog.php">
                                        <span class="icon">
                                            <i class="fa fa-book"></i>
                                        </span>
                                        <span>COLUMN</span>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-6 is-offset-3">
                    <h1 class="title">
                        Happy Christmas For You.
                    </h1>
                    <h2 class="subtitle">
                        もうすぐクリスマスですね。<br>大切な人への贈り物はもう決まりましたか？<br>まだの方は、プレゼントボタンをクリックしてみて下さい。
                    </h2>
                </div>
                <div id="control">
                    <p class="control">
                        <a class="image is-96x96" id="gift" href="rand.php">
                            <img src="../img/gift.png" alt="">
                        </a>
                    </p>&ensp;
                    &ensp;<p class="control">
                        <a class="image is-96x96" id="gift" href="rand2.php">
                            <img src="../img/gift2.png" alt="">
                        </a>
                    </p>
                </div>
                <div id="control">
                    <p>For Lover&ensp;&ensp;</p>
                    <p>&ensp;&ensp;&ensp;&ensp;For Family</p>
                </div>
            </div>
        </div>

        <div class="hero-foot">
            <div class="container">
                <div class="tabs is-centered">
                    <ul>
                        <li><a>Copyright © 2018 UMEGAKI All Rights Reserved.</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function () { //①

            var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0); //②

            if ($navbarBurgers.length > 0) {

                $navbarBurgers.forEach(function ($el) {
                    $el.addEventListener('click', function () { //③

                        var target = $el.dataset.target; //④
                        var $target = document.getElementById(target); //④

                        $el.classList.toggle('is-active'); //⑤
                        $target.classList.toggle('is-active'); //⑤

                    });
                });
            }
        });
    </script>
    <script async="" type="text/javascript" src="../js/text.js"></script>
</body>

</html>