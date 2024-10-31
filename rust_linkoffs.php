<?php
/*
Plugin Name: RustLinkOffs
Plugin URI: http://russ.innereyes.com/wordpress-plugins/
Description: Displays "linkoff" custom field through <code>ShowRustLinkoff(true|false,$sTitle)</code> tag.
Author: RustIndy
Author URI: http://russ.innereyes.com
Version: 1.0 Beta 2
*/

function ShowRustLinkoffs($newWindow = false,$sTitle = "")
{
        $sTitle = trim(htmlentities($sTitle));
        $rLinks = get_post_custom_values("linkoff");
        if(count($rLinks)>0)
        {
                echo "<div class=\"rustLinkoffsPost\">$sTitle<ul>";
                for($i=0;$i<count($rLinks);$i++)
                {
                        $sTemp = "";
                        if ($newWindow)
                        {
                                $sTemp = " target=\"_blank\"";
                        }
                        $sDesc = trim(strstr(trim($rLinks[$i])," "));
                        if (empty($sDesc))
                        {
                                $sDesc = trim($rLinks[$i]);
                                $sLink = $sDesc;
                        } else {
                                $sLink = trim(substr(trim($rLinks[$i]),0,strlen(trim($rLinks[$i])) - strlen($sDesc)));
                        }
                        $sDesc = htmlentities($sDesc);
                        $sLink = htmlentities($sLink);
                        echo "<li><a href=\"$sLink\" title=\"$sDesc &gt;&gt; $sLink.\"$sTemp>$sDesc</a></li>";
                }
                echo "</ul></div>\n";
        }
}
?>
