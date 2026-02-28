<?php include "header.php";?>
<div class="slider-container">
        <div class="slider-track">
            <!-- Slide 1: Using an <img> tag now -->
            <div class="slide">
                <img src="slider-images/slider-tv.jpg" alt="Person wearing VR goggles interacting with a futuristic interface.">
                </div>
                
            </div>
            </div>

             <section class="iot-kit-section">
        <div class="intro-container">

            <!-- Left Column: The Image -->
            <div class="image-column">
                <!-- IMPORTANT: Replace "path/to/your-image.jpg" with the actual path to your image file -->
                <img src="images/Android.png" alt="BNSS IoT Kit in a wooden case with multiple electronic modules">
            </div>

            <!-- Right Column: The Text Content -->
            <div class="text-column">
                <p class="sub-heading">INTRODUCTION</p>
                <h1 class="main-heading">Build Your Own Android TV 
Using Raspberry Pi Zero 2 </h1>
                <p class="description">
                       Transform your regular telly into a smart Android TV with this 
comprehensive step-by-step guide designed for college students and 
hobbyists.
            </div>

        </div>
    </section>
     <section class="main-wrapper">
    <h1 class="page-title">What You'll Need</h1>

    <div class="glass-container">

        <div class="glass-card">
            <h2>Raspberry Pi Zero 2 W</h2>
             
            <p>
               The heart of your Android TV. This compact single-board 
computer features a quad-core processor and built-in WiFi, making it perfect for streaming applications
            </p>
        </div>

        <div class="glass-card">
            <h2>MicroSD CardMicroSD Card (32GB+)</h2>
            
            
            <p>
                Storage for your operating system and applications. Class 
10 or UHS-I recommended for optimal performance and 
smooth video playback.
            </p>
        </div>

        <div class="glass-card">
            <h2>Power Supply & Cables</h2>
            
            <p>
                5V/2.5A micro USB power adapter, mini HDMI to HDMI cable 
for display connection, and USB OTG adapter for 
peripherals.
            </p>
        </div>

        <div class="glass-card">
            <h2>Input Devices </h2>
            
            
                <p>USB keyboard and mouse for initial setup. Consider a 
wireless combo for convenience. You can also use a 
smartphone as a remote control later.</p>
             
            
        </div>

    </div>
    </section>
  <div class="page">
    <div class="layout-flexbox">
      <div class="content-block">
        <h2>Understanding LineageOS for Android TV</h2>

        <h3>Why LineageOS?</h3>
        <p>
            LineageOS is an open-source Android distribution that works brilliantly on Raspberry Pi.
            It provides a genuine Android TV experience with access to the Google Play Store and streaming apps.
        </p>

        <p><strong>Key advantages:</strong> Regular updates, customisation options, and better performance
        compared to other Android builds for Pi.</p>

        <p>
            The Android TV version includes the leanback launcher, optimised for television viewing
            and remote control navigation.
        </p>
      </div>

      <div class="visual-frame">
        <img src="images/tv.png" alt="LineageOS Android TV">
      </div>
    </div>
  </div>
  <div class="holo-wrapper">

    <h2 class="holo-title">MicroSD Preparation – Setup Guide</h2>

    <div class="holo-imgbox">
        <!-- <img src="images/setup-rasperry.png" alt="TV Setup"> -->
    </div>

    <div class="holo-grid">

        <div class="holo-card">
            <div class="holo-stepnum">STEP 01</div>
            <div class="holo-step-title"> Download Raspberry Pi Imager</div>
            <div class="holo-step-desc">
              Visit raspberrypi.com/software and download the official imaging tool for 
your computer's operating system.
            </div>
        </div>

        <div class="holo-card">
            <div class="holo-stepnum">STEP 02</div>
            <div class="holo-step-title">Get LineageOS Image</div>
            <div class="holo-step-desc">
                Download the latest LineageOS Android TV build for Raspberry Pi Zero 2 
