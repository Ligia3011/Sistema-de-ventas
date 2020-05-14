<!doctype html>
<head>
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <title>ventas</title>
</head>
   <body     background="03.png";>
       <div align="center">
           <br />
           <h1>DIOR</h1>
           <hr />
           
           <br />
       </div>
       <div>
           <table>
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
                   <a href="?producto=Serum Dior&precio=1600">comprar</a>
                   </td>
               </tr>
               <tr>
                   <td><img src="Bolso Dior.png" width="300" height="300" /></td>
                   <td>Bolso Dior</td>
                   <td>Q.3000</td>
                   <td>
                   <a href="?producto=BolsoDior&precio=3000">comprar</a>
                   </td>
               </tr>
               <tr>
                   <td><img src="Brazalete Petit CD.png" width="300" height="300" /></td>
                   <td>Brazalete petit CDior</td>
                   <td>Q.2500</td>
                   <td>
                   <a href="?producto=Brazaletepetit&precio=2500">comprar</a>
                   </td>
               </tr>
               <tr>
                   <td><img src="Vestido CD.png" width="300" height="300" /></td>
                   <td>Vestido CDior</td>
                   <td>Q.6500</td>
                   <td>
                   <a href="?producto=VestidoCDior&precio=6500">comprar</a>
                   </td>
               </tr>
               <tr>
                   <td><img src="Shoes Dior Oblique.png" width="300" height="300" /></td>
                   <td>Shoes CD</td>
                   <td>Q.8000</td>
                   <td>
                   <a href="?producto=ShoesDiorOblique&precio=8000">comprar</a>
                   </td>
               </tr>
               <tr>
                   <td><img src="Sandalia JAdior.png" width="300" height="300" /></td>
                   <td>Sandalias de tacón JAdior</td>
                   <td>Q.6500</td>
                   <td>
                   <a href="?producto=SandaliasdetacónJAdior&precio=6500">comprar</a>
                   </td>
               </tr>
               <tr>
                   <td><img src="Sandalia de salon.png" width="300" height="300" /></td>
                   <td>Sandalias de salon JAdior</td>
                   <td>Q.6500</td>
                   <td>
                   <a href="?producto=>SandaliasdesalonJAdior&precio=6500">comprar</a>
                   </td>
               </tr>
           </table>

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