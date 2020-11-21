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
                            <div id="Div1">
                                <div style="margin-left: 55px;">
                                    <table class="ex1" border="5">
                                        <tr>
                                            <td style="height: 15px;width: 120px;"></td>
                                        </tr>
                                    </table>

                                    <table class="ex1" border="5">

                                        <br>

                                        <tr>
                                            <td>PMDTLogONLevel</td>
                                            <td style="width: 100px;border-color:#ccc;box-shadow:3px 3px 5px 6p black;" id=""> </td>
                                        </tr>
                                    </table>
                                    <br>
                                    <table class="ex1" border="5">

                                        <tr>
                                            <td style="width: 30px;border-color:#ccc;" id=""></td>
                                            <td style="width: 200px;border-color:#ccc;"> Maintainance Alert </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 30px;border-color:#ccc;" id=""></td>
                                            <td style="width: 200px;border-color:#ccc;box-shadow:3px 3px 5px 6p black;"> On battery </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 30px;border-color:#ccc;" id=""></td>
                                            <td style="width: 200px;border-color:#ccc;box-shadow:3px 3px 5px 6p black;"> AC Failure</td>
                                        </tr>

                                    </table>
                                    <br>
                                    <table class="ex1" border="5">

                                        <tr>
                                            <td style="width: 30px;border-color:#ccc;" id=""></td>
                                            <td style="width: 200px;border-color:#ccc;"> Fault Analysis Running</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 30px;border-color:#ccc;" id=""></td>
                                            <td style="width: 200px;border-color:#ccc;box-shadow:3px 3px 5px 6p black;"> Local Control Failure </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 30px;border-color:#ccc;" id=""></td>
                                            <td style="width: 200px;border-color:#ccc;box-shadow:3px 3px 5px 6p black;"> Interlocked Off</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 30px;border-color:#ccc;" id=""></td>
                                            <td style="width: 200px;border-color:#ccc;box-shadow:3px 3px 5px 6p black;"> Remote Control Enabled</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 30px;border-color:#ccc;">Off</td>
                                            <td style="width: 200px;border-color:#ccc;color: thistle;"> Auxilary </td>
                                        </tr>

                                    </table>
                                </div>
                                <p style="position: absolute;top: 13%;left: 46%;font-weight: bold;">DME</p>
                                <div id="shapa" border="5">

                                    <table class="ex1" border="5">

                                        <tr>
                                            <td style="width: 30px;border-color:#ccc;" id=" "></td>
                                            <td style="width: 200px;border-color:#ccc;"> Communication Fault</td>
                                        </tr>
                                    </table>
                                    <br>
                                    <table class="ex1" border="5">
                                        <tr>
                                            <td style="width: 30px;border-color:#ccc;" id=""></td>
                                            <td style="width: 200px;border-color:#ccc;box-shadow:3px 3px 5px 6p black;"> On battery </td>
                                        </tr>
                                    </table>
                                    <br>
                                    <table class="ex1" border="5">
                                        <tr>
                                            <td style="width: 30px;border-color:#ccc;" id=""></td>
                                            <td style="width: 200px;border-color:#ccc;box-shadow:3px 3px 5px 6p black;"> AC Failure</td>
                                        </tr>

                                    </table>
                                    <br>
                                    <table class="ex1" border="5">
                                        <tr>
                                            <td style="width: 30px;border-color:#ccc;" id=""></td>
                                            <td style="width: 200px;border-color:#ccc;box-shadow:3px 3px 5px 6p black;"> Hot StandBy</td>
                                        </tr>
                                    </table>
                                    <br>
                                    <br>
                                    <table class="ex1" border="5">
                                        <tr>
                                            <td style="width: 134px;border-color:#ccc;empty-cells: hide" id=""></td>
                                            <td style="width: 40px;border-color:#ccc;box-shadow:3px 3px 5px 6p black;"> Alarm</td>
                                            <td style="width: 40px;border-color:#ccc;">Bypass</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70px;border-color:#ccc;">Main</td>
                                            <td style="width: 40px;border-color:#ccc;box-shadow:3px 3px 5px 6p black;" id=""> </td>
                                            <td style="width: 40px;border-color:#ccc;" id=""></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70px;border-color:#ccc;">StandBy</td>
                                            <td style="width: 40px;border-color:#ccc;box-shadow:3px 3px 5px 6p black;" id=""></td>
                                            <td style="width: 40px;border-color:#ccc;" id=""></td>
                                        </tr>
                                    </table>
                                    <br>
                                    <br>
                                    <table class="ex1" border="5">
                                        <tr>
                                            <td style="width: 134px;border-color:#ccc;empty-cells: hide"></td>
                                            <td style="width: 40px;border-color:#ccc;box-shadow:3px 3px 5px 6p black;"> On</td>
                                            <td style="width: 40px;border-color:#ccc;">On Antena</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70px;border-color:#ccc;">DME#1</td>
                                            <td style="width: 40px;border-color:#ccc;box-shadow:3px 3px 5px 6p black;" id=""> </td>
                                            <td style="width: 40px;border-color:#ccc;" id=""></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70px;border-color:#ccc;">DME#2</td>
                                            <td style="width: 40px;border-color:#ccc;box-shadow:3px 3px 5px 6p black;" id=""></td>
                                            <td style="width: 40px;border-color:#ccc;" id=""></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>