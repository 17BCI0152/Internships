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
                            <div id="t1">
                                <div class="main" style="width: 743px;height: 490px;margin-left: 6%;">
                                <table>
                                <td name="" id="date-time" style="height:20px;width:80 px">
                                </td>
                                </table>
                                    <div class="main1">
                                        <div class="d1" id="a">
                                            <p><span>Forward and reflection Power Offsets</span></p>
                                            <table>
                                                <tr>
                                                    <td>CRS CSB Forward</td>
                                                    <td style="width:40px;">
                                                        
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>CRS CSB Reflected</td>
                                                    <td style="width:40px;">
                                                        
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>CRS SBO Forward</td>
                                                    <td style="width:40px;">
                                                        
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>CRS SBO Reflected</td>
                                                    <td style="width:40px;">
                                                        
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>Standby CRS CSB Forward</td>
                                                    <td style="width:40px;">
                                                        
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>Standby CRS SBO Forward</td>
                                                    <td style="width:40px;">
                                                        
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>CLR CSB Forward</td>
                                                    <td style="width:40px;">
                                                        
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>CLR CSB Reflected</td>
                                                    <td style="width:40px;">
                                                        
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>CLR SBO Forward</td>
                                                    <td style="width:40px;">
                                                        
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>CLR SBO Reflected</td>
                                                    <td style="width:40px;">
                                                        
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>Standby CLR CSB Forward</td>
                                                    <td style="width:40px;">
                                                        
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>Standby CLR SBO Forward</td>
                                                    <td style="width:40px;">
                                                        
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>

                                            </table>
                                        </div>
                                        <div class="d2" id="b" style="margin-left:17px;">
                                            <p><span>Forward and reflection Power Scale</span></p>
                                            <table>
                                                <tr>
                                                    <td>CRS CSB Forward</td>
                                                    <td style="width:40px;">
                                                        
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>CRS CSB Reflected</td>
                                                    <td style="width:40px;">
                                                        
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>CRS SBO Forward</td>
                                                    <td style="width:40px;">
                                                        
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>CRS SBO Reflected</td>
                                                    <td style="width:40px;">
                                                        
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>Standby CRS CSB Forward</td>
                                                    <td style="width:40px;">
                                                        
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>Standby CRS SBO Forward</td>
                                                    <td style="width:40px;">
                                                        
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>CLR CSB Forward</td>
                                                    <td style="width:40px;">
                                                        
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>CLR CSB Reflected</td>
                                                    <td style="width:40px;">
                                                        
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>CLR SBO Forward</td>
                                                    <td style="width:40px;">
                                                        
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>CLR SBO Reflected</td>
                                                    <td style="width:40px;">
                                                        
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>Standby CLR CSB Forward</td>
                                                    <td style="width:40px;">
                                                        
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>Standby CLR SBO Forward</td>
                                                    <td style="width:40px;">
                                                        
                                                    </td>
                                                    <td>Watts</td>
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