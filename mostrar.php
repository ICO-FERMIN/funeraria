

			<?php 
include("conexion.php"); 
$link=Conectarse(); 
$result="select * from productos";
?> 

<TABLE>
<caption>Productos y precios</caption>
  <!-- Definir estilos por columna -->
    <colgroup>
    <col class="col1"/>
    <col class="col2"/>
    <col class="col3"/>
    <col class="col1"/>
    <col class="col2"/>
    <col class="col3"/>
    <col class="col1"/>
  </colgroup>
  <!-- Encabezado de la tabla -->
  <thead>
<TR> 
<TD>&nbsp;CODIGO&nbsp;</TD>
<TD>&nbsp;NOMBRE&nbsp;</TD>
<TD>&nbsp;MARCA&nbsp;</TD>
<TD>&nbsp;DESCRIPCION&nbsp;</TD>
<TD>&nbsp;PRECIO&nbsp;</TD>
<TD>&nbsp;STOCK&nbsp;</TD>
<TD>&nbsp;TOTAL&nbsp;</TD>
</TR> 
<?php       
if($consulta = $link->query($result))
{
while($row = $consulta->fetch_assoc()) { 
   printf("<tr>
      <td>&nbsp;%s&nbsp</td>
      <td>&nbsp;%s&nbsp</td>
      <td>&nbsp;%s&nbsp</td>
      <td>&nbsp;%s&nbsp</td>
      <td>&nbsp;%s&nbsp</td>
      <td>&nbsp;%s&nbsp</td>
      <td>&nbsp;%s&nbsp</td>
      </tr>", 
      $row["codigo"],
      $row["nombre"],
      $row["marca"],
      $row["descripcion"],
      $row["precio"],
      $row["stock"],
      $row["total"]);
} 
$consulta->free();
}   
?> 
</table> 
