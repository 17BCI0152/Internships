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
                            <a href="rms_os.php"><button id="b1" style="background-color: blue;color: aliceblue;width: 183px;height: 30px;font-weight: bold;">Operational Summary</button></a>
                            <a href="rms_alarm.php"><button id="b2" style="background-color: blue;color: aliceblue;width: 71px;height: 30px;font-weight: bold;">Alarms</button></a>
                            <a href="rms_ma.php"><button id="b3" style="background-color: blue;color: aliceblue;width: 163px;height: 30px;font-weight: bold;">Maintenance Alerts</button></a>
                            <a href="rms_ca.php"><button id="b4" style="background-color: blue;color: aliceblue;width: 157px;height: 30px;font-weight: bold;">Command Activity</button></a>
                            <a href="rms_pc.php"><button id="b5" style="background-color: blue;color: aliceblue;width: 158px;height: 30px;font-weight: bold;">Parameter Change</button></a>
                            <div id="Div3" style="">
                                <div class="m1">
                                    <div class="rms-nav">
                                        <div class="update">
                                            <button style="width:auto;height:auto">Update</button>
                                        </div>
                                        <div class="reset">
                                            <button style="width:auto;height:auto">Reset</button>
                                        </div>
                                    </div>
                                    <div class="time-tag">
                                        <table>
                                            <tr id="heading">
                                                <th>
                                                    Time tag
                                                </th>
                                                <th>Type</th>
                                                <th>Alarm</th>
                                                <th>State</th>
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
</body>

</html>