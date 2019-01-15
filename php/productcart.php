<?php
session_start();

$cart = array();

//POSTが行われたら
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $product = $_POST['product'];
    $kind = $_POST['kind'];

    if($kind === 'change'){
        $num = $_POST['num'];
        $_SESSION['cart'][$product] = $num;
    }elseif($kind === 'delete'){
        unset($_SESSION['cart'][$product]);
    }
}

//セッションデータを変数に格納
if(isset($_SESSION['cart'])){
    $cart = $_SESSION['cart'];
}


?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ショッピングカート</title>
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
        body{
        line-height: 35px;
        font-family: 'ヒラギノ明朝 ProN W6','HiraMinProN-W6';

    }

    .title{
        text-align:center;
        margin:0 auto;
        justify-content: center;
    }

    .subtitle{
        text-align:center;
        margin:auto;
        justify-content: center;
    }
    #list{
        
        margin:0 auto;        
    }

    #img{
        display:flex;
        margin:0 auto;
        justify-content: center;
}

    #item{
        display:flex;
    }
    #name{
            font-size:20px;
            color:#454545;
    }
    #all1{
        text-align:center;
        margin:auto;
        justify-content: center;
        color:black;
        font-size:20px;
    }
    #all2{
        text-align:center;
        margin:auto;
        justify-content: center;
        color:black;
        font-size:16px;
        display:block;
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
            <!-- <div id="img">
    <figure class="image is-64x64">
    <a href="http://umegaki113.sakura.ne.jp/ec/php/productlist.php"><img src="../img/list.png" alt=""></a>
    </figure>
</div> -->


            <br>
            <h1 class="subtitle">ショッピングカート</h1>

            <table class='table is-bordered' style='text-align:center' 'line-height: 20px;' border="2" cellpadding="40px"
                cellspacing="15px">
                <tr>
                    <th>&ensp;&ensp;商品&ensp;&ensp;</th>
                    <th>&ensp;個数&ensp;</th>
                    <th>&ensp;数量&ensp;</th>
                    <th>&ensp;変更&ensp;</th>
                    <th>&ensp;金額&ensp;</th>
                    <th>&ensp;削除&ensp;</th>
                </tr>
                <?php foreach($cart as $key => $var): ?>
                <tr style='text-align:center' 'line-height: 15px;'>
                    <td style='text-align:center' 'line-height: 15px;'>
                        <?php
    switch($key){
        case 'toner':
        echo '化粧水';
        break;
        case 'essense';
        echo '美容液';
        break;
        case 'cream':
        echo 'クリーム';
        break;
        case 'Vitamin':
        echo 'ビタミン';
        break;
        case 'mineral':
        echo 'ミネラル';
        break;
        case 'energy':
        echo '健康飲料';
        break;
    }  
    ?>
                    </td>
                    <td style='text-align:center' 'line-height: 20px;' value="<?php echo $var ?>">
                        <?php echo $var ?>個</td>
                    <form action="" method='POST'>
                        <td style='text-align:center' 'line-height: 20px;'>
                            <select name="num">
                                <?php for($i=1; $i<10; $i++): ?>
                                <option value="<?php echo $i;?>">
                                    <?php echo $i; ?>
                                </option>
                                <?php endfor;?>
                            </select>
                        </td>
                        <td style='text-align:center' 'line-height: 20px;'>
                            <input type="hidden" name="kind" value="change">
                            <input type="hidden" name="product" value="<?php echo $key ?>">
                            <input type="submit" value="変更">
                        </td>
                    </form>
                    <td>
                        <?php
    $toner = 3000 * $var;
    $essense = 5000 * $var;
    $cream = 4500 * $var;
    $Vitamin = 1000 * $var;
    $mineral = 1000 * $var;
    $energy = 500 * $var;
    $price = "";
    switch($key){
        case 'toner':
        $price = $toner;
        break;
        case 'essense';
        $price = $essense;
        break;
        case 'cream':
        $price = $cream;
        break;
        case 'Vitamin':
        $price = $Vitamin;
        break;
        case 'mineral':
        $price = $mineral;
        break;
        case 'energy':
        $price = $energy;
        break;
    }  
    echo $price ."円";
    $all[] = $price;
    ?>
                    </td>
                    <form action="" method='POST'>
                        <td style='text-align:center' 'line-height: 20px;'>
                            <input type="hidden" name="kind" value="delete">
                            <input type="hidden" name="product" value="<?php echo $key ?>">
                            <input type="submit" value="削除">
                        </td>
                    </form>
                </tr>
                <?php endforeach;?>
            </table>
            <p id="all1">合計：
                <?php echo array_sum($all) ."円"; ?>
            </p><br>

            <!-- <div id="all2"> -->
            <!-- <p id="all"><br>レジへ進む</p> -->
            <!-- <a href="http://umegaki113.sakura.ne.jp/ec/php/pre.php" id="all2"><img class="image is-64x64" src="../img/pay.png" alt=""></a> -->
            <!-- </div> -->
            <div id="icon">
                <a class="button is-medium is-outlined is-rounded has-background-white has-text-black" href="http://umegaki113.sakura.ne.jp/ec/php/pre.php">
                    <span class="icon">
                        <i class="fa fa-jpy"></i>
                    </span>
                    <span>
                        レジへ進む
                    </span>
                </a>
            </div><br>
            <div id="icon">
                <a class="button is-small is-outlined is-rounded has-background-white has-text-black" href="http://umegaki113.sakura.ne.jp/ec/php/productlist.php">
                    <span class="icon">
                        <i class="fa fa-list"></i>
                    </span>
                    <span>
                        商品一覧を見る
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