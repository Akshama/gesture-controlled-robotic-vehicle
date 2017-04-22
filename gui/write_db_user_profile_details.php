
<?php

$mysqli = new mysqli('localhost', 'root', '', 'map');

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$stmt = $mysqli->prepare("INSERT INTO user_profile_details VALUES (?, ?, ?)");
$stmt->bind_param('dss', $user_id, $user_name, $password);

$user_id = '5';
$user_name = 'Bhavana';
$password = "bha";


/* execute prepared statement */
$stmt->execute();

printf("%d Row inserted.\n", $stmt->affected_rows);

/* close statement and connection */
$stmt->close();

/* Clean up table CountryLanguage */
//$mysqli->query("DELETE FROM CountryLanguage WHERE Language='Bavarian'");
//printf("%d Row deleted.\n", $mysqli->affected_rows);

/* close connection */
$mysqli->close();
?>
