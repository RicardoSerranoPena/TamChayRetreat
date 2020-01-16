<?php

class TCSiteManager {

  public $lang;

  public $page="home";
  public $domain = "tamchayretreat.com";
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

  function LoadDatabase()
  {
    if(file_exists("dbh.php"))
    {
      include("dbh.php");
    }
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

  function changeLanguage()
  {
    $this->texts=array();

    if(file_exists("languages/texts_".$this->lang.".php"))
    {
      $this->texts = parse_ini_string(file_get_contents("languages/texts_".$this->lang.".php"),true);
    }
    else
    if(file_exists("../languages/texts_".$this->lang.".php"))
    {
      $this->texts = parse_ini_string(file_get_contents("../languages/texts_".$this->lang.".php"),true);
    }
    else
    {
      die("The language file include/texts_".$this->lang.".php doesn't exist!");
    }
  }

  function loadSettings()
  {
    if(file_exists("languages/texts_".$this->lang.".php"))
    {
      $this->texts = parse_ini_string(file_get_contents("languages/texts_".$this->lang.".php"),true);
    }
    else
    if(file_exists("../languages/texts_".$this->lang.".php"))
    {
      $this->texts = parse_ini_string(file_get_contents("../languages/texts_".$this->lang.".php"),true);
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

      if(file_exists("include/top_header.php"))
      {
        include("include/top_header.php");
      }

      $HTML = ob_get_contents();

      $this->TemplateHTML=str_replace("<site top_header/>", $HTML, $this->TemplateHTML);

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

      if(file_exists("include/footer.php"))
      {
        include("include/footer.php");
      }

      $HTML = ob_get_contents();

      $this->TemplateHTML=str_replace("<site footer/>", $HTML, $this->TemplateHTML);

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

    function get_random_code()
  	{

  		$arrChars = array("A","F","B","C","O","Q","W","E","R","T","Z","X","C","V","N");

  		return $arrChars[rand(0,(sizeof($arrChars)-1))]."".rand(100,999)
  					.$arrChars[rand(0,(sizeof($arrChars)-1))].rand(100,999);

  	}

    /*
    A function to make the group reservation given the parameters
    $conn
    $event_name
    $event_purpose
    $event_start
    $event_end
    $event_guests
    $event_message
    $last_contact_id
    */
    function make_group_reservation($event_name, $event_start, $event_end, $event_guests, $event_message, $last_contact_id)
    {
      $event_name=strip_tags(stripslashes($event_name));
      $event_start=strip_tags(stripslashes($event_start));
      $event_end=strip_tags(stripslashes($event_end));
      $event_guests=strip_tags(stripslashes($event_guests));
      $event_message=strip_tags(stripslashes($event_message));

      $sql_event_start = date("Y-m-d H:i:s", strtotime($event_start));
      $sql_event_end = date("Y-m-d H:i:s", strtotime($event_end));

      $event_start = date("d-m-Y", strtotime($event_start));
      $event_end = date("d-m-Y", strtotime($event_end));

      $group_reservation_id = get_random_code();

      $group_reservation_sql = "INSERT INTO `group_reservations`
      (`event_id`, `event_name`, `event_start_date`, `event_end_date`, `event_guests`, `event_message`, `event_contact`)
      VALUES (
        '$group_reservation_id',
        '$event_name',
        '$sql_event_start',
        '$sql_event_end',
        '$event_guests',
        '$event_message',
        '$last_contact_id'
      );";
      if ($conn->query($group_reservation_sql))
      {
        $this->group_reservation_id = $group_reservation_id;
        $this->event_name = $event_name;
        $this->event_start = $event_start;
        $this->event_end = $event_end;
        $this->event_guests = $event_guests;
      }
    }

    function get_contact_reservation($name, $phone, $email)
    {
      $name = strip_tags(stripslashes($name));
      $phone = strip_tags(stripslashes($phone));
      $email = strip_tags(stripslashes($email));

      $contact_info_sql = "INSERT INTO `group_contact`
      (`name`, `phone`, `email`)
      VALUES (
        '$name',
        '$phone',
        '$email'
      );";

      if ($conn->query($contact_info_sql))
      {
        $this->last_contact_id = $conn->insert_id;
        $this->group_contact_name = $name;
        $this->group_contact_email = $email;
        $this->group_contact_phone = $phone;
      }

      if(!empty($this->last_contact_id))
      {
        return $this->last_contact_id;
      }
    }

  }
