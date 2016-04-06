<?php
include"koneksi.php";
session_start();
session_destroy();
?>
<script language="javascript">alert('anda Berhasil Logout');
document.location='index.php'</script>