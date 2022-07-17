<?php

class Twig{
  static public function render($template, $data = array()){
    $loader = new \Twig\Loader\FilesystemLoader('view');
    $twig = new \Twig\Environment($loader, array('auto_reload' => true,'cache' => false));
    $twig->addGlobal('path', 'http://localhost/ete22/WebAvancee21603/Travaux/tp2/');
    echo $twig->render($template, $data);
  }
}