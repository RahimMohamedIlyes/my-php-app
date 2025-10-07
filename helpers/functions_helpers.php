<?php

function br() {
    return php_sapi_name() === 'cli' ? PHP_EOL : '<br>';
}
