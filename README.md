# Network_Monitoring_Tool_Project 

## Table of Contents 
- [Overview]  
- [Features]  
- [Technologies Used]  
- [Prerequisites]
- [Setup Instructions]  
- [Usage] 

## Overview 
A web-based network monitoring tool that captures real-time network traffic, analyzes packet data, and provides a user-friendly dashboard for administrators. The tool integrates TCPDump, PHP, MySQL, and Apache to efficiently track network activity.  

## Features  
✔️ Real-time network traffic monitoring  
✔️ User-friendly web dashboard (HTML, CSS, PHP)  
✔️ Packet capture (TCPDump)  
✔️ Role-based access control (Authentication & Authorization)  
✔️ Data filtering 
✔️ Automated packet classification using `packet.sh` script  
✔️ Deployed on Apache (Linux Server)  

## Technologies Used  
- Frontend: HTML, CSS, JavaScript  
- Backend: PHP  
- Database: MySQL  
- Server: Apache (Linux)  
- Network Monitoring: TCPDump, Bash Script (`packet.sh`)   

### Prerequisites  
Ensure you have the following installed:  
- Apache Web Server  
- MySQL Database  
- PHP  
- TCPDump (for packet capturing)  
- Bash (for running `packet.sh`)  

### Setup Instructions  
1. Clone the repository
   ```bash
   git clone https://github.com/Nancygaur10/Network_Monitoring_Tool_Project
   cd network-monitoring-tool
   ```  
2. Set up MySQL Database  
   - Import the provided SQL file:  
     ```bash
     mysql -u root -p < database.sql
     ```  
3. Configure Apache & PHP  
   - Move the project files to your Apache root directory (e.g., `/var/www/html/`)  
   - Modify `connect.php` with your database credentials  

4. Run the Packet Capture Script (`packet.sh`)  
   - Grant execution permissions:  
     ```bash
     chmod +x packet.sh
     ```  
   - Execute the script to generate packet files:  
     ```bash
     ./packet.sh
     ```  

5. Run the Application 
   - Start the Apache server:  
     ```bash
     sudo systemctl start apache2
     ```  
   - Access the tool via `http://localhost/your_project_folder/`  

## Usage  
- Login: Use the admin credentials to access the dashboard  
- View Network Logs: Check real-time traffic updates  
- Search & Filter: Analyze data using custom filters  
- Run `packet.sh` to generate categorized network traffic logs  
