<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TOP</title>
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
            font-size: 17px;
            color: #454545;
        }

        .navbar-item {
            font-size: 18px;
        }

        #subtitle {
            text-align: center;
            padding-top: 38px;
            padding-bottom: 20px;
        }

        #new {
            text-align: center;
            margin: auto;
            justify-content: center;
        }
    </style>
</head>

<body class="has-background-grey-lighter">

    <section class="hero is-fullheight is-default is-bold ">
        <div class="hero-head">
            <nav class="navbar has-background-white-ter topNav">
                <div class="container">
                    <div class="navbar-brand">
                        <a class="navbar-item" href="http://umegaki113.sakura.ne.jp/ec/php/christmas.php">
                            <img src="../img/christ.png" width="33">
                        </a>
                        <div class="navbar-burger" data-target="navMenu" aria-label="menu" aria-expanded="false">
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="navbar-menu" id="navMenu">
                        <div class="navbar-start">
                            <span class="navbar-item">
                                <a class="button has-text-grey is-outlined is-small is-rounded has-background-white-ter"
                                    href="http://umegaki113.sakura.ne.jp/ec/php/top.php">
                                    <span class="icon">
                                        <i class="fa fa-home"></i>
                                    </span>
                                    <span>HOME</span>
                                </a>
                            </span>
                            <span class="navbar-item">
                                <a class="button has-text-grey is-outlined is-small is-rounded has-background-white-ter"
                                    href="http://umegaki113.sakura.ne.jp/ec/php/productlist.php">
                                    <span class="icon">
                                        <i class="fa fa-star"></i>
                                    </span>
                                    <span>PRODUCT</span>
                                </a>
                            </span>
                            <span class="navbar-item">
                                <a class="button has-text-grey is-outlined is-small is-rounded has-background-white-ter"
                                    href="http://umegaki113.sakura.ne.jp/ec/php/blog.php">
                                    <span class="icon">
                                        <i class="fa fa-book"></i>
                                    </span>
                                    <span>COLUMN</span>
                                </a>
                            </span>
                            <span class="navbar-item">
                                <a class="button has-text-grey is-outlined is-small is-rounded has-background-white-ter"
                                    href="http://umegaki113.sakura.ne.jp/ec/php/contact.php">
                                    <span class="icon">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                    <span>CONTACT</span>
                                </a>
                            </span>
                        </div>
                        <div class="navbar-end">
                            <div class="navbar-item">
                                <div class="field is-grouped">
                                    <p class="control">
                                        <a class="button is-small is-outlined is-rounded has-background-white-ter has-text-grey"
                                            href="http://umegaki113.sakura.ne.jp/ec/php/signup.php">
                                            <span class="icon">
                                                <i class="fa fa-user-plus"></i>
                                            </span>
                                            <span>
                                                SignUp
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-small is-outlined is-rounded has-background-white-ter has-text-grey"
                                            href="http://umegaki113.sakura.ne.jp/ec/php/login.php">
                                            <span class="icon">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <span>Login</span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <br>
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="columns is-vcentered">
                    <div class="column is-6">
                        <figure class="image image is-1by1">
                            <img src="../img/top2.jpg" alt="Description" name="img">
                            <SCRIPT language="javaScript">
                                var sw = 1;
                                image = new Array(5);
                                image[1] = "../img/top1.jpg";
                                image[2] = "../img/top2.jpg";
                                hyouji();

                                function hyouji() {
                                    setTimeout("hyouji()", 3500);
                                    document.img.src = image[sw];
                                    sw = sw + 1
                                    if (sw > 2) {
                                        sw = 1;
                                    }
                                }
                                //-->
                            </SCRIPT>
                        </figure>
                    </div>
                    <div class="column is-4 is-offset-1">
                        <!-- <p id="subtitle is-3">こんにちは。</p> -->
                        <h1 class="title is-1">
                            <!-- Healthy cherry trees bloom beautifully even when they become old. -->
                            WELCOME.<br>
                        </h1>
                        <h1 class="title is-3">
                            This is Concept site of<br>Healthy and Beauty.<br>
                        </h1>
                        <h2 class="subtitle is-4">
                            <br>忙しい毎日を送る大人の皆さん。<br>
                            "自分"と向き合っていますか？<br>
                        </h2>
                        <h2 class="subtitle is-6">
                            心とからだのバランスを整えて、<br>健やかでハッピーな日々を送れますように。<br>
                        </h2>

                        <p class="control" id="new">
                            <a class="button is-outlined is-rounded has-background-white-ter has-text-grey" href="http://umegaki113.sakura.ne.jp/ec/php/christmas.php">
                                <span class="icon">
                                    <i class="fa fa-tree"></i>
                                </span>
                                <span>
                                    Special
                                </span>
                            </a>
                        </p>
                    </div>
                </div>

            </div>
        </div>

        <!-- <p class="subtitle has-text-grey-darker" id="subtitle">COLUMN</p>
<section class="container">
      <div class="columns features">
        <div class="column is-4">
          <div class="card is-shady">
            <div class="card-image">
              <figure class="image is-4by3">
                <img src="../img/fennel.jpg" alt="Placeholder image" class="modal-button" data-target="modal-image2">
              </figure>
            </div>
            <div class="card-content">
              <div class="content">
                <h4>Fennel</h4>
                <p>The common fennel is native to the Mediterranean and it comes in two varieties.Fennel is native to the Mediterranean and it comes in two varieties.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="column is-4">
          <div class="card is-shady">
            <div class="card-image">
              <figure class="image is-4by3">
                <img src="../img/lemon.jpg" alt="Placeholder image">
              </figure>
            </div>
            <div class="card-content">
              <div class="content">
                <h4>Lemons</h4>
                <p>Vitamin C is a vitamin. Some animals can make their own vitamin C, but people must get this vitamin from food and other sources.this vitamin from food and other sources.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="column is-4 modal-button" data-target="modal-image">
          <div class="card is-shady">
            <div class="card-image">
              <figure class="image is-4by3">
                <img src="../img/nuts.jpg" alt="Placeholder image">
              </figure>
            </div>
            <div class="card-content">
              <div class="content">
                <h4>Hazelnut</h4>
                <p>The hazelnut is the nut of the hazel and therefore includes any of the nuts deriving from species of the genus Corylus, especially the nuts of the species Corylus avellana.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <br>
      </section> -->

        <div class="hero-foot  has-background-white-ter">
            <div class="container">
                <div class="tabs is-centered has-text-grey">
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