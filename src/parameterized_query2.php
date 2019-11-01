<?PHP
    $dsn = "mysql:host=localhost;dbname=oture";
    $username = "tony";
    $password = "0m46emJj8p0ziPC6";

    $pdo = new PDO($dsn, $username, $password);

    $id = 12;

    $stm = $pdo->prepare("SELECT * FROM countries WHERE id = :id");
    $stm->bindParam(":id", $id, PDO::PARAM_INT);
    $stm->execute();

    $row = $stm->fetch(PDO::FETCH_ASSOC);

    echo "ID : " . $row['id'] . PHP_EOL;
    echo "Name : " . $row['name'] . PHP_EOL;
    echo "Populcatio : " . $row['population'] . PHP_EOL;

?>