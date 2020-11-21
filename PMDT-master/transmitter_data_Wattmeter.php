<html>

<head>
    <title>PMDT</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
    <script src="nav.js"></script>
    
</head>

<body>
    <?php include "nav.php"; ?>
        
        <div class="col-sm-12 row" style="margin-top:3%;">
            <div class="col-sm-3">
                <?php include "sidebar.php"; ?>
            </div>
            <div class="col-sm-9">
                <div class="card">
                    <div class="card-body">
                        <div class="inner" style="margin-left: 2%;">
                            <a href="transmitter_data_Wattmeter.php"><button id="b1" style="background-color: blue;color: aliceblue;width: 150px;height: 30px;font-weight: bold;">Wattmeter Data</button></a>
                            <a href="transmitter_data_s1.php"><button id="b2" style="background-color: blue;color: aliceblue;width: 309px;height: 30px;font-weight: bold;">Transmitter 1 Synthesizer and PA Data</button></a>
                            <a href="transmitter_data_s2.php"> <button id="b3" style="background-color: blue;color: aliceblue;width: 309px;height: 30px;font-weight: bold;">Transmitter 2 Synthesizer and PA Data</button></a>
                            <div id="Div1">
                                <div class="main_t" style="margin-left:6%;">
                                    <table style="margin:5px;">
                                        <td style="width:150px;height:20px;">
                                            <?php
                                                include('config.php');
                                                $sql="SELECT data,dt1 from transmitterd WHERE main='Wattmeter Data' AND type='Course Transmitter Parameters'";
                                                $result=$conn->query($sql);
                                                if($result->num_rows>0)
                                                {
                                                    $a=[];
                                                    $j=0;
                                                    while($row=$result->fetch_assoc()){
                                                            $a[$j]=$row['data'];
                                                            $dt=$row['dt1'];
                                                            $dt=str_replace('..',' ',$dt);
                                                            $j+=1;
                                                        }
                                                }
                                                echo $dt;
                                            ?>

                                        </td>
                                    </table>
                                    <div class="main1" id="a">
                                        <div class="d1" style="margin-left: 7px;margin-top: 22px;">
                                            <p><span>Course Transmitter Parameters</span></p>
                                            <table class="t1">
                                                <tr>
                                                    <td>CSB Forward Power</td>
                                                    <td style="width: 40px;">
                                                        <?php echo $a[0];?>
</td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>CSB Reflected Power</td>
                                                    <td style="width: 40px;">
                                                        <?php echo $a[1];?>
</td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>SBO Forward Power</td>
                                                    <td style="width: 40px;">
                                                        <?php echo $a[2];?>
</td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>SBO Reflected Power</td>
                                                    <td style="width: 40px;">
                                                        <?php echo $a[3];?>
</td>
                                                    <td>Watts</td>
                                                </tr>
                                            </table>
                                            <br>
                                            <p><span>Standby Course Transmitter Parameters</span></p>
                                            <?php
                                                include('config.php');
                                                $sql="SELECT data,dt1 from transmitterd WHERE main='Wattmeter Data' AND type='Standby Course Transmitter Parameters'";
                                                $result=$conn->query($sql);
                                                if($result->num_rows>0)
                                                {
                                                    $a=[];
                                                    $j=0;
                                                    while($row=$result->fetch_assoc()){
                                                            $a[$j]=$row['data'];
                                                            $dt=$row['dt1'];
                                                            $dt=str_replace('..',' ',$dt);
                                                            $j+=1;
                                                        }
                                                }
                                            ?>
                                            <table class="t1">
                                                <tr>
                                                    <td>CSB Forward Power</td>
                                                    <td style="width: 40px;">
                                                        <?php echo $a[0];?>
</td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>SBO Reflected Power</td>
                                                    <td style="width: 40px;">
                                                        <?php echo $a[1];?>
</td>
                                                    <td>Watts</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="d2" id="b" style="margin-left: 21px;margin-top: 22px;">
                                            <p><span>Clearance Transmitter Parameters</span></p>
                                            
                                            <?php
                                                include('config.php');
                                                $sql="SELECT data,dt1 from transmitterd WHERE main='Wattmeter Data' AND type='Clearance Transmitter Parameters'";
                                                $result=$conn->query($sql);
                                                if($result->num_rows>0)
                                                {
                                                    $a=[];
                                                    $j=0;
                                                    while($row=$result->fetch_assoc()){
                                                            $a[$j]=$row['data'];
                                                            $dt=$row['dt1'];
                                                            $dt=str_replace('..',' ',$dt);
                                                            $j+=1;
                                                        }
                                                }
                                                ?>
                                                <table class="t1">
                                                <tr>
                                                    <td>CSB Forward Power</td>
                                                    <td style="width: 40px;">
                                                        <?php echo $a[0];?>
</td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>CSB Reflected Power</td>
                                                    <td style="width: 40px;">
                                                        <?php echo $a[1];?>
</td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>SBO Forward Power</td>
                                                    <td style="width: 40px;">
                                                        <?php echo $a[2];?>
</td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>SBO Reflected Power</td>
                                                    <td style="width: 40px;">
                                                        <?php echo $a[3];?>
</td>
                                                    <td>Watts</td>
                                                </tr>
                                            </table>
                                            <br>
                                            <p><span>Standby Clearance Transmitter Parameters</span></p>
                                            
                                            <?php
                                                include('config.php');
                                                $sql="SELECT data,dt1 from transmitterd WHERE main='Wattmeter Data' AND type='Standby Clearance Transmitter Parameters'";
                                                $result=$conn->query($sql);
                                                if($result->num_rows>0)
                                                {
                                                    $a=[];
                                                    $j=0;
                                                    while($row=$result->fetch_assoc()){
                                                            $a[$j]=$row['data'];
                                                            $dt=$row['dt1'];
                                                            $dt=str_replace('..',' ',$dt);
                                                            $j+=1;
                                                        }
                                                }
                                            ?>
                                            <table class="t1">
                                                <tr>
                                                    <td>CSB Forward Power</td>
                                                    <td style="width: 40px;">
                                                        <?php echo $a[0];?>
</td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>SBO Reflected Power</td>
                                                    <td style="width: 40px;">
                                                        <?php echo $a[1];?>
</td>
                                                    <td>Watts</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>





                            </div>

</div>
</div>
</div>
</div>
</body>

</html>