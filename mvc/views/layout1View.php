<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #header, #footer {
            height: 30px;
            background-color: blue;
        }
    </style>
</head>
<body>
    <div id="header"></div>
    <div id="content">
        <?php
            $page = $data['page']."View.php"; 
            require("./mvc/views/pages/{$page}")
        ?>
    </div>
    <div id="footer"></div>
</body>
</html>