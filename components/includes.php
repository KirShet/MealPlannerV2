<?php
include 'core.php';
function loadComponent(...$files)
{
    global $root;
    foreach ($files as $file) {
        if (file_exists("$root/components/page/$file.php")) {
            include "$root/components/page/$file.php";
        }
    }
}
function setHrefSrc($url, $extension ='php', $attribute='href')
{
    global $config;
    $url = ($config->root) ? "$config->root/$url.$extension" : "/$url.$extension";
    return "$attribute = '$url' ";
}
function action($url = '#', $method = "POST")
{
    global $config;
    $url = ($config->root == '') ? "/action/$url.php" : "$config->root/action/$url.php";
    return " action = '$url' method = '$method' ";
}
function getMeal($meals = 'break', $meal = false)
{
    global $mysqli;
    $templ_cond = 'SUBSTRING(PFC,';
    if ($meals == "snacks" || $meals == "second_break") {
        $cond = "$templ_cond 4, 2) <= 50 AND $templ_cond 7, 2) <= 50;";
    } else if ($meals == "lunch") {
        $cond = "$templ_cond 4, 2) <= 40 AND $templ_cond 7, 2) <= 50;";
    } else if ($meals == "dinner") {
        $cond = "$templ_cond 4, 2) <= 40 AND $templ_cond 7, 2) <= 40;";
    } else if ($meals == "dinner") {
        $cond = "$templ_cond 7, 2) >= 40 AND $templ_cond 7, 2) <= 65;";
    } else {
        $cond = '1';
    }
    $query = $mysqli->prepare("SELECT * FROM `meal_time` WHERE 
        $cond");
    // PFC, 1, 2 - первый столбец
    // PFC, 4, 2 - второй столбец
    // PFC, 7, 2 - второй столбец
    $query->execute();
    $meal_time_results  = $query->fetchAll();

    if ($meal == true) {
        $random_key = array_rand($meal_time_results); // получаем случайный ключ
        $_SESSION['$random_key'] = $random_key;

        // $_SESSION['eating'] = eating();
        if (isset($_POST["heart"])) {
            // $_SESSION['eating'] = eating();
        }
        // $eating = $meal_time_results[$random_key];
        $meal_time_results = $meal_time_results[$random_key];
        $meal_time_results['meals'] = $meals;
        $_SESSION['meal'][$meals] = $meal_time_results;
    }

    return $meal_time_results;
}