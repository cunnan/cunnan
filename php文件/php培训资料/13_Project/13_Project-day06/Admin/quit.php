<?php
require '../config.ini.php';
unset($_SESSION['user']);//删除内存中的数据
session_destroy();

?>
<script type="text/javascript">
top.location.href="<?php echo BASE_URL?>Admin/login.html";
</script>
