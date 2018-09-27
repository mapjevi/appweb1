<!DOCTYPE html>
<html>
<head>
<title> Demo Deploy </title>
</head>
<body style="background-color:#F9F8F8;">
<div align=center>
<h1> Deploy 4 </h1>

<img src="ticforum.png">
</div>

<?php
    foreach($phpinfo as $name => $section) {
        echo "<h3>$name</h3>\n<table>\n";
        foreach($section as $key => $val) {
            if(is_array($val))
                echo "<tr><td>$key</td><td>$val[0]</td><td>$val[1]</td></tr>\n";
            elseif(is_string($key))
                echo "<tr><td>$key</td><td>$val</td></tr>\n";
            else
                echo "<tr><td>$val</td></tr>\n";
        }
        echo "</table>\n";
    }
?>

</body>
</html>
