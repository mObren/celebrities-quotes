<?php 
require_once __DIR__ .  '/../../library/model-celebrities.php';

$randomCelebrity = celebritiesFetchOneRandom();


?>

<aside>
    <h2>Quote of the day</h2>
    <blockquote>
       <?php echo htmlspecialchars($randomCelebrity['quote'])?>
    </blockquote>
    <p><small><?php echo htmlspecialchars($randomCelebrity['full_name'])?></small></p>
</aside>

<footer>
    &copy; Celebrities quotes 2017
</footer>

</body>


</html>