<?php 
$host = "0.0.0.0";
$port = 3000;
$message = "Hello Server";
echo "Message To server :".$message;
$socket = socket_create(AF_INET, SOCK_STREAM, 0) or die("Could not create socket\n");
$result = socket_connect($socket, $host, $port) or die("Could not connect to server\n"); 
socket_write($socket, $message, strlen($message)) or die("Could not send data to server\n");
$result = socket_read ($socket, 1024) or die("Could not read server response\n");
echo "Reply From Server :".$result;
socket_close($socket);

?>