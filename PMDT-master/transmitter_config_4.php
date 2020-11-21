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
                            <a href="transmitter_config_1.php"><button id="b1" style="background-color: blue;color: aliceblue;width: 120px;height: 30px;font-weight: bold;">Wattmeter</button></a>
                            <a href="transmitter_config_2.php"><button id="b2" style="background-color: blue;color: aliceblue;width: 127px;height: 30px;font-weight: bold;">Transmitter 1</button></a>
                            <a href="transmitter_config_3.php"><button id="b3" style="background-color: blue;color: aliceblue;width: 127px;height: 30px;font-weight: bold;">Transmitter 2</button></a>
                            <a href="transmitter_config_4.php"><button id="b4" style="background-color: blue;color: aliceblue;width: 186px;height: 30px;font-weight: bold;">Integral Monitor Data</button></a>
                            <div id="t4">
                                <div class="main" style="height:715px;margin-left: 6%;">
                                    <table class="th">
                                        <tbody>
                                            <tr>
                                                <td style="width:120px;height:20px;">
                                                    
                                                </td>
                                                <td style="width:120px;height:20px;">
                                                    
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
                                                    <td id="m1">
                                                        
                                                    </td>
                                                    <td id="m1">
                                                        
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>Centerline DDM</td>
                                                    <td id="m1">
                                                        
                                                    </td>
                                                    <td id="m1">
                                                        
                                                    </td>
                                                    <td>DDM</td>
                                                </tr>
                                                <tr>
                                                    <td>Centerline SDM</td>
                                                    <td id="m1">
                                                        
                                                    </td>
                                                    <td id="m1">
                                                        
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>Ident Mod Percent</td>
                                                    <td id="m1">
                                                        
                                                    </td>
                                                    <td id="m1">
                                                        
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>Width DDM</td>
                                                    <td id="m1">
                                                        
                                                    </td>
                                                    <td id="m1">
                                                        
                                                    </td>
                                                    <td>DDM</td>
                                                </tr>
                                                <tr>
                                                    <td>Ident Status</td>
                                                    <td id="m1-is">
                                                        
                                                    </td>
                                                    <td id="m1-is">
                                                        
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Synth Lock/Rev Sense</td>
                                                    <td id="m1-sl">
                                                        
                                                        
                                                    </td>
                                                    <td id="m1-sl">
                                                        
                                                        
                                                    </td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <br>
                                        <p style="    margin-top: 291px;
    margin-left: 0px;
    position: absolute;">Clearance</p>
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
                                                    <td id="m1">
                                                        
                                                    </td>
                                                    <td id="m1">
                                                        
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>Centerline DDM</td>
                                                    <td id="m1">
                                                        
                                                    </td>
                                                    <td id="m1">
                                                        
                                                    </td>
                                                    <td>DDM</td>
                                                </tr>
                                                <tr>
                                                    <td>Centerline SDM</td>
                                                    <td id="m1">
                                                        
                                                    </td>
                                                    <td id="m1">
                                                        
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>Ident Mod Percent</td>
                                                    <td id="m1">
                                                        
                                                    </td>
                                                    <td id="m1">
                                                        
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>Width DDM</td>
                                                    <td id="m1">
                                                        
                                                    </td>
                                                    <td id="m1">
                                                        
                                                    </td>
                                                    <td>DDM</td>
                                                </tr>
                                                <tr>
                                                    <td>Ident Status</td>
                                                    <td id="m1-is">
                                                        
                                                    </td>
                                                    <td id="m1-is">
                                                        
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Synth Lock/Rev Sense</td>
                                                    <td id="m1-sl">
                                                        
                                                        
                                                    </td>
                                                    <td id="m1-sl">
                                                        
                                                        
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
                                                    <td id="m1">
                                                        
                                                    </td>
                                                    <td id="m1">
                                                        
                                                    </td>
                                                    <td>Hz</td>
                                                </tr>
                                                <tr>
                                                    <td>Synth Lock/Rev Sense</td>
                                                    <td id="m1-sl">
                                                        
                                                    </td>
                                                    <td id="m1-sl">
                                                        
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
</body>

</html>