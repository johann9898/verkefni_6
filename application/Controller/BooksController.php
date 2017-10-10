<?php  


namespace Mini\Controller;

use Mini\Model\Book;

class BooksController
{
	public function index()
    {
        // Instance new Model (Song)
        $Book = new Book();
        // getting all songs and amount of songs
        $books = $Book->getAllBook();

       // load views. within the views we can echo out $songs and $amount_of_songs easily
        require APP . 'view/_templates/header.php';
        require APP . 'view/books/index.php';
        require APP . 'view/_templates/footer.php';
    }
}

?>