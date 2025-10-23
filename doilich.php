<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Tính Can Chi theo năm</title>
</head>
<body>
    <h2>Tính Can Chi theo năm sinh</h2>
    <form method="POST" action="">
        <label>Nhập năm sinh: </label>
        <input type="number" name="txtYear" required min="1">
        <br><br>
        <input type="submit" name="btnXet" value="Xét">
    </form>

    <?php
    function getCanChi($year) {
        $can = array("Giáp", "Ất", "Bính", "Đinh", "Mậu", "Kỷ", "Canh", "Tân", "Nhâm", "Quý");
        $chi = array("Tý", "Sửu", "Dần", "Mão", "Thìn", "Tỵ", "Ngọ", "Mùi", "Thân", "Dậu", "Tuất", "Hợi");

        $baseYear = 1900;
        $baseCan = 0;  
        $baseChi = 0;  

        $yearDifference = $year - $baseYear;

        $can = ($baseCan + $yearDifference) % 10;
        $chiIndex = ($baseChi + $yearDifference) % 12;

        switch ($can) {
            case 0: 
                $can = "Giáp"; break;
            case 1: 
                $can = "Ất"; break;
            case 2:
                $can  = "Bính"; break;
            case 3:
                $can  = "Đinh"; break;
            case 4:
                $can = "Mậu"; break;
            case 5:
                $can = "Kỷ"; break;
            case 6:
                $can = "Canh"; break;
            case 7:
                $can  = "Tân"; break;
            case 8:
                $can  = "Nhâm"; break;
            case 9:
                $can  = "Quý"; break;
            default:$can = "Không xác định"; break;
        }

        switch ($chiIndex) {
            case 0:
                 $chi= "Tý"; break;
            case 1: 
                $chi = "Sửu"; break;
            case 2:
                $chi= "Dần"; break;
            case 3: 
                $chi= "Mão"; break;
            case 4:
                $chi= "Thìn"; break;
            case 5: 
                $chi = "Tỵ"; break;
            case 6:
                $chi = "Ngọ"; break;
            case 7: 
                $chi = "Mùi"; break;
            case 8:
                $chi = "Thân"; break;
            case 9: 
                $chi = "Dậu"; break;
            case 10:
                $chi = "Tuất"; break;
            case 11:
                $chi= "Hợi"; break;
            default: $chi = "Không xác định"; break;
        }

        return $can . " " . $chi;
    }

    if (isset($_POST['btnXet'])) {
        $year = $_POST['txtYear'];

        if ($year > 0) {
            echo "Năm sinh $year theo Can Chi là: " . getCanChi($year);
        } else {
            echo "Vui lòng nhập một năm hợp lệ!";
        }
    }
    ?>
</body>
</html>
