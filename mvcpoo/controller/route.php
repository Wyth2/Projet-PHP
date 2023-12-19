<?php

$page = $_GET['page'];

if ($page == 'articles') {
    include_once('controller/articlesController.php');
    $articles = new ArticlesController;
    $articles->getArticles();
} elseif ($page == 'inscription') {
    include_once('controller/usersController.php');
    $user = new UsersController;
    $user->setUser();
} elseif ($page == 'authentification') {
    include_once('controller/usersController.php');
    $user = new UsersController;
    $user->getAuthentification();
} elseif ($page == 'exit') {
    $_SESSION=array();
}elseif ($page == 'connexion') {
        include_once('controller/usersController.php');
        $user = new UsersController;
        $user->getAuthentification();
    }
    elseif($page == 'inscription') {
        include_once('controller/usersController.php');
    $user = new UsersController;
    $user->setUser();
    }
    elseif ($page == 'exit') {
        $_SESSION=array();
    }
else {
    echo 'page introuvable';
}