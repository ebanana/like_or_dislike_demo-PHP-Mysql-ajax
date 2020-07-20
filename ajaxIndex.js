function zan()
{
	$.ajax({
		type:"POST",
		url:"./likeSever.php",
		data:{'zanId':$("#zanId").val(),'uId':$("#uId").val()},
		success:function(text){
			$("#dolikeDIV").html(text);
		}
	});
	
}

function zanDel()
{
	$.ajax({
		type:"POST",
		url:"./disSever.php",
		data:{'zanId':$("#zanId").val(),'uId':$("#uId").val()},
		success:function(text){
			$("#dolikeDIV").html(text);
		}
	});
	
}