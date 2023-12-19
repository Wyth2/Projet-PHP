<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    #header {
        margin: 0;
    font-family: 'Open Sans', sans-serif;
    }
    nav {
    background-color: transparent;
    height: 100px;
    display: flex;
    align-items: center;   
    text-decoration: none;
}
p {
    color: #fff;
}
    
</style>
<body id='header'>
    <header>
        <div class="Barre">
        <nav>
        <img src="7ffce97d6a2274356878e0c7a905afbf.png" alt="">
            <ul>
                <li>
                <?php if(!isset($_SESSION['nom'])) { ?>

                    <a style='text-decoration: none;' href="?page=connexion">Connexion</a>

                    <a style='text-decoration: none;' href="?page=inscription">Inscription</a>
                    <?php } else { ?>
           <p> Bonjour <?=@$_SESSION['nom']?></p>
            <a href="?page=exit">Se deconnecter</a>
            <?php } ?>

                    <a style='text-decoration: none;' href="?page=articles">Séries</a>
                </li>
            </ul>
        </nav>
        </div>
    </header>
