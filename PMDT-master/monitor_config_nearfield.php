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
                            
                            
                            
                            <div id="c4">
                                <table class="ex1" border="1" style="position :relative;margin-left: 5px; top: 11px;">
                                    <tr>
                                        <td style="height: 15px;width: 120px;"></td>

                                    </tr>
                                </table>

                                <table class="ex1" border="1" style="position :relative;margin-left: 430px; top: -10px;">
                                    <tr>
                                        <td>
                                            <p>Alarm Delay Time</p>
                                        </td>
                                        <td style="height: 15px;width:40px;">
                                            
                                        </td>
                                        <td style="height: 15px;">seconds</td>

                                    </tr>

                                </table>

                                <form>
                                    <fieldset>
                                        <legend>Course Position</legend>
                                        <table class="ex1" border="1">
                                            <tr>
                                                <td style="height: 15px;width: 120px;"> </td>
                                                <td style="height: 15px;">Alarm Low </td>
                                                <td style="height: 15px;"> PreALarm Low</td>
                                                <td style="height: 15px;">Nominal</td>
                                                <td style="height: 15px;">PreAlarm High </td>
                                                <td style="height: 15px;">Alarm High </td>
                                                <td style="height: 15px;"> </td>

                                            </tr>

                                            <tr>
                                                <td style="height: 15px;width: 160px;"> RF Level</td>
                                                <td style="height: 15px;">
                                                     </td>
                                                <td style="height: 15px;width: 30px;">
                                                    
                                                </td>
                                                <td style="height: 15px;width: 30px;">
                                                    
                                                </td>
                                                <td style="height: 15px;width: 30px;">
                                                    
                                                </td>
                                                <td style="height: 15px;width: 30px;">
                                                    
                                                </td>
                                                <td style="height: 15px;">%</td>

                                            </tr>
                                            <tr>
                                                <td style="height: 15px;width: 120px;"> DDM</td>
                                                <td style="height: 15px;">
                                                     </td>
                                                <td style="height: 15px;width: 30px;">
                                                    
                                                </td>
                                                <td style="height: 15px;width: 30px;">
                                                    
                                                </td>
                                                <td style="height: 15px;width: 30px;">
                                                    
                                                </td>
                                                <td style="height: 15px;width: 30px;">
                                                    
                                                </td>
                                                <td style="height: 15px;">DDM</td>

                                            </tr>
                                            <tr>
                                                <td style="height: 15px;width: 120px;"> SDM</td>
                                                <td style="height: 15px;">
                                                     </td>
                                                <td style="height: 15px;width: 30px;">
                                                    
                                                </td>
                                                <td style="height: 15px;width: 30px;">
                                                    
                                                </td>
                                                <td style="height: 15px;width: 30px;">
                                                    
                                                </td>
                                                <td style="height: 15px;width: 30px;">
                                                    
                                                </td>
                                                <td style="height: 15px;">%</td>

                                            </tr>

                                        </table>
                                    </fieldset>
                                </form>

                            </div>
                            </div>

                    </div>

                </div>
            </div>
        </div>
</body>

</html>