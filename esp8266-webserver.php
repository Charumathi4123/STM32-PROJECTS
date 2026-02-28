<?php include "header.php";?>
<div class="slider-container">
        <div class="slider-track">
            <!-- Slide 1: Using an <img> tag now -->
            <div class="slide">
                <img src="slider-images/slider30.png" alt="Person wearing VR goggles interacting with a futuristic interface.">
                </div>
                
            </div>
            </div>

 <h1 class="page-title">ESP8266 WEB SERVER WITH LED CONTROL</h1>
  </header>

  <main class="project-section">
    <!-- <h2 class="project-heading">📺 Build Your Own Android TV</h2> -->
    
    <h4 class="info-title">OBJECTIVE</h4>

    <p class="project-description">
The objective of an ESP8266 web server with LED control is to remotely turn an LED on or off through a web interface hosted by the ESP8266.
    </p>

    

    <h4 class="info-title">MODULES REQUIRED</h4>
    <ul class="info-list">
      <li>Node MCU</li>
      <li>Two LEDs</li>
      
      <li>Jumper wire</li>
      
     
    </ul>

    <h4 class="info-title">SCHEMATIC DIAGRAM</h4>
     <img src="images/schmatic24.png" alt="Push Button component">
     
    <h4 class="info-title">SCHEMATIC CONNECTION</h4>
   
    <ul class="info-list">
        <h6>Connect LEDs:</h6>  
      <li></li>
      <li>connect D1 in the ESP8266 module to LED 1 postive pin.</li>
      <li>connect D2 in the ESP8266 module to LED 2 postive pin.</li>
     <p><strong>*Note: The negative pin (LED) connects to GND in the built-in circuit, no additional connection needed.</strong></p>
      
    </ul>
   <h4 class="info-title">Arduino Code</h4>
  <div class="code-container">
    <div class="code-header">
      <span class="code-title">Arduino Code</span>
      <button class="copy-btn" onclick="copyCode()">📋 Copy</button>
    </div>

    <pre><code id="arduino-code">
#include (ESP8266WiFi.h)
// Replace with your network credentials
const char* ssid  = "xxxxxx";
const char* password = "xxxxxx";
// Set web server port number to 80
WiFiServer server(80);
// Variable to store the HTTP request
String header;
// Auxiliar variables to store the current output state
String output5State = "off";
String output4State = "off";
// Assign output variables to GPIO pins
const int output5 = 5;
const int output4 = 4;
// Current time
unsigned long currentTime = millis();
// Previous time
unsigned long previousTime = 0; 
// Define timeout time in milliseconds (example: 2000ms = 2s)
const long timeoutTime = 2000;
void setup() {
 Serial.begin(115200);
 // Initialize the output variables as outputs
 pinMode(output5, OUTPUT);
 pinMode(output4, OUTPUT);
 // Set outputs to LOW
 digitalWrite(output5, LOW);
 digitalWrite(output4, LOW);
 // Connect to Wi-Fi network with SSID and password
 Serial.print("Connecting to ");
 Serial.println(ssid);
 WiFi.begin(ssid, password);
 while (WiFi.status() != WL_CONNECTED) {
  delay(500);
  Serial.print(".");
 }
 // Print local IP address and start web server
 Serial.println("");
 Serial.println("WiFi connected.");
 Serial.println("IP address: ");
 Serial.println(WiFi.localIP());
 server.begin();
}
void loop(){
 WiFiClient client = server.available(); // Listen for incoming clients

 if (client) {              // If a new client connects,
  Serial.println("New Client.");     // print a message out in the serial port
  String currentLine = "";        // make a String to hold incoming data from the client
  currentTime = millis();
  previousTime = currentTime;
  while (client.connected() && currentTime - previousTime <= timeoutTime) { // loop while the client's connected
   currentTime = millis();     
   if (client.available()) {      // if there's bytes to read from the client,
    char c = client.read();      // read a byte, then
    Serial.write(c);          // print it out the serial monitor
    header += c;
    if (c == '\n') {          // if the byte is a newline character
     // if the current line is blank, you got two newline characters in a row.
     // that's the end of the client HTTP request, so send a response:
     if (currentLine.length() == 0) {
      // HTTP headers always start with a response code (e.g. HTTP/1.1 200 OK)
      // and a content-type so the client knows what's coming, then a blank line:
      client.println("HTTP/1.1 200 OK");
      client.println("Content-type:text/html");
      client.println("Connection: close");
      client.println();
      // turns the GPIOs on and off
      if (header.indexOf("GET /5/on") >= 0) {
       Serial.println("GPIO 5 on");
       output5State = "on";
       digitalWrite(output5, HIGH);
      } else if (header.indexOf("GET /5/off") >= 0) {
       Serial.println("GPIO 5 off");
       output5State = "off";
       digitalWrite(output5, LOW);
      } else if (header.indexOf("GET /4/on") >= 0) {
       Serial.println("GPIO 4 on");
       output4State = "on";
       digitalWrite(output4, HIGH);
      } else if (header.indexOf("GET /4/off") >= 0) {
       Serial.println("GPIO 4 off");
       output4State = "off";
       digitalWrite(output4, LOW);
      }


 </code></pre>
  </div>
  <h4 class="info-title">INSTRUCTIONS</h4>
    <ul class="info-list">
      <li>Connect the modules and components as per the schematic diagram.</li>
      <li>Upload the Arduino code into the Node MCU board.</li>
     
      <li>For the final demonstration, open any browser from a device that is connected to the same router that your ESP8266 is. Then, type the ESP8266 IP address and click Enter!</li>
      <li>To get ip address,click the rst button in NodeMCU module and check the serial monitor as set the baud rate 115200.</li>
      <li>You will get the following interface page.</li>
      <li>And access the control of the connected LED by it.</li>
      
    </ul>
       <div class="image-container">
                <img src="images/webserver-interface.png" alt="Schematic diagram showing an Arduino connected to an LED and a push button.">
            </div>
      <h4 class="info-title">WORKING</h4>
    <ul class="info-list"> 
      <li>The working of an ESP8266 web server with LED control involves the ESP8266 hosting a webpage. When a user accesses the webpage and clicks a button, the ESP8266 receives the command and toggles the LED on or off based on the user's input.
</li> 
      </u1>
         
    </ul>
 <h4 class="info-title">ESP8266 WEB SERVER WITH LED CONTROL</h4>
<ul class="info-list"></ul>

<section class="video-section">
  <div class="container">
    <div class="video-wrapper">
      <video id="irVideo" controls preload="none" poster="images/ir-thumbnail.jpg">
        <source src="videos/Project 24- ESP8266 WEBSERVER WITH LED CONTROL-VEED.mp4" type="video/mp4">
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