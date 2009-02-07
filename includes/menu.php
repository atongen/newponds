<?php function this_script($script) {
    return end(explode('/', $_SERVER['SCRIPT_NAME'])) == $script;
} ?>
<ul id="nav">
    <li class="link<?php if(this_script('index.php')) echo ' current_link'; ?>"><a href="index.php">Home</a></li>
    <li class="link<?php if(this_script('torkels_hjem.php')) echo ' current_link'; ?>"><a href="torkels_hjem.php">Torkel's Hjem</a></li>
    <li class="link<?php if(this_script('eagles_watch.php')) echo ' current_link'; ?>"><a href="eagles_watch.php">Eagle's Watch</a></li>
</ul>