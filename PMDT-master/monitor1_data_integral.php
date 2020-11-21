<html>

<head>
    <title>PMDT</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
    <script src="nav.js"></script>
    
</head>

<body>
    <?php include "nav.php"; ?>
        
        <div class="col-sm-12 row" style="margin-top: 5%;">
            <div class="col-sm-3">
                <?php include "sidebar.php"; ?>
            </div>
            <div class="col-sm-9">
                <div class="card">
                    <div class="card-body">
                        <div class="inner" style="margin-left:-1%;">
                           <a href="monitor1_data_integral.php" ><input id="b1" type="button" value="Integrals" style="width: 81px;height: 30px;font-weight: bold;background-color: blue;color: aliceblue;"></a>
                           <a href="monitor1_data_fieldmonitor.php"> <input id="b2" type="button" value="Field Monitors" style="width: 122px;height: 30px;font-weight: bold;background-color: blue;color: aliceblue;"></a>
                           <a href="monitor1_data_certification.php"> <input id="b3" type="button" value="Certification Test Results" style="width: 211px;height: 30px;font-weight: bold;background-color: blue;color: aliceblue;"></a>
                            <a href="monitor1_data_maintain.php"><input id="b4" type="button" value="Maintenance Alerts" style="width: 159px;height: 30px;font-weight: bold;background-color: blue;color: aliceblue;"></a>
                            <a href="monitor1_data_status.php"><input id="b5" type="button" value="Status" style="width: 63px;height: 30px;font-weight: bold;background-color: blue;color: aliceblue;"></a>
                            <br>
                            <div id="d12">
                            <table style="width:145px;height:25px ;"><tr><td id=" ">
                                                <?php
                                                    include('config.php');
                                                    $sql="SELECT * from monitor1 WHERE main='Integral' AND type='Course'";
                                                    $result=$conn->query($sql);
                                                    if($result->num_rows>0)
                                                    {
                                                        $a=[];
                                                        $b=[];
                                                        $c=[];
                                                        $d=[];
                                                        $e=[];
                                                        $j=0;
                                                        while($row=$result->fetch_assoc()){
                                                                $a[$j]=$row['1'];
                                                                $b[$j]=$row['2'];
                                                                $c[$j]=$row['3'];
                                                                $d[$j]=$row['4'];
                                                                $e[$j]=$row['5'];
                                                                $dt=$row['dt1'];
                                                                $dt=str_replace('..',' ',$dt);
                                                                $j+=1;
                                                            }
                                                    }
                                                    echo $dt;
                                                ?>
                            </td></tr></table>
                                                &nbsp;&nbsp;

                                <table class="ex1" border="1">
                                    <tbody>
                                        <tr>
                                            <td style="width: 30px;" id="1">
                                                
                                            </td>
                                            <td colspan="4">
                                                <p style="width: max-content;">Antenna Fault</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td id="2"></td>
                                            <td colspan="4">
                                                <p>Comm Fault</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <table class="ex1" border="1" style="position: absolute; margin-left: 152px; margin-top: -76px;">
                                    <tbody>
                                        <tr>
                                            <td colspan="3" style="">
                                                <p style="width: 155px;">Course Ident Status</p>
                                            </td>
                                            <td colspan="3" id="3">
                                                Normal
                                            </td>

                                        </tr>
                                        <tr>
                                            <td style="width: 50px;" id="4"></td>
                                            <td colspan="3" style=" width:196px;">Course Synthesizer Lock Fault Status</td>
                                        </tr>
                                        <tr>
                                            <td id="5"></td>
                                            <td colspan="5">Course Reverse Sense</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <table class="ex1" border="1" style="margin-top: -76px;margin-left: 510px;">
                                    <tbody style="width: 243px;">
                                        <tr>
                                            <td colspan="3">
                                                <p style="/* font-size: 14px; */width: 173px;">Clearance Ident Status</p>
                                            </td>
                                            <td colspan="3" id="6">
                                                Normal
                                            </td>

                                        </tr>
                                        <tr>
                                            <td style="width: 50px;" id="7"></td>
                                            <td colspan="3" style="width: 200px;">Clearence Synthesizer Lock Fault Status</td>

                                        </tr>
                                        <tr>
                                            <td id="8"></td>
                                            <td colspan="5">Clearence Reverse Sense</td>

                                        </tr>
                                    </tbody>
                                </table>

                                <form>
                                    <fieldset style="width: max-content;">
                                        <legend>Course</legend>
                                        <table class="ex1" border="1">
                                            <tbody>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> </td>
                                                    <td style="height: 15px;">Alarm Low </td>
                                                    <td style="height: 15px;"> PreALarm Low</td>
                                                    <td style="height: 15px;">Nominal</td>
                                                    <td style="height: 15px;">PreAlarm High </td>
                                                    <td style="height: 15px;">Alarm High </td>
                                                    <td style="height: 15px;"> </td>
                                                    
                                                </tr>

                                                <tr>
                                                    <td style="height: 15px;width: 160px;"> Centerline RF Level</td>
                                                    <td style="height: 15px;width: 83px;" id="9">
                                                        <?php echo $a[0]; ?>
                                                        </td>
                                                        <td style="height: 15px;" id="10">
                                                        <?php echo $b[0]; ?>
                                                        </td>
                                                        <td style="height: 15px;" id="11">
                                                        <?php echo $c[0]; ?>
                                                        </td>
                                                        <td style="height: 15px;" id="12">
                                                        <?php echo $d[0]; ?>
                                                        </td>
                                                        <td style="height: 15px;" id="13">
                                                        <?php echo $e[0]; ?>
                                                        </td>
                                                    <td style="height: 15px;">%</td>

                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> Centerline DDM</td>
                                                    <td style="height: 15px;width: 83px;" id="9">
                                                        <?php echo $a[1]; ?>
                                                        </td>
                                                        <td style="height: 15px;" id="10">
                                                        <?php echo $b[1]; ?>
                                                        </td>
                                                        <td style="height: 15px;" id="11">
                                                        <?php echo $c[1]; ?>
                                                        </td>
                                                        <td style="height: 15px;" id="12">
                                                        <?php echo $d[1]; ?>
                                                        </td>
                                                        <td style="height: 15px;" id="13">
                                                        <?php echo $e[1]; ?>
                                                        </td>
                                                    <td style="height: 15px;">DDM</td>

                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> Centerline SDM</td>
                                                    <td style="height: 15px;width: 83px;" id="9">
                                                        <?php echo $a[2]; ?>
                                                        </td>
                                                        <td style="height: 15px;" id="10">
                                                        <?php echo $b[2]; ?>
                                                        </td>
                                                        <td style="height: 15px;" id="11">
                                                        <?php echo $c[2]; ?>
                                                        </td>
                                                        <td style="height: 15px;" id="12">
                                                        <?php echo $d[2]; ?>
                                                        </td>
                                                        <td style="height: 15px;" id="13">
                                                        <?php echo $e[2]; ?>
                                                        </td>
                                                    <td style="height: 15px;">%</td>

                                                </tr>

                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> Ident Mod Percent</td>
                                                    <td style="height: 15px;width: 83px;" id="9">
                                                        <?php echo $a[3]; ?>
                                                        </td>
                                                        <td style="height: 15px;" id="10">
                                                        <?php echo $b[3]; ?>
                                                        </td>
                                                        <td style="height: 15px;" id="11">
                                                        <?php echo $c[3]; ?>
                                                        </td>
                                                        <td style="height: 15px;" id="12">
                                                        <?php echo $d[3]; ?>
                                                        </td>
                                                        <td style="height: 15px;" id="13">
                                                        <?php echo $e[3]; ?>
                                                        </td>
                                                    <td style="height: 15px;">%</td>

                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> Width DDM</td>
                                                    <td style="height: 15px;width: 83px;" id="9">
                                                        <?php echo $a[4]; ?>
                                                        </td>
                                                        <td style="height: 15px;" id="10">
                                                        <?php echo $b[4]; ?>
                                                        </td>
                                                        <td style="height: 15px;" id="11">
                                                        <?php echo $c[4]; ?>
                                                        </td>
                                                        <td style="height: 15px;" id="12">
                                                        <?php echo $d[4]; ?>
                                                        </td>
                                                        <td style="height: 15px;" id="13">
                                                        <?php echo $e[4]; ?>
                                                        </td>
                                                    <td style="height: 15px;">DDM</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </fieldset>
                                </form>
                                <form>
                                    <fieldset style="width: max-content;">
                                        <legend>Clearance</legend>
                                        <table class="ex1" border="1">
                                            <tbody>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> </td>
                                                    <td style="height: 15px;">Alarm Low </td>
                                                    <td style="height: 15px;"> PreALarm Low</td>
                                                    <td style="height: 15px;">Nominal</td>
                                                    <td style="height: 15px;">PreAlarm High </td>
                                                    <td style="height: 15px;">Alarm High </td>
                                                    <td style="height: 15px;"> </td>
                                                    <?php
                                                        include('config.php');
                                                        $sql="SELECT `1`,`2`,`3`,`4`,`5`,dt1 from monitor1 WHERE main='Integral' AND type='Clearance'";
                                                        $result=$conn->query($sql);
                                                        if($result->num_rows>0)
                                                        {
                                                            $a=[];
                                                            $b=[];
                                                            $c=[];
                                                            $d=[];
                                                            $e=[];
                                                            $j=0;
                                                            while($row=$result->fetch_assoc()){
                                                                    $a[$j]=$row['1'];
                                                                    $b[$j]=$row['2'];
                                                                    $c[$j]=$row['3'];
                                                                    $d[$j]=$row['4'];
                                                                    $e[$j]=$row['5'];
                                                                    $dt=$row['dt1'];
                                                                    $dt=str_replace('..',' ',$dt);
                                                                    $j+=1;
                                                                }
                                                        }
                                                    ?>
                                                </tr>

                                                <tr>
                                                    <td style="height: 15px;width: 160px;"> Centerline RF Level</td>
                                                    <td style="height: 15px;width: 83px;" id="9">
                                                        <?php echo $a[0]; ?>
                                                        </td>
                                                        <td style="height: 15px;" id="10">
                                                        <?php echo $b[0]; ?>
                                                        </td>
                                                        <td style="height: 15px;" id="11">
                                                        <?php echo $c[0]; ?>
                                                        </td>
                                                        <td style="height: 15px;" id="12">
                                                        <?php echo $d[0]; ?>
                                                        </td>
                                                        <td style="height: 15px;" id="13">
                                                        <?php echo $e[0]; ?>
                                                        </td>
                                                    <td style="height: 15px;">%</td>

                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> Centerline DDM</td>
                                                    <td style="height: 15px;width: 83px;" id="9">
                                                        <?php echo $a[1]; ?>
                                                        </td>
                                                        <td style="height: 15px;" id="10">
                                                        <?php echo $b[1]; ?>
                                                        </td>
                                                        <td style="height: 15px;" id="11">
                                                        <?php echo $c[1]; ?>
                                                        </td>
                                                        <td style="height: 15px;" id="12">
                                                        <?php echo $d[1]; ?>
                                                        </td>
                                                        <td style="height: 15px;" id="13">
                                                        <?php echo $e[1]; ?>
                                                        </td>
                                                    <td style="height: 15px;">DDM</td>

                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> Centerline SDM</td>
                                                    <td style="height: 15px;width: 83px;" id="9">
                                                        <?php echo $a[2]; ?>
                                                        </td>
                                                        <td style="height: 15px;" id="10">
                                                        <?php echo $b[2]; ?>
                                                        </td>
                                                        <td style="height: 15px;" id="11">
                                                        <?php echo $c[2]; ?>
                                                        </td>
                                                        <td style="height: 15px;" id="12">
                                                        <?php echo $d[2]; ?>
                                                        </td>
                                                        <td style="height: 15px;" id="13">
                                                        <?php echo $e[2]; ?>
                                                        </td>
                                                    <td style="height: 15px;">%</td>

                                                </tr>

                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> Ident Mod Percent</td>
                                                    <td style="height: 15px;width: 83px;" id="9">
                                                        <?php echo $a[3]; ?>
                                                        </td>
                                                        <td style="height: 15px;" id="10">
                                                        <?php echo $b[3]; ?>
                                                        </td>
                                                        <td style="height: 15px;" id="11">
                                                        <?php echo $c[3]; ?>
                                                        </td>
                                                        <td style="height: 15px;" id="12">
                                                        <?php echo $d[3]; ?>
                                                        </td>
                                                        <td style="height: 15px;" id="13">
                                                        <?php echo $e[3]; ?>
                                                        </td>
                                                    <td style="height: 15px;">%</td>

                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> Width DDM</td>
                                                    <td style="height: 15px;width: 83px;" id="9">
                                                        <?php echo $a[4]; ?>
                                                        </td>
                                                        <td style="height: 15px;" id="10">
                                                        <?php echo $b[4]; ?>
                                                        </td>
                                                        <td style="height: 15px;" id="11">
                                                        <?php echo $c[4]; ?>
                                                        </td>
                                                        <td style="height: 15px;" id="12">
                                                        <?php echo $d[4]; ?>
                                                        </td>
                                                        <td style="height: 15px;" id="13">
                                                        <?php echo $e[4]; ?>
                                                        </td>

                                                    <td style="height: 15px;">DDM</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </fieldset>
                                </form>

                                <table class="ex1" border="1">
                                    <tbody>
                                        <tr>
                                            <td style="height: 15px;width: 120px;"> </td>
                                            <td style="height: 15px;">Alarm Low </td>
                                            <td style="height: 15px;"> PreALarm Low</td>
                                            <td style="height: 15px;">Nominal</td>
                                            <td style="height: 15px;">PreAlarm High </td>
                                            <td style="height: 15px;">Alarm High </td>
                                            <td style="height: 15px;"> </td>
                                            <?php
                                                include('config.php');
                                                $sql="SELECT `1`,`2`,`3`,`4`,`5`,dt1 from monitor1 WHERE main='Integral' AND name='RF Freq Difference'";
                                                $result=$conn->query($sql);
                                                if($result->num_rows>0)
                                                {
                                                    $a=[];
                                                    $b=[];
                                                    $c=[];
                                                    $d=[];
                                                    $e=[];
                                                    $j=0;
                                                    while($row=$result->fetch_assoc()){
                                                            $a[$j]=$row['1'];
                                                            $b[$j]=$row['2'];
                                                            $c[$j]=$row['3'];
                                                            $d[$j]=$row['4'];
                                                            $e[$j]=$row['5'];
                                                            $dt=$row['dt1'];
                                                            $dt=str_replace('..',' ',$dt);
                                                            $j+=1;
                                                        }
                                                }
                                            ?>     
                                        </tr>
                                        <tr>
                                            <td style="height: 15px;width: 180px;"> RF Freq Difference</td>
                                            <td style="height: 15px;width: 83px;" id="9">
                                                        <?php echo $a[0]; ?>
                                                        </td>
                                                        <td style="height: 15px;" id="10">
                                                        <?php echo $b[0]; ?>
                                                        </td>
                                                        <td style="height: 15px;" id="11">
                                                        <?php echo $c[0]; ?>
                                                        </td>
                                                        <td style="height: 15px;" id="12">
                                                        <?php echo $d[0]; ?>
                                                        </td>
                                                        <td style="height: 15px;" id="13">
                                                        <?php echo $e[0]; ?>
                                                        </td>
                                            <td style="height: 15px;">HZ</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>