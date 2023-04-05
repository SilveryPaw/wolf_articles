<?php
    function redirect_by_path($path)
    {
        $redirect = "/" . substr(strtr(realpath($path), '\\', '/'), strlen($_SERVER['DOCUMENT_ROOT']));
        header("Location: $redirect");
    }
?>