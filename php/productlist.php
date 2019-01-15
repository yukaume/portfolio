<?php
session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $product = $_POST['product'];
    $num     = $_POST['num'];
    $_SESSION['cart'][$product] = $num;
}

$cart = array();
if(isset($_SESSION['cart'])){
    $cart = $_SESSION['cart'];
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PRODUCT</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="../css/bulma.css">
    <link rel="stylesheet" href="../css/bulma.css.map">
    <link rel="stylesheet" href="../css/bulma.min.css">
    <style>
        body {
            line-height: 30px;
            font-family: 'ヒラギノ明朝 ProN W6','HiraMinProN-W6';
            }
        #img{
            display:flex;
            margin:0 auto;
            justify-content: center;
        }
        .title{
            text-align:center;
            margin:auto;
            justify-content: center;
        }
        #subtitle{
            text-align:center;
            margin:auto;
            justify-content: center;
            font-size:20px;
            
        }
        .image img{
            text-align:center;
            margin:auto;
            justify-content: center;
        }
        #list{
            margin:3px auto 0;        
        }
        #item{
            display:block;
        }
        #item2{
            display:flex;
            text-align:center;
            margin:auto;
            justify-content: center;
        }
        #proimg{
            text-align:center;
            margin:auto;
            justify-content: center;
            
        }
        .tile{
            text-align:center;
            margin:auto;
            justify-content: center;
        }

        #box{
            width:100%;
            text-align:center;
            margin:auto;
            justify-content: center;
        }

        #itemname{
            font-size:25px;
        }
        #foot{
            width:100%;
        }
        #name{
                font-size:20px;
                color:#454545;
            }
        #parent{
            width:220px;
        }

        #icon{
        text-align:center;
        margin:auto;
        justify-content: center;
    }


    </style>
</head>

