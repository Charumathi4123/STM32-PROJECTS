<?php include "header.php";?>
<div class="slider-container">
        <div class="slider-track">
            <!-- Slide 1: Using an <img> tag now -->
            <div class="slide">
                <img src="slider-images/slider fm3.png" alt="Person wearing VR goggles interacting with a futuristic interface.">
                </div>
                
            </div>
            </div>

             <section class="iot-kit-section">
        <div class="intro-container">

            <!-- Left Column: The Image -->
            <div class="image-column">
                <!-- IMPORTANT: Replace "path/to/your-image.jpg" with the actual path to your image file -->
                <img src="images/Fm-intro.jpg" alt="BNSS IoT Kit in a wooden case with multiple electronic modules">
            </div>

            <!-- Right Column: The Text Content -->
            <div class="text-column">
                <p class="sub-heading">INTRODUCTION</p>
                <h1 class="main-heading">Build Your Own FM Radio 
Station  </h1>
                <p class="description">
                      A step-by-step guide to creating a functional FM radio transmitter using 
Raspberry Pi Zero 2 W .
            </div>

        </div>
    </section>
<div class="doc-wrapper">

    <h2>FM Transmitter with Raspberry Pi Zero 2 W</h2>
    <p style="text-align:center;">(Debian Bookworm Lite OS) – No Extra Hardware Required</p>

    <!-- Update System -->
    <div class="section-block">
        <div class="section-title">Update System</div>
        <div class="codeBox">
sudo apt-get update<br>
sudo apt-get upgrade
        </div>
    </div>

    <!-- Install Dependencies -->
    <div class="section-block">
        <div class="section-title">Install Dependencies</div>
        <div class="codeBox">
sudo apt-get install make build-essential
        </div>
    </div>

    <!-- Clone & Compile -->
    <div class="section-block">
        <div class="section-title">Clone & Compile</div>
        <div class="codeBox">
git clone https://github.com/markondej/fm_transmitter<br>
cd fm_transmitter<br>
make GPIO21=1
        </div>
    </div>

    <!-- Audio Conversion -->
    <div class="section-block">
        <div class="section-title">Audio Conversion (Optional)</div>
        <div class="codeBox">
sudo apt-get install sox libsox-fmt-mp3
        </div>
    </div>

    <!-- Basic Playback -->
    <div class="section-block">
        <div class="section-title">Basic Playback</div>
        <div class="codeBox">
sudo ./fm_transmitter -f 100.6 acoustic_guitar_duet.wav
        </div>
        Tune radio to <b>100.0 MHz</b>.
    </div>

    <!-- Looping -->
    <div class="section-block">
        <div class="section-title">Loop Playback</div>
        <div class="codeBox">
sudo ./fm_transmitter -f 100.6 -r acoustic_guitar_duet.wav
        </div>
    </div>

    <!-- Custom Bandwidth -->
    <div class="section-block">
        <div class="section-title">Custom Bandwidth</div>
        <div class="codeBox">
sudo ./fm_transmitter -f 100.6 -b 150 acoustic_guitar_duet.wav
        </div>
    </div>

    <!-- Live Mic -->
    <div class="section-block">
        <div class="section-title">Live Microphone Input (USB Mic Required)</div>
        <div class="codeBox">
arecord -D hw:1,0 -c 1 -d 0 -r 22050 -f S16_LE | sudo ./fm_transmitter -f 100.6 –
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
        <div class="section-title">File Transfer</div>
        Use <b>WinSCP</b> for uploading audio files easily.
    </div>

</div>
   <section class="main-wrapper">
    <h1 class="page-title">Troubleshooting Common Issues</h1>

    <div class="glass-container">

        <div class="glass-card">
            <h2>Wi-Fi Connectivity Problems</h2>
             
            <p>
               <strong>Issue:</strong>  Weak or unstable Wi-Fi connection.
            </p>
            <p><strong>Solution:</strong> Move closer to router, use 2.4GHz, or a USB–Ethernet adapter.</p>
        </div>

        <div class="glass-card">
            <h2>Audio Not Transmitting</h2>
          
            <p>
                <strong>Issue:</strong>  No sound on the radio.
            </p>
            <p><strong>Solution:</strong>  Use 22050Hz mono WAV files, check GPIO21, verify FM frequency.</p>
        </div>

        <div class="glass-card">
            <h2>Static / Noise in FM Output</h2>
            
            <p>
                <strong>Issue:</strong>  Distorted audio.
            </p>
            <p><strong>Solution:</strong>  Reduce bandwidth (-b), move Pi from interference, try >100 MHz.</p>
        </div>
          <div class="glass-card">
            <h2>MP3 Not Playing</h2>
            
            <p>
                <strong>Issue:</strong>  MP3 doesn’t broadcast.
            </p>
            <p><strong>Solution:</strong>  Convert MP3 → WAV or use SOX stream.</p>
        </div>
            <div class="glass-card">
            <h2>FM Range Too Low</h2>
           
            <p>
                <strong>Issue:</strong>  Short-distance signal.
            </p>
            <p><strong>Solution:</strong>  Add 10–20cm wire antenna on GPIO21; avoid metal surfaces.</p>
        </div>
        <div class="glass-card">
            <h2>WinSCP File Transfer Issues</h2>
           
            <p>
                <strong>Issue:</strong>  Cannot upload audio files.
            </p>
            <p><strong>Solution:</strong>  Enable SSH, confirm IP, use SFTP mode, verify login.</p>
        </div>



       

    
    </section>


    
  
<?php include "footer.php"; ?>