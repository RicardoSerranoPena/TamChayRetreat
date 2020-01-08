<?php
session_start();

require("include/TCSiteManager.class.php");

$website = new TCSiteManager();

$website->LoadSettings();
$website->LoadTemplate();

if(isset($_REQUEST["lang"]))
{
  $website->check_word($_REQUEST["lang"]);
  $website->SetLanguage($_REQUEST["lang"]);
  $website->LoadSettings();
}


if(isset($_REQUEST["page"]))
{
	$website->check_word($_REQUEST["page"]);
	$website->SetPage($_REQUEST["page"]);
}
$website->Render();
?>
