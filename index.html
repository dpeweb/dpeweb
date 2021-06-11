<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>index.php</title>
</head>
<body text="blue">
<center>
<body>
<?php
session_start();
$username = "";  $password = "";
if ( isset($_POST["Username"]) )
   $username = $_POST["Username"];
if ( isset($_POST["Password"]) )
   $password = $_POST["Password"];
if ($username != "" && $password != "") {
   $link = mysqli_connect("localhost", "root",
                  "Chiu20", "dpeweb")
        or die("無法開啟 MySQL 資料庫連接!<br/>");
    mysqli_query($link, 'SET NAMES utf8');
   $sql = "SELECT * FROM user  WHERE password='";
   $sql.=$password."' AND username='". $username."'";

   $result = mysqli_query($link, $sql);
   $total_records = mysqli_num_rows($result);

   if ( $total_records > 0 ) {
      $_SESSION["index_session"] = true;
      header("Location: login.php");
   } else { 
      echo "<center><font color='red'>";
      echo "使用者名稱或密碼錯誤!<br/>";
      echo "</font>";
      $_SESSION["index_session"] = false;
   }
   mysqli_close($link);
}

?>
<form action="index.php" method="post">
<table align="center" bgcolor="#FFCC99">
 <tr><td><font size="2">使用者名稱:</font></td>
   <td><input type="text" name="Username" 
             size="15" maxlength="10"/>
   </td></tr>
 <tr><td><font size="2">使用者密碼:</font></td>
   <td><input type="password" name="Password"
              size="15" maxlength="10"/>
   </td></tr>
 <tr><td colspan="2" align="center">
   <input type="submit" value="登入網站"/>
   </td></tr> 
</table>
</form>
<hr/><a href="add.php">註冊會員</a></center>
</body>
</html>