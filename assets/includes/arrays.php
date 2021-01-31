<?php

//Nav Menu items - for nav.php

$navItems = array(

    array(
        "slug" => "index.php",
        "title" => "Home"
    ),
    array(
        "slug" => "team.php",
        "title" => "Team"
    ),
    array(
        "slug" => "menu.php",
        "title" => "Menu"
    ),
    array(
        "slug" => "contact.php",
        "title" => "Contact"
    ),
);

//Team members - for team.php
$teamMembers = array (
    array(
        "name" => "Frankie III",
        "position" => "Owner",
        "bio" => "Frankie is the great-grandson of the original Franklin. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
        incididunt ut labore et dolore magna aliqua.",
        "img" => "frankie" 
    ),
    array(
        "name" => "Francis",
        "position" => "General Manager",
        "bio" => "The little sister of Frankie himself, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
        incididunt ut labore et dolore magna aliqua.",
        "img" => "francis" 
    ),
    array(
        "name" => "Carlos",
        "position" => "Head Chef",
        "bio" => "Carlos is the epitome of the phrase &ldquo; Don't jude a book by it's cover&rdquo; &mdash; You simply cannot find a better chef",
        "img" => "carlos" 
    ),
);

//Menu Items - for menu.php and dish.php
$menuItems = array(
    "club-sandwhich" => array(
        "title" => "Club Sandwhich",
        "price" => 11,
        "description" =>  "Bacon ipsum dolor amet tri-tip qui pork belly consequat cupidatat. Swine est landjaeger chislic non labore mollit ham hock, andouille velit alcatra tail meatloaf beef ribs. Eiusmod filet mignon ut ut, alcatra dolore sirloin. Alcatra beef ribs pork belly spare ribs, doner drumstick fugiat non turducken quis.",
        "drink" => "Club Soda"
    ),
    "dill-salmon" => array(
        "title" => "Lemon &amp; Dill Salmon",
        "price" => 34,
        "description" =>  "Crestfish butterfly ray sea dragon ghost pipefish horn shark, Siamese fighting fish Owens pupfish pollock, torrent catfish whale catfish. Splitfin driftfish Redfin perch Bigscale pomfret zander ruffe, horn shark pikeblenny Atlantic trout mora whiff lampfish. ",
        "drink" => "Fresh Press limeade"
    ),
    "super-salad" => array(
        "title" => "The Super salad",
        "price" => 18,
        "description" =>  "Crestfish butterfly ray sea dragon ghost pipefish horn shark, Siamese fighting fish Owens pupfish pollock, torrent catfish whale catfish. Splitfin driftfish Redfin perch Bigscale pomfret zander ruffe, horn shark pikeblenny Atlantic trout mora whiff lampfish. ",
        "drink" => "Cucumber  &amp; mint infused water"
    ),
    "mexican-barbacoa" => array(
        "title" => "Mexican Barbacoa",
        "price" => 23,
        "description" =>  "Velit dolore sirloin turducken beef in do venison. Tail short ribs tongue sausage salami nulla. Eu tri-tip cow quis, pork chop tenderloin in brisket laboris swine commodo. Sint filet mignon ribeye adipisicing in irure ea consequat consectetur bresaola short loin.",
        "drink" => "Cadillac Margarita"
    ),
);

?>