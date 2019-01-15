<?php
$pageflg = 0;
if(!empty($_POST['submit'])){
    $pageflg = 1;
    $s = str_replace(array("\r\n", "\r"), "\n", $s);
    $autosub  = null;
    $autotext = null;
    date_default_timezone_set('Asia/Tokyo');

    $autosub  = 'お問い合わせありがとうございます。';
    $autotext = 'この度はお問い合わせ頂きまして誠にありがとうございます。'."\n";
                '追って担当者よりご連絡いたしますので、少々お時間を頂けますと幸いです。'."\n";
    
    $autotext .= 'お問い合わせ日時：'. date('Y年m月d日H時i分s秒') ."\n";
    $autotext .= 'お名前：'. $_POST['name'] .'様   '."\n";
    $autotext .= 'メールアドレス：'. $_POST['email']."\n";
    $autotext .= 'HB 事務局';

    
    mb_send_mail($_POST['email'], $autosub, $autotext);

}elseif(!empty($_POST['back'])){
    $pageflg = 2;
}

?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CONTACT</title>
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
            font-family: 'ヒラギノ明朝 ProN W6','HiraMinProN-W6';
            }

        #button{
            text-align:center;
            margin:50px auto;
            justify-content: center;
        }

        #field{
            display:flex;
        }

        #end{
            text-align:center;
            margin:50px auto;
            justify-content: center;
        }

        #name{
            font-size:20px;
            color:#454545;
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
                        <a class="button has-text-grey is-outlined is-small is-rounded has-background-white-ter" href="http://umegaki113.sakura.ne.jp/ec/php/top.php">
                            <span class="icon">
                                <i class="fa fa-home"></i>
                            </span>
                            <span>HOME</span>
                        </a>
                    </span>
                    <span class="navbar-item">
                        <a class="button has-text-grey is-outlined is-small is-rounded has-background-white-ter" href="http://umegaki113.sakura.ne.jp/ec/php/productlist.php">
                            <span class="icon">
                                <i class="fa fa-star"></i>
                            </span>
                            <span>PRODUCT</span>
                        </a>
                    </span>
                    <span class="navbar-item">
                        <a class="button has-text-grey is-outlined is-small is-rounded has-background-white-ter" href="http://umegaki113.sakura.ne.jp/ec/php/blog.php">
                            <span class="icon">
                                <i class="fa fa-book"></i>
                            </span>
                            <span>COLUMN</span>
                        </a>
                    </span>
                    <span class="navbar-item">
                        <a class="button has-text-grey is-outlined is-small is-rounded has-background-white-ter" href="http://umegaki113.sakura.ne.jp/ec/php/contact.php">
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
                                <a class="button is-small is-outlined is-rounded has-background-white-ter has-text-grey" href="http://umegaki113.sakura.ne.jp/ec/php/signup.php">
                                    <span class="icon">
                                        <i class="fa fa-user-plus"></i>
                                    </span>
                                    <span>
                                        SignUp
                                    </span>
                                </a>
                            </p>
                            <p class="control">
                                <a class="button is-small is-outlined is-rounded has-background-white-ter has-text-grey" href="http://umegaki113.sakura.ne.jp/ec/php/login.php">
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

    <div style='text-align:center'>
    <br>
    <h1 class="title">CONTACT</h1>
    </div>

<?php if($pageflg === 1): ?>
<div class="field" id="end">
  <p class="title">お問い合わせありがとうございます。</p>
  <p class="subtitle"><br>送信が完了しました。</p>
  <figure class="image is-48x48" id="end">
    <a href="#"><img src="../img/home.png" alt=""></a>
  </figure>  
</div>

<?php elseif($pageflg === 2): ?>
<?php header('Location: contact.php') ?>

<?php else: ?>
<div class="column is-4 is-offset-4">
<form action="" method="post">
<div class="field" id="field">
  <label class="label">Name：</label>
  <p class="has-text-grey"><?php echo htmlspecialchars($_POST['name'])?></p>
</div>

<div class="field" id="field">
  <label class="label">Email：</label>
  <p class="has-text-grey"><?php echo htmlspecialchars($_POST['email'])?></p>
</div>

<div class="field">
  <label class="label">Message：</label>
  <div class="control">
  <p class="has-text-grey"><?php echo htmlspecialchars($_POST['inquiry'])?></p>
  </div>
</div>

<div class="field is-grouped">
  <div class="control" id="button">
    <input type="submit" name="submit" class="button" value="送信"></button>
    <input type="submit" name="back" class="button" value="戻る"></button>
    <input type="hidden" name="name" class="button" value="<?php echo htmlspecialchars($_POST['name']) ?>"></button>
    <input type="hidden" name="email" class="button" value="<?php echo htmlspecialchars($_POST['email']) ?>"></button>
  </div>
</div>
</form>
</div>
<?php endif; ?>
<br>
<br>



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