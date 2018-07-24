<?php  
//date_default_timezone_set('Asia/Shanghai');
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


$smtpusermail = "admin@lizhenqiu.com";//SMTP服务器的用户邮箱  
//$smtpemailto = "2500152288@qq.com";//发送给谁  
$smtpuser = "admin@lizhenqiu.com";//SMTP服务器的用户帐号  
$smtppass = "lizhenqiu1990";//SMTP服务器的用户密码  
//$mailsubject = "中文";//邮件主题  
//$mailbody = "<h1>中文</h1>测试下能淤泥新年感";//邮件内容  
$mailtype = "HTML";//邮件格式（HTML/TXT）,TXT为文本邮件  
##########################################  
$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证.  
$smtp->debug = false;//是否显示发送的调试信息  




$mailsubject='中国人将打算买下希腊？让欧盟感到恐慌的事情还是发生了...';

//519747503
	$r=rand(519747503,2500152288);
	if($r<0) $r=0-$r;
	//$r=$r.rand(1000,9999);
	$u=$r.'@qq.com';

/*$myfile = fopen("20150805.html", "r") or die("Unable to open file!");
$mailbody=fread($myfile,filesize("20150805.html"));
fclose($myfile);*/

//echo $u;exit;

//$test='3207885181'.'@qq.com';
if($test) $u=$test;

//$u='3207885181@qq.com';

	//$ok=$smtp->sendmail($u, $smtpusermail, $mailsubject, $mailbody, $mailtype); 
		$ok=1;
		
		if($ok){
		
			header("Content-type: text/html; charset=utf-8");
				/********************
				1、写入内容到文件,追加内容到文件
				2、打开并读取文件内容
				********************/
				 $file  = date('Y-m-d').'.txt';//要写入文件的文件名（可以是任意文件名），如果文件不存在，将会创建一个
				 $content = date('Y-m-d H:i:s')."\r\n";
				 
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
		$sllll=rand(39,109);
		//sleep(1);
		$sjjjj=$_GET['s']+1;
		if($sjjjj>$sllll) exit;
?> 

<script>location.href = 'http://email.test.abc123.gxtkr.com/1.php?s=<?php echo $sjjjj;?>';</script>

<?php }?>