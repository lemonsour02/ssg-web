<?php
 
        $connect = mysqli_connect('127.0.0.1', 'root', 'ghdtjsdk16', 'bbs') or die("join_action fail");
 
        $id=$_GET[id];
        $pw=$_GET[pw];
        $email=$_GET[email];
 
        $date = date('Y-m-d H:i:s');
 
        $query = "insert into member (id, pw, date, permit) values ('$id', '$pw', '$date', 0)";
 
 
        $result = mysqli_query($connect, $query);
 
        if($result) {
        ?>      <script>
                alert('가입 되었습니다.');
                location.replace("./login.php");
                </script>
 
<?php   }
        else{
?>              <script>
                        
                        alert("fail?");
                </script>
<?php   }
 
        mysqli_close($connect);
?>