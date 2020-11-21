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
                        <div class="inner" style="margin-left:-1%;">
                            <a href="monitor2_data_integral.php"><input id="b1" type="button" value="Integrals" style="width: 81px;height: 30px;font-weight: bold;background-color: blue;color: aliceblue;"></a>
                            <a href="monitor2_data_fieldmotor.php"><input id="b2" type="button" value="Field Monitors" style="width: 122px;height: 30px;font-weight: bold;background-color: blue;color: aliceblue;"></a>
                            <a href="monitor2_data_certifi.php"><input id="b3" type="button" value="Certification Test Results" style="width: 211px;height: 30px;font-weight: bold;background-color: blue;color: aliceblue;"></a>
                            <a href="monitor2_data_maintain.php"><input id="b4" type="button" value="Maintenance Alerts" style="width: 159px;height: 30px;font-weight: bold;background-color: blue;color: aliceblue;"></a>
                            <a href="monitor2_data_status.php"><input id="b5" type="button" value="Status" style="width: 63px;height: 30px;font-weight: bold;background-color: blue;color: aliceblue;"></a>
                            <br>
                            
                            
                            <div id="d12">
                            <table style="width:145px;height:25px ;"><tr><td id=" "></td></tr></table>
                                                &nbsp;&nbsp;

                                <table class="ex1" border="1">
                                    <tbody>
                                        <tr>
                                            <td style="width: 30px;" id="1"></td>
                                            <td colspan="4">
                                                <p style="width: max-content;">Antenna Fault</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td id="2"></td>
                                            <td colspan="4">
                                                <p>Comm Fault</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <table class="ex1" border="1" style="position: absolute; margin-left: 152px; margin-top: -76px;">
                                    <tbody>
                                        <tr>
                                            <td colspan="3" style="">
                                                <p style="width: 155px;">Course Ident Status</p>
                                            </td>
                                            <td colspan="3" id="3">
                                                
                                            </td>

                                        </tr>
                                        <tr>
                                            <td style="width: 50px;" id="4"></td>
                                            <td colspan="3" style=" width:196px;">Course Synthesizer Lock Fault Status</td>
                                        </tr>
                                        <tr>
                                            <td id="5"></td>
                                            <td colspan="5">Course Reverse Sense</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <table class="ex1" border="1" style="margin-top: -76px;margin-left: 510px;">
                                    <tbody style="width: 243px;">
                                        <tr>
                                            <td colspan="3">
                                                <p style="/* font-size: 14px; */width: 173px;">Clearance Ident Status</p>
                                            </td>
                                            <td colspan="3" id="6">
                                                
                                            </td>

                                        </tr>
                                        <tr>
                                            <td style="width: 50px;" id="7"></td>
                                            <td colspan="3" style="width: 200px;">Clearence Synthesizer Lock Fault Status</td>

                                        </tr>
                                        <tr>
                                            <td id="8"></td>
                                            <td colspan="5">Clearence Reverse Sense</td>

                                        </tr>
                                    </tbody>
                                </table>

                                <form>
                                    <fieldset style="width: max-content;">
                                        <legend>Course</legend>
                                        <table class="ex1" border="1">
                                            <tbody>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> </td>
                                                    <td style="height: 15px;">Alarm Low </td>
                                                    <td style="height: 15px;"> PreALarm Low</td>
                                                    <td style="height: 15px;">Nominal</td>
                                                    <td style="height: 15px;">PreAlarm High </td>
                                                    <td style="height: 15px;">Alarm High </td>
                                                    <td style="height: 15px;"> </td>

                                                </tr>

                                                <tr>
                                                    <td style="height: 15px;width: 160px;"> Centerline RF Level</td>
                                                    <td style="height: 15px;width: 83px;" id="9">
                                                        </td>
                                                        <td style="height: 15px;" id="10">
                                                        </td>
                                                        <td style="height: 15px;" id="11">
                                                        </td>
                                                        <td style="height: 15px;" id="12">
                                                        </td>
                                                        <td style="height: 15px;" id="13">
                                                        </td>
                                                    <td style="height: 15px;">%</td>

                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> Centerline DDM</td>
                                                    <td style="height: 15px;" id="14">
                                                         </td>
                                                         <td style="height: 15px;" id="15">
                                                         </td>
                                                         <td style="height: 15px;" id="16">
                                                         </td>
                                                         <td style="height: 15px;" id="17">
                                                         </td>
                                                         <td style="height: 15px;" id="18">
                                                         </td>
                                                    <td style="height: 15px;">DDM</td>

                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> Centerline SDM</td>
                                                    <td style="height: 15px;" id="19">
                                                         </td>
                                                         <td style="height: 15px;" id="20">
                                                         </td>
                                                         <td style="height: 15px;" id="21">
                                                         </td>
                                                         <td style="height: 15px;" id="22">
                                                         </td>
                                                         <td style="height: 15px;" id="23">
                                                         </td>
                                                    <td style="height: 15px;">%</td>

                                                </tr>

                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> Ident Mod Percent</td>
                                                    <td style="height: 15px;" id="24">
                                                         </td>
                                                         <td style="height: 15px;" id="25">
                                                         </td>
                                                         <td style="height: 15px;" id="26">
                                                         </td>
                                                         <td style="height: 15px;" id="27">
                                                         </td>
                                                         <td style="height: 15px;" id="28">
                                                         </td>
                                                    <td style="height: 15px;">%</td>

                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> Width DDM</td>
                                                    <td style="height: 15px;" id="29">
                                                         </td>
                                                         <td style="height: 15px;" id="30">
                                                         </td>
                                                         <td style="height: 15px;" id="31">
                                                         </td>
                                                         <td style="height: 15px;" id="32">
                                                         </td>
                                                         <td style="height: 15px;" id="33">
                                                         </td>
                                                    <td style="height: 15px;">DDM</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </fieldset>
                                </form>
                                <form>
                                    <fieldset style="width: max-content;">
                                        <legend>Clearance</legend>
                                        <table class="ex1" border="1">
                                            <tbody>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> </td>
                                                    <td style="height: 15px;">Alarm Low </td>
                                                    <td style="height: 15px;"> PreALarm Low</td>
                                                    <td style="height: 15px;">Nominal</td>
                                                    <td style="height: 15px;">PreAlarm High </td>
                                                    <td style="height: 15px;">Alarm High </td>
                                                    <td style="height: 15px;"> </td>

                                                </tr>

                                                <tr>
                                                    <td style="height: 15px;width: 160px;"> Centerline RF Level</td>
                                                    <td style="height: 15px;" id="34">
                                                         </td>
                                                         <td style="height: 15px;" id="35">
                                                         </td>
                                                         <td style="height: 15px;" id="36">
                                                         </td>
                                                         <td style="height: 15px;" id="37">
                                                         </td>
                                                         <td style="height: 15px;" id="38">
                                                         </td>
                                                    <td style="height: 15px;">%</td>

                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> Centerline DDM</td>
                                                    <td style="height: 15px;" id="39">
                                                         </td>
                                                         <td style="height: 15px;" id="40">
                                                         </td>
                                                         <td style="height: 15px;" id="41">
                                                         </td>
                                                         <td style="height: 15px;" id="42">
                                                         </td>
                                                         <td style="height: 15px;" id="43">
                                                         </td>
                                                    <td style="height: 15px;">DDM</td>

                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> Centerline SDM</td>
                                                    <td style="height: 15px;" id="44">
                                                         </td>
                                                         <td style="height: 15px;" id="45">
                                                         </td>
                                                         <td style="height: 15px;" id="46">
                                                         </td>
                                                         <td style="height: 15px;" id="47">
                                                         </td>
                                                         <td style="height: 15px;" id="48">
                                                         </td>
                                                    <td style="height: 15px;">%</td>

                                                </tr>

                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> Ident Mod Percent</td>
                                                    <td style="height: 15px;" id="49">
                                                         </td>
                                                         <td style="height: 15px;" id="50">
                                                         </td>
                                                         <td style="height: 15px;" id="51">
                                                         </td>
                                                         <td style="height: 15px;" id="52">
                                                         </td>
                                                         <td style="height: 15px;" id="53">
                                                         </td>
                                                    <td style="height: 15px;">%</td>

                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> Width DDM</td>
                                                    <td style="height: 15px;" id="54">
                                                         </td>
                                                         <td style="height: 15px;" id="55">
                                                         </td>
                                                         <td style="height: 15px;" id="56">
                                                         </td>
                                                         <td style="height: 15px;" id="57">
                                                         </td>
                                                         <td style="height: 15px;" id="58">
                                                         </td>

                                                    <td style="height: 15px;">DDM</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </fieldset>
                                </form>

                                <table class="ex1" border="1">
                                    <tbody>
                                        <tr>
                                            <td style="height: 15px;width: 120px;"> </td>
                                            <td style="height: 15px;">Alarm Low </td>
                                            <td style="height: 15px;"> PreALarm Low</td>
                                            <td style="height: 15px;">Nominal</td>
                                            <td style="height: 15px;">PreAlarm High </td>
                                            <td style="height: 15px;">Alarm High </td>
                                            <td style="height: 15px;"> </td>

                                        </tr>
                                        <tr>
                                            <td style="height: 15px;width: 180px;"> RF Freq Difference</td>
                                            <td style="height: 15px;" id="14">
                                                         </td>
                                                         <td style="height: 15px;" id=" ">
                                                         </td>
                                                         <td style="height: 15px;" id=" ">
                                                         </td>
                                                         <td style="height: 15px;" id=" ">
                                                         </td>
                                                         <td style="height: 15px;" id=" ">
                                                         </td>
                                            <td style="height: 15px;">HZ</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>