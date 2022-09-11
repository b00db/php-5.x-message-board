<?
error_reporting(E_ALL & ~E_NOTICE);
include ('../lib/db_connect.php');
$connect = Connect();
$member = Member();
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type='text/css' href='../lib/style.css' rel='stylesheet'>
    <title>글쓰기</title>
</head>
<body>
    <table border='0' cellspacing='0' cellpadding='0' width='100%' height='100%' aligh='center' valign='top'>
        <tr>
            <td width='100%' height='70' align='left' valign='middle' bgcolor='#3B9BF2'>
                <table border='0' width='90%' height='70' bgcolor='#3B9BF2' align='center' cellspacing='0' cellpadding='0'>
                    <tr>
                        <td width='100%' height='70' align='left' valign='middle'>
                            <a href='../index.php'><font color='#FFFFFF'><strong>[홈]</strong></font></a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td width='100%' height='100%' align='center' valign='top'>
                <table border='0' width='75%' height='100%' bgcolor='#FFFFFF' align='center' cellspacing='0' cellpadding='0'>
                    <tr>
                        <td width='100%' height='10' colspan='2' bgcolor='#FFFFFF'>&nbsp;</td>
                    </tr>
                    <tr>
                        <td width='100%' height='30' colspan='2' bgcolor='#FFFFFF' align='center'> = 자유게시판 글쓰기 = </td>
                        <form name='write' action='form_write.php' method='post' entype='multipart/form-data'>
                            <input type='hidden' name='id' value='board'>
                            <tr>
                                <td width='20%' height='30' align='right' valign='middle'>
                                    <li>아이디</li>
                                </td>
                                <td width='80%' height='30' align='left' valign='middle' bgcolor='#FFFFFF'>
                                    &nbsp; <input type='text' name='user_id' size='15' value='<?=$member[user_id]?>' readonly='readonly'>
                                </td>
                            </tr>
                            <tr>
                                <td width='20%' height='30' align='right' valign='middle'>
                                    <li>이름</li>
                                </td>
                                <td width='80%' height='30' align='left' valign='middle' bgcolor='#FFFFFF'>
                                    &nbsp; <input type='text' name='user_id' size='15' value='<?=$member[user_name]?>' readonly='readonly'>
                                    &nbsp; &nbsp; &nbsp;
                                    닉네임: <input type='text' name='nickname' size='15' value='<?=$member[nickname]?>' readonly='readonly'>
                                </td>
                            </tr>
                            <tr>
                                <td width='20%' height='30' align='right' valign='middle'>
                                    <li>제목</li>
                                </td>
                                <td width='80%' height='30' align='left' valign='middle' bgcolor='#FFFFFF'>
                                    &nbsp; <input type='text' name='title' style='width:550px; height:30px;'>
                                </td>
                            </tr>
                            <tr>
                                <td width='20%' height='30' align='right' valign='top'>
                                    <li>내용</li>
                                </td>
                                <td width='80%' height='420' align='left' valign='middle' colspan='2' bgcolor='#FFFFFF'>
                                    &nbsp; <textarea name='title' style='width:100%; height:400px;'></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td width='100%' height='30' bgcolor='#FFFFFF' colspan='2' align='right' valign='middle'>
                                    <input type='reset' value='취소'>
                                    &nbsp 
                                    <input type='submit' value='등록'>
                                </td>
                            </tr>
                        </form>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>