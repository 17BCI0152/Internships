<html>
<head>
  <title>PMDT</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-hover" id="nav" style="position: sticky !important;top: 0;z-index:500;">
    <div class="container-fluid">
      <div class="navbar-header">
        <a href="system.php"> <img src="images/logo.png" height="50px" width="60px" style="margin-left: -14px;margin-top: -3px;">
        <img src="images/title.png" height="50px" width="126px" style="margin-left: -4px;margin-top: -3px;"></a>
      </div>
    <div class="collapse navbar-collapse" id="navbarHover" id="nav">  
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="system.php" name="Connect">System <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    RMS
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="rms_rdstatus.php" name="RMS Status">Status</a></li>
                    <li><a class="dropdown-item" href="rms_main.php"  name="RMS Data">Data</a></li>
                    <li><a class="dropdown-item" href="rms_os.php" name="RMS Logs">Logs</a></li>
                    <li><a class="dropdown-item" href="rms_general.php"  name="RMS Configuration">Configuration</a></li>
                    <li><a class="dropdown-item dropdown-toggle" href="#">Commands</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" name="Submenu link" onclick="select(event,this)" href="#">Submenu link</a></li>
                            <li><a class="dropdown-item" name="Submenu link" onclick="select(event,this)" href="#">Submenu link</a></li>
                        </ul>
                    </li>
                    <li><a class="dropdown-item" href="#"  name="RMS Config Restore" onclick="select(event,this)">Config Restore</a></li>
                    <li><a class="dropdown-item" href="#"  name="RMS Config Backup" onclick="select(event,this)">Config Backup</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Monitors
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="monitor_data_integral.php"  name="Monitors Data">Data</a></li>
                    <li><a class="dropdown-item" href="monitors_config_general.php" name="Monitors Configuration">Configuration</a></li>
                    <li><a class="dropdown-item dropdown-toggle" href="#" name="Monitors Commands" onclick="select(event,this)">Commands</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" name="Submenu link" onclick="select(event,this)" href="#">Submenu link</a></li>
                            <li><a class="dropdown-item" name="Submenu link" onclick="select(event,this)" href="#">Submenu link</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Monitor1
              </a>
              <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="monitor1_data_integral.php"  name="Monitor1 Data">Data</a></li>
                  <li><a class="dropdown-item" href="#" name="Monitor1 Configuration" onclick="select(event,this)">Configuration</a></li>
                  <li><a class="dropdown-item dropdown-toggle" href="#" name="Monitor1 Commands" onclick="select(event,this)">Commands</a>
                      <ul class="dropdown-menu">
                          <li><a class="dropdown-item" name="Submenu link" onclick="select(event,this)" href="#">Submenu link</a></li>
                          <li><a class="dropdown-item" name="Submenu link" onclick="select(event,this)" href="#">Submenu link</a></li>
                      </ul>
                  </li>
              </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Monitor2
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="monitor2_data_integral.php" name="Monitor2 Data">Data</a></li>
                <li><a class="dropdown-item" href="#" name="Monitor2 Configuration" onclick="select(event,this)">Configuration</a></li>
                <li><a class="dropdown-item dropdown-toggle" href="#" name="Monitor2 Commands" onclick="select(event,this)">Commands</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" name="Submenu link" onclick="select(event,this)" href="#">Submenu link</a></li>
                        <li><a class="dropdown-item" name="Submenu link" onclick="select(event,this)" href="#">Submenu link</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Monitor3
          </a>
          <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#" name="Monitor3 Data" onclick="select(event,this)">Data</a></li>
              <li><a class="dropdown-item" href="#" name="Monitor3 Configuration" onclick="select(event,this)">Configuration</a></li>
              <li><a class="dropdown-item dropdown-toggle" href="#" name="Monitor3 Commands" onclick="select(event,this)">Commands</a>
                  <ul class="dropdown-menu">
                      <li><a class="dropdown-item" name="Submenu link" onclick="select(event,this)" href="#">Submenu link</a></li>
                      <li><a class="dropdown-item" name="Submenu link" onclick="select(event,this)" href="#">Submenu link</a></li>
                  </ul>
              </li>
          </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Monitor4
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#" name="Monitor4 Data" onclick="select(event,this)">Data</a></li>
            <li><a class="dropdown-item" href="#" name="Monitor4 Configuration" onclick="select(event,this)">Configuration</a></li>
            <li><a class="dropdown-item dropdown-toggle" href="#" name="Monitor4 Commands" onclick="select(event,this)">Commands</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" name="Submenu link" onclick="select(event,this)" href="#">Submenu link</a></li>
                    <li><a class="dropdown-item" name="Submenu link" onclick="select(event,this)" href="#">Submenu link</a></li>
                </ul>
            </li>
        </ul>
    </li> -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Transmitters
      </a>
      <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="transmitter_data_Wattmeter.php" name="Transmitters Data">Data</a></li>
          <li><a class="dropdown-item" href="transmitter_config_1.php" name="Transmitters Configuration">Configuration</a></li>
          <li><a class="dropdown-item" href="transmitters_wave_wattmeter.php" name="Transmitters Waveforms">Waveforms</a></li>
          <li><a class="dropdown-item dropdown-toggle" href="#" name="Transmitters Commands" onclick="select(event,this)">Commands</a>
              <ul class="dropdown-menu">
                  <li><a class="dropdown-item" name="Submenu link" onclick="select(event,this)" href="#">Submenu link</a></li>
                  <li><a class="dropdown-item"name="Submenu link" onclick="select(event,this)"  href="#">Submenu link</a></li>
              </ul>
          </li>
      </ul>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Diagnostics</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="info.php">Info</a>
</li>
<li class="nav-item">
	<a href="admin/home.php" class="nav-link">Upload New File</a>
</li>
<li class="nav-item">
	<a href="logout.php" class="nav-link">Logout</a>
</li>
  </ul>
 </div>
</nav>
<!-- <img src="images/aero3.gif" style="
    margin-left: 75%;
    position: fixed;
    margin-top: 1%;
    z-index: 501;
"> -->
<!-- <img src="https://www.animatedimages.org/data/media/71/animated-aeroplane-image-0006.gif" border="0" alt="animated-aeroplane-image-0006" width="10%;" style="position: fixed;margin-left: 32%;margin-top: 18%;z-index: 12;"> -->
</body>
</html>