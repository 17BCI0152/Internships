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
                        <div class="inner" style="margin-left: 3%;">
                            <a href ="monitor_data_integral.php"><input id="b1" type="button" value="Integrals" style="width: 110px;height: 30px;font-weight: bold;background-color: blue;color: aliceblue;"></a>
                            <a href ="monitor_data_standby.php"><input id="b1" type="button" value="StandBy" style="width: 110px;height: 30px;font-weight: bold;background-color: blue;color: aliceblue;"></a>
                            <a href ="monitor_data_fieldmotor.php"><input id="b2" type="button" value="Field Monitors" style="width: 150px;height: 30px;font-weight: bold;background-color: blue;color: aliceblue;"></a>
                            <br>
                            <div id="Div1" style="height:545px !important;">
                                <div style="margin-left:10%;">
                                <table class="ex1" border="1">
                                    <?php
                                        include('config.php');
                                        $sql="SELECT * from monitord WHERE main='Standby' AND  type='Course'";
                                        $result=$conn->query($sql);
                                        if($result->num_rows>0)
                                        {
                                            $a=[];
                                            $b=[];
                                            $j=0;
                                            while($row=$result->fetch_assoc()){
                                                    $a[$j]=$row['m1'];
                                                    $b[$j]=$row['m2'];
                                                    $dt1=$row['dt1'];
                                                    $dt2=$row['dt2'];
                                                    $dt1=str_replace('..',' ',$dt1);
                                                    $dt2=str_replace('..',' ',$dt2);
                                                    $j+=1;
                                                }
                                        }
                                    ?>
                                    <tr>
                                        <td style="height: 15px;width: 150px;"></td>
                                        <td style="height: 15px;width: 150px;"><?php echo $dt1 ;?></td>
                                        <td style="height: 15px;width: 150px;"><?php echo $dt2 ;?></td>
                                    </tr>
                                    <tr>
                                        <td style="height: 15px;width: 150px;"><b> COURSE</b></td>
                                        <td style="height: 15px;width: 150px;"><b> MONITOR 1</b></td>
                                        <td style="height: 15px;width: 150px;"><b> MONITOR 2</b></td>
                
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td style="height: 15px;width: 150px;"> Centerline RF Level</td>
                                        <td style="height: 15px;width: 150px;"> <?php echo $a[0]; ?></td>
                                        <td style="height: 15px;width: 150px;"> <?php echo $b[0]; ?></td>
                   
                                        <td>%</td>
                                    </tr>
                                    <tr>
                                        <td style="height: 15px;width: 150px;"> Centerline DDM</td>
                                        <td style="height: 15px;width: 150px;"> <?php echo $a[1]; ?></td>
                                        <td style="height: 15px;width: 150px;"> <?php echo $b[1]; ?></td>
                                    
                                        <td>DDM</td>
                                    </tr>
                                    <tr>
                                        <td style="height: 15px;width: 150px;"> Centerline SDM</td>
                                        <td style="height: 15px;width: 150px;"> <?php echo $a[2]; ?></td>
                                        <td style="height: 15px;width: 150px;"> <?php echo $b[2]; ?></td>
                                     
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td style="height: 15px;width: 150px;"> Ident Mod Percent</td>
                                        <td style="height: 15px;width: 150px;"> <?php echo $a[3]; ?></td>
                                        <td style="height: 15px;width: 150px;"> <?php echo $b[3]; ?></td>
                                     
                                        <td>%</td>
                                    </tr>
                                    <tr>
                                        <td style="height: 15px;width: 150px;"> Width DDM</td>
                                        <td style="height: 15px;width: 150px;"> <?php echo $a[4]; ?></td>
                                        <td style="height: 15px;width: 150px;"> <?php echo $b[4]; ?></td>
                                 
                                        <td>DDM</td>
                                    </tr>
                                    <tr>
                                        <td style="height: 15px;width: 150px;"> Ident Status</td>
                                        <td style="height: 15px;width: 150px;"> <?php echo $a[5]; ?></td>
                                        <td style="height: 15px;width: 150px;"> <?php echo $b[5]; ?></td>
                                      
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td style="height: 15px;width: 150px;">SynthLOCK/ReverseSense </td>
                                        <td style="height: 15px;width: 150px;">
                                            <table>
                                                <td style="border: 1px solid black;width: 25px;height: 20px;"><?php echo $a[6]; ?></td>
                                                <td style="border: 1px solid black;width: 25px;"><?php echo $a[6]; ?></td>
                                            </table>
                                        </td>
                                        <td style="height: 15px;width: 150px;">
                                            <table>
                                                <td style="border: 1px solid black;width: 25px;height: 20px;"><?php echo $b[6]; ?></td>
                                                <td style="border: 1px solid black;width: 25px;"><?php echo $b[6]; ?></td>
                                            </table>
                                        </td>
                                        <td></td>
                                    </tr>

                                </table>
                                <br>
                                <table class="ex1" border="1">
                                    <tr>
                                        <td style="height: 15px;width: 150px;"><b> CLEARANCE</b></td>
                                        <td style="height: 15px;width: 150px;"><b> MONITOR 1</b></td>
                                        <td style="height: 15px;width: 150px;"><b> MONITOR 2</b></td>
                                       
                                        <td></td>
                                    </tr>
                                    <?php
                                        include('config.php');
                                        $sql="SELECT m1,m2 from monitord WHERE main='Standby' AND  type='clearance'";
                                        $result=$conn->query($sql);
                                        if($result->num_rows>0)
                                        {
                                            $a=[];
                                            $b=[];
                                            $j=0;
                                            while($row=$result->fetch_assoc()){
                                                    $a[$j]=$row['m1'];
                                                    $b[$j]=$row['m2'];
                                                    $j+=1;
                                                }
                                        }
                                    ?>
                                    <tr>
                                        <td style="height: 15px;width: 150px;"> Centerline RF Level</td>
                                        <td style="height: 15px;width: 150px;"> <?php echo $a[0]; ?></td>
                                        <td style="height: 15px;width: 150px;"> <?php echo $b[0]; ?></td>
                   
                                        <td>%</td>
                                    </tr>
                                    <tr>
                                        <td style="height: 15px;width: 150px;"> Centerline DDM</td>
                                        <td style="height: 15px;width: 150px;"> <?php echo $a[1]; ?></td>
                                        <td style="height: 15px;width: 150px;"> <?php echo $b[1]; ?></td>
                                    
                                        <td>DDM</td>
                                    </tr>
                                    <tr>
                                        <td style="height: 15px;width: 150px;"> Centerline SDM</td>
                                        <td style="height: 15px;width: 150px;"> <?php echo $a[2]; ?></td>
                                        <td style="height: 15px;width: 150px;"> <?php echo $b[2]; ?></td>
                                     
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td style="height: 15px;width: 150px;"> Ident Mod Percent</td>
                                        <td style="height: 15px;width: 150px;"> <?php echo $a[3]; ?></td>
                                        <td style="height: 15px;width: 150px;"> <?php echo $b[3]; ?></td>
                                     
                                        <td>%</td>
                                    </tr>
                                    <tr>
                                        <td style="height: 15px;width: 150px;"> Width DDM</td>
                                        <td style="height: 15px;width: 150px;"> <?php echo $a[4]; ?></td>
                                        <td style="height: 15px;width: 150px;"> <?php echo $b[4]; ?></td>
                                 
                                        <td>DDM</td>
                                    </tr>
                                    <tr>
                                        <td style="height: 15px;width: 150px;"> Ident Status</td>
                                        <td style="height: 15px;width: 150px;"> <?php echo $a[5]; ?></td>
                                        <td style="height: 15px;width: 150px;"> <?php echo $b[5]; ?></td>
                                      
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td style="height: 15px;width: 150px;">SynthLOCK/ReverseSense </td>
                                        <td style="height: 15px;width: 150px;">
                                            <table>
                                                <td style="border: 1px solid black;width: 25px;height: 20px;"><?php echo $a[6]; ?></td>
                                                <td style="border: 1px solid black;width: 25px;"><?php echo $a[6]; ?></td>
                                            </table>
                                        </td>
                                        <td style="height: 15px;width: 150px;">
                                            <table>
                                                <td style="border: 1px solid black;width: 25px;height: 20px;"><?php echo $b[6]; ?></td>
                                                <td style="border: 1px solid black;width: 25px;"><?php echo $b[6]; ?></td>
                                            </table>
                                        </td>
                                        <td></td>
                                    </tr>

                                </table>
                                <br>
                                <table class="ex1" border="1">
                                    <?php
                                        include('config.php');
                                        $sql="SELECT m1,m2 from monitord WHERE main='Standby' AND  type=''";
                                        $result=$conn->query($sql);
                                        if($result->num_rows>0)
                                        {
                                            $a=[];
                                            $b=[];
                                            $j=0;
                                            while($row=$result->fetch_assoc()){
                                                    $a[$j]=$row['m1'];
                                                    $b[$j]=$row['m2'];
                                                    $j+=1;
                                                }
                                        }
                                    ?>
                                    <tr>
                                        <td style="height: 15px;width: 150px;">RF Freq Difference</td>
                                        <td style="height: 15px;width: 135px;"> <?php echo $a[0]; ?></td>
                                        <td style="height: 15px;width: 135px;"> <?php echo $b[0]; ?></td>
                                        
                                        <td>Hz</td>
                                    </tr>
                                    <tr>
                                        <td style="height: 15px;width: 150px;"> Antenna Fault</td>
                                        <td style="height: 15px;width: 135px;"> <?php echo $a[1]; ?></td>
                                        <td style="height: 15px;width: 135px;"> <?php echo $b[1]; ?></td>
                                        
                                        <td></td>
                                    </tr>
                                </table>
                                </div>
                            </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>