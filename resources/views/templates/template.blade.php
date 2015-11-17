<html> 
	<head> 
		<title>{!!$titulo or 'EspecializaTi - Torne-se um especialista você também'!!}}</title>

		{!!HTML::style('assets/css/bootstrap.css')!!}
		{!!HTML::style('assets/css/style.css')!!}
	<body> 
		<header>
			{!!HTML::image('assets/imagens/logo.png', 'Logo EspecializaTi', array('class' => 'img-logo'))!!}
		</header>

		<div class="content container">
			@yield('content')
		</div>

		<footer>
			SEPOG/COGECT
		</footer>
	</body> 
</html>


