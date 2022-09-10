<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
</head>
<body>
    <table border='0' cellspacing='0' cellpadding='0' width='100%' height='100%' align='center' valign='top'>
        <tr>
            <td width='100%' height='70' align='left' valign='middle' bgcolor='#3B9BF2'>
                &nbsp; &nbsp; <a href='../index.php'><strong>[홈]</strong></a>
            </td>
        </tr>
        <tr>
            <td width='100%' height='100%' align='center' valign='top'>
                <table border='0' width='750' height='100%' bgcolor='#FFFFFF' align='center' cellspacing='0' cellpadding='0'>
                    <tr>
                        <form action='./form.php' name='member' method='post'>
                            <td width='100%' height=500' bgcolor='#EEEEEE' align='left' valign='top'>
                                <strong>[ 회 원 가 입 ]</strong>
                                <input type='hidden' name='id' value='test'>
                                <br>
                                <li>아이디: <input type='text' name='user_id' size='10'></li>
                                <br>
                                <li>이름: <input type='text' name='user_name' size='10'>&nbsp; &nbsp; &nbsp; 닉네임: <input type='text' name='nickname' size='10'></li>
                                <br>
                                <li>생년월일: <input type='text' name='user_id' size='10'>&nbsp; &nbsp; &nbsp; 
                                    성별: <input type='radio' name='sex' value='male'>남자 &nbsp; <input type='radio' name='sex' value='female'>여자
                                </li>
                                <br>
                                <li>연락처: <input type='text' name='tel' size='10'> &nbsp; &nbsp; 이메일: <input type='text' name'email' size='10'></li>
                                <br>
                                <li>주소: <input type='text' name='addr1' size='15'> &nbsp; &nbsp; 상세주소: <input type='text' name='addr2' size='15'></li>
                                <br>
                                <input type='submit' value='가입'>
                            </td>
                        </form>
                        <tr>
                            <td height='100%' bgcolor='#EEEEEE' align='center'>&nbsp;</td>
                        </tr>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>