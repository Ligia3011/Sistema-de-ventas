<? php
     Conexion  clase extiende mysqli
    {
	    funci�n  p�blica __construct ()
       {

	        parent :: __construct ( 'localhost' , 'root' , '' , 'Usuarios' );
            $ this -> query ( "SET NAMES 'utf8';" );
            $ this -> connect_errno ? die ( 'Error en la conexi�n de la base de datos.' ): $ error = "<br> <br> Conectado con la base de datos:" ;
            // echo $ error;
            desarmado ( $ error );
       }
    }
?>