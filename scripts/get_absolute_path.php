<?php
function get_absolute_path()
{
    return "/" . substr(strtr(realpath(__DIR__ . "/.."), '\\', '/'), strlen($_SERVER['DOCUMENT_ROOT']));
}
?>