<?php 
require __DIR__ . '/vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);
$template = $twig->load('index.html');
$title = "php-sprint";
echo $template->render(array('title' => $title));
echo $template->render(['the' => 'variables', 'go' => 'here']);
?>
