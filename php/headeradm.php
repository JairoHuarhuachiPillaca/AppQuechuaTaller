<!DOCTYPE html>
<html lang="en">
<head>
<style >
 *{
    box-sizing: border-box;
}



h1{ font-size: 3.5em;}
h2{ font-size: 2.7em;}
h3{ font-size: 2em;}
p{ font-size: 1.25em;}
ul{ list-style: none;}
li{ font-size: 1.25em;}


.container{
    max-width: 1400px;
    margin: auto;
}

.color-acento{ color:blueviolet; }

header{
    background-color: #D476FA;
    
}

header .logo{
    margin: 0;
    padding: 1px 30px;
    font-weight: bold;
    color: #17071E ;
    font-size: 1.4em;
}

header .container{
    display: flex;
    flex-direction: column;
    align-items: center;
}

header nav{
    display: flex;
    flex-direction: column;
    text-align: center;
    padding-bottom: 25px;
}

header a{
    padding: 5px 12px;
    text-decoration: none;
    font-weight: bold;
    color: black;
}

header a:hover{
    color: rgb(138, 37, 67);
}



@media (min-width: 850px){
    header{
        position: fixed;
        width: 100%;
    }

    header .container{
        flex-direction: row;
        justify-content: space-between;
    }

    header nav{
        flex-direction: row;
        padding-bottom: 0;
        padding-right: 20px;
    }




}



</style>

</head>

<body>

    <header>
        <div class="container">
            <p class="logo">APRENDE QUECHUA CON NOSOTROS</p>
            <nav>
                <!-- <a href="#somos-proya">Quienes Somos</a> -->
                <a href="admin.php">Categorias</a>
                <a href="#evaluacion">Evaluacion</a>
                <a href="perfil.php">Perfil</a>
                <a href="logout.php">Salir</a>
            </nav>
        </div>
    </header>
    
</body>
</html>