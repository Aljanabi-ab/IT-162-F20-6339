<?php
$nav1['index.php'] = "Welcome";
$nav1['big/index.php'] = "Big";
$nav1['aia.php'] = "AIA";
$nav1['flowchart.php'] = "Flowchart";
$nav1['fp/index.php'] = "Final Project";
$nav1['contactme.php'] = "Contact Abdulla";

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){
    case 'index.php':
        $title = "ABDULLAH A ALJANABI SCC WEB120 Portal";
        $logo = 'fa-home';
        $logo_color = ' style="color:blue"';
        $PageID = 'Contact Abdullah';
    break;
    case 'contactme.php':
        $title = "Abdullah Contact Page";
        $logo = 'fa-pencil-square-o';
        $logo_color = ' style="color:red"';
        $PageID = 'Contact Abdullah';
        
    break;
    case 'flowchart.php':
        $title = "Flowchart";
        $PageID = 'Flowchart';
    break;

   default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Welcome';

}
/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}

?>

