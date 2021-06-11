<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>add.php</title>
</head>
<body text="blue">
<center>
<?php
// 取得欄位資料
if (isset($_POST["Name"]) && isset($_POST["Mail"]) && isset($_POST["Username"]) && isset($_POST["Password"]) ) {
   $name = $_POST["Name"];
   $mail = $_POST["Mail"];
   $username = $_POST["Username"];
   $password = $_POST["Password"];
   // 檢查是否有輸入欄位資料
   if ($name != "" && $mail != "" && $username != "" && $password != "") {
      require_once("dpeweb_open.inc");
      // 建立SQL字串
      $sql = "INSERT INTO user (name, mail, username, password ) values('";
      $sql.= $name."', '".$mail."', '".$username."', '".$password."')";
      
      if ( mysqli_query($link, $sql) ) { // 執行SQL指令
         echo "<font color=red>新增聯絡資料成功!";
         echo "</font><br/>";
      }
      require_once("dpeweb_close.inc");
   }
}
?>
<form action="add.php" method="post">
<table border="1" width="300">
<tr><td><font size="2">姓名: </font></td>
   <td><input type="text" name="Name" 
              size="20" maxlength="10"/></td></tr>
<tr><td><font size="2">mail: </font></td>
   <td><input type="text" name="Mail" 
              size="20" maxlength="50"/></td></tr>
<tr><td><font size="2">帳號: </font></td>
   <td><input type="text" name="Username" 
              size="20" maxlength="20"/></td></tr>
<tr><td><font size="2">密碼: </font></td>
   <td><input type="text" name="Password" 
              size="20" maxlength="20"/></td></tr>
<tr><td colspan="2" align="center">
   <input type="submit" value="註冊"/></td></tr>
</table>
</form>
<hr/><a href="index.php">登入頁面</a>
</center>
</body>
</html>