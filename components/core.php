<?php
session_start();
$config = (object)[
    "root" => "/MealPlannerV2",
    "siteName" => "Мой сайт",

    "dbHost" => "",
    "dbLogin" => "",
    "dbPassword" => "",
    "dbName" => "",
    "dbPort" => "",
];
$mysqli =  $dbh = new PDO("mysql:dbname=meal_planner;host=localhost:3307", "root", "root");
$root = $_SERVER['CONTEXT_DOCUMENT_ROOT'] . $config->root;