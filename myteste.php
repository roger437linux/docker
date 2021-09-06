<!doctype html>
<html lang="br">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>
        Cloud Experience
 </title>
  <style>
        body {
            background: black;
            font: normal 24pt arial;
            color: yellow;
            text-align: center;
            margin-top: 220px;
        }
 </style>
</head>
<body>
        <?php
                $url = "http://169.254.169.254/latest/meta-data/instance-id";
                $url2 = "http://169.254.169.254/latest/meta-data/public-ipv4";
                $instance_id = file_get_contents($url);
                $public_ipv4= file_get_contents($url2);
                echo " <h1> <font color='00ff00'>  Instance ID: <b>" . $instance_id . "</b><br/></font> </h1> ";
                echo " <h1> <font color='1234ff'>  Public IPv4: <b>" . $public_ipv4. "</b><br/></font> </h1> ";
        ?>
</body>
</html>
