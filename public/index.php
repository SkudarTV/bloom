<?php

require_once __DIR__ . '/../vendor/autoload.php';

$app = Bloom\App::init();
$app::setDirectory(getcwd().'/..');

view('index.html.twig', ['title' => 'Bloom']);