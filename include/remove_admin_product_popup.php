<?php
namespace ZainPrePend\AdminProductPopup;
use ZainPrePend\lib;

if (!isset($_SERVER['REQUEST_URI'])) {
    return;
}

$requestPath = $_SERVER['REQUEST_URI'];
if (empty($vAdminPath)){
    $vAdminPath= 'admin';
}
if (strpos($requestPath, "/index.php/$vAdminPath/catalog_product/edit") !== 0) {
    return;
}

if (!strpos($requestPath, '/popup/1')) {
    return;
}
$_SERVER['REQUEST_URI'] = str_replace('/popup/1', '', $requestPath);