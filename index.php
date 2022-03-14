<html>
    <head><!-- 把機器讀取內容放head -->
        <link href="/css/main.css" rel="stylesheet"><!-- 透過css對網頁進行美化 -->
        <link href="/img/icon.jpg" rel="icon">
        <title>墾丁三日文</title>
        <meta http-equiv="Content-Language" content="zh-TW">
        <meta http-equiv="Content-Type" content="text/php; charset=utf-8">
        <meta name="keywords" content="墾丁,墾丁三日,kanding,travel,travel taiwan">
        <meta name="description" content="墾丁三日文介紹與表單填寫">
        <meta name="author" content="FatBoy001">
        <meta name="distribution" content="Taiwan">
        <!--
            <meta>解析:所有tag都是給爬蟲看的
            http-equiv="Content-Language"內容語言
            http-equiv="Content-Type"內容及編碼
            name="keywords"負責google關鍵字
            name="description"介紹網頁作用 
            name="author"作者
            name="distribution"發布地區
        -->   
    </head>
    <body>
        <!--
            透過div建立區塊class將其命名，透過css配合版面
        -->
        <div class="contain"><b>
            <!--
                文章:<p>為段落,<br>為強迫換行,p會更有文章結構
                文字:<b>粗體,<i>為斜體,<u>為底線,<del>為刪除線
                字型:<font color="red" size="6" face=""> color顏色,size字體大小,face為字體
                水平線:<hr>
                清單:<ol><li>清單功能指的是older list,<ul><li>是指號碼
                
                可以帶入css語法以p為例<p style="color:;  font-size:;">
                css:border字的外框
                <a>target="new"可以開新的頁面
            -->
            <!--
                可於php插入html語法，關鍵在於原先的""變為''
            -->
            <font color="White">
                <?php
                    echo "<body bgcolor='#FAE8E0'>";
                ?>

                <center><spam style="color:White;   border: 2px white solid; font-size:42px;">墾丁三日文</spam></center>
                行程內容
                <hr>
                <center>
                    <a href="https://bunnyann.com/kentingplay/" target="new"><img src="/img/pic1.jpg" height="25%" width="25%" style="color:White;   border: 2px white solid;"></a>
                    <a href="/HELLO.pdf" target="new"><img src="/img/pic2.jpg" height="25%" width="25%" style="color:White;   border: 2px white solid;"></a>
                </center>
                <hr>
                <!--
                    cols 直的 rows橫的
                    <form>
                    這兩項必須要打method為資料如何傳輸,action用來指定一個位址(URL)，這個位址是告訴瀏覽器當按送出表單後，要將表格的內容送去哪邊。
                    <input>為輸入可觀察type分析輸入格式不同
                    name會傳到下一頁
                    pattern限制輸入格式
                -->
                <form action="/hello.php" method="post">
                    <ul>
                        <li>Name:<input type="text" name="pwd" required><!--required設定此項為必填-->
                        <li>e-mail:<input type="email" name="pwd" required>
                        <li>tel:<input type="tel" name="pwd" placeholder="02-28115522" pattern="[0-9]{2}-[0-9]{8}" required>
                        <li>Gender: 男<input type="radio" name="pwd">女<input type="radio" name="pwd">其他<input type="radio" name="pwd">
                        <li>Food Preference:
                            <ol>
                                <li>漢堡<input type="checkbox" name="pwd" checked><!--可以預設打勾-->
                                <li>義大利麵<input type="checkbox" name="pwd">
                                <li>飯糰<input type="checkbox" name="pwd">
                            </ol>
                        <li>T-shirt Size
                            <select name="size">
                                <option>S</option>
                                <option>M</option>
                                <option>L</option>
                                <option>XL</option>
                            </select>
                        <li>T-shirt color: <input type="color" name="pwd">
                        <li>Birthday: <input type="date" name="pwd">
                        <li>Tickets: <input type="number" name="pwd">
                        <li>其他評論:</br><textarea name="comment" cols="100" rows="10"></textarea>
                        <li><input type="submit"><input type="reset">
                    </ul>
                </form>
                <hr>
                <!--
                    <table>為表格,<tr>為列,<td>為欄,<th>為標題
                    更改字體顏色要使用css形式
                -->
                <center> T-shirt Size對照表：
                    <table border="4px" style="color:white;" bordercolor="white">
                        <tr>
                            <th>Size</th><th>Coat Size</th><th>Chest</th><th>Waist</th>
                        </tr>
                        <tr>
                            <td>S</td><td>34-36</td><td>34"-36"</td><td>28"-30"</td>
                        </tr>
                        <tr>
                            <td>M</td><td>38-40</td><td>38"-40"</td><td>32"-34"</td>
                        </tr>
                        <tr>
                            <td>L</td><td>42-44</td><td>42"-44"</td><td>36"-38"</td>
                        </tr>
                        <tr>
                            <td>XL</td><td>62-64</td><td>62"-64"</td><td>62"-64"</td>
                        </tr>
                    </table>
                </center>
            </font>
            </br>
            <!--
                經過測試若是使用div會框整行而不是字外框
                <div style="color:White;   border: 2px white solid;"><a href="#top">back to top</a></div>
                <a>放外面字可以變白
            -->
            <center><a href="#top"><spam class="buttom" style="color:White;   border: 2px white dashed;">back to top</spam></a></center>
        </b></div>
    </body>       
</html>
