<?php
require_once __DIR__ . '/library/model-celebrities.php';
$allCelebrities = celebritiesFetchAll();


require __DIR__ . '/templates/layout/t-header.php';
require __DIR__ . '/templates/layout/t-nav.php';
require __DIR__ . '/templates/layout/t-index.php';
require __DIR__ . '/templates/layout/t-footer.php';
