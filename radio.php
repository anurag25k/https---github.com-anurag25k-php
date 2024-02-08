<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="radio.php" method="post">
        <input type="radio" name="cc" value="VISA">
        VISA<br>
        <input type="radio" name="cc" value="MASTERCARD">
        MASTERCARD<br>
        <input type="radio" name="cc" value="AMERICAN EXPRESS">
        AMERICAN EXPRESS<br>
        */we use the same name in all the radion buttons as we want to select one at a time /*
        <input type="submit" name="confirm" value="confirm">
    </form>
</body>

</html>
<?php
if (isset($_POST["confirm"])) {
    $credit_card = null;
    if (isset($_POST["cc"])) {
        # code...
        $credit_card = $_POST["cc"];
        // echo $credit_card;
    }
    switch ($credit_card) {
        case "VISA":
            echo "You selected Visa";
            break;
        case "MASTERCARD":
            echo "You selected MASTERCARD";
            break;
        case "AMERICAN EXPRESS":
            echo "you selected AMERICAN EXPRESS";
            break;

        default:
        echo "please make a selection";
            
    }
}

?>