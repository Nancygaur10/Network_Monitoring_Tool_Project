<?php
error_reporting(E_ALL);
ini_set('display_errors',1);    
    session_start();
    if (isset($_POST['submit'])){
    	
    	$packet = $_POST['packet'];
    	
    	#ARP packets
    	if ($packet == 'ARP'){
    	    $arp_field = $_POST['arp-fields'];
    	    
    	    if($arp_field == 'Select'){
		include('protocol.html');
    	    	echo "<script> alert('Select Field-Type') </script>";
    	    }
    	    else if($arp_field == 'TimeStamp'){
    	    	echo "<table border='1'>";
    	    	echo "<tr><th>Timestamp</th></tr>";
    	    	$file = fopen("ARP_timestamp","r");
    	    	while(!feof($file)){
    	    	    $line = fgets($file);
    	    	    echo "<tr><td>$line</td></tr>";
    	    	    }
    	    	echo "</table>";
    	    	fclose($file);
    	    }
    	    else if($arp_field == 'SourceMAC'){
    	    	echo "<table border='1'>";
    	    	echo "<tr><th>Source MAC</th></tr>";
    	    	$file = fopen("ARP_srcMAC","r");
    	    	while(!feof($file)){
    	    	    $line = fgets($file);
    	    	    echo "<tr><td>$line</td></tr>";
    	    	    }
    	    	echo "</table>";
    	    	fclose($file);
    	    }
    	    else if($arp_field == 'DestinationMAC'){
    	    	echo "<table border='1'>";
    	    	echo "<tr><th> Destination MAC </th></tr>";
    	    	$file = fopen("ARP_dstMAC","r");
    	    	while(!feof($file)){
    	    	    $line = fgets($file);
    	    	    echo "<tr><td>$line</td></tr>";
    	    	    }
    	    	echo "</table>";
    	    	fclose($file);
    	    }
    	    else if($arp_field == 'SourceIP'){
    	    	echo "<table border='1'>";
    	    	echo "<tr><th>Source IP</th></tr>";
    	    	$file = fopen("ARP_srcIP","r");
    	    	while(!feof($file)){
    	    	    $line = fgets($file);
    	    	    echo "<tr><td>$line</td></tr>";
    	    	    }
    	    	echo "</table>";
    	    	fclose($file);
    	    }
    	    else if($arp_field == 'DestinationIP'){
    	    	echo "<table border='1'>";
    	    	echo "<tr><th>Destination IP</th></tr>";
    	    	$file = fopen("ARP_dstIP","r");
    	    	while(!feof($file)){
    	    	    $line = fgets($file);
    	    	    echo "<tr><td>$line</td></tr>";
    	    	    }
    	    	echo "</table>";
    	    	fclose($file);
    	    }
    	    else if($arp_field == 'ProtocolLength'){
    	    	echo "<table border='1'>";
    	    	echo "<tr><th>Packet Length</th></tr>";
    	    	$file = fopen("ARP_length","r");
    	    	while(!feof($file)){
    	    	    $line = fgets($file);
    	    	    echo "<tr><td>$line</td></tr>";
    	    	    }
    	    	echo "</table>";
    	    	fclose($file);
    	    }
    	    else if($arp_field == 'All'){
    	    	echo "<table border='1'>";
    	    	echo "<tr><th>Timestamp</th>
    	    	     	  <th>Source MAC</th>
    	    	     	  <th>Destination MAC</th>
    	    	      	  <th>Source IP</th>
    	    	     	  <th>Destination IP</th>
    	    	     	  <th>Packet Length</th>
    	    	     	  </tr>";
    	    	$file1 = fopen("ARP_timestamp","r");
    	    	$file2 = fopen("ARP_srcMAC","r");
    	    	$file3 = fopen("ARP_dstMAC","r");
    	    	$file4 = fopen("ARP_srcIP","r");
    	    	$file5 = fopen("ARP_dstIP","r");
    	    	$file6 = fopen("ARP_length","r");
    	    	while(!feof($file1) && !feof($file2) && !feof($file3) && !feof($file4) && !feof($file5) && !feof($file6)){
    	    	    $line1 = fgets($file1);
    	    	    $line2 = fgets($file2);
    	    	    $line3 = fgets($file3);
    	    	    $line4 = fgets($file4);
    	    	    $line5 = fgets($file5);
    	    	    $line6 = fgets($file6);
    	    	    echo "<tr><td>$line1</td>
    	    	    	  <td>$line2</td>
    	    	    	  <td>$line3</td>
    	    	    	  <td>$line4</td>
    	    	    	  <td>$line5</td>
    	    	    	  <td>$line6</td>
    	    	          </tr>";
    	    	    }
    	    	echo "</table>";
    	    	fclose($file1);
    	    	fclose($file2);
    	    	fclose($file3);
    	    	fclose($file4);
    	    	fclose($file5);
    	    	fclose($file6);
    	    }  
    	}
    	
    	#UDP packets
    	if ($packet == 'UDP'){
    	    $udp_field = $_POST['udp-fields'];
    	    
    	    if($udp_field == 'Select'){
		include('protocol.html');
    	    	echo "<script> alert('Select Field-Type') </script>";
    	    }
    	    else if($udp_field == 'TimeStamp'){
    	    	echo "<table border='1'>";
    	    	echo "<tr><th>Timestamp</th></tr>";
    	    	$file = fopen("UDP_timestamp","r");
    	    	while(!feof($file)){
    	    	    $line = fgets($file);
    	    	    echo "<tr><td>$line</td></tr>";
    	    	    }
    	    	echo "</table>";
    	    	fclose($file);
    	    }
    	    else if($udp_field == 'SourceMAC'){
    	    	echo "<table border='1'>";
    	    	echo "<tr><th>Source MAC</th></tr>";
    	    	$file = fopen("UDP_srcMAC","r");
    	    	while(!feof($file)){
    	    	    $line = fgets($file);
    	    	    echo "<tr><td>$line</td></tr>";
    	    	    }
    	    	echo "</table>";
    	    	fclose($file);
    	    }
    	    else if($udp_field == 'DestinationMAC'){
    	    	echo "<table border='1'>";
    	    	echo "<tr><th> Destination MAC </th></tr>";
    	    	$file = fopen("UDP_dstMAC","r");
    	    	while(!feof($file)){
    	    	    $line = fgets($file);
    	    	    echo "<tr><td>$line</td></tr>";
    	    	    }
    	    	echo "</table>";
    	    	fclose($file);
    	    }
    	    else if($udp_field == 'SourceIP'){
    	    	echo "<table border='1'>";
    	    	echo "<tr><th>Source IP</th></tr>";
    	    	$file = fopen("UDP_srcIP","r");
    	    	while(!feof($file)){
    	    	    $line = fgets($file);
    	    	    echo "<tr><td>$line</td></tr>";
    	    	    }
    	    	echo "</table>";
    	    	fclose($file);
    	    }
    	    else if($udp_field == 'SourcePort'){
    	    	echo "<table border='1'>";
    	    	echo "<tr><th>Source Port</th></tr>";
    	    	$file = fopen("UDP_srcPORT","r");
    	    	while(!feof($file)){
    	    	    $line = fgets($file);
    	    	    echo "<tr><td>$line</td></tr>";
    	    	    }
    	    	echo "</table>";
    	    	fclose($file);
    	    }
    	    else if($udp_field == 'DestinationIP'){
    	    	echo "<table border='1'>";
    	    	echo "<tr><th>Destination IP</th></tr>";
    	    	$file = fopen("UDP_dstIP","r");
    	    	while(!feof($file)){
    	    	    $line = fgets($file);
    	    	    echo "<tr><td>$line</td></tr>";
    	    	    }
    	    	echo "</table>";
    	    	fclose($file);
    	    }
    	    else if($udp_field == 'DestinationPort'){
    	    	echo "<table border='1'>";
    	    	echo "<tr><th>Destination Port</th></tr>";
    	    	$file = fopen("UDP_dstPORT","r");
    	    	while(!feof($file)){
    	    	    $line = fgets($file);
    	    	    echo "<tr><td>$line</td></tr>";
    	    	    }
    	    	echo "</table>";
    	    	fclose($file);
    	    }
    	    else if($udp_field == 'ProtocolLength'){
    	    	echo "<table border='1'>";
    	    	echo "<tr><th>Packet Length</th></tr>";
    	    	$file = fopen("UDP_length","r");
    	    	while(!feof($file)){
    	    	    $line = fgets($file);
    	    	    echo "<tr><td>$line</td></tr>";
    	    	    }
    	    	echo "</table>";
    	    	fclose($file);
    	    }
    	    else if($udp_field == 'All'){
    	    	echo "<table border='1'>";
    	    	echo "<tr><th>Timestamp</th>
    	    	     	  <th>Source MAC</th>
    	    	     	  <th>Destination MAC</th>
    	    	      	  <th>Source IP</th>
    	    	      	  <th>Source Port</th>
    	    	     	  <th>Destination IP</th>
    	    	     	  <th>Destination Port</th>
    	    	     	  <th>Packet Length</th>
    	    	     	  </tr>";
    	    	$file1 = fopen("UDP_timestamp","r");
    	    	$file2 = fopen("UDP_srcMAC","r");
    	    	$file3 = fopen("UDP_dstMAC","r");
    	    	$file4 = fopen("UDP_srcIP","r");
    	    	$file5 = fopen("UDP_srcPORT","r");
    	    	$file6 = fopen("UDP_dstIP","r");
    	    	$file7 = fopen("UDP_dstPORT","r");
    	    	$file8 = fopen("UDP_length","r");
    	    	while(!feof($file1) && !feof($file2) && !feof($file3) && !feof($file4) && !feof($file5) && !feof($file6) && !	feof($file7) && !feof($file8)){
    	    	    $line1 = fgets($file1);
    	    	    $line2 = fgets($file2);
    	    	    $line3 = fgets($file3);
    	    	    $line4 = fgets($file4);
    	    	    $line5 = fgets($file5);
    	    	    $line6 = fgets($file6);
    	    	    $line7 = fgets($file7);
    	    	    $line8 = fgets($file8);
    	    	    echo "<tr><td>$line1</td>
    	    	    	  <td>$line2</td>
    	    	    	  <td>$line3</td>
    	    	    	  <td>$line4</td>
    	    	    	  <td>$line5</td>
    	    	    	  <td>$line6</td>
    	    	    	  <td>$line7</td>
    	    	    	  <td>$line8</td>
    	    	          </tr>";
    	    	    }
    	    	echo "</table>";
    	    	fclose($file1);
    	    	fclose($file2);
    	    	fclose($file3);
    	    	fclose($file4);
    	    	fclose($file5);
    	    	fclose($file6);
    	    	fclose($file7);
    	    	fclose($file8);
    	    }
    	 }
    	 
    	#TCP packets
    	if ($packet == 'TCP'){
    	    $tcp_field = $_POST['tcp-fields'];
    	    
    	    if($tcp_field == 'Select'){
		include('protocol.html');
    	    	echo "<script> alert('Select Field-Type') </script>";
    	    }
    	    else if($tcp_field == 'TimeStamp'){
    	    	echo "<table border='1'>";
    	    	echo "<tr><th>Timestamp</th></tr>";
    	    	$file = fopen("TCP_timestamp","r");
    	    	while(!feof($file)){
    	    	    $line = fgets($file);
    	    	    echo "<tr><td>$line</td></tr>";
    	    	    }
    	    	echo "</table>";
    	    	fclose($file);
    	    }
    	    else if($tcp_field == 'SourceMAC'){
    	    	echo "<table border='1'>";
    	    	echo "<tr><th>Source MAC</th></tr>";
    	    	$file = fopen("TCP_srcMAC","r");
    	    	while(!feof($file)){
    	    	    $line = fgets($file);
    	    	    echo "<tr><td>$line</td></tr>";
    	    	    }
    	    	echo "</table>";
    	    	fclose($file);
    	    }
    	    else if($tcp_field == 'DestinationMAC'){
    	    	echo "<table border='1'>";
    	    	echo "<tr><th> Destination MAC </th></tr>";
    	    	$file = fopen("TCP_dstMAC","r");
    	    	while(!feof($file)){
    	    	    $line = fgets($file);
    	    	    echo "<tr><td>$line</td></tr>";
    	    	    }
    	    	echo "</table>";
    	    	fclose($file);
    	    }
    	    else if($tcp_field == 'SourceIP'){
    	    	echo "<table border='1'>";
    	    	echo "<tr><th>Source IP</th></tr>";
    	    	$file = fopen("TCP_srcIP","r");
    	    	while(!feof($file)){
    	    	    $line = fgets($file);
    	    	    echo "<tr><td>$line</td></tr>";
    	    	    }
    	    	echo "</table>";
    	    	fclose($file);
    	    }
    	    else if($tcp_field == 'SourcePort'){
    	    	echo "<table border='1'>";
    	    	echo "<tr><th>Source Port</th></tr>";
    	    	$file = fopen("TCP_srcPORT","r");
    	    	while(!feof($file)){
    	    	    $line = fgets($file);
    	    	    echo "<tr><td>$line</td></tr>";
    	    	    }
    	    	echo "</table>";
    	    	fclose($file);
    	    }
    	    else if($tcp_field == 'DestinationIP'){
    	    	echo "<table border='1'>";
    	    	echo "<tr><th>Destination IP</th></tr>";
    	    	$file = fopen("TCP_dstIP","r");
    	    	while(!feof($file)){
    	    	    $line = fgets($file);
    	    	    echo "<tr><td>$line</td></tr>";
    	    	    }
    	    	echo "</table>";
    	    	fclose($file);
    	    }
    	    else if($tcp_field == 'DestinationPort'){
    	    	echo "<table border='1'>";
    	    	echo "<tr><th>Destination Port</th></tr>";
    	    	$file = fopen("TCP_dstPORT","r");
    	    	while(!feof($file)){
    	    	    $line = fgets($file);
    	    	    echo "<tr><td>$line</td></tr>";
    	    	    }
    	    	echo "</table>";
    	    	fclose($file);
    	    }
    	    else if($tcp_field == 'ProtocolLength'){
    	    	echo "<table border='1'>";
    	    	echo "<tr><th>Packet Length</th></tr>";
    	    	$file = fopen("TCP_length","r");
    	    	while(!feof($file)){
    	    	    $line = fgets($file);
    	    	    echo "<tr><td>$line</td></tr>";
    	    	    }
    	    	echo "</table>";
    	    	fclose($file);
    	    }
    	    else if($tcp_field == 'All'){
    	    	echo "<table border='1'>";
    	    	echo "<tr><th>Timestamp</th>
    	    	     	  <th>Source MAC</th>
    	    	     	  <th>Destination MAC</th>
    	    	      	  <th>Source IP</th>
    	    	      	  <th>Source Port</th>
    	    	     	  <th>Destination IP</th>
    	    	     	  <th>Destination Port</th>
    	    	     	  <th>Packet Length</th>
    	    	     	  </tr>";
    	    	$file1 = fopen("TCP_timestamp","r");
    	    	$file2 = fopen("TCP_srcMAC","r");
    	    	$file3 = fopen("TCP_dstMAC","r");
    	    	$file4 = fopen("TCP_srcIP","r");
    	    	$file5 = fopen("TCP_srcPORT","r");
    	    	$file6 = fopen("TCP_dstIP","r");
    	    	$file7 = fopen("TCP_dstPORT","r");
    	    	$file8 = fopen("TCP_length","r");
    	    	while(!feof($file1) && !feof($file2) && !feof($file3) && !feof($file4) && !feof($file5) && !feof($file6) && !	feof($file7) && !feof($file8)){
    	    	    $line1 = fgets($file1);
    	    	    $line2 = fgets($file2);
    	    	    $line3 = fgets($file3);
    	    	    $line4 = fgets($file4);
    	    	    $line5 = fgets($file5);
    	    	    $line6 = fgets($file6);
    	    	    $line7 = fgets($file7);
    	    	    $line8 = fgets($file8);
    	    	    echo "<tr><td>$line1</td>
    	    	    	  <td>$line2</td>
    	    	    	  <td>$line3</td>
    	    	    	  <td>$line4</td>
    	    	    	  <td>$line5</td>
    	    	    	  <td>$line6</td>
    	    	    	  <td>$line7</td>
    	    	    	  <td>$line8</td>
    	    	          </tr>";
    	    	    }
    	    	echo "</table>";
    	    	fclose($file1);
    	    	fclose($file2);
    	    	fclose($file3);
    	    	fclose($file4);
    	    	fclose($file5);
    	    	fclose($file6);
    	    	fclose($file7);
    	    	fclose($file8);
    	    }   
    	}
    }
?>
