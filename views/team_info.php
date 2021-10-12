<?php
ob_start()
?>
<table>
    <tr>
        <td>
            <span>hello</span>
        </td>
    </tr>
</table>
<?php
$content = ob_get_clean();
require('views/homepage.php');