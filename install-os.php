<?php include "header.php";?>
<div class="slider-container">
        <div class="slider-track">
            <!-- Slide 1: Using an <img> tag now -->
            <div class="slide">
                <img src="slider-images/slider-install.jpg" alt="Person wearing VR goggles interacting with a futuristic interface.">
               
            </div>
            </div>
            </div>
        </div>

        

        <!-- Pagination Dots -->
        <div class="pagination-dots" id="paginationDots"></div>
    </div>
       

        <section class="iot-kit-section">
        <div class="intro-container">

            <!-- Left Column: The Image -->
            <div class="image-column">
                <!-- IMPORTANT: Replace "path/to/your-image.jpg" with the actual path to your image file -->
                <img src="images/install-os.png" alt="installing  os in rasperry pie">
            </div>

            <!-- Right Column: The Text Content -->
            <div class="text-column">
                <!-- <p class="sub-heading">INTRODUCTION</p> -->
                <h1 class="main-heading">Raspberry Pi Zero 2 W OS 
Installation: Complete Beginner's 
Guide </h1>
                <p class="description">
                         Learn every step of setting up and installing OS systems on your Raspberry Pi Zero 2 W. With thorough command-line instructions, this comprehensive book guides you through every stage, from basic setup to sophisticated customizing. 

for those just starting off with Linux
                </p>
            </div>

        </div>
    </section>
     <h4 class="info-title" style="text-align:center;color:#000000;font-size:20px;">How to Install OS in Raspberry Pi Tutorial video </h4>

<ul class="info-list"></ul>

<section class="video-section">
  <div class="container">
    <div class="video-wrapper">
      <video id="irVideo" controls preload="none" poster="images/ir-thumbnail.jpg">
        <source src="videos/install-os.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>
  </div>
</section>
    <section class="pi-container">
    <div class="pi-left">
        <h1 class="pi-title">Introduction to Raspberry Pi Zero 2 W</h1>

        <h2 class="pi-subtitle">Powerful Miniature Computing</h2>

        <p class="pi-text">
            The Raspberry Pi Zero 2 W is a compact yet powerful computer. 
            Despite its small size, it packs impressive specifications suitable 
            for a wide range of projects and learning opportunities.
        </p>

        <h3 class="spec-title">Core Specifications:</h3>

        <ul class="spec-list">
            <li>Quad-core 1GHz ARM Cortex-A53 64-bit processor</li>
            <li>512MB LPDDR2 SDRAM for smooth multitasking</li>
            <li>Mini HDMI port for display output</li>
            <li>Micro USB On-The-Go port for peripherals</li>
            <li>Built-in Wi-Fi 802.11 b/g/n & Bluetooth 4.2</li>
            <li>HAT-compatible 40-pin GPIO header</li>
        </ul>

        <p class="pi-text">
            Perfect for DIY projects, learning Linux, automation, gaming, 
            and lightweight computing tasks. Low power consumption makes it 
            ideal for embedded applications.
        </p>
    </div>

    <div class="pi-right">
        <div class="img-box">
            <img src="images/ras-image.jpg" alt="Raspberry Pi Zero 2 W">
        </div>
    </div>
</section>

     <section class="main-wrapper">
    <h1 class="page-title">What You Need Before Starting</h1>

    <div class="glass-container">

        <div class="glass-card">
            <h2>Raspberry Pi Zero 2 W</h2>
             <!-- <div class="icon">🍓</div> -->
            <p>
                The main unit with wireless capabilities builtin
            </p>
        </div>

        <div class="glass-card">
            <h2>MicroSD Card</h2>
            <!-- <div class="icon">💾</div> -->
            <p>
                32GB recommended (Class 10 or UHS-I for 
optimal performance). This serves as your 
Pi's hard drive.
            </p>
        </div>

        <div class="glass-card">
            <h2>Power Supply</h2>
            <!-- <div class="icon">💻</div> -->
            <p>
               5V/2.5A micro USB power adapter. Official 
Raspberry Pi power supply recommended 
for stability.
            </p>
        </div>
         <div class="glass-card">
            <h2>Input Devices</h2>
            <!-- <div class="icon">💻</div> -->
            <p>
               USB OTG cable with keyboard and mouse, or 
