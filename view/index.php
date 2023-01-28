<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
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
<p>
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
</p>
<form action="../indexController.php" method="get">

    <p><label for="name">Your name
            <input type="text" name="name" placeholder="Иван Иванов"></label></p>
    <label for="comment">Enter message<br>
        <textarea name="comment" cols="45" rows="10" placeholder="Hello! This hotel is amazing, but ..."></textarea>
    </label>
    <p><input type="submit"></p>
</form>
<form action="moderator.php" method="get">
    <button> moderator's page</button>
</form>

</body>
</html>