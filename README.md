# API Line Notify สำหรับผู้พัฒนา

Access Token : Access <https://notify-bot.line.me/my/>

> กดออก Access Token
<img src="http://img.in.th/images/dd97af925489ef681a30c86206e09b72.png" width="300" alt="">

> ขั้นตอนออก Access Token
<img src="http://img.in.th/images/05243311f1e21999f122941da036d0d3.png" width="300" alt="">

1. Access Token
   - กดออก Token
2. โปรดใส่ชื่อ Token
   - โปรดเลือกห้องแชท
     - กดออก Token
3. เก็บ Token
   - คัดลอก Access Token เก็บไว้

ออก Access Token (สำหรับผู้พัฒนา)
เมื่อใช้ Access Token แบบบุคคล จะสามารถตั้งค่าการแจ้งเตือนได้โดยไม่ต้องลงทะเบียนกับเว็บเซอร์วิส

# API GET URL

Service Line Notify Messages:
> ../line-notify/messages[token=message=]
- token : ค่า Access Token
- message : ข้อความที่จะส่ง


Javascript : GET Service URL.
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

PHP : GET Service URL.
```
$get_token = $_GET['token'];
$gte_message = $_GET['message'];
$url_get = '../line-notify/messages' . '?token=' . $get_token . '&message=' . $gte_message
```

# Developer : NaeLike เนไลก์

Co-authored-by: name <name@example.com>
<br>
Co-authored-by: another-name <another-name@example.com>"
