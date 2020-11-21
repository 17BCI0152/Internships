<html>

<head>
    <title>PMDT</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
    
    
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
                            <a href="rms_os.php"><button id="b1" style="background-color: blue;color: aliceblue;width: 183px;height: 30px;font-weight: bold;">Operational Summary</button></a>
                            <a href="rms_alarm.php"><button id="b2" style="background-color: blue;color: aliceblue;width: 71px;height: 30px;font-weight: bold;">Alarms</button></a>
                            <a href="rms_ma.php"><button id="b3" style="background-color: blue;color: aliceblue;width: 163px;height: 30px;font-weight: bold;">Maintenance Alerts</button></a>
                            <a href="rms_ca.php"><button id="b4" style="background-color: blue;color: aliceblue;width: 157px;height: 30px;font-weight: bold;">Command Activity</button></a>
                            <a href="rms_pc.php"><button id="b5" style="background-color: blue;color: aliceblue;width: 158px;height: 30px;font-weight: bold;">Parameter Change</button></a>
                            <div id="Div1">
                                <div class="m1">
                                    <table border="1" frame="void">
                                        <tr>
                                            <td></td>
                                            <th>&nbsp;&nbsp;Transmitter 1&nbsp;&nbsp;</th>
                                            <th>&nbsp;&nbsp;Transmitter 2 &nbsp;&nbsp;</th>
                                            <th style="width:100px;text-align:center;">DME 1</th>
                                            <th style="width:100px;text-align:center;">DME 2</th>
                                        </tr>
                                        <tr>
                                            <th style="width:200px;">Time in Normal State
                                                <br>(in Hours)</th>
                                            <td>
                                                
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Time in Standby State
                                                <br>(in Hours)</th>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Time Interlocked Off
                                                <br>(in Hours)</th>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Availability (%)</th>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                               
                                            </td>

                                        </tr>
                                    </table>
                                    <br>
                                    <div class="times">
                                        <div class="times1">
                                            <table>
                                                <tr>
                                                    <th>Start Time</th>
                                                    <td style="width:100px">
                                                        
                                                    </td>
                                                </tr>
                                            </table>
                                            <br>
                                            <br>
                                            <table>
                                                <tr>
                                                    <th>End Time&nbsp;</th>
                                                    <td style="width:100px">
                                                       
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="times2">
                                            <table>
                                                <tr>
                                                    <th>Elapsed Time&nbsp;</th>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        
                                                    </td>
                                                    <td>Hours</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <input type="submit" value="Reset Operational Summary" name="reset summary" style="position: absolute;
    margin-top: 60px;" id="reset">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</body>

</html>