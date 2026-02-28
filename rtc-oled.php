<?php include "header.php";?>
<div class="slider-container">
        <div class="slider-track">
            <!-- Slide 1: Using an <img> tag now -->
            <div class="slide">
                <img src="slider-images/slider19.png" alt="Person wearing VR goggles interacting with a futuristic interface.">
                </div>
                
            </div>
            </div>

 <h1 class="page-title">RTC-OLED-CLOCK</h1>
  </header>

  <main class="project-section">
    <!-- <h2 class="project-heading">📺 Build Your Own Android TV</h2> -->
    
    <h4 class="info-title">OBJECTIVE</h4>

    <p class="project-description">
   To initialize the RTC module, display time and date on an LCD, and update the clock every second.
    </p>

    

    <h4 class="info-title">MODULES REQUIRED</h4>
    <ul class="info-list">
      <li>Arduino UNO</li>
      <li>RTC Module</li>
      <li>OLED Display</li>
      <li>Jumper wire</li>
      
      
     
    </ul>

    <h4 class="info-title">SCHEMATIC DIAGRAM</h4>
     <img src="images/schmatic11.png" alt="Push Button component">
     
    <h4 class="info-title">SCHEMATIC CONNECTION</h4>
   
    <ul class="info-list">
        <h6>Connect Rtc Module:</h6>  
      <li>Connect the CLK pin on the RTC to Arduino pin SCL.</li>
      <li>Connect the DAT pin on the RTC to Arduino Pin SDA</li>
      <h6>Connect OLED :</h6> 
      <li>Connect the SCL pin on the OLED Display to Arduino pin A5.</li>
      <li>Connect the SDA pin on the OLED Display to Arduino pin A4.</li>
    
    
    
      
     
      
    </ul>
   <h4 class="info-title">Arduino Code</h4>
  <div class="code-container">
    <div class="code-header">
      <span class="code-title">Arduino Code</span>
      <button class="copy-btn" onclick="copyCode()">📋 Copy</button>
    </div>

    <pre><code id="arduino-code">
#include (Wire.h)
#include (Adafruit_SSD1306.h)
#include "RTClib.h"
//#include "DS1307RTC.h"
#define SCREEN_WIDTH 128 // OLED display width, in pixels
#define SCREEN_HEIGHT 64 // OLED display height, in pixels
RTC_DS1307 rtc;
 
char daysOfTheWeek[7][12] = {"Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"};
 
// Declaration for an SSD1306 display connected to I2C (SDA, SCL pins)
Adafruit_SSD1306 display(SCREEN_WIDTH, SCREEN_HEIGHT, &Wire, -1);
void setup () 
{
  Serial.begin(9600);
  delay(3000); // wait for console opening
 
 if(!display.begin(SSD1306_SWITCHCAPVCC, 0x3C)) { // Address 0x3D for 128x64
    Serial.println(F("SSD1306 allocation failed"));
    for(;;);
  }
  if (! rtc.begin()) {
    Serial.println("Couldn't find RTC");
    while (1);
  }
 
  // if (rtc.lostPower()) {
  //   Serial.println("RTC lost power, lets set the time!");
   
  // Comment out below lines once you set the date & time.
    // Following line sets the RTC to the date & time this sketch was compiled
   rtc.adjust(DateTime(F(__DATE__), F(__TIME__)));
    //rtc.adjust(DateTime(2024, 06, 15, 04, 35, 20));
    // Following line sets the RTC with an explicit date & time
    // for example to set January 27 2017 at 12:56 you would call:
    // rtc.adjust(DateTime(2017, 1, 27, 12, 56, 0));
  //}
 
   display.display();
 delay(2);
 display.clearDisplay();
  
  
display.clearDisplay();
display.setTextColor(WHITE);
//display.startscrollright(0x00, 0x0F);
display.setTextSize(2);
display.setCursor(0,5);
display.print("  Clock ");
display.display();
delay(3000);
}
 
void loop () 
{
    DateTime now = rtc.now();
     
    Serial.println("Current Date & Time: ");
    Serial.print(now.year(), DEC);
    Serial.print('/');
    Serial.print(now.month(), DEC);
    Serial.print('/');
    Serial.print(now.day(), DEC);
    Serial.print(" (");
    Serial.print(daysOfTheWeek[now.dayOfTheWeek()]);
    Serial.print(") ");
    Serial.print(now.hour(), DEC);
    Serial.print(':');
    Serial.print(now.minute(), DEC);
    Serial.print(':');
    Serial.print(now.second(), DEC);
    Serial.println();
 
    display.clearDisplay();
    display.setTextSize(2);
    display.setCursor(75,0);
    display.println(now.second(), DEC);
    display.setTextSize(2);
    display.setCursor(25,0);
    display.println(":");
      
    display.setTextSize(2);
    display.setCursor(65,0);
    display.println(":");
      
    display.setTextSize(2);
    display.setCursor(40,0);
    display.println(now.minute(), DEC);
      
    display.setTextSize(2);
    display.setCursor(0,0);
    display.println(now.hour(), DEC);
      
    display.setTextSize(2);
    display.setCursor(0,20);
    display.println(now.day(), DEC);
      
    display.setTextSize(2);
    display.setCursor(25,20);
    display.println("/");
      
    display.setTextSize(2);
    display.setCursor(40,20);
    display.println(now.month(), DEC);
      
    display.setTextSize(2);
    display.setCursor(55,20);
    display.println("/");
      
    display.setTextSize(2);
    display.setCursor(70,20);
    display.println(now.year(), DEC);
      
    display.setTextSize(2);
    display.setCursor(0,40);
    display.print(daysOfTheWeek[now.dayOfTheWeek()]);
      
    display.display(); 
         
    Serial.println();
    delay(1000);
}
 </code></pre>
  </div>
  <h4 class="info-title">INSTRUCTIONS</h4>
    <ul class="info-list">
      <li>Connect the modules and components as per the schematic diagram.</li>
      <li>Download and install Adafruit SSD1306 and RTCLib package.</li>
     
      <li>Upload the Arduino code into the Arduino board.</li>
      <li>Set the time on RTC, display on OLED, and update via Arduino.</li>

      
      
      
    </ul>
      <h4 class="info-title">WORKING</h4>
    <ul class="info-list">
        
      <li>An RTC-OLED clock with Arduino displays the current time from the RTC module on the OLED screen, updating continuously.
</li>
   
       
      </u1>
     
      
      
      
    </ul>
    <h4 class="info-title">RTC-OLED-CLOCK</h4>
<ul class="info-list"></ul>

<section class="video-section">
  <div class="container">
    <div class="video-wrapper">
      <video id="irVideo" controls preload="none" poster="images/ir-thumbnail.jpg">
        <source src="videos/project-11-rtc-oled-clock-new-subtitle-VEED.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>
  </div>
</section>


  <script>
    function copyCode() {
      const code = document.getElementById("arduino-code").innerText;
      navigator.clipboard.writeText(code);
      alert("Code copied to clipboard!");
    }
  </script>
  </main>
 

 <?php include "footer.php"; ?>