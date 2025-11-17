<?php
include "db.php";

function getBeverages()
{

    $pdo = getPDO();

    $stmt = $pdo->prepare("SELECT * FROM beverages");
    $stmt->execute();
    return $stmt->fetchAll();
}
