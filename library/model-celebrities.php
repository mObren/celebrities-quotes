<?php 


function celebritiesFetchAll() {
	return [
		[
			'id' => 286,
			'name' => 'Adele',
			'full_name' => 'Adele Laurie Blue Adkins',
			'category' => 1,
			'date_of_birth' => '1988-05-05',
			'date_of_death' => '',
			'image' => '/theme/assets/images/adele.jpg',
			'quote' => 'I don’t make music for eyes. I make music for ears.',
			'biography' => 'is an English singer-songwriter. After graduating from the BRIT School for Performing Arts and Technology in 2006, Adele was given a recording contract by XL Recordings after a friend posted her demo on Myspace the same year. In 2007, she received the Brit Awards "Critics\' Choice" award and won the BBC Sound of 2008 poll. Her debut album, 19, was released in 2008 to commercial and critical success. It is certified seven times platinum in the UK, and three times platinum in the US. An appearance she made on Saturday Night Live in late 2008 boosted her career in the US. At the 51st Grammy Awards in 2009, Adele received the awards for Best New Artist and Best Female Pop Vocal Performance.',
		],
		[
			'id' => 287,
			'name' => 'Jimi Hendrix',
			'full_name' => 'James Marshall "Jimi" Hendrix',
			'category' => 1,
			'date_of_birth' => '1942-11-27',
			'date_of_death' => '1970-09-18',
			'image' => '/theme/assets/images/jimi.jpg',
			'quote' => 'When the power of love overcomes the love of power the world will know peace.',
			'biography' => 'was an American rock guitarist, singer, and songwriter. Although his mainstream career spanned only four years, he is widely regarded as one of the most influential electric guitarists in the history of popular music, and one of the most celebrated musicians of the 20th century. The Rock and Roll Hall of Fame describes him as "arguably the greatest instrumentalist in the history of rock music".',
		],
		[
			'id' => 288,
			'name' => 'Bono',
			'full_name' => 'Salvatore Phillip "Sonny" Bono',
			'category' => 1,
			'date_of_birth' => '1935-02-16',
			'date_of_death' => '1998-01-05',
			'image' => '/theme/assets/images/bono.jpg',
			'quote' => 'My heroes are the ones who survived doing it wrong, who made mistakes, but recovered from them.',
			'biography' => 'was an American singer, producer, and politician who came to fame in partnership with his second wife Cher, as the popular singing duo Sonny & Cher. He was mayor of Palm Springs, California from 1988 to 1992, and congressman for California\'s 44th district from 1995 until his death in 1998. The United States Federal Copyright Term Extension Act, which extended the term of copyright by 20 years, is now commonly known as the Sonny Bono Act.',
		],
		[
			'id' => 289,
			'name' => 'Angelina Jolie',
			'full_name' => 'Angelina Jolie Pitt',
			'category' => 2,
			'date_of_birth' => '1975-06-04',
			'date_of_death' => '',
			'image' => '/theme/assets/images/jolie.jpg',
			'quote' => 'Life comes with many challenges. The ones that should not scare us are the ones we can take on 
					            and take control of.',
			'biography' => 'is an American actress, filmmaker, and humanitarian. She has received an Academy Award, two Screen Actors Guild Awards, and three Golden Globe Awards, and has been cited as Hollywood\'s highest-paid actress. Jolie made her screen debut as a child alongside her father, Jon Voight, in Lookin\' to Get Out (1982). Her film career began in earnest a decade later with the low-budget production Cyborg 2 (1993), followed by her first leading role in a major film, Hackers (1995). She starred in the critically acclaimed biographical cable films George Wallace (1997) and Gia (1998), and won an Academy Award for Best Supporting Actress for her performance in the drama Girl, Interrupted (1999).',
		],
		[
			'id' => 290,
			'name' => 'Drew Barrymore',
			'full_name' => 'Drew Blythe Barrymore',
			'category' => 2,
			'date_of_birth' => '1975-02-22',
			'date_of_death' => '',
			'image' => '/theme/assets/images/drew.jpg',
			'quote' => 'In the end, some of your greatest pains become your greatest strengths.',
			'biography' => 'is an American actress, author, director, model and producer. She is a member of the Barrymore family of American stage and film actors, and is the granddaughter of actor John Barrymore. Barrymore began acting on television, and soon transitioned to film with roles in E.T. the Extra-Terrestrial (1982) and Irreconcilable Differences (1984).Following a turbulent childhood that was marked by drug and alcohol abuse with two stints in rehab, she wrote her autobiography, Little Girl Lost (1991). She appeared in a string of hit films, including Poison Ivy (1992), Boys on the Side (1995), Scream (1996) and Ever After (1998). She has also co-starred with Adam Sandler in The Wedding Singer (1998), 50 First Dates (2004) and Blended (2014).',
		],
		[
			'id' => 291,
			'name' => 'Robert De Niro',
			'full_name' => 'Robert Anthony De Niro',
			'category' => 2,
			'date_of_birth' => '1943-08-17',
			'date_of_death' => '',
			'image' => '/theme/assets/images/deniro.jpg',
			'quote' => 'Never rat on your friends and always keep your mouth shut.',
			'biography' => 'is an American actor, producer and director who has both Italian and American citizenship. He was cast as the young Vito Corleone in the 1974 film The Godfather Part II, for which he won the Academy Award for Best Supporting Actor. His longtime collaboration with director Martin Scorsese earned him the Academy Award for Best Actor for his portrayal of Jake La Motta in the 1980 film Raging Bull. He received the AFI Life Achievement Award in 2003, the Golden Globe Cecil B. DeMille Award in 2010, and the Presidential Medal of Freedom from President Barack Obama in 2016.',
		],
		[
			'id' => 292,
			'name' => 'Steve Jobs',
			'full_name' => 'Steven Paul "Steve" Jobs',
			'category' => 3,
			'date_of_birth' => '1955-02-24',
			'date_of_death' => '2011-10-05',
			'image' => '/theme/assets/images/jobs.jpg',
			'quote' => 'Innovation distinguishes between a leader and a follower.',
			'biography' => 'Jobs and Apple co-founder Steve Wozniak are widely recognized as pioneers of the microcomputer revolution of the 1970s and 1980s',
		],
	];
}

