<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="styles.css">
    <style>
        
        .create-data-link {
            color: #28a745; 
        }

        
        .read-data-link {
            color: #28a745;
        }
    </style>
</head>
<body>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h2>Dalsi Samarathunga</h2>
        </div>
        <div class="col-md-8">
          <nav>
            <a href="ex1.php">Ex1</a>
            <a href="new.php">Ex2</a>
            <a href="ex3.php">Ex3</a>
            <a href="ex4.php">Ex4</a>
          </nav>
        
          <nav>
            <a href="../crud/index.php" class="create-data-link">Create Data</a>
            <a href="../crud/read.php" class="read-data-link">Read Data</a>
          </nav>
        </div>
      </div>
    </div>
</body>
</html>
