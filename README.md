# API Line Notify


# API GET URL

Service Line Notify Messages:
> ../line-notify/messages[token=message=]
- token : ค่า Access Token
- message : ข้อความที่จะส่ง


Javascript : Get Info Url
```
function getParameter(name, url = window.location.href) {
  name = name.replace(/[\[\]]/g, '\\$&');
  var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
      results = regex.exec(url);
  if (!results) return null;
  if (!results[2]) return '';
  return decodeURIComponent(results[2].replace(/\+/g, ' '));
}
var token = getParameter('token');
var message = getParameter('message');
var getToken = getToken;
var gteMessage = message;
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
