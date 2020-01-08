<?php

class TCSiteManager {

  public $lang="vi";

  public $page="home";
  public $domain = "www.tamchayretreat.com";
  public $texts = array();
  public $multi_language = true;


  /// The website title and meta description and keywords,
	/// which can be used for SEO purposes
	public $Title = true;
	public $Description = true;
	public $Keywords = true;


  function SetLanguage($lang)
  {
    $this->lang= substr(preg_replace("/[^a-z]/i", "", $lang), 0, 2);
  }

  function SetPage($page)
  {

    $this->page=$page;
  }

  function LoadTemplate()
  {
    global $_REQUEST,$DBprefix;

    if(file_exists("template.htm"))
    {
      $templateArray=array();
      $templateArray["html"] = file_get_contents('template.htm');
    }
    else
    {
      die("Error: The template file template.htm doesn't exist.");
    }


    $this->TemplateHTML = stripslashes($templateArray["html"]);

    $pattern = "/{(\w+)}/i";
    preg_match_all($pattern, $this->TemplateHTML, $items_found);
    foreach($items_found[1] as $item_found)
    {

      if(isset($this->texts[$item_found]))
      {
        $this->TemplateHTML=str_replace("{".$item_found."}",$this->texts[$item_found],$this->TemplateHTML);
      }
    }

  }

  function loadSettings()
  {
    if(file_exists("languages/texts_".$this->lang.".php"))
    {
      $this->texts = parse_ini_file("languages/texts_".$this->lang.".php",true);
    }
    else
    if(file_exists("../languages/texts_".$this->lang.".php"))
    {
      $this->texts = parse_ini_file("../languages/texts_".$this->lang.".php",true);
    }
    else
    {
      die("The language file include/texts_".$this->lang.".php doesn't exist!");
    }
  }

  function changeLanguage()
  {
    if ($this->lang=="en") {
      $this->SetLanguage("vi");
    } elseif ($this->lang=="vi") {
      $this->SetLanguage("en");
    } else {
      echo "language not supported";
    }
  }

  function Render()
  {

    if($this->page!="")
    {
      $HTML="";
      ob_start();

      if(file_exists("include/top_header.php"))
      {
        include("include/top_header.php");
      }

      $HTML = ob_get_contents();

      $this->TemplateHTML=str_replace("<site top_header/>", $HTML,$this->TemplateHTML);

      ob_end_clean();

      $HTML="";
      ob_start();

      if(file_exists("include/navbar.php"))
      {
        include("include/navbar.php");
      }

      $HTML = ob_get_contents();
      $this->TemplateHTML=str_replace("<site navbar/>", $HTML, $this->TemplateHTML);

      ob_end_clean();

      ob_start();
      $HTML="";

      if(file_exists("pages/".$this->page.".php"))
      {
        include("pages/".$this->page.".php");
      }

      $HTML = ob_get_contents();

      $this->TemplateHTML=str_replace("<site content/>",$HTML,$this->TemplateHTML);

      ob_end_clean();
    }

    echo $this->TemplateHTML;
  }

  function sanitize($input)
  {
    $strip_chars = array("~", "`", "!","#", "$", "%", "^", "&", "*", "(", ")", "=", "+", "[", "{", "]",
      "}", "\\", "|", ";", ":", "\"", "'", "&#8216;", "&#8217;", "&#8220;", "&#8221;", "&#8211;", "&#8212;",
      ",", "<", ">", "/", "?");
      $output = trim(str_replace($strip_chars, " ", strip_tags($input)));
      $output = preg_replace('/\s+/', ' ',$output);
      $output = preg_replace('/\-+/', '-',$output);
      return $output;
    }

    function check_integer($input)
    {
      if(!is_numeric($input)) die("");
    }

    function check_word($input)
    {
      if(!preg_match("/^[a-zA-Z0-9_]+$/i", $input)) die("");
    }

    function check_extended_word($input)
    {
      if(!preg_match("/^[a-zA-Z0-9_\-. @]+$/i", $input)) die("");
    }

    function format_str($strTitle)
    {
      $strSEPage = "";
      $strTitle=strtolower(trim($strTitle));
      $arrSigns = array("~", "!","\t", "@","1","2","3","4","5","6","7","8","9","0", "#", "$", "%", "^", "&", "*", "(", ")", "+", "-", ",",".","/", "?", ":","<",">","[","]","{","}","|");

      $strTitle = str_replace($arrSigns, "", $strTitle);

      $pattern = '/[^\w ]+/';
      $replacement = '';
      $strTitle = preg_replace($pattern, $replacement, $strTitle);

      $arrWords = explode(" ",$strTitle);
      $iWCounter = 1;

      foreach($arrWords as $strWord)
      {
        if($strWord == "") { continue; }

        if($iWCounter == 4) { break; }
        if($iWCounter != 1) { $strSEPage .= "-"; }
        $strSEPage .= $strWord;

        $iWCounter++;
      }

      return $strSEPage;

    }
  }
