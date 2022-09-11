<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type='text/css' href='../lib/style.css' rel='stylesheet'>
    <title>로그인</title>
</head>
<body>
    <table border='0' cellspacing='0' cellpadding='0' width='100%' height='100%' align='center' valign='top'>
        <tr>
            <td width='100%' height='70' align='left' valign='middle' bgcolor='#3B9BF2'>
                &nbsp; &nbsp; <a href='../index.php'><font color='#FFFFFF'><strong>[홈]</strong></font></a>
            </td>
        </tr>
        <table border='0' width='650' height='100%' align='center' cellspacing='0' cellpadding='0' bgcolor='#EEEEEE'>
            <td width='100%' height='50' align='center' bgcolor='#FFFFFF'>&nbsp; <!-- 여백 --></td>
            <tr>
                <td width='100%' height='80' align='center'>
                    =로그인=
                </td>
            </tr>
            <tr>
                <form action='./form_login.php' name='login' method='post'>
                    <td width='100%' height='200' align='left'>
                        <li>아이디: <input type='text' name='user_id' size='10'></li>
                        <br>
                        <li>비밀번호: <input type='password' name='user_pw' size='15'></li>
                    </td>
                    <tr>
                        <td width='100%' height='30' align='center'>
                            <input type='submit' value='로그인'>
                        </td>
                    </tr>
                </form>
            </tr>
            <td width='100%' height='100%' align='center'>&nbsp;</td>
        </table>
    </table>
</body>
</html>