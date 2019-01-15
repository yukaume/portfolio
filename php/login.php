<?php
session_start();

if(isset($_SESSION['USERID'])){
    header('Location: topmenber.php');
    exit;
}

$error = '';

if(isset($_POST['login'])){
    if(empty($_POST['email'])){
        $error = 'メールアドレスが未入力です。';
    }elseif(empty($_POST['pass'])){
        $error = 'パスワードが未入力です。';
    }
    if(!empty($_POST['email']) && !empty($_POST['pass'])){
        $email = htmlspecialchars($_POST['email']);
        
    }
    
    try {
        $pdo = new PDO('mysql:dbname=umegaki113_php;charset=utf8;host=mysql728.db.sakura.ne.jp','umegaki113','2525home', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $stmt = $pdo->prepare("SELECT * FROM gs_sign WHERE name = ?");
        $stmt->execute(array($email));
        $pass  = htmlspecialchars($_POST['pass']);

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if(password_verify($pass, $result['pass'])){
            $_SESSION['USERID'] = $email;
            header('Location: topmenber.php');
            exit();
        }else{
            $error = 'ユーザーIDあるいはパスワードに誤りがあります。';
        }
    } catch (PDOException $e) {
        exit('DbConnectError:'.$e->getMessage());
      }
      
}


?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LogIn</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.css">
    <link rel="stylesheet" href="css/bulma.css.map">
    <link rel="stylesheet" href="css/bulma.min.css">
</head>
<body>
    
</body>
</html>
</head>

<body id="body">
    <section class="hero is-fullheight">
    
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Login</h3>
                    <p class="subtitle has-text-grey">Please log in.</p>
                    <div class="box">
                        <figure class="avatar">
                            <img src="../img/hito.png" width="120px">
                        </figure>
                        <form name="loginform" action="" method="post">
                            <div class="field">
                                <div class="control">
                                    <p><?php echo $error ?></p>
                                    <input class="input is-medium" type="email" name="email" placeholder="Your Email" autofocus="" value="<?php if (!empty($_POST['email'])) {echo htmlspecialchars($_POST['email'], ENT_QUOTES);} ?>">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input class="input is-medium" type="password" name="pass" placeholder="Your Password">
                                </div>
                            </div>
                            <input type="hidden" name="name">
                            <input type="submit" class="button is-block has-background-grey-light is-large is-fullwidth" name="login" value="Login"></input>
                        </form>
                    </div>
                    <p class="has-text-grey">
                        <a href="http://umegaki113.sakura.ne.jp/ec/php/signup.php">Sign Up</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <script async type="text/javascript" src="../js/bulma.js"></script>
</body>

</html>