<?
error_reporting(E_ALL & ~E_NOTICE);
include ('../lib/db_connect.php');
$connect = Connect();  // DB 정보
$member = Member();  // 회원 정보
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type='text/css' href='../lib/style.css' rel='stylesheet'>
    <title>자유게시판</title>
</head>
<body>
    <table border='0' cellspacing='0' cellpadding='0' width='100%' height='100%' align='center' valign='top'>
        <tr>
            <td width='100%' height='70' align='left' valign='middle' bgcolor='#3B9BF2'>
                <table border='0' width='90%' height='70' bgcolor='#3B9BF2' align='center' cellspacing='0' cellpadding='0'>
                    <tr>
                        <td width='100%' height='70' align='left' valign='middle'>
                            <a href='../index.php'><font color='#FFFFFF'><strong>[홈]</strong></font></a>
                            &nbsp; &nbsp; &nbsp;
                            <a href='./write.php'><font color='#FFFFFF'><strong>[글쓰기]</strong></font></a>
                        </td>
                    </tr>
                    <tr>
                        <td width='100%' height='100%' align='left' valign='middle'>&nbsp;</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td width='100%' height='100%' align='center' valign='top'>&nbsp;
            <tr>
                <td width='100%' height='30' align='center' valine='top' class='font' bgcolor='#FFFFFF'> = 자유게시판 = </td>
            </tr>
            <td width='100%' height='100%' align='center' valign='top'>&nbsp;
                <table border='0' width='85%' height='100%' bgcolor='#E0DFDE' align='center' cellspacing='0' cellpadding='0'>
                    <tr>
                        <td class='font' width='10%' height='30' align='center' valign='middle'>no</td>
                        <td class='font' width='15%' height='30' align='center' valign='middle'>별명</td>
                        <td class='font' width='40%' height='30' align='center' valign='middle'>제목</td>
                        <td class='font' width='15%' height='30' align='center' valign='middle'>날짜</td>
                        <td class='font' width='10%' height='30' align='center' valign='middle'>조회수</td>
                        <?
                        $query = "SELECT * FROM board WHERE id='board' ORDER BY no DESC LIMIT 20";  // DECS: 내림차순, ASC: 오름차순
                        $result = mysqli_query($connect, $query);
                        $count = 1;
                        while ($data = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <td height='25' align='center' bgcolor='#EFEEEC'><?=$count?></td>
                            <td height='25' align='center' bgcolor='#EFEEEC'><?=$data[nickname]?></td>
                            <td height='25' align='center' bgcolor='#EFEEEC'><?=$data[title]?></td>
                            <td height='25' align='center' bgcolor='#EFEEEC'><?=$data[regdate]?></td>
                            <td height='25' align='center' bgcolor='#EFEEEC'><?=$data[hit]?></td>
                        </tr>
                        <?
                            $count++;
                        }
                        ?>
                    </tr>
                    <tr>
                        <td height='100%' colspan='5' bgcolor='#FFFFFF'>----------</td>
                        <tr>
                            <td height='100%' colspan='5' bgcolor='#FFFFFF'>&nbsp;</td></td>
                        </tr>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td width='100%' height='100%' align='center' valign='top'>&nbsp;</td>
        </tr>
    </table>
</body>
</html>