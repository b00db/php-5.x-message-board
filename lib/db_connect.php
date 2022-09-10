<?
function Connect() {
    $host_name = 'localhost';  // 호스트 네임
    $db_user_id = 'boo';  // DB user ID
    $db_name = 'boo';  // DB name
    $db_user_pw = '0000';  // DB user Password

    $connect = mysqli_connect($host_name, $db_user_id, $db_user_pw, $db_name);
    mysqli_query($connect, 'set names utf8');
    if (!$connect) {
        $error = mysqli_connect_error();
        $errno = mysqli_connect_errno();
        die($errno . ':' . $error);
    }
    return  $connect;
}

function Error($msg) {
    echo "
        <script>
        window.alert('$msg');
        history.back(1);
        </script>
    ";
    exit;  // 첫 번째 메세지만 띄우기
}

function Member() {
    global $connect;
    $temps = $_COOKIE['COOKIES'];
    $cookies = explode('//', $temps);

    // 회원정보
    $query = "SELECT * FROM `member` WHERE `user_id`='$cookies[0]'";
    $result = mysqli_query($connect, $query);
    $member = mysqli_fetch_array($result);
    return $member;
}
?>