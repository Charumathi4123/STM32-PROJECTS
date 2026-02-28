<?php include "header.php";?>
<div class="slider-container">
        <div class="slider-track">
            <!-- Slide 1: Using an <img> tag now -->
            <div class="slide">
                <img src="slider-images/slider31.png" alt="Person wearing VR goggles interacting with a futuristic interface.">
                </div>
                
            </div>
            </div>

 <h1 class="page-title">RFID ATTENDANCE SYSTEM USING NODEMCU ESP8266 AND GOOGLE SHEETS</h1>
  </header>

  <main class="project-section">
    <!-- <h2 class="project-heading">📺 Build Your Own Android TV</h2> -->
    
    <h4 class="info-title">OBJECTIVE</h4>

    <p class="project-description">
To create an RFID attendance system with NodeMCU and Google Spreadsheet captures and stores attendance data in real- time by scanning RFID tags.
    </p>

    

    <h4 class="info-title">MODULES REQUIRED</h4>
    <ul class="info-list">
      <li>Node MCU</li>
      <li>RFID Card & Tag</li>
      
      <li>LCD Display</li>
      <li>Jumper wire</li>
      
     
    </ul>

    <h4 class="info-title">SCHEMATIC DIAGRAM</h4>
     <img src="images/schmatic25.png" alt="Push Button component">
     
    <h4 class="info-title">SCHEMATIC CONNECTION</h4>
   
    <ul class="info-list">
        <h6>Connect RFID to Node MCU:</h6>  
      <li></li>
      <li>Connect MISO, MOSI pin in the RFID module to the pin D6 and D7 on the ESP8266</li>
      <li>Connect SDA and SCK pin in the module to the pin D4 and D5 on the ESP8266.</li>
      <li>Connect RST and GND to ESP8266 D3 and GND leads.</li>
      <li>connect 3.3v to ESP8266 3.3v.</li>
     <h6>Connect LCD to Node MCU:</h6>
     <li>Connect the SDA and SCL lead of LCD to D2 and D1 ESP8266.</li>
      
    </ul>
   
<div class="section-title">ARDUINO CODE</div>

<div class="accordion">

  <!-- 1 -->
  <div class="acc-item">
    <div class="acc-header">
      <span class="icon">+</span> RFID_Attendance_GoogleSheets
    </div>
    <div class="acc-body">
      <button class="copy-btn" onclick="copyCode('code1')">Copy Code</button>
      <pre id="code1" class="code-box">
#include (Arduino.h)
#include (ESP8266WiFi.h)
#include (SPI.h)
#include (MFRC522.h)
#include (HTTPSRedirect.h)

#include(Wire.h)
#include(LiquidCrystal_I2C.h)
LiquidCrystal_I2C lcd(0x27, 16, 2);
//---------------------------------------------------------------------------------------------------------
// Enter Google Script Deployment ID:

const char *GScriptId = "xxxxxx";
//---------------------------------------------------------------------------------------------------------
// Enter network credentials:
const char* ssid     = "xxxxxx";
const char* password = "xxxxx";
//---------------------------------------------------------------------------------------------------------
// Enter command (insert_row or append_row) and your Google Sheets sheet name (default is Sheet1):
String payload_base =  "{\"command\": \"insert_row\", \"sheet_name\": \"Sheet1\", \"values\": ";
String payload = "";
//---------------------------------------------------------------------------------------------------------
// Google Sheets setup (do not edit)
const char* host        = "script.google.com";
const int   httpsPort   = 443;
const char* fingerprint = "";
String url = String("/macros/s/") + GScriptId + "/exec";
HTTPSRedirect* client = nullptr;
//------------------------------------------------------------
// Declare variables that will be published to Google Sheets
String student_id;
//------------------------------------------------------------
int blocks[] = {4,5,6,8,9};
#define total_blocks  (sizeof(blocks) / sizeof(blocks[0]))
//------------------------------------------------------------
#define RST_PIN  0  //D3
#define SS_PIN   2  //D4
#define BUZZER   4  //D2
//------------------------------------------------------------
MFRC522 mfrc522(SS_PIN, RST_PIN);
MFRC522::MIFARE_Key key;  
MFRC522::StatusCode status;
//------------------------------------------------------------
/* Be aware of Sector Trailer Blocks */
int blockNum = 2;  
/* Create another array to read data from Block */
/* Legthn of buffer should be 2 Bytes more than the size of Block (16 Bytes) */
byte bufferLen = 18;
byte readBlockData[18];
//------------------------------------------------------------

