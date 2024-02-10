<?php include "header.php"; ?>
<h2>About Us</h2>

<script>
    // this is a comment

document.write("Hello World")
//triggering an alert box
//window.alert("This is an alert box")

</script>


<noscript>

if java script is not enabled this will be displayed 
</noscript>
<script>
    // Function to be called after the page has loaded
    function hello() {
        document.write("This is after the page has loaded");
    }
</script>

<!-- Button with onclick attribute calling the hello function -->
<button onclick="hello()">Click me</button>





<?php include "footer.php"; ?>