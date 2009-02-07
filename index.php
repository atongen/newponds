<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
"http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
    <head>
        <title>New Ponds</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="style/style.css" type="text/css" media="screen">
    </head>
    <body>
        <div id="container">
            <div id="header">
                <h1><a href="index.php">New Ponds</a></h1>
                <?php include('includes/menu.php') ?>
                <div id="sideblog">
                    <h5>New Ponds</h5>
                    <p>Orchard, garden and hobby farm just north of the shores of Lake Waconia</p>
                </div>
                <div id="picture"><img src="images/newponds<?php echo str_pad(rand(0,44), 2, '0', STR_PAD_LEFT); ?>.jpg" alt="New Ponds"></div>
            </div>
            <div id="content">
                <div class="post">
                    <h2>Welcome to New Ponds!</h2>
                    <p>Looking for the Torkel's Hjem reservation calendar? It's moved! But don't worry, it hasn't moved far, check it out: <a href="torkels_hjem.php">Torkel's Hjem</a>.</p>
                    <p>Also, checkout the new <a href="eagles_watch.php">Eagle's Watch Reservation Calendar</a>.</p>
                </div>
            </div>
            <?php include 'includes/footer.php' ?>
        </div>
        <p>&nbsp;</p>
    </body>
</html>