// JavaScript Document
var oForm=document.getElementById("form1");
var oName=oForm.username;
var oPass=oForm.pass;
var oAgPass=oForm.agpass;
var oEmail=oForm.email;
var oTel=oForm.tel;
var oArea=oForm.area;
var oSex=oForm.sex;
//console.log(oSex.length);
var oHobby=document.getElementById("like").getElementsByTagName("input");
//console.log(oHobby[1]);
var oRead=oForm.read;
var oErr=document.getElementsByClassName("erro");
console.log(oName);
oForm.onsubmit=function() {

	if (oName.value == "") {
		oName.nextSibling.innerHTML = "用户名不能为空！";
		oName.nextSibling.style.color = "red";
//	 alert(用户名不能为空);
		return false;
	}
	else {
		var reg = /^[a-zA-Z]+$/;
		if (!reg.test(oName.value)) {
			oName.nextSibling.innerHTML = "用户名格式不正确！";
			oName.nextSibling.style.color = "red";
			return false;
		}
		else {
			if (oPass.value == "") {
				err_fun(oName.nextSibling);
				oPass.nextSibling.innerHTML = "密码不能为空！";
				oPass.nextSibling.style.color = "red";
				return false;
			}
			else {
				var reg = /^[a-zA-Z1-9]+$/;
				if(!reg.test(oPass.value)){
					oPass.nextSibling.innerHTML="密码格式不正确！";
					oPass.nextSibling.style.color="red";
					return false;
				}
				else{
					if (oAgPass.value == "") {
						err_fun(oPass.nextSibling);
						oAgPass.nextSibling.innerHTML = "确认密码不能为空！";
						oAgPass.nextSibling.style.color = "red";
						return false;
					}
				else {
					if (!(oAgPass.value == oPass.value)) {
						oAgPass.nextSibling.innerHTML = "确认密码不正确";
						oAgPass.nextSibling.style.color = "red";
						return false;
					}
					else {
						if (oEmail.value == "") {
							err_fun(oAgPass.nextSibling);
							oEmail.nextSibling.innerHTML = "邮箱不能为空！";
							oEmail.nextSibling.style.color = "red";
							return false;
						}
						else {
							var reg = /^\w+@\w+\.\w+$/;
							if (!(reg.test(oEmail.value))) {
								oEmail.nextSibling.innerHTML = "邮箱格式不正确！";
								oEmail.nextSibling.style.color = "red";
								return false;
							}
							else {
								if (oTel.value == "") {
									err_fun(oEmail.nextSibling);
									oTel.nextSibling.innerHTML = "电话不能为空！";
									oTel.nextSibling.style.color = "red";
									return false;
								}
								else {
									var reg = /^1[3578]\d{9}$/;
									if (!(reg.test(oTel.value))) {
										oTel.nextSibling.innerHTML = "电话格式不正确！";
										oTel.nextSibling.style.color = "red";
										return false;
									}
									else {
										if (oArea.value == "请选择省份") {
											err_fun(oTel.nextSibling);
											oArea.nextSibling.innerHTML = "地区不能为空！";
											oArea.nextSibling.style.color = "red";
//											alert("地区不能为空");
											return false;
										}
										else {
											if (oSex.value == "") {
												err_fun(oArea.nextSibling);
												oSex[1].nextSibling.nextSibling.innerHTML = "性别不能为空！";
												oSex[1].nextSibling.nextSibling.style.color = "red";
												return false;
											}
											else {
												var num = 0;//选中的个数
												for (var i = 0; i < oHobby.length; i++) {
													if (oHobby[i].checked) {
														num += 1;
													}
												}
												if (num < 1) {
													err_fun(oSex[1].nextSibling.nextSibling);
												oHobby[2].nextSibling.nextSibling.innerHTML = "爱好不能为空！";
												oHobby[2].nextSibling.nextSibling.style.color = "red";
													return false;
												}
												else {
													if (!(oRead.checked)) {
												err_fun(oHobby[2].nextSibling.nextSibling);
													oRead.nextSibling.nextSibling.innerHTML = "请认真阅读！";
													oRead.nextSibling.nextSibling.style.color = "red";
														return false;
													}
												}
											}
										}
									}
								}
							}
						}
					}
				}
				}
				
			}
		}
	}
}
function err_fun(obj){
	obj.style.display="none";
	return obj;
}












