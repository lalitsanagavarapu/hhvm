<?hh <<__EntryPoint>> function main() {
$port = rand(50000, 65535);

for ($i=0; $i<100; $i++) {
  $port = rand(10000, 65000);
  /* Setup socket server */
  $server = @stream_socket_server("tcp://127.0.0.1:$port");
  if ($server) {
    break;
  }
}

/* Connect to it */
$client = fsockopen("tcp://127.0.0.1:$port");

if (!$client) {
    die("Unable to create socket");
}

/* Accept that connection */
$socket = stream_socket_accept($server);

echo "Write some data:\n";
fwrite($socket, "line1\nline2\nline3\n");


echo "\n\nRead a line from the client:\n";
var_dump(fgets($client));

echo "\n\nRead another line from the client:\n";
var_dump(fgets($client));

echo "\n\nClose the server side socket and read the remaining data from the client\n";
fclose($socket);
fclose($server);
while(!feof($client)) {
    fread($client, 1);
}

echo "done\n";
}
