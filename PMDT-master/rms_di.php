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
                            <div id="Div3" style="">

                                <table class="ex1" border="5">
                                    <tbody>
                                        <tr>
                                            <td style="height: 21px;width: 188px;"></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                                <br>
                                <div>
                                    <p>Cabinet Interface Panel</p>
                                    <div style="border: 1px solid black;padding: 10px;width: 44%;">
                                        <table class="ex1" border="5">

                                            <tbody>
                                                <tr>
                                                    <td style="height: 13px;width: 40px;"></td>
                                                    <td style="height: 15px;width: 366px;">
                                                        <p>Cabinet Interface panel not responding</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <br>

                                        <table class="ex1" border="5">
                                            <tbody>
                                                <tr>
                                                    <td style="width: 134px;border-color:#ccc;empty-cells: hide"></td>
                                                    <td style="width: 40px;border-color:#ccc;box-shadow:3px 3px 5px 6p black;"> Configuration </td>
                                                    <td style="width: 15px;border-color:#ccc;">status</td>

                                                </tr>
                                                <tr>
                                                    <td style="width: 70px;border-color:#ccc;">Smoke Detector</td>
                                                    <td style="width: 40px;border-color:#ccc;box-shadow:3px 3px 5px 6p black;"> </td>
                                                    <td style="width: 15px;border-color:#ccc;"></td>

                                                </tr>
                                                <tr>
                                                    <td style="width: 70px;border-color:#ccc;">Intrusion Detector</td>
                                                    <td style="width: 40px;border-color:#ccc;box-shadow:3px 3px 5px 6p black;"></td>
                                                    <td style="width: 40px;border-color:#ccc;"></td>

                                                </tr>
                                                <tr>
                                                    <td style="width: 70px;border-color:#ccc;">Spare 1</td>
                                                    <td style="width: 40px;border-color:#ccc;box-shadow:3px 3px 5px 6p black;"> </td>
                                                    <td style="width: 15px;border-color:#ccc;"></td>

                                                </tr>
                                                <tr>
                                                    <td style="width: 70px;border-color:#ccc;">Spare 2</td>
                                                    <td style="width: 40px;border-color:#ccc;box-shadow:3px 3px 5px 6p black;"></td>
                                                    <td style="width: 15px;border-color:#ccc;"></td>

                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>

                                    <p style="position: absolute;left: 48%;top: 22%;">BCPS Power Supplies</p>
                                    <div style="position: absolute;border: 1px solid black;padding: 15px;left: 47%;top: 26%;">
                                        <table class="ex1" border="5">
                                            <tbody>
                                                <tr>
                                                    <td style="width: 116px;border-color:#ccc;empty-cells: hide;"></td>
                                                    <td style="/* width: 72px; */border-color:#ccc;box-shadow:3px 3px 5px 6p black;"> Transmission 1 </td>
                                                    <td style="/* width: 49px; */border-color:#ccc;">Transmission 2</td>

                                                </tr>
                                                <tr>
                                                    <td style="width: 70px;border-color:#ccc;">+24 VDC</td>
                                                    <td style="width: 40px;border-color:#ccc;box-shadow:3px 3px 5px 6p black;"> </td>
                                                    <td style="width: 15px;border-color:#ccc;"></td>

                                                </tr>
                                                <tr>
                                                    <td style="width: 70px;border-color:#ccc;">Battery</td>
                                                    <td style="width: 40px;border-color:#ccc;box-shadow:3px 3px 5px 6p black;"></td>
                                                    <td style="width: 40px;border-color:#ccc;"></td>

                                                </tr>
                                                <tr>
                                                    <td style="width: 70px;border-color:#ccc;">Converters</td>
                                                    <td style="width: 40px;border-color:#ccc;box-shadow:3px 3px 5px 6p black;"> </td>
                                                    <td style="width: 15px;border-color:#ccc;"></td>

                                                </tr>
                                                <tr>
                                                    <td style="width: 70px;border-color:#ccc;">+5 VDC</td>
                                                    <td style="width: 40px;border-color:#ccc;box-shadow:3px 3px 5px 6p black;"></td>
                                                    <td style="width: 15px;border-color:#ccc;"></td>

                                                </tr>
                                                <tr>
                                                    <td style="width: 70px;border-color:#ccc;">+12 VDC</td>
                                                    <td style="width: 40px;border-color:#ccc;box-shadow:3px 3px 5px 6p black;"></td>
                                                    <td style="width: 15px;border-color:#ccc;"></td>

                                                </tr>
                                                <tr>
                                                    <td style="width: 70px;border-color:#ccc;">-12 VDC</td>
                                                    <td style="width: 40px;border-color:#ccc;box-shadow:3px 3px 5px 6p black;"></td>
                                                    <td style="width: 15px;border-color:#ccc;"></td>

                                                </tr>
                                                <tr>
                                                    <td style="width: 70px;border-color:#ccc;">Mon+12 VDC</td>
                                                    <td style="width: 40px;border-color:#ccc;box-shadow:3px 3px 5px 6p black;"></td>
                                                    <td style="width: 15px;border-color:#ccc;"></td>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                            </div>

</div>
</div>
</div>
</div>
</body>

</html>