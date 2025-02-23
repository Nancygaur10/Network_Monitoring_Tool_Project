#capturing packets
#sudo tcpdump -ne -c3000 'udp or tcp or arp' > all_packets

#seperating protocols
grep -i "ARP" all_packets > ARP
grep -E "\.(53|67|68|123|161|514|500|4500|33432)[ :]|UDP" all_packets > UDP
grep -E "seq|ack|Flags|SYN|ACK|FIN|RST" all_packets > TCP

#ARP-fields
cut -d ' ' -f 1 ARP > ARP_timestamp
cut -d ' ' -f 2 ARP > ARP_srcMAC
cut -d ' ' -f 4 ARP | cut --complement -d ',' -f 2  > ARP_dstMAC
awk '{if ( $11 == "who-has") {split($14,a,","); print a[1];} else print $11}' ARP > ARP_srcIP
awk '{if ($11 == "who-has") {print $12; prev = $(NF-2);} else {split(prev,a,","); print a[1];}}' ARP > ARP_dstIP
awk '{split($9,a,":"); print a[1]}' ARP > ARP_length

#UDP-fields
cut -d ' ' -f 1 UDP > UDP_timestamp
cut -d ' ' -f 2 UDP > UDP_srcMAC
cut -d ' ' -f 4 UDP | cut --complement -d ',' -f 2  > UDP_dstMAC
awk '{split($10,s,"."); print s[1]"."s[2]"."s[3]"."s[4]}' UDP > UDP_srcIP
awk '{split($12,s,"."); print s[1]"."s[2]"."s[3]"."s[4]}' UDP > UDP_dstIP
awk '{split($10,s,"."); print s[5]}' UDP > UDP_srcPORT
awk '{split($12,a,"."); split(a[5],b,":"); print b[1]}' UDP > UDP_dstPORT
awk '{split($9,a,":"); print a[1]}' UDP > UDP_length

#TCP-fields
cut -d ' ' -f 1 TCP > TCP_timestamp
cut -d ' ' -f 2 TCP > TCP_srcMAC
cut -d ' ' -f 4 TCP | cut --complement -d ',' -f 2  > TCP_dstMAC
awk '{if($6=="IPv6") {split($10,s,"."); print s[1]} else{split($10,s,"."); print s[1]"."s[2]"."s[3]"."s[4]}}' TCP > TCP_srcIP
awk '{if($6=="IPv6") {split($12,s,"."); print s[1]} else{split($12,s,"."); print s[1]"."s[2]"."s[3]"."s[4]}}' TCP > TCP_dstIP
awk '{if($6=="IPv6") {split($10,s,"."); print s[2]} else {split($10,s,"."); print s[5]}}' TCP > TCP_srcPORT
awk '{if($6=="IPv6") {split($10,s,"."); split(s[2],a,":"); print a[1]} else {split($12,a,"."); split(a[5],b,":"); print b[1]}}' TCP > TCP_dstPORT
awk '{split($9,a,":"); print a[1]}' TCP > TCP_length

