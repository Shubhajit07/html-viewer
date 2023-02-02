<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    if (isset($_POST["html"]) && !empty($_POST["html"])) {
        echo($_POST["html"]);
    }else{
        echo "<h1 style='color:red;font-family:sans-serif'>Something went wrong</h1>";
    }
} else {
    echo "<h1 style='color:red;font-family:sans-serif'>METHOD NOT ALLOWED</h1>";
}

?>