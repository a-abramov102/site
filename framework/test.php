<?
	include 'Twig/Autoloader.php';
	Twig_Autoloader::register();
	
	try {
	  // указывае где хранятся шаблоны
	  $loader = new Twig_Loader_Filesystem('templates');
	  
	  // инициализируем Twig
	  $twig = new Twig_Environment($loader);
	  
	  // подгружаем шаблон
	  $template = $twig->loadTemplate('index.tmpl');
	  	  
	  // передаём в шаблон переменные и значения
	  // выводим сформированное содержание
	  
	  
	  $page = $template->render(array(
		'title'=> 'Главная'
	  ));


	  echo $page;
	  
	} catch (Exception $e) {
	  die ('ERROR: ' . $e->getMessage());
	}
?>