/****************************************************************************************************
 * setup Function
****************************************************************************************************/
void setup() {
  //----------------------------------------------------------
  Serial.begin(9600);        
  delay(10);
  Serial.println('\n');
  //----------------------------------------------------------
  SPI.begin();
  //----------------------------------------------------------
  //initialize lcd screen
  lcd.init();
  // turn on the backlight
  lcd.backlight();
  lcd.clear();
  lcd.setCursor(0,0); //col=0 row=0
  lcd.print("Connecting to");
  lcd.setCursor(0,1); //col=0 row=0
  lcd.print("WiFi...");
  //----------------------------------------------------------
  // Connect to WiFi
  WiFi.begin(ssid, password);             
  Serial.print("Connecting to ");
  Serial.print(ssid); Serial.println(" ...");
  
  while (WiFi.status() != WL_CONNECTED) {
    delay(1000);
    Serial.print(".");
  }
  Serial.println('\n');
  Serial.println("Connection established!");  
  Serial.print("IP address:\t");
  Serial.println(WiFi.localIP());
  //----------------------------------------------------------
  // Use HTTPSRedirect class to create a new TLS connection
  client = new HTTPSRedirect(httpsPort);
  client->setInsecure();
  client->setPrintResponseBody(true);
  client->setContentTypeHeader("application/json");
  //----------------------------------------------------------
  lcd.clear();
  lcd.setCursor(0,0); //col=0 row=0
  lcd.print("Connecting to");
  lcd.setCursor(0,1); //col=0 row=0
  lcd.print("Google ");
  delay(5000);
  //----------------------------------------------------------
  Serial.print("Connecting to ");
  Serial.println(host);
  //----------------------------------------------------------
  // Try to connect for a maximum of 5 times
  bool flag = false;
  for(int i=0; i<5; i++){ 
    int retval = client->connect(host, httpsPort);
    //*************************************************
    if (retval == 1){
      flag = true;
      String msg = "Connected. OK";
      Serial.println(msg);
      lcd.clear();
      lcd.setCursor(0,0); //col=0 row=0
      lcd.print(msg);
      delay(2000);
      break;
    }
    //*************************************************
    else
      Serial.println("Connection failed. Retrying...");
    //*************************************************
  }
  //----------------------------------------------------------
  if (!flag){
    //____________________________________________
    lcd.clear();
    lcd.setCursor(0,0); //col=0 row=0
    lcd.print("Connection fail");
    //____________________________________________
    Serial.print("Could not connect to server: ");
    Serial.println(host);
    delay(5000);
    return;
    //____________________________________________
  }
  //----------------------------------------------------------
  delete client;    // delete HTTPSRedirect object
  client = nullptr; // delete HTTPSRedirect object
  //----------------------------------------------------------
}

