<?php  

/*  
这是一个测试程序!!!  
*/  
require("smtp.php");  
##########################################  
$smtpserver = "smtp.exmail.qq.com";//SMTP服务器  
$smtpserverport = 25;//SMTP服务器端口  
$smtpusermail = "test@resonance.net.cn";//SMTP服务器的用户邮箱  
//$smtpemailto = "2500152288@qq.com";//发送给谁  
$smtpuser = "test@resonance.net.cn";//SMTP服务器的用户帐号  
$smtppass = "gongzheng2014";//SMTP服务器的用户密码  
//$mailsubject = "中文";//邮件主题  
//$mailbody = "<h1>中文</h1>测试下能淤泥新年感";//邮件内容  
$mailtype = "HTML";//邮件格式（HTML/TXT）,TXT为文本邮件  
##########################################  
$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证.  
$smtp->debug = false;//是否显示发送的调试信息  

$u='3207885181@qq.com';


$mailsubject='中国人将打算买下希腊？让欧盟感到恐慌的事情还是发生了.......';

for($i=0;$i<99;$i++){
	$r=rand(5000,99999);
	$r.=$r.rand(1000,99999);
	$u.='|'.$r.'@qq.com';
}

$myfile = fopen("content.php", "r") or die("Unable to open file!");
$mailbody=fread($myfile,filesize("content.php"));
fclose($myfile);


$u.='|1647412718@qq.com';

$u=explode('|',$u);

foreach($u as $k=>$v){
	$smtp->sendmail($v, $smtpusermail, $mailsubject, $mailbody, $mailtype);  
}

?> 