from konstakang.com or the official LineageOS website.
            </div>
        </div>

        <div class="holo-card">
            <div class="holo-stepnum">STEP 03</div>
            <div class="holo-step-title">Flash the Image</div>
            <div class="holo-step-desc">
               Insert your microSD card, open Pi Imager, select "Use custom" image, 
choose your LineageOS file, and write to the card.
            </div>
        </div>

        <div class="holo-card">
            <div class="holo-stepnum">STEP 04</div>
            <div class="holo-step-title">Safely Eject</div>
            <div class="holo-step-desc">
               Wait for verification to complete, then safely eject your microSD card. Your 
storage device is now ready for installation.
            </div>
        </div>

    </div>

</div>

  <section class="prepare-section">
  <div class="prepare-container">

    <!-- LEFT CONTENT -->
    <div class="prepare-left">
      <h1>Step 2: Initial Hardware Setup</h1>

      <div class="step">
        <div class="icon">
          <!-- <img src="images/icon.jpg" alt="Insert SD Card"> -->
        </div>
        <div class="text">
          <h3> &#10024; Insert MicroSD Card</h3>
          <p>Carefully insert the prepared microSD card into the slot on your 
Raspberry Pi Zero 2. Ensure it clicks securely into place.</p>
        </div>
      </div>
         <div class="step">
        <div class="icon">
          <!-- <img src="images/icon.jpg" alt="Insert SD Card"> -->
        </div>
        <div class="text">
          <h3> &#10024; Connect to Display</h3>
          <p>Use the mini HDMI to HDMI cable to connect your Pi to your 
television. Make sure to use the HDMI port, not the power port.</p>
        </div>
      </div>

      <div class="step">
        <div class="icon">
          <!-- <img src="images/" alt="Launch Imager"> -->
        </div>
        <div class="text">
          <h3> &#10024; Attach Peripherals</h3>
          <p>Connect your USB keyboard and mouse through the OTG 
adapter to the USB port. This is essential for initial 
configuration.</p>
        </div>
      </div>

      <div class="step">
        <div class="icon">
          <!-- <img src="images/icon-settings.png" alt="Select Options"> -->
        </div>
        <div class="text">
          <h3> &#10024; Power Up</h3>
          <p>Finally, connect the power supply. The Pi should boot 
automatically. You'll see the LineageOS boot animation 
on your screen.</p>
        </div>
      </div>
    </div>
    
    <!-- RIGHT IMAGE -->
    <div class="prepare-right">
      <img src="images/setup-rasperry.png" alt="SD Card Setup">
    </div>

  </div>
  
</section>
<div class="guideShell">

    <h1 class="guideHeading">Step 3: First Boot Configuration</h1>
    <p class="guideSubtext">
        Follow these steps to complete the Android TV initial setup.
    </p>

    <!-- MAIN CONTENT AREA -->
    <div class="stepZone">

        <h2 class="zoneTitle">Initial Setup Wizard</h2>
<p>After the first boot (which may take 2-3 minutes), you'll be 
greeted by the Android TV setup wizard.</p>
        <ul class="zoneList">
            <li>Select your language and region preferences.</li>
            <li>Connect to your Wi-Fi network using the on-screen 
keyboard.</li>
            <li>Sign in with your Google account for Play Store access.</li>
            <li>Accept terms and conditions to proceed.</li>
        </ul>

        <p class="zoneNote">
            <strong>Pro Tip:</strong> Skip Google account sign-in initially if you want to 
explore the interface first. You can add it later from Settings.
        </p>

        <!-- INFO BOXES -->
        <div class="infoTiles">

            <div class="tileWrap bootBlock">
                <div class="tileTitle">⏱ Boot Time</div>
                <div class="tileText">
                    First boot: 2-3 minutes<br>
                   Subsequent boots: 45-60 seconds
                </div>
            </div>

            <div class="tileWrap netBlock">
                <div class="tileTitle">🌐 Network Setup</div>
                <div class="tileText">
                   Connect to 2.4GHz or 5GHz Wi-Fi<br>
                   Ethernet possible with USB adapter
                </div>
            </div>

        </div>
    </div>

