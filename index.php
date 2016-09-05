<?PHP
    $mysql_server_name="localhost"; //数据库服务器名称
    $mysql_username="zjwdb_6045854"; // 连接数据库用户名
    $mysql_password="ASd39114988"; // 连接数据库密码
    $mysql_database="zjwdb_6045854"; // 数据库的名字

try {
    $conn = new PDO("mysql:host='$mysql_server_name';dbname='$mysql_database'", $username, $password);
    echo "连接成功";
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
?>


