<?

interface IUser
{
   public function getFirstName();
   public function setFirstName();

   public function getLastName();
   public function setLastName();

   public function getAge();
   public function setAge();

   public function getGender();
   public function setGender();

   public function getHeight();
   public function setHeight();

   public function getWeight();
   public function setWeight();
}

interface IEmployee extends IUser
{
   public function getSalary();
   public function setSalary();
}

class Employee implements IEmployee
{
   private $first_name = '';
   private $last_name = '';
   private $gender = '';
   private $age = 0;
   private $height = 0;
   private $weight = 0;

   public function getFirstName():string
   {
      return $this -> first_name;
   }

   public function setFirstName($first_name):string
   {
      $this -> first_name = $first_name;
   }



   public function getLastName():string
   {
      return $this-> last_name;
   }

   public function setLastName($last_name):string
   {
      $this -> last_name = $last_name;
   }



   public function getAge():int
   {
      return $this -> age;
   }

   public function setAge($age):int
   {
      $this -> age = $age;
   }



   public function getGender():string
   {
      return $this -> gender;
   }

   public function setGender($gender):string
   {
      $this -> gender = $gender;
   }



   public function getHeight():int
   {
      return $this -> height;
   }

   public function setHeight($height):int
   {
      $this -> height = $height;
   }



   public function getWeight():int
   {
      return $this -> weight;
   }

   public function setWeight($weight):int
   {
      $this -> weight = $weight;
   }

}

$objEmployee = new Employee();
$objEmployee -> setFirstName('Natalia');
$objEmployee -> setLastName("Voloshko");
$objEmployee -> setGender('wuman');
$objEmployee -> setAge(25);
$objEmployee -> setHeight(165);
$objEmployee -> setWeight(50);



?>