<?php 

function categoriesFetchAll() {

	return [
		[
			'id' => 1,
			'name' => 'Singers',
		],
		[
			'id' => 2,
			'name' => 'Actors',
		],
		[
			'id' => 3,
			'name' => 'Businessmen',
		],
	];
}

/**
 * 
 * @param int $id The id of category
 * @return array|NULL The category array or null if category does not exist
 */
function categoriesFetchOneById($id) {
    $allCategories = categoriesFetchAll();
    $categoryById = null;
    
    foreach ($allCategories as $category) {
        if ($category['id'] == $id) {
            $categoryById = $category;
        }
    }
    return $categoryById;
	
}
