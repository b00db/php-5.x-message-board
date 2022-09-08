<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MESSAGE BOARD</title>
</head>
<body>
    <table border='0' width='100%' height='100%' align='center' cellspacing='0' cellpadding='0'>
        <tr>
            <td width='100%' height='80' align='center'>
                <table border='0' width='100%' height='100%' align='center' cellspacing='0' cellpadding='0'>
                    <tr>
                        <td width='100%' height='50' align='center' bgcolor='#3B9BF2'>
                            <font color='#FFFFFF'><strong>안녕하세요. 반갑습니다.</strong></font>
                        </td>
                        <tr>
                            <td width='100%' height='50' align='center'>&nbsp; <!-- 여백 --></td>
                            <tr>
                                <td width='100%' height='30' align='center' bgcolor='#EDEDED'>메시지를 입력해주세요.</td>                                
                                <tr>
                                    <td width='100%' height='50' align='center'>&nbsp; <!-- 여백 --></td>
                                    <tr>
                                        <td width='100%' height='200' align='left' valign='top' bgcolor='#FFFFFF'>
                                            <form action='' name='' method='post'>
                                                <input type='hidden' name='idx' value='test'>
                                                <li>아이디: <input type='text' name='id' size='10'></li>
                                                <li>닉네임: <input type='text' name='name' size='10'></li>
                                                <li>비밀번호: <input type='password' name='pw' size='10'></li>
                                                <br><br>
                                                <li> 메세지 <br>
                                                <textarea name='memo' cols='100' rows='5'></textarea></li>
                                                <br><br>
                                                <input type='submit' value='등록'>
                                            </form>
                                        </td>
                                    </tr>
                                <tr>
                                        <td width='100%' height='100%' align='center' bgcolor='#FFFFFF'>&nbsp;</td>
                                    </tr>
                                </tr>
                            </tr>
                        </tr>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>