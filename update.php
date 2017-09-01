<?php

require_once 'config.php';

if (isset($_POST['delete'])) {

    $query = addslashes("ALTER TABLE $_POST[tbl_name] DROP $_POST[name]");
    $link->query($query);
    header('Location:' . "$_SERVER[HTTP_REFERER]");
}


if (isset($_POST['edit'])) {

    echo 'Вызов на редактирование';

    if ($_POST['type'] == 'VARCHAR' || $_POST['type'] == 'INT') {

        $query = addslashes("ALTER TABLE $_POST[tbl_name] CHANGE $_POST[old_name] $_POST[name] $_POST[type]($_POST[val_size])");
    } else {

        $query = addslashes("ALTER TABLE $_POST[tbl_name] CHANGE $_POST[old_name] $_POST[name] $_POST[type]");
    }

    var_dump($query);
    $link->query($query);
    header('Location:' . "$_SERVER[HTTP_REFERER]");
}




