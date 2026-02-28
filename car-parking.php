<?php include "header.php";?>
<div class="slider-container">
        <div class="slider-track">
            <!-- Slide 1: Using an <img> tag now -->
            <div class="slide">
                <img src="slider-images/slider24.png" alt="Person wearing VR goggles interacting with a futuristic interface.">
                </div>
                
            </div>
            </div>

 <h1 class="page-title">CAR REVERSE PARKING ALERT SYSTEM</h1>
  </header>

  <main class="project-section">
    <!-- <h2 class="project-heading">📺 Build Your Own Android TV</h2> -->
    
    <h4 class="info-title">OBJECTIVE</h4>

    <p class="project-description">
The aim of this project prototype is it to design an reverse parking system which will assist the driver to make parking easily.
    </p>

    

    <h4 class="info-title">MODULES REQUIRED</h4>
    <ul class="info-list">
      <li>Arduino Nano</li>
      <li>Ultrasonic Sensor</li>
      <li>Buzzer</li>
      <li>Jumper wire</li> 
      
     
    </ul>

    <h4 class="info-title">SCHEMATIC DIAGRAM</h4>
     <img src="images/schmatic17.png" alt="Push Button component">
     
    <h4 class="info-title">SCHEMATIC CONNECTION</h4>
   
    <ul class="info-list">
        <h6>Connect Ultrasonic sensor:</h6>  
      <li></li>
      <li>Trig pin to Arduino Nano pin D12.</li>
      
      <li>Echo pin to Arduino Nano Pin D11.</li>
      <h6>Connect Buzzer:</h6>
      <li>Connect the first pin(positive) on the buzzer to Arduino Nano pin D5.</li>
    </ul>

   <h4 class="info-title">Arduino Code</h4>
  <div class="code-container">
    <div class="code-header">
      <span class="code-title">Arduino Code</span>
      <button class="copy-btn" onclick="copyCode()">📋 Copy</button>
    </div>

    <pre><code id="arduino-code">
#define trigPin 12
#define echoPin 11
int Buzzer= 5;
int duration, distance;

void setup() {
  Serial.begin (9600);

  pinMode(trigPin, OUTPUT);
  pinMode(echoPin, INPUT);
  pinMode(Buzzer, OUTPUT);

}

void loop() {

  digitalWrite(trigPin, HIGH);
  delayMicroseconds(1000);
  digitalWrite(trigPin, LOW);
  duration = pulseIn(echoPin, HIGH);
  distance = (duration / 2) / 29.1;

  if (distance <= 60 && distance >= 50)
  {
    Serial.println("object detected \n");
    Serial.print("distance= ");
    analogWrite(Buzzer, 0);
    delay (500) ;
    analogWrite(Buzzer, 255);
     //tone(5,440,1000);
    delay (500) ;

  }

  else if (distance <= 50 && distance >= 40)
  {
    Serial.println("object detected \n");
    Serial.print("distance= ");
    analogWrite(Buzzer, 0);
    delay (450) ;
    analogWrite(Buzzer, 255);
     //tone(5,440,1000);
    delay (450) ;

  }

  else if (distance <= 40 && distance >= 30)
  {
    Serial.println("object detected \n");
    Serial.print("distance= ");
    analogWrite(Buzzer, 0);
    delay (250) ;
    analogWrite(Buzzer, 255);
    // tone(5,440,1000);
    delay (250) ;

  }
  else if (distance <= 30 && distance >= 20)
  {
    Serial.println("object detected \n");
    Serial.print("distance= ");
    analogWrite(Buzzer, 0);
    delay (150) ;
    analogWrite(Buzzer, 255);
     //tone(5,440,1000);
    delay (150) ;

  }

  else if (distance <= 20 && distance >= 10)
  {
    Serial.println("object detected \n");
    Serial.print("distance= ");
    analogWrite(Buzzer, 0);
    delay (100) ;
    analogWrite(Buzzer, 255);
     //tone(5,440,1000);
    delay (100) ;

  }

  else if (distance <= 10 && distance > 5)
  {
    Serial.println("object detected \n");
    Serial.print("distance= ");
    analogWrite(Buzzer, 0);
    delay (50) ;
    analogWrite(Buzzer, 255);
     //tone(5,440,1000);
    delay (50) ;

  }

  else if (distance <= 5 && distance >= 1)
  {
    Serial.println("object detected \n");
    Serial.print("distance= ");
    analogWrite(Buzzer, 0);
    delay (10) ;
    analogWrite(Buzzer, 255);
     //tone(5,440,1000);
    delay (10) ;

  }
  else
    Serial.println("object detected \n");
  Serial.print("distance= ");
  Serial.print(distance);
  analogWrite(Buzzer, 255);
   //tone(5,440,1000);
  {
  }
}
 </code></pre>
  </div>
  <h4 class="info-title">INSTRUCTIONS</h4>
    <ul class="info-list">
      <li>Connect the modules and components as per the schematic diagram.</li>
      <li>Upload the Arduino code into the Arduino board.</li>
     
      <li>Check the reverse car parking safety mechanism, noting that the buzzer tone changes with the obstacle distance.</li>
      
    </ul>
      <h4 class="info-title">WORKING</h4>
    <ul class="info-list"> 
      <li>The Arduino Nano reads distance data from the ultrasonic sensor and activates the buzzer with increasing frequency as the car gets closer to an obstacle.</li> 
      </u1>
     
      
      
      
    </ul>
 <h4 class="info-title">CAR REVERSE PARKING ALERT SYSTEM</h4>
<ul class="info-list"></ul>

<section class="video-section">
  <div class="container">
    <div class="video-wrapper">
      <video id="irVideo" controls preload="none" poster="images/ir-thumbnail.jpg">
        <source src="videos/Project-17-Car-reverse-parking-alert-system-VEED.mp4" type="video/mp4">
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