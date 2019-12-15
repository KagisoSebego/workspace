<?php
class Book {
  //With __construct
  public $isbn;
  public $title;
  public $author;
  public $available;
  //__construct have no return type..also i teach of writing clean code with OOP
 public function __construct(
int $isbn,
string $title,
string $author,
int $available = 0
) {
$this->isbn = $isbn;
$this->title = $title;
$this->author = $author;
$this->available = $available;
}

public function getIsbn(): int {
return $this->isbn;
}
public function getTitle(): string {
return $this->title;
}
public function getAuthor(): string {
return $this->author;
}
public function isAvailable(): bool {
return $this->available;
}

//Check Book by Title
public function getPrintableTilte(): string { //changed from public funtion __toString() -->getPrintableTilte(): string
$result = '<i>' . $this->title
. '</i> - ' . $this->author;
if (!$this->available) {
$result .= ' <b>Not available</b>';
}
return $result;
}

//Once Book is purchased or reserved it reduces count..also
public function getCopy(): bool{
if ($this->available < 1) {
return false;
} else {
$this->available--;
return true;
}
}

public function addCopy() {
$this->available++;
}

}

//$book = new Book(1234,'title','author');
//$string = (string) $book;


$book1 = new Book("1984", "George Orwell", 9785267006323, 12);
$book2 = new Book("1984", "George Orwell", 9785267006323);
if ($book2->getCopy()) {
echo 'Here, your copy.';
} else {
echo 'I am afraid that book is not available.';
}



/*
public function __construct(
int $isbn,
string $title,
string $author,
int $available = 0
) {
$this->isbn = $isbn;
$this->title = $title;
$this->author = $author;
$this->available = $available;
}
------------------------------------------
//To use this remove __contructor
$book = new Book();
$book->title = "My beautiful daughter";
$book->author = "AgathaAI";
$book->isbn = 9785267006323;
$book->available = 12;
if ($book->getCopy()) {
echo 'Here, your copy.';
} else {
echo 'I am afraid that book is not available.';
}
------------------------------
$book = new Book();
$book->title = "1984";
$book->author = "Boitumelo Radikoro-Sebego";
$book->available = true;
var_dump($book);


$book1 = new Book();
$book1->title = "1984";
$book2 = new Book();
$book2->title = "To Kill a Mockingbird";
var_dump($book1, $book2);
*/

 ?>
