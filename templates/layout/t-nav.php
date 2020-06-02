<?php 
require_once __DIR__ . '/../../library/model-categories.php';
$allCategories = categoriesFetchAll();

?>

<nav>         <!-- ///////A-Z order///////-->
            <ul>
                <li>
                    <a href="/index.php">All celebrities</a>
                </li>
                <?php foreach ($allCategories as $category) {
                    
                ?>
                <li>
                    <a href="category.php?id=<?php echo $category['id'];?>"><?php echo htmlspecialchars($category['name']);?></a>
                </li>
                <?php } ?>
                <li class="celeb-add-new">
                    <a href="/new-celeb.php">New Celebrity</a>
                </li>

            </ul>
        </nav>
