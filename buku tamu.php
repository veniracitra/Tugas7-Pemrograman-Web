<html>
    <head>
        <title> PROGRAM BUKU TAMU</title>
    </head>
    <body>
        <h1> BUKU TAMU</h1>
<?php
$servername = "localhost";
$userrname = "root";
$password = "";
$dbname = "my_db";

//Create connection
$conn = mysqli_connect($servername,$userrname,$password,$dbname);
// Check connection
if (!$conn) {
    die ("Connection failed:".mysqli_connect_error());
}

$sql = "CREATE TABLE buku_tamu(ID_BT INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, NAMA VARCHAR(200) NOT NULL,
EMAIL VARCHAR(50) NOT NULL, ISI text NOT NULL)";

if (mysqli_query($conn, $sql)){
    echo "table buku_tamu berhasil dibuat";
}else {
    echo "Error: ".$sql. "<br>" .mysqli_error($conn);
}

mysqli_close($conn);
?>
    </body>
</html>
