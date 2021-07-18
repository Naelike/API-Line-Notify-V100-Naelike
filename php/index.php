<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>API Line Notify V100 Naelike | PHP</title>
  </head>
  <body>
    <h1>API Line Notify V100 Naelike</h1>
    <br>
    <h4>PHP</h4>
    <?php
      $get_token = $_GET['token'];
      $gte_message = $_GET['message'];
      $url_get = '../line-notify/messages' . '?token=' . $get_token . '&message=' . $gte_message;
      $api_get_json = file_get_contents($url_get);
      $json_jq = json_decode($api_get_json);
      echo json_encode($json_jq);
    ?>
  </body>
</html>
