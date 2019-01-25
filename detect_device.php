//detect device android or Iphone using php 
<?php
        if( stristr($_SERVER['HTTP_USER_AGENT'],'ipad') ) {
               echo "Iphone";
        } else if( stristr($_SERVER['HTTP_USER_AGENT'],'iphone') || strstr($_SERVER['HTTP_USER_AGENT'],'iphone') ) {
               echo "Iphone";
        }  else if( stristr($_SERVER['HTTP_USER_AGENT'],'android') ) {
               echo "Android";
        }else{
             echo "unknown";        
        }
?>
