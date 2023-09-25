<?php

include('book.php');

class bookModel
{
    public function getData()
    {
        return array(
            new Book('Jujutsu Kaisen', 'Gege Akutami', 'Shounen Jump', '2017'),
            new Book('Black Clover', 'Yuki Tabata', 'Shounen Jump', '2017'),
            new Book('Attack On Titan', 'Hajime Isayama', 'Shuheisa', '2012'),
            new Book('One Piece', 'Eichiro Oda', 'Shounen Jump', '1999'),
        );
    }
}
