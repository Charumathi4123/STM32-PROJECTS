<?php include "header.php";?>
<div class="slider-container">
        <div class="slider-track">
            <!-- Slide 1: Using an <img> tag now -->
            <div class="slide">
                <img src="slider-images/slider-photo.png" alt="Person wearing VR goggles interacting with a futuristic interface.">
                </div>
                
            </div>
            </div>

             <section class="iot-kit-section">
        <div class="intro-container">

            <!-- Left Column: The Image -->
            <div class="image-column">
                <!-- IMPORTANT: Replace "path/to/your-image.jpg" with the actual path to your image file -->
                <img src="images/photo.jpg" alt="BNSS IoT Kit in a wooden case with multiple electronic modules">
            </div>

            <!-- Right Column: The Text Content -->
            <div class="text-column">
                <p class="sub-heading">INTRODUCTION</p>
                <h1 class="main-heading">Build Your Own Smart Photo 
Frame  </h1>
                <p class="description">
                      Transform a Raspberry Pi Zero 2 W into an intelligent digital display.
            </div>

        </div>
    </section>
     <section class="main-wrapper">
    <h1 class="page-title">What You'll Need</h1>

    <div class="glass-container">

        <div class="glass-card">
            <h2>Raspberry Pi Zero 2 W</h2>
             
            <p>
              The brain of your smart frame with built-in Wi-Fi.
            </p>
        </div>

        <div class="glass-card">
            <h2>LCD Display</h2>
          
            
            <p>
               5-7 inch HDMI display (1024×600 recommended).
            </p>
        </div>

        <div class="glass-card">
            <h2>MicroSD Card</h2>
           
            <p>
                16GB or larger for OS and photos
            </p>
        </div>

        <div class="glass-card">
            <h2>Power Supply </h2>
          
            
                <p>5V 2.5A micro USB adapter.</p>
             
            
        </div>
       
    </div>
    <p><strong>Additional items:Mini HDMI to HDMI cable, photo frame enclosure, keyboard and mouse for initial setup</strong> </p>
    </section>
    <section class="prepare-section">
  <div class="prepare-container">

    <!-- LEFT CONTENT -->
    <div class="prepare-left">
      <h1>Step 2: Hardware Assembly</h1>

      <div class="step">
        <div class="icon">
          
        </div>
        <div class="text">
          <h3>&#10024;  Connect the Display</h3>
          <p>Attach the LCD screen to Raspberry Pi using mini HDMI cable. Ensure 
secure connection.</p>
        </div>
      </div>
         <div class="step">
        <div class="icon">
          
        </div>
        <div class="text">
          <h3>&#10024;   Insert SD Card</h3>
          <p>Place the prepared microSD card into the slot on the Raspberry Pi Zero 2 W.</p>
        </div>
      </div>

      <div class="step">
        <div class="icon">
         
        </div>
        <div class="text">
          <h3>&#10024; Power Connection</h3>
          <p>Connect the 5V power supply. The Pi should boot up automatically with 
green LED indicator.</p>
        </div>
      </div>

      <div class="step">
        <div class="icon">
         
        </div>
        <div class="text">
          <h3>&#10024; Initial Setup</h3>
          <p>Connect keyboard and mouse via USB hub for first-time configuration and 
testing.</p>
        </div>
      </div>
    </div>
    
    <!-- RIGHT IMAGE -->
    <div class="prepare-right">
      <img src="images/pstam-raspberry-pi3-config.jpg" alt="SD Card Setup">
    </div>

  </div>
  
</section>

<div class="doc-wrapper">

    <h2>Raspberry Pi Setup -step by step</h2>
    <!-- <p style="text-align:center;">(Debian Bookworm Lite OS) – No Extra Hardware Required</p> -->

    <!-- Update System -->
    <div class="section-block">
        <div class="section-title"> Download OS Lite</div>
        <div class="codeBox">
                    <p class="unit-desc">Get the OS image:</p>
        <a class="unit-link" href="https://www.raspberrypi.com/software/" target="_blank">
            raspberrypi.com/software
        </a>
        </div>
    </div>

    <!-- Install Dependencies -->
    <div class="section-block">
        <div class="section-title">Flash with Imager</div>
        
        <p>Open Pi Imager</p>
        <p>Select OS Lite (32-bit)</p>
        <p>Choose SD Card</p>
        <p>Click WRITE</p>
        
    </div>

    <!-- Clone & Compile -->
    <div class="section-block">
        <div class="section-title"> Enable SSH</div>
        <p>Open Terminal.</p>
        <div class="codeBox">
