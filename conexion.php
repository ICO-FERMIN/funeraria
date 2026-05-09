
   <?php 
   function Conectarse() 
   { 
       $usuario = 'root';
       $pass = '';
       $database = 'ferreteria';
       $link=new mysqli("localhost", $usuario, $pass, $database);      
      return $link; 
   } 
   ?> 
