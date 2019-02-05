<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="view/jquery-1.9.1.js"></script>
    <script src="view/list.js"></script>
    <script src="view/bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <link href="view/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="view/style.css" rel="stylesheet" type="text/css" media="all">
    <title>MVC Project</title>
</head>
<body data-gr-c-s-loaded="true">
    <div class="container">
        <legend class="header">
            <h3 class="pull">Employee Manager</h3>
        </legend>

        <?php 
            include "view/employee/view.php";
        ?>
    </div>
</body>
</html>