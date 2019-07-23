<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Vuebook\User;
use Vuebook\Story;
use Vuebook\Pelicula;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => 'Ing. Jorge Peralta',
        'email' => 'jope@gmail.com',
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$starwars = [
    [
        "plot" => "When 900 years old, you reach… Look as good, you will not.",
        "writer" => "Yoda"
    ],
    [
        "plot" => "The Dark Side of the Force is the pathway to many abilities some consider to be… Unnatural.",
        "writer" => "Senator Palpatine"
    ],
    [
        "plot" => "You don’t know how hard I found it, signing the order to terminate your life",
        "writer" => "Governor ‘Grand Moff’ Tarkin"
    ],
    [
        "plot" => "He’s holding a thermal detonator!",
        "writer" => " C-3PO"
    ],
    [
        "plot" => "I sense great fear in you, Skywalker. You have hate… you have anger… but you don’t use them.",
        "writer" => "Count Dooku"
    ],
    [
        "plot" => "Great, kid. Don’t get cocky",
        "writer" => "Han Solo"
    ],
    [
        "plot" => "Luke, you can destroy the Emperor. He has foreseen this. It is your destiny. Join me, and together we can rule the galaxy as father and son.",
        "writer" => "Darth Vader"
    ],
    [
        "plot" => "You can’t win, Darth. Strike me down, and I will become more powerful than you could possibly imagine.",
        "writer" => "Obi Wan Kenobi"
    ],
    [
        "plot" => "It's a trap!",
        "writer" => "Admiral Ackbar"
    ],
    [
        "plot" => "Aren't you a little short for a storm trooper?",
        "writer" => "Princess Leia"
    ],
    [
        "plot" => "Why you stuck-up, half-witted, scruffy-looking nerf-herder!",
        "writer" => "Princess Leia"
    ],
    [
        "plot" => "Mmm. Lost a planet, Master Obi-Wan has. How embarrassing.",
        "writer" => "Yoda"
    ],
    [
        "plot" => "Lando’s not a system he’s a man!",
        "writer" => "Han Solo"
    ],
    [
        "plot" => "These aren’t the droids you’re looking for...",
        "writer" => "Obi Wan Kenobi"
    ],
    [
        "plot" => "Traveling through hyperspace ain't like dusting crops, farm boy.",
        "writer" => "Han Solo"
    ],
    [
        "plot" => "If there's a bright centre to the universe, you're on the planet that it's farthest from.",
        "writer" => "Luke Skywalker"
    ],
    [
        "plot" => "Fear is the path to the dark side.",
        "writer" => " Yoda"
    ],
    [
        "plot" => "Don't call me a mindless philosopher, you overweight glob of grease.",
        "writer" => " C-3PO"
    ],
    [
        "plot" => "Anakin, you’re breaking my heart! And you’re going down a path I cannot follow!",
        "writer" => "Padme"
    ],
    [
        "plot" => "Master Kenobi, you disappoint me. Yoda holds you in such high esteem. Surely you can do better!",
        "writer" => "Count Dooku"
    ],
    [
        "plot" => "You were the chosen one! It was said that you would destroy the Sith, not join them.",
        "writer" => "Obi Wan Kenobi"
    ],
    [
        "plot" => "At last we will reveal ourselves to the Jedi. At last we will have revenge.",
        "writer" => "Darth Maul"
    ],
    [
        "plot" => "I’ve been waiting for you, Obi-Wan. We meet again, at last. The circle is now complete. When I left you, I was but the learner; now I am the master.",
        "writer" => " Darth Vader"
    ],
    [
        "plot" => "Now, young Skywalker… you will die.",
        "writer" => "The Emperor"
    ],
    [
        "plot" => "I find your lack of faith disturbing.",
        "writer" => " Darth Vader"
    ],
    [
        "plot" => "The Force is strong with you. A powerful Sith you will become. Henceforth, you shall be known as Darth… Vader.",
        "writer" => " Darth Sidious"
    ],
    [
        "plot" => "There's always a bigger fish.",
        "writer" => "Qui-Gon Jinn"
    ],
    [
        "plot" => "Hello. I don't believe we have been introduced. R2-D2? A pleasure to meet you. I am C-3PO, Human-Cyborg Relations.",
        "writer" => " C-3PO"
    ],
    [
        "plot" => "Ahh, hard to see, the Dark Side is.",
        "writer" => "Yoda"
    ],
    [
        "plot" => "Good Anakin. Good. Kill him. Kill him now.",
        "writer" => "Chancellor Palpatine"
    ],
    [
        "plot" => "General Grievous, you're shorter than I expected.",
        "writer" => " Anakin Skywalker"
    ],
    [
        "plot" => "Don't get technical with me. What mission? What are you talking about? I've just about had enough of you. Go that way, you'll be malfunctioning in a day you near-sighted scrap pile.",
        "writer" => " C-3PO"
    ],
    [
        "plot" => "Help me Obi-Wan Kenobi, you're my only hope.",
        "writer" => "Princess Leia"
    ],
    [
        "plot" => "Obi-Wan Kenobi. Obi-Wan. Now that's a name I have not heard in a long time. A long time.",
        "writer" => "Obi Wan Kenobi"
    ],
    [
        "plot" => "You came in that thing? You're braver than I thought.",
        "writer" => "Princess Leia"
    ],
    [
        "plot" => "Laugh it up, Fuzz ball.",
        "writer" => "Han Solo"
    ],
    [
        "plot" => "Sir, the possibility of successfully navigating an asteroid field is approximately 3,720 to 1.",
        "writer" => "C-3PO"
    ],
    [
        "plot" => "No. I am your Father.",
        "writer" => "Darth Vader"
    ],
    [
        "plot" => "I'm rather embarrassed, General Solo, but it appears that you are to be the main course at a banquet in my honour.",
        "writer" => "C-3PO"
    ],
    [
        "plot" => "Obi-Wan has taught you well.",
        "writer" => " Darth Vader"
    ],
    [
        "plot" => "Oh my. Space travel sound rather perilous. I can assure you they will never get me on one of those dreadful Star Ships.",
        "writer" => " C-3PO"
    ],
    [
        "plot" => "One thing's for sure, we're all going to be a lot thinner.",
        "writer" => "Han Solo"
    ],
    [
        "plot" => "The force is strong with this one.",
        "writer" => "Darth Vader"
    ],
    [
        "plot" => "Great shot kid, that was one in a million.",
        "writer" => "Han Solo"
    ],
    [
        "plot" => "I suggest a new strategy, R2: let the Wookiee win.",
        "writer" => "C-3PO"
    ],
    [
        "plot" => "Remember...the Force will be with you, always.",
        "writer" => "Obi Wan Kenobi"
    ],
    [
        "plot" => "There is good in him. I've felt it.",
        "writer" => "Luke Skywalker"
    ],
    [
        "plot" => "You may dispense with the pleasantries, Commander. I am here to put you back on schedule.",
        "writer" => "Darth Vader"
    ],
    [
        "plot" => "Luke, I don't want to lose you to the Emperor the way I lost Vader.",
        "writer" => "Obi Wan Kenobi"
    ],
    [
        "plot" => "Death is a natural part of life. Rejoice for those around you who transform into the Force.",
        "writer" => "Yoda"
    ]
];

