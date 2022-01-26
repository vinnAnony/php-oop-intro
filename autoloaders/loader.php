<?php
spl_autoload_register();

$home = new models\home();
echo $home->get() . "\n";

$home = new views\home();
echo $home->get(). "\n";

$about = new models\about();
echo $about->get() . "\n";

$about = new views\about();
echo $about->get(). "\n";