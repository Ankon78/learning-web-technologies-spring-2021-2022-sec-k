<table border="1" width="100%">
	<td height="100px">
		<tr>
			<?php
for ($i = 1; $i < 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo " * ";
    }
    echo '<br />';
}
?>
		</tr>

		<tr>
			<?php
for ($i = 1; $i < 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo " 1 ";
    }
    echo '<br />';
}
?>
		</tr>

		<tr>
			<?php
for ($i = 1; $i < 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo " A ";
    }
    echo '<br />';
}
?>
		</tr>
	</td>
</table>