<?php
    /**
     *  detect device android or Iphone using php 
     */
    function detect_device(){
        if( stristr($_SERVER['HTTP_USER_AGENT'],'ipad') ) {
            return "ipad";
        } else if( stristr($_SERVER['HTTP_USER_AGENT'],'iphone') || strstr($_SERVER['HTTP_USER_AGENT'],'iphone') ) {
            return  "iphone";
        }  else if( stristr($_SERVER['HTTP_USER_AGENT'],'android') ) {
            return  "android";
        }
        return  "unknown";        
    } 
?>