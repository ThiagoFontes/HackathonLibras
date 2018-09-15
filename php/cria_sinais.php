<?php
//http://localhost:8000/inc/cria_sinais.php?pt_title=sinal&gif_url=img/nova
header("Content-type: text/plain; charset=utf-8");
require_once('db.php');

function checkGETParametersOrDie($parameters) {
    foreach ($parameters as $parameter) {
        isset($_GET[$parameter]) || die("'$parameter' parameter must be set by GET method.");
    }
}

checkGETParametersOrDie(['pt_title', 'gif_url', 'category']);

$pt_title = $_GET['pt_title'];
$gif_url = $_GET['gif_url'];
$category = $_GET['category'];

$db = new DB();
$db->createSinal($pt_title, $gif_url, $category);

echo "Inserido '$pt_title'.";

?>