wireless keyboard-mouse combo (saves 
USB ports).
            </p>
        </div>

        <div class="glass-card">
            <h2>Display Connectivity</h2>
            <!-- <div class="icon">🔌</div> -->
            
                <p>Mini HDMI to HDMI adapter or cable, plus a 
monitor or TV for desktop setup.</p>
             
            
        </div>
        <div class="glass-card">
            <h2>Optional Accessories</h2>
            <!-- <div class="icon">🔌</div> -->
            
                <p>Powered USB hub for connecting multiple 
peripherals, protective case, heat sinks for 
cooling.</p>
             
            
        </div>

    </div>
</section>
<div class="guide-section">

  <h2 class="guide-title">Step 1: Prepare & Flash OS Image</h2>

  <div class="guide-layout">

    <!-- LEFT SIDE -->
    <div class="left-steps">

      <div class="guide-step">
        <span class="step-num">01</span>
        <h3 class="step-head">Download Raspberry Pi Imager</h3>
        <p class="step-text">
          Get the official Raspberry Pi Imager tool from the Raspberry Pi website.  
          It works on Windows, macOS, and Linux.
        </p>
      </div>

      <div class="guide-step">
        <span class="step-num">02</span>
        <h3 class="step-head">Launch the Imager Tool</h3>
        <p class="step-text">
          Install and open the application on your system to begin flashing the OS.
        </p>
      </div>

      <div class="guide-step">
        <span class="step-num">03</span>
        <h3 class="step-head">Pick an Operating System</h3>
        <p class="step-text">
          Choose the preferred OS from the list. Raspberry Pi OS (32-bit) is ideal for beginners.
        </p>
      </div>

      <div class="guide-step">
        <span class="step-num">04</span>
        <h3 class="step-head">Select Your Storage</h3>
        <p class="step-text">
          Insert your microSD card and select it as the storage device.
        </p>
      </div>

      <div class="guide-step">
        <span class="step-num">05</span>
        <h3 class="step-head">Enable Optional Settings</h3>
        <p class="step-text">
          Configure WiFi, SSH, hostname, username, and password under advanced settings.
        </p>
      </div>

      <div class="guide-step">
        <span class="step-num">06</span>
        <h3 class="step-head">Flash the OS Image</h3>
        <p class="step-text">
          Click <strong>Write</strong> and allow the tool to complete the image writing process.
        </p>
      </div>

    </div>

    <!-- RIGHT SIDE -->
    <div class="right-panel">
      
      <div class="image-box">
        <img src="images/raspberry-pi-imager-OS-options.png" alt="raspberry-img">
      </div>

      <div class="info-box">
        <h4 class="info-title">Available OS Choices</h4>

        <ul class="os-list">
          <li><strong>Raspberry Pi OS</strong> – Full desktop environment</li>
          <li><strong>Pi OS Lite</strong> – Command-line only</li>
          <li><strong>Ubuntu Server</strong> – Good for server applications</li>
          <li><strong>RetroPie</strong> – Retro gaming setup</li>
          <li><strong>LibreELEC</strong> – Media center OS</li>
        </ul>
      </div>

    </div>

  </div>
</div>
<div class="flash-section">

    <h2 class="flash-title">Step 2: Flash OS to MicroSD Card (Command Line)</h2>
    <p class="flash-desc">
        For users comfortable with command-line tools, you can flash the OS image manually. This method provides more control and is useful when Raspberry 
Pi Imager isn't available or when scripting installations
    </p>

    <!-- Step Ribbon -->
    <div class="prep-steps">
        <div class="prep-box">
            <div class="prep-icon">⬇️</div>
            <h4>Download Image</h4>
            <p>Get the .img or .img.xz file from official sources.  </p>
        </div>

        <div class="prep-box">
            <div class="prep-icon">🔍</div>
            <h4>Verify Device Path</h4>
            <p>Identify your microSD card device carefully to 
avoid data loss</p>
        </div>

        <div class="prep-box">
            <div class="prep-icon">💾</div>
            <h4>Flash Image</h4>
            <p>Use <b>dd</b>  command or equivalent tool for your 
OS</p>
        </div>
    </div>

    <h3 class="sub-title">Command Line Examples by Platform</h3>

    <!-- Linux/macOS Card -->
    <div class="code-card">
        <h4 class="code-title">Linux/macOS Instructions</h4>
        <pre class="code-block">
