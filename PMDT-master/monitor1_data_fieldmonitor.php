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


                            <div id="Div2" style="width:880px">
                                <table class="ex1" border="1" style="margin-left:10%;">
                                    <tbody>
                                        <tr>
                                            <td style="height: 23px;width: 193px;" id=""></td>

                                        </tr>

                                    </tbody>
                                </table>
                                <br>
                                <form style="margin-left:10%;">
                                    <fieldset style="width: max-content;">
                                        <legend>Near Field Monitor Course Position</legend>
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox">
                                                    </td>
                                                    <td style="width: 179px;">Communications Fault</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table class="ex1" border="1">
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                </tr>
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
                                                    <td style="height: 15px;" id=" "></td>
                                                    <td style="height: 15px;" id=" "></td>
                                                    <td style="height: 15px;" id=" "></td>
                                                    <td style="height: 15px;" id=" "></td>
                                                    <td style="height: 15px;" id=" "></td>
                                                    <td style="height: 15px;">%</td>

                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> DDM</td>
                                                    <td style="height: 15px;" id=" "></td>
                                                    <td style="height: 15px;" id=" "></td>
                                                    <td style="height: 15px;" id=" "></td>
                                                    <td style="height: 15px;" id=" "></td>
                                                    <td style="height: 15px;" id=" "></td>
                                                    <td style="height: 15px;">DDM</td>

                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> SDM</td>
                                                    <td style="height: 15px;" id=" "></td>
                                                    <td style="height: 15px;" id=" "></td>
                                                    <td style="height: 15px;" id=" "></td>
                                                    <td style="height: 15px;" id=" "></td>
                                                    <td style="height: 15px;" id=" "></td>
                                                    <td style="height: 15px;">%</td>

                                                </tr>

                                            </tbody>
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