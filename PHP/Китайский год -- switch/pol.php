<!doctype html>
<html>
<head>
<title></title>
</head>
<body>

<?php 
$a = 5;
    
    switch ($a){
        case 0:
            echo "� ����� 0<br>";
            break;
        case 1:
            echo "� ����� 1<br>";
            break;
        case 2:
            echo "� ����� 2<br>";
            break;
        case 3:
            echo "� ����� 3<br>";
            break;
        default:
            echo "� �� ����� �� 1 �� 2 �� 3-�!<br>";
    }
?>
        
<?php
    $year =2015;
    switch(($year - 4) % 12){
        case  0: $zodiac = '�����';     break;
        case  1: $zodiac = '����';      break;
        case  2: $zodiac = '�����';     break;
        case  3: $zodiac = '��������';  break;
        case  4: $zodiac = '�������';   break;
        case  5: $zodiac = '����';      break;
        case  6: $zodiac = '������';    break;
        case  7: $zodiac = '�����';     break;
        case  8: $zodiac = '��������';  break;
        case  9: $zodiac = '������';    break;
        case 10: $zodiac = '������';    break;
        case 11: $zodiac = '������';    break;
    }
    echo "{$year} ��� - {$zodiac}.";
    ?>
			
</body>
</html>