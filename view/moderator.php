<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        Moderator page
    </title>
    <style>
        table {
            width: 50%; /* Ширина таблицы */
            background: white; /* Цвет фона таблицы */
            color: white; /* Цвет текста */
            border-spacing: 1px; /* Расстояние между ячейками */
        }

        td, th {
            background: #84a9bd; /* Цвет фона ячеек */
            padding: 5px; /* Поля вокруг текста */
        }

        th {
            background: #ee2593;
            padding: 5px;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>comment</th>
    </tr>
    <?php
    include '../commentAll.php';
    foreach ($result as $value)
        echo "<tr>" .
            "<td>" . $value['id'] . "</td>" .
            "<td>" . $value['name'] . "</td>" .
            "<td>" . $value['comment'] . "</td>" . "</tr>"
    ?>
</table>
<br><br>
<hr>
<p>
<form action="../moderatorController.php">
    <p>
        <b>DELETE FORM</b><br>
        <label for="number_delete">Choose the id of the comment to delete
            <br><input type="text" name="number_delete" size="40%" placeholder="3">
        </label><br>
    </p>
    <p><input type="submit"></p>
</form>
<hr>
<p>
<form action="../moderatorController.php">
    <p>
        <b>EDIT FORM</b><br>
        <label for="edit_id">Choose the id of the comment to edit
            <br><input type="text" name="edit_id" size="40%" placeholder="3">
        </label><br>
    </p>
    <p>
        <label for="edit_name">Edit the user`s name
            <br><input type="text" name="edit_name" size="40%" placeholder="Nina">
        </label><br>
    </p>
    <p>
        <label for="edit_comment">Edit the user`s comment
            <br><textarea name="edit_comment" cols="45" rows="10"></textarea>
        </label><br>
    </p>
    <p><input type="submit"></p>
</form>

</body>
</html>
