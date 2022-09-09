<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
                                            <form action='form.php' name='form' method='post'>
                                                <input type='hidden' name='id' value='test'>
                                                <li>아이디: <input type='text' name='user_id' size='10'></li>
                                                <li>닉네임: <input type='text' name='user_name' size='10'></li>
                                                <li>비밀번호: <input type='password' name='user_pw' size='10'></li>
                                                <br><br>
                                                <li> 메세지 <br>
                                                <textarea name='memo' cols='100' rows='5'></textarea></li>
                                                <br><br>
                                                <input type='submit' value='등록'>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width='100%' height='50' align='center' bgcolor='#FFFFFF'>&nbsp;</td>
                                        <?
                                        include ('./lib/db_connect.php');
                                        $connect = dbConnect();

                                        // 데이터 조회
                                        $query ="SELECT * FROM `board` WHERE `id`='test'";
                                        mysql_query('set names utf8', $connect);
                                        $result = mysql_query($query, $connect);
                                        while ($data = mysql_fetch_array($result)) {

                                            $date_Y = substr($data['regdate'], 0, 4);  // 년
                                            $date_m = substr($data['regdate'], 4, 2);  // 월
                                            $date_d = substr($data['regdate'], 6, 2);  // 일
                                            $date_h = substr($data['regdate'], 8, 2);  // 시간
                                            $date_i = substr($data['regdate'], 10, 2);  // 분
                                        ?>
                                        <tr>
                                            <td width='100%' height=30' align='left' valign='top' bgcolor='#FFFFFF'>
                                                -이름: <?=$data['user_name']?> &nbsp; &nbsp;
                                                - 아이디: <?=$data['user_id']?> &nbsp; &nbsp;
                                                - 작성일: <?=$date_Y?>/<?=$date_m?>/<?=$date_d?> <?=$date_h?>:<?=$date_i?> <br>
                                                - 메세지: <?=$data['memo']?>
                                                <hr size='0.1' />
                                            </td>
                                        </tr>
                                        <? } ?>
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