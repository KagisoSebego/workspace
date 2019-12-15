<?php
require_once __DIR__ . '/Book.php';
require_once __DIR__ . '/Customer.php';
$book1 = new Book("1984", "George Orwell", 9785267006323, 12);
$book2 = new Book("To Kill a Mockingbird", "Harper Lee",9780061120084, 2);
$customer1 = new Customer(1, 'John', 'Doe', 'johndoe@mail.com');

$book1->title = 2;
$customer1->id = 3;
