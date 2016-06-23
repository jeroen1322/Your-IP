<?php
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
     $ip=$_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
     $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
     $ip=$_SERVER['REMOTE_ADDR'];
}
?>
<html>
    <head>
        <title>Your IP</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
        <style>
            body{
                padding-top:50px;
            }
            .starter-template{
                padding:40px 15px;text-align:center;
            }
            .ip{
                font-size: 50px;
                text-align: center;
            }
            strong{
                color: red;
            }
        </style>
    </head>
    <body>
        <div class="ip"><p>Your IP address is:<br><strong><?php echo $ip?></strong></p></div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </body>
</html>
