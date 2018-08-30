
<?php
include_once("config.php");
 
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC"); 
?>
 
<html>
<head>    
    <title>Gamewall</title>
</head>
 
<body>
    <a href="add.html">Add a new user</a><br/><br/>
 
    <table width='80%' border=0>
        <tr bgcolor='#ffff'>
            <td>Name</td>
            <td>Rank</td>
            <td>Games</td>
            <td>Game_image</td>
        </tr>
        <?php 

        while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$res['Name']."</td>";
            echo "<td>".$res['Rank']."</td>";
            echo "<td>".$res['Games']."</td>";    
		    echo "<td><img src=/games/".$res['images']." />";

            echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('you want to delete?')\">Delete</a></td>";        
        }


        ?>
    </table>

		

</body>
</html>