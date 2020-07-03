<?php 

class Files{

    // display vraca boolean
    function displayContent($filename) : bool{

        $result = true;

        // ako je true
        try{

            echo "Read the Content of the file: $filename <br>";

            // uhvati sadrzaj file-a
            $content = file_get_contents($filename);

            echo "Displaying Content of the file: $filename <br>";

            // echo sadrzaj
            echo $content."<br>";

        // ako je false
        }catch(Exception $e){

            $result = false;

        }

        return $result;
    }

}

// stvaramo novi objekt
$files1 = new Files();

// pozivamo metodu iz objekta
$files1->displayContent("Test.txt");

// stvaramo novi objekt
$files2 = new Files();

// pozivamo metodu iz objekta
$files2->displayContent("Test1.txt");

?>