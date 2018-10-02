<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP Native</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <h3>
        <?php
            if($_GET['login'] == 'true'){
                echo 'Selamat Datang '.strtoupper($_GET['user']);
            }
        ?>
    </h3>
    
    <h3>LOGIN</h3>
    <form action="find.php" method="post">
        <input type="text" name="user" id="user" placeholder="USERNAME"><br>
        <input type="password" name="pswd" id="pswd" placeholder="PASSWORD"><br>
        <input type="submit" value="Enter">
    </form>

    <h3>INPUT</h3>
    <form action="insert.php" method="post">
        <input type="text" name="user" id="user" placeholder="USERNAME"><br>
        <input type="password" name="pswd" id="pswd" placeholder="PASSWORD"><br>
        <input type="submit" value="Enter">
    </form>
    <br>
    <form action="file.php" method="post">
            <input type="file" name="file" id="file" onchange="readLink(this);">
            <input type="submit" value="submit"><br>
    </form>
    <br>
    <br>
    <img src="#" alt="image" id="preview">
    <table>
    <tr>
        <td>ID</td>
        <td>USER</td>
        <td>PASSWORD</td>
        <td>ACTION</td>        
    </tr>
    <?php
    include('show.php');

    while($row = mysqli_fetch_assoc($query)){
    echo '
    <tr>
        <td>'.$row["id"].'</td>
        <td>'.$row["user"].'</td>
        <td>'.$row["password"].'</td>
        <td><a href="delete.php?id='.$row['id'].'"><button>delete</button></a></td>        
    </tr>';
    }
    ?>
    </table>
</body>
</html>