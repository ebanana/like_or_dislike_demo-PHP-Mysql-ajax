<?php
$con = new mysqli('localhost','root','','test');
if (!$con)
{
    die('连接数据库失败，失败原因：' . mysqli_error());
}else {
    //echo "连接成功";
}


 
    $uId=$_POST["uId"];
    $zanId=$_POST["zanId"];

    //更新赞总数的数据
    mysqli_query($con,"UPDATE zanCount SET count = count+1 WHERE zanId=$zanId");
    
    //添加一条点赞记录   
    mysqli_query($con,"INSERT INTO zanRecord(zanId,uId) VALUES($zanId, $uId); ");
    
    //查找赞的总数
    @$count=mysqli_query($con, "SELECT count FROM zanCount WHERE zanId=$zanId ");
    @$countResult=mysqli_fetch_array($count);
    @$countZan=$countResult['count'];
    
    //更改输出的html
    $show="";
    $show=<<<html
        <button id="dolike" onclick="zanDel()"></button>
		<span id="zan">$countZan</span>
html;
    echo $show;
?>