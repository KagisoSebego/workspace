<?php
class Customer {
private static $lastId = 0;
private $id;
private $firstname;
private $surname;
private $email;

public function __construct(
int $id,
string $firstname,
string $surname,
string $email
) {
  if ($id == null) {
$this->id = ++self::$lastId;
} else {
$this->id = $id;
if ($id > self::$lastId) {
self::$lastId = $id;
}
}
$this->id = $id;
$this->firstname = $firstname;
$this->surname = $surname;
$this->email = $email;
}
public function getId(): id {
return $this->id;
}
public function getFirstname(): string {
return $this->firstname;
}
public function getSurname(): string {
return $this->surname;
}
public function getEmail(): string {
return $this->email;
}
public function setEmail(string $email) {
$this->email = $email;
}
public static function getLastId(): int {
return self::$lastId;
}
}
$customer1 = new Customer(3, 'John', 'Doe', 'johndoe@mail.com');
$customer2 = new Customer(null, 'Mary', 'Poppins', 'mp@mail.com');
$customer3 = new Customer(7, 'James', 'Bond', '007@mail.com');
?>
