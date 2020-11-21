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
                        <div class="inner" style="margin-left: 3%;">
                            <a href="rms_main.php"> <button id="b1" style="background-color: blue;color: aliceblue;width: 257px;height: 30px;font-weight: bold;">Maintainance alerts and Alarms</button></a>
                            <a href="rms_ad.php"> <button id="b2" style="background-color: blue;color: aliceblue;width: 100px;height: 30px;font-weight: bold;">A/D data</button></a>
                            <a href="rms_di.php"> <button id="b3" style="background-color: blue;color: aliceblue;width: 130px;height: 30px;font-weight: bold;">Digital Inputs</button></a>
                            <a href="rms_af.php"> <button id="b4" style="background-color: blue;color: aliceblue;width: 132px;height: 30px;font-weight: bold;">Antenna Faults</button></a>
                            <div id="e2">
                                <div class="main" style="width:815px;height:553px;">
                                    <div class="main1">
                                        
                                        <div class="d1">
                                            <table class="tables" border="1" frame="void" rules="all">
                                                <?php
                                                    include('admin/config.php');
                                                    $sql="SELECT * from rmsd WHERE type='1'";
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
                                                <tr>
                                                    <td>
                                                        <?php echo $dt;?>
                                                    </td>
                                                    <td >Lo Limit</td>
                                                    <td style="width:60px"> &nbsp;Volts</td>
                                                    <td >Hi Limit</td>
                                                </tr>
                                                
                                            <tr>
                                                <td>Spare A/D 1</td>
                                                <td>-5.00</td>
                                                <td>
                                                    <?php echo $a[0];?>
                                                </td>
                                                <td>5.00</td>
                                            </tr>
                                            <tr>
                                                <td>Spare A/D 2</td>
                                                <td>-5.00</td>
                                                <td>
                                                    <?php echo $a[1];?>
                                                </td>
                                                <td>5.00</td>
                                            </tr>
                                            <tr>
                                                <td>Spare A/D 3</td>
                                                <td>-5.00</td>
                                                <td>
                                                    <?php echo $a[2];?>
                                                </td>
                                                <td>5.00</td>
                                            </tr>
                                            <tr>
                                                <td>Spare A/D 4</td>
                                                <td>-5.00</td>
                                                <td>
                                                <?php echo $a[3];?>
                                                </td>
                                                <td>5.00</td>
                                            </tr>
                                            <tr>
                                                <td>Spare A/D 5</td>
                                                <td>-5.00</td>
                                                <td>
                                                <?php echo $a[4];?>
                                                </td>
                                                <td>5.00</td>
                                            </tr>
                                            <tr>
                                                <td>Spare A/D 6</td>
                                                <td>-5.00</td>
                                                <td>
                                                <?php echo $a[5];?>
                                                </td>
                                                <td>5.00</td>
                                            </tr>
                                            <tr>
                                                <td>Spare A/D 7</td>
                                                <td>-5.00</td>
                                                <td>
                                                <?php echo $a[6];?>
                                                </td>
                                                <td>5.00</td>
                                            </tr>
                                            <tr>
                                                <td>Spare A/D 8</td>
                                                <td>-5.00</td>
                                                <td>
                                                <?php echo $a[7];?>
                                                </td>
                                                <td>5.00</td>
                                            </tr>
                                            <tr>
                                                <td>Spare A/D 9</td>
                                                <td>-5.00</td>
                                                <td>
                                                <?php echo $a[8];?>
                                                </td>
                                                <td>5.00</td>
                                            </tr>
                                            <tr>
                                                <td>Spare A/D 10</td>
                                                <td>-5.00</td>
                                                <td>
                                                <?php echo $a[9];?>
                                                </td>
                                                <td>5.00</td>
                                            </tr>
                                        </table>   
                                        </div>
                                        <div class="d2">
                                            <table class="tables" border="1" frame="void" rules="all">
                                                <tr>
                                                    <td></td>
                                                    <td>Lo Limit</td>
                                                    <td style="width:60px"> &nbsp;Volts</td>
                                                    <td>Hi Limit</td>
                                                </tr>
                                                <?php
                                                    include('admin/config.php');
                                                    $sql="SELECT data from rmsd WHERE type='2'";
                                                    $result=$conn->query($sql);
                                                    if($result->num_rows>0)
                                                    {
                                                        $a=[];
                                                        $j=0;
                                                        while($row=$result->fetch_assoc()){
                                                                $a[$j]=$row['data'];
                                                                $j+=1;
                                                            }
                                                    }                           
                                                ?>
                                                <tr>
                                                    <td>+5 VDC Monitor 1</td>
                                                    <td>4.80</td>
                                                    <td>
                                                        <?php echo $a[0];?>
                                                    </td>
                                                    <td>5.20</td>
                                                </tr>
                                                <tr>
                                                    <td>+12 VDC Monitor 1</td>
                                                    <td>11.75</td>
                                                    <td>
                                                        <?php echo $a[1];?>
                                                    </td>
                                                    <td>13.25</td>
                                                </tr>
                                                <tr>
                                                    <td>-12 VDC Monitor 1</td>
                                                    <td>-13.25</td>
                                                    <td>
                                                       <?php echo $a[2];?>
                                                    </td>
                                                    <td>-11.75</td>
                                                </tr>
                                                <tr>
                                                    <td>+24 VDC Monitor 1</td>
                                                    <td>23.3</td>
                                                    <td>
                                                        <?php echo $a[3];?>
                                                    </td>
                                                    <td>25.2</td>
                                                </tr>
                                                <tr>
                                                    <td>+5 VDC Monitor 2</td>
                                                    <td>4.80</td>
                                                    <td>
                                                        <?php echo $a[4];?>
                                                    </td>
                                                    <td>5.20</td>
                                                </tr>
                                                <tr>
                                                    <td>+12 VDC Monitor 2</td>
                                                    <td>11.75</td>
                                                    <td>
                                                       <?php echo $a[5];?>
                                                    </td>
                                                    <td>13.25</td>
                                                </tr>
                                                <tr>
                                                    <td>-12 VDC Monitor 2</td>
                                                    <td>-13.25</td>
                                                    <td>
                                                       <?php echo $a[6];?>
                                                    </td>
                                                    <td>-11.75</td>
                                                </tr>
                                                <tr>
                                                    <td>+24 VDC Monitor 2</td>
                                                    <td>23.3</td>
                                                    <td>
                                                        <?php echo $a[7];?>
                                                    </td>
                                                    <td>25.2</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="main2">
                                        <div style="position:absolute;marginleft:50px;">
                                            <table class="tables" border="1" frame="void" rules="all">
                                                <tr>
                                                    <td></td>
                                                    <td style="width:80px">Lo Limit</td>
                                                    <td style="width:80px">&nbsp;&nbsp;Deg C</td>
                                                    <td style="width:80px">Hi Limit</td>
                                                </tr>
                                                <tr>
                                                    <td>Inside Temp&nbsp;&nbsp;</td>
                                                    <td>0</td>
                                                    <td>
                                                        <?php
                                                            include('admin/config.php');
                                                            $sql="SELECT data from rmsd WHERE type='3'";
                                                            $result=$conn->query($sql);
                                                            if($result->num_rows>0)
                                                            {
                                                                $a=[];
                                                                $j=0;
                                                                while($row=$result->fetch_assoc()){
                                                                        $a[0]=$row['data'];
                                                                    }
                                                            }    
                                                            echo $a[0];                       
                                                        ?>
                                                    </td>
                                                    <td>30</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="d4">
                                            <table class="tables" border="1" frame="void" rules="all">
                                                <tr>
                                                    <td></td>
                                                    <td style="width:70px">Lo Limit</td>
                                                    <td style="width:70px">&nbsp;&nbsp;Deg C</td>
                                                    <td style="width:70px">Hi Limit</td>
                                                </tr>
                                                <tr>
                                                    <td>Outside Temp &nbsp;&nbsp;</td>
                                                    <td>-25</td>
                                                    <td>
                                                        <?php
                                                            include('admin/config.php');
                                                            $sql="SELECT data from rmsd WHERE type='4'";
                                                            $result=$conn->query($sql);
                                                            if($result->num_rows>0)
                                                            {
                                                                $a=[];
                                                                $j=0;
                                                                while($row=$result->fetch_assoc()){
                                                                        $a[0]=$row['data'];
                                                                    }
                                                            }    
                                                            echo $a[0];                       
                                                        ?>
                                                    </td>
                                                    <td>70</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="main3">
                                        <div class="d5">
                                            <table class="tables" border="1" frame="void" rules="all">
                                                <tr>
                                                    <td></td>
                                                    <td>Lo Limit</td>
                                                    <td>Volts</td>
                                                    <td>Hi Limit</td>
                                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                    <td>Lo Limit</td>
                                                    <td>Amps</td>
                                                    <td>Hi Limit</td>
                                                </tr>
                                                <?php
                                                    include('admin/config.php');
                                                    $sql="SELECT data,data2 from rmsd WHERE type='5'";
                                                    $result=$conn->query($sql);
                                                    if($result->num_rows>0)
                                                    {
                                                        $a=[];
                                                        $b=[];
                                                        $j=0;
                                                        while($row=$result->fetch_assoc()){
                                                                $a[$j]=$row['data'];
                                                                $b[$j]=$row['data2'];
                                                                $j+=1;
                                                            }
                                                    }                           
                                                ?>
                                                <tr>
                                                    <td>AC Input</td>
                                                    <td>200.0</td>
                                                    <td>
                                                        <?php echo $a[0]; ?>
                                                    </td>
                                                    <td>250.0</td>
                                                    <td></td>
                                                    <td>1.0</td>
                                                    <td>
                                                        <?php echo $b[0]; ?>
                                                    </td>
                                                    <td>7.0</td>
                                                </tr>
                                                <tr>
                                                    <td>OB Light</td>
                                                    <td></td>
                                                    <td>
                                                       <?php echo $a[1]; ?>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>0.0</td>
                                                    <td>
                                                       <?php echo $b[1]; ?>
                                                    </td>
                                                    <td>20.0</td>
                                                </tr>
                                                <tr>
                                                    <td>Tx 1- 24V PS</td>
                                                    <td>23.3</td>
                                                    <td>
                                                        <?php echo $a[2]; ?>
                                                    </td>
                                                    <td>25.2</td>
                                                    <td></td>
                                                    <td>3.0</td>
                                                    <td>
                                                       <?php echo $b[2]; ?>
                                                    </td>
                                                    <td>15.0</td>
                                                </tr>
                                                <tr>
                                                    <td>Tx 2- 24V PS</td>
                                                    <td>23.3</td>
                                                    <td>
                                                       <?php echo $a[3]; ?>
                                                    </td>
                                                    <td>25.2</td>
                                                    <td></td>
                                                    <td>3</td>
                                                    <td>
                                                        <?php echo $b[3]; ?>
                                                    </td>
                                                    <td>15.0</td>
                                                </tr>
                                                <tr>
                                                    <td>Battery 1</td>
                                                    <td>21.5</td>
                                                    <td>
                                                        <?php echo $a[4]; ?>
                                                    </td>
                                                    <td>30.0</td>
                                                    <td></td>
                                                    <td>-6.0</td>
                                                    <td>
                                                        <?php echo $b[4]; ?>
                                                    </td>
                                                    <td>10.0</td>
                                                </tr>
                                                <tr>
                                                    <td>Battery 2</td>
                                                    <td>21.5</td>
                                                    <td>
                                                        <?php echo $a[5]; ?>
                                                    </td>
                                                    <td>30.0</td>
                                                    <td></td>
                                                    <td>-6.0</td>
                                                    <td>
                                                        <?php echo $b[5]; ?>
                                                    </td>
                                                    <td>10.0</td>
                                                </tr>
                                            </table>
                                        </div>
                                        
                                    </div>
                                    <br>
                                </div>
                            </div>
                            </div>

</div>
</div>
</div>
</div>
</body>

</html>