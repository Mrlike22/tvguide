<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Icon" href="https://bit.ly/2UP3VCm" type="image/x-icon">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="style2.css" type="text/css">
    <title>Series</title>
</head>
<body background="https://bit.ly/340ZgBo">
<script src="script.js"></script>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <table cellpadding= "30px" align="center" , border=0px>
            <tr>
                <td width="100%"><img class="tablink" onclick="openPage('Marvel',this)" src="https://bit.ly/2STOBXz" id="defaultOpen" , width="100" height="50" > </td>
            </tr>
            <tr>
                <td><img class="tablink" onclick="openPage('Other',this)" src="" , width="100" height="100"></td>
            </tr>
            <tr>
                <td><img class="tablink" onclick="openPage('Anime',this)" src="https://bit.ly/39UD9U8" , width="100" height="100"></td>
            </tr>
            <tr>
                <td><img class="tablink" onclick="openPage('DC',this)"  src="https://bit.ly/33Qqz20" , width="100" height="100"></td>
            </tr>
            <tr>
                <td><img class="tablink" onclick="openPage('Animation',this)" src="https://img.icons8.com/color/452/rick-sanchez.png", width="100" height="100"></td>
            </tr>
        </table>
    </div>
    <span class="openBtn" onclick="openNav()">&#9776; Menu</span>
 <!------------------------------------------------------------------------------------>
    <?php
        $serverName = "localhost"; 
	    $userName = "root"; 
	    $password = ""; 
	    $dbName = "series"; 
	    // create connection 
	    $conn = mysqli_connect($serverName, $userName, $password, $dbName); 
	    // check connection 
	    if (!$conn) {
	       die("Connection failed: " . mysqli_connect_error());}
    ?>
    <div id="Marvel" class="tabcontent">
        <div class='grid-container'>
            <?php
            $sql = "SELECT name, img, link FROM marvel";
            $result = mysqli_query($conn, $sql); 
            while($row = mysqli_fetch_assoc($result)){
                echo"
                    <div>
                        <h1>".$row['name']."</h1><br>
                        <img class='front-image' src=".$row['img'].">
                    </div>
           
        ";}
	    mysqli_close($conn); 
        ?>
        </div>
    </div>






</body>

<!--<script>
        function openNav(){
            document.getElementById("mySidenav").style.width = "250px";
        }
        function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
        }
        function openPage(pageName,elmnt,color) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablink");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
      }
      document.getElementById(pageName).style.display = "block";
      elmnt.style.backgroundColor = color;
    }
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
    </script>
</html>