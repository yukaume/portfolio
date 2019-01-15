<?php
// $name     = "";
// $email    = "";
// $password = "";

session_start();
$name  = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$password = htmlspecialchars($_POST["password"]);

include('include/funcs.php');
include('include/helper.php');

$pdo = db_con();

function validation($data) {

	$error = array();

	// 氏名のバリデーション
	if( empty($data['name']) ) {
		$error[] = "「氏名」は必ず入力してください。";

	} elseif( 20 < mb_strlen($data['name']) ) {
		$error[] = "「氏名」は20文字以内で入力してください。";
	}

	// メールアドレスのバリデーション
	if( empty($data['email']) ) {
		$error[] = "「メールアドレス」は必ず入力してください。";

	} elseif( !preg_match( '/^[0-9a-z_.\/?-]+@([0-9a-z-]+\.)+[0-9a-z-]+$/', $data['email']) ) {
		$error[] = "「メールアドレス」は正しい形式で入力してください。";
    }
    return $error;
}

$stmt = $pdo->prepare("SELECT *FROM gs_memo WHERE name=:name AND email=:email AND password=:password AND life_flg=0");
$stmt->bindValue(':name', $name);
$stmt->bindValue(':email', $email);
$stmt->bindValue(':password', $password);
$res = $stmt->execute();

if($res == false){
    queryError($stmt);
}

$val = $stmt->fetch();

if($val['id'] != ""){
    $_SESSION["chk_ssid"] = session_id();
    $_SESSION["kanri_flg"] = $val['kanri_flg'];
    $_SESSION["name"] = $val['name'];
    header("Location: signup.php");
}else{
    header("Location: memo3kanri.php");
}
exit();









