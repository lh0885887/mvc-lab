<?php
require_once __DIR__ . '/../models/BeverageModel.php';

$header = __DIR__ . '/../partials/header.php';
$footer = __DIR__ . '/../partials/footer.php';

function showPage($view)
{
    global $header;
    global $footer;

    $view = __DIR__ . "/../views/$view.php";
    include $header;
    include $view;
    include $footer;
}

function showBeverages()
{
    global $header;
    global $footer;
    $beverages = getBeverages();
    include $header;
    include __DIR__ . '/../views/menu.php';
    include $footer;
}