sudo raspi-config, 
        </div>
         <div class="codeBox">
Interface Options  →  SSH  →  Enable

        </div>
        <p>Press Finish → Reboot.</p>
        <p>SSH is now enabled.</p>
        <p>Find your Pi IP:</p>
         <div class="codeBox">
hostname -I
 
        </div>
        <p>Connect from another PC:</p>
            <div class="codeBox">
ssh pi@<ip-address>

 
        </div>
        <p>Default user on new Raspberry Pi OS:</p>
        <p>Username: pi </p>

     <p>Password: raspberry (if unchanged)</p>
       
    </div>

    <!-- Audio Conversion -->
    <div class="section-block">
        <div class="section-title"> Add WiFi Config</div>
        <div class="codeBox">
country=IN
ctrl_interface=DIR=/var/run/wpa_supplicant GROUP=netdev
update_config=1
network={
    ssid="WiFiName"
    psk="Password"
}

        </div>
    </div>

    <!-- Basic Playback -->
    <div class="section-block">
        <div class="section-title"> Install Desktop + Viewer</div>
        <div class="codeBox">
sudo apt update
sudo apt install openbox feh

        </div>
       
    </div>

    <!-- Looping -->
    <div class="section-block">
        <div class="section-title"> Create Photos Folder</div>
        <div class="codeBox">
mkdir -p ~/Pictures/frame
scp *.jpg pi@IP:/home/pi/Pictures/frame

        </div>
    </div>

    <!-- Custom Bandwidth -->
    <div class="section-block">
        <div class="section-title"> Create Script</div>
        <div class="codeBox">
nano ~/start_frame.sh
#!/bin/bash
feh --fullscreen --slideshow-delay 10 ~/Pictures/frame

        </div>
    </div>

    <!-- Live Mic -->
    <div class="section-block">
        <div class="section-title"> Enable Autostart</div>
        <div class="codeBox">
mkdir -p ~/.config/openbox
nano ~/.config/openbox/autostart
–
        </div>
    </div>

    <!-- MP3 Streaming -->
    <div class="section-block">
        <div class="section-title">MP3 Streaming</div>
        <div class="codeBox">
sox example.mp3 -r 22050 -c 1 -b 16 -t wav – | sudo ./fm_transmitter -f 100.6 –
        </div>
    </div>

    <!-- WinSCP -->
    <div class="section-block">
        <div class="section-title">Enable Auto Login</div>
       <div class="codeBox">
sudo raspi-config  
Boot → Desktop Autologin  
sudo reboot

        </div>
    </div>

</div>
<section class="slideguide-wrapper">
    <h1 class="slideguide-heading"> Create Photo Slideshow Script</h1>

    <div class="slideguide-flexbox">

        <!-- Left Side Text -->
        <div class="slide-info-panel">
            <h3 class="slide-info-title">Python Script Setup</h3>

            <p class="slide-text">
                Create a Python script to manage your photo slideshow with automatic rotation and transitions.
            </p>

            <p class="slide-text">Key features to include:</p>

            <ul class="slide-feature-list">
                <li>Random photo selection</li>
                <li>Configurable display duration</li>
                <li>Smooth transitions</li>
                <li>Auto-start on boot</li>
            </ul>
        </div>

        <!-- Right Side Code -->
        <div class="slide-code-panel">
            <pre class="slide-codeblock">
#!/usr/bin/python3
import os
import time
from PIL import Image

photo_dir = "/home/pi/photos"
display_time = 30

while True:
    for photo in os.listdir(photo_dir):
        os.system(f"feh --fullscreen {photo}")
        time.sleep(display_time)
            </pre>

            <p class="slide-savehint">Save as <strong>slideshow.py</strong> in home directory</p>
        </div>

    </div>
</section>
<section class="smart-section">
    <h2>
        
        
        
    Add Smart Features</h2>

    <div class="feature-group">
        <h3>Cloud Sync</h3>
        <p>Connect to Google Photos or Dropbox to automatically update your frame with new photos.</p>
    </div>

    <div class="feature-group">
        <h3>Weather Display</h3>
        <p>Overlay current weather information using OpenWeather API integration.</p>
    </div>

    <div class="feature-group">
        <h3>Time & Date</h3>
        <p>Add elegant clock and calendar widgets to the corner of the display.</p>
    </div>
</section>
 

  



    
  
<?php include "footer.php"; ?>