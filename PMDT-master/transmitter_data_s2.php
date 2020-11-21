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
                            <a href="transmitter_data_Wattmeter.php"><button id="b1" style="background-color: blue;color: aliceblue;width: 150px;height: 30px;font-weight: bold;">Wattmeter Data</button></a>
                            <a href="transmitter_data_s1.php"><button id="b2" style="background-color: blue;color: aliceblue;width: 309px;height: 30px;font-weight: bold;">Transmitter 1 Synthesizer and PA Data</button></a>
                            <a href="transmitter_data_s2.php"> <button id="b3" style="background-color: blue;color: aliceblue;width: 309px;height: 30px;font-weight: bold;">Transmitter 2 Synthesizer and PA Data</button></a>
                            <div id="t3" style="">
                                
                            <div class="main" style="height:485px">
                            <div class="cc">
                                        Course
                                        <table>
                                        <td style="width:120px;height:20px;">
                                        </td>
                                        </table>
                                        
                                        
                                         Clearance
                                        <table>
                                        <td style="width:120px;height:20px;">
                                        </td>
                                        </table>
                                    </div>
                                    <div class="main1">
                                        <div class="d1" style="margin-top:17px;">
                                            <p><span>Synthesizer</span></p>
                                            <table>
                                                <tr class="th">
                                                    <td></td>
                                                    <td>CRS</td>
                                                    <td>CLR</td>
                                                </tr>
                                                <tr>
                                                    <td>CSB RF Level</td>
                                                    <td id="crs">
                                                        
                                                    </td>
                                                    <td id="clr">
                                                        
                                                    </td>
                                                    <td>FFT Power</td>
                                                </tr>
                                                <tr>
                                                    <td>CSB Mod Balance</td>
                                                    <td id="crs">
                                                        
                                                    </td>
                                                    <td id="clr">
                                                        
                                                    </td>
                                                    <td>DDM</td>
                                                </tr>
                                                <tr>
                                                    <td>CSB Mod Percent</td>
                                                    <td id="crs">
                                                        
                                                    </td>
                                                    <td id="clr">
                                                        
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>CSB 90Hz DM</td>
                                                    <td id="crs">
                                                        
                                                    </td>
                                                    <td id="clr">
                                                        
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>CSB 150Hz DM</td>
                                                    <td id="crs">
                                                        
                                                    </td>
                                                    <td id="clr">
                                                        
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>CSB 1020Hz DM</td>
                                                    <td id="crs">
                                                        
                                                    </td>
                                                    <td id="clr">
                                                        
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>SBO RF Level</td>
                                                    <td id="crs">
                                                        
                                                    </td>
                                                    <td id="clr">
                                                        
                                                    </td>
                                                    <td>FFT Power</td>
                                                </tr>
                                                <tr>
                                                    <td>SBO Phase Control</td>
                                                    <td id="crs">
                                                        
                                                    </td>
                                                    <td id="clr">
                                                        
                                                    </td>
                                                    <td>mVolts DC</td>
                                                </tr>
                                                <tr>
                                                    <td>Detected RF</td>
                                                    <td id="crs">
                                                        
                                                    </td>
                                                    <td id="clr">
                                                        
                                                    </td>
                                                    <td>mVolts DC</td>
                                                </tr>
                                                <tr>
                                                    <td>Biphase Activity</td>
                                                    <td id="crs" style="width:30px">
                                                        
                                                    </td>
                                                    <td id="clr" style="width:30px">
                                                        
                                                    </td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="d2" style="position: absolute;margin-left:386px;margin-top: 18px;">
                                            <p><span>Power Amplifier</span></p>
                                            <table>
                                                <tr class="th">
                                                    <td></td>
                                                    <td>CRS</td>
                                                    <td>CLR</td>
                                                </tr>
                                                <tr>
                                                    <td>CSB RF Level</td>
                                                    <td id="crs">
                                                        
                                                    </td>
                                                    <td id="clr">
                                                        
                                                    </td>
                                                    <td>FFT Power</td>
                                                </tr>
                                                <tr>
                                                    <td>CSB Mod Balance</td>
                                                    <td id="crs">
                                                        
                                                    </td>
                                                    <td id="clr">
                                                        
                                                    </td>
                                                    <td>DDM</td>
                                                </tr>
                                                <tr>
                                                    <td>CSB Mod Percent</td>
                                                    <td id="crs">
                                                        
                                                    </td>
                                                    <td id="clr">
                                                        
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>CSB 90Hz DM</td>
                                                    <td id="crs">
                                                        
                                                    </td>
                                                    <td id="clr">
                                                        
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>CSB 150Hz DM</td>
                                                    <td id="crs">
                                                        
                                                    </td>
                                                    <td id="clr">
                                                        
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>CSB 1020Hz DM</td>
                                                    <td id="crs">
                                                        
                                                    </td>
                                                    <td id="clr">
                                                        
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>SBO RF Level</td>
                                                    <td id="crs">
                                                        
                                                    </td>
                                                    <td id="clr">
                                                        
                                                    </td>
                                                    <td>FFT Power</td>
                                                </tr>
                                            </table>
                                            <br>
                                            <p><span>Total Harmonic Distortion</span></p>
                                            <table class="thd">
                                                <tr class="th">
                                                    <td></td>
                                                    <td>CRS</td>
                                                    <td>CLR</td>
                                                </tr>
                                                <tr>
                                                    <td>PA CSB &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
                                                    <td id="crs">
                                                        
                                                    </td>
                                                    <td id="clr">
                                                        
                                                    </td>
                                                    <td>dB &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>PA SBO</td>
                                                    <td id="crs">
                                                        
                                                    </td>
                                                    <td id="clr">
                                                        
                                                    </td>
                                                    <td>dB</td>
                                                </tr>
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