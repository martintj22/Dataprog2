<html>
<head>
    <title>Add user</title>
</head>
 
<body>
<?php
include_once("config.php");
 
if(isset($_POST['Submit'])) {    
    $Name = $_POST['Name'];
    $Rank = $_POST['Rank'];
    $Games = $_POST['Games'];
        
    if(empty($Name) || empty($Rank) || empty($Games)) {                
        if(empty($Name)) {
            echo "No name?";
        }
        
        if(empty($Rank)) {
            echo "No rank?";
        }
        
        if(empty($Games)) {
            echo "No games?";
        }
        
    } else { 
   
        $result = mysqli_query($mysqli, "INSERT INTO Users(Name,Rank,Games) VALUES('$Name','$Rank','$Games')");

        echo "Lol it works";
        echo "<br/><a href='index.php'>View change</a>";
    }
}
?>
</body>
</html>