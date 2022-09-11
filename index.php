<?
error_reporting(E_ALL & ~E_NOTICE);
include ('./lib/db_connect.php');
$connect = Connect();
$member = Member();
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type='text/css' href='./lib/style.css' rel='stylesheet'>
    <title>메인 페이지</title>
</head>
<body>
    <table border='0' width='100%' height='100%' align='center' cellspacing='0' cellpadding='0'>
        <tr>
            <td width='100%' height='80' align='center'>
                <table border='0' width='100%' height='100%' align='center' cellspacing='0' cellpadding='0'>
                    <tr>
                        <td width='100%' height='70' align='center' bgcolor='#3B9BF2'>
                            <font color='#FFFFFF'><strong>안녕하세요. 반갑습니다.</strong></font>
                        </td>
                        <tr>
                            <td width='100%' height='50' align='right'>
                                <?
                                if ($member[user_id]):
                                    echo $member[user_name] . '(' . $member[nickname] . ') 님 환영합니다.';
                                ?>
                                &nbsp; &nbsp; &nbsp;
                                <a href='./member/logout.php'><strong>[로그아웃]</strong></a> &nbsp; &nbsp;
                                <?
                                else:
                                ?>
                                <a href='./member/join.php'><strong>[회원가입]</strong></a> &nbsp; &nbsp; &nbsp;
                                <a href='./member/login.php'><strong>[로그인]</strong></a> &nbsp; &nbsp;
                                <?
                                endif;
                                ?>
                            </td>
                            <tr>
                                <td width='100%' height='30' align='left' valign='middle' bgcolor='#3A389E'>
                                    &nbsp; &nbsp; &nbsp; &nbsp;
                                    <a href='./board/list.php'><font color='#FFFFFF'>[자유게시판]</font></a>
                                </td>
                            </tr>
                            <tr>
                                <td width='100%' height='500' align='center' bgcolor='#FFFFFF'>홈페이지 메인입니다.</td>
                            </tr>
                            <tr>
                                <td width='100%' height='100%' align='center' bgcolor='#FFFFFF'>&nbsp;</td>
                            </tr>
                        </tr>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>