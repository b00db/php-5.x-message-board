<?
header('content-type:text/html; charset=UTF-8');
// ob_start;
include ('../lib/db_connect.php');
$connect = Connect();

$user_id = $_POST[user_id];
$user_pw = $_POST[user_pw];

$pw = md5($user_pw);  // 비밀번호 암호화

// 데이터 불러오기
$query = "SELECT * FROM `member` WHERE `user_id`='$user_id'";
$result = mysqli_query($connect, $query);
$member = mysqli_fetch_array($result);

if (!$user_id) {
    Error('아이디를 입력하세요.');
} elseif (!$member[user_id]) {
    Error('존재하지 않는 회원 아이디 입니다.');
}
if (!$user_pw) {
    Error('비밀번호를 입력하세요.');
} elseif ($member[user_pw] != $pw) {
    Error('비밀번호가 틀렸습니다.');
}

if ($member[user_id] and $member[user_pw] == $pw) {
    $tmp = $member[user_id] . '//' . $member[user_pw];
    setcookie('COOKIES', $tmp, time()+60*60*24, "/");  // 24시간동안 유효
}
?>

<script>
window.alert('로그인 되었습니다.');
location.href='../index.php';
</script>