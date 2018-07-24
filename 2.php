<!-- CSS goes in the document HEAD or added to your external stylesheet -->
<style type="text/css">
table.gridtable {
	font-family: verdana,arial,sans-serif;
	font-size:11px;
	color:#333333;
	border-width: 1px;
	border-color: #666666;
	border-collapse: collapse;
}
table.gridtable th {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #dedede;
}
table.gridtable td {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #ffffff;
}
</style>

<!-- Table goes in the document BODY -->

		<table class="gridtable" width="100%" border="0">
  <tr>
    <td>编号</td>
	<td>投递时间</td>
    <td>收件人邮箱</td>
	<td>主题</td>
  </tr>
    

<?php
header("Content-Type: text/html; charset=utf-8");
$zt=$_GET['zt'];
$file_name=$_GET['d'].'.txt';
$myfile = fopen($file_name, "r") or die("Unable to open file!");
$e=fread($myfile,filesize($file_name));


$e=explode("\r\n",$e);
//print_r($e);
$e_n=count($e);
$e_n_i=ceil(count($e)/2);
echo $_GET['d'].' 总共发送邮件: <span style="color:red;font-weight:bold;">'.ceil(count($e)/2).'</span> 封';
foreach($e as $k=>$v){
	if($k<$e_n-1) {
		?>
		
		
	
		<?php
		if($k%2) {
			
			//$i=$k+1;
		}
		else{
			$i=$k;
			$ii=$i+1;
		echo '<tr><td>'.$e_n_i.'</td><td>'.$e[$i].'</td><td>'.$e[$ii].'</td><td>'.$zt.'</td></tr>';
		$e_n_i--;
		}
		
		
	
}



    }




fclose($myfile);
?>
  
</table>