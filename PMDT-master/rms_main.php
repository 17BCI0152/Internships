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
                            <a href="rms_main.php"> <button id="b1" style="background-color: blue;color: aliceblue;width: 257px;height: 30px;font-weight: bold;">Maintainance alerts and Alarms</button></a>
                            <a href="rms_ad.php"> <button id="b2" style="background-color: blue;color: aliceblue;width: 100px;height: 30px;font-weight: bold;">A/D data</button></a>
                            <a href="rms_di.php"> <button id="b3" style="background-color: blue;color: aliceblue;width: 130px;height: 30px;font-weight: bold;">Digital Inputs</button></a>
                            <a href="rms_af.php"> <button id="b4" style="background-color: blue;color: aliceblue;width: 132px;height: 30px;font-weight: bold;">Antenna Faults</button></a>
                            <div id="Div1">
                                <table>
                                    <tr>
                                        <td>
                                            <table>
                                                <tr>
                                                    <th colspan="2">Monitor Mismatch Alerts</th>
                                                </tr>
                                                <tr>
                                                    <td style="width: 30px;border-color:#ccc;" id=""></td>
                                                    <td>Integral Monitor</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 30px;border-color:#ccc;" id=""></td>
                                                    <td>Standby Monitor</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 30px;border-color:#ccc;" id=""></td>
                                                    <td>Near Field Monitor</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 30px;border-color:#ccc;" id=""></td>
                                                    <td>Far Field Monitor</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td>
                                            <table>
                                                <tr>
                                                    <th colspan="2">RMS Digital Input Alerts</th>
                                                </tr>
                                                <tr>
                                                    <td style="width: 30px;border-color:#ccc;" id=""></td>
                                                    <td>Smoke Detector</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 30px;border-color:#ccc;" id=""></td>
                                                    <td>Intrusion Detector</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 30px;border-color:#ccc;" id=""></td>
                                                    <td>Spare Digital #1</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 30px;border-color:#ccc;" id=""></td>
                                                    <td>Spare Digital #2</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td>
                                            <table>
                                                <tr>
                                                    <th colspan="4">General Alerts and Alarms</th>
                                                </tr>
                                                <tr>
                                                    <td style="width: 30px;border-color:#ccc;" id=""></td>
                                                    <td>Local Mode</td>
                                                    <td style="width: 30px;border-color:#ccc;" id=""></td>
                                                    <td>RMS A/D Data</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 30px;border-color:#ccc;" id=""></td>
                                                    <td>AC Failure</td>
                                                    <td style="width: 30px;border-color:#ccc;" id=""></td>
                                                    <td>BCPS Power Supplies</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 30px;border-color:#ccc;" id=""></td>
                                                    <td colspan="3">LCU Config Mismatch</td>

                                                </tr>
                                                <tr>
                                                    <td style="width: 30px;border-color:#ccc;" id=""></td>
                                                    <td>Standby TX on the Air</td>
                                                    <td style="width: 30px;border-color:#ccc;" id=""></td>
                                                    <td>Antenna Misalignment</td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                        <br>
                                            <table>
                                                <tr>
                                                    <th colspan="5" style="width:800px; text-align:center;">Monitor Alerts and Alarms</th>
                                                </tr>
                                                <tr>
                                                    <td style="width: 30px;border-color:#ccc;" id=""></td>
                                                    <th style="width:150px; text-align:center;">Monitor 1</th>
                                                    <th style="width:150px; text-align:center;">Monitor 2</th>
                                
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;&nbsp;*RMS to Moitor Comm Link Failed</td>
                                                    <td style="width: 30px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;border-color:#ccc;"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;&nbsp;*EEPROM Fault</td>
                                                    <td style="width: 30px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;border-color:#ccc;"></td>
                                                    
                                            

                                                </tr>
                                                <tr>
                                                    <td>&nbsp;&nbsp;*Certification Test Failed</td>
                                                    <td style="width: 30px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;border-color:#ccc;"></td>
                                                    

                                                </tr>
                                                <tr>
                                                    <td>&nbsp;&nbsp;*Invalid Checksum</td>
                                                    <td style="width: 30px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;border-color:#ccc;"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;&nbsp;*Backplane Switch Mismatch</td>
                                                    <td style="width: 30px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;border-color:#ccc;"></td>
                                                   
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;&nbsp;Maintenance Alert</td>
                                                    <td style="width: 30px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;border-color:#ccc;"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;&nbsp;Pre-Alarm</td>
                                                    <td style="width: 30px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;border-color:#ccc;"></td>
                                                   
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;&nbsp;Alarm</td>
                                                    <td style="width: 30px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;border-color:#ccc;"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td colspan="5"><i>&nbsp;&nbsp;* Indicates this parameter can disable a moniter.</i></td>
                                                </tr>
                                            </table>

                                        </td>
                                    </tr>
                                </table>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
</body>

</html>