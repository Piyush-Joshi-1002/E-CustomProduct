<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <button onclick="Text()"> Onclick</button>
    <div id="ArrayDiv"></div>
    <script type="text/javascript">
        function Text()
        {
            var array = ["Hi","This","Is","winner"];
            var ajax = new XMLHttpRequest();
              ajax.open("POST", "chq2.php", true);
              ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
              ajax.send("image[]="+array);
              ajax.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("ArrayDiv").innerHTML = this.responseText.trim();
                }
            }
        }
    </script>
</body>
</html>