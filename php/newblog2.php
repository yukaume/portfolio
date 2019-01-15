<?php
if(!isset($_POST['title']) || $_POST['title'] == ''){
    exit('ParamError');
}

$title  = htmlspecialchars($_POST['title']);
$naiyou = htmlspecialchars($_POST['naiyou']);

try {
    $pdo = new PDO('mysql:dbname=umegaki113_php;charset=utf8;host=mysql728.db.sakura.ne.jp','umegaki113','2525home', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
}catch(PDOException $e){
    exit('DbConnectError:'.$e->getMessage());
}

$sql  = 'INSERT INTO gs_column(id, title, naiyou)VALUES(NULL, :title, :naiyou)';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':title', $title, PDO::PARAM_STR);
$stmt->bindValue(':naiyou', $naiyou, PDO::PARAM_STR);
$status .= $stmt->execute();

if($status == false){
    queryError($stmt);
}else{
    header('Location: blog.php');
    exit;
}

?>


