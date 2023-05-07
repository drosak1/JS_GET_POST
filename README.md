# JS_GET_POST
get and post using java script with www.dlb.one server
```
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Virtual logger</title>
</head>
<body>
  <button id="timeShow"> TIME </button>
  <br><br>
  <input type="button" onclick="P1_event()" value="PORT P1" />
  <br><br>
  <input type="button" onclick="P2_event()" value="PORT P2" />
  <br><br>
  <input type="button" onclick="P3_event()" value="PORT P3" />
  <br><br>

  <b><h1><div id="currentTime"></div></b></h1>
</body>
</html>

<script>
  var timeShow = document.querySelector("#timeShow"),
    displayTime = document.querySelector("#currentTime");

var showTime = function () {
  displayTime.textContent = new Date().toLocaleTimeString();
};
      //user -> username registered on dlb.one
      //port -> port number, 3 ports available
var P1_event = function () {
  fetch('https://dlb.com.pl/api.php?name=user&port=1');
  displayTime.textContent = 'P1 -> '+new Date().toLocaleTimeString();
};
var P2_event = function () {
  fetch('https://dlb.com.pl/api.php?name=user&port=2');
  displayTime.textContent = 'P2 -> '+new Date().toLocaleTimeString();
};
var P3_event = function () {
  fetch('https://dlb.com.pl/api.php?name=user&port=3');
  displayTime.textContent = 'P3 -> '+new Date().toLocaleTimeString();
};

timeShow.addEventListener("click", showTime);
</script>
```