/****************************************************************************************************
 * loop Function
****************************************************************************************************/
void loop() {
  //----------------------------------------------------------------
  static bool flag = false;
  if (!flag){
    client = new HTTPSRedirect(httpsPort);
    client->setInsecure();
    flag = true;
    client->setPrintResponseBody(true);
    client->setContentTypeHeader("application/json");
  }
  if (client != nullptr){
    if (!client->connected())
      {client->connect(host, httpsPort);}
  }
  else{Serial.println("Error creating client object!");}
  //----------------------------------------------------------------
  lcd.clear();
  lcd.setCursor(0,0); //col=0 row=0
  lcd.print("Scan your Tag");
  
  /* Initialize MFRC522 Module */
  mfrc522.PCD_Init();
  /* Look for new cards */
  /* Reset the loop if no new card is present on RC522 Reader */
  if ( ! mfrc522.PICC_IsNewCardPresent()) {return;}
  /* Select one of the cards */
  if ( ! mfrc522.PICC_ReadCardSerial()) {return;}
  /* Read data from the same block */
  Serial.println();
  Serial.println(F("Reading last data from RFID..."));  
  //----------------------------------------------------------------
  String values = "", data;
  /*
  //creating payload - method 1
  //----------------------------------------------------------------
  ReadDataFromBlock(blocks[0], readBlockData); //student id
  data = String((char*)readBlockData); data.trim();
  student_id = data;
  //----------------------------------------------------------------
  ReadDataFromBlock(blocks[1], readBlockData); //first name
  data = String((char*)readBlockData); data.trim();
  first_name = data;
  //----------------------------------------------------------------
  ReadDataFromBlock(blocks[2], readBlockData); //last name
  data = String((char*)readBlockData); data.trim();
  last_name = data;
  //----------------------------------------------------------------
  ReadDataFromBlock(blocks[3], readBlockData); //phone number
  data = String((char*)readBlockData); data.trim();
  phone_number = data;
  //----------------------------------------------------------------
  ReadDataFromBlock(blocks[4], readBlockData); //address
  data = String((char*)readBlockData); data.trim();
  address = data; data = "";
  //----------------------------------------------------------------
  values = "\"" + student_id + ",";
  values += first_name + ",";
  values += last_name + ",";
  values += phone_number + ",";
  values += address + "\"}";
  //----------------------------------------------------------------*/
  //creating payload - method 2 - More efficient
  for (byte i = 0; i < total_blocks; i++) {
    ReadDataFromBlock(blocks[i], readBlockData);
    //*************************************************
    if(i == 0){
      data = String((char*)readBlockData);
      data.trim();
      student_id = data;
      values = "\"" + data + ",";
    }
    //*************************************************
    else if(i == total_blocks-1){
      data = String((char*)readBlockData);
      data.trim();
      values += data + "\"}";
    }
    //*************************************************
    else{
      data = String((char*)readBlockData);
      data.trim();
      values += data + ",";
    }
  }
  //----------------------------------------------------------------
  // Create json object string to send to Google Sheets
  // values = "\"" + value0 + "," + value1 + "," + value2 + "\"}"
  payload = payload_base + values;
  //----------------------------------------------------------------
  lcd.clear();
  lcd.setCursor(0,0); //col=0 row=0
  lcd.print("Publishing Data");
  lcd.setCursor(0,1); //col=0 row=0
  lcd.print("Please Wait...");
  //----------------------------------------------------------------
  // Publish data to Google Sheets
  Serial.println("Publishing data...");
  Serial.println(payload);
  if(client->POST(url, host, payload)){ 
    // do stuff here if publish was successful
    lcd.clear();
    lcd.setCursor(0,0); //col=0 row=0
    lcd.print("Student ID: "+student_id);
    lcd.setCursor(0,1); //col=0 row=0
    lcd.print("Present");
  }
  //----------------------------------------------------------------
  else{
    // do stuff here if publish was not successful
    Serial.println("Error while connecting");
    lcd.clear();
    lcd.setCursor(0,0); //col=0 row=0
    lcd.print("Failed.");
    lcd.setCursor(0,1); //col=0 row=0
    lcd.print("Try Again");
  }
  //----------------------------------------------------------------
  // a delay of several seconds is required before publishing again    
  delay(5000);
}


/****************************************************************************************************
 * 
****************************************************************************************************/
/****************************************************************************************************
 * ReadDataFromBlock() function
 ****************************************************************************************************/
