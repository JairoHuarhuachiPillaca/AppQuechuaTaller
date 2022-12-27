<?php $page='dashboard';
include("php/dbconnect.php");
include("php/checklogin.php");
include("php/checkstudent.php");

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>App Kichuarimay</title>
    <link href="css/botts.css" rel="stylesheet" />

<style >
 *{
    box-sizing: border-box;
}

html{
    scroll-behavior: smooth;
}

body{
    font-family: 'Roboto', sans-serif;
    margin: 0;
}

h1{ font-size: 3.5em;}
h2{ font-size: 2.7em;}
h3{ font-size: 2em;}
p{ font-size: 1.25em;}
ul{ list-style: none;}
li{ font-size: 1.25em;}

button{
    font-size: 1.25em;
    font-weight: bold;
    padding: 10px 30px;
    border-radius: 5px;
    border: 2px solid rgba(0,0,0,0.3);
    box-shadow: 2px 2px 10px rgba(0,0,0,0.5);
    color: white;
    background-color: rgb(47, 159, 211);
}

button:hover{
    background-color: rgb(21, 104, 151);
}

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


#nuestras-categorias{
    background-color: rgb(30,30,30);
    color: white;
    text-align: center;
}

#nuestras-categorias .container{
    padding: 70px 12px;
}

#nuestras-categorias h2{
    margin-top: 0;
    margin-bottom: 0;
    font-size: 3.2em;
}

#nuestras-categorias p{
    display: none;
}

#nuestras-categorias .carta{
    background-position: center center;
    background-size: cover;
    padding: 50px 0px;
    margin: 30px;
    border-radius: 15px;
}
#nuestras-categorias .cartaD{
    background-position: center center;
    background-size: cover;
    padding: 50px 0px;
    margin: 30px;
    border-radius: 15px;
}
#evaluacion{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    background-color: rgb(255, 255, 255);
    color: rgb(8, 8, 8);
    height: 30vh;
}

#evaluacion h2{
    margin-top: 0;
    font-size: 9vw;
}

#evaluacion button{
    font-size: 5vw;
}

footer{
    background-color: rgb(230,230,230);
}

footer p{
    margin: 0;
    padding: 12px;
    color: rgb(100,100,100);
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

    #portada h1{
        font-size: 5em;
    }

    

    #nuestras-categorias .categorias{
        display: flex;
        justify-content: center;
    }

    #nuestras-categorias p{
        display: block;
        margin-bottom: 30px;
    }

    #nuestras-categorias h2{
        font-size: 4em;
    }

    #nuestras-categorias h3{
        margin-top: 0;
    }

    #nuestras-categorias .carta{
        padding: 50px;
        background-size: 100% 150px;
        background-repeat: no-repeat;
        background-position-y: 0;
        background-color: rgba(50, 50, 50, 1);
        box-shadow: 2px 2px 10px rgba(0,0,0,0.5);
    }
    #nuestras-categorias .cartaD{
        padding: 50px;
        background-size: 100% 150px;
        background-repeat: no-repeat;
        background-position-y: 0;
        background-color: rgba(50, 50, 50, 1);
        box-shadow: 2px 2px 10px rgba(0,0,0,0.5);
    }

    .carta:first-child{
        background-image: linear-gradient(
            0deg,
            rgba(0,0,0,0.5),
            rgba(0,0,0,0.5)
        )
        ,url("media/animales.jpg");

    }

    .carta:nth-child(2){
        background-image: linear-gradient(
            0deg,
            rgba(0,0,0,0.5),
            rgba(0,0,0,0.5)
        )
        ,url("media/colores.jpg");
    }

    .carta:nth-child(3){
        background-image: linear-gradient(
            0deg,
            rgba(0,0,0,0.5),
            rgba(0,0,0,0.5)
        )
        ,url("media/numeros.jpg");

    }

    .cartaD:first-child{
        background-image: linear-gradient(
            0deg,
            rgba(0,0,0,0.5),
            rgba(0,0,0,0.5)
        )
        ,url("media/plantas.jpg");

    }

    .cartaD:nth-child(2){
        background-image: linear-gradient(
            0deg,
            rgba(0,0,0,0.5),
            rgba(0,0,0,0.5)
        )
        ,url("media/cuerpo.jpg");

    }

    .cartaD:nth-child(3){
        background-image: linear-gradient(
            0deg,
            rgba(0,0,0,0.5),
            rgba(0,0,0,0.5)
        )
        ,url("media/familia.jpg");

    }


   

    #evaluacion h2{
        font-size: 3em;
    }

    #evaluacion button{
        font-size: 2em;
    }
}



</style>

</head>
<body>
    <header>
		<?php include("php/header.php");?>
    </header>

    <section id="nuestras-categorias">
        <div class="container">
            <h2>Categorias</h2>
            <div class="categorias">
                <div class="carta">
                    <h3>Animales</h3>
                    <p>(Uywakuna)</p>
                    <button>Aprender</button>
                </div>
                <div class="carta">
                    <h3>Colores</h3>
                    <p>(Llimpikuna)</p>
                    <button>Aprender</button>
                </div>
                <div class="carta">
                    <h3>Numeros</h3>
                    <p>(Yupaykuna)</p>
                    <button>Aprender</button>
                </div>
            </div>
            <div class="categorias">
                <div class="cartaD">
                    <h3>Plantas</h3>
                    <p>(Yura)</p>
                    <button>Aprender</button>
                </div>
                <div class="cartaD">
                    <h3>Cuerpo</h3>
                    <p>(Kurku)</p>
                    <button>Aprender</button>
                </div>
                <div class="cartaD">
                    <h3>Familia</h3>
                    <p>(Ayllu)</p>
                    <button>Aprender</button>
                </div>  
            </div>
        </div>
    </section>
    <section id="evaluacion">
        <h2>Listo para medir tu conocimiento?</h2>
        <button>EVALUACION</button>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2022</p>
        </div>
    </footer>
</body>


</html>
