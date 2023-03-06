<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Hello Ajax</title>
  <style>
    body {
      font-family: sans-serif;
      padding: 0;
      margin: 0;
      min-height: 100vh;
    }

    .container {
      width: 100%;
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
    }

    button {
      padding: 10px;
      background-color: #2ecc71;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      background-color: #27ae60;
    }

    input {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .wrap {
      margin-top: 20px;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>Hello Ajax</h1>
    <input type="text" placeholder="Pencarian" id="keyword">
    <button id="btn">Load Content</button>
    <div class="wrap">
      <li id="hasil"></li>
    </div>
  </div>

  <script>
    function loadContent() {
      const ajax = new XMLHttpRequest();
      let text = document.getElementById("keyword").value;
      let data = "keyword=" + text;

      ajax.open("POST", "src/data.php", true);
      ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      ajax.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("hasil").innerHTML = this.responseText;
        }
      }
      ajax.send(data);
    }
    document.getElementById("btn").onclick = function() {
      loadContent();
    }
    // loadContent();
  </script>
</body>

</html>