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

                            <div id="Div4">
                                <table align="left" style="width:610px;margin-left: 10%;">
                                    <tr>
                                        <td colspan="2" style="height: 50px;">&nbsp;&nbsp;
                                        <table style="width:150px;height:25px ;" align="left"><tr><td id=" "></td></tr></table>
                                                &nbsp;&nbsp;
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">&nbsp;MCPU ROM Fault</td>
                                        <td>
                                            <input type="checkbox">&nbsp;Course CSB/SBO Phase Unlock</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">&nbsp;MCPU RAM Fault</td>
                                        <td>
                                            <input type="checkbox">&nbsp;Clearance CSB/SBO Phase Unlock</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">&nbsp;MCPU Functional Fault</td>
                                        <td>
                                            <input type="checkbox">&nbsp;Synthesizer RAM Parity Error</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">&nbsp;MDSP ROM Fault</td>
                                        <td>
                                            <input type="checkbox">&nbsp;Course CSB VSWR Fault</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">&nbsp;MSDP RAM Fault</td>
                                        <td>
                                            <input type="checkbox">&nbsp; Clearance CSB VSWR Fault</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">&nbsp;MSDP Functional Fault</td>
                                        <td>
                                            <input type="checkbox">&nbsp;Course Thermal Fault</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">&nbsp;Course Transmitter Disabled</td>
                                        <td>
                                            <input type="checkbox">&nbsp;Clearance thermal Fault</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">&nbsp;Clearance Transmitter Disabled</td>
                                        <td>
                                            <input type="checkbox">&nbsp;8 Hz Clock Fault</td>
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