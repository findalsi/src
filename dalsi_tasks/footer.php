<footer class="row mt-5">
    <div class="col-md-4">&copy;Dalsi Samarathunga</div>
    <div class="col-md-4"> Course: Web Development</div>
    <div class="col-md-4"> HAMK</div> 
    <?php
// Get the current file name using basename and $_SERVER['PHP_SELF']
$current_file_name = basename($_SERVER['PHP_SELF']);

// Get the last modification time of the current file
$file_last_modified = filemtime($current_file_name);

// Display the file name and last modified time in a human-readable format
echo "File: " . $current_file_name . "\n";
echo "Last modified: " . date("l, dS F, Y, h:ia", $file_last_modified) . "\n";
?>
  
</footer>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>