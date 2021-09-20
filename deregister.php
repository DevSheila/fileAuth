<?php
include "config.php";
$id=$_GET["id"];
mysqli_query($conn,"DELETE FROM students WHERE id=$id");
?>
<script type="text/javascript">
window.location="admincontrol.php";
</script>



