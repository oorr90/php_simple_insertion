<?php
    $item_name = $_POST['item name'];
    $item_description = "Butternut squash";
    //literal string value
    $price = 2.5;
    $quantity = 10;

    $subtotal = $price * $quantity;
    //do math with variables

    $quantityMessage = "We have " . $quantity . " in stock right now.";
    //trying out some concatenation!
    $quantityMessage .= " ...So come check it out ASAP!";
    //good shortcut for accessing and updating the variable!
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP Variables</title>
</head>
<body>
    <h1>Learning about PHP Variables</h1>
    <p>The item name is: <?php echo($item_description); ?></p>
    <p>The item price is:
    <?php
    echo ($price);
    ?>
    </p>
    <p>
        Your total comes to: <?php echo($subtotal); ?>
    </p>
    <?php echo ($quantityMessage); ?>
</body>
</html>
