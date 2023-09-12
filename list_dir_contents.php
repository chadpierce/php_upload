<?php
if ($handle = opendir('.')) {
    while (false !== ($file = readdir($handle)))
    {
        if (($file != ".") 
         && ($file != ".."))
        {
            $thelist .= '<LI><a href="'.$file.'">'.$file.'</a>';
        }
    }

    closedir($handle);
}
?>

<P>Uploaded files:</p>
<UL>
<P><?=$thelist?></p>
</UL>
