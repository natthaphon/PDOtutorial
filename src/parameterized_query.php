<?PHP
    $dsn = "mysql:host=localhost;dbname=oture";
    $username = "tony";
    $password = "0m46emJj8p0ziPC6";

    $pdo = new PDO($dsn, $username, $password);

    $id = 12;
    $stm = $pdo->prepare("SELECT * FROM countries WHERE id = ?");
    $stm->bindValue(1, $id);
    $stm->execute();

    $row = $stm->fetch(PDO::FETCH_ASSOC);

    echo "id : " . $row['id'] . PHP_EOL;
    echo "name : " . $row['name'] . PHP_EOL;
    echo "Population" . $row['population'] . PHP_EOL;
?>