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
                        <div class="inner" style="margin-left: 3%;">
                        <a href="rms_rdstatus.php"><input id="b1" type="button" value="RMS/DME status" style="width: 155px;height: 30px;font-weight: bold;background-color: blue;color: aliceblue;"></a>
                        <a href="rms_mtstatus.php"><input id="b2" type="button" value="Monitor/Transmitor status" style="width: 215px;height: 30px;font-weight: bold;background-color: blue;color: aliceblue;"></a>
                        <div id="Div2">
                                <div style="margin-left: -23px;margin-top: 18px;">
                                    <table class="ex1" border="5" style="position: absolute;margin-left: 5%;margin-top: 13px;">
                                        <tbody>
                                            <tr>
                                                <td style="height:21px;width: 144px;" id=""></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                    <table class="ex1" border="5" style="position: absolute;margin-left: 26%;margin-top: 1.3%;">

                                        <tbody>
                                            <tr>
                                                <td style="width: 35px;" id=""></td>
                                                <td style="width: 165px;font-size:14px;">Certificate Test Enabled</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="ex1" border="5" style="position: absolute;margin-left: 53%;margin-top: 1.4%;">
                                        <tbody>
                                            <tr>
                                                <td style="width: 35px;" id=""></td>
                                                <td style="width: 178px;font-size:14px;">Monitor Alarm Shutdown</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div style="position: relative;margin-left: 3%;margin-top: 15%;box-sizing: border-box;width: 330px;/* height: 200px; */">
                                    <p>Monitor</p>
                                    <div style="border: 1px solid black;padding: 9px;margin-top: 0%;">
                                        <table class="ex1" border="5">
                                            <tbody>
                                                <tr>
                                                    <td style="width: 134px;border-color:#ccc;empty-cells: hide"></td>
                                                    <td style="width: 40px;border-color:#ccc;box-shadow:3px 3px 5px 6p black;"> Bypass</td>
                                                    <td style="width: 40px;border-color:#ccc;">Alarm</td>
                                                    <td style="width: 40px;border-color:#ccc;">Mismatch</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 70px;border-color:#ccc;">Integral</td>
                                                    <td style="width: 40px;border-color:#ccc;box-shadow:3px 3px 5px 6p black;" id=""> </td>
                                                    <td style="width: 40px;border-color:#ccc; " id=""></td>
                                                    <td style="width: 40px;border-color:#ccc;" id=""></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 70px;border-color:#ccc;">StandBy</td>
                                                    <td style="width: 40px;border-color:#ccc;box-shadow:3px 3px 5px 6p black;" id=""></td>
                                                    <td style="width: 40px;border-color:#ccc;" id=""></td>
                                                    <td style="width: 40px;border-color:#ccc;" id=""></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 70px;border-color:#ccc;">NFM</td>
                                                    <td style="width: 40px;border-color:#ccc;box-shadow:3px 3px 5px 6p black;" id=""> </td>
                                                    <td style="width: 40px;border-color:#ccc;" id=""></td>
                                                    <td style="width: 40px;border-color:#ccc;" id=""></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 70px;border-color:#ccc;">FFM</td>
                                                    <td style="width: 40px;border-color:#ccc;box-shadow:3px 3px 5px 6p black;" id=""></td>
                                                    <td style="width: 40px;border-color:#ccc;" id=""></td>
                                                    <td style="width: 40px;border-color:#ccc;" id=""></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div style="position: absolute;margin-left: 124%;top: 7%;box-sizing: border-box;width: 300px;height: 300px;">
                                        <p>Enabled Monitor</p>
                                        <div style="border: 1px solid black;padding: 11px;margin-top: 0px;max-width: fit-content;">
                                            <table class="ex1" border="5">

                                                <tbody>
                                                    <tr>
                                                        <td style="height: 15px;width: 20px;" id=""></td>
                                                        <td style="height: 15px;">Monitor1</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table class="ex1" border="5">

                                                <tbody>
                                                    <tr>
                                                        <td style="height: 15px;width: 20px;" id=""></td>
                                                        <td style="height: 15px;">Monitor2</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            
                                        </div>
                                    </div>

                                </div>
                                <p></p>
                                <p></p>
                                <p></p>
                                <div style="position: relative;margin-left: 23px;box-sizing: border-box;margin-top: 5%;">
                                    <p>Transmitters</p>
                                    <div style="border: 1px solid black;padding: 11px;margin-top:0px;margin-right: 141px; ">
                                        <div style="margin-left: 5%;position: relative;margin-top: 0%;">
                                            <p>Antenna Select</p>
                                            <div style="border: 1px solid black;padding: 11px;margin-top: 0px;max-width: fit-content;">
                                                <table class="ex1" border="5">

                                                    <tbody>
                                                        <tr>
                                                            <td style="height: 15px;width: 20px;" id=""></td>
                                                            <td style="height: 15px;">Tx1</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table class="ex1" border="5">

                                                    <tbody>
                                                        <tr>
                                                            <td style="height: 15px;width: 20px;" id=""></td>
                                                            <td style="height: 15px;">Tx2</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div style="position: absolute;margin-left: 33%;margin-top: -12.4%;">
                                            <p>Main Select</p>
                                            <div style="border: 1px solid black;padding: 11px;margin-top:0px;max-width: fit-content;">
                                                <table class="ex1" border="5">

                                                    <tbody>
                                                        <tr>
                                                            <td style="height: 15px;width: 20px;" id=""></td>
                                                            <td style="height: 15px;">Tx1</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table class="ex1" border="5">

                                                    <tbody>
                                                        <tr>
                                                            <td style="height: 15px;width: 20px;" id=""></td>
                                                            <td style="height: 15px;">Tx2</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                        <div style="position: absolute;margin-left: 59%;margin-top: -12.4%;">
                                            <p>Transmitter On</p>
                                            <div style="border: 1px solid black;padding: 11px;margin-top: 0px;max-width: fit-content;">
                                                <table class="ex1" border="5">

                                                    <tbody>
                                                        <tr>
                                                            <td style="height: 15px;width: 20px;" id=""></td>
                                                            <td style="height: 15px;">Tx1</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table class="ex1" border="5">

                                                    <tbody>
                                                        <tr>
                                                            <td style="height: 15px;width: 20px;" id=""></td>
                                                            <td style="height: 15px;">Tx2</td>
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
        </div>
</body>

</html>