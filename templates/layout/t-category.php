<main>

    <h1>Celebrities in category: <?php echo htmlspecialchars($categoryById['name']) ?></h1>
    <?php foreach ($celebritiesInCategory as $oneCelebrity) {
        ?>

        <article class="celeb">
            <div>
                <div class="celeb-image">
                    <a href="/celebrity.php?id= <?php echo $oneCelebrity['id']; ?>">
                        <img src="<?php echo $oneCelebrity['image']; ?>" alt="<?php echo $oneCelebrity['name']; ?>">
                    </a>
                </div>

                <div class="celeb-resume">
                    <p>
                        <strong><?php echo htmlspecialchars($oneCelebrity['full_name']); ?>
                        </strong> (born <?php echo htmlspecialchars($oneCelebrity['date_of_birth']) ?> <?php
    if (!empty($oneCelebrity['date_of_death'])) {
        echo ' - died ' . ($oneCelebrity['date_of_death']); 
        
        
    } ?> ) <?php echo htmlspecialchars($oneCelebrity['biography']); ?>
                    </p>
                </div>
            </div>
            <div>
                <blockquote>"<?php echo htmlspecialchars($oneCelebrity['quote'])?>"</blockquote>
            </div>
            <div class="celeb-link">
                <a href="/celebrity.php?id= <?php echo $oneCelebrity['id']; ?>">More on <?php echo htmlspecialchars($oneCelebrity['name'])?> </a>
            </div>
        </article>

    <?php } ?>



</main>