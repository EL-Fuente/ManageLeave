&lt;?php
$host = "&lt;hostname>";
$db   = "conge_app";
$user = "&lt;your-remote-user>";
$pass = "&lt;strong-password>";

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    echo "Connected Successfully.";
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>