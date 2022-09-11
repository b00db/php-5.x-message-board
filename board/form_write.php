<?
header('content-type:text/html; charset=UTF-8');
include ('../lib/db_connect.php');
$connect = Connect();
$member = Member();

if (!$member[user_id]) {
    Error('로그인 후 이용해주세요.');
}

$id = $_POST[id];  // 게시판 ID
$user_id = $_POST[user_id];  // 회원 ID
$user_name = $_POST[user_name];  // 회원 이름
$nickname = $_POST[nickname];  // 회원 별명
$title = $_POST[title];  // 게시판 제목
$content = $_POST[content];  // 게시판 내용

if (!$title) {
    Error('제목을 입력해주세요.');
}
if (!content) {
    Error('내용을 입력해주세요.');
}

date_default_timezone_set('Asia/Seoul');
$regdate = date('YmdHis', time());  // 날짜, 시간
$ip = getenv('REMOTE_ADDR');  // ip
$level = $member[level];  // 회원 레벨 (3: 일반 회원, 2: 관리자, 1: 최고 관리자)
 
// 데이터 저장
$query = "INSERT INTO `board`(`id`, `level`, `user_id`, `user_name`, `nickname`, `title`, `content`, `regdate`, `ip`) ";
$query .= "VALUES('$id', '$level', '$user_id', '$user_name', '$nickname', '$title', '$content', '$regdate', '$ip')";
mysqli_query($connect, $query);
mysql_close();
?>

<script>
window.alert('메세지가 정상적으로 등록되었습니다.');
location.href='./list.php';
</script>