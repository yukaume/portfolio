<?php
session_start();

try {
    $pdo = new PDO('mysql:dbname=umegaki113_php;charset=utf8;host=mysql728.db.sakura.ne.jp','umegaki113','2525home');
  } catch (PDOException $e) {
    exit('DbConnectError:'.$e->getMessage());
  }

  //２．データ登録SQL作成
  $stmt = $pdo->prepare("SELECT * FROM gs_sign ORDER BY id DESC");
  $status = $stmt->execute();
  
  //３．データ表示
  $view="";
  if($status==false) {
    //execute（SQL実行時にエラーがある場合）
    $error = $stmt->errorInfo();
    exit("ErrorQuery:".$error[2]);
  
  } else {
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
      $view = $result["name"];
  }

?>

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
            padding: 3px 0px;
            text-align: center;
        }

        #subtitle {
            text-align: center;
            margin: 3px auto 5px;
            justify-content: center;
            font-size: 25px;
            color: #5c5c5c;
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

<body class="has-background-grey-lighter ">
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
                                            href="http://umegaki113.sakura.ne.jp/ec/php/logout.php">
                                            <span class="icon">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <span>
                                                LogOut
                                            </span>
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
                        <p id="subtitle is-2">こんにちは、
                            <?php echo $view ?>さん。</p>
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
                            心とからだのバランスを整えて、健やかでハッピーな日々を<br>
                            送れますように。
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