/*
出处为aoligei!!



*/
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IP定位</title>
</head>

<body>
<form method="get" >
<div align="center">
<table width="200" border="1">
<tr>
<td colspan="2"><div align="center">IP定位</div></td>
</tr>
<tr>
<td width="136">
<input type="text" name="ip" />
</td>
<td width="48"><input type="submit"name="submit" value="search" /></td>
</tr>
</table>
</div>
</form>
<?php
if($_GET['submit']&&$_GET['submit']='search'){
$IP=$_GET['ip'];
//$key="自己的apikey"
$key="";
$testurl="https://restapi.amap.com/v3/ip?key=$key&ip=$IP&output=json";
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, $testurl);
 //参数为1表示传输数据，为0表示直接输出显示。
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//参数为0表示不带头文件，为1表示带头文件
curl_setopt($ch, CURLOPT_HEADER,0);
$output = curl_exec($ch);
curl_close($ch);
echo $output;
return $output;
}
    ?>
</body>
</html>

