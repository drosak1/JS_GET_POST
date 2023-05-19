<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>www.DLB.one -> Virtual logger POST</title>
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

    var P1_event = function () {
        let response = fetch('https://dlb.com.pl/api.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: 'user_name=Test&port=1'
        })
        .then(response => {
                console.log(response.statusText);
                return response.text();
            })
        .then(data => console.log(data));
        displayTime.textContent = 'P1 -> '+new Date().toLocaleTimeString();
    };

    var P2_event = function () {
        let response = fetch('https://dlb.com.pl/api.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: 'user_name=Test&port=2'
        })
        .then(response => {
                console.log(response.statusText);
                return response.text();
            })
        .then(data => console.log(data));
        displayTime.textContent = 'P2 -> '+new Date().toLocaleTimeString();
    };

    var P3_event = function () {
        let response = fetch('https://dlb.com.pl/api.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: 'user_name=Test&port=3'
        })
        .then(response => {
                console.log(response.statusText);
                return response.text();
            })
        .then(data => console.log(data));
        displayTime.textContent = 'P3 -> '+new Date().toLocaleTimeString();
    };


timeShow.addEventListener("click", showTime);
</script>