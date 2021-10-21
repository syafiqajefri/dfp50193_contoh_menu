<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kedai Tudung</title>
</head>
<body>
    <table>
        <tr>
            <td>NamaSystem</td>
            <td>
                :: :: :: 
                <a href = "utama.php?menu=home">Home</a>
                ::
                <a href = "utama.php?menu=product">Product</a>
                ::
                <a href = "utama.php?menu=about">About</a>
                ::
                <a href = "utama.php?menu=logout">Logout</a>
            </td>
        </tr>
    </table>
   

    <?php
    if (isset($_GET['menu'])) {
        $menu = $_GET['menu'];
    }else {
        $menu = 'home'; #default value
    }
    include $menu . '.php';
    ?>


</body>
</html>