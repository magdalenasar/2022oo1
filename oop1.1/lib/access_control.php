<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

if ( isset($public_access) ) CheckAccess($public_access);
else CheckAccess();

function CheckAccess($public_access = false)
{
    if ( ! $public_access AND ! isset($_SESSION['user']) )
    {
        GoToNoAccess();
    }
}

function GoToNoAccess($app_root = "")
{
    header("Location: " . $app_root . "/no_access.php");
    exit;
}