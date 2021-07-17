<?php
        $connect = mysqli_connect('127.0.0.1', 'root', 'ghdtjsdk16', 'bbs') or die("modify fail");

        $id = $_GET['id'];
        $number = $_GET['number'];
        $query = "select title, content, date, id from board where number=$number";
        $result = $connect->query($query);
        $rows = mysqli_fetch_assoc($result);
        $usrid = $rows['id'];

        session_start();


        $URL = "./index.php";

        if(!isset($_SESSION['userid'])) {
?>              <script>
                        alert("권한이 없습니다.");
                        location.replace("<?php echo $URL?>");
                </script>
<?php   }

        else if($_SESSION['userid']==$usrid) {
                
                $sql = "DELETE FROM board WHERE number ='$number'";
                $re = $connect->query($sql);
                ?>

                <script>
                        alert("삭제하였습니다.");
                        location.replace("<?php echo $URL?>");
                </script>
                

<?php   }
        else {
?>              <script>
                        alert("아이디가 일치하지 않습니다.");
                        location.replace("<?php echo $URL?>");
                </script>
<?php   }
?>