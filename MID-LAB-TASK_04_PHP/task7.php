<!DOCTYPE html>
<html>
<body>


<table border="1" width="50%">
    <tr height="100px">
        <td>
            
<?php for ($i = 1; $i < 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo " * ";
    }
    echo '<br />';
}
?>

        </td>

        <td>
            
<?php for ($i = 1; $i < 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo " 1 ";
    }
    echo '<br />';
}
?>

        </td>

        <td>
            
<?php for ($i = 1; $i < 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo " A ";
    }
    echo '<br />';
} ?>

        </td>
    </tr>
</table>


</body>
</html>