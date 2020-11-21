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

                            <div id="Div3">
                                <table align="left" style="margin-left: 10%;">
                                    <tr>
                                        <td>Start of Test
                                        <table style="width:100px;height:25px ;" align="right"><tr><td id=" "></td></tr></table>
                                                &nbsp;&nbsp;
                                        </td>
                                        <td></td>
                                        <td>
                                            <input type="checkbox" style="width: 20px;">Communication Fault &nbsp;</td>
                                        <td></td>
                                        <td>Certification Category&nbsp;&nbsp;
                                        <table style="width:60px;height:25px ;" align="right"><tr><td id=" "></td></tr></table>
                                                &nbsp;&nbsp;
                                        </td>

                                    </tr>

                                </table>
                                <br>
                                <p></p>
                                <br>
                                <table align="left" style="width: 655px;margin-left: 10%;">
                                    <tr>
                                        <td rowspan="2"></td>
                                        <th colspan="2">Ceterline High Test</th>
                                        <th colspan="2">Centerline Low Test</th>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>

                                        <th>Expected</th>
                                        <th>Actual</th>
                                        <th>Expected</th>
                                        <th>Actual</th>

                                    </tr>
                                    <tr>
                                        <th>Centerline RF Level</th>
                                        <td style="height: 15px;" id=" "></td>
                                        <td style="height: 15px;" id=" ">
                                        </td>
                                        <td style="height: 15px;" id=" ">
                                        </td>
                                        <td style="height: 15px;" id=" "></td>
                                        <td>% of Nominal</td>

                                    </tr>
                                    <tr>
                                        <th>Centerline DDM</th>
                                        <td style="height: 15px;" id=" "></td>
                                        <td style="height: 15px;" id=" "></td>
                                        <td style="height: 15px;" id=" "></td>
                                        <td style="height: 15px;" id=" "></td>
                                        <td>DDM</td>

                                    </tr>
                                    <tr>
                                        <th>Centerline SDM</th>
                                        <td style="height: 15px;" id=" "></td>
                                        <td style="height: 15px;" id=" "></td>
                                        <td style="height: 15px;" id=" "></td>
                                        <td style="height: 15px;" id=" "></td>
                                        <td>%Mod</td>

                                    </tr>
                                    <tr>
                                        <th>Width DDM</th>
                                        <td style="height: 15px;" id=" "></td>
                                        <td style="height: 15px;" id=" "></td>
                                        <td style="height: 15px;" id=" "></td>
                                        <td style="height: 15px;" id=" "></td>
                                        <td>DDM</td>

                                    </tr>
                                </table>
                                <table align="left" style="width: 655px;margin-left: 10%;">
                                    <tr>
                                        <td rowspan="2"></td>
                                        <th colspan="2">Width Narrow Test</th>
                                        <th colspan="2">Width Wide Test</th>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>

                                        <th>Expected</th>
                                        <th>Actual</th>
                                        <th>Expected</th>
                                        <th>Actual</th>

                                    </tr>
                                    <tr>
                                        <th>Centerline RF Level</th>
                                        <td style="height: 15px;" id=" "></td>
                                        <td style="height: 15px;" id=" "></td>
                                        <td style="height: 15px;" id=" "></td>
                                        <td style="height: 15px;" id=" "></td>
                                        <td>% of Nominal</td>

                                    </tr>
                                    <tr>
                                        <th>Centerline DDM</th>
                                        <td style="height: 15px;" id=" "></td>
                                        <td style="height: 15px;" id=" "></td>
                                        <td style="height: 15px;" id=" "></td>
                                        <td style="height: 15px;" id=" "></td>
                                        <td>DDM</td>

                                    </tr>
                                    <tr>
                                        <th>Centerline SDM</th>
                                        <td style="height: 15px;" id=" "></td>
                                        <td style="height: 15px;" id=" "></td>
                                        <td style="height: 15px;" id=" "></td>
                                        <td style="height: 15px;" id=" "></td>
                                        <td>%Mod</td>

                                    </tr>
                                    <tr>
                                        <th>Width DDM</th>
                                        <td style="height: 15px;" id=" "></td>
                                        <td style="height: 15px;" id=" "></td>
                                        <td style="height: 15px;" id=" "></td>
                                        <td style="height: 15px;" id=" "></td>
                                        <td>DDM</td>

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