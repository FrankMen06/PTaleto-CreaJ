<?php
    session_start();
    $usuario = $_SESSION['user'];

    if(!isset($usuario)){
        header("location:../vista/loginEst.php");   
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tarjetas</title>
	<link rel="stylesheet" href="../css/estilo.css">
	<link rel="stylesheet" type="text/css" href="../css/menu2.css">
	<link rel="stylesheet" type="text/css" href="../css/botonform.css">
	<link rel="stylesheet" type="text/css" href="../css/botonform.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ffec4ec2ed.js" crossorigin="anonymous"></script>
	
</head>
<body>

<header>
<nav id="menu">
<input type="checkbox" id="check">
            <label for="check" class="botcheck">
            <i class="fas fa-bars"></i>
            </label>
                <img src="../imagenes/LOGO PRIN.png" alt="" class="logo">
                <ul class="lista"> 
				<li><center><h1>Bienvenido <?php echo "$usuario" ?></h1></li></center>
                    <li><a class="active" href="#">Inicio</a></li>
          			<li><a href="../controlador/salir.php">Cerrar sesión</a></li>
                </ul>
</nav>
</header>
	<div class="cuerpo">	
		<div class="tarjeta">
			
			<div class="cabecera" style="background: url(../imagenes/banner_fut.png);background-repeat: no-repeat;-webkit-background-size: cover;background-size: cover;">
				<a class="parte1" href="PIZARRON_FUTBOL/index.php">
				<div class="titulo">ENTRENOS DE FUTBOL</div>				
				</a>
				<div class="nombre"></div>
			</div>

			<div class="medio">				
				<div class="texto">
					<img class="foto" src="../imagenes/DT2.png" alt="">
					<h2>Encargado del curso:</h2>
					<div class="tareas">
						<a class="link">PROF. MAGNO DIAZ</a>
					</div>
					<a href="MATERIAL Y NOTICIAS_FUTBOL/index.php">Material y Noticias</a>
				</div>
			</div>

			<center><input type="submit" class="boton" value="Inscribirse" onclick=" location.href='formFut.php'"/></center>

		</div>



		<div class="tarjeta">
			<div class="cabecera" style="background: url(../imagenes/banner_basket.png);background-repeat: no-repeat;-webkit-background-size: cover;background-size: cover;">
				<a class="parte1" href="PIZARRON_BASKET/index.php">
				<div class="titulo">ENTRENOS DE BASKETBALL</div>				
				</a>
				<div class="nombre"></div>
			</div>
			<div class="medio">				
				<div class="texto">
					<img class="foto" src="../imagenes/DT3.png" alt="">
					<h2>Encargado del curso:</h2>
					<div class="tareas">
						<a class="link">PROF. DANIEL PACHECO</a>
					</div>
					<a href="MATERIAL Y NOTICIAS_BASKET/index.php">Material y Noticias</a>
				</div>
			</div>
				
			<center><input type="submit" class="boton" value="Inscribirse" onclick=" location.href='formBasket.php'"/></center>
			
		</div>





		<div class="tarjeta">
			<div class="cabecera" style="background: url(../imagenes/banner_danza.png);background-repeat: no-repeat;-webkit-background-size: cover;background-size: cover;">
				<a class="parte1" href="PIZARRON_DANZA/index.php">
				<div class="titulo"> ENSAYOS DE DANZA
				</div>				
				</a>
				<div class="nombre"></div>
			</div>
			<div class="medio">				
				<div class="texto">
					<img class="foto" src="PIZARRON_DANZA/assets/DT7.jpg" alt="">
					<h2>Encargado del curso:</h2>
					<div class="tareas">
						<a class="link">PROF. VICTOR CORNEJO</a>
					</div>
					<a href="MATERIAL Y NOTICIAS_DANZA/index.php">Material y Noticias</a>
				</div>
			</div>

			<center><input type="submit" class="boton" value="Inscribirse" onclick=" location.href='formDanza.php'"/></center>
		</div>

		<div class="tarjeta">
			<div class="cabecera" style="background: url(../imagenes/banner_barra.png);background-repeat: no-repeat;-webkit-background-size: cover;background-size: cover;">
				<a class="parte1" href="PIZARRON_BARRA/index.php">
				<div class="titulo"> ENSAYOS DE BARRA
				</div>				
				</a>
				<div class="nombre"></div>
			</div>
			<div class="medio">				
				<div class="texto">
					<img class="foto" src="../imagenes/DT5.png" alt="">
					<h2>Encargado del curso:</h2>
					<div class="tareas">
						<a class="link">KEVIN JOSUE SAMAYOA GOMEZ</a>
					</div>
					<a href="MATERIAL Y NOTICIAS_BARRA/index.php">Material y Noticias</a>
				</div>
			</div>

			<center><input type="submit" class="boton" value="Inscribirse" onclick=" location.href='formBarra.php'"/></center>
		</div>

		<div class="tarjeta">
			<div class="cabecera" style="background: url(../imagenes/banner_orquesta.png);background-repeat: no-repeat;-webkit-background-size: cover;background-size: cover;">
				<a class="parte1" href="PIZARRON_ORQUESTA/index.php">
				<div class="titulo"> ENSAYOS DE ORQUESTA
				</div>				
				</a>
				<div class="nombre"></div>
			</div>
			<div class="medio">				
				<div class="texto">
					<img class="foto" src="PIZARRON_ORQUESTA/assets/DT6.png" alt="">
					<h2>Encargado del curso:</h2>
					<div class="tareas">
						<a class="link">PROF. NAPOLEON VASQUEZ</a>
					</div>
					<a href="MATERIAL Y NOTICIAS_ORQUESTA/index.php">Material y Noticias</a>
				</div>
			</div>
				<center><input type="submit" class="boton" value="Inscribirse" onclick=" location.href='formOrqst.php'"/></center>
		</div>



		<div class="tarjeta">
			<div class="cabecera" style="background: url(../imagenes/banner_volley.png);background-repeat: no-repeat;-webkit-background-size: cover;background-size: cover;">
				<a class="parte1" href="PIZARRON_VOLLEY/index.php">
				<div class="titulo">ENTRENOS DE VOLLEYBALL				
				</div>				
				</a>
				<div class="nombre"></div>
			</div>
			<div class="medio">				
				<div class="texto">
					<img class="foto" src="../imagenes/DT.png" alt="">
					<h2>Encargado del curso:</h2>
					<div class="tareas">
						<a class="link">PROF. WILBER GEOVANY PORTILLO</a>
					</div>
					<a href="MATERIAL Y NOTICIAS_VOLLEY/index.php">Material y Noticias</a>
				</div>
			</div>
			<center><input type="submit" class="boton" value="Inscribirse" onclick=" location.href='formVoley.php'"/></center>
		</div>

	</div>

	<link  rel="icon"   href="logo.png" type="image/png" />
<link href="vendor/emoji-picker/lib/css/emoji.css" rel="stylesheet">
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="vendor/emoji-picker/lib/js/config.js"></script>
<script src="vendor/emoji-picker/lib/js/util.js"></script>
<script src="vendor/emoji-picker/lib/js/jquery.emojiarea.js"></script>
<script src="vendor/emoji-picker/lib/js/emoji-picker.js"></script>


    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/sticky-footer-navbar.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

	<!-- Begin page content -->

<div class="container">
      <h3 class="mt-5"><center> COMENTARIOS</center></h3>
      <hr>
      <div class="row">
    <div class="col-12 col-md-12"> 
          <!-- Contenido -->

<div class="output-container">
<div class="comment-form-container">
<form id="frm-comment">
<div class="input-row">
    <input type="hidden" name="comment_id" id="commentId" placeholder="Name" /> 
    <input class="form-control" type="text" name="name" id="name" placeholder="Nombres" />
</div>

<div class="input-row">
    <p class="emoji-picker-container">
      <textarea class="input-field" data-emojiable="true" data-emoji-input="unicode" type="text" name="comment" id="comment" placeholder="Agrege su mensaje"></textarea>
    </p>
</div>

<div>
    <input type="button" class="btn btn-primary" id="submitButton" value="Agregar Comentario" />
    <div id="comment-message">Comentario creado con éxito!</div>
</div>


</form>
</div><div id="output"></div>

</div>
<script>

function postReply(commentId) {
	$('#commentId').val(commentId);
	$("#name").focus();
}

$("#submitButton").click(function () {
	$("#comment-message").css('display', 'none');
	var str = $("#frm-comment").serialize();

	$.ajax({
		url: "../controlador/AgregarComentario.php",
		data: str,
		type: 'post',
		success: function (response)
		{
			$("#comment-message").css('display', 'inline-block');
			$("#name").val("");
			$("#comment").val("");
			$("#commentId").val("");
			listComment();
		}
	});
});

$(document).ready(function () {
	listComment();
});

$(function () {
	// Initializes and creates emoji set from sprite sheet
	window.emojiPicker = new EmojiPicker({
		emojiable_selector: '[data-emojiable=true]',
		assetsPath: 'vendor/emoji-picker/lib/img/',
		popupButtonClasses: 'icon-smile'
	});

	window.emojiPicker.discover();
});


function listComment() {
$.post("../controlador/ListaComentario.php",
function (data) {
	var data = JSON.parse(data);

	var comments = "";
	var replies = "";
	var item = "";
	var parent = -1;
	var results = new Array();

	var list = $("<ul class='outer-comment'>");
	var item = $("<li>").html(comments);

	for (var i = 0; (i < data.length); i++)
	{
		var commentId = data[i]['co_id'];
		parent = data[i]['parent_id'];

		if (parent == "0")
		{
			comments =  "<div class='comment-row'>"+
			"<div class='comment-info'><img src='user.png'><span class='posted-by'>" + data[i]['comentario_nombre'].toUpperCase() + "</span></div>" + 
			"<div class='comment-text'>" + data[i]['comentarios'] + "</div>"+
			"<div><a class='btn-reply' onClick='postReply(" + commentId + ")'>Respuesta</a></div>"+
			"</div>";
			var item = $("<li>").html(comments);
			list.append(item);
			var reply_list = $('<ul>');
			item.append(reply_list);
			listReplies(commentId, data, reply_list);
		}
	}
	$("#output").html(list);
});
}

function listReplies(commentId, data, list) {

	for (var i = 0; (i < data.length); i++)
	{
		if (commentId == data[i].parent_id)
		{
			var comments = "<div class='comment-row'>"+
			" <div class='comment-info'><img src='user.png'><span class='posted-by'>" + data[i]['comentario_nombre'].toUpperCase() + " </span></div>" + 
			"<div class='comment-text'>" + data[i]['comentarios'] + "</div>"+
			"<div><a class='btn-reply' onClick='postReply(" + data[i]['co_id'] + ")'>Respuesta</a></div>"+
			"</div>";
			var item = $("<li>").html(comments);
			var reply_list = $('<ul>');
			list.append(item);
			item.append(reply_list);
			listReplies(data[i].co_id, data, reply_list);

		}
	}
}
</script>


          <!-- Fin Contenido --> 
        </div>
  </div>
      <!-- Fin row --> 
      
    </div>
<!-- Fin container -->

<!-- Bootstrap core JavaScript--> 
<script src="dist/js/bootstrap.min.js"></script> 
	<script src="https://kit.fontawesome.com/5305b20e95.js " crossorigin="anonymous "></script>
</body>
</html>