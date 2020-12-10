<?php

class Uploader
{
   
    public function getFile($path){
        if(isset($path))
        {
          $xml = simplexml_load_file($path, 'SimpleXMLElement', LIBXML_NOCDATA);
           return $xml;

        }else{
            exit('Problem with file');
        }
    }

}

?>