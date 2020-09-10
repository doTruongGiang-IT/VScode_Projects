<?php
    echo "<div class=\"row top__thucdon\">";
    for ( $index=1; $index<10; $index++ ) {
        switch($index) {
            case 1:
                echo "<div class=\"top__thucdon__left col l-4 m-4 c-12\">";
                echo "<img src=\"".$menu1['image']."\">";
                echo "<p>".$menu1['title']."</p>";
                echo "<ul>";
                foreach($menus_food1 as $menu_food1) {
                    echo ("<li><i class=\"fa fa-check\" aria-hidden=\"true\"></i>".$menu_food1['name']."</li>");
                }
                echo "</ul>";
                echo "</div>";
                break;
            case 2:
                echo "<div class=\"top__thucdon__left col l-4 m-4 c-12\">";
                echo "<img src=\"".$menu2['image']."\">";
                echo "<p>".$menu2['title']."</p>";
                echo "<ul>";
                foreach($menus_food2 as $menu_food2) {
                    echo ("<li><i class=\"fa fa-check\" aria-hidden=\"true\"></i>".$menu_food2['name']."</li>");
                }
                echo "</ul>";
                echo "</div>"; 
                break;
            case 3:
                echo "<div class=\"top__thucdon__left col l-4 m-4 c-12\">";
                echo "<img src=\"".$menu3['image']."\">";
                echo "<p>".$menu3['title']."</p>";
                echo "<ul>";
                foreach($menus_food3 as $menu_food3) {
                    echo ("<li><i class=\"fa fa-check\" aria-hidden=\"true\"></i>".$menu_food3['name']."</li>");
                }
                echo "</ul>";
                echo "</div>"; 
                break;
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
            case 7:
                echo "<div class=\"top__thucdon__left col l-4 m-4 c-12\">";
                echo "<img src=\"".$menu7['image']."\">";
                echo "<p>".$menu7['title']."</p>";
                echo "<ul>";
                foreach($menus_food7 as $menu_food7) {
                    echo ("<li><i class=\"fa fa-check\" aria-hidden=\"true\"></i>".$menu_food7['name']."</li>");
                }
                echo "</ul>";
                echo "</div>"; 
                break;
            case 8:
                echo "<div class=\"top__thucdon__left col l-4 m-4 c-12\">";
                echo "<img src=\"".$menu8['image']."\">";
                echo "<p>".$menu8['title']."</p>";
                echo "<ul>";
                foreach($menus_food8 as $menu_food8) {
                    echo ("<li><i class=\"fa fa-check\" aria-hidden=\"true\"></i>".$menu_food8['name']."</li>");
                }
                echo "</ul>";
                echo "</div>"; 
                break;
            case 9:
                echo "<div class=\"top__thucdon__left col l-4 m-4 c-12\">";
                echo "<img src=\"".$menu9['image']."\">";
                echo "<p>".$menu9['title']."</p>";
                echo "<ul>";
                foreach($menus_food9 as $menu_food9) {
                    echo ("<li><i class=\"fa fa-check\" aria-hidden=\"true\"></i>".$menu_food9['name']."</li>");
                }
                echo "</ul>";
                echo "</div>"; 
                break;                    
        }
    }
    echo "</div>";
?>