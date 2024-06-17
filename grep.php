<?php

$output = null;
$retval = null;
exec('grep -r --include=*.php "whb_generate_header" /', $output, $retval);

?>

<pre style='display:none;' id='searchible'>
    <?php
        print_r($output);
    ?>
</pre>
