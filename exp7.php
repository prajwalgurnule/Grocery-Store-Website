<!DOCTYPE html>
<html lang="en">
<head>
    <title>Digital Clock</title>
    <meta http-equiv="refresh" content="1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        #clock {
            font-size: 90px;
            font-weight: bold;
            text-align: center;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div id="clock">
        <?php
        //date_dafault_timezone_set('GMT');
        //date_default_timezone_set('UTC');
        date_default_timezone_set('Asia/Kolkata');
        echo date('Y-m-d H:i:s');
        ?>
    </div>
</body>
</html>