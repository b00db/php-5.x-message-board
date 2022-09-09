<?
function dbConnect() {
    $host_name = 'localhost';  // 호스트 네임
    $db_user_id = 'boo';  // DB user ID
    $db_name = 'boo';  // DB name
    $db_user_pw = '0000';  // DB user Password

    $connect = mysql_connect($host_name, $db_user_id, $db_user_pw);
    mysql_query('set names utf8', $connect);
    mysql_select_db($db_name, $connect);
    if (!$connect) die('연결에 실패하였습니다.' . mysql_error());
    return  $connect;
}
?>