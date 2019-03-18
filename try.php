<script>
function oncli(){
    <?php
	session_start();
	$_SESSION['name'] = name;
	?>
}
</script>
<?php
    echo "<a href='try1.php'><input type='button' id='1' name='button' value='µã»÷' onclick=\"oncli()\"></input></a>";
	?>