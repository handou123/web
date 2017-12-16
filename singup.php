<?php
include "header.php";
?>
    <!--路径导航-->
    <div class="container" id="placeNav">
        <ol class="breadcrumb">
            <li><a href="#">首页</a></li>
            <li class="active">注册</li>
        </ol>
    </div>
    <!--注册-->
    <div id="content" class="container">
        <h2>用户注册</h2>
        <hr>
        <form class="form-horizontal" id="form1" method="post" action="php/dosingup.php">
            <div class="form-group">
                <label for="userName" class="control-label col-md-2">用户名</label>
                <div class="col-md-10" >
                    <input type="text" id="userName" placeholder="请输入用户名" class="form-control" name="username"><span class="erro"></span>
                </div>
            </div>
            <div class="form-group">
                <label for="userPassword" class="control-label col-md-2">输入密码</label>
                <div class="col-md-10">
                    <input type="password" id="userPassword" class="form-control" placeholder="请输入密码" name="pass"><span class="erro"></span>
                </div>
            </div>
            <div class="form-group">
                <label for="againPassword" class="control-label col-md-2">确认密码</label>

                <div class="col-md-10">
                    <input type="password" id="againPassword" class="form-control" placeholder="确认密码" name="agpass"><span class="erro"></span>
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="control-label col-md-2">Email</label>
                <div class="col-md-10">
                    <input type="email" id="email" class="form-control" placeholder="Email" name="email"><span class="erro"></span>
                </div>
            </div>
            <div class="form-group">
                <label for="tell" class="control-label col-md-2">手机号</label>
                <div class="col-md-10">
                    <input type="tel" id="tell" class="form-control" placeholder="手机号" name="tel"><span class="erro"></span>
                </div>
            </div>
            <div class="form-group">
                <label for="place" class="control-label col-md-2">地区</label>
                <div class="col-md-10">
                    <select class="form-control" id="place" name="area">
                        <option value="请选择省份">请选择省份</option>
                        <option value="北京">北京</option>
                        <option value="山东">山东</option>
                        <option value="江苏">江苏</option>
                        <option value="浙江">浙江</option>
                    </select><span class="erro"></span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2">性别</label>
                <div class="col-md-10" id="sex">
                    <input type="radio" name="sex" id="man" value="男"><label for="man">男</label>
                    <input type="radio" name="sex" id="woman" value="女"><label for="woman">女</label><span class="erro"></span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2">爱好</label>
                <div class="col-md-10" id="like">
                    <input type="checkbox" id="music" name="hobby[]" value="音乐"> <label for="music">音乐</label>
                    <input type="checkbox" id="travel" name="hobby[]" value="旅游"><label for="travel">旅游</label>
                    <input type="checkbox" id="mountain" name="hobby[]" value="登山"><label for="mountain">登山</label><span class="erro"></span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2"></label>
                <div class="col-md-10" id="read">
                    <input type="checkbox" name="read" value="阅读并接受"><label>阅读并接受 <a href="#">《用户协议》</a></label><span class="erro"></span>
                </div>
            </div>
            <button class="btn btn-success col-md-offset-2" id="signUp" type="submit">注册</button>
            <button class="btn btn-default " id="reset" type="reset">重置</button>
            <button class="btn btn-danger " id="logIn" type="button">已有帐号，去登录</button>
        </form>
    </div>
    <!--底部-->
    <footer class="container">
        Copyright1999-2016北京中公教育科技股纷有限公司 .All Rights Reserved 京ICP证161188号
    </footer>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/singup.js"></script>
</body>
</html>