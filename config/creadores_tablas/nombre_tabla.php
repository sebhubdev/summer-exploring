<?php
$sql="CREATE TABLE nombre_tabla (
  id  int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nombre_fila_1  varchar(100) NOT NULL,
  nombre_fila_2 varchar(10) NOT NULL
)";

if($sql=$db->query($sql)){echo "Tabla nombre_tabla fue creada con exito.<br>";}
else{echo "No se pudo crear la tabla nombre_tabla.<br>";}

$sql="ALTER TABLE nombre_tabla
ADD KEY nombre_fila_1 (nombre_fila_1),
ADD KEY nombre_fila_2 (nombre_fila_2);";

if($sql=$db->query($sql)){echo "Tabla nombre_tabla fue modificada con exito.<br>";}
else{echo "No se pudo modificar la tabla nombre_tabla.<br>";}




 ?>
