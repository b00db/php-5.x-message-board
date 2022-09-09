<?
header('content-type:text/html; charset=UTF-8');

$id = $_POST[id];
$user_id = $_POST[user_id];
$user_name = $_POST[user_name];
$user_pw = $_POST[user_pw];
$memo = $_POST[memo];

date_default_timezone_set('Asia/Seoul');
$regdate = date('YmdHis', time());  // 날짜, 시간
$ip = getenv('REMOTE_ADDR');  //ip

$connect = mysql_connect('localhost', 'boo', '0000');  // mysql 연결
mysql_select_db('boo', $connect);  // DB 연결

if (!$connect) {
    echo '연결에 실패 하였습니다.' . mysql_error();
}

// 데이터 저장
$query = "INSERT INTO `board`(`id`, `user_id`, `user_name`, `user_pw`, `memo`, `regdate`, `ip`) VALUES('$id', '$user_id', '$user_name', '$user_pw', '$memo', '$regdate', '$ip')";
mysql_query('set names utf8', $connect);
mysql_query($query, $connect);

mysql_close();
?>

<script>
window.alert('메세지가 정상적으로 등록되었습니다.');
location.href='./index.php';
</script>