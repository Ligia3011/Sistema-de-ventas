<? php
     Conexion  clase extiende mysqli
    {

     public function __construct()     
    {

	        parent :: __construct ( 'localhost' , 'root' , '' , 'sistemadeventasplus' );
            $this -> query ( "SET NAMES 'utf8';" );
            $this -> connect_errno ? die ( 'Error en la conexi�n de la base de datos.' ): $ error = "<br> <br> Conectado con la base de datos:" ;
            // echo $ error;
            desarmado ( $ error );
    }
    }
?>