void ReadDataFromBlock(int blockNum, byte readBlockData[]) 
{ 
  //----------------------------------------------------------------------------
  /* Prepare the ksy for authentication */
  /* All keys are set to FFFFFFFFFFFFh at chip delivery from the factory */
  for (byte i = 0; i < 6; i++) {
    key.keyByte[i] = 0xFF;
  }
  //----------------------------------------------------------------------------
  /* Authenticating the desired data block for Read access using Key A */
  status = mfrc522.PCD_Authenticate(MFRC522::PICC_CMD_MF_AUTH_KEY_A, blockNum, &key, &(mfrc522.uid));
  //----------------------------------------------------------------------------s
  if (status != MFRC522::STATUS_OK){
     Serial.print("Authentication failed for Read: ");
     Serial.println(mfrc522.GetStatusCodeName(status));
     return;
  }
  //----------------------------------------------------------------------------
  else {
    Serial.println("Authentication success");
  }
  //----------------------------------------------------------------------------
  /* Reading data from the Block */
  status = mfrc522.MIFARE_Read(blockNum, readBlockData, &bufferLen);
  if (status != MFRC522::STATUS_OK) {
    Serial.print("Reading failed: ");
    Serial.println(mfrc522.GetStatusCodeName(status));
    return;
  }
  //----------------------------------------------------------------------------
  else {
    readBlockData[16] = ' ';
    readBlockData[17] = ' ';
    Serial.println("Block was read successfully");  
  }
  //----------------------------------------------------------------------------
}
      </pre>
    </div>
  </div>

  <!-- 2 -->
  <div class="acc-item">
    <div class="acc-header">
      <span class="icon">+</span> RFID_Card_Name_Tag
    </div>
    <div class="acc-body">
      <button class="copy-btn" onclick="copyCode('code2')">Copy Code</button>
      <pre id="code2" class="code-box">
#include (SPI.h)
#include (MFRC522.h)
//--------------------------------------------------
//GPIO 0 --> D3
//GPIO 2 --> D4
const uint8_t RST_PIN = D3;
const uint8_t SS_PIN = D4;
//--------------------------------------------------
MFRC522 mfrc522(SS_PIN, RST_PIN);
MFRC522::MIFARE_Key key;
//--------------------------------------------------
/* Be aware of Sector Trailer Blocks */
int blockNum = 4;
/* Create array to read data from Block */
/* Length of buffer should be 4 Bytes
more than the size of Block (16 Bytes) */
byte bufferLen = 18;
byte readBlockData[18];
//--------------------------------------------------
MFRC522::StatusCode status;
//--------------------------------------------------
void setup()
{
  //------------------------------------------------------
  //Initialize serial communications with PC
  Serial.begin(9600);
  //------------------------------------------------------
  //Initialize SPI bus
  SPI.begin();
  //------------------------------------------------------
  //Initialize MFRC522 Module
  mfrc522.PCD_Init();
  Serial.println("Scan a MIFARE 1K Tag to write data...");
  //------------------------------------------------------
}
/****************************************************************************************************
 * loop() function
 ****************************************************************************************************/
