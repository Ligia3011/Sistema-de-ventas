<!doctype html>
<head>
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <title>ventas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
   <body     background="03.png";>
       <div align="center">
           <br />
           <h1>DIOR</h1>
           <hr />
           
           <br />
       </div>
         <div class="container">
            <div class="row justify-content-center">
                <div class="clo-10 ">
                    <table class="table table-light">

               <tr>
                   <td><strong>Producto</strong></td>
                   <td><strong>Nombre</strong></td>
                   <td><strong>Precio</strong></td>
               </tr>

               <tr>
                   <td><img src="Dior-Serum.jpg" width="300" height="300" /></td>
                   <td>Serum Dior</td>
                   <td>Q.1600</td>
                   <td>
                   <a href="?producto=SerumDior&precio=1600">Añadir</a>
                   </td>
               </tr>
               <tr>
                   <td><img src="Bolso Dior.png" width="300" height="300" /></td>
                   <td>Bolso Dior</td>
                   <td>Q.3000</td>
                   <td>
                   <a href="?producto=BolsoDior&precio=3000">Añadir</a>
                   </td>
               </tr>
               <tr>
                   <td><img src="Brazalete Petit CD.png" width="300" height="300" /></td>
                   <td>Brazalete petit CDior</td>
                   <td>Q.2500</td>
                   <td>
                   <a href="?producto=Brazaletepetit&precio=2500">Añadir</a>
                   </td>
               </tr>
               <tr>
                   <td><img src="Vestido CD.png" width="300" height="300" /></td>
                   <td>Vestido CDior</td>
                   <td>Q.6500</td>
                   <td>
                   <a href="?producto=VestidoCDior&precio=6500">Añadir</a>
                   </td>
               </tr>
               <tr>
                   <td><img src="Shoes Dior Oblique.png" width="300" height="300" /></td>
                   <td>Shoes CD</td>
                   <td>Q.8000</td>
                   <td>
                   <a href="?producto=ShoesDiorOblique&precio=8000">Añadir</a>
                   </td>
               </tr>
               <tr>
                   <td><img src="Sandalia JAdior.png" width="300" height="300" /></td>
                   <td>Sandalias de tacón JAdior</td>
                   <td>Q.6500</td>
                   <td>
                   <a href="?producto=SandaliasdetacónJAdior&precio=6500">Añadir al carrito</a>
                   </td>
               </tr>
               <tr>
                   <td><img src="Sandalia de salon.png" width="300" height="300" /></td>
                   <td>Sandalias de salon JAdior</td>
                   <td>Q.6500</td>
                   <td>
                   <a href="?producto=>SandaliasdesalonJAdior&precio=6500">Añadir al carrito</a>
                   </td>
               </tr>
           </table>
           </div>
           </div>
       </div>

       </div>

      </body>
   </html>
 <?php
if(isset($_GET['producto']))
{

  include('Conexion.php');
                $con = new Conexion();
                $producto=$_GET['producto'];
                $precio=$_GET['precio'];

                $query="INSERT INTO `carrito`( `producto`, `precio`) VALUES ('$producto','$precio');";
                //echo " datos de producto ".$_GET['producto']."--- Precio ".$_GET['precio'];
                $consulta=$con->query($query);
                $con->close();

    
}
?>