
<!DOCTYPE html>
 <html> 
<head> 
<title>无刷新点赞测试</title> 
<script type="text/javascript" src="jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="ajaxIndex.js"></script>
<style type="text/css">
#dolike, #donolike { width:30px; height:30px; margin-left:20px;float:left;}
#donolike {background:url(./images/nolike.png); background-size:30px 30px; }
#dolike{background:url(./images/like.png); background-size:30px 30px; }
*{border:0; margin:0; padding:0;font-size:16px;}
span{ line-height:30px; display:block; float:left; margin-left:10px;}
</style>
</head>
<body>
	<?php
	$con = new mysqli('localhost','root','','test');
	if (!$con)
	{
	    die('连接数据库失败，失败原因：' . mysqli_error());
	}else {
	   // echo "连接成功";
	}
    
	//假设用户编号为1
	$uId="2";
	
	//假设赞编号为1
	$zanId="1";
	
	//查找赞id为1的点赞数
	@$count=mysqli_query($con, "SELECT count FROM zanCount WHERE zanId=$zanId ");
	@$countResult=mysqli_fetch_array($count);
	@$countZan=$countResult['count'];
	
	//查找改用户是否对赞id为1 点赞
	@$uIdLike=mysqli_query($con, "SELECT * FROM zanRecord WHERE uId=$uId ");
	@$result=mysqli_fetch_array($uIdLike);
	
	//用于调用ajax方法时传递数据
	$transfer="";
	$transfer=<<<html
       <input type="hidden" id="uId" value=$uId />
        <input type="hidden" id="zanId" value=$zanId />
        
html;
    echo $transfer;
	//如果没有点赞
	$showZan="";
	if (isset($result)) 
	{
	    $showZan.=<<<html
         <div class="dolikeDIV" id="dolikeDIV">
		   <button id="dolike" onclick="zanDel()"></button>
		   <span id="zan">$countZan</span>
         </div>
html;
	   
	  
	}
	//如果有点赞
	else
	{
	    $showZan.=<<<html
        <div class="dolikeDIV" id="dolikeDIV">
		  <button id="donolike" onclick="zan()"></button>
		  <span id="zan">$countZan</span>
        </div>
html;
	}
	echo $showZan;
    ?>
  	
  	
</body>