# Find your microSD card device
lsblk # On Linux
diskutil list # On macOS
# Unmount the card (replace sdX with your device)
sudo umount /dev/sdX*
# Flash the image (CAUTION: Double-check device path!)
sudo dd if=path/to/2024-03-15-raspios-bookworm-arm64.img of=/dev/sdX bs=4M status=progress conv=fsync
# On macOS, use rdiskX instead of diskX for faster writes
sudo dd if=path/to/image.img of=/dev/rdiskX bs=4m
# Sync to ensure all data is written
sync
        </pre>
    </div>

    <!-- Windows Card -->
    <div class="code-card">
        <h4 class="code-title">Windows (PowerShell)</h4>
        <pre class="code-block">
# Use Win32 Disk Imager or Rufus GUI tools
# Or PowerShell with administrator privileges:
# List available disks
GET-DISK
# Be extremely careful with disk numbers
# Use Win32DiskImager for safer GUI-based flashing
        </pre>
    </div>
    <div class="code-card-box">
      <p><strong> &#10060;  Critical Warning:</strong>  The dd command can overwrite any disk if you specify the wrong device. Always verify your microSD card's device path using 
lsblk or diskutil list before proceeding. Double-check that you're not targeting your main hard drive!</p>
    </div>
    <p>After flashing completes successfully, safely eject the microSD card from your computer and insert it into the microSD card slot on your Raspberry Pi Zero 
2 W.</p>

</div>

<section class="imager-hero">
  <div class="content">
    <h1>Step 3: First Boot & Basic Configuration</h1>
    <h4>
      Hardware Connection Sequence
</h4>
  </div>
</section>


<section class="steps-section">
  <div class="steps-container">

    <div class="step-card delay-1">
      
      <h2>Connect Display</h2>
      <p>Attach monitor using mini HDMI adapter</p>
      <!-- <a href="https://www.raspberrypi.com/software/" target="_blank" class="btn">Visit Website</a> -->
    </div>

    <div class="step-card delay-2">
     
      <h2>Connect Input Devices</h2>
      <p>Use USB OTG cable for keyboard and mouse</p>
    </div>

    <div class="step-card delay-3">
      
      <h2>Insert MicroSD Card</h2>
      <p>Ensure card is firmly seated in slot.</p>
    </div>
       <div class="step-card delay-3">
      
      <h2>Apply Power</h2>
      <p>Connect micro USB power supply last.</p>
    </div>

  </div>
</section>
<section class="slideguide-wrapper">
    <h1 class="slideguide-heading"> Initial Boot Process</h1>
   

    <div class="slideguide-flexbox">

        <!-- Left Side Text -->
        <div class="slide-info-panel">
            <h3 class="slide-info-title">Welcome Wizard Configuration</h3>
             <p>Upon powering on, you'll see the Raspberry Pi logo followed by boot messages scrolling across the screen. The first boot takes longer as the filesystem 
expands to fill your entire microSD card. For Raspberry Pi OS with desktop, you'll be greeted with a welcome wizard.</p>

       

            <ul class="slide-feature-list">
                <li>Set your country, language, and timezone</li>
                <li>Create user account with strong password</li>
                <li>Connect to Wi-Fi network (select from available networks)</li>
                <li>Choose whether to enable automatic updates</li>
            </ul>
        </div>

        <!-- Right Side Code -->
        <div class="slide-code-panel">
           <h3 class="slide-info-title">Essential First Commands</h3>
           <p>Open Terminal and run these commands to update your system:</p>

            <pre class="slide-codeblock">

# Update package lists
sudo apt update
# Upgrade all packages
sudo apt full-upgrade -y
# Reboot if kernel updated
sudo reboot
            </pre>

           
        </div>

    </div>
</section>
<div class="flash-section">



   

     <h3 class="sub-title">Additional Configuration via raspi-config</h3> 

    <!-- Linux/macOS Card -->
    <div class="code-card">
        <h4 class="code-title">Linux/macOS Instructions</h4>
        <pre class="code-block">
# Launch configuration tool
sudo raspi-config
# Key options to configure:
# 1. System Options ³ Hostname (change device name)
# 2. Interface Options ³ Enable SSH, VNC, I2C, SPI as needed
# 3. Performance Options ³ GPU Memory allocation
# 4. Localisation ³ Set keyboard layout, timezone
# 5. Advanced ³ Expand Filesystem (usually done automatically)
        </pre>
        <p>After completing these steps, your Raspberry Pi Zero 2 W is ready for projects and exploration. The system is now fully configured with the latest updates 
