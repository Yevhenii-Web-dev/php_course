<?

interface IUser
{
   public function getFirstName();
   public function setFirstName($first_name);

   public function getLastName();
   public function setLastName($last_name);

   public function getAge();
   public function setAge($age);

   public function getGender();
   public function setGender($gender);

   public function getHeight();
   public function setHeight($height);

   public function getWeight();
   public function setWeight($weight);
}

interface IEmployee extends IUser
{
   public function getSalary();
   public function setSalary($salary);
}

class Employee implements IEmployee
{
   private string $first_name;
   private string $last_name;
   private string $gender;
   private int $age;
   private int $height;
   private int $weight;
   private int $salary;




   public function getFirstName(): string
   {
      return $this -> first_name;
   }

   public function setFirstName($first_name): void
   {
      $this -> first_name = $first_name;
   }



   public function getLastName(): string
   {
      return $this-> last_name;
   }

   public function setLastName($last_name): void
   {
      $this -> last_name = $last_name;
   }



   public function getAge(): int
   {
      return $this -> age;
   }

   public function setAge($age): void
   {
      $this -> age = $age;
   }



   public function getGender(): string
   {
      return $this -> gender;
   }

   public function setGender($gender): void
   {
      $this -> gender = $gender;
   }



   public function getHeight(): int
   {
      return $this -> height;
   }

   public function setHeight($height): void
   {
      $this -> height = $height;
   }



   public function getWeight(): int
   {
      return $this -> weight;
   }

   public function setWeight($weight): void
   {
      $this -> weight = $weight;
   }



   public function getSalary(): int
   {
      return $this -> salary;
   }

   public function setSalary($salary): void
   {
      $this -> salary = $salary;
   }

}
// first employee==============================================================
$objEmployee = new Employee();

$objEmployee -> setFirstName('Natalia');
$objEmployee -> setLastName("Voloshko");
$objEmployee -> setGender('wuman');
$objEmployee -> setAge(25);
$objEmployee -> setHeight(165);
$objEmployee -> setWeight(50);
$objEmployee -> setSalary(3000);



echo $objEmployee -> getFirstName();
echo '<br>';
echo $objEmployee -> getLastName();
echo '<br>';
echo $objEmployee -> getAge();
echo '<br>';
echo $objEmployee -> getGender();
echo '<br>';
echo $objEmployee -> getHeight();
echo '<br>';
echo $objEmployee -> getWeight();
echo '<br>';
echo $objEmployee -> getSalary();
echo '<br>';
// first employee==============================================================



// second employee==============================================================
$objEmployee1 = new Employee();




echo $objEmployee1 -> getFirstName();
echo '<br>';
echo $objEmployee1 -> getLastName();
echo '<br>';
echo $objEmployee1 -> getAge();
echo '<br>';
echo $objEmployee1 -> getGender();
echo '<br>';
echo $objEmployee1 -> getHeight();
echo '<br>';
echo $objEmployee1 -> getWeight();
echo '<br>';
echo $objEmployee1 -> getSalary();
echo '<br>';




$objEmployee1 -> setFirstName('Volodumyr');
$objEmployee1 -> setLastName("Voloshko");
$objEmployee1 -> setGender('man');
$objEmployee1 -> setAge(30);
$objEmployee1 -> setHeight(190);
$objEmployee1 -> setWeight(85);
$objEmployee1 -> setSalary(5000);




// second employee==============================================================


?>