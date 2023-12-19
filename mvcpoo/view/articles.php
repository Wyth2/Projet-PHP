<style>
    img{
        width : 300px;
    }
    div{
        margin-top : 100px;
    }
    body  {
        background-color: #141414; 
        font-family: 'Open Sans', sans-serif;
    }
    *{
    box-sizing: border-box;
}
nav{
    background-color: transparent;
    height: 100px;
    display: flex;
    align-items: center;    
}
nav img{
    width: 200px;
}
label{
    color: #fff;
    margin-left: 10px;
}
p{
    color: #737373;
}
a{
    color: #fff;
}
.content{
    margin: 0 10%;
    margin-top: 150px;
}
.row{
    display: flex;
    justify-content: center;
}
h1{
    color: #fff;
    font-size: 3em;
    display: flex;
    justify-content: center;
}
h2{
    color: #fff;
    font-size: 2em;
}
nav {
    position: absolute;
    width: 100%;
    top: 0;
    left: 0;

}
.series {
    text-align:center;
}
</style>

<h1>Series</h1>

<?php if(isset($_SESSION['nom'])) { ?>
<?php foreach ($articles as $article) { ?>

        <div class = 'series'>
            <h2><?= $article['name'] ?></h2>
           <a href=''> <img src="<?php echo $article['image']?>"></a>
           <p><?php echo $article['date']; ?></p>
        </div>


<?php } ?>
<?php } else { ?>
            <h1>Connectez-vous </h1>
            <?php } ?>
