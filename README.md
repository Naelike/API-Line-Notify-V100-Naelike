# API Line Notify


# API GET URL

Service Line Notify Messages:
> ../line-notify/messages{token="**"}{message="**"}
- token : ค่า Access Token
- message : ข้อความที่จะส่ง


Javascript : Get Info Url
```
var getToken = {token="**"}
var gteMessage = {message="**"}
var urlGet = '../line-notify/messages + '?token= + getToken + '&message=' + gteMessage
```

PHP : Get Info Url
```
$get_token = $_GET['token'];
$gte_message = $_GET['message'];
$url_get = '../line-notify/messages' . '?token=' . $get_token . '&message=' . $gte_message
```

# Developer : NaeLike เนไลก์

Co-authored-by: name <name@example.com>
<br>
Co-authored-by: another-name <another-name@example.com>"
