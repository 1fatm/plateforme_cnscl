
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel=" icon" href="téléchargement.icon" type="image/x-icon">
    <title>Page de connection</title>

     <style>
         body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: white;
            
        }
        .error-message {
            color: red;
        }
        .btn1 {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
        }
        .btn1:hover {
            background-color: #0056b3;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em 0;
            position: relative;
            bottom: 0;
            width: 100%;
            margin-top: auto;
        }
        .image-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            padding: 20px;
            background-color: #33333333;

        }
        .image-container img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .row
        {
            background:whitesmoke;
            border-radius: 12px;
        }
        .message 
        {
            color: red;
            font-weight: bold;
            font-size: 20px;
            text-align: center;
            margin-top: 20px;
        }
        
    </style>

    
</head>
<body>
<?php
    if (isset($_SESSION['message'])) {
        echo '<div class="message">' . $_SESSION['message'] . '</div>';
        unset($_SESSION['message']); 
    }
    ?>