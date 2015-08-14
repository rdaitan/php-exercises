<?php
if (isset($_POST['bgcolor']))
    setcookie('bgcolor', $_POST['bgcolor'], time() + 60 * 60 * 24 * 7);


$bgname = '';
if (isset($_COOKIE['bgcolor']))
    $bgname = $_COOKIE['bgcolor'];
elseif (isset($_POST['bgcolor']))
    $bgname = $_POST['bgcolor'];
else
    $bgname = 'gray';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Save It</title>
</head>
<body bgcolor="<?php echo $bgname; ?>">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <p>Background color:
            <select name="bgcolor">
                <option value="gray">Gray</option>
                <option value="white">White</option>
                <option value="black">Black</option>
                <option value="blue">Blue</option>
                <option value="green">Green</option>
                <option value="red">Red</option>
            </select>
        </p>
    <input type="submit" />

    </form>  
</body>
    
</body>
</html>