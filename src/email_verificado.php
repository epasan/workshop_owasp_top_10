<!doctype html>

<html lang="es" itemscope itemtype="http://schema.org/WebPage">

	<head>
	
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title></title>
		
		<style>
			html{font-size:24px;}
			body * {box-sizing:border-box;}
			body{margin:0;padding:0;height:100%;}
            header, fieldset, label, input, main {margin:0;padding:0;outline:0;border:0;display:block;}
			input[type="email"]{padding:5px 10px;margin:0px auto;}
            input[type="text"]{padding:5px 10px;margin:0px auto;}
			input[type="submit"]{padding:5px 10px;margin:10px auto;cursor:pointer;border-radius:5px;background:#DEB887;}
			h2{font-weight:normal;padding:10px;}
            .pagina{display:block;max-width:900px;margin:0 auto;}
			.todo-ancho{width:100%;}
			.setenta{width:70%;}
			.treinta{width:30%;}
			.centrar-texto{text-align:center;}
			.texto-grande{font-size: 2em;}
			.texto-mediano{font-size: 1.2em}
			.texto-pequeño{font-size: 0.8em;}
			.borde-email{border-bottom:1px dashed #666;}
			.con-borde-rojo{border:2px dashed #DEB887;}
		</style>
		
	</head>
	
	<body>
		
	<?php if(!isset($_POST["email"])): ?>
	
		<header class="pagina">
			<h1 class="centrar-texto texto-grande">El hogar de los gatos trastos</h1>
			<img src="https://placekitten.com/g/900/300">
			<h2 class="centrar-texto texto-mediano con-borde-rojo">Esta página web se encuentra en proceso de desarrollo</h2>
		</header>
		
		<main class="pagina">
			<h1></h1>
			<p>Por favor, facilitenos su dirección de email y en cuanto este terminada le avisaremos para venga a visitarnos:</p>
			<form class="form" action="#" method="post" id="registro">
                <div class="todo-ancho">
                    <input type="email" id="email" placeholder="emaildegatotrasto@dominio.es" name="email" class="setenta centrar-texto texto-mediano borde-email">
					<input type="submit" id="submit" value="Guardar mi email &#128576;" class="setenta centrar-texto texto-mediano">
                </div>
            </form>
		</main>
		
    <?php elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)): ?>
    
         <header class="pagina">
			<h1 class="centrar-texto texto-grande">El hogar de los gatos trastos</h1>
			<img src="https://placekitten.com/g/900/200">
			<h2 class="centrar-texto texto-mediano con-borde-rojo">¡Te pille! &#128572;</h2>
		</header>
		
		<main class="pagina">
			<h1></h1>
			<p class="centrar-texto">Venga, portate bien, no seas trasto y teclea un email correcto</p>
			<form class="form" action="#" method="post" id="registro">
                <div class="todo-ancho">
                    <input type="email" id="email" placeholder="emaildegatotrasto@dominio.es" name="email" class="setenta centrar-texto texto-mediano borde-email">
					<input type="submit" id="submit" value="Guardar mi email &#128576;" class="setenta centrar-texto texto-mediano">
                </div>
            </form>
		</main>
		
    <?php else: ?>
        
        <header class="pagina">
			<h1 class="centrar-texto texto-grande">El hogar de los gatos trastos</h1>
			<img src="https://placekitten.com/g/900/400">
			<h2 class="centrar-texto texto-mediano con-borde-rojo">Muchas gracias por registrar tu email &#128571;</h2>
		</header>
        
	<?php endif; ?>
	
	</body>

</html>