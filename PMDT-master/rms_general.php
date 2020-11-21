<html>

<head>
    <title>PMDT</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    
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
                        <a href="rms_general.php"><button id="b1" style="background-color: blue;color: aliceblue;width: 90px;height: 30px;font-weight: bold;">General</button></a>
                        <a href="rms_station.php"><button id="b2" style="background-color: blue;color: aliceblue;width: 85px;height: 30px;font-weight: bold;">Station</button></a>
                        <a href="rms_config_ad.php"><button id="b3" style="background-color: blue;color: aliceblue;width: 100px;height: 30px;font-weight: bold;">A/D data</button></a>
                        <a href="rms_security.php"><button id="b4" style="background-color: blue;color: aliceblue;width: 100px;height: 30px;font-weight: bold;">Security</button></a>
                            <div id="d1">
                                <table style="width:auto;height: -webkit-fill-available;">
                                    <tr>
                                        <td>
                                            <table style="width: 100%;height: 100%;">
                                                <th colspan="4" style="width:400px;">RSCU Configuration</th>
                                                <tr>

                                                    <td colspan="3">
                                                        <input type="checkbox">RCSU Present</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="radio">Primary Runway</td>

                                                    <td>
                                                        <input type="radio">Secondary Runway</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">Connection Type &nbsp;&nbsp;&nbsp;&nbsp;
                                                    <table style="width:200px;height:25px ;" align="right"><tr><td id=" "></td></tr></table>
                                                &nbsp;&nbsp;
                                                    </td>

                                                </tr>
                                            </table>
                                        </td>
                                        <td>
                                            <table style="width: 100%;height: 100%;">
                                                <th colspan="2" style="width:400px;"> Digital I/O Configuration</th>
                                                <tr>

                                                    <td>
                                                        <input type="checkbox">Smoke Alarm</td>

                                                    <td>
                                                        <input type="checkbox">Intrusion Alarm</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">Spare #1 Usage &nbsp;&nbsp;&nbsp;
                                                    <table style="width:200px;height:25px ;" align="right"><tr><td id=" "></td></tr></table>
                                                &nbsp;&nbsp;
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td colspan="2">Spare #2 Usage&nbsp;&nbsp;&nbsp;
                                                    <table style="width:200px;height:25px ;" align="right"><tr><td id=" "></td></tr></table>
                                                &nbsp;&nbsp;
                                                    </td>

                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">
                                            <table style="width: 100%;height: 100%;">
                                                <th colspan="3" style="width: 100%;">Monitor Configuration</th>
                                                <tr>
                                                    <td>Monitor Voting Logic</td>
                                                    <td>
                                                        <input type="radio">AND</td>
                                                    <td>
                                                        <input type="radio">OR</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3">
                                                        <input type="radio">Monitor 1 Present</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3">
                                                        <input type="radio">Monitor 1 and 2 Present</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3">
                                                        <input type="radio">Monitor 1,2,3 and 4 Present</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3">
                                                        <input type="checkbox">Monitor Certification Enabled</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td>
                                            <table style="width: 100%;height: 100%;">
                                                <th colspan="4">RMM Configuration</th>
                                                <tr>
                                                    <td>
                                                        <label for="car">Dial In # Rings
                                                        <table style="width:50px;height:25px ;" align="right"><tr><td id=" "></td></tr></table>
                                                &nbsp;&nbsp;
                                                        </label>
                                                    </td>

                                                    <td>
                                                        <input type="checkbox" style="color: aliceblue;">
                                                        <label for="ar">Tone Dial Out</label>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td>
                                                        <input type="checkbox" style="color: aliceblue;">
                                                        <label for="ar">Dial Out ILS Enabled</label>
                                                    </td>

                                                    <td>
                                                        <input type="checkbox" style="color: aliceblue;">
                                                        <label for="ar">Dial Out DME Enabled</label>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td>
                                                        <label for="ar">Dial Out Phone Number</label>
                                                    </td>

                                                    <td>
                                                    <table style="width:180px;height:25px ;" align="right"><tr><td id=" "></td></tr></table>
                                                &nbsp;&nbsp;
                                                    </td>
                                                </tr>

                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table style="width: 100%;height: 100%;">
                                                <th colspan="2">Automatic Restarts</th>
                                                <tr>

                                                    <td>
                                                        <input type="checkbox"> Restarts Enabled</td>
                                                </tr>
                                                <tr>
                                                    <td>First Restart Delay(seconds) &nbsp;&nbsp;&nbsp;
                                                    <table style="width:150px;height:25px ;" align="right"><tr><td id=" "></td></tr></table>
                                                &nbsp;&nbsp;
                                                    </td>

                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table style="width: 100%;height: 100%;">
                                                <th>Antenna Configuration</th>
                                                <tr>
                                                    <td>Number of Antenna
                                                    <table style="width:150px;height:25px ;" align="right"><tr><td id=" "></td></tr></table>
                                                &nbsp;&nbsp;
                                                    </td>

                                                </tr>
                                                <tr>

                                                    <td>
                                                        <input type="checkbox">Misalignment Detection Enabled</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td>
                                            <table style="width: 100%;height: 100%;">
                                                <th colspan="3">DME Configuration</th>
                                                <tr>
                                                    <td>DME Type &nbsp;
                                                    <table style="width:50px;height:25px ;" align="right"><tr><td id=" "></td></tr></table>
                                                &nbsp;&nbsp;
                                                    </td>

                                                    <td>
                                                        <input type="checkbox">Dual</td>

                                                    <td>
                                                        <input type="checkbox">Interlock</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3">Keying Output &nbsp;&nbsp;
                                                    <table style="width:250px;height:25px ;" align="right"><tr><td id=" "></td></tr></table>
                                                &nbsp;&nbsp;
                                                    </td>

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