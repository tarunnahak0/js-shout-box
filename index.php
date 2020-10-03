<?php
include'database.php';
?>
<?php
$query="SELECT * from shouts ORDER BY id ";
$shouts=mysqli_query($con,$query);
?>

<html>
<head>
    <title>shout_box_js</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
<div id="container">
    <header>
        <h1>js shoutbox</h1>
    </header>
    <div id="shouts">
        <ul>
            <?php while ($row=mysqli_fetch_assoc($shouts)):?>
            <li> <?php echo $row['name'];?><?php echo $row['shouts'];?>[<?php echo $row['date'];?>]</li>
            <?php endwhile;?>
        </ul>
    </div>
    <footer>
        <form>
            <label>NAME:</label>
            <input type="text" id="name">
            <label>shout Text</label>
            <input type="text" id="shout">
            <input type="submit" id="submit" value="SHOUT!">
        </form>
    </footer>
</div>
</body>
</html>
