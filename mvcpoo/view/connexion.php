<style>
    body {
        margin: 0;
    background-image: url("netflix.jpeg");
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
form{
    background-color: rgba(0, 0, 0, .75);
    width: 400px;
    display: flex;
    flex-direction: column;
    padding: 20px;
    color: #fff;
}
input{
    padding: 16px 20px;
    margin: 5px 0;
    border: none;
    border-radius: 4px;
    background-color: #333;
    font-size: 16px;
    color: #fff;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    -ms-border-radius: 4px;
    -o-border-radius:4px;
    opacity: .8;
    outline: none;

}
input[type=submit]{
    background-color: rgb(211, 8, 18);
    font-weight: 700;
    text-transform: uppercase;
}
input[type=submit]:hover{
    background-color: rgb(173, 7, 15);
    cursor: pointer;
}
input[type=email]:focus,input[type=password]:focus{
    opacity: 1;
    background-color: rgb(34, 34, 34);
}
input[type=email]:focus,
input[type=password]:focus,
input[type=email]:hover,
input[type=password]:hover

{
    opacity: 1;
    background-color: rgb(34, 34, 34);
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
    display: flex;
    justify-content: center;
    margin-top: 5%;
}
</style>
    <div class="content">
        <div class="row">
            <form action="" method = "POST">
                <h2>S'identifier</h2>
                <input type="email" placeholder="Entrez votre email" name="email">
                <input type="password" placeholder="Entrez votre mot de passe" name="mdp">
                <input type="submit" value="connexion">
                <p>
                    <input type="checkbox" id="save">
                    <label for="save">Se souvenir de moi</label>
                </p>
                <p>
                    Première fois sur EfreiFlix ? <a href="inscription.html">Inscrivez-vous</a>
                </p>
            </form>
        </div>
    </div>