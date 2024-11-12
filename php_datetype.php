<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>類型</title>
</head>
<body>
    <?php
    $a = 4.5 ;
    $a = (string)$a ; 
    echo $a."<br/>".gettype($a)."<br/>" ; 
    settype($a, "integer") ;
    echo $a."<br/>".gettype($a) ;
    ?>
</body>
</html>
