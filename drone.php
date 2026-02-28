<?php include "header.php";?>
<div class="slider-container">
        <div class="slider-track">
            <!-- Slide 1: Using an <img> tag now -->
            <div class="slide">
                <img src="slider-images/slider-drone5.png" alt="Person wearing VR goggles interacting with a futuristic interface.">
                </div>
                
            </div>
            </div>

       <main>
  <section id="drone-intro-section" class="drone-section">
    <div class="drone-container">

      <!-- Section Header -->
      <div class="drone-header">
        <h2 class="drone-title">The Drone - Introduction</h2>
        <p class="drone-description">
          A drone is an aerial vehicle that can receive remote commands from pilots on the ground 
          or rely on autonomous flight control software. They are primarily classified by their 
          level of human control.
        </p>
      </div>

      <!-- Semi-Autonomous Drones -->
      <div class="drone-layout">
        <div class="drone-text-block">
          <h3 class="drone-subtitle">Semi-Autonomous Drones</h3>
          <p>
            These UAVs (Unmanned Aerial Vehicles) require a pilot to be physically present at a ground station.
            They are operated using a Radio Control (RC) which sends signals to on-board receivers.
          </p>
          <ul>
            <li><strong>Civilian:</strong> Used for remote monitoring, aerial mapping, videography, agriculture, and search & rescue.</li>
            <li><strong>Military:</strong> Deployed in sensitive geographical areas and can extend to any terrain.</li>
          </ul>
          <p>
            Civilian drones are commonly used for aerial mapping, videography, agriculture, and transportation.
          </p>
          <p>
            Military drones are primarily deployed in sensitive geographical areas, extending beyond land to any terrain.
          </p>
        </div>

        <div class="drone-image-block">
          <img src="images/drone wifi.png" alt="Semi-Autonomous Drone System" class="drone-image">
        </div>
      </div>

      <!-- Autonomous Drones -->
      <div class="drone-layout drone-reverse">
        <div class="drone-text-block">
          <h3 class="drone-subtitle">Autonomous Drones</h3>
          <p>
            Autonomous drones are advanced UAVs that operate without direct human control.
            They use sophisticated algorithms and sensors for navigation and task execution.
          </p>
          <p>
            These drones assist in incident response and maintenance in remote areas,
            providing close-up visual and thermal observations without human intervention.
          </p>
          <p>
            They are ideal for inspecting power lines, wind turbines, and other large-scale
            infrastructure with precision and frequency.
          </p>
          <p>
            During natural disasters or emergencies, autonomous drones act as incident responders
            for real-time visual and thermal monitoring.
          </p>
        </div>

        <div class="drone-image-block">
          <img src="images/Automous wifi .png" alt="Autonomous Drone System" class="drone-image">
        </div>
      </div>
    </div>
  </section>
</main>
<main class="uav-main-container">

    <!-- UAV Classification Section -->
    <section id="classification" class="uav-section classification-block">
      <div class="uav-container">
        <div class="uav-header">
          <h2>Classification of UAVs</h2>
          <p>Unmanned Aerial Vehicles are broadly classified based on their size, range, flight platform, and application. This guide focuses on the micro UAV with rotary wings, common in civilian applications.</p>
        </div>

        <div class="uav-image-box">
          <img src="drone-images/classification of uav (1).png" alt="UAV Classification Chart">
        </div>

        <p>Unmanned Aerial Vehicles (UAVs) are broadly classified into <strong>four types, based on their size, range, motors, and the application.</strong></p>
        <p>Here, we focus on the micro UAV with rotary wings (four motors) with an ultra short range. The common application of this UAV is in the Civil application.</p>
      </div>
    </section>

    <!-- Flight Basics Section -->
    <section id="flight-basics" class="uav-section flight-info-block">
      <div class="uav-container">
        <div class="uav-header">
          <h2>The Science: Basics of Flight</h2>
          <p>Drones use brushless motors for propulsion and control. As blades push air down, the air pushes the drone up, creating LIFT. The faster the rotors spin, the greater the lift.</p>
        </div>

<div class="flightWrapper">

    <!-- Vertical Section -->
    <section class="movePanel moveVertical">
        <h2 class="panelTitle vTitle">Vertical Movement</h2>
        <p class="panelInfo"><strong>Hover :</strong>The outcome of a LIFT that raises the
UAV from the ground to a certain height.
It is a cancellation two forces. The
upward force that is greater than the
weight of the UAV. The speed of the
rotors, determines the quantity of LIFT.</p>
<p class="panelInfo"><strong>Climb : </strong>The UPWARD movement of the
UAV as it Hovers in the air, and
the speed of the climb is
dependent on the speed of the
rotors (motors). The direction of
climb is in the vertical axis.</p>
<p class="panelInfo"><strong>Descend : </strong>The DOWNWARD movement of the UAV as it Hovers in the air, and the speed
of the descend is dependent on the speed of the rotors (motors). The
direction of climb is in the vertical axis.</p>


        <ul class="pointList">
            <li><b>Hover:</b> Lift = weight</li>
            <li><b>Climb:</b> Lift > weight</li>
            <li><b>Descend:</b> Lift < weight</li>
        </ul>

        <div class="visualGroup">
            <img src="drone-images/hover.png" class="visualItem">
            <img src="drone-images/climb.png" class="visualItem">
            <img src="drone-images/descend.png" class="visualItem">
        </div>
    </section>

    <!-- Horizontal Section -->
    <section class="movePanel moveHorizontal">
        <h2 class="panelTitle hTitle">Horizontal Movement</h2>
        <p class="panelInfo"><strong>Forwards / Backwards</strong>The APPROACH movement of the
UAV as it Hovers in the air, and the
speed of the descend is approach
on the speed of the rotors (motors).
The direction of
Forward/BACKWARD is Horizontal.</p>
<p class="panelInfo"><strong>Sideways</strong>The movement of the UAV as it Hovers in the air, and the speed of the
descend is approach on the speed of the rotors (motors). The direction of
Sideways is Horizontal.</p>

        <ul class="pointList">
            <li><b>Pitch:</b> Forward/Backward movement</li>
            <li><b>Roll:</b> Left/Right movement</li>
        </ul>

        <div class="visualGroup">
            <img src="drone-images/pitch forward.png" class="visualItem">
            <img src="drone-images /pitch-backward.png" class="visualItem">
            <img src="drone-images/Roll-left.png" class="visualItem">
            <img src="drone-images/Roll-right.png" class="visualItem">
        </div>
    

</div>
</div>
</section>
</main>



 <?php include "footer.php"; ?>