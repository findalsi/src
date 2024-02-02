<?php
$title = "Exercise 3: Variable, Strings & Operators:";
include "header.php"; ?>
<h2>2. If-Else: Write a PHP script to get inputs (age and name) from the user and based on their age, 
    decide if he/she is eligible for voting.
     (18 or more than 18 years is eligible for voting, use form to get user input).</h2>

<?php
$name = $_POST['name'];
$age = $_POST['age'];
?>
    <title> Form </title>

    <form action="ex4.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" value=""/>

        <label for="age">Age:</label>
        <input type="text" name="age" value=""/>

        <input type="submit" value="Submit"/>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    $name = $_POST['name'];
    $age = $_POST['age'];

    if ($age >= 18) {
        echo "You are eligible for voting.";
    } else {
        echo "You are not eligible for voting.";
    }

?>











<?php include "footer.php"; ?>