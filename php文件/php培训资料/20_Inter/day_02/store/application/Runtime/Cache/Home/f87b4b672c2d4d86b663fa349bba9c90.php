<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <title>系统提示信息</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="/store/public/css/store.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript">
      var index = 5;//倒计时的时间
      function changeTime()
      {
    	  document.getElementById("timeSpan").innerHTML = index;
    	  index--;
    	  if(index < 0){
    		  window.location = "<?php echo ($jumpUrl); ?>";
    	  }
    	  else{
    		  window.setTimeout("changeTime()",1000);
    	  }
      }
    </script>
  </head>
  <body onload="changeTime()">
    <br/><br/><br/>
    <table border="1" align="center" width="600">
      <tr>
        <td><b>系统提示信息</b></td>
      </tr>
      <tr>
        <td align="center">
          <br/><?php echo ($message); ?> 页面将在 <span id="timeSpan">5</span> 秒钟内自动跳转！<br/>
          <br/>如果没有自动跳转，<a href="<?php echo ($jumpUrl); ?>">请点击这里</a>。<br/><br/>
        </td>
      </tr>
    </table>
  </body>
</html>