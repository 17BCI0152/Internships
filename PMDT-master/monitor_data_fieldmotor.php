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

                            <div id="Div2">
                                <div>
                                    <form>
                                        <fieldset>
                                            <legend> Near Field Monitor Course Position</legend>
                                            <br>
                                            <table class="ex1" border="1">
                                            <?php
                                                include('config.php');
                                                $sql="SELECT * from monitord WHERE main='Field Monitors' AND  type='Near Field Monitor Course Position'";
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
                                                    <td style="height: 15px;width: 120px;"></td>
                                                    <td style="height: 15px;width: 120px;"> MONITOR 1</td>
                                                    <td style="height: 15px;width: 120px;"> MONITOR 2</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;">RF Level</td>
                                                    <td style="height: 15px;width: 120px;"> <?php echo $a[0]; ?></td>
                                                    <td style="height: 15px;width: 120px;"> <?php echo $b[0]; ?></td>
                                                    
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> DDM</td>
                                                    <td style="height: 15px;width: 120px;"> <?php echo $a[1]; ?></td>
                                                    <td style="height: 15px;width: 120px;"> <?php echo $b[1]; ?></td>
                                                    
                                                    <td>DDM</td>
                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> SDM</td>
                                                    <td style="height: 15px;width: 120px;"> <?php echo $a[2]; ?></td>
                                                    <td style="height: 15px;width: 120px;"> <?php echo $b[2]; ?></td>
                                                    
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> Comm Fault</td>
                                                    <td style="height: 15px;width: 120px;"> <?php echo $a[3]; ?></td>
                                                    <td style="height: 15px;width: 120px;"> <?php echo $b[3]; ?></td>
                                                    
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <br>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>