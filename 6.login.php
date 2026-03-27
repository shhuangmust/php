<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust");
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   $login=FALSE;//將$login設定為布林值FALSE
   while ($row=mysqli_fetch_array($result)) {//建立while迴圈無法抓到資料後就會停止
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {//輸入的id和資料庫的id一樣 && 輸入的pwd和資料庫的pwd一樣
       $login=TRUE;//結果為True的話會將$login的布林值設定為TRUE
     }
   } 
   if ($login==TRUE)
     echo "登入成功";//$LOGIN變數為TRUE會顯示登入成功在網頁上
  else
     echo "帳號/密碼 錯誤";//$LOGIN變數為FALSE會顯示帳號和密碼之錯誤在網頁上
?>
