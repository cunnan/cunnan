<?php
//实现的提示跳转
function jump($message,$toUrl){
$content=<<<EOF
<script type="text/javascript">
alert("{$message}");
location.href="{$toUrl}";
</script>
EOF;
echo $content;
}