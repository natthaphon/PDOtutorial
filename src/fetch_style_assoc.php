<?PHP
    $dsn = "mysql:host=localhost;dbname=oture";
    $username = "tony";
    $password = "0m46emJj8p0ziPC6";

    $pdo = new PDO($dsn, $username, $password);

    $stm = $pdo->query("SELECT * FROM countries");

    $rows = $stm->fetchAll(PDO::FETCH_ASSOC);

    foreach($rows as $row){
        print("{$row['id']} {$row['name']} {$row['population']}\n ");

    }
?>