<?php 
	include('../functions.php');

	if (!isAdmin()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: ../login.php');
	}

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../style1.css">
	<style>
	.header {
		background: #003366;
	}
	button[name=register_btn] {
		background: #003366;
	}
	</style>
</head>
<body>
    <?php 
    function rms_data($data,$i){
        include("config.php");
        $i+=1;
        if(strpos($data[$i],'A/D Data')!==false){
            $i+=2;
            $date=$data[$i];
            $date=preg_replace('!\s+!', ' ', $date);
            $dt=explode(" ",$date);
            // echo "<br>".$dt[0];
            // echo "<br>".$dt[1];
            $i+=1;
            $k=0;
            $table_contents=array('Spare A/D 1','Spare A/D 2','Spare A/D 3','Spare A/D 4','Spare A/D 5','Spare A/D 6','Spare A/D 7','Spare A/D 8','Spare A/D 9','Spare A/D 10');
            $table_contents2=array('+5 VDC Monitor 1','+12 VDC Monitor 1','-12 VDC Monitor 1','+24 VDC Monitor 1','+5 VDC Monitor 2','+12 VDC Monitor 2','-12 VDC Monitor 2','+24 VDC Monitor 2');
            if(strpos($data[$i],$table_contents[0])!==false){
                for($j=$i;$j<=$i+9;$j=$j+1)
                {
                    $type="1";
                    $data[$j]=preg_replace('!\s+!', ' ', $data[$j]);
                    $div=str_replace($table_contents[$k],"",$data[$j]);
                    // echo "<br>".$data[$j]."-->".strlen($data[$j])."<br>";
                    $pieces = explode(" ", $div);
                    if($k<2){
                        // echo "<br>".$pieces[2];
                        $sql="INSERT INTO rmsd(main,type,name,data,data2,dt1) VALUES ('A/D Data','1','$table_contents[$k]','$pieces[2]','','$dt[0].' '.$dt[1]')";
                        if ($conn->query($sql) == True) {
                            echo "<br>Successfully Uploaded!!!<br>";
                        }
                    }
                    else{
                        // echo "<br>".$pieces[2];
                        $sql="INSERT INTO rmsd(main,type,name,data,data2,dt1) VALUES ('A/D Data','1','$table_contents[$k]','$pieces[2]','','$dt[0].' '.$dt[1]')";
                        if ($conn->query($sql) == True) {
                            echo "<br>Successfully Uploaded!!!<br>";
                        }
                        $div=str_replace($table_contents2[$k-2],"",$data[$j]);
                        $pieces = explode(" ", $div);
                        // echo "<br>".$pieces[8];
                        $kk=$k-2;
                        $sql="INSERT INTO rmsd(main,type,name,data,data2,dt1) VALUES ('A/D Data','2','$table_contents2[$kk]','$pieces[8]','','$dt[0].' '.$dt[1]')";
                        if ($conn->query($sql) == True) {
                            echo "<br>Successfully Uploaded!!!<br>";
                        }
                    }
                    
                    $k=$k+1;
                }
                $i+=11;
                if(strpos($data[$i],'Inside Temp')!==false){
                    $j=$i;
                    $data[$j]=preg_replace('!\s+!', ' ', $data[$j]);
                    $div=str_replace('Inside Temp',"",$data[$j]);
                    $div=str_replace('Outside Temp',"",$data[$j]);
                    // echo "<br>".$data[$j]."-->".strlen($data[$j])."<br>";
                    $pieces = explode(" ", $div);
                    // echo "<br>".$pieces[3];
                    // echo "<br>".$pieces[6];
                    $sql="INSERT INTO rmsd(main,type,name,data,data2,dt1) VALUES ('A/D Data','3','Inside Temp','$pieces[3]','','$dt[0].' '.$dt[1]')";
                    if ($conn->query($sql) == True) {
                        echo "<br>Successfully Uploaded!!!<br>";
                    }
                    $sql="INSERT INTO rmsd(main,type,name,data,data2,dt1) VALUES ('A/D Data','4','Outside Temp','$pieces[6]','','$dt[0].' '.$dt[1]')";
                    if ($conn->query($sql) == True) {
                        echo "<br>Successfully Uploaded!!!<br>";
                    }
                }
                $i+=2;
                $k=0;
                if(strpos($data[$i],'AC Input')!==false){
                    // echo $data[$i];
                    $table_contents=array('AC Input','OB Light','Tx 1 - 24 V PS','Tx 2 - 24 V PS','Battery 1','Battery 2');
                    for($j=$i;$j<=$i+5;$j=$j+1)
                    {
                        $type="5";
                        $data[$j]=preg_replace('!\s+!', ' ', $data[$j]);
                        $div=str_replace($table_contents[$k],"",$data[$j]);
                        // echo "<br>".$data[$j]."-->".strlen($data[$j])."<br>";
                        $pieces = explode(" ", $div);
                        if($k==1){
                            // echo "<br>".$pieces[1];    
                            // echo "<br>".$pieces[3];    
                            $sql="INSERT INTO rmsd(main,type,name,data,data2,dt1) VALUES ('A/D Data','5','$table_contents[$k]','$pieces[1]','$pieces[3]','$dt[0].' '.$dt[1]')";
                            if ($conn->query($sql) == True) {
                                echo "<br>Successfully Uploaded!!!<br>";
                            }
                        }
                        else{
                            // echo "<br>".$pieces[2];
                            // echo "<br>".$pieces[5];
                            $sql="INSERT INTO rmsd(main,type,name,data,data2,dt1) VALUES ('A/D Data','5','$table_contents[$k]','$pieces[2]','$pieces[5]','$dt[0].' '.$dt[1]')";
                            if ($conn->query($sql) == True) {
                                echo "<br>Successfully Uploaded!!!<br>";
                            }
                        }
                        $k+=1;
                    }
                }

        
    
            }
        }
    }

    function monitor_data_field($data,$i,$main){
        include('config.php');
        $i=$i+2;
        $table_contents=array("RF Level","DDM","SDM","Comm Fault");
        if(strpos($data[$i],"Near Field Monitor Course Position")!==false){
            $i=$i+1;
            $date=$data[$i];
            $date=preg_replace('!\s+!', ' ', $date);
            $dt=explode(" ",$date);
            // echo "<br>".$dt[1];
            // echo "<br>".$dt[2];
            // echo "<br>".$dt[3];
            // echo "<br>".$dt[4];
            $i=$i+2;
            $k=0;
            for($j=$i;$j<=$i+3;$j=$j+1)
            {
                $data[$j]=preg_replace('!\s+!', ' ', $data[$j]);
                $div=str_replace($table_contents[$k],"",$data[$j]);
                // echo "<br>".$data[$j]."-->".strlen($data[$j])."<br>";
                $pieces = explode(" ", $div);
                // echo "<br>".$pieces[2];
                // echo "<br>".$pieces[3];
                // echo "<br>".$pieces[4];
                $sql="INSERT INTO monitord(main,dt1,dt2,type,name,m1,m2,unit) VALUES ('Field Monitors','$dt[1].' '.$dt[2]','$dt[3].' '.$dt[4]','Near Field Monitor Course Position','$table_contents[$k]','$pieces[2]','$pieces[3]','$pieces[4]')";
                if ($conn->query($sql) == True) {
                    echo "<br> Successfully Uploaded!!!<br>";
                }
                $k=$k+1;
            }
        }
    }
    function monitor_data($data,$i,$main){
        include('config.php');
        $i=$i+2;
        $date=$data[$i];
        $date=preg_replace('!\s+!', ' ', $date);
        $dt=explode(" ",$date);
        // echo "<br>".$dt[1];
        // echo "<br>".$dt[2];
        // echo "<br>".$dt[3];
        // echo "<br>".$dt[4];
        $i=$i+2;
        $k=0;
        $table_contents=array("Centerline RF Level","Centerline DDM","Centerline SDM","Ident Mod Percent","Width DDM","Ident Status","Synth Lock / Rev Sense");
        if(strpos($data[$i],"Course")!==false)
        {
            $i=$i+1;
            for($j=$i;$j<=$i+6;$j=$j+1)
            {
                $type="Course";
                $data[$j]=preg_replace('!\s+!', ' ', $data[$j]);
                $div=str_replace($table_contents[$k],"",$data[$j]);
                // echo "<br>".$data[$j]."-->".strlen($data[$j])."<br>";
                $pieces = explode(" ", $div);
                // echo "<br>".$pieces[2];
                // echo "<br>".$pieces[3];
                // echo "<br>".$pieces[4];
                $sql="INSERT INTO monitord(main,dt1,dt2,type,name,m1,m2,unit) VALUES ('$main','$dt[1].' '.$dt[2]','$dt[3].' '.$dt[4]','$type','$table_contents[$k]','$pieces[2]','$pieces[3]','$pieces[4]')";
                if ($conn->query($sql) == True) {
                    echo "<br>Successfully Uploaded!!!<br>";
                }
                $k=$k+1;
            }
            $i=$i+8;
        }
        $k=0;
        if(strpos($data[$i],"Clearance")!==false)
        {
            $i=$i+1;
            for($j=$i;$j<=$i+6;$j=$j+1)
            {
                $data[$j]=preg_replace('!\s+!', ' ', $data[$j]);
                $div=str_replace($table_contents[$k],"",$data[$j]);
                // echo "<br>".$data[$j]."-->".strlen($data[$j])."<br>";
                $pieces = explode(" ", $div);
                // echo "<br>".$pieces[2];
                // echo "<br>".$pieces[3];
                // echo "<br>".$pieces[4];
                $sql="INSERT INTO monitord(main,dt1,dt2,type,name,m1,m2,unit) VALUES ('$main','$dt[1].' '.$dt[2]','$dt[3].' '.$dt[4]','clearance','$table_contents[$k]','$pieces[2]','$pieces[3]','$pieces[4]')";
                if ($conn->query($sql) == FALSE) {
                    echo "<br>Successfully Uploaded!!!<br>";
                }
                $k=$k+1;
            }
            $i=$i+8;
        }
        if(strpos($data[$i],"RF Freq Difference")!==false){
            $table_contents2=array("RF Freq Difference","Antenna Fault");
            $k=0;
            for($j=$i;$j<=$i+1;$j=$j+1)
            {
                $data[$j]=preg_replace('!\s+!', ' ', $data[$j]);
                $div=str_replace($table_contents2[$k],"",$data[$j]);
                // echo "<br>".$data[$j]."-->".strlen($data[$j])."<br>";
                $pieces = explode(" ", $div);
                // echo "<br>".$pieces[0];
                // echo "<br>".$pieces[1];
                // echo "<br>".$pieces[2];
                $sql="INSERT INTO monitord(main,dt1,dt2,type,name,m1,m2,unit) VALUES ('$main','$dt[1].' '.$dt[2]','$dt[3].' '.$dt[4]','','$table_contents2[$k]','$pieces[1]','$pieces[2]','$pieces[3]')";
                if ($conn->query($sql) == FALSE) {
                    echo "<br>Successfully Uploaded!!!<br>";
                }
                $k=$k+1;
            }
            $i=$i+3;
        }
    }

    function transmitter_data($data,$i){
        include("config.php");
        echo $i;
        $i+=1;
        if(strpos($data[$i],'Wattmeter Data')!==False){
            $i+=2;
                $date=$data[$i];
                $date=preg_replace('!\s+!', ' ', $date);
                $dt=explode(" ",$date);
                // echo "<br>".$dt[0];
                // echo "<br>".$dt[1];
                $i+=1;
                $type=array('Course Transmitter Parameters','Clearance Transmitter Parameters','Standby Course Transmitter Parameters','Standby Clearance Transmitter Parameters');
                $table_contents=array('CSB Forward Power','CSB Reflected Power','SBO Forward Power','SBO Reflected Power');
                if(strpos($data[$i],'Course Transmitter Parameters')!==False){
                    $i+=1;
                    $k=0;
                    for($j=$i;$j<=$i+3;$j=$j+1)
                    {
                        $data[$j]=preg_replace('!\s+!', ' ', $data[$j]);
                        $div=str_replace($table_contents[$k],"",$data[$j]);
                        // echo "<br>".$data[$j]."-->".strlen($data[$j])."<br>";
                        $pieces = explode(" ", $div);
                        // echo "<br>".$pieces[2];
                        // echo "<br>".$pieces[3];
                        // echo "<br>".$pieces[5];
                        // echo "<br>".$pieces[6];
                        $sql1="INSERT INTO transmitterd(main,type,name,data,unit,dt1) VALUES ('Wattmeter Data','$type[0]','$table_contents[$k]','$pieces[2]','Watts','$dt[0].' '.$dt[1]')";
                        $sql2="INSERT INTO transmitterd(main,type,name,data,unit,dt1) VALUES ('Wattmeter Data','$type[1]','$table_contents[$k]','$pieces[5]','Watts','$dt[0].' '.$dt[1]')";
                        if ($conn->query($sql1) == True) {
                            echo "<br>Successful file Upload!!!<br>";
                        }
                        if ($conn->query($sql2) == True) {
                            echo "<br>Successful file Upload!!!<br>";
                        }
                        $k=$k+1;
                    }
                }
                $i+=5;
                if(strpos($data[$i],'Standby Course Transmitter Parameters')!==False){
                    $i+=1;
                    $k=0;
                    $table_contents=array('CSB Forward Power','SBO Forward Power');
                    for($j=$i;$j<=$i+1;$j=$j+1)
                    {
                        $data[$j]=preg_replace('!\s+!', ' ', $data[$j]);
                        $div=str_replace($table_contents[$k],"",$data[$j]);
                        // echo "<br>".$data[$j]."-->".strlen($data[$j])."<br>";
                        $pieces = explode(" ", $div);
                        // echo "<br>".$pieces[2];
                        // echo "<br>".$pieces[3];
                        // echo "<br>".$pieces[5];
                        // echo "<br>".$pieces[6];
                        $sql1="INSERT INTO transmitterd(main,type,name,data,unit,dt1) VALUES ('Wattmeter Data','$type[2]','$table_contents[$k]','$pieces[2]','Watts','$dt[0].' '.$dt[1]')";
                        $sql2="INSERT INTO transmitterd(main,type,name,data,unit,dt1) VALUES ('Wattmeter Data','$type[3]','$table_contents[$k]','$pieces[5]','Watts','$dt[0].' '.$dt[1]')";
                        if ($conn->query($sql1) == True) {
                            echo "<br>Successful file Upload!!!<br>";
                        }
                        if ($conn->query($sql2) == True) {
                            echo "<br>Successful file Upload!!!<br>";
                        }
                        $k=$k+1;
                    }
                }
        }
    }
    function monitor1_data($data,$i){
        include("config.php");
            $i+=1;
            if(strpos($data[$i],"Integral")!==false){
                $i+=2;
                $date=$data[$i];
                $date=preg_replace('!\s+!', ' ', $date);
                $dt=explode(" ",$date);
                // echo "<br>".$dt[0];
                // echo "<br>".$dt[1];
                $i+=5;
                $k=0;
                $table_contents=array("Centerline RF Level","Centerline DDM","Centerline SDM","Ident Mod Percent","Width DDM");
                if(strpos($data[$i],"Course")!==false)
                {
                    $i=$i+1;
                    for($j=$i;$j<=$i+4;$j=$j+1)
                    {
                        $type="Course";
                        $data[$j]=preg_replace('!\s+!', ' ', $data[$j]);
                        $div=str_replace($table_contents[$k],"",$data[$j]);
                        // echo "<br>".$data[$j]."-->".strlen($data[$j])."<br>";
                        $pieces = explode(" ", $div);
                        // echo "<br>".$pieces[2];
                        // echo "<br>".$pieces[3];
                        // echo "<br>".$pieces[4];
                        // echo "<br>".$pieces[5];
                        // echo "<br>".$pieces[6];
                        // echo "<br>".$pieces[7];
                        $sql1="INSERT INTO monitor1(main,type,name,`1`,`2`,`3`,`4`,`5`,dt1) VALUES ('Integral','$type','$table_contents[$k]','$pieces[2]','$pieces[3]','$pieces[4]','$pieces[5]','$pieces[6]','$dt[0].' '.$dt[1]')";
                        if ($conn->query($sql1) == True) {
                            echo "<br>Successfully Uploaded!!!<br>";
                        }
                        $k=$k+1;
                    }
                }
                $i+=6;
                $k=0;
                // echo '<br>'.$i.'-->'.$data[$i];
                if(strpos($data[$i],"Clearance")!==false)
                {
                    $i=$i+1;
                    for($j=$i;$j<=$i+4;$j=$j+1)
                    {
                        $type="Clearance";
                        $data[$j]=preg_replace('!\s+!', ' ', $data[$j]);
                        $div=str_replace($table_contents[$k],"",$data[$j]);
                        // echo "<br>".$data[$j]."-->".strlen($data[$j])."<br>";
                        $pieces = explode(" ", $div);
                        // echo "<br>".$pieces[2];
                        // echo "<br>".$pieces[3];
                        // echo "<br>".$pieces[4];
                        // echo "<br>".$pieces[5];
                        // echo "<br>".$pieces[6];
                        // echo "<br>".$pieces[7];
                        $sql1="INSERT INTO monitor1(main,type,name,`1`,`2`,`3`,`4`,`5`,dt1) VALUES ('Integral','$type','$table_contents[$k]','$pieces[2]','$pieces[3]','$pieces[4]','$pieces[5]','$pieces[6]','$dt[0].' '.$dt[1]')";
                        if ($conn->query($sql1) == True) {
                            echo "<br>Successfully Uploaded!!!<br>";
                        }
                        $k=$k+1;
                    }
                    $i+=6;
                }
                if(strpos($data[$i],"RF Freq Difference")!==false){
                    $table_contents2=array("RF Freq Difference");
                    $k=0;
                    for($j=$i;$j<=$i;$j=$j+1)
                    {
                        $data[$j]=preg_replace('!\s+!', ' ', $data[$j]);
                        $div=str_replace($table_contents2[$k],"",$data[$j]);
                        // echo "<br>".$data[$j]."-->".strlen($data[$j])."<br>";
                        $pieces = explode(" ", $div);
                        // echo "<br>".$pieces[0];
                        // echo "<br>".$pieces[1];
                        // echo "<br>".$pieces[2];
                        // echo "<br>".$pieces[3];
                        // echo "<br>".$pieces[4];
                        // echo "<br>".$pieces[5];
                        // echo "<br>".$pieces[6];
                        $sql1="INSERT INTO monitor1(main,type,name,`1`,`2`,`3`,`4`,`5`,dt1) VALUES ('Integral','$type','$table_contents2[$k]','$pieces[2]','$pieces[3]','$pieces[4]','$pieces[5]','$pieces[6]','$dt[0].' '.$dt[1]')";
                        if ($conn->query($sql1) == True) {
                            echo "<br>Successfully Uploaded!!!<br>";
                        }
                        $k=$k+1;
                    }
                    $i+=2;
                }
                // echo '<br>'.$i.'-->'.$data[$i];
            }
    }
    function tx1($data,$i){
        include("config.php");
        $sql1="INSERT INTO tx(name,main,antenna,off) VALUES ('tx1','G','G','R')";
        if ($conn->query($sql1) == True) {
            echo "<br>Successfully Uploaded!!!<br>";
        }
    }
    ?>
	<div class="header">
		<h2>Admin - Home Page</h2>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<div class="profile_info">
			<img src="../images/admin_profile.png"  >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="home.php?logout='1'" style="color: red;">logout</a>
						&nbsp; <a href="create_user.php"> + add user</a>
					</small>

				<?php endif ?>
			</div>
		</div>
		<div>
			 <form action="#" method="POST" enctype="multipart/form-data" style="width:80%">
				<input type="file" name="uploadedfile" id="uploadedfile">
				<input type="submit" value="submit" name="submit">
			    </form>
		</div>
    <?php
        include("config.php");
        if(isset($_POST["submit"]))
        {
            $data=file($_FILES['uploadedfile']['tmp_name']);
            echo "Upload: " . $_FILES["uploadedfile"]["name"] . "<br>";
            // $data=file("selex data.txt");
            // print_r($data);
            $i=0;
            $sqlt1="TRUNCATE TABLE monitor1";
            $sqlt2="TRUNCATE TABLE monitord";
            $sqlt3="TRUNCATE TABLE rmsd";
            $sqlt4="TRUNCATE TABLE transmitterd";
            if($conn->query($sqlt1)==True)
                echo "Done";
            if($conn->query($sqlt2)==True)
                echo "Done";
            if($conn->query($sqlt3)==True)
                echo "Done";
            if($conn->query($sqlt4)==True)
                echo "Done";
            while($i<sizeof($data)){
                $data[$i]=preg_replace('!\s+!', ' ', $data[$i]);
                if(strpos($data[$i],"All Monitor Data")!==false)
                {
                    $main=array("Integral","Standby","Field Monitors");
                    if(strpos($data[$i+1],$main[0])!==false)
                        monitor_data($data,$i+1,$main[0]);
                    elseif(strpos($data[$i+1],$main[1])!==false){
                        monitor_data($data,$i+1,$main[1]);
                    }
                    elseif(strpos($data[$i+1],$main[2])!==false){
                        monitor_data_field($data,$i+1,$main[2]);
                    }
                }
                if(strpos($data[$i],"Monitor 1 Data")!==false)
                {
                    monitor1_data($data,$i);
                }
                if(strpos($data[$i],"Transmitter Data")!==false)
                {
                    transmitter_data($data,$i);
                }
                if(strpos($data[$i],"RMS Data")!==false)
                {
                    rms_data($data,$i);
                }
                $i+=1;
                if(strpos(strtolower($data[$i]),"tx1 data")!==false)
                    tx1($data,$i);
                
            }
            header('location:../system.php');
        }
        
    ?>


	</div>
		
</body>
</html>