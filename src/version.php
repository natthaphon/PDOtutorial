<?PHP
    $dsn = "mysql:host=locahost;dbname=oture";
    $user = "tony";
    $password = "0m46emJj8p0ziPC6";

    $pdo = new PDO($dsn, $user, $password);
    $stm = $pdo->query("SELECT VERSION()");
    $version = $stm->fetch();
    echo $version[0] . PHP_EOL;
?>