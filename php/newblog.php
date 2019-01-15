<?php 
$tempfile = $_FILES['fname']['tmp_name'];
$filename = $_FILES['fname']['name'];

if(is_uploaded_file($tempfile)){
    if(move_uploaded_file($tempfile, $filename)){
        echo $filename."をアップロードしました。";
    }else{
        echo "ファイルをアップロードできません。";
    }
}else{
    echo "ファイルが選択されていません。";
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
        margin-top: -10rem;
        }

    .container{
        margin:15px auto 10px auto;
        text-align:center;
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
    <section class="hero is-info is-small has-background-grey-lighter has-text-grey-darker">
    <nav class="navbar is-white topNav">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item" href="#">
                    <img src="../img/hana.png" width="33">
                </a>
                <div class="navbar-burger burger" data-target="topNav">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div id="topNav" class="navbar-menu">
                <div class="navbar-start">
                <a class="navbar-item" href="http://umegaki113.sakura.ne.jp/ec/php/top.php" id="name">HOME&nbsp;</a>
                <a class="navbar-item" href="http://umegaki113.sakura.ne.jp/ec/php/productlist.php" id="name">&nbsp;PRODUCT&nbsp;</a>
                <a class="navbar-item" href="http://umegaki113.sakura.ne.jp/ec/php/blog.php" id="name">&nbsp;COLUMN&nbsp;</a>
                <a class="navbar-item" href="http://umegaki113.sakura.ne.jp/ec/php/contact.php" id="name">&nbsp;CONTACT</a>
                </div>
                <div class="navbar-end">
                    <div class="navbar-item">
                        <div class="field is-grouped">
                            <p class="control">
                                <a class="button is-small is-outlined is-rounded has-background-white-ter" href="http://umegaki113.sakura.ne.jp/ec/php/signup.php">
                                    <span class="icon">
                                        <i class="fa fa-user-plus"></i>
                                    </span>
                                    <span>
                                        SignUp
                                    </span>
                                </a>
                            </p>
                            <p class="control">
                                <a class="button is-small is-outlined is-rounded has-background-white-ter" href="http://umegaki113.sakura.ne.jp/ec/php/login.php">
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
            <form action="blog.php" method="post" enctype="multipart/form-data">
                <figure class="image is-4by3">
                <!-- <img src="../img/fennel.jpg" alt="Placeholder image" class="modal-button" data-target="modal-image2"> -->
                <input type="file" name="fname">
                <input type="submit" value="アップロード">
                </figure>
            </form>
            </div>
            <form action="newblog2.php" method="post">
            <div class="card-content">
              <div class="content">
              <input type="hidden" name="id">
              <p>title:<br><input class="input is-rounded" type="text" placeholder="title" name="title"></p>
              <p>memo:<br><textarea class="textarea" placeholder="memo" name="naiyou"></textarea></p>
              <p id="button"><button class="button has-background-grey-light" value="送信">Submit</button></p>
              </div>
            </div>
          </div>
        </div>
        </form>
        <!-- <div class="column is-4">
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
        </div> -->
      </div>
      <br>
      </section>


    <figure class="image is-48x48" id="add">
        <a href=""><img src="../img/add.png"></a>
    </figure>

    
    <div class="hero-foot  has-background-white-ter">
            <div class="container">
                <div class="tabs is-centered has-text-grey">
                    <ul>
                        <li><a>Copyright © 2018 UMEGAKI All Rights Reserved.</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- <script async="" type="text/javascript" src="../js/bulma.js"></script> -->
  </body>
</html>
