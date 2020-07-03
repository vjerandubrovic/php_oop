<?php 

class FilesHelper{

    static function hasData($filename) : bool{

        if(!file_exists($filename)){

            echo "$filename does not exists <br>";

            return false;

        }

        $content = file_get_contents($filename);

        if(empty($content)){

            return false;

        }else{

            return true;

        }

    }

}

if(FilesHelper::hasData("test.txt")){

    echo "Data Found";

}else{

    echo "Data not found";

}

?>