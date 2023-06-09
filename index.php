<?php
if (isset($_POST['index'])) {
    $index = $_POST['index'];
    echo $index;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Css -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">   

    <title>Shop Online - PHP OOP 2</title>
</head>
<body>

    <!-- HEADER -->
    <?php include_once __DIR__ . '/components/header.php' ?>
    
    <!-- MAIN -->
    <?php include_once __DIR__ . '/components/main.php' ?>

    <!-- FOOTER -->
    <?php include_once __DIR__ . '/components/footer.php' ?>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- Main JS -->
    <script src="./main.js"></script>
    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
</body>
</html>