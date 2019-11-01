<?PHP
    $dsn = "mysql:host=localhost;dbname=oture";
    $username = "tony";
    $password = "0m46emJj8p0ziPC6";

    $pdo = new PDO($dsn, $username, $password);

    try {

        $pdo->beginTransaction();
        $stm = $pdo->exec("INSERT INTO countries(name,population) VALUES ('Iraq', 3827400)");
        $stm = $pdo->exec("INSERT INTO countries(name,population) VALUES ('Uganda', 37673800)");

        $pdo->commit();
    } catch(Exception $e) {

        $pdo->rollback();
        throw $e;
    }

?>