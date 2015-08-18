<?php
/**
 * @return \PDO
 */
function conecta() {
    $dsn = "mysql:host=localhost";
    $username = "root";
    $passwd = "root";

    return new \PDO($dsn, $username, $passwd);
}
?>