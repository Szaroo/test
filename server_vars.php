
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>[YIS]</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
  <body>
    <?php
        echo "Server:<br />";
        echo "SERVER NAME: " . $_SERVER['SERVER_NAME'] . "<br />";
        echo "SERVER ADDR: " . $_SERVER['SERVER_ADDR'] . "<br />";
        echo "SERVER PORT: " . $_SERVER['SERVER_PORT'] . "<br />";
        echo "<br />";
        echo "Page details:<br />";
        echo "PHP_SELF: " . $_SERVER['PHP_SELF'] . "<br />";
        echo "SCRIPT_FILENAME: " . $_SERVER['SCRIPT_FILENAME'] . "<br />";
        echo "<br />";
        echo "Details<br />";
        echo "REMOTE_ADDR: " . $_SERVER['REMOTE_ADDR'] . "<br />";
        echo "REMOTE_PORT: " . $_SERVER['REMOTE_PORT'] . "<br />";
        echo "REQUEST_URI: " . $_SERVER['REQUEST_URI'] . "<br />";
        echo "QUERY_STRING: " . $_SERVER['QUERY_STRING'] . "<br />";
        echo "REQUEST_METHOD: " . $_SERVER['REQUEST_METHOD'] . "<br />";
        echo "REQUEST_TIME: " . $_SERVER['REQUEST_TIME'] . "<br />";
        echo "HTTP_REFERER: " . $_SERVER['HTTP_REFERER'] . "<br />";
        echo "HTTP_USER_AGENT OK: " . $_SERVER['HTTP_USER_AGENT'] . "<br />";
    ?>
  </body>
</html>