void loop()
{
  //------------------------------------------------------------------------------
  /* Prepare the ksy for authentication */
  /* All keys are set to FFFFFFFFFFFFh at chip delivery from the factory */
  for (byte i = 0; i < 6; i++){
    key.keyByte[i] = 0xFF;
  }
  //------------------------------------------------------------------------------
  /* Look for new cards */
  /* Reset the loop if no new card is present on RC522 Reader */
  if ( ! mfrc522.PICC_IsNewCardPresent()){return;}
  //------------------------------------------------------------------------------
  /* Select one of the cards */
  if ( ! mfrc522.PICC_ReadCardSerial()) {return;}
  //------------------------------------------------------------------------------
  Serial.print("\n");
  Serial.println("**Card Detected**");
  /* Print UID of the Card */
  Serial.print(F("Card UID:"));
  for (byte i = 0; i < mfrc522.uid.size; i++){
    Serial.print(mfrc522.uid.uidByte[i] < 0x10 ? " 0" : " ");
    Serial.print(mfrc522.uid.uidByte[i], HEX);
  }
  Serial.print("\n");
  /* Print type of card (for example, MIFARE 1K) */
  Serial.print(F("PICC type: "));
  MFRC522::PICC_Type piccType = mfrc522.PICC_GetType(mfrc522.uid.sak);
  Serial.println(mfrc522.PICC_GetTypeName(piccType));
  //------------------------------------------------------------------------------
  byte buffer[18];
  byte len;
  //wait until 20 seconds for input from serial
  Serial.setTimeout(20000L);
  //MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
  Serial.println(F("---------------------------------------"));
  Serial.println(F("Enter Student ID, ending with #"));
  len = Serial.readBytesUntil('#', (char *) buffer, 16);
  //add empty spaces to the remaining bytes of buffer
  for (byte i = len; i < 16; i++) buffer[i] = ' ';
  blockNum = 4;
  WriteDataToBlock(blockNum, buffer);
  ReadDataFromBlock(blockNum, readBlockData);
  dumpSerial(blockNum, readBlockData);
  //MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
  Serial.println(F("---------------------------------------"));
  Serial.println(F("Enter First Name, ending with #"));
  len = Serial.readBytesUntil('#', (char *) buffer, 16);
  for (byte i = len; i < 16; i++) buffer[i] = ' ';
  blockNum = 5;
  WriteDataToBlock(blockNum, buffer);
  ReadDataFromBlock(blockNum, readBlockData);
  dumpSerial(blockNum, readBlockData);
  //MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
  Serial.println(F("---------------------------------------"));
  Serial.println(F("Enter Last Name, ending with #"));
  len = Serial.readBytesUntil('#', (char *) buffer, 16);
  for (byte i = len; i < 16; i++) buffer[i] = ' ';
  blockNum = 6;
  WriteDataToBlock(blockNum, buffer);
  ReadDataFromBlock(blockNum, readBlockData);
  dumpSerial(blockNum, readBlockData);
  //MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
  Serial.println(F("---------------------------------------"));
  Serial.println(F("Enter Phone Number, ending with #"));
  len = Serial.readBytesUntil('#', (char *) buffer, 16);
  for (byte i = len; i < 16; i++) buffer[i] = ' ';
  blockNum = 8;
  WriteDataToBlock(blockNum, buffer);
  ReadDataFromBlock(blockNum, readBlockData);
  dumpSerial(blockNum, readBlockData);
  Serial.println(F("---------------------------------------"));
  Serial.println(F("Enter Address, ending with #"));
  len = Serial.readBytesUntil('#', (char *) buffer, 16);
  for (byte i = len; i < 16; i++) buffer[i] = ' ';
  blockNum = 9;
  WriteDataToBlock(blockNum, buffer);
  ReadDataFromBlock(blockNum, readBlockData);
  dumpSerial(blockNum, readBlockData);
}
/****************************************************************************************************
 * Writ() function
 ****************************************************************************************************/
void WriteDataToBlock(int blockNum, byte blockData[])
{
   //Serial.print("Writing data on block ");
   //Serial.println(blockNum);
  //------------------------------------------------------------------------------
  /* Authenticating the desired data block for write access using Key A */
  status = mfrc522.PCD_Authenticate(MFRC522::PICC_CMD_MF_AUTH_KEY_A, blockNum, &key, &(mfrc522.uid));
  if (status != MFRC522::STATUS_OK){
    Serial.print("Authentication failed for Write: ");
    Serial.println(mfrc522.GetStatusCodeName(status));
    return;
  }
  //------------------------------------------------------------------------------
  else {
    //Serial.print("Authentication OK - ");
  }
  //------------------------------------------------------------------------------
  /* Write data to the block */
  status = mfrc522.MIFARE_Write(blockNum, blockData, 16);
  if (status != MFRC522::STATUS_OK) {
    Serial.print("Writing to Block failed: ");
    Serial.println(mfrc522.GetStatusCodeName(status));
    return;
  }
  else {
    //Serial.println("Write OK");
  }
  //------------------------------------------------------------------------------
}
/****************************************************************************************************
 * ReadDataFromBlock() function
 ****************************************************************************************************/
