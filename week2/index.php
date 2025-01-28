<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Example</title>
</head>
<body>
    <?php 
        echo '<h1>Welcome to My Portfolio</h1>';
        echo '<p>Discover a collection of my work, experiences, and projects.</p>';
    ?>

    <p>Explore dynamic content generated using PHP, which makes websites interactive and engaging.</p>

    <ul>
        <li><strong>Projects:</strong> Showcasing my web development and design work.</li>
        <li><strong>Resume:</strong> Highlighting my skills and professional journey.</li>
        <li><strong>Contact:</strong> Get in touch to collaborate or learn more.</li>
    </ul>


    <?php
        $link['name'] = 'Sarrah Gandhi';
        $link['url'] = 'https://www.sarrahgandhi.com/';
        $link['image'] = 'images/photo_frame.png';
        $link['description'] = 'A passionate web developer and designer.';

        

        echo '<h2>About Me</h2>';
        echo '<p>Hi, I\'m '.$link['name'].', '.$link['description'].'</p>';
        echo '<p>Visit my portfolio: <a href="'.$link['url'].'" target="_blank">'.$link['url'].'</a></p>';
        echo '<img src="'.$link['image'].'" alt="Sarrah Gandhi" style="max-width:200px;">';
    ?>
</body>
</html>
