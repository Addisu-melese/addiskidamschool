<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>First JVS</title>
</head>
<body>
    <?php include "Cak_menu.php"; ?>
    <h2>Hello Java Script</h2>
    <!--Changing the contents of the html with id-->
    <button type="button" onclick="document.getElementById('Addis').innerHTML=Date()">Date</button>
    <button type="button" onclick="document.getElementById('Addis1').innerHTML='Addisu Melese'">Name</button>
    <button type="button" onclick="document.getElementById('Addis').innerHTML=''">Clearday</button>
    <button type="button" onclick="document.getElementById('Addis1').innerHTML=''">Clearname</button>
    <button onclick="document.getElementById('Addis1').style.fontSize='40px'">++</button>
    <button onclick="document.getElementById('Addis1').style.fontSize='10px'">--</button>
    <p id="Addis"></p>
    <p id="Addis1"></p>
    <!--Changing the image -->
    <button onclick="document.getElementById('image') .src='Adame.png'">changeImage</button>
    <button onclick="document.getElementById('image') .src='Animated.GIF'">Animate</button>
    <button onclick="document.getElementById('image') .style.display='none'">Hidimage</button>
    <button onclick="document.getElementById('image') .style.display='block'">showimage</button>
    <img id="image" src="Background.JPG" style="width:10%; height:10%; display: none;" >
    <!--Call the Java script-->
    <script src='Java.js'></script>
    <button onclick='myfunction()'>call_fcn_of_Js</button>
    <p id="Addis2">Please call</p>
    <!--Display-->
    <button onclick="document.write('Empty')">Clear all</button>
    <button onclick="window.alert('Alert')">Alert</button>
</body>
<footer></footer>
</html>