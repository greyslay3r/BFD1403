<?php


require_once "db.php";
require_once "AuthModel.php";
require_once "AuthView.php";

$model = new AuthModel(MY_DSN, MY_USER, MY_PASS);
$view = new AuthView();

$username = empty($_POST['username']) ? '' : strtolower(trim($_POST['username']));
$password = empty($_POST['password']) ? '' : trim($_POST['password']);

$contentPage = 'form';

if (!empty($username) && !empty($password)) {  // if both exist.. then make the model call
	$user = $model->getUserByNamePass($username, $password);
	if (is_array($user)) {
		$contentPage = 'success';  //if user is valid, then show success page
	}

}

$view->show('header');
$view->show($contentPage, $user);
$view->show('footer');

?>
