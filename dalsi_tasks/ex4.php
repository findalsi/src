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

<h2>3. Switch Case: Write a PHP script that gets the current month and prints one of the following responses, 
    depending on whether it's August or not:

It's August, so it's still holiday.
Not August, this is Month-name so I don't have any holidays
Hint: You can use date(F) function to get the current month name. Check Date function from the php manual page.</h2>


<?php
  $month = date('F', time());
  switch ($month) {
    case 'August':
        echo "It's August, so it's still holiday.";
        break;
    
    default:
        echo "Not August, this is $month so I don't have any holidays.";
        break;
}
?> 
<h2>4. For Loop: Write a PHP script that will print the multiplication table of a number (n, 
    use form to get user input).</h2>

    <title>Multiplication table</title>

    <form method="post" action="ex4.php">
        <strong>Enter No:</strong>
        <input type="text" name="num" size="10">
        <input type="submit" value="Get Table">
    </form>
    <?php
$num = $_POST['num'];
if($num)
{
    for ($i=1; $i<=10; $i++)
    {
        $mul = $num * $i;
        echo "$num * $i = $mul<br>";
    }
}
else
{
    echo "Invalid Entry!";
}
?> 
<h2>5. While Loop: Write a PHP script that will print all the numbers from 1 to n. (use form to get user input)</h2>


<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
   Enter number: <input type = "number" name="number">
   <input type = "submit" value="Print Numbers">
</form>

<?php
if (isset($_POST['number'])) {
    $number = $_POST['number'];

    if ($number > 0) {
        $i = 1;
        while ($i <= $number) {
            echo $i . "<br>";
            $i++;
        }
    }
}
?>

<h2>6. Foreach Loop: Write a PHP script that will print all the elements of an array. 
    $myarray=("HTML", "CSS", "PHP", "JavaScript").</h2>


    <?php
$myarray = array("HTML", "CSS", "PHP", "JavaScript");


foreach ($myarray as $item) {
    echo $item . "<br>";
}
?>
<?php include "footer.php"; ?>