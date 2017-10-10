<?php 

namespace Mini\Model;


class Book
{
    public function getAllBook()
    {
        $booklist = array
        (
            array("The Hunger Game", "Printster", 2008, "https://en.wikipedia.org/wiki/The_Hunger_Games"),
            array("Pride and Prejudice", "Print Saga", 1813, "https://en.wikipedia.org/wiki/Pride_and_Prejudice"),
            array("Twilight", "Print C.O", 2005, "https://en.wikipedia.org/wiki/Twilight_(novel_series)")
        );

        return $booklist;
    }
   
}

?>

