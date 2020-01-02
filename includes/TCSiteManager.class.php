<?php

class TCSiteManager {

  public $lang="en";

  public $page="home";
  public $domain = "www.tamchayretreat.com";
  public $texts = array();



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


		$arrTags=array();


		if(is_array($arrTags))
		{
			foreach($arrTags as $arrTag)
			{
				$tag_pos = strpos($this->TemplateHTML,"<site ".$arrTag[0]."/>");

				if($tag_pos !== false)
				{
					if(trim($arrTag[1]) != "none" && trim($arrTag[0]) != "" && trim($arrTag[1]) != "")
					{
						$HTML="";
						ob_start();
						include("include/".$arrTag[1]);

						if($HTML=="")
						{
							$HTML = ob_get_contents();
						}
						ob_end_clean();
						$this->TemplateHTML = str_replace("<site ".$arrTag[0]."/>",$HTML,$this->TemplateHTML);
					}
				}
			}
		}

	}

  function loadSettings()
  {
    if(file_exists("include/texts_".$this->lang.".php"))
    {
      $this->texts = parse_ini_file("include/texts_".$this->lang.".php",true);
    }
    else
    if(file_exists("../include/texts_".$this->lang.".php"))
    {
      $this->texts = parse_ini_file("../include/texts_".$this->lang.".php",true);
    }
    else
    {
      die("The language file include/texts_".$this->lang.".php doesn't exist!");
    }
  }

  function Render()
  {

    if($this->page!="")
    {
      $HTML="";
      ob_start();

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
}
