<html>

<head>
    <title>PMDT</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
    
    
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

                            <div id="Div5" style="">
                                <table align="left" style="margin-left: 10%;">
                                    <tbody>
                                        <tr>
                                            <td>Start of Test &nbsp;&nbsp;
                                            <table style="width:150px;height:25px ;" align="right"><tr><td id=" "></td></tr></table>
                                                &nbsp;&nbsp;
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <table align="left" style="width: 600px;position: absolute;margin-top: 75px;margin-left: 10%;">
                                    <tbody>
                                        <tr>
                                            <th colspan="2" >Alarm /Alerts</th>
                                            <th colspan="2">Software Revisions</th>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <input type="checkbox">&nbsp;Monitor Alarm</td>
                                            <td colspan="2">MCPU Revision &nbsp;&nbsp;
                                            <table style="width:90px;height:25px ;" align="right"><tr><td id=" "></td></tr></table>
                                                &nbsp;&nbsp;
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <input type="checkbox"> Monitor Alert</td>
                                            <td colspan="2">MDSP Revision&nbsp;&nbsp;&nbsp;&nbsp;
                                            <table style="width:90px;height:25px ;" align="right"><tr><td id=" "></td></tr></table>
                                                &nbsp;&nbsp;
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <input type="checkbox"> Maintenance Alert</td>
                                            <th colspan="2">Diagnostics</th>
                                        </tr>
                                        <tr>
                                            <th colspan="2">Operation Condition</th>
                                            <td colspan="2">
                                                <input type="checkbox"> EEPROM Fault</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <input type="checkbox"> Remote Mode
                                                <input type="checkbox"> Local Mode</td>

                                            <td colspan="2">
                                                <input type="checkbox"> RAM Not Stored to EEPROM</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <input type="checkbox"> Hot Standby Present</td>
                                            <td colspan="2">
                                                <input type="checkbox"> Diagnostics Test in progress</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Waveform Status &nbsp;&nbsp;
                                            <table style="width:100px;height:25px ;" align="right"><tr><td id=" "></td></tr></table>
                                                &nbsp;&nbsp;
                                            </td>
                                            <td colspan="2">Shutdown Status &nbsp;&nbsp;
                                            <table style="width:90px;height:25px ;" align="right"><tr><td id=" "></td></tr></table>
                                                &nbsp;&nbsp;
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"></td>
                                            <th colspan="2">Ident</th>
                                        </tr>
                                        <tr>
                                            <th colspan="2">Power Supplies</th>
                                            <td colspan="2">
                                                <input type="checkbox"> DME Ident Enabled</td>
                                        </tr>
                                        <tr>
                                            <td>+5 VDC &nbsp;&nbsp;&nbsp;
                                            <table style="width:60px;height:25px ;" align="right"><tr><td id=" "></td></tr></table>
                                                &nbsp;&nbsp;
                                            </td>
                                            <td>+12 VDC &nbsp;&nbsp;
                                            <table style="height:25px;" align="right"><tr><td id=" " style="width:50px"></td><td>Volts</td></tr></table>
                                                &nbsp;&nbsp;
                                                
                                            <td colspan="2">Localizer Ident &emsp;&emsp;&ensp;
                                            <table style="width:90px;height:25px ;" align="right"><tr><td id=" "></td></tr></table>
                                                &nbsp;&nbsp;
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>+24 VDC &nbsp;
                                            <table style="width:60px;height:25px ;" align="right"><tr><td id=" "></td></tr></table>
                                                &nbsp;&nbsp;    
                                            </td>
                                            <td>-12 VDC &nbsp;&nbsp;&nbsp;
                                            <table style="height:25px;" align="right"><tr><td id=" " style="width:50px"></td><td>Volts</td></tr></table>
                                                &nbsp;&nbsp;
                                                
                                            <td colspan="2">Ident Audio to RMS &nbsp;&nbsp;
                                                <table style="width:90px;height:25px;" align="right"><tr><td id=" "></td></tr></table>
                                                &nbsp;&nbsp;
                                            </td>
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