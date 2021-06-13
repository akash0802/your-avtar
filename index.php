<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: teal;
        }

        button {
            color: rgb(0, 0, 0);
            width: 70px;
            height: 40px;
            background-color: rgb(255, 0, 106);
            border: 1px;
            border-radius: 10px;
        }

        input {
            color: rgb(0, 0, 0);
            background-color: rgb(231, 169, 195);
            border: 1px;
            border-radius: 2px;
            height: 30px;
        }
    </style>
</head>

<body>
    <center>
        <form>
            <h1>Know Your Avatar</h1>
            <input id="name" type="text" placeholder="Enter Your Name"><br><br>
            <img src="https://joeschmoe.io/api/v1/akash" width="100px" height="100px" id="image"
                alt="name likho yrr"><br>
            <button type="button" onclick="change()"><b>check</b></button>
        </form>
    </center>

    <script>
        function change() {

            var a = document.getElementById("name").value;
            a = "https://joeschmoe.io/api/v1/" + a;

            document.getElementsByTagName("img")[0].setAttribute("src", a);

        }
    </script>
</body>


</html>
