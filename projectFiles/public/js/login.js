$(document).ready(function(){
	var checkTcNum = function(value) {
          value = value.toString();
          var isEleven = /^[0-9]{11}$/.test(value);
          var totalX = 0;
          for (var i = 0; i < 10; i++) {
            totalX += Number(value.substr(i, 1));
          }
          var isRuleX = totalX % 10 == value.substr(10,1);
          var totalY1 = 0;
          var totalY2 = 0;
          for (var i = 0; i < 10; i+=2) {
            totalY1 += Number(value.substr(i, 1));
          }
          for (var i = 1; i < 10; i+=2) {
            totalY2 += Number(value.substr(i, 1));
          }
          var isRuleY = ((totalY1 * 7) - totalY2) % 10 == value.substr(9,0);
          return isEleven && isRuleX && isRuleY;
        };
		
$(".login").click(function(){
    
    alert("aaaaa");
$('.emailh4').text("");
$('.tch4').text("");

var email = $("#email").val();
var password = $("#password").val();
var tc =$("#tc").val();
var tcuzunluk=$("#tc").val().length;
 
var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;

	


// Checking for blank fields.
if( email =='' || password =='' || tc =='')
{
	$('input[type="text"],input[type="password"]').css("border","2px solid red");
	$('input[type="text"],input[type="password"]').css("box-shadow","0 0 3px red");
	alert("Lütfen Tüm Alanları Doldurun");
}
else 
{
	if(!pattern.test(email))
{
	$('.email').css("border","2px solid red");
	$('email').css("box-shadow","0 0 3px red");
  $('.emailh4').text("Uygunsuz E-Mail Girdiniz");
}

 
 if(tcuzunluk!=11)
 {
	 $('.tc').css("border","2px solid red");
	$('tc').css("box-shadow","0 0 3px red");
	 $('.tch4').text("TC NO 11 Karakter Olmalı");
 }
 
 
 var isValid = checkTcNum(tc);
          if (isValid) {
          }
          else {
            $('.tch4').text("Uygunsuz TC No Girdiniz");
          }
		  
		  
	$.post("login.php",{ email1: email, password1:password},
	
function(data) 
{
	
if(data=='Invalid Email.......') 
{
$('input[type="text"]').css({"border":"2px solid red","box-shadow":"0 0 3px red"});
$('input[type="password"]').css({"border":"2px solid #00F5FF","box-shadow":"0 0 5px #00F5FF"});
alert(data);
}else if(data=='Email or Password is wrong...!!!!'){
$('input[type="text"],input[type="password"]').css({"border":"2px solid red","box-shadow":"0 0 3px red"});
alert(data);
} else if(data=='Successfully Logged in...'){
$("form")[0].reset();
$('input[type="text"],input[type="password"]').css({"border":"2px solid #00F5FF","box-shadow":"0 0 5px #00F5FF"});
alert(data);
} else{
alert(data);
}
});
}
});
});