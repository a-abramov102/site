<?
class SQL{
	private static $instance = null;
	private $connect;
	const DRIVER = 'localhost';
	const DB_NAME = 'test';
	const DB_LOGIN = 'root';
	const DB_PASS = 'root';
	
	private function __construct(){
			
		private function getInstance(){
			
			if(self::$instance==null){
				self::$instance = new PDO('mysql:host = self::DRIVER; dbname=self::DB_NAME',self::DB_LOGIN,self::DB_PASS;);
			}
			return self::$instance;
		}
	}
	/*private function __construct(){
		$this->$connect = new PDO('mysql:host = self::DRIVER; dbname=self::DB_NAME',self::DB_LOGIN,self::DB_PASS;);
	}*/
	private static function sql($query,$vars=[]){
		$stmt = self::instance()->prepare($query);
		$stmt->execute($vars);
		
		return $stmt;
	}
	
	public function getRows($query,$vars=[]){
		return self::sql($query)->fetchAll();
	}
	
	public function getRow($query,$vars=[]){
		return self::sql($query)->fetch();
	}
	
	public function Insert($query,$vars=[]){
		self::sql($query,$vars);
		return self::instance()->lastInsertId();
	}
	
	public function Update($query,$vars=[]){
		$stmt = self::sql($query,$vars);
		return $stmt->rowCount();
	}
			
	public function Delete($query,$vars=[]){
		$stmt = self::sql($query,$vars);
		return $stmt->rowCount();
	}
}
?>