$factory->define(Story::class, function (Faker $faker) use ($starwars){
    $swStory = $faker->randomElement($starwars);
    return [
        'plot' => $swStory['plot'],
        'writer' => $swStory['writer'],
        'upvotes' => $faker->numberBetween(0, 900)
    ];
});


$greatPeliculas = [
    ["director" => "Christopher Nolan", "titulo" => "The Dark Knight"],
    ["director" => "Sergio Leone", "titulo" => "The Good, the Bad and the Ugly"],
    ["director" => "Steven Spielberg", "titulo" => "Saving Private Ryan"],
    ["director" => "Quentin Tarantino", "titulo" => "Pulp Fiction"],
    ["director" => "Alfred Hitchcock", "titulo" => "Psycho"],
    ["director" => "Hayao Miyazaki", "titulo" => "Spirited Away"],
    ["director" => "Peter Jackson", "titulo" => "The Lord of the Rings: The Fellowship of the Ring"],
    ["director" => "James Cameron", "titulo" => "Aliens"],
    ["director" => "Alfonso Cuarón", "titulo" => "Gravity"],
    ["director" => "Frank Darabont", "titulo" => "The Shawshank Redemption"],
    ["director" => "William Wyler", "titulo" => "Ben-Hur"],
    ["director" => "Howard Hawks", "titulo" => "The Big Sleep"],
    ["director" => "Martin Scorsese", "titulo" => "The Wolf of Wall Street"],
    ["director" => "Richard Linklater", "titulo" => "Before Sunset"],
    ["director" => "Ang Lee", "titulo" => "Life of Pi"],
    ["director" => "Sidney Lumet", "titulo" => "12 Angry Men"],
    ["director" => "George Lucas", "titulo" => "Star Wars: Episode VI - Return of the Jedi"],
    ["director" => "Paul Greengrass", "titulo" => "The Bourne Ultimatum"],
    ["director" => "Mel Gibson", "titulo" => "Braveheart"],
    ["director" => "Clint Eastwood", "titulo" => "Million Dollar Baby"],
    ["director" => "Robert Zemeckis", "titulo" => "Back to the Future Part II"],
    ["director" => "Brian De Palma", "titulo" => "Scarface"],
    ["director" => "Lasse Hallström", "titulo" => "What's Eating Gilbert Grape"],
    ["director" => "William Friedkin", "titulo" => "The Exorcist"],
    ["director" => "David Yates", "titulo" => "Harry Potter and the Deathly Hallows: Part 2"],
    ["director" => "Billy Wilder", "titulo" => "Some Like It Hot"],
    ["director" => "Stanley Kubrick", "titulo" => "A Clockwork Orange"],
    ["director" => "Guy Ritchie", "titulo" => "Snatch."],
    ["director" => "Milos Forman", "titulo" => "One Flew Over the Cuckoo's Nest"],
    ["director" => "Gore Verbinski", "titulo" => "Pirates of the Caribbean: The Curse of the Black Pearl"],
    ["director" => "Frank Capra", "titulo" => "It's a Wonderful Life"],
    ["director" => "Edgar Wright", "titulo" => "Shaun of the Dead"],
    ["director" => "David Fincher", "titulo" => "Fight Club"],
    ["director" => "Francis Lawrence", "titulo" => "The Hunger Games: Catching Fire"],
    ["director" => "Ron Howard", "titulo" => "American Graffiti"],
    ["director" => "Ron Clements", "titulo" => "Aladdin"],
    ["director" => "John Musker", "titulo" => "Aladdin"],
    ["director" => "Danny Boyle", "titulo" => "Slumdog Millionaire"],
    ["director" => "James Wan", "titulo" => "Saw"],
    ["director" => "Brad Bird", "titulo" => "Ratatouille"],
    ["director" => "Denis Villeneuve", "titulo" => "Incendies"],
    ["director" => "Alejandro Amenábar", "titulo" => "The Others"],
    ["director" => "Andrew Stanton", "titulo" => "Finding Nemo"],
    ["director" => "David Lean", "titulo" => "Lawrence of Arabia"],
    ["director" => "Wes Anderson", "titulo" => "The Grand Budapest Hotel"],
    ["director" => "Akira Kurosawa", "titulo" => "Yojimbo"],
    ["director" => "George Roy Hill", "titulo" => "Butch Cassidy and the Sundance Kid"],
    ["director" => "Woody Allen", "titulo" => "Annie Hall"],
    ["director" => "Joseph L. Mankiewicz", "titulo" => "All About Eve"],
    ["director" => "Roman Polanski", "titulo" => "The Pianist"]
];

$factory->define(Pelicula::class, function (Faker $faker) use ($greatPeliculas){
    $swPelicula = $faker->randomElement($greatPeliculas);
    return [
        'director' => $swPelicula['director'],
        'titulo' => $swPelicula['titulo'] 
    ];
});



