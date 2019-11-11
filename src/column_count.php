<?PHP
include_once '../config/dbconnect.php';

$stm = $pdo->query("SELECT name, population FROM countries WHERE id=1");

$ncols = $stm->columnCount();

echo "The Result set contains $ ncols columns\n"
?>