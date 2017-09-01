<html>  

    <style>
        table { 
            border-spacing: 0;
            border-collapse: collapse;
        }

        table td, table th {
            border: 1px solid #ccc;
            padding: 5px;
        }

        table th {
            background: #eee;
        }
    </style>

    <h1>параметры таблицы</h1>

    <div style="clear: both"></div>

    <table>
        <tr>
            <th>Имя</th>
            <th>Тип</th>
            <th>NULL</th>
            <th>Индекс</th>
            <th>По умолчанию</th>
            <th>Дополнительно</th>
            <th>Длина значения</th>
            <th></th>
            <th></th>
        </tr>



        <tr>

            <?php foreach ($result as $value) : ?> 

            <form method="POST" name="<?= $value['Field'] ?>" action="update.php">

                <tr>

                    <?php foreach ($value as $key => $val) : ?>

                        <td> 
                            <?php if ($key == 'Field') : ?>
                                <input type="text" name="name" id="name" value="<?= $val ?>"></input>
                                <input type="hidden" name="old_name" value="<?= $val ?>"></input>

                            <?php elseif ($key == 'Type') : ?>

                                <select name="type" id="type"><?= $val ?>

                                    <?php foreach ($defTypes as $defs) : ?>

                                        <?php
                                        $goodVal = explode('(', $val);


                                        $valSize = trim($goodVal[1], ')');

                                        $goodVal = strtoupper($goodVal[0]);
                                        $defs = strtoupper($defs);

                                        if ($defs == $goodVal) {
                                            echo "<option selected value=$defs>$defs</option>";
                                        } else {
                                            echo "<option value=$defs>$defs</option>";
                                        }
                                        ?>

                                    <?php endforeach; ?>
                                </select>

                            <?php else : ?>

                                <?= $val ?>
                            <?php endif ?>

                        </td>

                    <?php endforeach; ?>
                
                      
                <input type="hidden" name="tbl_name" value="<?= $tbl ?>"></input>
                <td><input type="text" name="val_size" value="<?= $valSize ?>"></input></td>
                <td><input type="submit" name="edit" value="Изменить"></input></td>
                <td><input type="submit" name="delete" value="Удалить"></input></td>
            </form>

        </tr>
            <?php endforeach; ?>
</tr>


</table>



</html>

