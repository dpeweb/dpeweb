<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>login.php</title>
<style>
	  #test1 { text-shadow:5px 5px 5px gray; font-size:30px;}
   </style>
   <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
   <style>
 @media (min-width: 375px) and (max-width: 500px) {
  p {
    font-size: 20px;
  }
  img {
    width: 100%;
    height: auto;
  }
  .scratch {
    position: relative;
    padding-bottom: 0%;
    padding-top: 0px;
    height: 0;
    }
  .scratch iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 0% !important;
    height: 0% !important;
    }
}
</style>
</head>
</head>

<body>
<?php

session_start();  
if ( $_SESSION["login_session"] != true ) 
   header("Location: login.php");
?>
<title>首頁.html</title> 
<P Align=center><img src="DPE1.png" width="1500" height="125"></p>
<table align="center">
  <tr>
   <th>
     <a href=""title="南投921大地震">
      <a href="https://amyannweb.github.io/"title="南投921大地震">
         <img src="地震.png" width="250" height="250"alt>
     </a>
  </th>
  <th><img src="台灣.png" width="375" height="600"alt></th>
  <th>
     <a href="https://ayaneesiao.github.io/"title="高雄莫拉克颱風">
         <img src="颱風2.png" width="300" height="250"alt>
     </a>
  </th>
  </tr>
</table>

<div class="scratch">
<fieldset>
<legend><img src="防災小測驗.png" width="300" height="80"></legend>
<h2>（小提醒：手機版不支援小測驗功能）</h2>
<table>
  <tr>
    <th><p id="test1">防災用品蒐集大挑戰</p></th>
    <th> </th>
  </tr>
  <tr>
    <td><P Align=center>
        <iframe src="https://scratch.mit.edu/projects/525806252/embed" allowtransparency="true" width="800" height="600" frameborder="0" scrolling="no" allowfullscreen></iframe>    
	</td>
    <td><h2>1.操作說明：</h2>
        <h3>按下左右方向鍵移動人物，並蒐集到正確的防災用品。</h3>
        <h3>限時 30 秒，接到正確的防災用品加 5 分，接到錯誤的防災用品扣 5 分。</h3>
        <h2>2.評量標準：</h2>
        <h3>▲精熟：130分以上</h3>
        <h3>▲基礎：100~130分</h3>
        <h3>▲待加強：100分以下</h3>
    </td>
  </tr>
  <tr>
    <th><p id="test1">收集防災用品小迷宮</p></th>
  </tr>
  <tr>
    <td><P Align=center>
      <iframe src="https://scratch.mit.edu/projects/261707527/embed" allowtransparency="true" width="800" height="600" frameborder="0" scrolling="no" allowfullscreen></iframe>
	    </td>
    <td><h2>1.操作說明：</h2>
        <h3>使用上下左右方向鍵移動人物，並走到正確位置收集防災用品。</h3>
        <h3>限時 130 秒，獲得正確的防災用品加 1 分並會顯示於清單中，獲得錯誤的防災用品扣 1 分。</h3>
        <h2>2.評量標準：</h2>
        <h3>▲非常厲害：5分以上</h3>
        <h3>▲超級棒：2~4分</h3>
        <h3>▲可以再試試看：1分以下</h3>
    </td>
  </tr>
</fieldset>
  </div>
</body>
</html>