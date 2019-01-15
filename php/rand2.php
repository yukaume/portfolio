<?php 
$gift = array(
    'A'=>"<h1>Johnstonsのストール</h1><br>".'<h3>上質でベーシックなストール。</h3>'. '<br><a href="https://vulcanize.jp/products/list?category_id=154"><img src="../img/Jon.jpg" alt="" class="image is-128x128" id="gift"></a>',
    'B'=>"<h1>HENRY DEANの花瓶</h1><br>". '<h3>花束とおしゃれな花瓶で愛を伝えてみては？</h3>'. '<br><a href="https://www.conranshop.jp/shop/conran/item/view/shop_product_id/18856"><img src="../img/kabin.jpg" alt="" class="image is-128x128" id="gift"></a>',
    'C'=>"<h1>CLAYD</h1><br>".'<h3>入浴剤にもパックにも使える!万能なお風呂のお供。</h3>'.'<br><a href="https://www.clayd.jp/products/5"><img src="../img/clay.jpg" alt="" class="image is-128x128" id="gift"></a>',
    'D'=>"<h1>sowの体験型ギフト</h1><br>".'<h3>二人で一緒にわくわく時間を。</h3>'. '<br><a href="https://www.sowxp.co.jp/catalogs/539"><img src="../img/sow.jpg" alt="" class="image is-128x128" id="gift"></a>',
    'E'=>"<h1>せんねん灸</h1><br>".'<h3>労いを込めて据えてあげて下さいね。</h3>'.'<br><a href="https://www.sennenq.co.jp/shop/products/detail/82きゅ"><img src="../img/kyu.jpg" alt="" class="image is-128x128" id="gift"></a>',
    'F'=>"<h1>Kashwere</h1><br>".'<h3>着心地の良いルームウェア。</h3>'.'<br><a href="http://www.kashwerejapan.com/shop/default.aspx"><img src="../img/kash.jpg" alt="" class="image is-128x128" id="gift"></a>',
);

$giftrand = array_rand($gift);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gift</title>
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

        #reload {
            text-align: center;
            margin: 0px auto 100px;
            justify-content: center;
        }

        /* #center{
            display:block;
            text-align:center;
            margin:auto;
            justify-content: center;
        } */
    </style>
</head>

<body class="has-background-grey-lighter">
    <section class="hero is-info is-fullheight">
        <div class="hero-head">
            <nav class="navbar">
                <div class="container">
                    <div class="navbar-brand">
                        <span class="navbar-burger burger" data-target="navbarMenu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </div>
                    <div id="navbarMenu" class="navbar-menu">
                        <div class="navbar-end">
                            <span class="navbar-item">
                                <a id="button" class="button is-white is-outlined is-small" href="http://umegaki113.sakura.ne.jp/ec/php/top.php">
                                    <span class="icon">
                                        <i class="fa fa-home"></i>
                                    </span>
                                    <span>HOME</span>
                                </a>
                            </span>
                            <span class="navbar-item">
                                <a id="button" class="button is-white is-outlined is-small" href="http://umegaki113.sakura.ne.jp/ec/php/productlist.php">
                                    <span class="icon">
                                        <i class="fa fa-star"></i>
                                    </span>
                                    <span>PRODUCT</span>
                                </a>
                            </span>
                            <span class="navbar-item">
                                <a id="button" class="button is-white is-outlined is-small" href="http://umegaki113.sakura.ne.jp/ec/php/blog.php">
                                    <span class="icon">
                                        <i class="fa fa-book"></i>
                                    </span>
                                    <span>COLUMN</span>
                                </a>
                            </span>
                            <span class="navbar-item">
                                <a id="button" class="button is-white is-outlined is-small" href="http://umegaki113.sakura.ne.jp/ec/php/contact.php">
                                    <span class="icon">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                    <span>CONTACT</span>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <div class="hero-body" id="center">
            <div class="container has-text-centered">
                <div class="column is-6 is-offset-3">
                    <h1 class="title is-5" id="gift">
                        <?php echo $gift[$giftrand]; ?>
                    </h1>
                </div>
            </div>
        </div>

        <div id="reload">
            <a href="rand2.php"><img class="image is-48x48" src="../img/reload.png" alt=""></a>
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