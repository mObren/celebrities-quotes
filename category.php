<?php


require_once __DIR__ . '/library/model-categories.php';
require_once __DIR__ . '/library/model-celebrities.php';

if (empty($_GET['id'])) {
    die('Morate proslediti ID kategorije');
}

$catId = $_GET['id'];
$categoryById = categoriesFetchOneById($catId);

$celebritiesInCategory = celebritiesFetchByCategory($catId);

if (!is_array($categoryById)) {
    die('Licnost nije pronadjena');
}

require __DIR__ . '/templates/layout/t-header.php';
require __DIR__ . '/templates/layout/t-nav.php';
require __DIR__ . '/templates/layout/t-category.php';
require __DIR__ . '/templates/layout/t-footer.php';

print_r($celebritiesInCategory); 