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
                        <div id="d2">
                                <table style="width: auto;height: -webkit-fill-available;">
                                    <tr>
                                        <td>
                                            <table style="width: 100%;height:100%;">
                                                <tr>
                                                    <th colspan="2" style="width:200px;text-align:center;">User Configuration</th>
                                                </tr>
                                                <tr>

                                                    <td>
                                                        <input type="radio"> &nbsp;&nbsp; localizer</td>
                                                    <td>
                                                        <input type="radio">&nbsp;&nbsp; Glideslope</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <select style="width: 90%;">
                                                            <option value="Capture effect"> Capture effect</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="radio">&nbsp;&nbsp; Dual Equip</td>
                                                    <td>
                                                        <input type="radio">&nbsp;&nbsp; Singel Equip</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <input type="checkbox">&nbsp;&nbsp; Hot Standby</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <input type="checkbox">&nbsp;&nbsp; NFM Present</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <input type="checkbox">&nbsp;&nbsp; FFM Present </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <input type="checkbox">&nbsp;&nbsp; Inline Phase Kit Present</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"> Frequency &nbsp;&nbsp;&nbsp;
                                                        <select style="width: 50%;"></select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <button type="button" style="width: 100%;height: auto;">DIP Switch Settings</button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td>
                                            <table style="width:100%;height: 100%;">
                                                <tr>
                                                    <th style="width: 150px;text-align:center;">RMS</th>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                </tr>
                                                <tr></tr>
                                                <tr></tr>
                                                <tr></tr>
                                                <tr></tr>
                                                <tr></tr>

                                            </table>
                                        </td>
                                        <td>
                                            <table style="width: 100%;height: 100%;">
                                                <tr>
                                                    <th colspan="4" style="width: 300px;text-align:center;">Monitors</th>
                                                </tr>
                                                <tr>
                                                    <td style="text-align:center;">&nbsp;&nbsp;Monitor 1</td>
                                                    <td style="text-align:center;">&nbsp;&nbsp;Monitor 2</td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td id=""></td>
                                                    <td id=""></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td id=""></td>
                                                    <td id=""></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td id=" "></td>
                                                    <td id=""></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td id=""></td>
                                                    <td id=""></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td id=""></td>
                                                    <td id=""></td>
                                                    
                                                </tr>
                                                <tr></tr>
                                                <tr>
                                                    <td id=""></td>
                                                    <td id=""></td>
                                                </tr>
                                                <tr></tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Station Description</td>
                                        <td colspan="2">
                                            <input type="text" style="width: 100%;height: 100%;">
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