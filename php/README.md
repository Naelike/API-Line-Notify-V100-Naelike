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

# Developer : NaeLike เนไลก์

<img class="rounded" src="https://scontent.fbkk12-3.fna.fbcdn.net/v/t1.6435-9/93648333_2588074381407604_1819990862671642624_n.jpg?_nc_cat=102&ccb=1-3&_nc_sid=174925&_nc_eui2=AeGvj3gumsyFQcl_39H8pkjjbBdlahhHOn1sF2VqGEc6fYLe7hnYUzwg9OPQDcxWJ3z0vVRlB0B_wVEX802AGAG4&_nc_ohc=SRG6pWJpWfUAX_kDBPe&tn=R6D5PJFBEcu5wgN6&_nc_ht=scontent.fbkk12-3.fna&oh=8748b4bbb487aa8fe58ba820af103300&oe=60F783E6" width="120" alt="NaeLike"> 

> Naelike เนไลก์

@เว็บไซต์ :+1: Web :  <https://naelike.com> ..! :shipit:
<br>
@ติดตาม :+1: Web :  <https://naelike.com/addmee> ..! :shipit:

TikTok :  <https://www.tiktok.com/@naelike6564>
<br>
Facebook :  <https://web.facebook.com/NaeLikePage>
<br>
Instagram :  <https://www.instagram.com/naelike_ig>
<br>


<a href="https://link.ckpzmc.xyz/dispnae"> 
   <img class="rounded" src="https://i.pinimg.com/originals/1a/9a/f1/1a9af177bdcd0bd93568e59bb7600cbe.png" width="120" alt="NaeLike"> 
   </br>
   <b class="fs-12">Discord คลิก..!</b> 
</a>
