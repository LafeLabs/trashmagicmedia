
// Basic demo for accelerometer readings from Adafruit LIS3DH

#include <Wire.h>
#include <SPI.h>
#include <Adafruit_LIS3DH.h>
#include <Adafruit_Sensor.h>

// Used for software SPI
#define LIS3DH_CLK 13
#define LIS3DH_MISO 12
#define LIS3DH_MOSI 11
// Used for hardware & software SPI
#define LIS3DH_CS 10

int xangle1 = 0;
int yangle1 = 0;
int xangle2 = 0;
int yangle2 = 0;


int xleftPin = 10;
int xrightPin = 7;
int yawayPin = 9;
int ytowardsPin = 8;
int zdownPin = 11;
int zupPin = 12;
int goPin = 6;
int stopPin = 5;

// software SPI
//Adafruit_LIS3DH lis = Adafruit_LIS3DH(LIS3DH_CS, LIS3DH_MOSI, LIS3DH_MISO, LIS3DH_CLK);
// hardware SPI
//Adafruit_LIS3DH lis = Adafruit_LIS3DH(LIS3DH_CS);
// I2C
Adafruit_LIS3DH lis = Adafruit_LIS3DH();
Adafruit_LIS3DH lis2 = Adafruit_LIS3DH();

void setup(void) {
    pinMode(xleftPin,OUTPUT); 
    pinMode(xrightPin,OUTPUT); 
    pinMode(yawayPin,OUTPUT); 
    pinMode(ytowardsPin,OUTPUT); 
    pinMode(zdownPin,OUTPUT); 
    pinMode(zupPin,OUTPUT); 
    pinMode(goPin,OUTPUT); 
    pinMode(stopPin,OUTPUT); 
    digitalWrite(xleftPin,HIGH);
    digitalWrite(xrightPin,HIGH);
    digitalWrite(yawayPin,HIGH);
    digitalWrite(ytowardsPin,HIGH);
    digitalWrite(zdownPin,HIGH);
    digitalWrite(zupPin,HIGH);
    digitalWrite(goPin,HIGH);
    digitalWrite(stopPin,HIGH);



  Serial.begin(115200);
  while (!Serial) delay(10);     // will pause Zero, Leonardo, etc until serial console opens

//  Serial.println("LIS3DH test!");

  if (! lis.begin(0x19)) {   // change this to 0x19 for alternative i2c address
    Serial.println("Couldnt start");
    while (1) yield();
  }
  if (! lis2.begin(0x18)) {   // change this to 0x19 for alternative i2c address
    Serial.println("Couldnt start");
    while (1) yield();
  }
}

void loop() {
  lis.read();      // get X Y and Z data at once
  lis2.read();
  /* Or....get a new sensor event, normalized */
  sensors_event_t event;
  lis.getEvent(&event);
  sensors_event_t event2;
  lis2.getEvent(&event2);
  /* Display the results (acceleration is measured in m/s^2) */

//  Serial.print(event.acceleration.x);Serial.print(",");
//  Serial.print(event.acceleration.y);Serial.print(",");
//  Serial.print(event.acceleration.z);Serial.print(",");

xangle1 = int(atan2(event.acceleration.x,event.acceleration.z)*180/3.14159);
yangle1 = int(atan2(event.acceleration.y,event.acceleration.z)*180/3.14159);
xangle2 = int(atan2(event2.acceleration.x,event2.acceleration.z)*180/3.14159);
yangle2 = int(atan2(event2.acceleration.y,event2.acceleration.z)*180/3.14159);


if(xangle1 < -20 && xangle2 < -20){
  Serial.println("RIGHT");
  digitalWrite(xrightPin,LOW);
}
else{
  digitalWrite(xrightPin,HIGH);
}

if(xangle1 > 20 && xangle2 > 20){
  Serial.println("LEFT");
  digitalWrite(xleftPin,LOW);
}
else{
  digitalWrite(xleftPin,HIGH);  
}

if(yangle1 < -20 && yangle2 < -20){
  Serial.println("AWAY");
  digitalWrite(yawayPin,LOW);
}
else{
    digitalWrite(yawayPin,HIGH);
}

if(yangle1 > 20 && yangle2 > 20){
  Serial.println("TOWARDS");
  digitalWrite(ytowardsPin,LOW);
}
else{
  digitalWrite(ytowardsPin,HIGH);  
}

if(xangle1 < -20 && xangle2 > 20){
  Serial.println("UP");
  digitalWrite(zupPin,LOW);  
}
else{
  digitalWrite(zupPin,HIGH);  
}

if(xangle1 > 20 && xangle2 < -20){
  Serial.println("DOWN");
  digitalWrite(zdownPin,LOW);   
}
else{
  digitalWrite(zdownPin,HIGH);     
}



//  Serial.print(event2.acceleration.x);Serial.print(",");
 // Serial.print(event2.acceleration.y);Serial.print(",");
  //Serial.print(event2.acceleration.z);

 // Serial.println();

//  delay(200);
}