installed.</p>
    </div>
    <div class="pageWrap_x900">

    <!-- Header Block -->
    <div class="flash-section">

    <h2 class="flash-title">Step 4: Headless Setup Using SSH (No Monitor Needed)</h2>
    <p class="flash-desc">
       Headless setup allows you to configure your Raspberry Pi Zero 2 W without connecting a monitor or keyboard - perfect for remote installations, server 
projects, or when you lack display equipment. You'll access the Pi remotely via SSH over your network.
    </p>
    <h2>Pre-Boot Configuration Files</h2>

    </div>

    <!-- Grid Section -->
    <div class="gridBox_x900">

        <!-- Step 1 -->
        <div class="glassCard_x900">
            <div class="headRow_x900">
                <div class="stepRound_x900">1</div>
                <div class="headTitle_x900">Enable SSH</div>
            </div>

            <p class="descText_x900">Create an empty file named exactly ssh (no 
extension) in the boot partition root. This 
enables SSH on first boot.</p>

            <div class="codeBox_x900">
# On Linux/macOS
touch /Volumes/boot/ssh # macOS
touch /media/username/boot/ssh # 
Linux
# On Windows
# Create empty file in boot drive: ssh 
(no .txt)
            </div>
        </div>

        <!-- Step 2 -->
        <div class="glassCard_x900">
            <div class="headRow_x900">
                <div class="stepRound_x900">2</div>
                <div class="headTitle_x900">Configure Wi-Fi</div>
            </div>

            <p class="descText_x900">Create wpa_supplicant.conf file in boot 
partition with your network details:</b>.</p>

            <div class="codeBox_x900">
country=IN
ctrl_interface=DIR=/var/run/wpa_supp
licant GROUP=netdev
update_config=1
network={
 ssid="YourWiFiNetworkName"
 psk="YourWiFiPassword"
 key_mgmt=WPA-PSK
}          </div>
<p>   Replace YourWiFiNetworkName and 
YourWiFiPassword with your actual Wi-Fi 
credentials. For hidden networks, add 
scan_ssid=1 inside the network block.</p>
        </div>

        <!-- Step 3 -->
        <div class="glassCard_x900">
            <div class="headRow_x900">
                <div class="stepRound_x900">3</div>
                <div class="headTitle_x900">Set User Credentials</div>
            </div>

            <p class="descText_x900">Create userconf.txt to set username and 
password (Raspberry Pi OS Bookworm 
onwards):</p>

            <div class="codeBox_x900">
# Generate encrypted password on 
Linux/macOS
echo 'mypassword' | openssl passwd 
-6 -stdin
# Create userconf.txt with format: 
username:encryptedpassword
# Example content:
pi:$6$rounds=656000$...encryptedhas
h...
            </div>
        </div>

    </div>

</div>

</div>


</div>
<div class="flash-section">

    <h2 class="flash-title">Connecting via SSH</h2>
    <p class="flash-desc">
        After configuring files, insert the microSD card into your Pi Zero 2 W and power it on. Wait 60-90 seconds for the first boot to complete. Then connect 
from your computer:
    </p>
    </div>
   

    <div class="slideguide-flexbox">

        <!-- Left Side Text -->
        <div class="slide-info-panel">
            <h3 class="slide-info-title">Finding Your Pi's IP Address</h3>
             <div class="codeBox_x900">
# Use hostname (if mDNS works)
ssh pi@raspberrypi.local
# Or find IP on your router
# Or use network scanner
sudo nmap -sn 192.168.1.0/24
# Look for "Raspberry Pi Foundation"
            </div>

      
            
        </div>

        <!-- Right Side Code -->
        <div class="slide-code-panel">
           <h3 class="slide-info-title">SSH Connection Commands</h3>
           
            <pre class="slide-codeblock">

# Connect with username@hostname
ssh pi@raspberrypi.local
# Or use IP address
ssh pi@192.168.1.100
# Accept fingerprint: yes
# Enter password when prompted
# Change default password immediately
passwd
            </pre>

           
        </div>
       

    </div>
     
</section>




    <?php include "footer.php"; ?>