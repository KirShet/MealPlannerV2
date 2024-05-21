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
function getMeal($meals = '', $meal = false)
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
function emptyValues($arr, $fill_array) {
    $values = array();
    foreach ($arr as $key) {
        if (empty($fill_array[$key])) {
            return false;
        }
        $values[] = $fill_array[$key];
    }
    return $values;
}
function PFC($post_data, &$fill_array)
{
    $carb = $post_data['carb_per_100_grams'];
    $fats = $post_data['fats_per_100_grams'];
    $prot = $post_data['prot_per_100_grams'];

    $call = $carb * 4 + $prot * 4 + $fats * 9;

    $carb = ($carb * 4 / $call) * 100;
    $fats = ($fats * 9 / $call) * 100;
    $prot = ($prot * 4 / $call) * 100;

    $fill_array['PFC'] = zero($prot) . ':' . zero($fats) . ':' . zero($carb);
    $fill_array['call_per_100_grams'] = $call;
    // echo "тут";
    // print_r($fill_array);
}
function zero($nutrient)
{
    return $nutrient > 10 ? round($nutrient) : '0' . round($nutrient);
}
function insert($table, $arrVal, $values)
{
    global $mysqli;
    $set = '';
    foreach ($arrVal as $key => $value) {
        $set .= "`$value` = :$value, ";
    }
    $set = substr($set, 0, -2) . " ";
    $values = [
        ':name' => $values[4], 
        ':prot_per_100_grams' => $values[0], 
        ':fats_per_100_grams' => $values[1], 
        ':carb_per_100_grams' => $values[2], 
        ':diet' => $values[3], 
        ':PFC' => $values[5], 
        ':call_per_100_grams' => $values[6]
    ];
    // Подготовка запроса
$query = $mysqli->prepare("INSERT INTO `meal_time` SET 
`name` = :name, 
`prot_per_100_grams` = :prot_per_100_grams, 
`fats_per_100_grams` = :fats_per_100_grams, 
`carb_per_100_grams` = :carb_per_100_grams, 
`diet` = :diet, 
`PFC` = :PFC, 
`call_per_100_grams` = :call_per_100_grams
");
// Проверка успешности подготовки запроса
if ($query === false) {
    throw new Exception('Ошибка подготовки запроса: ' . print_r($mysqli->errorInfo(), true));
}

// Выполнение запроса с массивом значений
$result = $query->execute($values);

// Проверка успешности выполнения запроса
if ($result === false) {
    throw new Exception('Ошибка выполнения запроса: ' . print_r($query->errorInfo(), true));
} else {
    echo 'Запись успешно добавлена!';
}
    print_r($query);
    print_r($values);
}