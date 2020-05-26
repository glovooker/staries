<?php
session_start();

if(!isset($_COOKIE['user'])) {
}
else {
    $_SESSION['loggedin'] = true;
	$_SESSION['name'] = $_COOKIE['user'];
	header('Location: staries-home.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="shortcut icon" href="logo.ico">
    <title>Staries</title>
    <script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Annie+Use+Your+Telescope&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:600&display=swap" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/et-line.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/vertical.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/stars.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <script src='js/removeBanner.js'></script>

    <!--Delete after config-->
    <link href="css/style.changer.css" rel="stylesheet">
    <link id="theme" href="css/theme/theme-blue.css" rel="stylesheet">
    <style media="screen">
      #redes-sociales a:before{
        border:1px solid #21759B;
      }
      #redes-sociales i:before{
        color:#21759B;
      }
      #redes-sociales{
        margin-left: 10px;
      }
    </style>



    <style>
		#stars {
      width: 1px;
      height: 1px;
      background: transparent;
      box-shadow: 802px 1101px #FFF , 1955px 275px #FFF , 1907px 1504px #FFF , 1156px 1795px #FFF , 1103px 639px #FFF , 194px 914px #FFF , 1827px 471px #FFF , 1634px 837px #FFF , 1532px 120px #FFF , 472px 127px #FFF , 806px 297px #FFF , 1932px 502px #FFF , 322px 145px #FFF , 1601px 1960px #FFF , 223px 1261px #FFF , 1517px 310px #FFF , 837px 211px #FFF , 265px 82px #FFF , 256px 1397px #FFF , 893px 1358px #FFF , 1139px 1550px #FFF , 1433px 1076px #FFF , 849px 230px #FFF , 1895px 248px #FFF , 603px 1330px #FFF , 1826px 746px #FFF , 1382px 1263px #FFF , 858px 88px #FFF , 1423px 367px #FFF , 1050px 61px #FFF , 1213px 962px #FFF , 1134px 366px #FFF , 549px 602px #FFF , 954px 250px #FFF , 86px 1902px #FFF , 1396px 831px #FFF , 11px 1051px #FFF , 1143px 1883px #FFF , 1860px 1486px #FFF , 1191px 1778px #FFF , 374px 1622px #FFF , 1613px 1525px #FFF , 639px 1616px #FFF , 1403px 1570px #FFF , 1369px 20px #FFF , 1821px 484px #FFF , 668px 61px #FFF , 213px 1007px #FFF , 1181px 1932px #FFF , 1329px 784px #FFF , 1346px 737px #FFF , 1996px 1373px #FFF , 1684px 1175px #FFF , 720px 1999px #FFF , 1319px 1280px #FFF , 1394px 915px #FFF , 355px 1597px #FFF , 1789px 205px #FFF , 1830px 26px #FFF , 352px 439px #FFF , 1069px 1453px #FFF , 109px 152px #FFF , 465px 1414px #FFF , 1978px 1421px #FFF , 1723px 440px #FFF , 643px 588px #FFF , 116px 1638px #FFF , 1625px 240px #FFF , 1556px 986px #FFF , 277px 960px #FFF , 816px 315px #FFF , 94px 136px #FFF , 326px 64px #FFF , 1402px 1255px #FFF , 1297px 935px #FFF , 768px 1346px #FFF , 1607px 1595px #FFF , 578px 793px #FFF , 785px 1805px #FFF , 436px 699px #FFF , 1953px 895px #FFF , 1555px 1870px #FFF , 1085px 9px #FFF , 1660px 53px #FFF , 1392px 1746px #FFF , 1365px 514px #FFF , 678px 1098px #FFF , 1966px 1371px #FFF , 255px 1361px #FFF , 1274px 1015px #FFF , 1036px 1714px #FFF , 666px 1558px #FFF , 1457px 392px #FFF , 991px 423px #FFF , 1553px 1255px #FFF , 361px 96px #FFF , 700px 153px #FFF , 1179px 1781px #FFF , 100px 1679px #FFF , 398px 1675px #FFF , 1392px 1644px #FFF , 1298px 899px #FFF , 346px 451px #FFF , 1600px 1661px #FFF , 1164px 1293px #FFF , 721px 860px #FFF , 1573px 248px #FFF , 805px 366px #FFF , 1658px 412px #FFF , 1877px 1803px #FFF , 1672px 137px #FFF , 1706px 112px #FFF , 1012px 1866px #FFF , 739px 433px #FFF , 1312px 1868px #FFF , 1504px 422px #FFF , 492px 1843px #FFF , 32px 1178px #FFF , 529px 202px #FFF , 321px 1171px #FFF , 329px 392px #FFF , 1118px 1858px #FFF , 226px 409px #FFF , 496px 1016px #FFF , 1115px 1980px #FFF , 488px 1875px #FFF , 1981px 1648px #FFF , 610px 55px #FFF , 1350px 1935px #FFF , 141px 383px #FFF , 215px 1031px #FFF , 1290px 1098px #FFF , 1142px 1017px #FFF , 63px 987px #FFF , 1031px 542px #FFF , 606px 1885px #FFF , 573px 1467px #FFF , 910px 1401px #FFF , 380px 1930px #FFF , 1596px 59px #FFF , 1625px 359px #FFF , 855px 1872px #FFF , 1633px 593px #FFF , 1414px 1846px #FFF , 1370px 562px #FFF , 1815px 1309px #FFF , 982px 495px #FFF , 111px 1453px #FFF , 1003px 1815px #FFF , 1458px 853px #FFF , 389px 1567px #FFF , 1539px 234px #FFF , 1510px 840px #FFF , 46px 1965px #FFF , 353px 1460px #FFF , 1680px 1695px #FFF , 449px 1999px #FFF , 281px 1990px #FFF , 539px 855px #FFF , 1839px 374px #FFF , 1153px 1388px #FFF , 1492px 448px #FFF , 956px 1602px #FFF , 1542px 770px #FFF , 1009px 1115px #FFF , 1825px 1191px #FFF , 425px 1913px #FFF , 379px 676px #FFF , 1357px 688px #FFF , 978px 1246px #FFF , 490px 1124px #FFF , 1014px 281px #FFF , 335px 261px #FFF , 1584px 854px #FFF , 420px 537px #FFF , 310px 563px #FFF , 840px 484px #FFF , 307px 1846px #FFF , 1818px 1897px #FFF , 1769px 185px #FFF , 261px 498px #FFF , 1513px 1817px #FFF , 888px 29px #FFF , 1496px 1594px #FFF , 1555px 1683px #FFF , 1489px 520px #FFF , 1741px 1465px #FFF , 1308px 1271px #FFF , 1834px 964px #FFF , 269px 1077px #FFF , 1747px 1857px #FFF , 494px 552px #FFF , 1266px 1984px #FFF , 1783px 1149px #FFF , 168px 1821px #FFF , 882px 620px #FFF , 1709px 570px #FFF , 309px 754px #FFF , 718px 2px #FFF , 1529px 1364px #FFF , 79px 1885px #FFF , 59px 930px #FFF , 1782px 78px #FFF , 1862px 436px #FFF , 1307px 1191px #FFF , 900px 1379px #FFF , 169px 46px #FFF , 1672px 1013px #FFF , 539px 1123px #FFF , 488px 598px #FFF , 891px 1008px #FFF , 61px 1946px #FFF , 598px 129px #FFF , 1117px 384px #FFF , 1568px 333px #FFF , 509px 504px #FFF , 1535px 901px #FFF , 588px 1438px #FFF , 1261px 1877px #FFF , 1550px 841px #FFF , 1041px 1480px #FFF , 942px 1949px #FFF , 87px 323px #FFF , 1716px 1043px #FFF , 36px 618px #FFF , 1861px 429px #FFF , 1901px 237px #FFF , 463px 875px #FFF , 1092px 1044px #FFF , 901px 1469px #FFF , 1919px 1188px #FFF , 381px 617px #FFF , 531px 8px #FFF , 957px 1767px #FFF , 211px 451px #FFF , 1241px 1189px #FFF , 1239px 1389px #FFF , 640px 1949px #FFF , 788px 105px #FFF , 1489px 1146px #FFF , 498px 1089px #FFF , 632px 671px #FFF , 1877px 623px #FFF , 686px 69px #FFF , 719px 1335px #FFF , 1286px 914px #FFF , 816px 1097px #FFF , 537px 924px #FFF , 1035px 133px #FFF , 1933px 1386px #FFF , 233px 145px #FFF , 835px 1580px #FFF , 1598px 554px #FFF , 393px 1158px #FFF , 297px 1320px #FFF , 877px 670px #FFF , 1178px 1784px #FFF , 1797px 1616px #FFF , 531px 152px #FFF , 419px 1225px #FFF , 1594px 423px #FFF , 134px 66px #FFF , 1415px 1881px #FFF , 585px 101px #FFF , 1137px 930px #FFF , 929px 591px #FFF , 1964px 634px #FFF , 1092px 756px #FFF , 1036px 1063px #FFF , 698px 1152px #FFF , 1255px 1701px #FFF , 1522px 243px #FFF , 113px 709px #FFF , 851px 438px #FFF , 1717px 1925px #FFF , 591px 172px #FFF , 1383px 946px #FFF , 1083px 391px #FFF , 1032px 1137px #FFF , 473px 842px #FFF , 1791px 1040px #FFF , 160px 1705px #FFF , 480px 27px #FFF , 1559px 124px #FFF , 1662px 1792px #FFF , 1442px 1660px #FFF , 175px 1105px #FFF , 1995px 1459px #FFF , 1346px 59px #FFF , 465px 451px #FFF , 1462px 931px #FFF , 165px 715px #FFF , 926px 1303px #FFF , 401px 521px #FFF , 1144px 931px #FFF , 1801px 79px #FFF , 1631px 1384px #FFF , 1492px 1716px #FFF , 1901px 873px #FFF , 1229px 1917px #FFF , 612px 1004px #FFF , 503px 1096px #FFF , 237px 130px #FFF , 1126px 512px #FFF , 1123px 146px #FFF , 1911px 729px #FFF , 1744px 1905px #FFF , 1414px 1402px #FFF , 510px 1379px #FFF , 312px 1367px #FFF , 657px 799px #FFF , 166px 900px #FFF , 1046px 914px #FFF , 68px 1220px #FFF , 541px 97px #FFF , 1894px 1303px #FFF , 1528px 1094px #FFF , 1443px 987px #FFF , 1427px 1667px #FFF , 387px 250px #FFF , 1219px 1995px #FFF , 627px 433px #FFF , 1377px 638px #FFF , 1740px 1139px #FFF , 671px 1731px #FFF , 41px 608px #FFF , 1021px 754px #FFF , 327px 1528px #FFF , 1062px 499px #FFF , 107px 450px #FFF , 134px 939px #FFF , 1786px 117px #FFF , 949px 658px #FFF , 1350px 23px #FFF , 1641px 127px #FFF , 1234px 48px #FFF , 50px 1498px #FFF , 1647px 707px #FFF , 58px 1751px #FFF , 864px 1446px #FFF , 1757px 1750px #FFF , 1765px 1143px #FFF , 1714px 93px #FFF , 294px 79px #FFF , 919px 1115px #FFF , 697px 256px #FFF , 1891px 1334px #FFF , 77px 1104px #FFF , 1331px 246px #FFF , 1867px 1226px #FFF , 1870px 475px #FFF , 1530px 569px #FFF , 63px 759px #FFF , 31px 1449px #FFF , 877px 958px #FFF , 452px 836px #FFF , 597px 1541px #FFF , 1053px 636px #FFF , 92px 451px #FFF , 156px 288px #FFF , 1926px 1568px #FFF , 1645px 1830px #FFF , 1505px 499px #FFF , 1488px 1747px #FFF , 292px 453px #FFF , 81px 1751px #FFF , 1248px 539px #FFF , 1725px 1924px #FFF , 1862px 1580px #FFF , 1224px 1664px #FFF , 159px 1258px #FFF , 1747px 1909px #FFF , 1906px 1061px #FFF , 845px 1586px #FFF , 1510px 1814px #FFF , 1907px 767px #FFF , 267px 508px #FFF , 1759px 278px #FFF , 10px 1741px #FFF , 323px 596px #FFF , 134px 1804px #FFF , 613px 1253px #FFF , 1181px 661px #FFF , 1093px 1320px #FFF , 1582px 118px #FFF , 33px 444px #FFF , 254px 1782px #FFF , 1970px 1416px #FFF , 943px 535px #FFF , 547px 1231px #FFF , 145px 1348px #FFF , 602px 1928px #FFF , 1673px 251px #FFF , 1728px 497px #FFF , 1255px 1274px #FFF , 474px 180px #FFF , 1254px 1122px #FFF , 1199px 1160px #FFF , 1895px 637px #FFF , 1649px 438px #FFF , 599px 416px #FFF , 1015px 11px #FFF , 247px 417px #FFF , 744px 1707px #FFF , 1367px 1682px #FFF , 1168px 831px #FFF , 239px 515px #FFF , 347px 829px #FFF , 131px 581px #FFF , 210px 391px #FFF , 840px 1639px #FFF , 1987px 1186px #FFF , 1141px 1818px #FFF , 1722px 1095px #FFF , 384px 856px #FFF , 1621px 1603px #FFF , 1465px 148px #FFF , 586px 182px #FFF , 1803px 1690px #FFF , 1748px 725px #FFF , 294px 1034px #FFF , 861px 1519px #FFF , 1981px 1408px #FFF , 1739px 1421px #FFF , 756px 1843px #FFF , 642px 652px #FFF , 1190px 139px #FFF , 1932px 554px #FFF , 1355px 1004px #FFF , 1778px 876px #FFF , 909px 1937px #FFF , 401px 996px #FFF , 1459px 1901px #FFF , 483px 1279px #FFF , 1268px 992px #FFF , 410px 1408px #FFF , 271px 158px #FFF , 360px 1634px #FFF , 1886px 1262px #FFF , 201px 1526px #FFF , 1812px 1157px #FFF , 268px 156px #FFF , 743px 1309px #FFF , 860px 190px #FFF , 778px 75px #FFF , 1367px 786px #FFF , 746px 1360px #FFF , 359px 1510px #FFF , 1586px 295px #FFF , 1379px 580px #FFF , 1862px 1888px #FFF , 932px 921px #FFF , 306px 1771px #FFF , 609px 1196px #FFF , 1028px 1246px #FFF , 730px 595px #FFF , 1588px 1969px #FFF , 1516px 1536px #FFF , 1201px 1099px #FFF , 1945px 245px #FFF , 814px 1350px #FFF , 1296px 1370px #FFF , 796px 71px #FFF , 1804px 385px #FFF , 1624px 138px #FFF , 19px 85px #FFF , 361px 1642px #FFF , 1957px 819px #FFF , 1212px 201px #FFF , 449px 430px #FFF , 601px 1362px #FFF , 1474px 852px #FFF , 487px 1456px #FFF , 1974px 121px #FFF , 1274px 842px #FFF , 1658px 196px #FFF , 1364px 1190px #FFF , 1410px 1346px #FFF , 1003px 845px #FFF , 1515px 1094px #FFF , 962px 854px #FFF , 605px 1008px #FFF , 1723px 1127px #FFF , 1792px 141px #FFF , 1824px 299px #FFF , 1804px 1410px #FFF , 691px 1167px #FFF , 638px 1177px #FFF , 154px 1237px #FFF , 1686px 1256px #FFF , 1883px 1172px #FFF , 533px 1698px #FFF , 922px 1772px #FFF , 705px 1382px #FFF , 1922px 1182px #FFF , 360px 1074px #FFF , 1557px 884px #FFF , 35px 438px #FFF , 223px 995px #FFF , 161px 189px #FFF , 1840px 1020px #FFF , 696px 1425px #FFF , 575px 1680px #FFF , 1922px 1317px #FFF , 953px 488px #FFF , 1630px 1563px #FFF , 466px 605px #FFF , 168px 1780px #FFF , 387px 1197px #FFF , 644px 389px #FFF , 1579px 895px #FFF , 1542px 1923px #FFF , 155px 804px #FFF , 1353px 251px #FFF , 780px 1829px #FFF , 1645px 830px #FFF , 1731px 1782px #FFF , 153px 698px #FFF , 210px 901px #FFF , 1199px 1629px #FFF , 705px 1977px #FFF , 558px 99px #FFF , 112px 703px #FFF , 309px 1111px #FFF , 430px 1937px #FFF , 1858px 607px #FFF , 337px 329px #FFF , 171px 486px #FFF , 834px 110px #FFF , 1342px 310px #FFF , 1642px 291px #FFF , 1958px 929px #FFF , 1107px 689px #FFF , 1475px 1117px #FFF , 1418px 59px #FFF , 953px 1455px #FFF , 1086px 1466px #FFF , 227px 903px #FFF , 1511px 556px #FFF , 1312px 1834px #FFF , 1233px 37px #FFF , 1754px 1172px #FFF , 97px 370px #FFF , 1203px 1184px #FFF , 1023px 870px #FFF , 1305px 1314px #FFF , 1700px 587px #FFF , 290px 36px #FFF , 1313px 367px #FFF , 1967px 1793px #FFF , 1871px 1571px #FFF , 203px 1979px #FFF , 761px 787px #FFF , 447px 443px #FFF , 790px 1118px #FFF , 980px 41px #FFF , 910px 755px #FFF , 1539px 1880px #FFF , 703px 1606px #FFF , 434px 676px #FFF , 1318px 1072px #FFF , 691px 410px #FFF , 1062px 1246px #FFF , 1349px 1756px #FFF , 750px 1397px #FFF , 1457px 490px #FFF , 1114px 1295px #FFF , 604px 1407px #FFF , 329px 1291px #FFF , 1095px 1305px #FFF , 877px 715px #FFF , 1234px 627px #FFF , 1266px 1122px #FFF , 836px 1284px #FFF , 723px 884px #FFF , 474px 1978px #FFF , 1160px 941px #FFF , 1890px 617px #FFF , 1586px 173px #FFF , 1142px 1089px #FFF , 606px 4px #FFF , 915px 836px #FFF , 1377px 379px #FFF , 1254px 197px #FFF , 1165px 628px #FFF , 1243px 901px #FFF , 935px 1133px #FFF , 624px 556px #FFF , 1502px 864px #FFF , 32px 1321px #FFF , 1795px 113px #FFF , 1372px 1234px #FFF , 1633px 550px #FFF , 67px 1363px #FFF , 95px 1960px #FFF , 1186px 1850px #FFF , 890px 1150px #FFF , 747px 729px #FFF , 543px 1565px #FFF , 306px 1184px #FFF , 484px 1106px #FFF , 609px 256px #FFF , 1092px 1882px #FFF , 1329px 794px #FFF , 1159px 1164px #FFF , 127px 779px #FFF , 1300px 1689px #FFF , 532px 1599px #FFF , 1361px 1309px #FFF , 940px 328px #FFF , 168px 259px #FFF , 1888px 516px #FFF , 1337px 259px #FFF , 1162px 1194px #FFF , 1713px 140px #FFF , 1580px 756px #FFF , 988px 1138px #FFF , 267px 623px #FFF , 264px 1385px #FFF , 550px 1210px #FFF , 786px 863px #FFF , 1858px 1880px #FFF , 393px 1102px #FFF , 1929px 1937px #FFF , 552px 684px #FFF , 588px 1821px #FFF , 1823px 112px #FFF , 883px 575px #FFF , 1843px 517px #FFF , 1750px 723px #FFF , 1216px 117px #FFF , 1061px 231px #FFF , 1454px 1786px #FFF , 1665px 1757px #FFF , 1147px 483px #FFF , 156px 306px #FFF , 1994px 9px #FFF , 1204px 1168px #FFF , 1615px 885px #FFF , 866px 592px #FFF , 360px 1646px #FFF , 1008px 1327px #FFF , 1142px 1012px #FFF , 1678px 273px #FFF , 313px 406px #FFF , 28px 436px #FFF , 563px 1315px #FFF , 90px 1800px #FFF , 1348px 1905px #FFF , 762px 880px #FFF , 377px 182px #FFF , 1632px 1134px #FFF , 1522px 1440px #FFF , 218px 971px #FFF , 1300px 27px #FFF , 1644px 868px #FFF , 1700px 5px #FFF , 1753px 1726px #FFF , 340px 599px #FFF , 1759px 823px #FFF , 1433px 1847px #FFF , 1395px 1289px #FFF , 1916px 593px #FFF , 1102px 1254px #FFF , 254px 1557px #FFF , 972px 1929px #FFF , 900px 1200px #FFF , 1949px 829px #FFF , 949px 683px #FFF , 20px 902px #FFF , 708px 676px #FFF , 1880px 103px #FFF , 1442px 231px #FFF , 1190px 1150px #FFF , 5px 13px #FFF , 1962px 550px #FFF , 180px 1568px #FFF , 1781px 1857px #FFF , 336px 75px #FFF , 1905px 1786px #FFF , 647px 1313px #FFF , 1093px 848px #FFF , 872px 1647px #FFF , 836px 1864px #FFF , 667px 1178px #FFF , 1001px 1671px #FFF , 574px 1066px #FFF , 1607px 198px #FFF , 1257px 1367px #FFF , 943px 257px #FFF , 1752px 486px #FFF , 71px 1066px #FFF , 1966px 1724px #FFF , 746px 595px #FFF , 1971px 1363px #FFF , 573px 1939px #FFF , 946px 1749px #FFF , 889px 1424px #FFF , 892px 1323px #FFF , 668px 650px #FFF;
      animation: animStar 50s linear infinite;
    }
    #stars:after {
      content: " ";
      position: absolute;
      top: 2000px;
      width: 1px;
      height: 1px;
      background: transparent;
      box-shadow: 802px 1101px #FFF , 1955px 275px #FFF , 1907px 1504px #FFF , 1156px 1795px #FFF , 1103px 639px #FFF , 194px 914px #FFF , 1827px 471px #FFF , 1634px 837px #FFF , 1532px 120px #FFF , 472px 127px #FFF , 806px 297px #FFF , 1932px 502px #FFF , 322px 145px #FFF , 1601px 1960px #FFF , 223px 1261px #FFF , 1517px 310px #FFF , 837px 211px #FFF , 265px 82px #FFF , 256px 1397px #FFF , 893px 1358px #FFF , 1139px 1550px #FFF , 1433px 1076px #FFF , 849px 230px #FFF , 1895px 248px #FFF , 603px 1330px #FFF , 1826px 746px #FFF , 1382px 1263px #FFF , 858px 88px #FFF , 1423px 367px #FFF , 1050px 61px #FFF , 1213px 962px #FFF , 1134px 366px #FFF , 549px 602px #FFF , 954px 250px #FFF , 86px 1902px #FFF , 1396px 831px #FFF , 11px 1051px #FFF , 1143px 1883px #FFF , 1860px 1486px #FFF , 1191px 1778px #FFF , 374px 1622px #FFF , 1613px 1525px #FFF , 639px 1616px #FFF , 1403px 1570px #FFF , 1369px 20px #FFF , 1821px 484px #FFF , 668px 61px #FFF , 213px 1007px #FFF , 1181px 1932px #FFF , 1329px 784px #FFF , 1346px 737px #FFF , 1996px 1373px #FFF , 1684px 1175px #FFF , 720px 1999px #FFF , 1319px 1280px #FFF , 1394px 915px #FFF , 355px 1597px #FFF , 1789px 205px #FFF , 1830px 26px #FFF , 352px 439px #FFF , 1069px 1453px #FFF , 109px 152px #FFF , 465px 1414px #FFF , 1978px 1421px #FFF , 1723px 440px #FFF , 643px 588px #FFF , 116px 1638px #FFF , 1625px 240px #FFF , 1556px 986px #FFF , 277px 960px #FFF , 816px 315px #FFF , 94px 136px #FFF , 326px 64px #FFF , 1402px 1255px #FFF , 1297px 935px #FFF , 768px 1346px #FFF , 1607px 1595px #FFF , 578px 793px #FFF , 785px 1805px #FFF , 436px 699px #FFF , 1953px 895px #FFF , 1555px 1870px #FFF , 1085px 9px #FFF , 1660px 53px #FFF , 1392px 1746px #FFF , 1365px 514px #FFF , 678px 1098px #FFF , 1966px 1371px #FFF , 255px 1361px #FFF , 1274px 1015px #FFF , 1036px 1714px #FFF , 666px 1558px #FFF , 1457px 392px #FFF , 991px 423px #FFF , 1553px 1255px #FFF , 361px 96px #FFF , 700px 153px #FFF , 1179px 1781px #FFF , 100px 1679px #FFF , 398px 1675px #FFF , 1392px 1644px #FFF , 1298px 899px #FFF , 346px 451px #FFF , 1600px 1661px #FFF , 1164px 1293px #FFF , 721px 860px #FFF , 1573px 248px #FFF , 805px 366px #FFF , 1658px 412px #FFF , 1877px 1803px #FFF , 1672px 137px #FFF , 1706px 112px #FFF , 1012px 1866px #FFF , 739px 433px #FFF , 1312px 1868px #FFF , 1504px 422px #FFF , 492px 1843px #FFF , 32px 1178px #FFF , 529px 202px #FFF , 321px 1171px #FFF , 329px 392px #FFF , 1118px 1858px #FFF , 226px 409px #FFF , 496px 1016px #FFF , 1115px 1980px #FFF , 488px 1875px #FFF , 1981px 1648px #FFF , 610px 55px #FFF , 1350px 1935px #FFF , 141px 383px #FFF , 215px 1031px #FFF , 1290px 1098px #FFF , 1142px 1017px #FFF , 63px 987px #FFF , 1031px 542px #FFF , 606px 1885px #FFF , 573px 1467px #FFF , 910px 1401px #FFF , 380px 1930px #FFF , 1596px 59px #FFF , 1625px 359px #FFF , 855px 1872px #FFF , 1633px 593px #FFF , 1414px 1846px #FFF , 1370px 562px #FFF , 1815px 1309px #FFF , 982px 495px #FFF , 111px 1453px #FFF , 1003px 1815px #FFF , 1458px 853px #FFF , 389px 1567px #FFF , 1539px 234px #FFF , 1510px 840px #FFF , 46px 1965px #FFF , 353px 1460px #FFF , 1680px 1695px #FFF , 449px 1999px #FFF , 281px 1990px #FFF , 539px 855px #FFF , 1839px 374px #FFF , 1153px 1388px #FFF , 1492px 448px #FFF , 956px 1602px #FFF , 1542px 770px #FFF , 1009px 1115px #FFF , 1825px 1191px #FFF , 425px 1913px #FFF , 379px 676px #FFF , 1357px 688px #FFF , 978px 1246px #FFF , 490px 1124px #FFF , 1014px 281px #FFF , 335px 261px #FFF , 1584px 854px #FFF , 420px 537px #FFF , 310px 563px #FFF , 840px 484px #FFF , 307px 1846px #FFF , 1818px 1897px #FFF , 1769px 185px #FFF , 261px 498px #FFF , 1513px 1817px #FFF , 888px 29px #FFF , 1496px 1594px #FFF , 1555px 1683px #FFF , 1489px 520px #FFF , 1741px 1465px #FFF , 1308px 1271px #FFF , 1834px 964px #FFF , 269px 1077px #FFF , 1747px 1857px #FFF , 494px 552px #FFF , 1266px 1984px #FFF , 1783px 1149px #FFF , 168px 1821px #FFF , 882px 620px #FFF , 1709px 570px #FFF , 309px 754px #FFF , 718px 2px #FFF , 1529px 1364px #FFF , 79px 1885px #FFF , 59px 930px #FFF , 1782px 78px #FFF , 1862px 436px #FFF , 1307px 1191px #FFF , 900px 1379px #FFF , 169px 46px #FFF , 1672px 1013px #FFF , 539px 1123px #FFF , 488px 598px #FFF , 891px 1008px #FFF , 61px 1946px #FFF , 598px 129px #FFF , 1117px 384px #FFF , 1568px 333px #FFF , 509px 504px #FFF , 1535px 901px #FFF , 588px 1438px #FFF , 1261px 1877px #FFF , 1550px 841px #FFF , 1041px 1480px #FFF , 942px 1949px #FFF , 87px 323px #FFF , 1716px 1043px #FFF , 36px 618px #FFF , 1861px 429px #FFF , 1901px 237px #FFF , 463px 875px #FFF , 1092px 1044px #FFF , 901px 1469px #FFF , 1919px 1188px #FFF , 381px 617px #FFF , 531px 8px #FFF , 957px 1767px #FFF , 211px 451px #FFF , 1241px 1189px #FFF , 1239px 1389px #FFF , 640px 1949px #FFF , 788px 105px #FFF , 1489px 1146px #FFF , 498px 1089px #FFF , 632px 671px #FFF , 1877px 623px #FFF , 686px 69px #FFF , 719px 1335px #FFF , 1286px 914px #FFF , 816px 1097px #FFF , 537px 924px #FFF , 1035px 133px #FFF , 1933px 1386px #FFF , 233px 145px #FFF , 835px 1580px #FFF , 1598px 554px #FFF , 393px 1158px #FFF , 297px 1320px #FFF , 877px 670px #FFF , 1178px 1784px #FFF , 1797px 1616px #FFF , 531px 152px #FFF , 419px 1225px #FFF , 1594px 423px #FFF , 134px 66px #FFF , 1415px 1881px #FFF , 585px 101px #FFF , 1137px 930px #FFF , 929px 591px #FFF , 1964px 634px #FFF , 1092px 756px #FFF , 1036px 1063px #FFF , 698px 1152px #FFF , 1255px 1701px #FFF , 1522px 243px #FFF , 113px 709px #FFF , 851px 438px #FFF , 1717px 1925px #FFF , 591px 172px #FFF , 1383px 946px #FFF , 1083px 391px #FFF , 1032px 1137px #FFF , 473px 842px #FFF , 1791px 1040px #FFF , 160px 1705px #FFF , 480px 27px #FFF , 1559px 124px #FFF , 1662px 1792px #FFF , 1442px 1660px #FFF , 175px 1105px #FFF , 1995px 1459px #FFF , 1346px 59px #FFF , 465px 451px #FFF , 1462px 931px #FFF , 165px 715px #FFF , 926px 1303px #FFF , 401px 521px #FFF , 1144px 931px #FFF , 1801px 79px #FFF , 1631px 1384px #FFF , 1492px 1716px #FFF , 1901px 873px #FFF , 1229px 1917px #FFF , 612px 1004px #FFF , 503px 1096px #FFF , 237px 130px #FFF , 1126px 512px #FFF , 1123px 146px #FFF , 1911px 729px #FFF , 1744px 1905px #FFF , 1414px 1402px #FFF , 510px 1379px #FFF , 312px 1367px #FFF , 657px 799px #FFF , 166px 900px #FFF , 1046px 914px #FFF , 68px 1220px #FFF , 541px 97px #FFF , 1894px 1303px #FFF , 1528px 1094px #FFF , 1443px 987px #FFF , 1427px 1667px #FFF , 387px 250px #FFF , 1219px 1995px #FFF , 627px 433px #FFF , 1377px 638px #FFF , 1740px 1139px #FFF , 671px 1731px #FFF , 41px 608px #FFF , 1021px 754px #FFF , 327px 1528px #FFF , 1062px 499px #FFF , 107px 450px #FFF , 134px 939px #FFF , 1786px 117px #FFF , 949px 658px #FFF , 1350px 23px #FFF , 1641px 127px #FFF , 1234px 48px #FFF , 50px 1498px #FFF , 1647px 707px #FFF , 58px 1751px #FFF , 864px 1446px #FFF , 1757px 1750px #FFF , 1765px 1143px #FFF , 1714px 93px #FFF , 294px 79px #FFF , 919px 1115px #FFF , 697px 256px #FFF , 1891px 1334px #FFF , 77px 1104px #FFF , 1331px 246px #FFF , 1867px 1226px #FFF , 1870px 475px #FFF , 1530px 569px #FFF , 63px 759px #FFF , 31px 1449px #FFF , 877px 958px #FFF , 452px 836px #FFF , 597px 1541px #FFF , 1053px 636px #FFF , 92px 451px #FFF , 156px 288px #FFF , 1926px 1568px #FFF , 1645px 1830px #FFF , 1505px 499px #FFF , 1488px 1747px #FFF , 292px 453px #FFF , 81px 1751px #FFF , 1248px 539px #FFF , 1725px 1924px #FFF , 1862px 1580px #FFF , 1224px 1664px #FFF , 159px 1258px #FFF , 1747px 1909px #FFF , 1906px 1061px #FFF , 845px 1586px #FFF , 1510px 1814px #FFF , 1907px 767px #FFF , 267px 508px #FFF , 1759px 278px #FFF , 10px 1741px #FFF , 323px 596px #FFF , 134px 1804px #FFF , 613px 1253px #FFF , 1181px 661px #FFF , 1093px 1320px #FFF , 1582px 118px #FFF , 33px 444px #FFF , 254px 1782px #FFF , 1970px 1416px #FFF , 943px 535px #FFF , 547px 1231px #FFF , 145px 1348px #FFF , 602px 1928px #FFF , 1673px 251px #FFF , 1728px 497px #FFF , 1255px 1274px #FFF , 474px 180px #FFF , 1254px 1122px #FFF , 1199px 1160px #FFF , 1895px 637px #FFF , 1649px 438px #FFF , 599px 416px #FFF , 1015px 11px #FFF , 247px 417px #FFF , 744px 1707px #FFF , 1367px 1682px #FFF , 1168px 831px #FFF , 239px 515px #FFF , 347px 829px #FFF , 131px 581px #FFF , 210px 391px #FFF , 840px 1639px #FFF , 1987px 1186px #FFF , 1141px 1818px #FFF , 1722px 1095px #FFF , 384px 856px #FFF , 1621px 1603px #FFF , 1465px 148px #FFF , 586px 182px #FFF , 1803px 1690px #FFF , 1748px 725px #FFF , 294px 1034px #FFF , 861px 1519px #FFF , 1981px 1408px #FFF , 1739px 1421px #FFF , 756px 1843px #FFF , 642px 652px #FFF , 1190px 139px #FFF , 1932px 554px #FFF , 1355px 1004px #FFF , 1778px 876px #FFF , 909px 1937px #FFF , 401px 996px #FFF , 1459px 1901px #FFF , 483px 1279px #FFF , 1268px 992px #FFF , 410px 1408px #FFF , 271px 158px #FFF , 360px 1634px #FFF , 1886px 1262px #FFF , 201px 1526px #FFF , 1812px 1157px #FFF , 268px 156px #FFF , 743px 1309px #FFF , 860px 190px #FFF , 778px 75px #FFF , 1367px 786px #FFF , 746px 1360px #FFF , 359px 1510px #FFF , 1586px 295px #FFF , 1379px 580px #FFF , 1862px 1888px #FFF , 932px 921px #FFF , 306px 1771px #FFF , 609px 1196px #FFF , 1028px 1246px #FFF , 730px 595px #FFF , 1588px 1969px #FFF , 1516px 1536px #FFF , 1201px 1099px #FFF , 1945px 245px #FFF , 814px 1350px #FFF , 1296px 1370px #FFF , 796px 71px #FFF , 1804px 385px #FFF , 1624px 138px #FFF , 19px 85px #FFF , 361px 1642px #FFF , 1957px 819px #FFF , 1212px 201px #FFF , 449px 430px #FFF , 601px 1362px #FFF , 1474px 852px #FFF , 487px 1456px #FFF , 1974px 121px #FFF , 1274px 842px #FFF , 1658px 196px #FFF , 1364px 1190px #FFF , 1410px 1346px #FFF , 1003px 845px #FFF , 1515px 1094px #FFF , 962px 854px #FFF , 605px 1008px #FFF , 1723px 1127px #FFF , 1792px 141px #FFF , 1824px 299px #FFF , 1804px 1410px #FFF , 691px 1167px #FFF , 638px 1177px #FFF , 154px 1237px #FFF , 1686px 1256px #FFF , 1883px 1172px #FFF , 533px 1698px #FFF , 922px 1772px #FFF , 705px 1382px #FFF , 1922px 1182px #FFF , 360px 1074px #FFF , 1557px 884px #FFF , 35px 438px #FFF , 223px 995px #FFF , 161px 189px #FFF , 1840px 1020px #FFF , 696px 1425px #FFF , 575px 1680px #FFF , 1922px 1317px #FFF , 953px 488px #FFF , 1630px 1563px #FFF , 466px 605px #FFF , 168px 1780px #FFF , 387px 1197px #FFF , 644px 389px #FFF , 1579px 895px #FFF , 1542px 1923px #FFF , 155px 804px #FFF , 1353px 251px #FFF , 780px 1829px #FFF , 1645px 830px #FFF , 1731px 1782px #FFF , 153px 698px #FFF , 210px 901px #FFF , 1199px 1629px #FFF , 705px 1977px #FFF , 558px 99px #FFF , 112px 703px #FFF , 309px 1111px #FFF , 430px 1937px #FFF , 1858px 607px #FFF , 337px 329px #FFF , 171px 486px #FFF , 834px 110px #FFF , 1342px 310px #FFF , 1642px 291px #FFF , 1958px 929px #FFF , 1107px 689px #FFF , 1475px 1117px #FFF , 1418px 59px #FFF , 953px 1455px #FFF , 1086px 1466px #FFF , 227px 903px #FFF , 1511px 556px #FFF , 1312px 1834px #FFF , 1233px 37px #FFF , 1754px 1172px #FFF , 97px 370px #FFF , 1203px 1184px #FFF , 1023px 870px #FFF , 1305px 1314px #FFF , 1700px 587px #FFF , 290px 36px #FFF , 1313px 367px #FFF , 1967px 1793px #FFF , 1871px 1571px #FFF , 203px 1979px #FFF , 761px 787px #FFF , 447px 443px #FFF , 790px 1118px #FFF , 980px 41px #FFF , 910px 755px #FFF , 1539px 1880px #FFF , 703px 1606px #FFF , 434px 676px #FFF , 1318px 1072px #FFF , 691px 410px #FFF , 1062px 1246px #FFF , 1349px 1756px #FFF , 750px 1397px #FFF , 1457px 490px #FFF , 1114px 1295px #FFF , 604px 1407px #FFF , 329px 1291px #FFF , 1095px 1305px #FFF , 877px 715px #FFF , 1234px 627px #FFF , 1266px 1122px #FFF , 836px 1284px #FFF , 723px 884px #FFF , 474px 1978px #FFF , 1160px 941px #FFF , 1890px 617px #FFF , 1586px 173px #FFF , 1142px 1089px #FFF , 606px 4px #FFF , 915px 836px #FFF , 1377px 379px #FFF , 1254px 197px #FFF , 1165px 628px #FFF , 1243px 901px #FFF , 935px 1133px #FFF , 624px 556px #FFF , 1502px 864px #FFF , 32px 1321px #FFF , 1795px 113px #FFF , 1372px 1234px #FFF , 1633px 550px #FFF , 67px 1363px #FFF , 95px 1960px #FFF , 1186px 1850px #FFF , 890px 1150px #FFF , 747px 729px #FFF , 543px 1565px #FFF , 306px 1184px #FFF , 484px 1106px #FFF , 609px 256px #FFF , 1092px 1882px #FFF , 1329px 794px #FFF , 1159px 1164px #FFF , 127px 779px #FFF , 1300px 1689px #FFF , 532px 1599px #FFF , 1361px 1309px #FFF , 940px 328px #FFF , 168px 259px #FFF , 1888px 516px #FFF , 1337px 259px #FFF , 1162px 1194px #FFF , 1713px 140px #FFF , 1580px 756px #FFF , 988px 1138px #FFF , 267px 623px #FFF , 264px 1385px #FFF , 550px 1210px #FFF , 786px 863px #FFF , 1858px 1880px #FFF , 393px 1102px #FFF , 1929px 1937px #FFF , 552px 684px #FFF , 588px 1821px #FFF , 1823px 112px #FFF , 883px 575px #FFF , 1843px 517px #FFF , 1750px 723px #FFF , 1216px 117px #FFF , 1061px 231px #FFF , 1454px 1786px #FFF , 1665px 1757px #FFF , 1147px 483px #FFF , 156px 306px #FFF , 1994px 9px #FFF , 1204px 1168px #FFF , 1615px 885px #FFF , 866px 592px #FFF , 360px 1646px #FFF , 1008px 1327px #FFF , 1142px 1012px #FFF , 1678px 273px #FFF , 313px 406px #FFF , 28px 436px #FFF , 563px 1315px #FFF , 90px 1800px #FFF , 1348px 1905px #FFF , 762px 880px #FFF , 377px 182px #FFF , 1632px 1134px #FFF , 1522px 1440px #FFF , 218px 971px #FFF , 1300px 27px #FFF , 1644px 868px #FFF , 1700px 5px #FFF , 1753px 1726px #FFF , 340px 599px #FFF , 1759px 823px #FFF , 1433px 1847px #FFF , 1395px 1289px #FFF , 1916px 593px #FFF , 1102px 1254px #FFF , 254px 1557px #FFF , 972px 1929px #FFF , 900px 1200px #FFF , 1949px 829px #FFF , 949px 683px #FFF , 20px 902px #FFF , 708px 676px #FFF , 1880px 103px #FFF , 1442px 231px #FFF , 1190px 1150px #FFF , 5px 13px #FFF , 1962px 550px #FFF , 180px 1568px #FFF , 1781px 1857px #FFF , 336px 75px #FFF , 1905px 1786px #FFF , 647px 1313px #FFF , 1093px 848px #FFF , 872px 1647px #FFF , 836px 1864px #FFF , 667px 1178px #FFF , 1001px 1671px #FFF , 574px 1066px #FFF , 1607px 198px #FFF , 1257px 1367px #FFF , 943px 257px #FFF , 1752px 486px #FFF , 71px 1066px #FFF , 1966px 1724px #FFF , 746px 595px #FFF , 1971px 1363px #FFF , 573px 1939px #FFF , 946px 1749px #FFF , 889px 1424px #FFF , 892px 1323px #FFF , 668px 650px #FFF;
    }

    #stars2 {
      width: 2px;
      height: 2px;
      background: transparent;
      box-shadow: 1374px 1535px #FFF , 1065px 1314px #FFF , 872px 761px #FFF , 515px 1524px #FFF , 351px 1790px #FFF , 307px 201px #FFF , 1091px 416px #FFF , 1316px 447px #FFF , 180px 226px #FFF , 1581px 1961px #FFF , 479px 621px #FFF , 1792px 919px #FFF , 1888px 1707px #FFF , 117px 1143px #FFF , 1003px 934px #FFF , 577px 237px #FFF , 1381px 1721px #FFF , 1926px 49px #FFF , 551px 824px #FFF , 1645px 937px #FFF , 8px 3px #FFF , 90px 1353px #FFF , 1691px 1760px #FFF , 737px 588px #FFF , 16px 1300px #FFF , 1366px 1944px #FFF , 1927px 1160px #FFF , 1594px 1308px #FFF , 1959px 1214px #FFF , 1877px 1564px #FFF , 1138px 679px #FFF , 1736px 1104px #FFF , 596px 1674px #FFF , 270px 684px #FFF , 1489px 1644px #FFF , 15px 878px #FFF , 123px 894px #FFF , 478px 966px #FFF , 475px 1723px #FFF , 366px 834px #FFF , 750px 772px #FFF , 1473px 1377px #FFF , 1938px 725px #FFF , 181px 1902px #FFF , 568px 225px #FFF , 1404px 734px #FFF , 1215px 1438px #FFF , 722px 831px #FFF , 554px 1329px #FFF , 99px 250px #FFF , 1977px 265px #FFF , 791px 1286px #FFF , 349px 1486px #FFF , 1008px 313px #FFF , 1222px 1378px #FFF , 1719px 388px #FFF , 611px 1739px #FFF , 1679px 732px #FFF , 1923px 595px #FFF , 1811px 671px #FFF , 1838px 965px #FFF , 756px 218px #FFF , 1567px 472px #FFF , 1772px 362px #FFF , 1165px 1539px #FFF , 1129px 1178px #FFF , 195px 423px #FFF , 1342px 166px #FFF , 41px 1315px #FFF , 885px 1009px #FFF , 287px 1415px #FFF , 1904px 1860px #FFF , 252px 1504px #FFF , 1234px 1682px #FFF , 1897px 1253px #FFF , 1702px 1846px #FFF , 1336px 428px #FFF , 1797px 774px #FFF , 1027px 1134px #FFF , 441px 567px #FFF , 657px 1044px #FFF , 1558px 40px #FFF , 1674px 1971px #FFF , 605px 404px #FFF , 1575px 655px #FFF , 967px 767px #FFF , 1418px 1506px #FFF , 1280px 1738px #FFF , 251px 430px #FFF , 514px 656px #FFF , 1970px 617px #FFF , 1425px 594px #FFF , 1266px 1235px #FFF , 1241px 1704px #FFF , 501px 936px #FFF , 633px 97px #FFF , 1998px 1532px #FFF , 584px 1230px #FFF , 597px 579px #FFF , 264px 1829px #FFF , 654px 30px #FFF , 1050px 589px #FFF , 1990px 900px #FFF , 1930px 758px #FFF , 1099px 737px #FFF , 495px 1094px #FFF , 1457px 1996px #FFF , 40px 834px #FFF , 25px 357px #FFF , 1775px 1685px #FFF , 1067px 602px #FFF , 1774px 930px #FFF , 1086px 1182px #FFF , 528px 1287px #FFF , 1910px 791px #FFF , 340px 1235px #FFF , 1530px 1743px #FFF , 596px 1206px #FFF , 1330px 25px #FFF , 52px 1320px #FFF , 336px 851px #FFF , 1613px 1788px #FFF , 1847px 829px #FFF , 682px 720px #FFF , 1249px 1467px #FFF , 1097px 224px #FFF , 1422px 494px #FFF , 1363px 1843px #FFF , 1347px 993px #FFF , 1291px 717px #FFF , 496px 53px #FFF , 35px 1289px #FFF , 1876px 348px #FFF , 1831px 882px #FFF , 582px 807px #FFF , 605px 1387px #FFF , 471px 1714px #FFF , 391px 94px #FFF , 196px 860px #FFF , 442px 1237px #FFF , 960px 1259px #FFF , 1528px 1377px #FFF , 395px 1058px #FFF , 1151px 163px #FFF , 1445px 1318px #FFF , 199px 1818px #FFF , 1900px 1742px #FFF , 1265px 1957px #FFF , 251px 1019px #FFF , 1902px 1319px #FFF , 639px 1053px #FFF , 1064px 1734px #FFF , 1213px 1919px #FFF , 424px 61px #FFF , 920px 1339px #FFF , 1640px 303px #FFF , 93px 1789px #FFF , 1119px 716px #FFF , 92px 1112px #FFF , 1450px 1711px #FFF , 1131px 324px #FFF , 239px 1234px #FFF , 418px 325px #FFF , 1960px 1826px #FFF , 1313px 469px #FFF , 1087px 1784px #FFF , 143px 1406px #FFF , 1376px 1539px #FFF , 1175px 390px #FFF , 1647px 943px #FFF , 1417px 1432px #FFF , 1787px 902px #FFF , 1734px 963px #FFF , 1938px 1384px #FFF , 1529px 627px #FFF , 1619px 1087px #FFF , 1907px 1257px #FFF , 1436px 1990px #FFF , 591px 1913px #FFF , 1488px 224px #FFF , 1970px 430px #FFF , 299px 1232px #FFF , 1396px 472px #FFF , 144px 1768px #FFF , 285px 1797px #FFF , 1105px 1395px #FFF , 1635px 26px #FFF , 1644px 686px #FFF , 428px 621px #FFF , 1064px 911px #FFF , 1377px 362px #FFF , 1172px 1115px #FFF , 1876px 786px #FFF , 1478px 1333px #FFF , 1929px 1383px #FFF , 1222px 1825px #FFF , 1390px 237px #FFF , 1374px 1134px #FFF , 972px 1096px #FFF , 1353px 1436px #FFF;
      animation: animStar 100s linear infinite;
    }
    #stars2:after {
      content: " ";
      position: absolute;
      top: 2000px;
      width: 2px;
      height: 2px;
      background: transparent;
      box-shadow: 1374px 1535px #FFF , 1065px 1314px #FFF , 872px 761px #FFF , 515px 1524px #FFF , 351px 1790px #FFF , 307px 201px #FFF , 1091px 416px #FFF , 1316px 447px #FFF , 180px 226px #FFF , 1581px 1961px #FFF , 479px 621px #FFF , 1792px 919px #FFF , 1888px 1707px #FFF , 117px 1143px #FFF , 1003px 934px #FFF , 577px 237px #FFF , 1381px 1721px #FFF , 1926px 49px #FFF , 551px 824px #FFF , 1645px 937px #FFF , 8px 3px #FFF , 90px 1353px #FFF , 1691px 1760px #FFF , 737px 588px #FFF , 16px 1300px #FFF , 1366px 1944px #FFF , 1927px 1160px #FFF , 1594px 1308px #FFF , 1959px 1214px #FFF , 1877px 1564px #FFF , 1138px 679px #FFF , 1736px 1104px #FFF , 596px 1674px #FFF , 270px 684px #FFF , 1489px 1644px #FFF , 15px 878px #FFF , 123px 894px #FFF , 478px 966px #FFF , 475px 1723px #FFF , 366px 834px #FFF , 750px 772px #FFF , 1473px 1377px #FFF , 1938px 725px #FFF , 181px 1902px #FFF , 568px 225px #FFF , 1404px 734px #FFF , 1215px 1438px #FFF , 722px 831px #FFF , 554px 1329px #FFF , 99px 250px #FFF , 1977px 265px #FFF , 791px 1286px #FFF , 349px 1486px #FFF , 1008px 313px #FFF , 1222px 1378px #FFF , 1719px 388px #FFF , 611px 1739px #FFF , 1679px 732px #FFF , 1923px 595px #FFF , 1811px 671px #FFF , 1838px 965px #FFF , 756px 218px #FFF , 1567px 472px #FFF , 1772px 362px #FFF , 1165px 1539px #FFF , 1129px 1178px #FFF , 195px 423px #FFF , 1342px 166px #FFF , 41px 1315px #FFF , 885px 1009px #FFF , 287px 1415px #FFF , 1904px 1860px #FFF , 252px 1504px #FFF , 1234px 1682px #FFF , 1897px 1253px #FFF , 1702px 1846px #FFF , 1336px 428px #FFF , 1797px 774px #FFF , 1027px 1134px #FFF , 441px 567px #FFF , 657px 1044px #FFF , 1558px 40px #FFF , 1674px 1971px #FFF , 605px 404px #FFF , 1575px 655px #FFF , 967px 767px #FFF , 1418px 1506px #FFF , 1280px 1738px #FFF , 251px 430px #FFF , 514px 656px #FFF , 1970px 617px #FFF , 1425px 594px #FFF , 1266px 1235px #FFF , 1241px 1704px #FFF , 501px 936px #FFF , 633px 97px #FFF , 1998px 1532px #FFF , 584px 1230px #FFF , 597px 579px #FFF , 264px 1829px #FFF , 654px 30px #FFF , 1050px 589px #FFF , 1990px 900px #FFF , 1930px 758px #FFF , 1099px 737px #FFF , 495px 1094px #FFF , 1457px 1996px #FFF , 40px 834px #FFF , 25px 357px #FFF , 1775px 1685px #FFF , 1067px 602px #FFF , 1774px 930px #FFF , 1086px 1182px #FFF , 528px 1287px #FFF , 1910px 791px #FFF , 340px 1235px #FFF , 1530px 1743px #FFF , 596px 1206px #FFF , 1330px 25px #FFF , 52px 1320px #FFF , 336px 851px #FFF , 1613px 1788px #FFF , 1847px 829px #FFF , 682px 720px #FFF , 1249px 1467px #FFF , 1097px 224px #FFF , 1422px 494px #FFF , 1363px 1843px #FFF , 1347px 993px #FFF , 1291px 717px #FFF , 496px 53px #FFF , 35px 1289px #FFF , 1876px 348px #FFF , 1831px 882px #FFF , 582px 807px #FFF , 605px 1387px #FFF , 471px 1714px #FFF , 391px 94px #FFF , 196px 860px #FFF , 442px 1237px #FFF , 960px 1259px #FFF , 1528px 1377px #FFF , 395px 1058px #FFF , 1151px 163px #FFF , 1445px 1318px #FFF , 199px 1818px #FFF , 1900px 1742px #FFF , 1265px 1957px #FFF , 251px 1019px #FFF , 1902px 1319px #FFF , 639px 1053px #FFF , 1064px 1734px #FFF , 1213px 1919px #FFF , 424px 61px #FFF , 920px 1339px #FFF , 1640px 303px #FFF , 93px 1789px #FFF , 1119px 716px #FFF , 92px 1112px #FFF , 1450px 1711px #FFF , 1131px 324px #FFF , 239px 1234px #FFF , 418px 325px #FFF , 1960px 1826px #FFF , 1313px 469px #FFF , 1087px 1784px #FFF , 143px 1406px #FFF , 1376px 1539px #FFF , 1175px 390px #FFF , 1647px 943px #FFF , 1417px 1432px #FFF , 1787px 902px #FFF , 1734px 963px #FFF , 1938px 1384px #FFF , 1529px 627px #FFF , 1619px 1087px #FFF , 1907px 1257px #FFF , 1436px 1990px #FFF , 591px 1913px #FFF , 1488px 224px #FFF , 1970px 430px #FFF , 299px 1232px #FFF , 1396px 472px #FFF , 144px 1768px #FFF , 285px 1797px #FFF , 1105px 1395px #FFF , 1635px 26px #FFF , 1644px 686px #FFF , 428px 621px #FFF , 1064px 911px #FFF , 1377px 362px #FFF , 1172px 1115px #FFF , 1876px 786px #FFF , 1478px 1333px #FFF , 1929px 1383px #FFF , 1222px 1825px #FFF , 1390px 237px #FFF , 1374px 1134px #FFF , 972px 1096px #FFF , 1353px 1436px #FFF;
    }

    #stars3 {
      width: 3px;
      height: 3px;
      background: transparent;
      box-shadow: 1061px 413px #FFF , 798px 979px #FFF , 886px 998px #FFF , 1859px 134px #FFF , 1804px 212px #FFF , 1299px 762px #FFF , 1811px 269px #FFF , 1812px 995px #FFF , 1963px 1940px #FFF , 580px 1039px #FFF , 970px 1766px #FFF , 54px 340px #FFF , 1034px 1959px #FFF , 160px 1433px #FFF , 738px 1511px #FFF , 12px 705px #FFF , 809px 792px #FFF , 1233px 1431px #FFF , 745px 1747px #FFF , 450px 1639px #FFF , 1925px 528px #FFF , 488px 1805px #FFF , 191px 1472px #FFF , 1151px 1356px #FFF , 985px 173px #FFF , 104px 633px #FFF , 890px 101px #FFF , 1472px 787px #FFF , 168px 1641px #FFF , 258px 913px #FFF , 1021px 223px #FFF , 1175px 1402px #FFF , 1162px 482px #FFF , 1341px 1764px #FFF , 1300px 1643px #FFF , 1593px 260px #FFF , 950px 1219px #FFF , 1633px 1961px #FFF , 777px 1689px #FFF , 1392px 1055px #FFF , 962px 1288px #FFF , 132px 808px #FFF , 807px 1447px #FFF , 263px 294px #FFF , 1324px 1642px #FFF , 276px 558px #FFF , 908px 1847px #FFF , 449px 1585px #FFF , 1868px 595px #FFF , 1683px 456px #FFF , 812px 877px #FFF , 397px 593px #FFF , 1501px 1006px #FFF , 1009px 982px #FFF , 1904px 412px #FFF , 794px 405px #FFF , 421px 994px #FFF , 365px 340px #FFF , 1508px 184px #FFF , 1688px 1754px #FFF , 428px 1343px #FFF , 609px 999px #FFF , 863px 558px #FFF , 841px 735px #FFF , 1619px 1368px #FFF , 986px 1789px #FFF , 1802px 1505px #FFF , 1136px 77px #FFF , 1561px 1307px #FFF , 82px 1462px #FFF , 1619px 1917px #FFF , 1029px 1636px #FFF , 1021px 274px #FFF , 103px 647px #FFF , 1416px 1440px #FFF , 1566px 477px #FFF , 1468px 1196px #FFF , 796px 766px #FFF , 392px 249px #FFF , 835px 430px #FFF , 901px 592px #FFF , 49px 1555px #FFF , 1797px 140px #FFF , 50px 1016px #FFF , 108px 1193px #FFF , 1334px 1036px #FFF , 1385px 1089px #FFF , 1327px 415px #FFF , 96px 257px #FFF , 561px 1218px #FFF , 1890px 978px #FFF , 1107px 855px #FFF , 1903px 1178px #FFF , 1016px 40px #FFF , 1378px 1888px #FFF , 210px 11px #FFF , 1710px 349px #FFF , 1408px 1108px #FFF , 303px 712px #FFF , 100px 68px #FFF;
      animation: animStar 150s linear infinite;
    }
    #stars3:after {
      content: " ";
      position: absolute;
      top: 2000px;
      width: 3px;
      height: 3px;
      background: transparent;
      box-shadow: 1061px 413px #FFF , 798px 979px #FFF , 886px 998px #FFF , 1859px 134px #FFF , 1804px 212px #FFF , 1299px 762px #FFF , 1811px 269px #FFF , 1812px 995px #FFF , 1963px 1940px #FFF , 580px 1039px #FFF , 970px 1766px #FFF , 54px 340px #FFF , 1034px 1959px #FFF , 160px 1433px #FFF , 738px 1511px #FFF , 12px 705px #FFF , 809px 792px #FFF , 1233px 1431px #FFF , 745px 1747px #FFF , 450px 1639px #FFF , 1925px 528px #FFF , 488px 1805px #FFF , 191px 1472px #FFF , 1151px 1356px #FFF , 985px 173px #FFF , 104px 633px #FFF , 890px 101px #FFF , 1472px 787px #FFF , 168px 1641px #FFF , 258px 913px #FFF , 1021px 223px #FFF , 1175px 1402px #FFF , 1162px 482px #FFF , 1341px 1764px #FFF , 1300px 1643px #FFF , 1593px 260px #FFF , 950px 1219px #FFF , 1633px 1961px #FFF , 777px 1689px #FFF , 1392px 1055px #FFF , 962px 1288px #FFF , 132px 808px #FFF , 807px 1447px #FFF , 263px 294px #FFF , 1324px 1642px #FFF , 276px 558px #FFF , 908px 1847px #FFF , 449px 1585px #FFF , 1868px 595px #FFF , 1683px 456px #FFF , 812px 877px #FFF , 397px 593px #FFF , 1501px 1006px #FFF , 1009px 982px #FFF , 1904px 412px #FFF , 794px 405px #FFF , 421px 994px #FFF , 365px 340px #FFF , 1508px 184px #FFF , 1688px 1754px #FFF , 428px 1343px #FFF , 609px 999px #FFF , 863px 558px #FFF , 841px 735px #FFF , 1619px 1368px #FFF , 986px 1789px #FFF , 1802px 1505px #FFF , 1136px 77px #FFF , 1561px 1307px #FFF , 82px 1462px #FFF , 1619px 1917px #FFF , 1029px 1636px #FFF , 1021px 274px #FFF , 103px 647px #FFF , 1416px 1440px #FFF , 1566px 477px #FFF , 1468px 1196px #FFF , 796px 766px #FFF , 392px 249px #FFF , 835px 430px #FFF , 901px 592px #FFF , 49px 1555px #FFF , 1797px 140px #FFF , 50px 1016px #FFF , 108px 1193px #FFF , 1334px 1036px #FFF , 1385px 1089px #FFF , 1327px 415px #FFF , 96px 257px #FFF , 561px 1218px #FFF , 1890px 978px #FFF , 1107px 855px #FFF , 1903px 1178px #FFF , 1016px 40px #FFF , 1378px 1888px #FFF , 210px 11px #FFF , 1710px 349px #FFF , 1408px 1108px #FFF , 303px 712px #FFF , 100px 68px #FFF;
    }

    #hero{
      position: fixed;
      height: 100%;
      width: 100%;
      font-family: "Montserrat Alternates", sans-serif;
      color: #FFF;
      background: radial-gradient(ellipse at bottom, #0c1116 0%, #090a0f 100%);
    }

    #horizon {
      position: absolute;
      width: 160%;
      height: 70%;
      border-radius: 100%/100%;
      background: #21759b;
    ;
      -webkit-filter: blur(30px);
      left: 50%;
      bottom: -20%;
      margin-left: -80%;
    }
    #horizon:before {
      content: " ";
      position: absolute;
      width: 81.25%;
      height: 70%;
      border-radius: 100%/100%;
      background: #00a2ed;
      -webkit-filter: blur(30px);
      opacity: 0.6;
      margin-left: 9.375%;
    }
    #horizon:after {
      content: " ";
      position: absolute;
      width: 32%;
      height: 20%;
      border-radius: 650px/350px;
      background: #00a2ed;
      -webkit-filter: blur(30px);
      opacity: 0.5;
      margin-left: 34%;
    }
    #horizon .glow {
      position: absolute;
      width: 100%;
      height: 100%;
      border-radius: 100%/100%;
      background: #21759b;
      -webkit-filter: blur(200px);
      opacity: 0.7;
      top: -10%;
    }

    #earth {
      position: absolute;
      width: 200%;
      height: 100%;
      background: black;
      border-radius: 100%/100%;
      left: 50%;
      bottom: -50%;
      margin-left: -100%;
    }
    #earth:before {
      content: " ";
      position: absolute;
      width: 100%;
      height: 100%;
      border-radius: 100%/100%;
      box-shadow: inset 0px 0px 62px 20px rgba(60, 105, 138, 0.85);
    }
    #earth:after {
      *zoom: 1;
      filter: progid:DXImageTransform.Microsoft.gradient(gradientType=1, startColorstr='#FF000000', endColorstr='#FF000000');
      background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuMCIgeTE9IjAuNSIgeDI9IjEuMCIgeTI9IjAuNSI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzAwMDAwMCIvPjxzdG9wIG9mZnNldD0iNTAlIiBzdG9wLWNvbG9yPSIjMDAwMDAwIiBzdG9wLW9wYWNpdHk9IjAuMCIvPjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iIzAwMDAwMCIvPjwvbGluZWFyR3JhZGllbnQ+PC9kZWZzPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiIC8+PC9zdmc+IA==');
      background-size: 100%;
      background-image: -webkit-gradient(linear, 0% 50%, 100% 50%, color-stop(0%, #000000), color-stop(50%, rgba(0, 0, 0, 0)), color-stop(100%, #000000));
      background-image: -moz-linear-gradient(left, #000000 0%, rgba(0, 0, 0, 0) 50%, #000000 100%);
      background-image: -webkit-linear-gradient(left, #000000 0%, rgba(0, 0, 0, 0) 50%, #000000 100%);
      background-image: linear-gradient(to right, #000000 0%, rgba(0, 0, 0, 0) 50%, #000000 100%);
      content: " ";
      position: absolute;
      width: 100%;
      height: 100%;
      border-radius: 100%/100%;
    }

    #title {
      position: absolute;
      font-weight: 300;
      top: 36%;
      left: 0;
      right: 0;
      margin-top: -80px;
      font-size: 130px;
      text-align: center;
      letter-spacing: 20px;
      padding-left: 20px;
      background: -webkit-linear-gradient(white, #dbdde0, #21759b);
      background: -moz-linear-gradient(white, #dbdde0, #21759b);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      animation-duration: 80000000000s;
      animation-iteration-count: infinite;
      animation-timing-function: ease;
      animation-name: animGravity;
    }

    #subtitle {
      position: absolute;
      font-weight: 300;
      top: 60%;
      left: 0;
      right: 0;
      font-size: 25px;
      text-align: center;
      letter-spacing: 6px;
    }
    #subtitle span {
      color: #d8d8d8;
      animation-duration: 6s;
      animation-iteration-count: 1;
      animation-timing-function: ease;
    }
    #subtitle span a {
      color: #d8d8d8;
      animation-duration: 6s;
      animation-iteration-count: 1;
      animation-timing-function: ease;
    }
    #subtitle span:nth-child(1) {
      animation-name: animDont;
    }
    #subtitle span:nth-child(2) {
      animation-name: animLet;
    }
    #subtitle span:nth-child(3) {
      animation-name: animGo;
    }
    #subtitle span:nth-child(4) {
      animation-name: animBt;
    }
    #subtitle span:nth-child(4) a {
      animation-name: animBt;
    }

    @keyframes animStar {
      from {
        transform: translateY(0px);
      }
      to {
        transform: translateY(-2000px);
      }
    }
    @keyframes animGravity {
      0% {
        transform: translateY(-26px);
        opacity: 0;
      }
      0.00000001%, 100% {
        letter-spacing: 40px;
        padding-left: 40px;
        transform: translateY(0px);
        opacity: 1;
      }
    }
    @keyframes animDont {
      0%	, 15% {
        transform: translateY(-26px);
        opacity: 0;
      }
      35%, 100% {
        transform: translateY(0px);
        opacity: 1;
      }
    }
    @keyframes animLet {
      0%	, 25% {
        transform: translateY(-26px);
        opacity: 0;
      }
      45%, 100% {
        transform: translateY(0px);
        opacity: 1;
      }
    }
    @keyframes animGo {
      0%	, 35% {
        transform: translateY(-26px);
        opacity: 0;
      }
      55%, 100% {
        transform: translateY(0px);
        opacity: 1;
      }
    }
    @keyframes animBt {
      0%	, 45% {
        transform: translateY(-26px);
        opacity: 0;
      }
      65%, 100% {
        transform: translateY(0px);
        opacity: 1;
      }
    }
    #hero{
      height: 100vh;
      background:black !important;
      z-index: 10;
      position: relative;

    }


    @media only screen and (max-width: 600px) {
      #stars {
        width: 1px;
        height: 1px;
        background: transparent;
        box-shadow: 802px 1101px #FFF , 1955px 275px #FFF , 1907px 1504px #FFF , 1156px 1795px #FFF , 1103px 639px #FFF , 194px 914px #FFF , 1827px 471px #FFF , 1634px 837px #FFF , 1532px 120px #FFF , 472px 127px #FFF , 806px 297px #FFF , 1932px 502px #FFF , 322px 145px #FFF , 1601px 1960px #FFF , 223px 1261px #FFF , 1517px 310px #FFF , 837px 211px #FFF , 265px 82px #FFF , 256px 1397px #FFF , 893px 1358px #FFF , 1139px 1550px #FFF , 1433px 1076px #FFF , 849px 230px #FFF , 1895px 248px #FFF , 603px 1330px #FFF , 1826px 746px #FFF , 1382px 1263px #FFF , 858px 88px #FFF , 1423px 367px #FFF , 1050px 61px #FFF , 1213px 962px #FFF , 1134px 366px #FFF , 549px 602px #FFF , 954px 250px #FFF , 86px 1902px #FFF , 1396px 831px #FFF , 11px 1051px #FFF , 1143px 1883px #FFF , 1860px 1486px #FFF , 1191px 1778px #FFF , 374px 1622px #FFF , 1613px 1525px #FFF , 639px 1616px #FFF , 1403px 1570px #FFF , 1369px 20px #FFF , 1821px 484px #FFF , 668px 61px #FFF , 213px 1007px #FFF , 1181px 1932px #FFF , 1329px 784px #FFF , 1346px 737px #FFF , 1996px 1373px #FFF , 1684px 1175px #FFF , 720px 1999px #FFF , 1319px 1280px #FFF , 1394px 915px #FFF , 355px 1597px #FFF , 1789px 205px #FFF , 1830px 26px #FFF , 352px 439px #FFF , 1069px 1453px #FFF , 109px 152px #FFF , 465px 1414px #FFF , 1978px 1421px #FFF , 1723px 440px #FFF , 643px 588px #FFF , 116px 1638px #FFF , 1625px 240px #FFF , 1556px 986px #FFF , 277px 960px #FFF , 816px 315px #FFF , 94px 136px #FFF , 326px 64px #FFF , 1402px 1255px #FFF , 1297px 935px #FFF , 768px 1346px #FFF , 1607px 1595px #FFF , 578px 793px #FFF , 785px 1805px #FFF , 436px 699px #FFF , 1953px 895px #FFF , 1555px 1870px #FFF , 1085px 9px #FFF , 1660px 53px #FFF , 1392px 1746px #FFF , 1365px 514px #FFF , 678px 1098px #FFF , 1966px 1371px #FFF , 255px 1361px #FFF , 1274px 1015px #FFF , 1036px 1714px #FFF , 666px 1558px #FFF , 1457px 392px #FFF , 991px 423px #FFF , 1553px 1255px #FFF , 361px 96px #FFF , 700px 153px #FFF , 1179px 1781px #FFF , 100px 1679px #FFF , 398px 1675px #FFF , 1392px 1644px #FFF , 1298px 899px #FFF , 346px 451px #FFF , 1600px 1661px #FFF , 1164px 1293px #FFF , 721px 860px #FFF , 1573px 248px #FFF , 805px 366px #FFF , 1658px 412px #FFF , 1877px 1803px #FFF , 1672px 137px #FFF , 1706px 112px #FFF , 1012px 1866px #FFF , 739px 433px #FFF , 1312px 1868px #FFF , 1504px 422px #FFF , 492px 1843px #FFF , 32px 1178px #FFF , 529px 202px #FFF , 321px 1171px #FFF , 329px 392px #FFF , 1118px 1858px #FFF , 226px 409px #FFF , 496px 1016px #FFF , 1115px 1980px #FFF , 488px 1875px #FFF , 1981px 1648px #FFF , 610px 55px #FFF , 1350px 1935px #FFF , 141px 383px #FFF , 215px 1031px #FFF , 1290px 1098px #FFF , 1142px 1017px #FFF , 63px 987px #FFF , 1031px 542px #FFF , 606px 1885px #FFF , 573px 1467px #FFF , 910px 1401px #FFF , 380px 1930px #FFF , 1596px 59px #FFF , 1625px 359px #FFF , 855px 1872px #FFF , 1633px 593px #FFF , 1414px 1846px #FFF , 1370px 562px #FFF , 1815px 1309px #FFF , 982px 495px #FFF , 111px 1453px #FFF , 1003px 1815px #FFF , 1458px 853px #FFF , 389px 1567px #FFF , 1539px 234px #FFF , 1510px 840px #FFF , 46px 1965px #FFF , 353px 1460px #FFF , 1680px 1695px #FFF , 449px 1999px #FFF , 281px 1990px #FFF , 539px 855px #FFF , 1839px 374px #FFF , 1153px 1388px #FFF , 1492px 448px #FFF , 956px 1602px #FFF , 1542px 770px #FFF , 1009px 1115px #FFF , 1825px 1191px #FFF , 425px 1913px #FFF , 379px 676px #FFF , 1357px 688px #FFF , 978px 1246px #FFF , 490px 1124px #FFF , 1014px 281px #FFF , 335px 261px #FFF , 1584px 854px #FFF , 420px 537px #FFF , 310px 563px #FFF , 840px 484px #FFF , 307px 1846px #FFF , 1818px 1897px #FFF , 1769px 185px #FFF , 261px 498px #FFF , 1513px 1817px #FFF , 888px 29px #FFF , 1496px 1594px #FFF , 1555px 1683px #FFF , 1489px 520px #FFF , 1741px 1465px #FFF , 1308px 1271px #FFF , 1834px 964px #FFF , 269px 1077px #FFF , 1747px 1857px #FFF , 494px 552px #FFF , 1266px 1984px #FFF , 1783px 1149px #FFF , 168px 1821px #FFF , 882px 620px #FFF , 1709px 570px #FFF , 309px 754px #FFF , 718px 2px #FFF , 1529px 1364px #FFF , 79px 1885px #FFF , 59px 930px #FFF , 1782px 78px #FFF , 1862px 436px #FFF , 1307px 1191px #FFF , 900px 1379px #FFF , 169px 46px #FFF , 1672px 1013px #FFF , 539px 1123px #FFF , 488px 598px #FFF , 891px 1008px #FFF , 61px 1946px #FFF , 598px 129px #FFF , 1117px 384px #FFF , 1568px 333px #FFF , 509px 504px #FFF , 1535px 901px #FFF , 588px 1438px #FFF , 1261px 1877px #FFF , 1550px 841px #FFF , 1041px 1480px #FFF , 942px 1949px #FFF , 87px 323px #FFF , 1716px 1043px #FFF , 36px 618px #FFF , 1861px 429px #FFF , 1901px 237px #FFF , 463px 875px #FFF , 1092px 1044px #FFF , 901px 1469px #FFF , 1919px 1188px #FFF , 381px 617px #FFF , 531px 8px #FFF , 957px 1767px #FFF , 211px 451px #FFF , 1241px 1189px #FFF , 1239px 1389px #FFF , 640px 1949px #FFF , 788px 105px #FFF , 1489px 1146px #FFF , 498px 1089px #FFF , 632px 671px #FFF , 1877px 623px #FFF , 686px 69px #FFF , 719px 1335px #FFF , 1286px 914px #FFF , 816px 1097px #FFF , 537px 924px #FFF , 1035px 133px #FFF , 1933px 1386px #FFF , 233px 145px #FFF , 835px 1580px #FFF , 1598px 554px #FFF , 393px 1158px #FFF , 297px 1320px #FFF , 877px 670px #FFF , 1178px 1784px #FFF , 1797px 1616px #FFF , 531px 152px #FFF , 419px 1225px #FFF , 1594px 423px #FFF , 134px 66px #FFF , 1415px 1881px #FFF , 585px 101px #FFF , 1137px 930px #FFF , 929px 591px #FFF , 1964px 634px #FFF , 1092px 756px #FFF , 1036px 1063px #FFF , 698px 1152px #FFF , 1255px 1701px #FFF , 1522px 243px #FFF , 113px 709px #FFF , 851px 438px #FFF , 1717px 1925px #FFF , 591px 172px #FFF , 1383px 946px #FFF , 1083px 391px #FFF , 1032px 1137px #FFF , 473px 842px #FFF , 1791px 1040px #FFF , 160px 1705px #FFF , 480px 27px #FFF , 1559px 124px #FFF , 1662px 1792px #FFF , 1442px 1660px #FFF , 175px 1105px #FFF , 1995px 1459px #FFF , 1346px 59px #FFF , 465px 451px #FFF , 1462px 931px #FFF , 165px 715px #FFF , 926px 1303px #FFF , 401px 521px #FFF , 1144px 931px #FFF , 1801px 79px #FFF , 1631px 1384px #FFF , 1492px 1716px #FFF , 1901px 873px #FFF , 1229px 1917px #FFF , 612px 1004px #FFF , 503px 1096px #FFF , 237px 130px #FFF , 1126px 512px #FFF , 1123px 146px #FFF , 1911px 729px #FFF , 1744px 1905px #FFF , 1414px 1402px #FFF , 510px 1379px #FFF , 312px 1367px #FFF , 657px 799px #FFF , 166px 900px #FFF , 1046px 914px #FFF , 68px 1220px #FFF , 541px 97px #FFF , 1894px 1303px #FFF , 1528px 1094px #FFF , 1443px 987px #FFF , 1427px 1667px #FFF , 387px 250px #FFF , 1219px 1995px #FFF , 627px 433px #FFF , 1377px 638px #FFF , 1740px 1139px #FFF , 671px 1731px #FFF , 41px 608px #FFF , 1021px 754px #FFF , 327px 1528px #FFF , 1062px 499px #FFF , 107px 450px #FFF , 134px 939px #FFF , 1786px 117px #FFF , 949px 658px #FFF , 1350px 23px #FFF , 1641px 127px #FFF , 1234px 48px #FFF , 50px 1498px #FFF , 1647px 707px #FFF , 58px 1751px #FFF , 864px 1446px #FFF , 1757px 1750px #FFF , 1765px 1143px #FFF , 1714px 93px #FFF , 294px 79px #FFF , 919px 1115px #FFF , 697px 256px #FFF , 1891px 1334px #FFF , 77px 1104px #FFF , 1331px 246px #FFF , 1867px 1226px #FFF , 1870px 475px #FFF , 1530px 569px #FFF , 63px 759px #FFF , 31px 1449px #FFF , 877px 958px #FFF , 452px 836px #FFF , 597px 1541px #FFF , 1053px 636px #FFF , 92px 451px #FFF , 156px 288px #FFF , 1926px 1568px #FFF , 1645px 1830px #FFF , 1505px 499px #FFF , 1488px 1747px #FFF , 292px 453px #FFF , 81px 1751px #FFF , 1248px 539px #FFF , 1725px 1924px #FFF , 1862px 1580px #FFF , 1224px 1664px #FFF , 159px 1258px #FFF , 1747px 1909px #FFF , 1906px 1061px #FFF , 845px 1586px #FFF , 1510px 1814px #FFF , 1907px 767px #FFF , 267px 508px #FFF , 1759px 278px #FFF , 10px 1741px #FFF , 323px 596px #FFF , 134px 1804px #FFF , 613px 1253px #FFF , 1181px 661px #FFF , 1093px 1320px #FFF , 1582px 118px #FFF , 33px 444px #FFF , 254px 1782px #FFF , 1970px 1416px #FFF , 943px 535px #FFF , 547px 1231px #FFF , 145px 1348px #FFF , 602px 1928px #FFF , 1673px 251px #FFF , 1728px 497px #FFF , 1255px 1274px #FFF , 474px 180px #FFF , 1254px 1122px #FFF , 1199px 1160px #FFF , 1895px 637px #FFF , 1649px 438px #FFF , 599px 416px #FFF , 1015px 11px #FFF , 247px 417px #FFF , 744px 1707px #FFF , 1367px 1682px #FFF , 1168px 831px #FFF , 239px 515px #FFF , 347px 829px #FFF , 131px 581px #FFF , 210px 391px #FFF , 840px 1639px #FFF , 1987px 1186px #FFF , 1141px 1818px #FFF , 1722px 1095px #FFF , 384px 856px #FFF , 1621px 1603px #FFF , 1465px 148px #FFF , 586px 182px #FFF , 1803px 1690px #FFF , 1748px 725px #FFF , 294px 1034px #FFF , 861px 1519px #FFF , 1981px 1408px #FFF , 1739px 1421px #FFF , 756px 1843px #FFF , 642px 652px #FFF , 1190px 139px #FFF , 1932px 554px #FFF , 1355px 1004px #FFF , 1778px 876px #FFF , 909px 1937px #FFF , 401px 996px #FFF , 1459px 1901px #FFF , 483px 1279px #FFF , 1268px 992px #FFF , 410px 1408px #FFF , 271px 158px #FFF , 360px 1634px #FFF , 1886px 1262px #FFF , 201px 1526px #FFF , 1812px 1157px #FFF , 268px 156px #FFF , 743px 1309px #FFF , 860px 190px #FFF , 778px 75px #FFF , 1367px 786px #FFF , 746px 1360px #FFF , 359px 1510px #FFF , 1586px 295px #FFF , 1379px 580px #FFF , 1862px 1888px #FFF , 932px 921px #FFF , 306px 1771px #FFF , 609px 1196px #FFF , 1028px 1246px #FFF , 730px 595px #FFF , 1588px 1969px #FFF , 1516px 1536px #FFF , 1201px 1099px #FFF , 1945px 245px #FFF , 814px 1350px #FFF , 1296px 1370px #FFF , 796px 71px #FFF , 1804px 385px #FFF , 1624px 138px #FFF , 19px 85px #FFF , 361px 1642px #FFF , 1957px 819px #FFF , 1212px 201px #FFF , 449px 430px #FFF , 601px 1362px #FFF , 1474px 852px #FFF , 487px 1456px #FFF , 1974px 121px #FFF , 1274px 842px #FFF , 1658px 196px #FFF , 1364px 1190px #FFF , 1410px 1346px #FFF , 1003px 845px #FFF , 1515px 1094px #FFF , 962px 854px #FFF , 605px 1008px #FFF , 1723px 1127px #FFF , 1792px 141px #FFF , 1824px 299px #FFF , 1804px 1410px #FFF , 691px 1167px #FFF , 638px 1177px #FFF , 154px 1237px #FFF , 1686px 1256px #FFF , 1883px 1172px #FFF , 533px 1698px #FFF , 922px 1772px #FFF , 705px 1382px #FFF , 1922px 1182px #FFF , 360px 1074px #FFF , 1557px 884px #FFF , 35px 438px #FFF , 223px 995px #FFF , 161px 189px #FFF , 1840px 1020px #FFF , 696px 1425px #FFF , 575px 1680px #FFF , 1922px 1317px #FFF , 953px 488px #FFF , 1630px 1563px #FFF , 466px 605px #FFF , 168px 1780px #FFF , 387px 1197px #FFF , 644px 389px #FFF , 1579px 895px #FFF , 1542px 1923px #FFF , 155px 804px #FFF , 1353px 251px #FFF , 780px 1829px #FFF , 1645px 830px #FFF , 1731px 1782px #FFF , 153px 698px #FFF , 210px 901px #FFF , 1199px 1629px #FFF , 705px 1977px #FFF , 558px 99px #FFF , 112px 703px #FFF , 309px 1111px #FFF , 430px 1937px #FFF , 1858px 607px #FFF , 337px 329px #FFF , 171px 486px #FFF , 834px 110px #FFF , 1342px 310px #FFF , 1642px 291px #FFF , 1958px 929px #FFF , 1107px 689px #FFF , 1475px 1117px #FFF , 1418px 59px #FFF , 953px 1455px #FFF , 1086px 1466px #FFF , 227px 903px #FFF , 1511px 556px #FFF , 1312px 1834px #FFF , 1233px 37px #FFF , 1754px 1172px #FFF , 97px 370px #FFF , 1203px 1184px #FFF , 1023px 870px #FFF , 1305px 1314px #FFF , 1700px 587px #FFF , 290px 36px #FFF , 1313px 367px #FFF , 1967px 1793px #FFF , 1871px 1571px #FFF , 203px 1979px #FFF , 761px 787px #FFF , 447px 443px #FFF , 790px 1118px #FFF , 980px 41px #FFF , 910px 755px #FFF , 1539px 1880px #FFF , 703px 1606px #FFF , 434px 676px #FFF , 1318px 1072px #FFF , 691px 410px #FFF , 1062px 1246px #FFF , 1349px 1756px #FFF , 750px 1397px #FFF , 1457px 490px #FFF , 1114px 1295px #FFF , 604px 1407px #FFF , 329px 1291px #FFF , 1095px 1305px #FFF , 877px 715px #FFF , 1234px 627px #FFF , 1266px 1122px #FFF , 836px 1284px #FFF , 723px 884px #FFF , 474px 1978px #FFF , 1160px 941px #FFF , 1890px 617px #FFF , 1586px 173px #FFF , 1142px 1089px #FFF , 606px 4px #FFF , 915px 836px #FFF , 1377px 379px #FFF , 1254px 197px #FFF , 1165px 628px #FFF , 1243px 901px #FFF , 935px 1133px #FFF , 624px 556px #FFF , 1502px 864px #FFF , 32px 1321px #FFF , 1795px 113px #FFF , 1372px 1234px #FFF , 1633px 550px #FFF , 67px 1363px #FFF , 95px 1960px #FFF , 1186px 1850px #FFF , 890px 1150px #FFF , 747px 729px #FFF , 543px 1565px #FFF , 306px 1184px #FFF , 484px 1106px #FFF , 609px 256px #FFF , 1092px 1882px #FFF , 1329px 794px #FFF , 1159px 1164px #FFF , 127px 779px #FFF , 1300px 1689px #FFF , 532px 1599px #FFF , 1361px 1309px #FFF , 940px 328px #FFF , 168px 259px #FFF , 1888px 516px #FFF , 1337px 259px #FFF , 1162px 1194px #FFF , 1713px 140px #FFF , 1580px 756px #FFF , 988px 1138px #FFF , 267px 623px #FFF , 264px 1385px #FFF , 550px 1210px #FFF , 786px 863px #FFF , 1858px 1880px #FFF , 393px 1102px #FFF , 1929px 1937px #FFF , 552px 684px #FFF , 588px 1821px #FFF , 1823px 112px #FFF , 883px 575px #FFF , 1843px 517px #FFF , 1750px 723px #FFF , 1216px 117px #FFF , 1061px 231px #FFF , 1454px 1786px #FFF , 1665px 1757px #FFF , 1147px 483px #FFF , 156px 306px #FFF , 1994px 9px #FFF , 1204px 1168px #FFF , 1615px 885px #FFF , 866px 592px #FFF , 360px 1646px #FFF , 1008px 1327px #FFF , 1142px 1012px #FFF , 1678px 273px #FFF , 313px 406px #FFF , 28px 436px #FFF , 563px 1315px #FFF , 90px 1800px #FFF , 1348px 1905px #FFF , 762px 880px #FFF , 377px 182px #FFF , 1632px 1134px #FFF , 1522px 1440px #FFF , 218px 971px #FFF , 1300px 27px #FFF , 1644px 868px #FFF , 1700px 5px #FFF , 1753px 1726px #FFF , 340px 599px #FFF , 1759px 823px #FFF , 1433px 1847px #FFF , 1395px 1289px #FFF , 1916px 593px #FFF , 1102px 1254px #FFF , 254px 1557px #FFF , 972px 1929px #FFF , 900px 1200px #FFF , 1949px 829px #FFF , 949px 683px #FFF , 20px 902px #FFF , 708px 676px #FFF , 1880px 103px #FFF , 1442px 231px #FFF , 1190px 1150px #FFF , 5px 13px #FFF , 1962px 550px #FFF , 180px 1568px #FFF , 1781px 1857px #FFF , 336px 75px #FFF , 1905px 1786px #FFF , 647px 1313px #FFF , 1093px 848px #FFF , 872px 1647px #FFF , 836px 1864px #FFF , 667px 1178px #FFF , 1001px 1671px #FFF , 574px 1066px #FFF , 1607px 198px #FFF , 1257px 1367px #FFF , 943px 257px #FFF , 1752px 486px #FFF , 71px 1066px #FFF , 1966px 1724px #FFF , 746px 595px #FFF , 1971px 1363px #FFF , 573px 1939px #FFF , 946px 1749px #FFF , 889px 1424px #FFF , 892px 1323px #FFF , 668px 650px #FFF;
        animation: animStar 50s linear infinite;
      }
      #stars:after {
        content: " ";
        position: absolute;
        top: 2000px;
        width: 1px;
        height: 1px;
        background: transparent;
        box-shadow: 802px 1101px #FFF , 1955px 275px #FFF , 1907px 1504px #FFF , 1156px 1795px #FFF , 1103px 639px #FFF , 194px 914px #FFF , 1827px 471px #FFF , 1634px 837px #FFF , 1532px 120px #FFF , 472px 127px #FFF , 806px 297px #FFF , 1932px 502px #FFF , 322px 145px #FFF , 1601px 1960px #FFF , 223px 1261px #FFF , 1517px 310px #FFF , 837px 211px #FFF , 265px 82px #FFF , 256px 1397px #FFF , 893px 1358px #FFF , 1139px 1550px #FFF , 1433px 1076px #FFF , 849px 230px #FFF , 1895px 248px #FFF , 603px 1330px #FFF , 1826px 746px #FFF , 1382px 1263px #FFF , 858px 88px #FFF , 1423px 367px #FFF , 1050px 61px #FFF , 1213px 962px #FFF , 1134px 366px #FFF , 549px 602px #FFF , 954px 250px #FFF , 86px 1902px #FFF , 1396px 831px #FFF , 11px 1051px #FFF , 1143px 1883px #FFF , 1860px 1486px #FFF , 1191px 1778px #FFF , 374px 1622px #FFF , 1613px 1525px #FFF , 639px 1616px #FFF , 1403px 1570px #FFF , 1369px 20px #FFF , 1821px 484px #FFF , 668px 61px #FFF , 213px 1007px #FFF , 1181px 1932px #FFF , 1329px 784px #FFF , 1346px 737px #FFF , 1996px 1373px #FFF , 1684px 1175px #FFF , 720px 1999px #FFF , 1319px 1280px #FFF , 1394px 915px #FFF , 355px 1597px #FFF , 1789px 205px #FFF , 1830px 26px #FFF , 352px 439px #FFF , 1069px 1453px #FFF , 109px 152px #FFF , 465px 1414px #FFF , 1978px 1421px #FFF , 1723px 440px #FFF , 643px 588px #FFF , 116px 1638px #FFF , 1625px 240px #FFF , 1556px 986px #FFF , 277px 960px #FFF , 816px 315px #FFF , 94px 136px #FFF , 326px 64px #FFF , 1402px 1255px #FFF , 1297px 935px #FFF , 768px 1346px #FFF , 1607px 1595px #FFF , 578px 793px #FFF , 785px 1805px #FFF , 436px 699px #FFF , 1953px 895px #FFF , 1555px 1870px #FFF , 1085px 9px #FFF , 1660px 53px #FFF , 1392px 1746px #FFF , 1365px 514px #FFF , 678px 1098px #FFF , 1966px 1371px #FFF , 255px 1361px #FFF , 1274px 1015px #FFF , 1036px 1714px #FFF , 666px 1558px #FFF , 1457px 392px #FFF , 991px 423px #FFF , 1553px 1255px #FFF , 361px 96px #FFF , 700px 153px #FFF , 1179px 1781px #FFF , 100px 1679px #FFF , 398px 1675px #FFF , 1392px 1644px #FFF , 1298px 899px #FFF , 346px 451px #FFF , 1600px 1661px #FFF , 1164px 1293px #FFF , 721px 860px #FFF , 1573px 248px #FFF , 805px 366px #FFF , 1658px 412px #FFF , 1877px 1803px #FFF , 1672px 137px #FFF , 1706px 112px #FFF , 1012px 1866px #FFF , 739px 433px #FFF , 1312px 1868px #FFF , 1504px 422px #FFF , 492px 1843px #FFF , 32px 1178px #FFF , 529px 202px #FFF , 321px 1171px #FFF , 329px 392px #FFF , 1118px 1858px #FFF , 226px 409px #FFF , 496px 1016px #FFF , 1115px 1980px #FFF , 488px 1875px #FFF , 1981px 1648px #FFF , 610px 55px #FFF , 1350px 1935px #FFF , 141px 383px #FFF , 215px 1031px #FFF , 1290px 1098px #FFF , 1142px 1017px #FFF , 63px 987px #FFF , 1031px 542px #FFF , 606px 1885px #FFF , 573px 1467px #FFF , 910px 1401px #FFF , 380px 1930px #FFF , 1596px 59px #FFF , 1625px 359px #FFF , 855px 1872px #FFF , 1633px 593px #FFF , 1414px 1846px #FFF , 1370px 562px #FFF , 1815px 1309px #FFF , 982px 495px #FFF , 111px 1453px #FFF , 1003px 1815px #FFF , 1458px 853px #FFF , 389px 1567px #FFF , 1539px 234px #FFF , 1510px 840px #FFF , 46px 1965px #FFF , 353px 1460px #FFF , 1680px 1695px #FFF , 449px 1999px #FFF , 281px 1990px #FFF , 539px 855px #FFF , 1839px 374px #FFF , 1153px 1388px #FFF , 1492px 448px #FFF , 956px 1602px #FFF , 1542px 770px #FFF , 1009px 1115px #FFF , 1825px 1191px #FFF , 425px 1913px #FFF , 379px 676px #FFF , 1357px 688px #FFF , 978px 1246px #FFF , 490px 1124px #FFF , 1014px 281px #FFF , 335px 261px #FFF , 1584px 854px #FFF , 420px 537px #FFF , 310px 563px #FFF , 840px 484px #FFF , 307px 1846px #FFF , 1818px 1897px #FFF , 1769px 185px #FFF , 261px 498px #FFF , 1513px 1817px #FFF , 888px 29px #FFF , 1496px 1594px #FFF , 1555px 1683px #FFF , 1489px 520px #FFF , 1741px 1465px #FFF , 1308px 1271px #FFF , 1834px 964px #FFF , 269px 1077px #FFF , 1747px 1857px #FFF , 494px 552px #FFF , 1266px 1984px #FFF , 1783px 1149px #FFF , 168px 1821px #FFF , 882px 620px #FFF , 1709px 570px #FFF , 309px 754px #FFF , 718px 2px #FFF , 1529px 1364px #FFF , 79px 1885px #FFF , 59px 930px #FFF , 1782px 78px #FFF , 1862px 436px #FFF , 1307px 1191px #FFF , 900px 1379px #FFF , 169px 46px #FFF , 1672px 1013px #FFF , 539px 1123px #FFF , 488px 598px #FFF , 891px 1008px #FFF , 61px 1946px #FFF , 598px 129px #FFF , 1117px 384px #FFF , 1568px 333px #FFF , 509px 504px #FFF , 1535px 901px #FFF , 588px 1438px #FFF , 1261px 1877px #FFF , 1550px 841px #FFF , 1041px 1480px #FFF , 942px 1949px #FFF , 87px 323px #FFF , 1716px 1043px #FFF , 36px 618px #FFF , 1861px 429px #FFF , 1901px 237px #FFF , 463px 875px #FFF , 1092px 1044px #FFF , 901px 1469px #FFF , 1919px 1188px #FFF , 381px 617px #FFF , 531px 8px #FFF , 957px 1767px #FFF , 211px 451px #FFF , 1241px 1189px #FFF , 1239px 1389px #FFF , 640px 1949px #FFF , 788px 105px #FFF , 1489px 1146px #FFF , 498px 1089px #FFF , 632px 671px #FFF , 1877px 623px #FFF , 686px 69px #FFF , 719px 1335px #FFF , 1286px 914px #FFF , 816px 1097px #FFF , 537px 924px #FFF , 1035px 133px #FFF , 1933px 1386px #FFF , 233px 145px #FFF , 835px 1580px #FFF , 1598px 554px #FFF , 393px 1158px #FFF , 297px 1320px #FFF , 877px 670px #FFF , 1178px 1784px #FFF , 1797px 1616px #FFF , 531px 152px #FFF , 419px 1225px #FFF , 1594px 423px #FFF , 134px 66px #FFF , 1415px 1881px #FFF , 585px 101px #FFF , 1137px 930px #FFF , 929px 591px #FFF , 1964px 634px #FFF , 1092px 756px #FFF , 1036px 1063px #FFF , 698px 1152px #FFF , 1255px 1701px #FFF , 1522px 243px #FFF , 113px 709px #FFF , 851px 438px #FFF , 1717px 1925px #FFF , 591px 172px #FFF , 1383px 946px #FFF , 1083px 391px #FFF , 1032px 1137px #FFF , 473px 842px #FFF , 1791px 1040px #FFF , 160px 1705px #FFF , 480px 27px #FFF , 1559px 124px #FFF , 1662px 1792px #FFF , 1442px 1660px #FFF , 175px 1105px #FFF , 1995px 1459px #FFF , 1346px 59px #FFF , 465px 451px #FFF , 1462px 931px #FFF , 165px 715px #FFF , 926px 1303px #FFF , 401px 521px #FFF , 1144px 931px #FFF , 1801px 79px #FFF , 1631px 1384px #FFF , 1492px 1716px #FFF , 1901px 873px #FFF , 1229px 1917px #FFF , 612px 1004px #FFF , 503px 1096px #FFF , 237px 130px #FFF , 1126px 512px #FFF , 1123px 146px #FFF , 1911px 729px #FFF , 1744px 1905px #FFF , 1414px 1402px #FFF , 510px 1379px #FFF , 312px 1367px #FFF , 657px 799px #FFF , 166px 900px #FFF , 1046px 914px #FFF , 68px 1220px #FFF , 541px 97px #FFF , 1894px 1303px #FFF , 1528px 1094px #FFF , 1443px 987px #FFF , 1427px 1667px #FFF , 387px 250px #FFF , 1219px 1995px #FFF , 627px 433px #FFF , 1377px 638px #FFF , 1740px 1139px #FFF , 671px 1731px #FFF , 41px 608px #FFF , 1021px 754px #FFF , 327px 1528px #FFF , 1062px 499px #FFF , 107px 450px #FFF , 134px 939px #FFF , 1786px 117px #FFF , 949px 658px #FFF , 1350px 23px #FFF , 1641px 127px #FFF , 1234px 48px #FFF , 50px 1498px #FFF , 1647px 707px #FFF , 58px 1751px #FFF , 864px 1446px #FFF , 1757px 1750px #FFF , 1765px 1143px #FFF , 1714px 93px #FFF , 294px 79px #FFF , 919px 1115px #FFF , 697px 256px #FFF , 1891px 1334px #FFF , 77px 1104px #FFF , 1331px 246px #FFF , 1867px 1226px #FFF , 1870px 475px #FFF , 1530px 569px #FFF , 63px 759px #FFF , 31px 1449px #FFF , 877px 958px #FFF , 452px 836px #FFF , 597px 1541px #FFF , 1053px 636px #FFF , 92px 451px #FFF , 156px 288px #FFF , 1926px 1568px #FFF , 1645px 1830px #FFF , 1505px 499px #FFF , 1488px 1747px #FFF , 292px 453px #FFF , 81px 1751px #FFF , 1248px 539px #FFF , 1725px 1924px #FFF , 1862px 1580px #FFF , 1224px 1664px #FFF , 159px 1258px #FFF , 1747px 1909px #FFF , 1906px 1061px #FFF , 845px 1586px #FFF , 1510px 1814px #FFF , 1907px 767px #FFF , 267px 508px #FFF , 1759px 278px #FFF , 10px 1741px #FFF , 323px 596px #FFF , 134px 1804px #FFF , 613px 1253px #FFF , 1181px 661px #FFF , 1093px 1320px #FFF , 1582px 118px #FFF , 33px 444px #FFF , 254px 1782px #FFF , 1970px 1416px #FFF , 943px 535px #FFF , 547px 1231px #FFF , 145px 1348px #FFF , 602px 1928px #FFF , 1673px 251px #FFF , 1728px 497px #FFF , 1255px 1274px #FFF , 474px 180px #FFF , 1254px 1122px #FFF , 1199px 1160px #FFF , 1895px 637px #FFF , 1649px 438px #FFF , 599px 416px #FFF , 1015px 11px #FFF , 247px 417px #FFF , 744px 1707px #FFF , 1367px 1682px #FFF , 1168px 831px #FFF , 239px 515px #FFF , 347px 829px #FFF , 131px 581px #FFF , 210px 391px #FFF , 840px 1639px #FFF , 1987px 1186px #FFF , 1141px 1818px #FFF , 1722px 1095px #FFF , 384px 856px #FFF , 1621px 1603px #FFF , 1465px 148px #FFF , 586px 182px #FFF , 1803px 1690px #FFF , 1748px 725px #FFF , 294px 1034px #FFF , 861px 1519px #FFF , 1981px 1408px #FFF , 1739px 1421px #FFF , 756px 1843px #FFF , 642px 652px #FFF , 1190px 139px #FFF , 1932px 554px #FFF , 1355px 1004px #FFF , 1778px 876px #FFF , 909px 1937px #FFF , 401px 996px #FFF , 1459px 1901px #FFF , 483px 1279px #FFF , 1268px 992px #FFF , 410px 1408px #FFF , 271px 158px #FFF , 360px 1634px #FFF , 1886px 1262px #FFF , 201px 1526px #FFF , 1812px 1157px #FFF , 268px 156px #FFF , 743px 1309px #FFF , 860px 190px #FFF , 778px 75px #FFF , 1367px 786px #FFF , 746px 1360px #FFF , 359px 1510px #FFF , 1586px 295px #FFF , 1379px 580px #FFF , 1862px 1888px #FFF , 932px 921px #FFF , 306px 1771px #FFF , 609px 1196px #FFF , 1028px 1246px #FFF , 730px 595px #FFF , 1588px 1969px #FFF , 1516px 1536px #FFF , 1201px 1099px #FFF , 1945px 245px #FFF , 814px 1350px #FFF , 1296px 1370px #FFF , 796px 71px #FFF , 1804px 385px #FFF , 1624px 138px #FFF , 19px 85px #FFF , 361px 1642px #FFF , 1957px 819px #FFF , 1212px 201px #FFF , 449px 430px #FFF , 601px 1362px #FFF , 1474px 852px #FFF , 487px 1456px #FFF , 1974px 121px #FFF , 1274px 842px #FFF , 1658px 196px #FFF , 1364px 1190px #FFF , 1410px 1346px #FFF , 1003px 845px #FFF , 1515px 1094px #FFF , 962px 854px #FFF , 605px 1008px #FFF , 1723px 1127px #FFF , 1792px 141px #FFF , 1824px 299px #FFF , 1804px 1410px #FFF , 691px 1167px #FFF , 638px 1177px #FFF , 154px 1237px #FFF , 1686px 1256px #FFF , 1883px 1172px #FFF , 533px 1698px #FFF , 922px 1772px #FFF , 705px 1382px #FFF , 1922px 1182px #FFF , 360px 1074px #FFF , 1557px 884px #FFF , 35px 438px #FFF , 223px 995px #FFF , 161px 189px #FFF , 1840px 1020px #FFF , 696px 1425px #FFF , 575px 1680px #FFF , 1922px 1317px #FFF , 953px 488px #FFF , 1630px 1563px #FFF , 466px 605px #FFF , 168px 1780px #FFF , 387px 1197px #FFF , 644px 389px #FFF , 1579px 895px #FFF , 1542px 1923px #FFF , 155px 804px #FFF , 1353px 251px #FFF , 780px 1829px #FFF , 1645px 830px #FFF , 1731px 1782px #FFF , 153px 698px #FFF , 210px 901px #FFF , 1199px 1629px #FFF , 705px 1977px #FFF , 558px 99px #FFF , 112px 703px #FFF , 309px 1111px #FFF , 430px 1937px #FFF , 1858px 607px #FFF , 337px 329px #FFF , 171px 486px #FFF , 834px 110px #FFF , 1342px 310px #FFF , 1642px 291px #FFF , 1958px 929px #FFF , 1107px 689px #FFF , 1475px 1117px #FFF , 1418px 59px #FFF , 953px 1455px #FFF , 1086px 1466px #FFF , 227px 903px #FFF , 1511px 556px #FFF , 1312px 1834px #FFF , 1233px 37px #FFF , 1754px 1172px #FFF , 97px 370px #FFF , 1203px 1184px #FFF , 1023px 870px #FFF , 1305px 1314px #FFF , 1700px 587px #FFF , 290px 36px #FFF , 1313px 367px #FFF , 1967px 1793px #FFF , 1871px 1571px #FFF , 203px 1979px #FFF , 761px 787px #FFF , 447px 443px #FFF , 790px 1118px #FFF , 980px 41px #FFF , 910px 755px #FFF , 1539px 1880px #FFF , 703px 1606px #FFF , 434px 676px #FFF , 1318px 1072px #FFF , 691px 410px #FFF , 1062px 1246px #FFF , 1349px 1756px #FFF , 750px 1397px #FFF , 1457px 490px #FFF , 1114px 1295px #FFF , 604px 1407px #FFF , 329px 1291px #FFF , 1095px 1305px #FFF , 877px 715px #FFF , 1234px 627px #FFF , 1266px 1122px #FFF , 836px 1284px #FFF , 723px 884px #FFF , 474px 1978px #FFF , 1160px 941px #FFF , 1890px 617px #FFF , 1586px 173px #FFF , 1142px 1089px #FFF , 606px 4px #FFF , 915px 836px #FFF , 1377px 379px #FFF , 1254px 197px #FFF , 1165px 628px #FFF , 1243px 901px #FFF , 935px 1133px #FFF , 624px 556px #FFF , 1502px 864px #FFF , 32px 1321px #FFF , 1795px 113px #FFF , 1372px 1234px #FFF , 1633px 550px #FFF , 67px 1363px #FFF , 95px 1960px #FFF , 1186px 1850px #FFF , 890px 1150px #FFF , 747px 729px #FFF , 543px 1565px #FFF , 306px 1184px #FFF , 484px 1106px #FFF , 609px 256px #FFF , 1092px 1882px #FFF , 1329px 794px #FFF , 1159px 1164px #FFF , 127px 779px #FFF , 1300px 1689px #FFF , 532px 1599px #FFF , 1361px 1309px #FFF , 940px 328px #FFF , 168px 259px #FFF , 1888px 516px #FFF , 1337px 259px #FFF , 1162px 1194px #FFF , 1713px 140px #FFF , 1580px 756px #FFF , 988px 1138px #FFF , 267px 623px #FFF , 264px 1385px #FFF , 550px 1210px #FFF , 786px 863px #FFF , 1858px 1880px #FFF , 393px 1102px #FFF , 1929px 1937px #FFF , 552px 684px #FFF , 588px 1821px #FFF , 1823px 112px #FFF , 883px 575px #FFF , 1843px 517px #FFF , 1750px 723px #FFF , 1216px 117px #FFF , 1061px 231px #FFF , 1454px 1786px #FFF , 1665px 1757px #FFF , 1147px 483px #FFF , 156px 306px #FFF , 1994px 9px #FFF , 1204px 1168px #FFF , 1615px 885px #FFF , 866px 592px #FFF , 360px 1646px #FFF , 1008px 1327px #FFF , 1142px 1012px #FFF , 1678px 273px #FFF , 313px 406px #FFF , 28px 436px #FFF , 563px 1315px #FFF , 90px 1800px #FFF , 1348px 1905px #FFF , 762px 880px #FFF , 377px 182px #FFF , 1632px 1134px #FFF , 1522px 1440px #FFF , 218px 971px #FFF , 1300px 27px #FFF , 1644px 868px #FFF , 1700px 5px #FFF , 1753px 1726px #FFF , 340px 599px #FFF , 1759px 823px #FFF , 1433px 1847px #FFF , 1395px 1289px #FFF , 1916px 593px #FFF , 1102px 1254px #FFF , 254px 1557px #FFF , 972px 1929px #FFF , 900px 1200px #FFF , 1949px 829px #FFF , 949px 683px #FFF , 20px 902px #FFF , 708px 676px #FFF , 1880px 103px #FFF , 1442px 231px #FFF , 1190px 1150px #FFF , 5px 13px #FFF , 1962px 550px #FFF , 180px 1568px #FFF , 1781px 1857px #FFF , 336px 75px #FFF , 1905px 1786px #FFF , 647px 1313px #FFF , 1093px 848px #FFF , 872px 1647px #FFF , 836px 1864px #FFF , 667px 1178px #FFF , 1001px 1671px #FFF , 574px 1066px #FFF , 1607px 198px #FFF , 1257px 1367px #FFF , 943px 257px #FFF , 1752px 486px #FFF , 71px 1066px #FFF , 1966px 1724px #FFF , 746px 595px #FFF , 1971px 1363px #FFF , 573px 1939px #FFF , 946px 1749px #FFF , 889px 1424px #FFF , 892px 1323px #FFF , 668px 650px #FFF;
      }

      #stars2 {
        width: 2px;
        height: 2px;
        background: transparent;
        box-shadow: 1374px 1535px #FFF , 1065px 1314px #FFF , 872px 761px #FFF , 515px 1524px #FFF , 351px 1790px #FFF , 307px 201px #FFF , 1091px 416px #FFF , 1316px 447px #FFF , 180px 226px #FFF , 1581px 1961px #FFF , 479px 621px #FFF , 1792px 919px #FFF , 1888px 1707px #FFF , 117px 1143px #FFF , 1003px 934px #FFF , 577px 237px #FFF , 1381px 1721px #FFF , 1926px 49px #FFF , 551px 824px #FFF , 1645px 937px #FFF , 8px 3px #FFF , 90px 1353px #FFF , 1691px 1760px #FFF , 737px 588px #FFF , 16px 1300px #FFF , 1366px 1944px #FFF , 1927px 1160px #FFF , 1594px 1308px #FFF , 1959px 1214px #FFF , 1877px 1564px #FFF , 1138px 679px #FFF , 1736px 1104px #FFF , 596px 1674px #FFF , 270px 684px #FFF , 1489px 1644px #FFF , 15px 878px #FFF , 123px 894px #FFF , 478px 966px #FFF , 475px 1723px #FFF , 366px 834px #FFF , 750px 772px #FFF , 1473px 1377px #FFF , 1938px 725px #FFF , 181px 1902px #FFF , 568px 225px #FFF , 1404px 734px #FFF , 1215px 1438px #FFF , 722px 831px #FFF , 554px 1329px #FFF , 99px 250px #FFF , 1977px 265px #FFF , 791px 1286px #FFF , 349px 1486px #FFF , 1008px 313px #FFF , 1222px 1378px #FFF , 1719px 388px #FFF , 611px 1739px #FFF , 1679px 732px #FFF , 1923px 595px #FFF , 1811px 671px #FFF , 1838px 965px #FFF , 756px 218px #FFF , 1567px 472px #FFF , 1772px 362px #FFF , 1165px 1539px #FFF , 1129px 1178px #FFF , 195px 423px #FFF , 1342px 166px #FFF , 41px 1315px #FFF , 885px 1009px #FFF , 287px 1415px #FFF , 1904px 1860px #FFF , 252px 1504px #FFF , 1234px 1682px #FFF , 1897px 1253px #FFF , 1702px 1846px #FFF , 1336px 428px #FFF , 1797px 774px #FFF , 1027px 1134px #FFF , 441px 567px #FFF , 657px 1044px #FFF , 1558px 40px #FFF , 1674px 1971px #FFF , 605px 404px #FFF , 1575px 655px #FFF , 967px 767px #FFF , 1418px 1506px #FFF , 1280px 1738px #FFF , 251px 430px #FFF , 514px 656px #FFF , 1970px 617px #FFF , 1425px 594px #FFF , 1266px 1235px #FFF , 1241px 1704px #FFF , 501px 936px #FFF , 633px 97px #FFF , 1998px 1532px #FFF , 584px 1230px #FFF , 597px 579px #FFF , 264px 1829px #FFF , 654px 30px #FFF , 1050px 589px #FFF , 1990px 900px #FFF , 1930px 758px #FFF , 1099px 737px #FFF , 495px 1094px #FFF , 1457px 1996px #FFF , 40px 834px #FFF , 25px 357px #FFF , 1775px 1685px #FFF , 1067px 602px #FFF , 1774px 930px #FFF , 1086px 1182px #FFF , 528px 1287px #FFF , 1910px 791px #FFF , 340px 1235px #FFF , 1530px 1743px #FFF , 596px 1206px #FFF , 1330px 25px #FFF , 52px 1320px #FFF , 336px 851px #FFF , 1613px 1788px #FFF , 1847px 829px #FFF , 682px 720px #FFF , 1249px 1467px #FFF , 1097px 224px #FFF , 1422px 494px #FFF , 1363px 1843px #FFF , 1347px 993px #FFF , 1291px 717px #FFF , 496px 53px #FFF , 35px 1289px #FFF , 1876px 348px #FFF , 1831px 882px #FFF , 582px 807px #FFF , 605px 1387px #FFF , 471px 1714px #FFF , 391px 94px #FFF , 196px 860px #FFF , 442px 1237px #FFF , 960px 1259px #FFF , 1528px 1377px #FFF , 395px 1058px #FFF , 1151px 163px #FFF , 1445px 1318px #FFF , 199px 1818px #FFF , 1900px 1742px #FFF , 1265px 1957px #FFF , 251px 1019px #FFF , 1902px 1319px #FFF , 639px 1053px #FFF , 1064px 1734px #FFF , 1213px 1919px #FFF , 424px 61px #FFF , 920px 1339px #FFF , 1640px 303px #FFF , 93px 1789px #FFF , 1119px 716px #FFF , 92px 1112px #FFF , 1450px 1711px #FFF , 1131px 324px #FFF , 239px 1234px #FFF , 418px 325px #FFF , 1960px 1826px #FFF , 1313px 469px #FFF , 1087px 1784px #FFF , 143px 1406px #FFF , 1376px 1539px #FFF , 1175px 390px #FFF , 1647px 943px #FFF , 1417px 1432px #FFF , 1787px 902px #FFF , 1734px 963px #FFF , 1938px 1384px #FFF , 1529px 627px #FFF , 1619px 1087px #FFF , 1907px 1257px #FFF , 1436px 1990px #FFF , 591px 1913px #FFF , 1488px 224px #FFF , 1970px 430px #FFF , 299px 1232px #FFF , 1396px 472px #FFF , 144px 1768px #FFF , 285px 1797px #FFF , 1105px 1395px #FFF , 1635px 26px #FFF , 1644px 686px #FFF , 428px 621px #FFF , 1064px 911px #FFF , 1377px 362px #FFF , 1172px 1115px #FFF , 1876px 786px #FFF , 1478px 1333px #FFF , 1929px 1383px #FFF , 1222px 1825px #FFF , 1390px 237px #FFF , 1374px 1134px #FFF , 972px 1096px #FFF , 1353px 1436px #FFF;
        animation: animStar 100s linear infinite;
      }
      #stars2:after {
        content: " ";
        position: absolute;
        top: 2000px;
        width: 2px;
        height: 2px;
        background: transparent;
        box-shadow: 1374px 1535px #FFF , 1065px 1314px #FFF , 872px 761px #FFF , 515px 1524px #FFF , 351px 1790px #FFF , 307px 201px #FFF , 1091px 416px #FFF , 1316px 447px #FFF , 180px 226px #FFF , 1581px 1961px #FFF , 479px 621px #FFF , 1792px 919px #FFF , 1888px 1707px #FFF , 117px 1143px #FFF , 1003px 934px #FFF , 577px 237px #FFF , 1381px 1721px #FFF , 1926px 49px #FFF , 551px 824px #FFF , 1645px 937px #FFF , 8px 3px #FFF , 90px 1353px #FFF , 1691px 1760px #FFF , 737px 588px #FFF , 16px 1300px #FFF , 1366px 1944px #FFF , 1927px 1160px #FFF , 1594px 1308px #FFF , 1959px 1214px #FFF , 1877px 1564px #FFF , 1138px 679px #FFF , 1736px 1104px #FFF , 596px 1674px #FFF , 270px 684px #FFF , 1489px 1644px #FFF , 15px 878px #FFF , 123px 894px #FFF , 478px 966px #FFF , 475px 1723px #FFF , 366px 834px #FFF , 750px 772px #FFF , 1473px 1377px #FFF , 1938px 725px #FFF , 181px 1902px #FFF , 568px 225px #FFF , 1404px 734px #FFF , 1215px 1438px #FFF , 722px 831px #FFF , 554px 1329px #FFF , 99px 250px #FFF , 1977px 265px #FFF , 791px 1286px #FFF , 349px 1486px #FFF , 1008px 313px #FFF , 1222px 1378px #FFF , 1719px 388px #FFF , 611px 1739px #FFF , 1679px 732px #FFF , 1923px 595px #FFF , 1811px 671px #FFF , 1838px 965px #FFF , 756px 218px #FFF , 1567px 472px #FFF , 1772px 362px #FFF , 1165px 1539px #FFF , 1129px 1178px #FFF , 195px 423px #FFF , 1342px 166px #FFF , 41px 1315px #FFF , 885px 1009px #FFF , 287px 1415px #FFF , 1904px 1860px #FFF , 252px 1504px #FFF , 1234px 1682px #FFF , 1897px 1253px #FFF , 1702px 1846px #FFF , 1336px 428px #FFF , 1797px 774px #FFF , 1027px 1134px #FFF , 441px 567px #FFF , 657px 1044px #FFF , 1558px 40px #FFF , 1674px 1971px #FFF , 605px 404px #FFF , 1575px 655px #FFF , 967px 767px #FFF , 1418px 1506px #FFF , 1280px 1738px #FFF , 251px 430px #FFF , 514px 656px #FFF , 1970px 617px #FFF , 1425px 594px #FFF , 1266px 1235px #FFF , 1241px 1704px #FFF , 501px 936px #FFF , 633px 97px #FFF , 1998px 1532px #FFF , 584px 1230px #FFF , 597px 579px #FFF , 264px 1829px #FFF , 654px 30px #FFF , 1050px 589px #FFF , 1990px 900px #FFF , 1930px 758px #FFF , 1099px 737px #FFF , 495px 1094px #FFF , 1457px 1996px #FFF , 40px 834px #FFF , 25px 357px #FFF , 1775px 1685px #FFF , 1067px 602px #FFF , 1774px 930px #FFF , 1086px 1182px #FFF , 528px 1287px #FFF , 1910px 791px #FFF , 340px 1235px #FFF , 1530px 1743px #FFF , 596px 1206px #FFF , 1330px 25px #FFF , 52px 1320px #FFF , 336px 851px #FFF , 1613px 1788px #FFF , 1847px 829px #FFF , 682px 720px #FFF , 1249px 1467px #FFF , 1097px 224px #FFF , 1422px 494px #FFF , 1363px 1843px #FFF , 1347px 993px #FFF , 1291px 717px #FFF , 496px 53px #FFF , 35px 1289px #FFF , 1876px 348px #FFF , 1831px 882px #FFF , 582px 807px #FFF , 605px 1387px #FFF , 471px 1714px #FFF , 391px 94px #FFF , 196px 860px #FFF , 442px 1237px #FFF , 960px 1259px #FFF , 1528px 1377px #FFF , 395px 1058px #FFF , 1151px 163px #FFF , 1445px 1318px #FFF , 199px 1818px #FFF , 1900px 1742px #FFF , 1265px 1957px #FFF , 251px 1019px #FFF , 1902px 1319px #FFF , 639px 1053px #FFF , 1064px 1734px #FFF , 1213px 1919px #FFF , 424px 61px #FFF , 920px 1339px #FFF , 1640px 303px #FFF , 93px 1789px #FFF , 1119px 716px #FFF , 92px 1112px #FFF , 1450px 1711px #FFF , 1131px 324px #FFF , 239px 1234px #FFF , 418px 325px #FFF , 1960px 1826px #FFF , 1313px 469px #FFF , 1087px 1784px #FFF , 143px 1406px #FFF , 1376px 1539px #FFF , 1175px 390px #FFF , 1647px 943px #FFF , 1417px 1432px #FFF , 1787px 902px #FFF , 1734px 963px #FFF , 1938px 1384px #FFF , 1529px 627px #FFF , 1619px 1087px #FFF , 1907px 1257px #FFF , 1436px 1990px #FFF , 591px 1913px #FFF , 1488px 224px #FFF , 1970px 430px #FFF , 299px 1232px #FFF , 1396px 472px #FFF , 144px 1768px #FFF , 285px 1797px #FFF , 1105px 1395px #FFF , 1635px 26px #FFF , 1644px 686px #FFF , 428px 621px #FFF , 1064px 911px #FFF , 1377px 362px #FFF , 1172px 1115px #FFF , 1876px 786px #FFF , 1478px 1333px #FFF , 1929px 1383px #FFF , 1222px 1825px #FFF , 1390px 237px #FFF , 1374px 1134px #FFF , 972px 1096px #FFF , 1353px 1436px #FFF;
      }

      #stars3 {
        width: 3px;
        height: 3px;
        background: transparent;
        box-shadow: 1061px 413px #FFF , 798px 979px #FFF , 886px 998px #FFF , 1859px 134px #FFF , 1804px 212px #FFF , 1299px 762px #FFF , 1811px 269px #FFF , 1812px 995px #FFF , 1963px 1940px #FFF , 580px 1039px #FFF , 970px 1766px #FFF , 54px 340px #FFF , 1034px 1959px #FFF , 160px 1433px #FFF , 738px 1511px #FFF , 12px 705px #FFF , 809px 792px #FFF , 1233px 1431px #FFF , 745px 1747px #FFF , 450px 1639px #FFF , 1925px 528px #FFF , 488px 1805px #FFF , 191px 1472px #FFF , 1151px 1356px #FFF , 985px 173px #FFF , 104px 633px #FFF , 890px 101px #FFF , 1472px 787px #FFF , 168px 1641px #FFF , 258px 913px #FFF , 1021px 223px #FFF , 1175px 1402px #FFF , 1162px 482px #FFF , 1341px 1764px #FFF , 1300px 1643px #FFF , 1593px 260px #FFF , 950px 1219px #FFF , 1633px 1961px #FFF , 777px 1689px #FFF , 1392px 1055px #FFF , 962px 1288px #FFF , 132px 808px #FFF , 807px 1447px #FFF , 263px 294px #FFF , 1324px 1642px #FFF , 276px 558px #FFF , 908px 1847px #FFF , 449px 1585px #FFF , 1868px 595px #FFF , 1683px 456px #FFF , 812px 877px #FFF , 397px 593px #FFF , 1501px 1006px #FFF , 1009px 982px #FFF , 1904px 412px #FFF , 794px 405px #FFF , 421px 994px #FFF , 365px 340px #FFF , 1508px 184px #FFF , 1688px 1754px #FFF , 428px 1343px #FFF , 609px 999px #FFF , 863px 558px #FFF , 841px 735px #FFF , 1619px 1368px #FFF , 986px 1789px #FFF , 1802px 1505px #FFF , 1136px 77px #FFF , 1561px 1307px #FFF , 82px 1462px #FFF , 1619px 1917px #FFF , 1029px 1636px #FFF , 1021px 274px #FFF , 103px 647px #FFF , 1416px 1440px #FFF , 1566px 477px #FFF , 1468px 1196px #FFF , 796px 766px #FFF , 392px 249px #FFF , 835px 430px #FFF , 901px 592px #FFF , 49px 1555px #FFF , 1797px 140px #FFF , 50px 1016px #FFF , 108px 1193px #FFF , 1334px 1036px #FFF , 1385px 1089px #FFF , 1327px 415px #FFF , 96px 257px #FFF , 561px 1218px #FFF , 1890px 978px #FFF , 1107px 855px #FFF , 1903px 1178px #FFF , 1016px 40px #FFF , 1378px 1888px #FFF , 210px 11px #FFF , 1710px 349px #FFF , 1408px 1108px #FFF , 303px 712px #FFF , 100px 68px #FFF;
        animation: animStar 150s linear infinite;
      }
      #stars3:after {
        content: " ";
        position: absolute;
        top: 2000px;
        width: 3px;
        height: 3px;
        background: transparent;
        box-shadow: 1061px 413px #FFF , 798px 979px #FFF , 886px 998px #FFF , 1859px 134px #FFF , 1804px 212px #FFF , 1299px 762px #FFF , 1811px 269px #FFF , 1812px 995px #FFF , 1963px 1940px #FFF , 580px 1039px #FFF , 970px 1766px #FFF , 54px 340px #FFF , 1034px 1959px #FFF , 160px 1433px #FFF , 738px 1511px #FFF , 12px 705px #FFF , 809px 792px #FFF , 1233px 1431px #FFF , 745px 1747px #FFF , 450px 1639px #FFF , 1925px 528px #FFF , 488px 1805px #FFF , 191px 1472px #FFF , 1151px 1356px #FFF , 985px 173px #FFF , 104px 633px #FFF , 890px 101px #FFF , 1472px 787px #FFF , 168px 1641px #FFF , 258px 913px #FFF , 1021px 223px #FFF , 1175px 1402px #FFF , 1162px 482px #FFF , 1341px 1764px #FFF , 1300px 1643px #FFF , 1593px 260px #FFF , 950px 1219px #FFF , 1633px 1961px #FFF , 777px 1689px #FFF , 1392px 1055px #FFF , 962px 1288px #FFF , 132px 808px #FFF , 807px 1447px #FFF , 263px 294px #FFF , 1324px 1642px #FFF , 276px 558px #FFF , 908px 1847px #FFF , 449px 1585px #FFF , 1868px 595px #FFF , 1683px 456px #FFF , 812px 877px #FFF , 397px 593px #FFF , 1501px 1006px #FFF , 1009px 982px #FFF , 1904px 412px #FFF , 794px 405px #FFF , 421px 994px #FFF , 365px 340px #FFF , 1508px 184px #FFF , 1688px 1754px #FFF , 428px 1343px #FFF , 609px 999px #FFF , 863px 558px #FFF , 841px 735px #FFF , 1619px 1368px #FFF , 986px 1789px #FFF , 1802px 1505px #FFF , 1136px 77px #FFF , 1561px 1307px #FFF , 82px 1462px #FFF , 1619px 1917px #FFF , 1029px 1636px #FFF , 1021px 274px #FFF , 103px 647px #FFF , 1416px 1440px #FFF , 1566px 477px #FFF , 1468px 1196px #FFF , 796px 766px #FFF , 392px 249px #FFF , 835px 430px #FFF , 901px 592px #FFF , 49px 1555px #FFF , 1797px 140px #FFF , 50px 1016px #FFF , 108px 1193px #FFF , 1334px 1036px #FFF , 1385px 1089px #FFF , 1327px 415px #FFF , 96px 257px #FFF , 561px 1218px #FFF , 1890px 978px #FFF , 1107px 855px #FFF , 1903px 1178px #FFF , 1016px 40px #FFF , 1378px 1888px #FFF , 210px 11px #FFF , 1710px 349px #FFF , 1408px 1108px #FFF , 303px 712px #FFF , 100px 68px #FFF;
      }

      #hero{
        position: fixed;
        height: 100%;
        width: 100%;
        font-family: "Montserrat Alternates", sans-serif;
        color: #FFF;
        background: radial-gradient(ellipse at bottom, #0c1116 0%, #090a0f 100%);
      }

      #horizon {
        position: absolute;
        width: 160%;
        height: 70%;
        border-radius: 100%/100%;
        background: #21759b;
      ;
        -webkit-filter: blur(30px);
        left: 50%;
        bottom: -20%;
        margin-left: -80%;
      }
      #horizon:before {
        content: " ";
        position: absolute;
        width: 81.25%;
        height: 70%;
        border-radius: 100%/100%;
        background: #00a2ed;
        -webkit-filter: blur(30px);
        opacity: 0.6;
        margin-left: 9.375%;
      }
      #horizon:after {
        content: " ";
        position: absolute;
        width: 32%;
        height: 20%;
        border-radius: 650px/350px;
        background: #00a2ed;
        -webkit-filter: blur(30px);
        opacity: 0.5;
        margin-left: 34%;
      }
      #horizon .glow {
        position: absolute;
        width: 100%;
        height: 100%;
        border-radius: 100%/100%;
        background: #21759b;
        -webkit-filter: blur(200px);
        opacity: 0.7;
        top: -10%;
      }

      #earth {
        position: absolute;
        width: 200%;
        height: 100%;
        background: black;
        border-radius: 100%/100%;
        left: 50%;
        bottom: -50%;
        margin-left: -100%;
      }
      #earth:before {
        content: " ";
        position: absolute;
        width: 100%;
        height: 100%;
        border-radius: 100%/100%;
        box-shadow: inset 0px 0px 62px 20px rgba(60, 105, 138, 0.85);
      }
      #earth:after {
        *zoom: 1;
        filter: progid:DXImageTransform.Microsoft.gradient(gradientType=1, startColorstr='#FF000000', endColorstr='#FF000000');
        background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuMCIgeTE9IjAuNSIgeDI9IjEuMCIgeTI9IjAuNSI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzAwMDAwMCIvPjxzdG9wIG9mZnNldD0iNTAlIiBzdG9wLWNvbG9yPSIjMDAwMDAwIiBzdG9wLW9wYWNpdHk9IjAuMCIvPjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iIzAwMDAwMCIvPjwvbGluZWFyR3JhZGllbnQ+PC9kZWZzPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiIC8+PC9zdmc+IA==');
        background-size: 100%;
        background-image: -webkit-gradient(linear, 0% 50%, 100% 50%, color-stop(0%, #000000), color-stop(50%, rgba(0, 0, 0, 0)), color-stop(100%, #000000));
        background-image: -moz-linear-gradient(left, #000000 0%, rgba(0, 0, 0, 0) 50%, #000000 100%);
        background-image: -webkit-linear-gradient(left, #000000 0%, rgba(0, 0, 0, 0) 50%, #000000 100%);
        background-image: linear-gradient(to right, #000000 0%, rgba(0, 0, 0, 0) 50%, #000000 100%);
        content: " ";
        position: absolute;
        width: 100%;
        height: 100%;
        border-radius: 100%/100%;
      }

      #title {
        position: absolute;
        font-weight: 300;
        top: 36%;
        left: 0;
        right: 0;
        margin-top: -80px;
        font-size: 60px;
        text-align: center;
        letter-spacing: -15px;
        padding-left: 20px;
        background: -webkit-linear-gradient(white, #dbdde0, #21759b);
        background: -moz-linear-gradient(white, #dbdde0, #21759b);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation-duration: 80000000000s;
        animation-iteration-count: infinite;
        animation-timing-function: ease;
        animation-name: animGravity;
      }

      #subtitle {
        position: absolute;
        font-weight: 300;
        top: 60%;
        left: 0;
        right: 0;
        font-size: 25px;
        text-align: center;
        letter-spacing: 6px;
      }
      #subtitle span {
        color: #d8d8d8;
        animation-duration: 6s;
        animation-iteration-count: 1;
        animation-timing-function: ease;
      }
      #subtitle span a {
        color: #d8d8d8;
        animation-duration: 6s;
        animation-iteration-count: 1;
        animation-timing-function: ease;
      }
      #subtitle span:nth-child(1) {
        animation-name: animDont;
      }
      #subtitle span:nth-child(2) {
        animation-name: animLet;
      }
      #subtitle span:nth-child(3) {
        animation-name: animGo;
      }
      #subtitle span:nth-child(4) {
        animation-name: animBt;
      }
      #subtitle span:nth-child(4) a {
        animation-name: animBt;
      }

      @keyframes animStar {
        from {
          transform: translateY(0px);
        }
        to {
          transform: translateY(-2000px);
        }
      }
      @keyframes animGravity {
        0% {
          transform: translateY(126px);
          opacity: 0;
        }
        0.00000001%, 100% {
          letter-spacing: 10px;
          padding-left: 10px;
          transform: translateY(96px);
          opacity: 1;
        }
      }
      @keyframes animDont {
        0%	, 15% {
          transform: translateY(-26px);
          opacity: 0;
        }
        35%, 100% {
          transform: translateY(0px);
          opacity: 1;
        }
      }
      @keyframes animLet {
        0%	, 25% {
          transform: translateY(-26px);
          opacity: 0;
        }
        45%, 100% {
          transform: translateY(0px);
          opacity: 1;
        }
      }
      @keyframes animGo {
        0%	, 35% {
          transform: translateY(-26px);
          opacity: 0;
        }
        55%, 100% {
          transform: translateY(0px);
          opacity: 1;
        }
      }
      @keyframes animBt {
        0%	, 45% {
          transform: translateY(-26px);
          opacity: 0;
        }
        65%, 100% {
          transform: translateY(0px);
          opacity: 1;
        }
      }
      #hero{
        height: 100vh;
        background:black !important;
        z-index: 10;
        position: relative;

      }

    }
    </style>
  </head>
  <body class="appear-animate">
    <div id="top"></div>
    <!-- Navigation panel-->
    <nav class="main-nav white transparent stick-fixed">
      <div class="full-wrapper relative clearfix">
        <!-- Logo ( paste you text or image)-->
        <div class="nav-logo-wrap"><a href="#hero" class="logo"><span class="higl">Star</span>ies</a></div>
        <div class="navbar-mobile"><i class="fa fa-bars"></i></div>
        <!-- Main Menu-->
        <div class="inner-nav navbar-desktop">
          <ul class="clearlist scroll scroll-nav">
            <!-- End Item With Sub-->
            <li><a href="#portafolio"class="menu-has-sub">¡Comenzar! <i class="fa fa-angle-down"></i></a>
              <ul class="menu-sub">
                <li><a href="Login/index.html">Regístrate<ion-icon name="person-add" style="font-size:20px;margin-bottom:-5px;margin-left:80px;"></ion-icon></a></li>
                <li><a href="Login/login.php">Inicia Sesión<ion-icon name="log-in" style="font-size:20px;margin-bottom:-5px;margin-left:63px;"></ion-icon></a></li>
              </ul>
            </li>
            <li><a href="#facts">¿Cómo Funciona?</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!--Start section hero-->

    <section id="hero" class="full-screen">

    <div id='stars'></div>
    <div id='stars2'></div>
    <div id='stars3'></div>
    <div id='horizon'>
      <div class='glow'></div>
    </div>
    <div id='earth'></div>
    <div id='title'>
      STARIES
    </div>
    <div id='subtitle'>
      <span>
        WHERE
      </span>
      <span>
        STORIES
      </span>
      <span>
        SHINE
      </span>
      <span style="font-size:14px;z-index:10;">
        <br><br><br>
        ¡Comienza A Explorar!
        <br><br><br>
        <a href="#about" class="btn-scroll-down scroll" style="font-size: 10px;"></a>
      </span>
    </div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    </section>
    <div id="page" class="page">
      <!--Start section about-->
      <section id="about">
        <div class="container">
          <div class="row mt-40 mt-xs-20">
            <div class="col-md-12 text-center">
              <h3 style="font-size:30px; margin-right:400px;">¡Bienvenido a<b style="color:#21759B;"> Staries!</b></h3>
            </div>
          </div>
          <div class="row mt-60 mt-xs-30">
            <div class="col-md-8 col-md-offset-2 text-center">
              <blockquote data-wow-delay="0.1s" data-wow-duration="1s" class="about-quote wow fadeInUp">
                <br><br>
                <p align="left" style="font-size:24px;">Un lugar para encontrar historias únicas, <br>creadas por escritores que buscan <br>reinventar la lectura.

                </p>
              </blockquote>
						  <img src="img/team/logo2.png" width="330px" height="280px" style="margin-left:600px; margin-top:-250px;">
              <br><br>
              <span style="font-size:14px;letter-spacing:6px;">
                ¡Aprende Cómo Funciona!
                <br><br><br><br>
                <a href="#facts" class="btn-scroll-down scroll" style="font-size: 10px;"></a>
              </span>
            </div>

          </div>
        </div>
        <div id="facts" class="small-section bg-light mt-80 mt-xs-80" style="background: #21759B; color: white;">
          <style media="screen">
            ion-icon{font-size: 45px; margin-bottom: -15px;}
          </style>
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <br>
                <h3 style="font-size:30px; margin-right:400px; color:white;">Es sencillo...</h3>
              </div>
            </div>
            <div class="row mt-60 text-center">
              <div class="col-md-3 col-sm-6 text-center">
                <div class="fact-item">
                  <div class="fact-number"><span class="focus-number">1</span>&emsp;<ion-icon name="contact"></ion-icon></div>
                  <h5 class="fact-desc alt-font" style="color:white;">Crea una cuenta o inicia sesión para acceder al contenido gratuito</h5>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 text-center">
                <div class="fact-item">
                  <div class="fact-number"><span class="focus-number">2</span>&emsp;<ion-icon name="rocket"></ion-icon></div>
                  <h5 class="fact-desc alt-font" style="color:white;">Explora nuestro catálogo de historias exclusivas</h5>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 text-center">
                <div class="fact-item">
                  <div class="fact-number"><span class="focus-number">3</span>&emsp;<ion-icon name="book"></ion-icon></div>
                  <h5 class="fact-desc alt-font" style="color:white;">Elige una historia y disfruta de la innovadora experiencia de lectura </h5>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 text-center">
                <div class="fact-item">
                  <div class="fact-number"><span class="focus-number">4</span>&emsp;<ion-icon name="share"></ion-icon></div>
                  <h5 class="fact-desc alt-font" style="color:white;">Comparte las historias que más te gusten con tus amigos, para ayudar a la comunidad a <br>crecer</h5>
                </div>
                <br><br>
              </div>
              <span style="font-size:14px;letter-spacing:6px;">
                ¡Crea Tu Cuenta!
                <br><br>
                <a href="#portfolio" class="btn-scroll-down scroll" style="font-size: 10px;"></a>
              </span>
            </div>
          </div>
        </div>
      </section>
      <!--Portfolio Start-->
      <section id="portfolio" class="bg-light pb-60" style="background:#21759B; color: white;">
        <style media="screen">
          ion-icon{font-size: 105px; margin-bottom: -50px;}
          #btn-log{font-size: 15px;border-radius:12px;padding: 10px;width: 100%;border: 3px white;background-color: #FFFFFF;color:#21759b;font-family: "Montserrat Alternates", sans-serif;}
          #btn-log:hover{color: white;}
        </style>
        <div class="container text-center">
          <div class="row mt-60 text-center">
            <div class="col-md-12">
              <br><br>
              <h3 style="font-size:30px; color:white;text-align:center;">¡Empieza a Leer!</h3>
            </div>
          </div>
          <div class="row mt-60 text-center">
            <div class="col-md-6 col-sm-6 text-center">
              <div class="fact-item">
                <div class="fact-number"><ion-icon name="person-add"></ion-icon></div>
                </div>
                <br>
                <div data-effect="fadeInUp" class="mt-30 animate-e"><a href="Login/index.html" class="scroll btn btn-coffee btn-border-w btn-round btn-medium">Crear Cuenta</a></div>
            </div>
            <div class="col-md-6 col-sm-6 text-center">
              <div class="fact-item">
                <div class="fact-number"><ion-icon name="log-in"></ion-icon></div>
              </div>
              <br>
              <div data-effect="fadeInUp" class="mt-30 animate-e"><a href="Login/login.html" class="scroll btn btn-coffee btn-border-w btn-round btn-medium">Iniciar Sesión</a></div>
            </div>
          </div>
          </div>
          <br><br>
      </section>

      <!-- Page Footer Start-->
      <footer class="page-footer" style="background:#21759B; color: white;">
        <div class="container text-center">
          <!-- Social links-->
          <div class="social-links"><a href="https://twitter.com/stariesbooks" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a><a href="https://www.instagram.com/stariesbooks/?hl=es-la" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a></div>
          <div class="copy-right mt-50"style="color:white;"><a href="#" class="alt-font" style="color:white;">© Staries 2020</a>
            <p style="color:white;">Caído del Cielo</p>
            <br>
            <br>
            <img src="img/team/GEO.png" width="200px" height="250px">
          </div>
        </div><a href="#top" class="scroll scroll-to-top"><i class="fa fa-angle-up"style="color:white;"></i></a>
      </footer>
      <!-- Page footer end -->
    </div>

    <!--JS sctipts-->
    <script src="js/vendor/jquery-2.1.3.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/plagins.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false&amp;amp;language=en"></script>
    <script src="js/gmap3.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.fitvids.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/contact-form.js"></script>
    <!--[if lt IE 10]><script type="text/javascript" src="js/placeholder.js"></script><![endif]-->

    <!--Delete after config-->
    <script src="js/style.changer.js"></script>
  </body>

<!-- Mirrored from dexifly.com/exline/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Oct 2019 15:40:55 GMT -->
</html>