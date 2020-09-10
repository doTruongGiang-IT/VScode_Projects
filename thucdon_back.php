<?php
    echo "<div class=\"row top__thucdon__back\">";
    for ( $index=4; $index<7; $index++ ) {
        switch($index) {
            case 4:
                echo "<div class=\"top__thucdon__left col l-4 m-4 c-12\">";
                echo "<img src=\"".$menu4['image']."\">";
                echo "<p>".$menu4['title']."</p>";
                echo "<ul>";
                foreach($menus_food4 as $menu_food4) {
                    echo ("<li><i class=\"fa fa-check\" aria-hidden=\"true\"></i>".$menu_food4['name']."</li>");
                }
                echo "</ul>";
                echo "</div>"; 
                break;
            case 5:
                echo "<div class=\"top__thucdon__left col l-4 m-4 c-12\">";
                echo "<img src=\"".$menu5['image']."\">";
                echo "<p>".$menu5['title']."</p>";
                echo "<ul>";
                foreach($menus_food5 as $menu_food5) {
                    echo ("<li><i class=\"fa fa-check\" aria-hidden=\"true\"></i>".$menu_food5['name']."</li>");
                }
                echo "</ul>";
                echo "</div>"; 
                break;
            case 6:
                echo "<div class=\"top__thucdon__left col l-4 m-4 c-12\">";
                echo "<img src=\"".$menu6['image']."\">";
                echo "<p>".$menu6['title']."</p>";
                echo "<ul>";
                foreach($menus_food6 as $menu_food6) {
                    echo ("<li><i class=\"fa fa-check\" aria-hidden=\"true\"></i>".$menu_food6['name']."</li>");
                }
                echo "</ul>";
                echo "</div>"; 
                break;                    
        }
    }
    echo "</div>";
?>