<?php

include_once("config.php");
 
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    $Name = $_POST['Name'];
    $Rank = $_POST['Rank'];
    $Games = $_POST['Games'];    
    
    // no information?
    if(empty($Name) || empty($Rank) || empty($Games)) {            
        if(empty($Name)) {
            echo "Need a name.";
        }
        
        if(empty($Rank)) {
            echo "Need a rank";
        }
        
        if(empty($Games)) {
            echo "You dont have a game?.";
        }        
    } else {    

        $result = mysqli_query($mysqli, "UPDATE users SET name='$Name',age='$Rank',email='$Games',images'$image' WHERE id=$id");        
        header("Location: index.php");
    }
}
?>
<?php
//getting id from url
$id = $_GET['id'];
 
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");
$img = mysqli_query($mysqli, "SELECT * FROM images");
 
while($res = mysqli_fetch_array($result))
{
    $Name = $res['Name'];
    $Rank = $res['Rank'];
    $Games = $res['Games'];
	$img = $res['images'];
}
?>

<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="Name" value="<?php echo $Name;?>"></td>
            </tr>
            <tr> 
                <td>Rank</td>
                <td><input type="text" name="Rank" value="<?php echo $Rank;?>"></td>
            </tr>
            <tr> 
                <td>Games</td>
                <td><input type="text" name="Games" value="<?php echo $Games;?>"></td>
            </tr>

			 <tr> 
                <td>Images</td>
                <td><input type="text" name="images" value="<?php echo $img;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>

    </form>
</body>
</html>