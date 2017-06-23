<?php

//configuration settings
require 'includes/config.php';

//initialisation
require 'includes/bootstrap.php';


// menu
require 'model/getpages.php';
$templateParser->assign("pages",$result_list);
$templateParser->display("menu.tpl");

$action = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($action) {
    case 'home':
        // head
        $templateParser->assign("myTitle","Martin Garrix | Home");
        $templateParser->display("head.tpl");
        $templateParser->display("loader.tpl");
        require 'model/getvideo.php';
        $templateParser->assign("video",$result_list);
        $templateParser->display("home.tpl");
        break;
    case 'lifestyle':
        // head
        $templateParser->assign("myTitle","Martin Garrix | Lifestyle");
        $templateParser->display("head.tpl");
        $templateParser->display("loader.tpl");
        $templateParser->display("lifestyle.tpl");
        break;
    case 'releases':
        // head
        $templateParser->assign("myTitle","Martin Garrix | Releases");
        $templateParser->display("head.tpl");
        $templateParser->display("loader.tpl");
        require 'model/getreleases.php';
        $templateParser->assign("releases",$result_list);
        $templateParser->display("releases.tpl");
        break;
    case 'contact':
        // head
        $templateParser->assign("myTitle","Martin Garrix | Contact");
        $templateParser->display("head.tpl");
        $templateParser->display("loader.tpl");
        require 'model/getsocial.php';
        $templateParser->assign("social",$result_list);
        $templateParser->display("contact.tpl");
        break;
}

// footer
require 'model/getfooter.php';
$templateParser->assign("footer",$result_list);
$templateParser->display("footer.tpl");


?>