/**
 * 
 * @param int $id The id of celebrity
 * @return array|NULL The celebrity associative array or NULL if celebrity does not exist
 */
function celebritiesFetchOneById($id) {

    $allCelebrities = celebritiesFetchAll();
    $celebrityById = null;
    
    foreach ($allCelebrities as $celebrity) {
        if ($celebrity['id'] == $id) {
            $celebrityById = $celebrity;
        }
    }
    return $celebrityById;
}


/**
 * @return array The random celebrity associative array
 */
function celebritiesFetchOneRandom() {
    $allCelebrities = celebritiesFetchAll();
    $randomCelebrity = $allCelebrities[array_rand($allCelebrities)];
    return $randomCelebrity;
    
	
}

/**
 * @param int $categoryId The category id
 * @return array An array of celebrities that have key "category" equal $categoryId
 */
function celebritiesFetchByCategory($categoryId) {
	
	$allCelebrities = celebritiesFetchAll();
	
	$celebritiesInCategory = [];
        $allCategories = categoriesFetchAll();
	
	foreach ($allCelebrities as $celebrity) {
		// Treba da zavrsite ovu foreach petlju!!!
             if ($celebrity['category'] == $categoryId) {
                 $celebritiesInCategory[] = $celebrity;
             }
                    
                
		
		// treba da ispitate da li $celebrity ima odgovarajuci "category"
		
		//ako ima, taj $celebrity ubacujete u niz $celebritiesInCategory
		
	}
	
	return $celebritiesInCategory;
}
