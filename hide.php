<?php
        $DOCUMENT_ROOT=$_SERVER['DOCUMENT_ROOT'];
        @ $ffp=fopen("$DOCUMENT_ROOT/files/hide.txt",'w');
        if(!$ffp)
		{
			echo "oshibka!!!!";
			exit;
        }else
		{
                @ fputs($ffp,"hide");
                fclose($ffp);
        };

?>