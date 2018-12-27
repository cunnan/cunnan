<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
  <head>
    <title>管理中心登陆</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
	<style type="text/css">
	body{
		margin: 0px
	}
	P{
		margin: 0px
	}
	body{
		color: #000; background-color: #fff
	}
	body{
		font-size: 12px; line-height: 150%; font-family: "Verdana", "Arial", "Helvetica", "sans-serif"
	}
	</style>
  </head>
  <body onload=document.form1.name.focus();>
    <table height="100%" cellSpacing=0 cellPadding=0 width="100%" bgColor=#002779 border=0>
      <tr>
        <td align=middle>
          <table cellSpacing=0 cellPadding=0 width=468 border=0>
            <tr>
              <td><img height=23 src="/360buy/public/images/login_1.jpg" width=468></td>
            </tr>
            <tr>
              <td><img height=147 src="/360buy/public/images/login_2.jpg" width=468></td>
            </tr>
          </table>
          <table cellSpacing=0 cellPadding=0 width=468 bgColor=#ffffff border=0>
            <tr>
              <td width=16><img height=122 src="/360buy/public/images/login_3.jpg" width=16></td>
              <td align=middle>
                <table cellSpacing=0 cellPadding=0 width=230 border=0>
                  <form name="frm" action="/360buy/admin.php/Index/index" method="post">
                  <tr height=5>
                    <td width=5></td>
                    <td width=56></td>
                    <td></td>
                  </tr>
                  <tr height=36>
                    <td></td>
                    <td>用户名</td>
                    <td><input style="BORDER-RIGHT: #000000 1px solid; BORDER-TOP: #000000 1px solid; BORDER-LEFT: #000000 1px solid; BORDER-BOTTOM: #000000 1px solid" maxLength=30 size=24  name="userName"></td>
                  </tr>
                  <tr height=36>
                    <td>&nbsp; </td>
                    <td>口　令</td>
                    <td><input style="BORDER-RIGHT: #000000 1px solid; BORDER-TOP: #000000 1px solid; BORDER-LEFT: #000000 1px solid; BORDER-BOTTOM: #000000 1px solid" type=password maxLength=30 size=24 name="password"></td>
                  </tr>
                  <tr height=5>
                    <td colSpan=3></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><input type=image height=18 width=70 src="/360buy/public/images/bt_login.gif"></td>
                  </tr>
                  </form>
                </table>
              </td>
              <td width=16><img height=122 src="/360buy/public/images/login_4.jpg" width=16></td>
            </tr>
          </table>
          <table cellSpacing=0 cellPadding=0 width=468 border=0>
            <tr>
              <td><img height=16 src="/360buy/public/images/login_5.jpg" width=468></td>
            </tr>
          </table>
          <table cellSpacing=0 cellPadding=0 width=468 border=0>
            <tr>
              <td align=right><A href="#" target=_blank><img height=26 src="/360buy/public/images/login_6.gif" width=165 border=0></a></td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </body>
</html>