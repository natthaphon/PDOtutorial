<?PHP
    $dsn = "mysql:host=localhost;dbname=oture";
    $username = "tony";
    $password = "0m46emJj8p0ziPC6";

    $pdo = new PDO($dsn, $username, $password);

    $id = 12;
    $nrow =$pdo->exec("DELETE FROM countries WHERE id IN (1, 2, 3)");
    
    echo "The statement affected $nrows rows\n";
?>