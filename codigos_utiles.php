
<!-- CODIGO PARA BOTON DE ACCION -->

<?php
        $data_btn_accion=
        [
          "funcion"=>"prueba"
        ];
        $data_btn_accion=json_encode($data_btn_accion);
 ?>
<div class="btn_accion" data-funcion='<?php echo $data_btn_accion; ?>'>
        Prueba de evento click
</div>
<!-- FIN CODIGO PARA BOTON DE ACCION -->


<!-- CODIGO PARA POPUP GENERAL -->
<?php
        $data=
        [
          "funcion"=>"abrir_popup_general",
          "contenido"=>"modulos/popup_prueba.php",
          "ancho"=>"40vw",
          "top"=>"10vw"
        ];
        $data=json_encode($data);
 ?>
<div class="btn_accion" data-accion='<?php echo $data; ?>'>
        Abrir popup
</div>

<!-- FIN CODIGO PARA POPUP GENERAL -->
