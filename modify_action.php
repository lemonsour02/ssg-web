<?php
    $connect = mysqli_connect('127.0.0.1', 'root', 'ghdtjsdk16', 'bbs') or die("fail");
    $number = $_GET[number];
    $title = $_GET[title];
    $content = $_GET[content];
    $date = date('Y-m-d H:i:s');
    $query = "update board set title='$title', content='$content', date='$date' where number=$number";
    $result = $connect->query($query);

    $URL = "./index.php";

    if($result) {
?>
        <script>
            alert("수정되었습니다.");
            location.replace("<?php echo $URL?>");
        </script>
<?php    }
    else {
        echo "fail";
    }
?>