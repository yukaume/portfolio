<?php

session_start();

if(isset($_SESSION['USERID'])){
    header('Location: topmenber.php');
    exit;
}

$db['host'] = 'localhost';
$db['user'] = 'root';
$db['pass'] = '';
$db['dbname'] = 'gs_sign';
$error = '';

if(isset($_POST['signup'])){
    if(empty($_POST['name'])){
        $error = 'お名前が未入力です。';
    }elseif(empty($_POST['email'])){
        $error = 'メールアドレスが未入力です。';
    }elseif(empty($_POST['pass'])){
        $error = 'パスワードが未入力です。';
    }
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['pass'])){
        $name  = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $pass  = htmlspecialchars($_POST['pass']);
        try {
            $pdo = new PDO('mysql:dbname=umegaki113_php;charset=utf8;host=mysql728.db.sakura.ne.jp','umegaki113','2525home', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
          } catch (PDOException $e) {
            exit('DbConnectError:'.$e->getMessage());
          }

        function cheak($id,$count,$mail){
            if($count > 0){
                throw new Exception('そのお名前は既に使用されています。');
            }
            if($id < 8){
                throw new Exception('パスワードは8桁以上で入力して下さい。');
            }
            if($mail > 0){
                throw new Exception('そのメールアドレスは既に使用されています。');
            }
        }
        try{
            $sqlname = "SELECT COUNT(*) FROM gs_sign WHERE `name` = '$name'";
            $sqlemail = "SELECT COUNT(*) FROM gs_sign WHERE `email` = '$email'";
            $ss    = $pdo->query($sqlname);
            $ee    = $pdo->query($sqlemail);
            $count = $ss->fetchColumn();
            $mail  = $ee->fetchColumn();
            $id    = strlen($_POST['pass']);
            cheak($id,$count,$mail);

            $stmt = $pdo->prepare('INSERT INTO `gs_sign`(`name`, `email`, `pass`)VALUES(:name, :email, :pass)');
            $password = password_hash($pass, PASSWORD_DEFAULT);
            $stmt->bindParam(':name', $name, PDO::PARAM_STR);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':pass', $password, PDO::PARAM_STR);
            $stmt->execute();

            $_SESSION['USERID'] = $name;
            echo '<script>
            alert("登録が完了しました。");
            location.href="topmenber.php";
            </script>';
        }catch(Exception $e){
            $error = $e->getMessage();
            }
    }

}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
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

            #name{
            font-size:20px;
            color:#454545;
        }
    </style>

    
</head>

<body id="body">
    <section class="hero is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Sign Up</h3>
                    <p class="subtitle has-text-grey">Please input user name,<br>email and password.</p>
                    <div class="box">
                        <figure class="avatar">
                            <img src="../img/hito.png" width="120px">
                        </figure>
                    <form action="" method="post" name="signupform">
                            <div class="field">
                                <div class="control">
                                    <p><?php echo $error ?></p>
                                    <input class="input is-medium" type="name" placeholder="Name" autofocus="" name="name" required="required" value="<?php if (!empty($_POST["name"])) {echo htmlspecialchars($_POST["name"], ENT_QUOTES);} ?>">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input class="input is-medium" type="email" placeholder="Email" autofocus="" name="email" required="required">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input class="input is-medium" type="password" placeholder="Password" name="pass" required="required" value="<?php echo $error ?>">
                                </div>
                            </div>
                            
                            <input  type="submit" class="button is-block has-background-grey-light is-large is-fullwidth" name="signup" value="Sign Up">
                            </div>
                    </form>
                    <p class="has-text-grey">
                        <a href="http://umegaki113.sakura.ne.jp/ec/php/top.php">HOME</a> 
                    </p>
                    
                </div>
            </div>
        </div>
    </section>
    <script async type="text/javascript" src="../js/bulma.js"></script>
</body>

</html>