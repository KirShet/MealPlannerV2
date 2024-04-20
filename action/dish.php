<?php 
include '../components/includes.php';
$dish=$_POST["dish"];
$selectedDish = getMeal($dish, true);
$selectedDish['caloriesPerMeal'] = $_POST["caloriesPerMeal"]; 
$_SESSION['meal'][$value] = $selectedDish;
$response['meal'][]=$selectedDish;
echo json_encode($response);