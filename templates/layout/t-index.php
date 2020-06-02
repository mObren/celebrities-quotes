<main>
    <h1>List of all celebrities</h1>
    <?php foreach ($allCelebrities as $oneCelebrity) { ?>
    
    <article class="celeb">
        <div>
            <div class="celeb-image">
                <a href="/celebrity.php?id= <?php echo $oneCelebrity['id']; ?>">
                   <?php if (!empty($oneCelebrity['image'])) {?>
                    <img src="<?php echo htmlspecialchars($oneCelebrity['image'])?>" 
                         alt="<?php echo htmlspecialchars($oneCelebrity['name'])?>">
                </a>
                   <?php } else {?>
                <a href="#">
                    <img src="https://via.placeholder.com/450x300?text=No+Image" 
                         alt="<?php echo htmlspecialchars($oneCelebrity['name'])?>">
                </a>
                   <?php } ?>
            </div>

            <div class="celeb-resume">
                <p>
                    <strong>  <?php echo htmlspecialchars($oneCelebrity['full_name'])?> </strong>
    (born <?php echo htmlspecialchars($oneCelebrity['date_of_birth']) ?> <?php if (!empty($oneCelebrity['date_of_death'])) {
    echo ' - died ' . ($oneCelebrity['date_of_death']); } ?> )
    
                    <?php echo  htmlspecialchars($oneCelebrity['biography'])?>
                </p>
            </div>
        </div>
        <div>
            <blockquote>"<?php echo htmlspecialchars($oneCelebrity['quote'])?>"</blockquote>
        </div>
        <div class="celeb-link">
            <a href="/celebrity.php?id= <?php echo $oneCelebrity['id']; ?>">
                More on <?php echo htmlspecialchars($oneCelebrity['name'])?></a>
        </div>
    </article>

    <?php } ?>

</main>

