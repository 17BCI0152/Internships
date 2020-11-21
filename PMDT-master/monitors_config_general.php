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
                            <a href="monitors_config_general.php"><button id="b1" style="background-color: blue;color: aliceblue;width: 90px;height: 30px;font-weight: bold;">General</button></a>
                            <a href="monitor_config_integral.php"><button id="b2" style="background-color: blue;color: aliceblue;width: 85px;height: 30px;font-weight: bold;">Integral</button></a>
                           <a href= "monitor_config_standby.php"> <button id="b3" style="background-color: blue;color: aliceblue;width: 100px;height: 30px;font-weight: bold;">Standby</button></a>
                            <a href="monitor_config_nearfield.php"><button id="b4" style="background-color: blue;color: aliceblue;width: 100px;height: 30px;font-weight: bold;">Near Field</button></a>
                            
                            
                            
                            <div id="c1" style="height:560px !important;">
                                <table class="ex1" border="1" style="position: absolute;top: 72px;">
                                    <tbody>
                                        <tr>
                                            <td style="height: 15px;width: 120px;"></td>

                                        </tr>
                                    </tbody>
                                </table>
                                <form style="position: absolute;margin-left: 175px;top: 63px;">
                                    <table class="ex1" border="1">
                                        <tbody>
                                            <tr>
                                                <td style="height: 15px;">
                                                    <p style="height: 17px;">IdentCode</p>
                                                </td>
                                                <td style="height: 15px;width: 60px;">
                                                   
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </form>
                                <form style="position: absolute;margin-left: 362px;top: 63px;">
                                    <table class="ex1" border="1">
                                        <tbody>
                                            <tr>
                                                <td style="height: 15px;">
                                                    <p style="height: 12px;">Certificatecategory</p>
                                                </td>
                                                <td>
                                                    <select>

                                                    </select>
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </form>
                                <table class="ex1" border="1" style="position: absolute;margin-left: 572px;top: 65px;">
                                    <tbody>
                                        <tr>
                                            <td style="height: 15px;width: 30px;"></td>
                                            <td>Windows DME Keying</td>

                                        </tr>
                                    </tbody>
                                </table>
                                <form style="margin-top: 34px;margin-left: 36px;position: absolute;">
                                    <fieldset>
                                        <legend>Executive Alarms</legend>
                                        <table class="ex1" border="1">
                                            <tbody>
                                                <tr>
                                                    <td style="height: 15px;width: 150px; empty-cells:hide;" rowspan="2"></td>
                                                    <td style="height: 15px;width: 120px;" colspan="2"> IntegralMonitor</td>

                                                    <td style="height: 15px;width: 120px;" colspan="2">StandByMonitor</td>

                                                </tr>
                                                <tr>

                                                    <td style="height: 15px;width: 120px;">course</td>
                                                    <td style="height: 15px;width: 120px;">clearance</td>
                                                    <td style="height: 15px;width: 120px;">course</td>
                                                    <td style="height: 15px;width: 120px;">clearance</td>

                                                </tr>

                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> Centerline RF Level</td>
                                                    <td style="height: 15px;width: 120px;"> </td>
                                                    <td style="height: 15px;width: 120px;"> </td>
                                                    <td style="height: 15px;width: 120px;"></td>
                                                    <td style="height: 15px;width: 120px;"> </td>

                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> Centerline DDM</td>
                                                    <td style="height: 15px;width: 120px;"> </td>
                                                    <td style="height: 15px;width: 120px;"> </td>
                                                    <td style="height: 15px;width: 120px;"></td>
                                                    <td style="height: 15px;width: 120px;"> </td>

                                                </tr>

                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> Ident Mod Percent</td>
                                                    <td style="height: 15px;width: 120px;"> </td>
                                                    <td style="height: 15px;width: 120px;"> </td>
                                                    <td style="height: 15px;width: 120px;"></td>
                                                    <td style="height: 15px;width: 120px;"> </td>

                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> Width DDM</td>
                                                    <td style="height: 15px;width: 120px;"> </td>
                                                    <td style="height: 15px;width: 120px;"> </td>
                                                    <td style="height: 15px;width: 120px;"></td>
                                                    <td style="height: 15px;width: 120px;"> </td>

                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> Ident Status</td>
                                                    <td style="height: 15px;width: 120px;"> </td>
                                                    <td style="height: 15px;width: 120px;"> </td>
                                                    <td style="height: 15px;width: 120px;"></td>
                                                    <td style="height: 15px;width: 120px;"> </td>

                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;">SynthLOCKFault </td>
                                                    <td style="height: 15px;width: 120px;"> </td>
                                                    <td style="height: 15px;width: 120px;"> </td>
                                                    <td style="height: 15px;width: 120px;"> </td>
                                                    <td style="height: 15px;width: 120px;"> </td>

                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;">RFfrequencyError </td>
                                                    <td style="height: 15px;width: 120px;"> </td>
                                                    <td style="height: 15px;width: 120px;"> </td>
                                                    <td style="height: 15px;width: 120px;"> </td>
                                                    <td style="height: 15px;width: 120px;"> </td>

                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;">Antenna Fault </td>
                                                    <td style="height: 15px;width: 120px;"> </td>
                                                    <td style="height: 15px;width: 120px;"> </td>

                                                </tr>

                                            </tbody>
                                        </table>
                                    </fieldset>
                                </form>
                                <form style="position: absolute;margin-left: 180px;/* width: 216px; */margin-top: 359px;">
                                    <fieldset>
                                        <legend>Near Field Monitor</legend>
                                        <table class="ex1" border="1">
                                            <tbody>
                                                <tr>
                                                    <td style="height: 15px;width: 36px;"></td>
                                                    <td>Course RF Level</td>
                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 36px;"></td>
                                                    <td>Course DDM</td>
                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 36px;"></td>
                                                    <td>Course SDM</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </fieldset>
                                </form>
                                <table class="ex1" border="1" style="position: absolute;margin-top: 512px;margin-left: 182px;">
                                    <tbody>
                                        <tr>
                                            <td style="height: 15px;width: 36px;"></td>
                                            <td>OffsetClearanceMonitor</td>
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