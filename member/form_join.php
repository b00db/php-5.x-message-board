<?
header('content-type:text/html; charset=UTF-8');
include ('../lib/db_connect.php');
$connect = Connect();

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

if (!$user_id) {
    Error('아이디를 입력하세요.');
}
if (substr($user_id, '12')) {
    Error('아이디는 12자까지만 입력해주세요.');
}
if (preg_match('/[^ a-z A-Z 0-9]/' , $user_id)) {
    Error('아이디는 영문자와 숫자만 허용됩니다.');
}

if (!$user_name) {
    Error('이름을 입력하세요.');
}
if (strlen($user_name) < 6 or strlen($user_name) > 15) {
    Error('이름은 2자~5자로 입력해주세요.');
}  // 한글 1자당 3byte

if (!$nickname) {
    Error('닉네임을 입력하세요.');
}

if (!$birth) {
    Error('생년월일을 입력하세요.');
}
if (!(strlen($birth) == 8)) {
    Error('생년월일은 8자로 입력해주세요.');
}

if (!$sex) {
    Error('성별을 선택하세요.');
}

if (!$tel) {
    Error('연락처를 입력하세요.');
}
if (!preg_match('/^010[0-9]{8}$/', $tel)) {
    Error('연락처는 010으로 시작하는 11글자를 입력해주세요.');
}

if (!$email) {
    Error('이메일을 입력하세요.');
}
if (!preg_match('/^[a-zA-Z]{1}[a-zA-Z0-9.\-_]+@[a-z0-9]{1}[a-z0-9\-]+[a-z0-9]{1}\.(([a-z]{1}[a-z.]+[a-z]{1})|([a-z]+))$/', $email)) {
    Error('올바른 이메일을 입력해주세요.');
}

if (!$user_pw) {
    Error('비밀번호를 입력하세요.');
}

if (!$addr1) {
    Error('기본주소는 필수입니다.');
}

$pw = md5($user_pw);  // 비밀번호 암호화

date_default_timezone_set('Asia/Seoul');
$regdate = date('YmdHis', time());  // 날짜, 시간
$ip = getenv('REMOTE_ADDR');  // ip

// 데이터 저장
$query = "INSERT INTO `member`(`id`, `user_id`, `user_name`, `nickname`, `birth`, `sex`, `tel`, `email`, `user_pw`, `addr1`, `addr2`, `regdate`, `ip`) ";
$query .= "VALUES('$id', '$user_id', '$user_name', '$nickname', '$birth', '$sex', '$tel', '$email', '$pw', '$addr1', '$addr2', '$regdate', '$ip')";
mysqli_query($connect, $query);
mysqli_close();
?>

<script>
window.alert('회원가입이 완료되었습니다.');
location.href='../index.php';
</script>