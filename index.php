<?php

require_once 'config.php';

$link->query($cteateFirstTestTable);
$link->query($cteateSecondTestTable);

$tables = $link->query('SHOW TABLES');

while ($row = $tables->fetch()) {
    echo '<br>';
    echo '<a href="view.php?tbl=' . $row[0] . '">Таблица ' . $row[0] . '</a>';
}
