<?php
session_start();
setcookie('user', '', time() - 86400*30);
unset($_SESSION['user']);

echo "<script>window.location.href='index.php'</script>"

?>