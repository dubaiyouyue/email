<?php  

/*  
这是一个测试程序!!!  
*/  
require("smtp.php");  
##########################################  
$smtpserver = "smtp.exmail.qq.com";//SMTP服务器  
$smtpserverport = 25;//SMTP服务器端口  

/*
admin@lizhenqiu.com
lizhenqiu1990

test@resonance.net.cn
gongzheng2014

yf@resonance.net.cn
gongzheng2014123
*/


$smtpusermail = "dc@resonance.net.cn";//SMTP服务器的用户邮箱  
//$smtpemailto = "2500152288@qq.com";//发送给谁  
$smtpuser = "dc@resonance.net.cn";//SMTP服务器的用户帐号  
$smtppass = "Oubb4WwDoAOtz6I8";//SMTP服务器的用户密码  
//$mailsubject = "中文";//邮件主题  
//$mailbody = "<h1>中文</h1>测试下能淤泥新年感";//邮件内容  
$mailtype = "HTML";//邮件格式（HTML/TXT）,TXT为文本邮件  
##########################################  
$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证.  
$smtp->debug = false;//是否显示发送的调试信息  




$mailsubject='点开即有机会赢取100元话费';

//519747503
	$r=rand(10000,99999);
	$r=$r.rand(1000,9999);
	$u=$r.'@qq.com';
/*
$myfile = fopen("1.html", "r") or die("Unable to open file!");
$mailbody=fread($myfile,filesize("1.html"));
fclose($myfile);
*/
$mailbody='<a href="http://www.sojump.com/jq/7071797.aspx">点开即有机会赢取100元话费,问卷调查网址：http://www.sojump.com/jq/7071797.aspx</a>';

//echo $u;exit;

//$test='3191294109'.'@qq.com';
if($test) $u=$test;

//$u='3207885181@qq.com';

	$ok=$smtp->sendmail($u, $smtpusermail, $mailsubject, $mailbody, $mailtype); 
		//$ok=1;
		
		if($ok){
		
			header("Content-type: text/html; charset=utf-8");
				/********************
				1、写入内容到文件,追加内容到文件
				2、打开并读取文件内容
				********************/
				 $file  = date('Y-m-d').'.txt';//要写入文件的文件名（可以是任意文件名），如果文件不存在，将会创建一个
				 $content = date('Y-m-d h:m:s')."\r\n";
				 
				 if($f  = file_put_contents($file, $content,FILE_APPEND)){// 这个函数支持版本(PHP 5) 
				  //echo "写入成功。<br />";
				 }
				 $content = $u."\r\n";
				 if($f  = file_put_contents($file, $content,FILE_APPEND)){// 这个函数支持版本(PHP 5)
					//echo "写入成功。<br />";
				 }
				 if($data = file_get_contents($file)){; // 这个函数支持版本(PHP 4 >= 4.3.0, PHP 5) 
				  //echo "写入文件的内容是：$data";
				 }
		}
		
		
		
		
		echo $u;
		if(!$test){
		$times=rand(9,39);
		sleep($times);
?> 

<script>location.href = 'http://email.test.abc123.gxtkr.com/';</script>

<?php }?>