<?PHP
    $dsn = "mysql:host=localhost;dbname=oture";
    $username = "tony";
    $password = "0m46emJj8p0ziPC6";

    $pdo = new PDO($dsn, $username, $password);

    $sql = "CREATE TABLE words(id INT PRIMARY KEY AUTO_INCREMENT, word VARCHAR(255))";

    $ret = $pdo->exec($sql);
    $pdo->exec("INSERT INTO words(word) VALUES ('pen')");
    $pdo->exec("INSERT INTO words(word) VALUES ('bum')");
    $pdo->exec("INSERT INTO words(word) VALUES ('hum')");
    $pdo->exec("INSERT INTO words(word) VALUES ('den')");

    $rowid = $pdo->lastInsert();
    echo "THE last insert row id is $rowid" . "<br />";
?>