<?php 
require_once ('vendor/autoload.php');

$loader = new Twig_Loader_Filesystem('view');
$twig = new Twig_Environment($loader,[

    'cache' => false,

 ]);

require_once ('model/model.php');

$movies = getMovies('id_f');

//faire le render transmettre la vue au traitement
$template = $twig->load('fiche-film.html');

echo $template->render(array('movies' => $movies));

var_dump ($movies);

?>