<body>
    <section class="hero is-fullheight is-default is-bold ">
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

        <div id="list">
            <br>
            <p id="subtitle">PRODUCT</p><br>
            <div class="tile is-ancestor" id="box">
                <form action="" method="POST">
                    <div class="tile is-parent" id="parent">
                        <article class="tile is-child box">
                            <div id="item">
                                <p id="itemname">化 粧 水</p>
                                <p name="price">3,000円</p>
                                <div id="item2">
                                    <select class="select is-rounded" name="num">
                                        <?php for($i=1; $i<10; $i++): ?>
                                        <option value="<?php echo $i;?>">
                                            <?php echo $i;?>
                                        </option>
                                        <?php endfor;?>
                                    </select>&ensp;&ensp;
                                    <input type="hidden" name="product" value="toner">
                                    <?php if(isset($cart['toner']) === TRUE): ?>
                                    <input type="image" src="../img/ok.png" class="image is-24x24">
                                    <?php else: ?>
                                    <input type="image" src="../img/buy.png" class="image is-24x24">
                                    <?php endif;?>
                                </div>
                            </div>
                            <figure class="image is-96x96" id="proimg">
                                <img src="../img/skin3.png">
                            </figure>
                        </article>
                    </div>
                </form>
                <form action="" method="POST">
                    <div class="tile is-parent" id="parent">
                        <article class="tile is-child box">
                            <div id="item">
                                <p id="itemname">美 容 液</p>
                                <p name="price">5,000円</p>
                                <div id="item2">
                                    <select class="select is-rounded" name="num">
                                        <?php for($i=1; $i<10; $i++): ?>
                                        <option value="<?php echo $i;?>">
                                            <?php echo $i;?>
                                        </option>
                                        <?php endfor;?>
                                    </select>&ensp;&ensp;
                                    <input type="hidden" name="product" value="essense">
                                    <?php if(isset($cart['essense']) === TRUE): ?>
                                    <input type="image" src="../img/ok.png" class="image is-24x24">
                                    <?php else: ?>
                                    <input type="image" src="../img/buy.png" class="image is-24x24">
                                    <?php endif;?>
                                </div>
                            </div>
                            <figure class="image is-96x96" id="proimg">
                                <img src="../img/skin1.png">
                            </figure>
                        </article>
                    </div>
                </form>
                <form action="" method="POST">
                    <div class="tile is-parent" id="parent">
                        <article class="tile is-child box">
                            <div id="item">
                                <p id="itemname">クリーム</p>
                                <p name="price">4,500円</p>
                                <div id="item2">
                                    <select class="select is-rounded" name="num">
                                        <?php for($i=1; $i<10; $i++): ?>
                                        <option value="<?php echo $i;?>">
                                            <?php echo $i;?>
                                        </option>
                                        <?php endfor;?>
                                    </select>&ensp;&ensp;
                                    <input type="hidden" name="product" value="cream">
                                    <?php if(isset($cart['cream']) === TRUE): ?>
                                    <input type="image" src="../img/ok.png" class="image is-24x24">
                                    <?php else: ?>
                                    <input type="image" src="../img/buy.png" class="image is-24x24">
                                    <?php endif;?>
                                </div>
                            </div>
                            <figure class="image is-96x96" id="proimg">
                                <img src="../img/skin2.png">
                            </figure>
                        </article>
                    </div>
                </form>
            </div>
            <div class="tile is-ancestor" id="box">
                <form action="" method="POST">
                    <div class="tile is-parent" id="parent">
                        <article class="tile is-child box">
                            <div id="item">
                                <p id="itemname">ビタミン</p>
                                <p name="price">1,000円</p>
                                <div id="item2">
                                    <select class="select is-rounded" name="num">
                                        <?php for($i=1; $i<10; $i++): ?>
                                        <option value="<?php echo $i;?>">
                                            <?php echo $i;?>
                                        </option>
                                        <?php endfor;?>
                                    </select>&ensp;&ensp;
                                    <input type="hidden" name="product" value="Vitamin">
                                    <?php if(isset($cart['Vitamin']) === TRUE): ?>
                                    <input type="image" src="../img/ok.png" class="image is-24x24">
                                    <?php else: ?>
                                    <input type="image" src="../img/buy.png" class="image is-24x24">
                                    <?php endif;?>
                                </div>
                            </div>
                            <figure class="image is-96x96" id="proimg">
                                <img src="../img/supli1.png">
                            </figure>
                        </article>
                    </div>
                </form>
                <form action="" method="POST">
                    <div class="tile is-parent" id="parent">
                        <article class="tile is-child box">
                            <div id="item">
                                <p id="itemname">ミネラル</p>
                                <p name="price">1,000円</p>
                                <div id="item2">
                                    <select class="select is-rounded" name="num">
                                        <?php for($i=1; $i<10; $i++): ?>
                                        <option value="<?php echo $i;?>">
                                            <?php echo $i;?>
                                        </option>
                                        <?php endfor;?>
                                    </select>&ensp;&ensp;
                                    <input type="hidden" name="product" value="mineral">
                                    <?php if(isset($cart['mineral']) === TRUE): ?>
                                    <input type="image" src="../img/ok.png" class="image is-24x24">
                                    <?php else: ?>
                                    <input type="image" src="../img/buy.png" class="image is-24x24">
                                    <?php endif;?>
                                </div>
                            </div>
                            <figure class="image is-96x96" id="proimg">
                                <img src="../img/supli3.png">
                            </figure>
                        </article>
                    </div>
                </form>
                <form action="" method="POST">
                    <div class="tile is-parent" id="parent">
                        <article class="tile is-child box">
                            <div id="item">
                                <p id="itemname">健康飲料</p>
                                <p name="price">500円</p>
                                <div id="item2">
                                    <select class="select is-rounded" name="num">
                                        <?php for($i=1; $i<10; $i++): ?>
                                        <option value="<?php echo $i;?>">
                                            <?php echo $i;?>
                                        </option>
                                        <?php endfor;?>
                                    </select>&ensp;&ensp;
                                    <input type="hidden" name="product" value="energy">
                                    <?php if(isset($cart['energy']) === TRUE): ?>
                                    <input type="image" src="../img/ok.png" class="image is-24x24">
                                    <?php else: ?>
                                    <input type="image" src="../img/buy.png" class="image is-24x24">
                                    <?php endif;?>
                                </div>
                            </div>
                            <figure class="image is-96x96" id="proimg">
                                <img src="../img/supli4.png">
                            </figure>
                        </article>
                    </div>
                </form>
            </div>
            <br>
            <div id="icon">
                <a class="button is-small is-outlined is-rounded has-background-white has-text-black" href="http://umegaki113.sakura.ne.jp/ec/php/productcart.php">
                    <span class="icon">
                        <i class="fa fa-cart-plus"></i>
                    </span>
                    <span>
                        カートを見る
                    </span>
                </a>
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