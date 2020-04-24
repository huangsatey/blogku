    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>2D_photo_API</title>
    </head>
    <body>
    <?php
    //$num=rand(照片最小数,照片最大数);
    //照片格式要统一
    $num=rand(1,5);
    //header("Location: 请求的链接/api（文件夹名）/$num格式");
    header("Location: http://ckpan.oicp.io:82/api/$num.jpg");
    ?>
    </body>
    </html>
