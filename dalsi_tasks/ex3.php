<?php
$title = "Exercise 3: Variable, Strings & Operators:";
include "header.php"; ?>

<h2>2. Form Creation: Create a simple HTML form to collect the user’s Firstname and Lastname. 
    Use the echo statement to print “Hello [Firstname] [Lastname], You are welcome to my site.” inside an h3 tag. </h2>
<h2>3.Bootstrap Styling: Apply Bootstrap styles to the form. 
    Make sure to include the Bootstrap CSS link in your head tag.</h2>
<?php
echo "<h3>Hello [Firstname] [Lastname], You are welcome to my site.</h3>";
?>


    
<form>
    <div class="form1">
        <label for="fnimi">Firstname:</label>
        <input type="text" class="form-control" id="fnimi" name="fnimi">
    </div>

    <div class="form1">
        <label for="lnimi">Lastname:</label>
        <input type="text" class="form-control" id="lnimi" name="lnimi">
    </div>

<h2>4. HTML Table: Prepare a simple HTML table and apply Bootstrap styles to it. 
    Note, you have already done a table in Exercise 1. 
    If you wish, you can use the same table.</h2>

    <?php
$g1 = 5;
$g2 = 4;
$g3 = 5;
?>


    <table class="table table-striped table-bordered">
    <thead class="thead-light">
<tr><th>S.n</th><th>Name</th><th>Grade</th></tr>
<tr>
    <td>1</td>
    <td>John</td>
    <td><?php echo $g1 ?></td>

</tr>

<tr>
    <td>2</td>
    <td>Alice</td>
    <td><?php echo $g2 ?></td>

</tr>

<tr>
    <td>3</td>
    <td>Bob</td>
    <td><?php echo $g3 ?></td>

</tr>
</table>


<h2>5. String Variables: Write a PHP script with two string variables 
    ($str1 = "Hello"; $str2 = "World";). Join them together and print the length of the string.</h2>
<?php
$str1="Hello";
$str2="World";

echo $str1 . " " . $str2 . "<br>";
echo "Length of the String: " . strlen($str1 . " " . $str2);
?>

<h2>6. Number Addition: Write a script to add up the numbers: 298, 234, 46. 
    Use variables to store these numbers and an echo statement to output your answer.</h2>

    <?php

$first_number = 298;
$second_number = 234;
$third_number = 46;
$sum_total = $first_number + $second_number + $third_number;

$direct_text = 'Result = ';

print ($direct_text . $sum_total);

?>

<h2>7. Browser Detection: Write a PHP script to detect the browser being used to view your pages. 
    Hint: Use predefined variables: $_SERVER). Predefined Variables</h2>

    <?php
if(strpos( $_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
    echo " Internet explorer";
}
elseif(strpos( $_SERVER['HTTP_USER_AGENT'], 'Trident') !== FALSE) {
    echo " Internet explorer";
}
elseif(strpos( $_SERVER['HTTP_USER_AGENT'], 'Firefox') !== FALSE) {
    echo " Firefox";
}
elseif(strpos( $_SERVER['HTTP_USER_AGENT'], 'Chrome') !== FALSE) {
    echo " Chrome";
}
elseif(strpos( $_SERVER['HTTP_USER_AGENT'], 'Oper Mini') !== FALSE) {
    echo " Opera mini";
}
elseif(strpos( $_SERVER['HTTP_USER_AGENT'], 'Safari') !== FALSE) {
    echo " Safari";
}
elseif(strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera') !== FALSE) {
    echo " Opera";
}
else {
    echo "something else";
}
?>

<h2>8. File Modification Time: Write a PHP script in the footer section of your universal footer to 
    display the last modification time of a file. 
    Hint: Use predefined variable $_SERVER, basename function  to get the filename , 
    filetime function to get the last modified time & date function to print the date and time</h2>
    

   


<?php include "footer.php"; ?>