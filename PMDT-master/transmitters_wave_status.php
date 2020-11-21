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
                        <div class="inner" style="margin-left: 2%;">
                            <a href="transmitters_wave_wattmeter.php"><button id="b1" style="background-color: blue;color: aliceblue;width: 140px;height: 30px;font-weight: bold;">Wattmeter Data</button></a>
                            <a href="transmitters_wave_1.php"><button id="b2" style="background-color: blue;color: aliceblue;width: 125px;height: 30px;font-weight: bold;">Waveform #1</button></a>
                            <a href="transmitters_wave_2.php"><button id="b3" style="background-color: blue;color: aliceblue;width: 125px;height: 30px;font-weight: bold;">Waveform #2</button></a>
                            <a href="transmitters_wave_3.php"><button id="b4" style="background-color: blue;color: aliceblue;width: 125px;height: 30px;font-weight: bold;">Waveform #3</button></a>
                            <a href="transmitters_wave_4.php"><button id="b5" style="background-color: blue;color: aliceblue;width: 125px;height: 30px;font-weight: bold;">Waveform #4</button></a>
                            <a href="transmitters_wave_5.php"><button id="b6" style="background-color: blue;color: aliceblue;width: 125px;height: 30px;font-weight: bold;">Waveform #5</button></a>
                            <a href="transmitters_wave_6.php"><button id="b7" style="background-color: blue;color: aliceblue;width: 125px;height: 30px;font-weight: bold;">Waveform #6</button></a>
                            <a href="transmitters_wave_7.php"><button id="b8" style="background-color: blue;color: aliceblue;width: 125px;height: 30px;font-weight: bold;">Waveform #7</button></a>
                            <a href="transmitters_wave_8.php"><button id="b9" style="background-color: blue;color: aliceblue;width: 125px;height: 30px;font-weight: bold;">Waveform #8</button></a>
                            <a href="transmitters_wave_integral.php"><button id="b10" style="background-color: blue;color: aliceblue;width: 186px;height: 30px;font-weight: bold;">Integral Monitor Data</button></a>
                            <a href="transmitters_wave_status.php"><button id="b11" style="background-color: blue;color: aliceblue;width: 178px;height: 30px;font-weight: bold;">Status Monitor Data</button></a>
                            <div id="t5">
                                <div class="main" style="height:717px;margin-left:6%;">
                                    <table class="th">
                                        <tbody>
                                            <tr>
                                                <td style="width:200px;height:25px;">
                                                    
                                                </td>
                                                <td style="width:200px;height:25px;">
                                                    
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="main1">
                                        <p style="margin: 10px 0 20px;">Course</p>
                                        <table class="t3">
                                            <tbody>
                                                <tr>
                                                </tr>
                                                <tr class="th">
                                                    <td></td>
                                                    <td>Monitor 1</td>
                                                    <td>Monitor 2</td>
                                                </tr>

                                                <tr>
                                                    <td>Centerline RF Level</td>
                                                    <td id="m1" style="width:200px">
                                                        
                                                    </td>
                                                    <td id="m1" style="width:200px">
                                                        
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>Centerline DDM</td>
                                                    <td id="m1" style="width:200px">
                                                        
                                                    </td>
                                                    <td id="m1" style="width:200px">
                                                        
                                                    </td>
                                                    <td>DDM</td>
                                                </tr>
                                                <tr>
                                                    <td>Centerline SDM</td>
                                                    <td id="m1" style="width:200px">
                                                        
                                                    </td>
                                                    <td id="m1" style="width:200px">
                                                        
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>Ident Mod Percent</td>
                                                    <td id="m1" style="width:200px">
                                                        
                                                    </td>
                                                    <td id="m1" style="width:200px">
                                                        
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>Width DDM</td>
                                                    <td id="m1" style="width:200px">
                                                        
                                                    </td>
                                                    <td id="m1" style="width:200px">
                                                        
                                                    </td>
                                                    <td>DDM</td>
                                                </tr>
                                                <tr>
                                                    <td>Ident Status</td>
                                                    <td id="m1-is" style="width:200px">
                                                        
                                                    </td>
                                                    <td id="m1-is" style="width:200px">
                                                        
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Synth Lock/Rev Sense</td>
                                                    <td id="m1-sl">
                                                    <table>
                                                        <td style="width: 40px;height: 20px;"></td>
                                                        <td style="width: 40px;height: 20px;"></td>
                                                        </table>
                                                    </td>
                                                    <td id="m1-sl">
                                                    <table>
                                                        <td style="width: 40px;height: 20px;"></td>
                                                        <td style="width: 40px;height: 20px;"></td>
                                                        </table>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <br>
                                        <p style="margin-top: 291px;margin-left: 0px;position: absolute;">Clearance</p>
                                        <table class="t4">
                                            <tbody>
                                                <tr>
                                                </tr>
                                                <tr class="th">
                                                    <td></td>
                                                    <td>Monitor 1</td>
                                                    <td>Monitor 2</td>
                                                </tr>

                                                <tr>
                                                    <td>Centerline RF Level</td>
                                                    <td id="m1" style="width:200px">
                                                        
                                                    </td>
                                                    <td id="m1" style="width:200px">
                                                        
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>Centerline DDM</td>
                                                    <td id="m1" style="width:200px">
                                                        
                                                    </td>
                                                    <td id="m1" style="width:200px">
                                                        
                                                    </td>
                                                    <td>DDM</td>
                                                </tr>
                                                <tr>
                                                    <td>Centerline SDM</td>
                                                    <td id="m1" style="width:200px">
                                                        
                                                    </td>
                                                    <td id="m1" style="width:200px">
                                                        
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>Ident Mod Percent</td>
                                                    <td id="m1" style="width:200px">
                                                        
                                                    </td>
                                                    <td id="m1" style="width:200px">
                                                        
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>Width DDM</td>
                                                    <td id="m1" style="width:200px">
                                                        
                                                    </td>
                                                    <td id="m1" style="width:200px">
                                                        
                                                    </td>
                                                    <td>DDM</td>
                                                </tr>
                                                <tr>
                                                    <td>Ident Status</td>
                                                    <td id="m1-is" style="width:200px">
                                                        
                                                    </td>
                                                    <td id="m1-is" style="width:200px">
                                                        
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Synth Lock/Rev Sense</td>
                                                    <td id="m1-sl">
                                                    <table>
                                                        <td style="width: 40px;height: 20px;"></td>
                                                        <td style="width: 40px;height: 20px;"></td>
                                                        </table>
                                                    </td>
                                                    <td id="m1-sl">
                                                    <table>
                                                        <td style="width: 40px;height: 20px;"></td>
                                                        <td style="width: 40px;height: 20px;"></td>
                                                        </table>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <br>
                                        <table class="t5">
                                            <tbody>
                                                <tr>
                                                    <td>RF Freq Difference</td>
                                                    <td id="m1" style="width:200px">
                                                        
                                                    </td>
                                                    <td id="m1" style="width:200px">
                                                        
                                                    </td>
                                                    <td>Hz</td>
                                                </tr>
                                                <tr>
                                                    <td>Synth Lock/Rev Sense</td>
                                                    <td id="m1-sl" style="width:200px">
                                                        
                                                    </td>
                                                    <td id="m1-sl" style="width:200px">
                                                        
                                                    </td>
                                                    <td></td>
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