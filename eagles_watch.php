<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
"http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
    <head>
        <title>Eagle's Watch</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="style/style.css" type="text/css" media="screen">
    </head>
    <body>
        <div id="container">
            <div id="header">
                <h1><a href="index.php">New Ponds</a></h1>
                <?php include('includes/menu.php') ?>
                <div id="sideblog">
                    <h5>Eagle's Watch</h5>
                    <p>Our little slice of heaven near the entrance to Voyageurs National Park.</p>
                </div>
                <div id="picture"><img src="images/eagles_watch<?php echo str_pad(rand(0,16), 2, '0', STR_PAD_LEFT); ?>.jpg" alt="New Ponds"></div>
            </div>
            <div id="content">
                <div class="post">
                    <h2>Eagle's Watch Reservation Calendar.</h2>
                    <div id="calendar">
                        <iframe src="//www.google.com/calendar/hosted/andrewtongen.net/embed?showTitle=0&amp;showCalendars=0&amp;showTz=0&amp;height=664&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=andrewtongen.net_ifdsljreucj8dn7ivfe71tnblc%40group.calendar.google.com&amp;color=%23A32929&amp;ctz=America%2FChicago" style=" border-width:0 " width="885" height="664" frameborder="0" scrolling="no"></iframe>
                    </div>
                </div>
            </div>
            <?php include 'includes/footer.php' ?>
        </div>
        <p>&nbsp;</p>
    </body>
</html>