<?php



class User 
{
private $userId;
private $firstName;
private $lastName;
private $birthday;
private $email;








/**
 * Getter and Setter UserID
 */ 



public function getUserId()
{
return $this->userId;
}


public function setUserId($userId)
{
$this->userId = $userId;

return $this;
}

/**
 * Getter and Setter First Name
 */ 
public function getFirstName()
{
return $this->firstName;
}


public function setFirstName($firstName)
{
$this->firstName = $firstName;

return $this;
}
/**
 * Getter and Setter Last Name
 */ 
public function getLastName()
{
return $this->lastName;
}


public function setLastName($lastName)
{
$this->lastName = $lastName;

return $this;
}

/**
 * Getter and Setter Birthday
 */ 
public function getBirthday()
{
return $this->birthday;
}


public function setBirthday($birthday)
{
$this->birthday = $birthday;

return $this;
}

/**
 * Getter and Setter Email
 */ 
public function getEmail()
{
return $this->email;
}


public function setEmail($email)
{
$this->email = $email;

return $this;
}

public function getAge():int
{
$today= new DateTime();
$birthday = new DateTime($this->getBirthday());
$diff = $today->diff($birthday);
$age = $diff -> y;



return $age;
}

public function isAdult():bool 
{
$age= $this->getAge();

if($age >=18){
  return true;   
}else
{
  return false;  
}

}

}


