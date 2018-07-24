<?php    
exit;
//echo 'test';exit;
    include_once 'aliyun-php-sdk-core/Config.php';
    use Dm\Request\V20151123 as Dm;            
    $iClientProfile = DefaultProfile::getProfile("cn-hangzhou", "2qO0qJu1nfueLWLV", "jHkNpxd8dRtvFxGtTkwV3pKp7vEFcW");        
    $client = new DefaultAcsClient($iClientProfile);    
    $request = new Dm\SingleSendMailRequest();     
    $request->setAccountName('admin@e.resonance.net.cn');
    $request->setFromAlias("广西中润名车");
    $request->setAddressType(1);
    $request->setTagName("admin");
    $request->setReplyToAddress("true");
	$k=$_GET['k']+0;
	$qq=array(
		'3191294109',
		'2305420230',
		'1730360858',
		'2677595455',
		'2267496378',
		'483401442',
		'2056792832',
		'1341254541',
		'2101946854',
		'1489768213',
		'1647412718',
		'3207885181',
		'3093550971',
		'3310645889'
	);
	$qq=array('3207885181');
	if(!$qq[$k]) exit('no data');
    $request->setToAddress($qq[$k].'@qq.com');        
    $request->setSubject("以租代购，零首付就是这么任性");
	
	
	$myfile = fopen("2.htm", "r") or die("Unable to open file!");
	$mailbody=fread($myfile,filesize("2.htm"));
	fclose($myfile);
	
    $request->setHtmlBody(123);        
    $response = $client->getAcsResponse($request);    
    //print_r($response);
	$ok=$response;
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
		$times=rand(3,9);
		sleep($times);
		$k=$k+1;
		//exit;
?>
<script>location.href = 'http://email.test.abc123.gxtkr.com/alie.php?k=<?php echo $k;?>';</script>