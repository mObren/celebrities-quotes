
<?php

require_once __DIR__ . '/library/model-celebrities.php';

if (empty($_GET['id'])) {
    die('Morate proslediti ID licnosti');
}

$id = $_GET['id'];
$oneCelebrity = celebritiesFetchOneById($id);

if (!is_array($oneCelebrity)) {
    die('Licnost nije pronadjena');
}

require __DIR__ . '/templates/layout/t-header.php';
require __DIR__ . '/templates/layout/t-nav.php';
require __DIR__ . '/templates/layout/t-celebrity.php';
require __DIR__ . '/templates/layout/t-footer.php';