<html>

<head>
<meta charset="utf-8">
<title>Answer</title>
</head>

<body>
<p>
<?php
    $first = floatval($_POST['first']);
    $second = floatval($_POST['second']);

        if($_POST['operation'] == 'add') {
            echo "The sum is " .($first + $second);
        }
        else if($_POST['operation'] == 'subtract') {
            echo "The difference is " .($first - $second);
        }
        else if($_POST['operation'] == 'multiply') {
            echo "The product is " .($first * $second);
        }
        else if($_POST['operation'] == 'divide') {
            if($second == 0){
                echo 'The dividend is undefined. You cannot divide by zero';
            } else {
                echo "The dividend is " .($first / $second);
            }
        } else {
            echo 'unknown operator';
        }
    ?>
    .
</p> 

<?php

<?php
$dbh = new PDO('mysql:host=localhost;dbname=test', $root, $pw);
?>



?>
</body>
</html>