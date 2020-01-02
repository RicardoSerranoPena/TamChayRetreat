<?php
session_start();

requiere("includes/TCSiteManager.class.php");

$website = new TCSiteManager();

$website->LoadSettings();
$website->LoadTemplate();

if(isset($_REQUEST["page"]))
{
	$website->check_word($_REQUEST["page"]);
	$website->SetPage($_REQUEST["page"]);
}

$website->Render();
?>
