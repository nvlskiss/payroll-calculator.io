<h1><center>Sign Up</center></h1>
<table border=1>
    <form action="signup.php" method="post">
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" required></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" required></td>
        </tr>
        <tr>
            <td><input type="submit" value="save" name="btnsubmit"></td>
            <td><input type="reset" value="next"></td>
        </tr>
    </form>
</table>

<?php
    if(isset($_POST['btnsubmit'])){
        include('connect.php');

        $e = $_POST['email'];
        $p = $_POST['password'];
        $search = "SEARCH email FROM tbl_login WHERE (email = '$e')";
        $result = mysqli_query($connect, $search);
        $bilang = mysqli_num_rows($result);

        if($bilang == 0){
            $insert = "INSERT INTO tbl_login (email, password) values ('$e', '$p')";
            mysqli_query($connect, $insert);
            print("Record successfully added!");
        }
        else{
            print($e . " already exists.");
        }
    }
?>

<p><a href="display.php">List of All Records</a></p>