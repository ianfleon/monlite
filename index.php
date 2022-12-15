<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MidaHostspot</title>
  <link rel="stylesheet" href="style.css">
  <style>
  </style>
</head>

<body>

  <div class="container text-center mt-4">
    <div class="load-4">
      <p class="mb-4" id="loading_text">Menghubungkan ke MidaHostspot..</p>
      <div class="ring-1"></div>
    </div>
  </div>

  <script>

    const httpRequest = new XMLHttpRequest();

    function connect_to_monlite()
    {
        if (!httpRequest) {
          alert("Aplikasi Error! Hubungi Ian.");
        }
    
        httpRequest.onreadystatechange = alertContents;
        httpRequest.open("GET", "status.php");
        httpRequest.send();

    }

    function alertContents() {
      if (httpRequest.readyState === XMLHttpRequest.DONE) {
        if (httpRequest.status === 200) {
          if (httpRequest.responseText == "true") {
            window.location = "dashboard.php";
          } else {
            connect_to_monlite();
          }
        } else {
          alert("Ada kesalahan. Hubungi Ian!");
        }
      }
    }

    connect_to_monlite(); // run connection

  </script>

</body>

</html>