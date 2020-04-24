    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>示例</title>
    </head>
    
    <body>
    <?php
    $key='abc123';
    //判断是否存在参数
    if(isset($_GET['key'])){
	echo "key参数存在！";
	//输出换行
	echo "<br>";
	//判断参数是否为空值
	if($_GET['key']!=''){
		echo "key参数不是空值";
		//输出换行
		echo "<br>";
		//判断参数是否正确
		if($_GET['key']==$key)
		{
		echo "参数正确";	
		}else{
			echo "参数不正确";
			}
	}
	else{
		echo "key参数是空值";
		}
	}else{
	echo "key参数不存在！";	
	}
	

    ?>
    </body>
    </html>