</div>
<section class="imager-hero">
  <div class="content">
    <h1>Step 4: Installing Essential Applications</h1>
    
</section>

<section class="steps-section">
  <div class="steps-container">

    <div class="step-card delay-1">
      <!-- <div class="step-icon">🌐</div> -->
      <h2>Google Play Store</h2>
      <p>Your gateway to thousands of 
apps. Sign in with your Google 
account to access streaming 
services, games, and utilities 
designed for Android TV.</p>
     
    </div>

    <div class="step-card delay-2">
      <!-- <div class="step-icon">🧭</div> -->
      <h2>Streaming Services</h2>
      <p>Install Netflix, Prime Video, 
Disney+ Hotstar, YouTube, and 
other OTT platforms. Most 
apps are optimised for TV 
viewing with remote 
navigation.</p>
    </div>

    <div class="step-card delay-3">
      <!-- <div class="step-icon">⬇️</div> -->
      <h2>Media Players</h2>
      <p>VLC for Android TV and Kodi 
provide excellent support for 
local media playback, 
supporting various video and 
audio formats seamlessly.</p>
    </div>
    <div class="step-card delay-3">
      <!-- <div class="step-icon">⬇️</div> -->
      <h2>File Manager</h2>
      <p>Install a TV-optimised file 
manager like X-plore to 
manage downloads, access 
network storage, and organise 
your media files efficiently.</p>
    </div>

  </div>
  
</section>
<h1 class="gradHeading">Optimising Performance</h1>

<div class="quadGrid">

  <div class="gradCard gA">
    <h2>Adjust Display Settings</h2>
    <p>Navigate to Settings ³ Display ³ Resolution and set it to 
1080p for best results. Enable hardware acceleration in 
Developer Options for smoother video playback.</p>
  </div>

  <div class="gradCard gB">
    <h2>Manage Background Apps</h2>
    <p>The Pi Zero 2 has limited RAM (512MB). Close unused 
applications and disable auto-start for apps you don't use 
regularly to free up memory.</p>
  </div>

  <div class="gradCard gC">
    <h2>Cool Your Device.</h2>
    <p>Consider adding a small heatsink to the processor chip. 
This prevents thermal throttling during extended 
streaming sessions and maintains consistent 
performance.</p>
  </div>

  <div class="gradCard gD">
    <h2>Enable Developer Options</h2>
    <p>Go to Settings &#8594; About &#8594; tap Build Number seven times. 
In Developer Options, you can enable USB debugging and 
adjust animation scales for snappier response.</p>
  </div>

</div>
 </section>
     <section class="main-wrapper">
    <h1 class="page-title">Troubleshooting Common Issues</h1>

    <div class="glass-container">

        <div class="glass-card">
            <h2>Wi-Fi Connectivity Problems</h2>
             
            <p>
               <strong>Issue:</strong>   Weak or dropping connection
            </p>
            <p><strong>Solution:</strong>  Position Pi closer to router, 
use 2.4GHz band for better range, or 
connect via USB Ethernet adapter for 
stable streaming.</p>
        </div>

        <div class="glass-card">
            <h2>Video Playback Stuttering</h2>
            
            
            <p>
                <strong>Issue:</strong>   Choppy or laggy video.
            </p>
            <p><strong>Solution:</strong>   Position Pi closer to router, 
use 2.4GHz band for better range, or 
connect via USB Ethernet adapter for 
stable streaming.</p>
        </div>

        <div class="glass-card">
            <h2>No Audio Output</h2>
            
            <p>
                <strong>Issue:</strong>   Video plays but no sound.
            </p>
            <p><strong>Solution:</strong>  Check HDMI cable 
connection, verify TV input settings, 
and ensure audio output is set to 
HDMI in Android TV sound settings.</p>
        </div>

       

    
    </section>


    
  
<?php include "footer.php"; ?>