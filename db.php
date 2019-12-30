<?
class db{
private $host = "localhost";
private $dbname = "wegroup";
private $username = "root";
private $password = "";
protected $con;
public function __construct()
{
  try{
$this->con = new PDO("mysql:host=".$this->host.";dbname=".$this->$dbname,$this->username,$this->password);
echo "Connected";
  }
  catch(Exception $e){
    echo "Database Connection Error".$e->getMessage();

  }
}
}
?>