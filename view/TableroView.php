<!DOCTYPE html>
<html>
<head>
				<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
				 <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" rel="stylesheet">
				 <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>

<div align="center">
	<header>
<h1>JUEGO 3 EN RAYA</h1>
</header> 
</div>
<?
$turno=$turno;
$usuario=$id;

?>
<div align="center">
	<table border="0">
 <tr>
    <td style="border-style:solid;">
    	<a href="<?php echo $helper->url("tablero","guardar"); ?>&celda=1&turno=<?=$turno?>&u=<?=$usuario?>"><img src="assets/img/blanco.png" width="96" Height="128" id="c0" /></a>

    	</td>
    <td style="border-style:solid;">
    <a href="<?php echo $helper->url("tablero","guardar"); ?>&celda=2&turno=<?=$turno?>&u=<?=$usuario?>"><img src="assets/img/blanco.png" width="96" Height="128" id="c0" /></a></td>  
    <td style="border-style:solid;">
		<a href="<?php echo $helper->url("tablero","guardar"); ?>&celda=3&turno=<?=$turno?>&u=<?=$usuario?>"><img src="assets/img/blanco.png" width="96" Height="128" id="c0" /></a>
    </td>  
 </tr>

 <tr>
    <td style="border-style:solid;">
			<a href="<?php echo $helper->url("tablero","guardar"); ?>&celda=4&turno=<?=$turno?>&u=<?=$usuario?>"><img src="assets/img/blanco.png" width="96" Height="128" id="c0" /></a>
    </td>  
    <td style="border-style:solid;">
    	<a href="<?php echo $helper->url("tablero","guardar"); ?>&celda=5&turno=<?=$turno?>&u=<?=$usuario?>"><img src="assets/img/blanco.png" width="96" Height="128" id="c0" /></a>
    </td>  
    <td style="border-style:solid;">
    	<a href="<?php echo $helper->url("tablero","guardar"); ?>&celda=6&turno=<?=$turno?>&u=<?=$usuario?>"><img src="assets/img/blanco.png" width="96" Height="128" id="c0" /></a>
    </td>  
 </tr>
 <tr>
    <td style="border-style:solid;">
    	<a href="<?php echo $helper->url("tablero","guardar"); ?>&celda=7&turno=<?=$turno?>&u=<?=$usuario?>"><img src="assets/img/blanco.png" width="96" Height="128" id="c0" /></a>
    </td>  
    <td style="border-style:solid;">
    	<a href="<?php echo $helper->url("tablero","guardar"); ?>&celda=8&turno=<?=$turno?>&u=<?=$usuario?>"><img src="assets/img/blanco.png" width="96" Height="128" id="c0" /></a>
    </td>  
    <td style="border-style:solid;">
    	<a href="<?php echo $helper->url("tablero","guardar"); ?>&celda=9&turno=<?=$turno?>&u=<?=$usuario?>"><img src="assets/img/blanco.png" width="96" Height="128" id="c0" /></a>
    </td>  
 </tr>


  <tr>
    <td><img src="assets/img/x.png" width="80" Height="100"/></td>  
    <td><img src="assets/img/vs.png" width="80" Height="100"/></td>  
    <td><img src="assets/img/o.png" width="80" Height="100"/></td>  
 </tr>
 <tr>
    <th><?=$nombre1?></th>  
    <td></td>  
    <th><?=$nombre2?></th>  
 </tr>
</table>

<br/>
<div class="container">
  <div class="row" align="center">
    <?php if ($turno==1): ?>
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="col-md-4 col-sm-4 col-xs-4">
      &nbsp;
    </div>
      <div class="animated pulse col-md-4 col-sm-4 col-xs-4">
           <div class="alert alert-info alert-dismissible" role="alert">       
            <strong>Juega <?=$nombre1?></strong>
            <br>
           </div>
    </div>
  </div>
    <?php else: ?>

    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="col-md-4 col-sm-4 col-xs-4">
        &nbsp;
      </div>
      <div class="animated pulse col-md-4 col-sm-4 col-xs-4">
           <div class="alert alert-success alert-dismissible" role="alert">       
            <strong>Juega <?=$nombre2?></strong>
            <br>
           </div>
      </div>
    </div>
    
  <?php endif ?>  
  </div>
</div>
</div>

</body>
</html>
