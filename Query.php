<?php
    require_once('./MySQLConnect.php');(

    $query = "SELECT c.title, c.image, m.* FROM categories c LEFT JOIN menus m ON c.id = m.categories_id";
    $result = $conn->query($query);
    $menus = array();
    while ($row = $result->fetch_assoc()) {
        $menus[] = $row;
    }
?>