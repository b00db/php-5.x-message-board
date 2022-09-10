<?
header('content-type:text/html; charset=UTF-8');
include ('../lib/db_connect.php');
$connect = dbConnect();

$id = $_POST[id];
$user_id = $_POST[user_id];
$user_name = $_POST[user_name];
$nickname = $_POST[nickname];
$birth = $_POST[birth];
$sex = $_POST[sex];
$tel = $_POST[tel];
$email = $_POST[email];
$user_pw = $_POST[user_pw];
$addr1 = $_POST[addr1];
$addr2 = $_POST[addr2];

$pw = md5($user_pw);  // 비밀번호 암호화

date_default_timezone_set('Asia/Seoul');
$regdate = date('YmdHis', time());  // 날짜, 시간
$ip = getenv('REMOTE_ADDR');  // ip

// 데이터 저장
$query = "INSERT INTO `member`(`id`, `user_id`, `user_name`, `nickname`, `birth`, `sex`, `tel`, `email`, `user_pw`, `addr1`, `addr2`, `regdate`, `ip`) ";
$query .= "VALUES('$id', '$user_id', '$user_name', '$nickname', '$birth', '$sex', '$tel', '$email', '$pw', '$addr1', '$addr2', '$regdate', '$ip')";
mysql_query('set names utf8', $connect);
mysql_query($query, $connect);
mysql_close();
?>

<script>
window.alert('회원가입이 완료되었습니다.');
location.href='../index.php';
</script>