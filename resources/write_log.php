<html>
<body>

<?php

$fh = fopen("log.txt","a");

fwrite($fh, date("Y-m-d H:i:s\n"));

fclose($fh);

?>

</body>
</html>