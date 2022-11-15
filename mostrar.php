
<?php
$host = "heffalump.db.elephantsql.com";
$user = "javxtrtk";
$pass = "JHu4KtY6sF3hHyl6u4aUPw9xQ6oDAYaW";
$db = "javxtrtk";

 // Open a PostgreSQL connection
$con = pg_connect("host=$host dbname=$db user=$user password=$pass")
or die ("Could not connect to server\n");

$query = 'SELECT * FROM proveedores';
$results = pg_query($con, $query) or die('Query failed: ' . pg_last_error());

$arr = pg_fetch_all($results);

echo json_encode($arr); 



pg_close($con);
?>
