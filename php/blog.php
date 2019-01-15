<?php
try {
    $pdo    = new PDO('mysql:dbname=umegaki113_php;charset=utf8;host=mysql728.db.sakura.ne.jp','umegaki113','2525home', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    $stmt   = $pdo->prepare("SELECT * FROM gs_column ORDER BY id DESC");
    $status = $stmt->execute();

    $data  = array();
    $count = $stmt->rowCount();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $data[] = $row;
    }
}catch(PDOException $e){
    exit('DbConnectError:'.$e->getMessage());
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>COLUMN</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="../css/bulma.css">
    <link rel="stylesheet" href="../css/bulma.css.map">
    <link rel="stylesheet" href="../css/bulma.min.css">
    <link rel="stylesheet" href="../css/bali.css">
    <style>
        body {
            font-family: 'ヒラギノ明朝 ProN W6','HiraMinProN-W6';
            }
    .columns:nth-child(2){
        margin-top: -10rem;}

    .container{
        margin:15px auto 10px auto;
    }

    #image{
        margin:0 auto 5px auto;
        text-align:center;
        display:flex;
    }

    #subtitle{
        text-align:center;
        padding-top:38px;
        padding-bottom:20px;
    }

    #img{
        margin:0 5px 0px 5px;
    }
    #blog{
        height:50px;
    }

    #add{
        margin:0 auto;
        text-align:center;
    }

    #name{
            font-size:20px;
            color:#454545;
        }
        
    </style>
</head>

<body>
    <section class="hero is-info is-small has-background-white-ter has-text-grey-darker">
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
                <div class="navbar-menu has-background-white-ter" id="navMenu">
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
    </section>
    <p class="subtitle has-text-grey-darker" id="subtitle">COLUMN</p>
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
                            <h4>風邪におすすめの精油</h4>
                            <p>レモン(解熱、殺菌)、ユーカリ(鎮咳、去痰、解熱)、ラベンダー(鎮咳)、カミツレ(解熱、抗炎症、殺菌、発汗)、ローズマリー(鎮咳、去痰、解熱)、セージ(抗流感、収斂、殺菌、消毒)などが挙げられます。</p>
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
                            <h4>ビタミン、摂ってますか？</h4>
                            <p>ビタミンは私たちの体を働かせるために少量摂取する必要がある有機化合物で、体を作るもの、守るもの、管理するものに分かれます。ビタミンには2種類のタイプがあります。脂溶性のものと水溶性のものです。</p>
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
                            <h4>オメガ9脂肪酸について</h4>
                            <p>オメガ9系脂肪酸は、代表的な脂肪酸としてはオレイン酸があり、オレイン酸は油から取り入れる他、体内でも合成されます。血中の善玉コレステロールはそのままで、悪玉コレステロール濃度を下げると言われています。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br><br>
    </section>
    <form method='post' action=''>
        <section class="container">
            <?php foreach($data as $row): ?>
            <?php $id = $row['id'] ?>
            <div class="columns features">
                <div class="column is-4">
                    <div class="card is-shady">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <!-- <img src="../img/fennel.jpg" alt="Placeholder image" class="modal-button" data-target="modal-image2"> -->
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="content">
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                <h4 name="title">
                                    <?php echo $row['title']; ?>
                                </h4>
                                <p name="naiyou">
                                    <?php echo $row['naiyou']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
    </form>
    </section>


    <!-- <figure class="image is-48x48" id="add">
        <a href=""><img src="../img/add.png"></a>
    </figure> -->


    <div class="hero-foot  has-background-white-ter">
        <div class="container">
            <div class="tabs is-centered has-text-grey">
                <ul>
                    <li><a>Copyright © 2018 UMEGAKI All Rights Reserved.</a></li>
                </ul>
            </div>
        </div>
    </div>
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