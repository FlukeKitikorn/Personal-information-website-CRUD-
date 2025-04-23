<?php

$path = $_SERVER['PHP_SELF']; // เช่น /admin/users/edit.php
$path_parts = explode('/', trim($path, '/')); // ตัด / ออกแล้วแยก ['admin', 'users', 'edit.php']

$custom_names = [
    'index.php' => 'Dashboard',
    'table.php' => 'Tables',
];

$breadcrumbs = [];
$url = '/';

foreach ($path_parts as $index => $part) {
    // $url .= $part;

    $name = $custom_names[$part] ?? ucfirst(str_replace(['.php', '_'], ['', ' '], $part));

    $breadcrumbs[] = "<li class=\"breadcrumb-item active\">$name</li>";

    $url .= '/';
}

echo '<ol class="breadcrumb float-sm-right">';
echo '<li class="breadcrumb-item active">Home</li>'; // <-- ไม่ให้คลิก Home 
echo implode('', $breadcrumbs);
echo '</ol>';

?>


