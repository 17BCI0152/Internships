<html>

<head>
    <title>PMDT</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    
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
                        <a href="rms_general.php"><button id="b1" style="background-color: blue;color: aliceblue;width: 90px;height: 30px;font-weight: bold;">General</button></a>
                        <a href="rms_station.php"><button id="b2" style="background-color: blue;color: aliceblue;width: 85px;height: 30px;font-weight: bold;">Station</button></a>
                        <a href="rms_config_ad.php"><button id="b3" style="background-color: blue;color: aliceblue;width: 100px;height: 30px;font-weight: bold;">A/D data</button></a>
                        <a href="rms_security.php"><button id="b4" style="background-color: blue;color: aliceblue;width: 100px;height: 30px;font-weight: bold;">Security</button></a>
                        <div id="d3">
                                <table style="width: 376px;height: 500px;position:absolute;">
                                    <tr>
                                        <td></td>
                                        <th>Low Limit</th>
                                        <th>High Limit</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">Spare A/D 1</td>
                                        <td id="">
                                            
                                        </td>
                                        <td id="">
                                            
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">Spare A/D 2</td>
                                        <td id="">
                                            
                                        </td>
                                        <td id="">
                                            
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">Spare A/D 3</td>
                                        <td id="">
                                            
                                        </td>
                                        <td id="">
                                           
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">Spare A/D 4</td>
                                        <td id="">
                                            
                                        </td>
                                        <td id="">
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">Spare A/D 5</td>
                                        <td id="">
                                            
                                        </td>
                                        <td id="">
                                           
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">Spare A/D 6</td>
                                        <td id="">
                                            
                                        </td>
                                        <td id="">
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">Spare A/D 7</td>
                                        <td id="">
                                            
                                        </td>
                                        <td id="">
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">Spare A/D 8</td>
                                        <td id="">
                                            
                                        </td>
                                        <td id="">
                                            
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">Spare A/D 9</td>
                                        <td id="">
                                            
                                        </td>
                                        <td id="">
                                           
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">Spare A/D 10</td>
                                        <td id="">
                                            
                                        </td>
                                        <td id="">
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">AC Input Volts</td>
                                        <td id="">
                                            
                                        </td>
                                        <td id="">
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">AC Input Current</td>
                                        <td id="">
                                            
                                        </td>
                                        <td id="">
                                           
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>OB Light Current PreAlarm</td>
                                        <td id="">
                                            
                                        </td>
                                        <td id="">
                                            
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">OB Light Current </td>
                                        <td id="">
                                            
                                        </td>
                                        <td id="">
                                            
                                        </td>
                                    </tr>
                                </table>
                                <table style="width: 376px;height: 500px;position:relative;margin-left:400px;">
                                    <tr>
                                        <td></td>
                                        <th>Low Limit</th>
                                        <th>High Limit</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">Tx 1-24 V PS Volts</td>
                                        <td id="">
                                            
                                        </td>
                                        <td id="">
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">Tx 1-24 V PS Current</td>
                                        <td id="">
                                            
                                        </td>
                                        <td id="">
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">Tx 2-24 V PS Volts</td>
                                        <td id="">
                                            
                                        </td>
                                        <td id="">
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">Tx 2-24 V PS Current</td>
                                        <td id="">
                                           
                                        </td>
                                        <td id="">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">Battery 1 Volt</td>
                                        <td id="">
                                           
                                        </td>
                                        <td id="">
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">Barrtery 1 Current</td>
                                        <td id="">
                                            
                                        </td>
                                        <td id="">
                                           
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">Battery 2 Volt</td>
                                        <td id="">
                                            
                                        </td>
                                        <td id="">
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">Barrtery 2 Current</td>
                                        <td id="">
                                            
                                        </td>
                                        <td id="">
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">Inside Temperature 'C</td>
                                        <td id="">
                                           
                                        </td>
                                        <td id="">
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">Outside Temperature 'C</td>
                                        <td id="">
                                            
                                        </td>
                                        <td id="">
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">DME #1 28 V PS Volts</td>
                                        <td id="">
                                            
                                        </td>
                                        <td id="">
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">DME #2 28 V PS Volts</td>
                                        <td id="">
                                           
                                        </td>
                                        <td id="">
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">+5 VDC</td>
                                        <td id="">
                                            
                                        </td>
                                        <td id="">
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">+12 VDC</td>
                                        <td id="">
                                            
                                        </td>
                                        <td id="">
                                            
                                        </td>
                                    </tr>
                                    <tr>

                                        <td >
                                            <input type="checkbox">-12 VDC</td>
                                        <td id="">
                                           
                                        </td>
                                        <td id="">
                                           
                                        </td>
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