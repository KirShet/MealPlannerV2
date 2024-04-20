<?php 
include '../components/includes.php';
//тут код
if($_POST["numberOfRecep"] == '5'){
    $response['meals']=['break','second_break','lunch','snacks','dinner'];
}else if($_POST["numberOfRecep"] == '4'){
    $response['meals']=['break','snacks','lunch','dinner'];
}else if($_POST["numberOfRecep"] == '3'){
    $response['meals']=['break','lunch','dinner'];
}else if($_POST["numberOfRecep"] == '2'){
    $response['meals']=['break','dinner'];
}
// $a = 0;
foreach ($response['meals'] as $key => $value){
    // if (isset($_SESSION['meal'][$value])){
    //     // $eating = $_SESSION['meal'][$value];
    // }else{
        $eating = getMeal($value, true);
        $eating['caloriesPerMeal'] = round($_POST["kcalPerDay"] / $_POST["numberOfRecep"]);
    // }
    $response['meals'][$key]=$eating;
}
//туд код
// $name = "1";
// $fats = "2";
// $proteins = "3";
// $carbohydrates = "4";
// $img = "images/1.png";
// $response = ['name' => $name, 'fats' => $fats, 'proteins' => $proteins, 'carbohydrates' => $carbohydrates, 'img' => $img];
echo json_encode($response);