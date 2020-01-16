<?php
session_start();

require("include/TCSiteManager.class.php");

$website = new TCSiteManager();

$website->LoadDatabase();

if(!isset($_REQUEST["lang"]))
{
  if(isset($website->lang))
  {
    $website->LoadTemplate();
  } else if (!isset($website->lang))
  {
    $website->SetLanguage("vi");
    $website->loadSettings();
    $website->LoadTemplate();
  }
} else if (isset($_REQUEST["lang"]) && (isset($_REQUEST["lang"]) != $website->lang))
{
  $website->check_word($_REQUEST["lang"]);
  $website->SetLanguage($_REQUEST["lang"]);
  $website->changeLanguage();
  $website->LoadTemplate();
}

if(isset($_REQUEST["page"]))
{
	$website->check_word($_REQUEST["page"]);
	$website->SetPage($_REQUEST["page"]);
}
$website->Render();
?>
