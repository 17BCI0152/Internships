<?php error_reporting(0);?>
<html>
    <head>
        <title>PMDT</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="bootstrap.css">
        <style>
            td[value="G"] {
                color: green;
                background-color: green;
            }
            td[value="R"] {
                color: red;
                background-color: red;
            }
        </style>
    </head>
    <body>
              <div class="card">
                <div class="card-body">
                  <div class="lside" id="example2" style="position: relative;
                  left: 4%;
                  width: 93%;height:0%">
                    <table class="sh">
                        <tr><th colspan="4" id="0" style="text-align: center;">Connected</th></tr>
                        <tr style="text-align: center;">
                            <td id="1" style="width:25px;"></td>
                            <th> Alert</th>
                            <td id="2" style="width:25px;"></td>
                            <th>Local</th>
                        </tr>
                    </table>
                    
                    <table style="text-align: center;" class="sh">
                        <tr style="text-align: center;"><th colspan="3">Transmitters</th></tr>
                        <tr>
                            <th>Tx1</th>
                            <th style="border: hidden;"> </th>
                            <th>Tx2</th>
                        </tr>
                        <tr>
                            <td id="3" class="tx2" value="<?php

                                                            include('config.php');
                                                            $sql="SELECT * from tx WHERE name='tx1'";
                                                            $result=$conn->query($sql);
                                                            if($result->num_rows>0)
                                                            {
                                                                $a='';
                                                                while($row=$result->fetch_assoc()){
                                                                        echo $row['main'];
                                                                    }
                                                            } 
                                                        ?>">
                                
                            </td>
                            <td>Main</td>
                            <td id='4' class="tx2" value="<?php

                                                include('config.php');
                                                $sql="SELECT * from tx WHERE name='tx2'";
                                                $result=$conn->query($sql);
                                                if($result->num_rows>0)
                                                {
                                                    $a='';
                                                    while($row=$result->fetch_assoc()){
                                                            echo $row['main'];
                                                        }
                                                }
                                                ?>">
                            
                            </td>
                        </tr>
                        <tr>
                            <td id="5" value="<?php
                                                include('config.php');
                                                $sql="SELECT * from tx WHERE name='tx1'";
                                                $result=$conn->query($sql);
                                                if($result->num_rows>0)
                                                {
                                                    $a='';
                                                    while($row=$result->fetch_assoc()){
                                                            echo $row['antenna'];
                                                        }
                                                }
                                                ?>">
                                                    </td>
                            <td>Antenna</td>
                            <td id="6" value="<?php
                                                include('config.php');
                                                $sql="SELECT * from tx WHERE name='tx2'";
                                                $result=$conn->query($sql);
                                                if($result->num_rows>0)
                                                {
                                                    $a='';
                                                    while($row=$result->fetch_assoc()){
                                                            echo $row['antenna'];
                                                        }
                                                }
                                                ?>"></td>
                        </tr>
                        <tr>
                            <td id="7"></td>
                            <td>Load</td>
                            <td id="8"></td>
                        </tr>
                        <tr>
                            <td id="9" value="<?php
                                                include('config.php');
                                                $sql="SELECT * from tx WHERE name='tx2'";
                                                $result=$conn->query($sql);
                                                if($result->num_rows>0)
                                                {
                                                    $a='';
                                                    while($row=$result->fetch_assoc()){
                                                            echo $row['off'];
                                                        }
                                                }
                                                ?>"></td>
                            <td>Off</td>
                            <td id="10" value="<?php
                                                include('config.php');
                                                $sql="SELECT * from tx WHERE name='tx1'";
                                                $result=$conn->query($sql);
                                                if($result->num_rows>0)
                                                {
                                                    $a='';
                                                    while($row=$result->fetch_assoc()){
                                                            echo $row['off'];
                                                        }
                                                }
                                                ?>"></td>
                        </tr>
                    </table>
                    <table class="sh">
                        <tr style="text-align:center;">
                            <th colspan="4"> Monitors</th>
                        </tr>
                        <tr style="text-align:center;">
                            <th colspan="2" >&nbsp;&nbsp;Integral</th>
                            <th colspan="2">Standby</th>
                        </tr>
                        <tr style="text-align:center;">
                            <td id="11">&nbsp;&nbsp;</td>
                            <td colspan="2">Normal&nbsp;&nbsp;</td>
                            <td id="12"></td>
                        </tr>
                        <tr style="text-align:center;">
                            <td id="13"></td>
                            <td colspan="2">Alarm</td>
                            <td id="14"></td>
                        </tr>
                        <tr style="text-align:center;">
                            <td id="15"></td>
                            <td colspan="2">Bypass</td>
                            <td id="16"></td>
                        </tr>
                    </table>
                    <table class="sh">
                        <tr style="text-align:center;">
                            <th colspan="2">&nbsp;NFM</th>
                            <th colspan="2">&nbsp; FFM</th>
                        </tr>
                        <tr style="text-align:center;">
                            <td id="17" style="width:60px"></td>
                            <td colspan="2">Normal</td>
                            <td id="18"></td>
                        </tr>
                        <tr style="text-align:center;">
                            <td id="19"></td>
                            <td colspan="2">Alarm</td>
                            <td id="20"></td>
                        </tr>
                        <tr style="text-align:center;">
                            <td id="21"></td>
                            <td colspan="2">Bypass</td>
                            <td id="22"></td>
                        </tr>
                    </table>
                    
                    <table class="sh" >
                        <tr><th>Int CRS Pos</th><th id="23" style="width: 30px;border-color:#ccc;">
                                <?php
                                    include('config.php');
                                    $sql="SELECT m1,m2 from monitord WHERE main='Integral' AND  type='Course' AND name='Centerline DDM'";
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
                                    echo $a[0];
                                ?>
                        </th></tr>
                        <tr><th>Int CRS Width</th><th id="24" style="width: 30px;border-color:#ccc;">
                                <?php
                                    include('config.php');
                                    $sql="SELECT m1,m2 from monitord WHERE main='Integral' AND  type='Course' AND name='Width DDM'";
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
                                    echo $a[0];
                                ?>
                        </th></tr>
                        <tr><th>Int CLR Pos</th><th id="25" style="width: 30px;border-color:#ccc;">
                                <?php
                                    include('config.php');
                                    $sql="SELECT m1,m2 from monitord WHERE main='Integral' AND  type='clearance' AND name='Centerline DDM'";
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
                                    echo $a[0];
                                ?>
                        </th></tr>
                        <tr><th>Int CLR Width</th><th id="26"style="width: 30px;border-color:#ccc;">
                                <?php
                                    include('config.php');
                                    $sql="SELECT m1,m2 from monitord WHERE main='Integral' AND  type='clearance' AND name='Width DDM'";
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
                                    echo $a[0];
                                ?>  
                        </th></tr>
                        <tr><th>NFM Pos</th><th id="27"style="width: 30px;border-color:#ccc;">
                                <?php
                                    include('config.php');
                                    $sql="SELECT m1,m2 from monitord WHERE main='Field Monitors' AND name='DDM'";
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
                                    echo $a[0];
                                ?>
                        </th></tr>
                    </table>
                </div>
                </div>
              </div>
    </body>
</html>