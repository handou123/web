<?php
include "header.php";

?>
    <!--路径导航-->
    <div class="container" id="placeNav">
        <ol class="breadcrumb">
            <li><a href="#">首页</a></li>
            <li class="active">登录</li>
        </ol>
    </div>
    <!--登录-->
    <div id="content" class="container">
        <h2>用户登录</h2>
        <hr>
        <form class="form-horizontal" id="form1" method="post" action="php/dologin.php">
            <div class="form-group">
                <label for="userName" class="control-label col-md-2">用户名</label>
                <div class="col-md-10">
                    <input type="text" id="userName" placeholder="请输入用户名" class="form-control" name="username"><span class="erro"></span>
                </div>
            </div>
            <div class="form-group">
                <label for="userPassword" class="control-label col-md-2">密码</label>
                <div class="col-md-10">
                    <input type="password" id="userPassword" class="form-control" placeholder="请输入密码" name="password"><span class="erro"></span>
                </div>
            </div>
            <div class="form-group">
        		<div class="col-sm-offset-2 col-sm-10">
          			<label><input type="checkbox" name="check">5天免登录</label>
       		 	</div>
      		</div>
            <button class="btn btn-success col-md-1 col-md-offset-2" id="logIn" type="submit">
            	登录
            </button>
            <button class="btn btn-default col-md-1" id="reset" type="reset">重置</button>
            <button class="btn btn-danger col-md-1 col-lg-2" id="singUp" type="button">
            	还没有帐号，去注册
            </button>
        </form>
    </div>
    <!--底部-->
    <footer class="container">
        Copyright1999-2016北京中公教育科技股纷有限公司 .All Rights Reserved 京ICP证161188号
    </footer>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
	var oForm=document.getElementById("form1");
	var oName=oForm.username;
	var oPass=oForm.password;
	var oErr=oForm.getElementsByClassName("erro");
	oForm.onsubmit=function(){
		if(oName.value=="")
			{
				oErr[0].innerHTML="用户名不能为空！";
				oErr[0].style.color="red";
				return false;
			}
		if(oPass.value=="")
			{
				oErr[0].style.display="none";
				oErr[1].innerHTML="密码不能为空！";
				oErr[1].style.color="red";
				return false;
			}
	}
</script>
</body>
</html>