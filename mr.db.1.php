<?PHP
//DATABASE JAKSa.iD
$server = "localhost"; 
$username = "panevkejaksaan_prosakip";
$password = "B,*3EnP]VIFH";
$database = "panevkejaksaan_prosakip";
$mytable  = "sinori_login";
$mysqli = new mysqli("$server","$username","$password","$database");
//$koneksi = mysqli_connect('localhost','root','','tutorial');
//$mysqli = mysqli_connect("$server","$username","$password","$database");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

// Perform query
if ($result = $mysqli -> query("SELECT * FROM $database")) {
  echo "Returned rows are: " . $result -> num_rows;
  // Free result set
  $result -> free_result();
}

$mysqli -> close();

?>
