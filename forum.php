<?php
/*
* UDWBase: WOWDB Web Interface
*
* © UDW 2009-2011
*
* Released under the terms and conditions of the
* GNU General Public License (http://gnu.org).
*
*/

$board = $_REQUEST['board'];
$lang  = $_SESSION['locale'];


if ($UDWBaseconf['forumextern']==1)
{
  if ($board==-1)
    header('Location: '.$UDWBaseconf['forum'].''.$UDWBaseconf['addon'].'');
  if ($board==0)
    header('Location: '.$UDWBaseconf['forum'].'');
  if ($board==1)
    header('Location: '.$UDWBaseconf['forum'].''.$UDWBaseconf['wowgeneral'].'');
  if ($board==2)
    header('Location: '.$UDWBaseconf['forum'].''.$UDWBaseconf['wowhelp'].'');
  if ($board==3)
    header('Location: '.$UDWBaseconf['forum'].''.$UDWBaseconf['dk'].'');
  if ($board==4)
    header('Location: '.$UDWBaseconf['forum'].''.$UDWBaseconf['druid'].'');
  if ($board==5)
    header('Location: '.$UDWBaseconf['forum'].''.$UDWBaseconf['hunter'].'');
  if ($board==6)
    header('Location: '.$UDWBaseconf['forum'].''.$UDWBaseconf['mage'].'');
  if ($board==7)
    header('Location: '.$UDWBaseconf['forum'].''.$UDWBaseconf['pally'].'');
  if ($board==8)
    header('Location: '.$UDWBaseconf['forum'].''.$UDWBaseconf['priest'].'');
  if ($board==9)
    header('Location: '.$UDWBaseconf['forum'].''.$UDWBaseconf['rogue'].'');
  if ($board==10)
    header('Location: '.$UDWBaseconf['forum'].''.$UDWBaseconf['shammy'].'');
  if ($board==11)
    header('Location: '.$UDWBaseconf['forum'].''.$UDWBaseconf['warlock'].'');
  if ($board==12)
    header('Location: '.$UDWBaseconf['forum'].''.$UDWBaseconf['warrior'].'');
  if ($board==13)
    header('Location: '.$UDWBaseconf['forum'].''.$UDWBaseconf['raids'].'');
  if ($board==14)
    header('Location: '.$UDWBaseconf['forum'].''.$UDWBaseconf['pvpforum'].'');
  if ($board==15)
    header('Location: '.$UDWBaseconf['forum'].''.$UDWBaseconf['profchat'].'');
  if ($board==16)
    header('Location: '.$UDWBaseconf['forum'].''.$UDWBaseconf['newslink'].'');
  if ($board==17)
    header('Location: '.$UDWBaseconf['forum'].''.$UDWBaseconf['wowgeneral'].'');
}
else
{
/* TODO: Need to add the internal forum functionality
         Below is what UDW already had in it and this
         package did not include their forum code so
         it still needs to be writen or some one who
         knows it can tell me where to find it and
         I'll add it with credit.
         (I don't have the required ability for this!) */
  if ($board<0)
  {
    switch ($lang) :
      // english
      case 0:
        switch ($board) :
        // tools
          case -1:
            header('Location: http://yourboardurl');
          break;
        endswitch;
    endswitch;
  }
  else
  {
    switch ($lang) :
		//english
	    case 0:
		    //wow general
			switch ($board):
				case 0:
					header('Location: http://yourboardurl');
				break;
			endswitch;
	    default:
		    header('Location: Location: http://yourboardurl');
		    break;
    endswitch;
  }
}
?>