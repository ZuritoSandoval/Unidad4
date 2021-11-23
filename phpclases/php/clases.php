<?php

class Persona {

    private $nombre;
    private $apellidos;
    private $edad;

    function __construct($nombre, $apellidos, $edad)
    {
        $this->nombre = $_POST["nombre"];
        $this->apellidos = $_POST["apellidos"];
        $this->edad = $_POST["edad"];
    }

    function __get($propiedad)
    {
        if(property_exists($this, $propiedad)){
            return $this->$propiedad;
        }
    }

    function __set($propiedad, $valor){
        if(property_exists($this, $propiedad)){
            $this->$propiedad = $valor;
        }
    }

    function mayorEdad(){
        return $this->edad >= 18;
    }
    function edadMostrar(){
        return $this->edad;
    }

    function nombreCompleto(){
        return $this->nombre . " " . $this->apellidos;
    }

}

$persona = new Persona("Fernando", "Mejia Gomez", 9);

if($persona->mayorEdad()){
    echo "<!DOCTYPE html>
    <html lang='en'>
      <head>
        <meta charset='UTF-8' />
        <meta name='viewport' content='width=device-width, initial-scale=1.0' />
        <title>Document</title>
        <style>
          @import url('https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,200&display=swap');
    
          * {
            margin: 0;
            padding: 0;
            border: 0;
          }
    
          body {
            font-family: 'Raleway', sans-serif;
            background-color: #d8dada;
            font-size: 19px;
            max-width: 800px;
            margin: 0 auto;
            padding: 3%;
          }
    
          img {
            max-width: 100%;
          }
    
          header {
            width: 98%;
          }
    
          #logo {
            max-width: 120px;
            margin: 3% 0 3% 3%;
            float: left;
          }
    
          #wrapper {
            background-color: #f0f6fb;
          }
    
          #social {
            float: right;
            margin: 3% 2% 4% 3%;
            list-style-type: none;
          }
    
          #social > li {
            display: inline;
          }
    
          #social > li > a > img {
            max-width: 35px;
          }
    
          h1,
          p {
            margin: 3%;
          }
          .btn {
            float: right;
            margin: 0 2% 4% 0;
            background-color: #303840;
            color: #f6faff;
            text-decoration: none;
            font-weight: 800;
            padding: 8px 12px;
            border-radius: 8px;
            letter-spacing: 2px;
          }
    
          hr {
            height: 1px;
            background-color: #303840;
            clear: both;
            width: 96%;
            margin: auto;
          }
    
          #contact {
            text-align: center;
            padding-bottom: 3%;
            line-height: 16px;
            font-size: 12px;
            color: #303840;
          }
        </style>
      </head>
      <body>
        <div id='wrapper'>
          <header>
            <div id='logo'>
              <img
                src='../img/Fenix.png'
                alt=''
              />
            </div>
            <div>
              <ul id='social'>
                <li>
                  <a href='https://www.facebook.com/Juegos-Lag-106855138483149/' target='_blank'
                    ><img
                      src='https://mdbgo.io/dawidadach/responsiveemail/img/fb-color.png'
                      alt=''
                  /></a>
                </li>
                <li>
                  <a href='https://www.instagram.com/juegoslag/?hl=es' target='_blank'
                    ><img
                      src='https://mdbgo.io/dawidadach/responsiveemail/img/in-color.png'
                      alt=''
                  /></a>
                </li>
                <li>
                  <a href='https://twitter.com/home' target='_blank'
                    ><img
                      src='https://mdbgo.io/dawidadach/responsiveemail/img/tw-color.png'
                      alt=''
                  /></a>
                </li>
                <li>
                  <a href='https://www.youtube.com/watch?v=XaY5cv-CORw&list=LL&index=13&t=3s' target='_blank'
                    ><img
                      src='https://mdbgo.io/dawidadach/responsiveemail/img/yt-color.png'
                      alt=''
                  /></a>
                </li>
              </ul>
            </div>
          </header>
          <div id='banner'>
            <img
              src='../img/b.png'
              alt=''
            />
          </div>
          <div class='one-col'>
            <h1>Tu nombre es: ".$persona->nombreCompleto()."</h1>
    
            <p>
              Eres mayor de edad<br>
              Tu edad es:".$persona->edadMostrar()."
            </p>
    
            <p>
              Esta pagina fue creada por el equipo 2, integrada por: Fernando Brayan Mejia Gomez (Programador),
              Armando Lopez Gondar (Tester), Eduardo Antonio Mendez Sandoval (Diseñador web), 
              Erik Daniel Alvarez Velazquez (Diseñador SQL). Con el proposito de mejorar los conocimientos sobre el PHP OO
            </p>
    
            <a href='../index.html' class='btn'>Inicio</a>
    
            <hr />
    
            <footer>
              <p id='contact'>
                Contacto principal: <a type='tel'>5540124899</a><br />
                Ciudad de Mexico, Mexico<br />
                Copyright &copy; Juegos lag 2021<br />
                <a type='Email'>fernando.brayan.m.g@gmail.com</a>
              </p>
            </footer>
          </div>
        </div>
      </body>
    </html>";
}else{
   echo "<!DOCTYPE html>
   <html lang='en'>
     <head>
       <meta charset='UTF-8' />
       <meta name='viewport' content='width=device-width, initial-scale=1.0' />
       <title>Document</title>
       <style>
         @import url('https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,200&display=swap');
   
         * {
           margin: 0;
           padding: 0;
           border: 0;
         }
   
         body {
           font-family: 'Raleway', sans-serif;
           background-color: #d8dada;
           font-size: 19px;
           max-width: 800px;
           margin: 0 auto;
           padding: 3%;
         }
   
         img {
           max-width: 100%;
         }
   
         header {
           width: 98%;
         }
   
         #logo {
           max-width: 120px;
           margin: 3% 0 3% 3%;
           float: left;
         }
   
         #wrapper {
           background-color: #f0f6fb;
         }
   
         #social {
           float: right;
           margin: 3% 2% 4% 3%;
           list-style-type: none;
         }
   
         #social > li {
           display: inline;
         }
   
         #social > li > a > img {
           max-width: 35px;
         }
   
         h1,
         p {
           margin: 3%;
         }
         .btn {
           float: right;
           margin: 0 2% 4% 0;
           background-color: #303840;
           color: #f6faff;
           text-decoration: none;
           font-weight: 800;
           padding: 8px 12px;
           border-radius: 8px;
           letter-spacing: 2px;
         }
   
         hr {
           height: 1px;
           background-color: #303840;
           clear: both;
           width: 96%;
           margin: auto;
         }
   
         #contact {
           text-align: center;
           padding-bottom: 3%;
           line-height: 16px;
           font-size: 12px;
           color: #303840;
         }
       </style>
     </head>
     <body>
       <div id='wrapper'>
         <header>
           <div id='logo'>
             <img
               src='../img/Fenix.png'
               alt=''
             />
           </div>
           <div>
             <ul id='social'>
               <li>
                 <a href='https://www.facebook.com/Juegos-Lag-106855138483149/' target='_blank'
                   ><img
                     src='https://mdbgo.io/dawidadach/responsiveemail/img/fb-color.png'
                     alt=''
                 /></a>
               </li>
               <li>
                 <a href='https://www.instagram.com/juegoslag/?hl=es' target='_blank'
                   ><img
                     src='https://mdbgo.io/dawidadach/responsiveemail/img/in-color.png'
                     alt=''
                 /></a>
               </li>
               <li>
                 <a href='https://twitter.com/home' target='_blank'
                   ><img
                     src='https://mdbgo.io/dawidadach/responsiveemail/img/tw-color.png'
                     alt=''
                 /></a>
               </li>
               <li>
                 <a href='https://www.youtube.com/watch?v=XaY5cv-CORw&list=LL&index=13&t=3s' target='_blank'
                   ><img
                     src='https://mdbgo.io/dawidadach/responsiveemail/img/yt-color.png'
                     alt=''
                 /></a>
               </li>
             </ul>
           </div>
         </header>
         <div id='banner'>
           <img
             src='../img/b.png'
             alt=''
           />
         </div>
         <div class='one-col'>
           <h1>Tu nombre es: ".$persona->nombreCompleto()."</h1>
   
           <p>
             Eres menor de edad :(<br>
             Tu edad es:".$persona->edadMostrar()."
           </p>
   
           <p>
             Esta pagina fue creada por el equipo 2, integrada por: Fernando Brayan Mejia Gomez (Programador),
             Armando Lopez Gondar (Tester), Eduardo Antonio Mendez Sandoval (Diseñador web), 
             Erik Daniel Alvarez Velazquez (Diseñador SQL). Con el proposito de mejorar los conocimientos sobre el PHP OO
           </p>
   
           <a href='../index.html' class='btn'>Inicio</a>
   
           <hr />
   
           <footer>
             <p id='contact'>
               Contacto principal: <a type='tel'>5540124899</a><br />
               Ciudad de Mexico, Mexico<br />
               Copyright &copy; Juegos lag 2021<br />
               <a type='Email'>fernando.brayan.m.g@gmail.com</a>
             </p>
           </footer>
         </div>
       </div>
     </body>
   </html>";
        }

?>