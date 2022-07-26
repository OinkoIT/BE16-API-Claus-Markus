<?php
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
    header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tell me a joke Serri</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
       integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
   <div class="container mt-5">
       <h2>Serri's Dadjokes</h2>
       <button type="button" id="btn" class="btn btn-primary">Load a joke</button>
       <hr>
       <div id="content" class="row"></div>
   </div>

   <script>
       //AJAX function here


       document.getElementById('btn').addEventListener('click', loadApiContent);
       let content = document.getElementById('content');
       function loadApiContent() {
           let ajReq = new XMLHttpRequest();
           
           ajReq.open("GET", "RESTful.php");
        //    ajReq.setRequestHeader("Content-Type", "application/json");
          //  content.innerHTML =""; 
           ajReq.onload = function () {
               if (ajReq.status == 200) {
                   console.log(JSON.parse(ajReq.responseText));                   
                  const joke = JSON.parse(ajReq.responseText);                          
                  content.innerHTML += `<p><b>"</b>${joke['joke']}<b>"</b></p>`;

                   
               }
           };
           ajReq.send();
           
       }
   </script>
</body>

</html>

