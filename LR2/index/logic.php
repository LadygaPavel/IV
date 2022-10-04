<?php
global $pdo;
try {
    $pdo = new PDO("mysql:host=localhost;dbname=electrical_products", "paul", "19072004");
}
catch (PDOException $e) {
    //echo "Database error: " . $e->getMessage();

    echo $e->getMessage();
    die;
}

$sql = "SELECT products.id, products.img, products.name1, products.description, products.cost, manufacturer.name FROM products JOIN manufacturer ON products.provider = manufacturer.id";

$arr_binds = [];

$flag = false;

if (key_exists('clear_filter', $_GET))
{
    $_GET = array();
}


if (!key_exists('clear_filter', $_GET))
{
    if (count($_GET) > 0) {
        $sql .= " WHERE ";
        if ($_GET['name1']) {
            $sql .= " products.name1 LIKE  CONCAT( '%', :name1, '%')";
            $arr_binds['name1'] = htmlspecialchars($_GET['name1']);
            $flag = true;
        }
        if ($_GET['cost']) {
            if ($flag) {
                $sql .= " AND ";
            }
            $sql .= " products.cost > :cost";
            $arr_binds['cost'] = htmlspecialchars($_GET['cost']);
        }
        if ($_GET['description']) {
            if ($flag) {
                $sql .= " AND ";
            }
            $sql .= " products.description LIKE  CONCAT( '%', :description, '%')";
            $arr_binds['description'] = htmlspecialchars($_GET['description']);
        }
        if ($_GET['name']) {
            if ($flag) {
                $sql .= " AND ";
            }
            $sql .= " manufacturer.name LIKE  CONCAT( '%', :name, '%')";
            $arr_binds['name'] = htmlspecialchars($_GET['name']);
        }
    }

}
$sql .= ";";

$stmt = $pdo->prepare($sql);
if (!key_exists('clear_filter', $_GET))
{
    $stmt->execute($arr_binds);
}
$prods = $stmt->fetchAll();
?>