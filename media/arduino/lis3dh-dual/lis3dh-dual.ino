
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

// software SPI
//Adafruit_LIS3DH lis = Adafruit_LIS3DH(LIS3DH_CS, LIS3DH_MOSI, LIS3DH_MISO, LIS3DH_CLK);
// hardware SPI
//Adafruit_LIS3DH lis = Adafruit_LIS3DH(LIS3DH_CS);
// I2C
Adafruit_LIS3DH lis = Adafruit_LIS3DH();
Adafruit_LIS3DH lis2 = Adafruit_LIS3DH();

void setup(void) {
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
  Serial.print(event.acceleration.x);Serial.print(",");
  Serial.print(event.acceleration.y);Serial.print(",");
  Serial.print(event.acceleration.z);Serial.print(",");


  Serial.print(event2.acceleration.x);Serial.print(",");
  Serial.print(event2.acceleration.y);Serial.print(",");
  Serial.print(event2.acceleration.z);

  Serial.println();

//  delay(200);
}
