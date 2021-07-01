<?php
$servername = "ec2-54-167-152-185.compute-1.amazonaws.com";
$usernameDB = "catczgfcxpanjm";
$password = "ffe79ed12dc9760c183c239118b2061eaeb8d82bf82ec05b6388129fbdf7f7f2";
$db = "d48s6rfdkths54";
// Create connection
$uri = "postgres://catczgfcxpanjm:ffe79ed12dc9760c183c239118b2061eaeb8d82bf82ec05b6388129fbdf7f7f2@ec2-54-167-152-185.compute-1.amazonaws.com:5432/d48s6rfdkths54";
$conn = pg_connect($uri);

// Check connection
if (!$conn) {
  die("Connection failed: " . pg_last_error());
}
?>