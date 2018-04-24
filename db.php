<?php
/**
* 数据库类
*/
class Db
{
	
	private static $db_user;
	private static $db_pwd;
	private static $dsn;
	private static $instance;

	public static function getInstance()
	{
		self::$db_user="rsgl";
		self::$db_pwd="rsgl";
		self::$dsn="oci:dbname=//192.168.31.10:1521/orcl;charset=utf8";
		// self::$dsn="mysql:host=localhost;port=3306;dbname=mysql;charset=utf8";
		if (self::$instance) {
			return self::$instance;
		} else {
			try {
				// return self::$dsn;
				return self::$instance=new PDO(self::$dsn, self::$db_user, self::$db_pwd, [PDO::ATTR_PERSISTENT => true]);
			} catch (Exception $e) {
				return $e;
			}
		}
	}
}
// error_reporting(~E_NOTICE);
$pdo=Db::getInstance();

$sql="select * from test";
$stmt=$pdo->query($sql);
while ($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
	var_dump($row['sysid']);
}
// var_dump($stmt);

/*$conn=oci_connect("rsgl", "rsgl", "//192.168.31.10:1521/orcl");
var_dump($conn);
$sql="select * from TEST";
$stmt=oci_parse($conn, $sql);
oci_fetch_all($stmt, $output);
var_dump($output);*/