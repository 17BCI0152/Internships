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
                            <div id="Div1" style="height:486px">
                                <div class="main" style="height:460px;width:820px;">
                                    <div class="m_1">
                                    <table>
                                <td name="" id="date-time2" style="width:200px;height:20px;" readonly=""> </td>
                                </table>
                                        <div class="m_2">
                                            <table class="t1">
                                                <tbody>
                                                    <tr>
                                                        <td>Waveform Name</td>
                                                        <td>
                                                            <td style="width:200px">
                                                           
                                                        </td>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="m_3">
                                            <table class="t2">
                                                <tbody>
                                                    <tr>
                                                        <td>Active
                                                            <td style="width: 40px;height: 20px;">
                                                            
                                                        </td>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="main1">
                                        <div class="d1" style="
    position: absolute;
    margin-left: 0px;
    margin-top: 18px;
">
                                            <p><span>Course</span></p>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>CSB Mod Balance</td>
<td style="width:200px">
                                                            
                                                        </td>
                                                        <td>DDM</td>
                                                    </tr>
                                                    <tr>
                                                        <td>CSB Mod Percent</td>
<td style="width:200px">
                                                            
                                                        </td>
                                                        <td>% </td>
                                                    </tr>
                                                    <tr>
                                                        <td>CSB RF Level</td>
<td style="width:200px">
                                                            
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>SBO RF Level</td>
<td style="width:200px">
                                                            
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Intent Mod Level</td>
<td style="width:200px">
                                                            
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="d3">
                                            <p><span>Clerance</span></p>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>CSB Mod Balance</td>
<td style="width:200px">
                                                            
                                                        </td>
                                                        <td>DDM</td>
                                                    </tr>
                                                    <tr>
                                                        <td>CSB Mod Percent</td>
<td style="width:200px">
                                                            
                                                        </td>
                                                        <td>% </td>
                                                    </tr>
                                                    <tr>
                                                        <td>CSB RF Level</td>
<td style="width:200px">
                                                            
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>SBO RF Level</td>
<td style="width:200px">
                                                            
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Intent Mod Level</td>
<td style="width:200px">
                                                            
                                                        </td>
                                                        <td>%</td>
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