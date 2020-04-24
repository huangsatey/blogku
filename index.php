    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>API调用</title>
    </head>
    <h1>一言API实例<h1>
    <br />
    <?php
                //$testurl = "https://v1.hitokoto.cn/?参数（见上面，详见一言官网）"
                //因为方便，使用要用text编码请求
     		   $testurl = "https://v1.hitokoto.cn/?C=b&encode=text&charset=utf-8";  
    
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
    		   ?>
    <body>
    </body>
    </html>
