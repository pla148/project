
<?php
    include_once('header.php');
   

?>  
<body class="bodyquizz" style="background-color:white;">
    <form id="page_start"  method="post" >
        <table align="center"   id="tb1">
            <tr>
                <td>
                    <textarea name="ques" class="ques" id="quesS"  rows="4">LET'S CHECK YOUR PERSONAL COLOR!</textarea>
                </td>
            </tr>
            <tr>
            <td>
                    <input type="image" src="./img/start.jpg" alt="" id="imgS" class="img" >
                </td>
                
            </tr>
            <tr>
                <td>
                <input type="submit" value="Start" class="ans" id="start" name="start" >
                </td>
            </tr>
        </table>
    </form>
    <form id="page_ques"  method="post" >
        <table align="center"   id="tb1">
            <tr>
                <td colspan="2">
                    <textarea type="text" id="ques" class="ques" name="ques" rows="5">   
                    </textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="image" src="" alt="" id="img" class="img" readonly>
                </td>
                
            </tr>
            
                <tr >
                    <td style="width: 400px;">
                        <input type="submit" value="" class="ans" id="ans1" name="ans1" rows="5">
                    </td>
                    <td>
                        <input type="submit" value="" class="ans" id="ans2" name="ans2" rows="5">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="" class="ans" id="ans3" name="ans3">
                    </td>
                    <td>
                        <input type="submit" value="" class="ans" id="ans4" name="ans4">
                    </td>
                </tr>

        </table>
    </form>
    <form id="page_KQ"  method="post" >
        <table align="center"   id="tb1" >
            <tr>
                <td>
                    <img src="" alt="" id="imgKQ">
                </td>
            </tr>
        </table>
    </form>
    <?php
        
        require_once 'Ketnoi.php';
        if(!isset($_SESSION['id']) && !isset($_POST['start']))
        {
            echo '<script>';
            echo 'document.getElementById("page_start").style.display = "block";';
            echo 'document.getElementById("page_ques").style.display = "none";';
            echo 'document.getElementById("page_KQ").style.display = "none";';
            echo '</script>'; 
            session_destroy();

        }else{
            if(isset($_POST['start']))
            {

                echo '<script>';
                echo 'document.getElementById("page_start").style.display = "none";';
                echo 'document.getElementById("page_ques").style.display = "block";';
                echo 'document.getElementById("page_KQ").style.display = "none";';
                echo '</script>'; 
            }
            if(!isset($_SESSION['id']))
            {
                $_SESSION['id']= 1 ;
                $sql = "SELECT * FROM tbquizz  ";
                $result = mysqli_query($conn, $sql);
                if ($row = mysqli_fetch_assoc($result)) {   
                    
                    $_SESSION['sum']=mysqli_num_rows($result);
                    $ques = $_SESSION['id'].'/'.$_SESSION['sum'].': '.$row["ques"];
                    $image = $row['img'];
                    $ans1 = $row['ans1'];
                    $ans2 = $row['ans2'];
                    $ans3 = $row['ans3'];
                    $ans4 = $row['ans4'];
                    echo '<script>';
                    echo 'document.getElementById("ques").value = "' . $ques . '";';
                    echo 'document.getElementById("img").src = "./img/' . $image . '";';
                    echo 'document.getElementById("ans1").value = "' . $ans1 . '";';
                    echo 'document.getElementById("ans2").value = "' . $ans2 . '";';
                    echo 'document.getElementById("ans3").value = "' . $ans3 . '";';
                    echo 'document.getElementById("ans4").value = "' . $ans4 . '";';
                    echo '</script>';       
                }
            }
            if(isset($_SESSION['id']))
            {
                $sql = "SELECT * FROM tbquizz  ";
                $result = mysqli_query($conn, $sql);
                if ($row = mysqli_fetch_assoc($result)) {   
                    
                    $_SESSION['sum']=mysqli_num_rows($result);
                    $ques = $_SESSION['id'].'/'.$_SESSION['sum'].': '.$row["ques"];
                    $image = $row['img'];
                    $ans1 = $row['ans1'];
                    $ans2 = $row['ans2'];
                    $ans3 = $row['ans3'];
                    $ans4 = $row['ans4'];
                    echo '<script>';
                    echo 'document.getElementById("ques").value = "' . $ques . '";';
                    echo 'document.getElementById("img").src = "./img/' . $image . '";';
                    echo 'document.getElementById("ans1").value = "' . $ans1 . '";';
                    echo 'document.getElementById("ans2").value = "' . $ans2 . '";';
                    echo 'document.getElementById("ans3").value = "' . $ans3 . '";';
                    echo 'document.getElementById("ans4").value = "' . $ans4 . '";';
                    echo '</script>';       
                }
            }
        
            if(!isset($_SESSION['t1']) )
            {
                $_SESSION['t1']=0;
            }
            if(!isset($_SESSION['t2']) )
            {
                $_SESSION['t2']=0;
            }
            if(!isset($_SESSION['t3']) )
            {
                $_SESSION['t3']=0;
            }
            if(!isset($_SESSION['t4']) )
            {
                $_SESSION['t4']=0;
            }

            if($_SESSION['id']<$_SESSION['sum'])    
            {   
                echo '<script>';
                echo 'document.getElementById("page_start").style.display = "none";';
                echo 'document.getElementById("page_KQ").style.display = "none";';
                echo '</script>';
            if(isset($_POST['ans1']))
            {
                    $_SESSION['t1']=$_SESSION['t1']+1;
                    $tt=$_SESSION['id']+1;
                    $sql = "SELECT * FROM tbquizz where id= $tt ";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result)>0)
                    {
                        $_SESSION['id']=$tt;
                       
                        if ($row = mysqli_fetch_assoc($result)) {
                            $ques = $tt.'/'.$_SESSION['sum'].': '.$row["ques"];
                            $image = $row['img'];
                            $ans1 = $row['ans1'];
                            $ans2 = $row['ans2'];
                            $ans3 = $row['ans3'];
                            $ans4 = $row['ans4'];
                            echo '<script>';
                            echo 'document.getElementById("ques").value = "' . $ques . '";';
                            echo 'document.getElementById("img").src = "./img/' . $image . '";';
                            echo 'document.getElementById("ans1").value = "' . $ans1 . '";';
                            echo 'document.getElementById("ans2").value = "' . $ans2 . '";';
                            echo 'document.getElementById("ans3").value = "' . $ans3 . '";';
                            echo 'document.getElementById("ans4").value = "' . $ans4 . '";';
                            echo '</script>';       
                        }
                    }
            }
            if(isset($_POST['ans2']))
            {
                    $_SESSION['t2']=$_SESSION['t2']+1;
                    $tt=$_SESSION['id']+1;
                    $sql = "SELECT * FROM tbquizz where id= $tt ";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result)>0)
                    {
                        $_SESSION['id']=$tt;
                        
                        if ($row = mysqli_fetch_assoc($result)) {
                            $ques = $tt.'/'.$_SESSION['sum'].': '.$row["ques"];
                            $image = $row['img'];
                            $ans1 = $row['ans1'];
                            $ans2 = $row['ans2'];
                            $ans3 = $row['ans3'];
                            $ans4 = $row['ans4'];
                            echo '<script>';
                            echo 'document.getElementById("ques").value = "' . $ques . '";';
                            echo 'document.getElementById("img").src = "./img/' . $image . '";';
                            echo 'document.getElementById("ans1").value = "' . $ans1 . '";';
                            echo 'document.getElementById("ans2").value = "' . $ans2 . '";';
                            echo 'document.getElementById("ans3").value = "' . $ans3 . '";';
                            echo 'document.getElementById("ans4").value = "' . $ans4 . '";';
                            echo '</script>';       
                        }
                    }
            }
            if(isset($_POST['ans3']))
            {
                    $_SESSION['t3']=$_SESSION['t3']+1;
                    $tt=$_SESSION['id']+1;
                    $sql = "SELECT * FROM tbquizz where id= $tt ";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result)>0)
                    {
                        $_SESSION['id']=$tt;
        
                        if ($row = mysqli_fetch_assoc($result)) {
                            $ques = $tt.'/'.$_SESSION['sum'].': '.$row["ques"];
                            $image = $row['img'];
                            $ans1 = $row['ans1'];
                            $ans2 = $row['ans2'];
                            $ans3 = $row['ans3'];
                            $ans4 = $row['ans4'];
                            echo '<script>';
                            echo 'document.getElementById("ques").value = "' . $ques . '";';
                            echo 'document.getElementById("img").src = "./img/' . $image . '";';
                            echo 'document.getElementById("ans1").value = "' . $ans1 . '";';
                            echo 'document.getElementById("ans2").value = "' . $ans2 . '";';
                            echo 'document.getElementById("ans3").value = "' . $ans3 . '";';
                            echo 'document.getElementById("ans4").value = "' . $ans4 . '";';
                            echo '</script>';       
                        }
                    }
            }
            if(isset($_POST['ans4']))
            {
                    $_SESSION['t4']=$_SESSION['t4']+1;
                    $tt=$_SESSION['id']+1;
                    $sql = "SELECT * FROM tbquizz where id= $tt ";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result)>0)
                    {
                        $_SESSION['id']=$tt;
                        
                        if ($row = mysqli_fetch_assoc($result)) {
                            $ques = $tt.'/'.$_SESSION['sum'].': '.$row["ques"];
                            $image = $row['img'];
                            $ans1 = $row['ans1'];
                            $ans2 = $row['ans2'];
                            $ans3 = $row['ans3'];
                            $ans4 = $row['ans4'];
                            echo '<script>';
                            echo 'document.getElementById("ques").value = "' . $ques . '";';
                            echo 'document.getElementById("img").src = "./img/' . $image . '";';
                            echo 'document.getElementById("ans1").value = "' . $ans1 . '";';
                            echo 'document.getElementById("ans2").value = "' . $ans2 . '";';
                            echo 'document.getElementById("ans3").value = "' . $ans3 . '";';
                            echo 'document.getElementById("ans4").value = "' . $ans4 . '";';
                            echo '</script>';       
                        }
                    }
            }
            
        }else{
            if(isset($_POST['ans1']))
            {
                $_SESSION['t1']=$_SESSION['t1']+1;
            }
            if(isset($_POST['ans2']))
            {
                $_SESSION['t2']=$_SESSION['t2']+1;
            }
            if(isset($_POST['ans3']))
            {
                $_SESSION['t3']=$_SESSION['t3']+1;
            }
            if(isset($_POST['ans4']))
            {
                $_SESSION['t4']=$_SESSION['t4']+1;
            }
            $max = $_SESSION['t1'];
            for($i=2;$i<=4;$i++)
            {
                if($_SESSION['t'.$i]>$max)
                {
                    $max=$_SESSION['t'.$i];
                }
            }
            for($i=1;$i<=4;$i++)
            {
                if($_SESSION['t'.$i]==$max)
                {
                    echo '<script>';
                    echo 'document.getElementById("page_start").style.display = "none";';
                    echo 'document.getElementById("page_ques").style.display = "none";';
                    echo 'document.getElementById("page_KQ").style.display = "block";';
                    echo 'document.getElementById("imgKQ").src = "./img/tong/KQ' . $i . '.png";';
                    
                    echo '</script>';   
                }
            }
           
            session_destroy();
        }
    }
            
        
        
    ?>
    
</body>    
