<?php

require_once 'config.php';

if (empty($_GET['tbl'])) {

    echo 'Пустое название таблицы';
    die;
}

$tbl = strip_tags($_GET['tbl']);

$query = "DESCRIBE $tbl";

$tableContent = $link->query($query, PDO::FETCH_ASSOC);

$result = $tableContent->fetchAll();

include 'viewtemplate.php';

