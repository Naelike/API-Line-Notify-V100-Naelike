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

.JS : GET Service URL.
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
var getToken = token;
var gteMessage = message;
var urlGet = '../line-notify/messages' + '?token=' + getToken + '&message=' + gteMessage
```
PHP : GET Service URL.
```
$get_token = $_GET['token'];
$gte_message = $_GET['message'];
$url_get = '../line-notify/messages' . '?token=' . $get_token . '&message=' . $gte_message
```

# PHP GET Service Example 
```
$get_token = $_GET['token'];
$gte_message = $_GET['message'];
$url_get = '../line-notify/messages' . '?token=' . $get_token . '&message=' . $gte_message
```
```
$api_get_json = file_get_contents($url_get);
$json_jq = json_decode($api_get_json);
echo json_encode($json_jq);
```

# Axios GET Service Example 
```
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
```
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
var getToken = token;
var gteMessage = message;
var urlGet = '../line-notify/messages' + '?token=' + getToken + '&message=' + gteMessage
```
```
axios({
  method: "get",
  url: urlGet,
})
.then(function(response) {
  console.log(response.data);
})
.catch(function(response) {
  console.log(response);
});
```

# Ajax GET Service Example 
```
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
```
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
var getToken = token;
var gteMessage = message;
var urlGet = '../line-notify/messages' + '?token=' + getToken + '&message=' + gteMessage
```
```
$.ajax({url: urlGet, success: function(result){
  console.log(result);
}});
```

# JQuery GET Service Example 
```
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
```
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
var getToken = token;
var gteMessage = message;
var urlGet = '../line-notify/messages' + '?token=' + getToken + '&message=' + gteMessage
```
```
$.get(urlGet, function(data, status){
  console.log(data);
});
```

# JavaScript GET Service Example 
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
var getToken = token;
var gteMessage = message;
var urlGet = '../line-notify/messages' + '?token=' + getToken + '&message=' + gteMessage
```
```
var xmlHttp = new XMLHttpRequest();
var contentType = "application/x-www-form-urlencoded; charset=utf-8";
xmlHttp.open("GET", urlGet, true);
xmlHttp.setRequestHeader('Content-type', contentType)
xmlHttp.send(null);
xmlHttp.onreadystatechange = function() {
  if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
    console.log(xmlHttp.responseText);
  }
}
```

# Developer : NaeLike เนไลก์

@octocat :+1: Web :  <https://naelike.com> ..! :shipit:

TikTok :  <https://www.tiktok.com/@naelike6564>
<br>
Facebook :  <https://web.facebook.com/NaeLikePage>
<br>
Instagram :  <https://www.instagram.com/naelike_ig>
<br>

