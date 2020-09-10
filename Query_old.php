<?php
    require_once "MySQLConnect.php";

    $query1 = "SELECT * FROM categories WHERE status=1 AND id=1";
    $result1 = $conn->query($query1);
    $menus1 = array();
    while($row1 = $result1->fetch_assoc()) {
        $menus1[] = $row1;
    }
    foreach($menus1 as $menu1) {}

    $query2 = "SELECT * FROM categories WHERE status=1 AND id=2";
    $result2 = $conn->query($query2);
    $menus2 = array();
    while($row2 = $result2->fetch_assoc()) {
        $menus2[] = $row2;
    }
    foreach($menus2 as $menu2) {}

    $query3 = "SELECT * FROM categories WHERE status=1 AND id=3";
    $result3 = $conn->query($query3);
    $menus3 = array();
    while($row3 = $result3->fetch_assoc()) {
        $menus3[] = $row3;
    }
    foreach($menus3 as $menu3) {}

    $query4 = "SELECT * FROM categories WHERE status=1 AND id=4";
    $result4 = $conn->query($query4);
    $menus4 = array();
    while($row4 = $result4->fetch_assoc()) {
        $menus4[] = $row4;
    }
    foreach($menus4 as $menu4) {}

    $query5 = "SELECT * FROM categories WHERE status=1 AND id=5";
    $result5 = $conn->query($query5);
    $menus5 = array();
    while($row5 = $result5->fetch_assoc()) {
        $menus5[] = $row5;
    }
    foreach($menus5 as $menu5) {}

    $query6 = "SELECT * FROM categories WHERE status=1 AND id=6";
    $result6 = $conn->query($query6);
    $menus6 = array();
    while($row6 = $result6->fetch_assoc()) {
        $menus6[] = $row6;
    }
    foreach($menus6 as $menu6) {}

    $query7 = "SELECT * FROM categories WHERE status=1 AND id=7";
    $result7 = $conn->query($query7);
    $menus7 = array();
    while($row7 = $result7->fetch_assoc()) {
        $menus7[] = $row7;
    }
    foreach($menus7 as $menu7) {}

    $query8 = "SELECT * FROM categories WHERE status=1 AND id=8";
    $result8 = $conn->query($query8);
    $menus8 = array();
    while($row8 = $result8->fetch_assoc()) {
        $menus8[] = $row8;
    }
    foreach($menus8 as $menu8) {}

    $query9 = "SELECT * FROM categories WHERE status=1 AND id=9";
    $result9 = $conn->query($query9);
    $menus9 = array();
    while($row9 = $result9->fetch_assoc()) {
        $menus9[] = $row9;
    }
    foreach($menus9 as $menu9) {}

    $st1 = "SELECT * FROM menus WHERE status=1 AND categories_id=1";
    $rs1 = $conn->query($st1);
    $menus_food1 = array();
    while($row1 = $rs1->fetch_assoc()) {
        $menus_food1[] = $row1;
    }

    $st2 = "SELECT * FROM menus WHERE status=1 AND categories_id=2";
    $rs2 = $conn->query($st2);
    $menus_food2 = array();
    while($row2 = $rs2->fetch_assoc()) {
        $menus_food2[] = $row2;
    }

    $st3 = "SELECT * FROM menus WHERE status=1 AND categories_id=3";
    $rs3 = $conn->query($st3);
    $menus_food3 = array();
    while($row3 = $rs3->fetch_assoc()) {
        $menus_food3[] = $row3;
    }

    $st4 = "SELECT * FROM menus WHERE status=1 AND categories_id=4";
    $rs4 = $conn->query($st4);
    $menus_food4 = array();
    while($row4 = $rs4->fetch_assoc()) {
        $menus_food4[] = $row4;
    }

    $st5 = "SELECT * FROM menus WHERE status=1 AND categories_id=5";
    $rs5 = $conn->query($st5);
    $menus_food5 = array();
    while($row5 = $rs5->fetch_assoc()) {
        $menus_food5[] = $row5;
    }

    $st6 = "SELECT * FROM menus WHERE status=1 AND categories_id=6";
    $rs6 = $conn->query($st6);
    $menus_food6 = array();
    while($row6 = $rs6->fetch_assoc()) {
        $menus_food6[] = $row6;
    }

    $st7 = "SELECT * FROM menus WHERE status=1 AND categories_id=7";
    $rs7 = $conn->query($st7);
    $menus_food7 = array();
    while($row7 = $rs7->fetch_assoc()) {
        $menus_food7[] = $row7;
    }

    $st8 = "SELECT * FROM menus WHERE status=1 AND categories_id=8";
    $rs8 = $conn->query($st8);
    $menus_food8 = array();
    while($row8 = $rs8->fetch_assoc()) {
        $menus_food8[] = $row8;
    }

    $st9 = "SELECT * FROM menus WHERE status=1 AND categories_id=9";
    $rs9 = $conn->query($st9);
    $menus_food9 = array();
    while($row9 = $rs9->fetch_assoc()) {
        $menus_food9[] = $row9;
    }
?>