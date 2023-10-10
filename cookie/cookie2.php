<?php

$cookie_name = "user";
setcookie($cookie_name, "", time()- 3600);
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie '" . $cookie_name . "' isn't set!<br>";
} else {
    echo "Cookie '" . $cookie_name . "' is set! <br>";
    echo "Value is: '" . $_COOKIE[$cookie_name];
}

?>