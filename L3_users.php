<?php 

class Users{

    function fetchUser($id): bool{

        $result = false;
        echo "Query the Database: $id";

        $result = true;
        echo "Display the records";

        return $result;

    }

    function deleteUser($id){

        echo "Deleting the Records for the User ID: $id";

    }

}

$user1 = new Users();

$user1->fetchUser(101);

$user1->fetchUser(102);

$user1->deleteUser(101);

?>