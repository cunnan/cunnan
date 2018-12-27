<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <title>demo test</title>
  </head>
  <body>
  <form action="/psd1611/16_ThinkPHP/Home/Test/save" method="post" enctype="multipart/form-data">
  图片：<input type="file" name="upload[]" multiple='multiple'/><br/>
  验证码：<input type="text" name="verify" size=4/><img onclick="this.src='/psd1611/16_ThinkPHP/Home/Test/showVerify?'+Math.random();" src="/psd1611/16_ThinkPHP/Home/Test/showVerify"/><br/>
  <input type="submit" value="提交"/>
  </form>
  </body>
</html>