void ReadDataFromBlock(int blockNum, byte readBlockData[])
{
   //Serial.print("Reading data from block ");
   //Serial.println(blockNum);
  //----------------------------------------------------------------------------
  /* Prepare the ksy for authentication */
  /* All keys are set to FFFFFFFFFFFFh at chip delivery from the factory */
  for (byte i = 0; i < 6; i++) {
    key.keyByte[i] = 0xFF;
  }
  //------------------------------------------------------------------------------
  /* Authenticating the desired data block for Read access using Key A */
  status = mfrc522.PCD_Authenticate(MFRC522::PICC_CMD_MF_AUTH_KEY_A, blockNum, &key, &(mfrc522.uid));
  //------------------------------------------------------------------------------
  if (status != MFRC522::STATUS_OK){
   Serial.print("Authentication failed for Read: ");
   Serial.println(mfrc522.GetStatusCodeName(status));
   return;
  }
  else {
    //Serial.print("Authentication OK - ");
  }
  //------------------------------------------------------------------------------
  /* Reading data from the Block */
  status = mfrc522.MIFARE_Read(blockNum, readBlockData, &bufferLen);
  if (status != MFRC522::STATUS_OK){
    Serial.print("Reading failed: ");
    Serial.println(mfrc522.GetStatusCodeName(status));
    return;
  }
  else {
    //readBlockData[16] = ' ';
    //readBlockData[17] = ' ';
    //Serial.println("Read OK");  
  }
  //------------------------------------------------------------------------------
}
/****************************************************************************************************
 * dumpSerial() function
 ****************************************************************************************************/
void dumpSerial(int blockNum, byte blockData[])
{
  Serial.print("\n");
  Serial.print("Data saved on block");
  Serial.print(blockNum);
  Serial.print(": ");
  for (int j=0 ; j<16 ; j++){
    Serial.write(readBlockData[j]);
  }
  Serial.print("\n");
  //Empty readBlockData array
  for( int i = 0; i < sizeof(readBlockData);  ++i )
   readBlockData[i] = (char)0; //empty space
}
</pre>
    </div>
  </div>

  <!-- 3 -->
  <div class="acc-item">
    <div class="acc-header">
      <span class="icon">+</span> Script
    </div>
    <div class="acc-body">
      <button class="copy-btn" onclick="copyCode('code3')">Copy Code</button>
      <pre id="code3" class="code-box">

 // Enter Spreadsheet ID here
var SS = SpreadsheetApp.openById('xxxxxxxx');
var timezone = "GMT+05:30";
var hours = 0;
var str = "";
function doPost(e) {
  var parsedData;
  var result = {};
  try {
    parsedData = JSON.parse(e.postData.contents);
  }
  catch(f){
    return ContentService.createTextOutput("Error in parsing request body: " + f.message);
  }
  if (parsedData !== undefined){
    var flag = parsedData.format;
    if (flag === undefined){
      flag = 0;
    }
    var sheet = SS.getSheetByName(parsedData.sheet_name); // sheet name to publish data to is specified in Arduino code
    var dataArr = parsedData.values.split(","); // creates an array of the values to publish 
    //var date_now = Utilities.formatDate(new Date(), "CST", "yyyy/MM/dd"); // gets the current date
    //var time_now = Utilities.formatDate(new Date(), "CST", "hh:mm:ss a"); // gets the current time
    var Curr_Date = new Date(new Date().setHours(new Date().getHours() + hours));
    var Curr_Time = Utilities.formatDate(Curr_Date, timezone, 'HH:mm:ss');
    var value0 = dataArr [0]; // value0 from Arduino code - Student ID
    var value1 = dataArr [1]; // value1 from Arduino code - First Name
    var value2 = dataArr [2]; // value2 from Arduino code - Last Name
    var value3 = dataArr [3]; // value0 from Arduino code - Phone Number
    var value4 = dataArr [4]; // value1 from Arduino code - Address
    // read and execute command from the "payload_base" string specified in Arduino code
    switch (parsedData.command) {
      case "insert_row":
         sheet.insertRows(2); // insert full row directly below header text
         //var range = sheet.getRange("A2:D2");              // use this to insert cells just above the existing data instead of inserting an entire row
         //range.insertCells(SpreadsheetApp.Dimension.ROWS); // use this to insert cells just above the existing data instead of inserting an entire row
         sheet.getRange('A2').setValue(Curr_Date); // publish current date to cell A2
         sheet.getRange('B2').setValue(Curr_Time); // publish current time to cell B2
         sheet.getRange('C2').setValue(value0);   // publish Student ID from Arduino code to cell C2
         sheet.getRange('D2').setValue(value1);   // publish First Name from Arduino code to cell D2
         sheet.getRange('E2').setValue(value2);   // publish Last Name from Arduino code to cell E2
         sheet.getRange('F2').setValue(value3);   // publish Phone Number from Arduino code to cell F2
         sheet.getRange('G2').setValue(value4);   // publish Address from Arduino code to cell G2
         str = "Success"; // string to return back to Arduino serial console
         SpreadsheetApp.flush();
         break;
      case "append_row":
         var publish_array = new Array(); // create a new array
         publish_array [0] = date_now; // add current date to position 0 in publish_array
         publish_array [1] = time_now; // add current time to position 1 in publish_array
         publish_array [2] = value0;   // add value0 from Arduino code to position 2 in publish_array
         publish_array [3] = value1;   // add value1 from Arduino code to position 3 in publish_array
         publish_array [4] = value2;   // add value2 from Arduino code to position 4 in publish_array
         sheet.appendRow(publish_array); // publish data in publish_array after the last row of data in the sheet
         str = "Success"; // string to return back to Arduino serial console
         SpreadsheetApp.flush();
         break;
    }
    return ContentService.createTextOutput(str);
  } // endif (parsedData !== undefined)
  else {
    return ContentService.createTextOutput("Error! Request body empty or in incorrect format.");
  }
}
      </pre>
    </div>
  </div>

