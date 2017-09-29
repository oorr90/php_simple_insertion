<?php

$item_name = $_POST['item_name'];
$description = $_POST['description'];
$price = $_POST['price'];
$category = $_POST['category'];


//The text below is JUST text to php, but SQL knows it has special meaning
    //surround it with quotes so php knows its just text
    //save it as a variable so you can use it again and again
$insert_query = "INSERT INTO
`village_cafe`
(`item_name`, `description`, `price`, `category`)
VALUES
('$item_name', '$description', $price, '$category')";

    //so HOW does php send this text to SQL?
    //see below...

// 1. Connect to the database using the same login information as for phpMyAdmin
    //store the connection in a variable ($conn)
    //you MUST send the information in this order:
        // "server name", "user name", "password", "DATABASE!! (for some reason I needed this extra part...)"

$server_name = "server_name_here";
$user_name = "user_name_here";
$user_pass = "user_pass_here";
$db = "db_name_here";

$conn = mysqli_connect($server_name, $user_name, $user_pass, $db);

//WITHOUT VARIABLES: (another way to write)
    //$conn = mysqli_connect("localhost:3308", "root", "root", "mysql");

// 2. Test the connection to make sure it was successful. If it wasn't, stop running the php page and print an error message!
    //if $conn did not succeed...then die with a helpful error message

if (!$conn) {
    die("Couldn't connect to database");
}

// 3. Select the database (mysqli_select_db) you are using (your own database or the shared database we are using for this class)
    //pass the connection ($conn) and your username (root)
    //its the same username as before!

mysqli_select_db($conn, "root");

// 4. Send the query to the database
    //you MUST send the information in this order:
        //connectionVariableName, "query text"
    //this hands us a result back, so store it in a variable

$insert_result = mysqli_query($conn, $insert_query);

// 5. Test to see if it the query was successful. If it wasn't print an error message
    //don't want to DIE here, because otherwise the connection will close

if (!$insert_result) {
    echo ("Couldn't insert into table");
}

// 6. Close the database connection
mysqli_close($conn);




?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Village Caf&eacute; INSERT</title>
</head>
<body>
    <h1>Village Caf&eacute; Control Panel: Item Inserted!</h1>
    <p>
        <a href="index.html">Back to insertion page</a>
    </p>
    <section>
        <p>
            Here is what you entered:
        </p>
        <ul>
            <li>Name of item: <?php echo $item_name; ?></li>
            <li>Description: <?php echo $description; ?></li>
            <li>Price: <?php echo $price; ?></li>
            <li>Category: <?php echo $category; ?></li>
        </ul>
    </section>
</body>
</html>
