<?php
  session_start();
  include('config/config.php');
  extract($_POST);
  if(!$_GET[pag]){$pag="home";}else{$pag=trim($_GET[pag],'/');}
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=0.86, maximum-scale=3.0, minimum-scale=0.86">
    <meta name="mobile-web-app-capable" content="yes">
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta property="og:title" content="Summer exploring |"/>
    <meta property="og:description" content=""/>
    <meta property="og:type" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:image" content=""/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="@"/>
    <meta name="twitter:creator" content="@"/>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="<?php echo $enlace; ?>js/main.js?v=<?php echo(rand()); ?>"></script>
    <link rel="stylesheet" href="<?php echo $enlace; ?>css/main.css?v=<?php echo(rand()); ?>">
    <link rel="shortcut icon" href="<?php echo $enlace; ?>img/favicon.png">
    <title>Summer exploring | <?php echo $pag; ?></title>
  </head>
  <body>
    <script>
      www_enlace='<?php echo $enlace; ?>';
    </script>
    <?php
        include('estructura/nav.php');
        include('estructura/header.php');
        include('paginas/'.$pag.'.php');
        include('estructura/footer.php');
     ?>
  </body>
</html>
