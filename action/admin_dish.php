<?php
include '../components/includes.php';

$uploaddir = '../images/meals/';  
 
if(isset($_POST)) {  
    $arr = ['name','prot_per_100_grams','fats_per_100_grams','carb_per_100_grams', 'img'];
 
    $fill_array = $_POST;  
    if($_FILES['img']['name']) {  
        $name_img = uniqid().'.'.substr($_FILES['img']['type'], 6);  
        // $name_img = uniqid().'.'.'png';  
        $fill_array['img'] = $name_img;  
    }  
    $values = emptyValues($arr, $fill_array);  
    if($values){ 
        $tmp_name = $_FILES['img']['tmp_name'];  
        $uploadfile = $uploaddir . $name_img;  
        $fill_array['diet'] = 'Балансированное';  
        PFC($_POST, $fill_array);  
        array_push($arr, 'diet', 'PFC', 'call_per_100_grams');  
        $values = emptyValues($arr, $fill_array);  
        print_r($values);
        if('image' == substr($_FILES['img']['type'], 0, 5)) {  
            if(move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile)) {  
                echo 'Z ecnfk';  
                insert('meal_time', $arr, $values);  
            }  
        }  
    } 
}