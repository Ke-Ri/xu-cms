<?php
    require_once ('xu-database.php');

    $query = "SELECT * FROM `xu-settings` where id=1";
    $result = mysqli_query($conn,$query);
    $result = mysqli_fetch_assoc($result);
    
    $brand = $result["brand"];
    $address = $result["address1"];
    $email1 = $result["email1"];
    $email2 = $result["email2"];
    $number = $result["number1"];
    $metaRobots = $result["metaRobots"];
    ?>
<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="<?php echo $metaRobots; ?>">
    <meta name="description" content="Najlepszy darmowy CMS! Tylko u nas możesz już teraz pobrać nowy i intuicyjny system zarządzania treścią, z nowym panelem i nowoczesnym systemem do zarządzania SEO!">
    <meta name="keywords" content="">
    <title><?php echo $brand; ?></title>
    <link rel="shortcut icon" href="xu-structure/images/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="xu-structure/lib/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="xu-structure/css/main.css">
    <script src="xu-structure/lib/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
  </head>