</div>





  <h4 class="info-title">INSTRUCTIONS</h4>
    <ul class="info-list">
      <li>Connect the modules & components as per schematic diagram.</li>
      <li>Open <strong>Google Sheets</strong> and create a new sheet with columns for ID, Timestamp, First Name, Last Name, Phone Number, Address, etc., for attendance data.</li>
     
      <li>Go to <strong>Extension > Apps script ></strong> upload the given App Script Code and fill the spreadsheet URL in the code.</li>
      <li>Click <strong>Deploy > New Deployment.</strong></li>
      <li>Select <strong>Type > Web app</strong> and set its access to anyone.</li>
      <li>Click <strong>Deploy </strong>and copy the <strong>Deployment ID.</strong></li>
      <li>Upload the Arduino code to upload RFID card data into the NodeMCU board.</li>
      <li>Read RFID card data and upload the user data via the serial monitor.</li>
      <li>open <strong> New sketch ></strong>Write the Arduino Code to register attendance in Google Sheets.</li>
      <li>Download and add the httpsdirect.h library to the Arduino IDE.</li>
      <li>Enter the <strong>Deployment ID & Network Credentials</strong>in the program.</li>
      <li>Upload the code into NodeMCU via Arduino IDE.</li>
      <li>Test the system by scanning RFID tags and checking if the attendance data is being updated in the designated Google Sheets document.</li>
    </ul>
       
      <h4 class="info-title">WORKING</h4>
    <ul class="info-list"> 
      <li>The RFID attendance system using NodeMCU works by scanning RFID tags, sending the data to Google Sheets via Wi-Fi, where it logs attendance automatically in real-time.
</li> 
      </u1>
         
    </ul>
 <h4 class="info-title">RFID ATTENDANCE SYSTEM USING NODEMCU ESP8266 AND GOOGLE SHEETS</h4>
<ul class="info-list"></ul>

<section class="video-section">
  <div class="container">
    <div class="video-wrapper">
      <video id="irVideo" controls preload="none" poster="images/ir-thumbnail.jpg">
        <source src="videos/Project 25 - Rfid attendance system using google shhet-VEED.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>
  </div>
</section>


  <script>
    const headers = document.querySelectorAll(".acc-header");

headers.forEach(header => {
  header.addEventListener("click", () => {
    const body = header.nextElementSibling;

    header.querySelector(".icon").textContent =
      body.style.maxHeight ? "+" : "-";

    document.querySelectorAll(".acc-body").forEach(b => {
      if (b !== body) {
        b.style.maxHeight = null;
        b.previousElementSibling.querySelector(".icon").textContent = "+";
      }
    });

    body.style.maxHeight = body.style.maxHeight ? null : body.scrollHeight + "px";
  });
});
   function copyCode(id) {
  let text = document.getElementById(id).innerText;
  navigator.clipboard.writeText(text);
  alert("Code Copied!");
}
  </script>

  </main>
 

 <?php include "footer.php"; ?>