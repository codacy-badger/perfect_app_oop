<?php declare(strict_types=1);

use PerfectApp\Database\SQLiteConnection;

$pdo = (new SQLiteConnection())->connect();

try
{
    echo "<table border=1>";
    echo "<tr><td>Id</td><td>Breed</td><td>Name</td><td>Age</td></tr>";
    $result = $pdo->query('SELECT * FROM Dogs');

    foreach ($result as $row)
    {
        echo "<tr><td>" . $row['Id'] . "</td>";
        echo "<td>" . $row['Breed'] . "</td>";
        echo "<td>" . $row['Name'] . "</td>";
        echo "<td>" . $row['Age'] . "</td></tr>";
    }
    echo "</table>";
}
catch (PDOException $e)
{
    print 'Exception : ' . $e->getMessage();
}