<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>準備中</title>
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
        }
    </style>
</head>

<body class="has-background-grey-lighter">

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

        <p class="title">ただいま準備中です。</p>

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