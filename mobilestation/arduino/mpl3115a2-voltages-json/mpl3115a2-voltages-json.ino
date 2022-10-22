/**
 * Async example for MPL3115A2
 */

#include <Adafruit_MPL3115A2.h>

Adafruit_MPL3115A2 mpl;

float v_battery = 0;
float v_solarmain = 0;
float v_solartest = 0;

void setup() {
  
//  analogReference(INTERNAL2V56);//only for mega, comment out for uno
  
  Serial.begin(9600);
  while(!Serial);
//  Serial.println("Adafruit_MPL3115A2 test!");

  if (!mpl.begin()) {
    Serial.println("Could not find sensor. Check wiring.");
    while(1);
  }

  // set mode before starting a conversion
//  Serial.println("Setting mode to barometer (pressure).");
  mpl.setMode(MPL3115A2_BAROMETER);
}

void loop() {
  // start a conversion
//  Serial.println("Starting a conversion.");
  mpl.startOneShot();

  // do something else while waiting
//  Serial.println("Counting number while waiting...");
  int count = 0;
  while (!mpl.conversionComplete()) {
    count++;
  }
//  Serial.print("Done! Counted to "); Serial.println(count);

  // now get results

  v_battery = 11.0*5.0*analogRead(A0)/1024.0;
  v_solarmain = 11.0*5.0*analogRead(A1)/1024.0;;
  v_solartest = 5.0*analogRead(A2)/1024.0;
 
  Serial.print("{\"pressure[hPa]\":");
  Serial.print(mpl.getLastConversionResults(MPL3115A2_PRESSURE));
  Serial.print(",\"Temperature[C]\":");
  Serial.print(mpl.getLastConversionResults(MPL3115A2_TEMPERATURE));
  Serial.print(",\"v_battery\":");  
  Serial.print(v_battery);
  Serial.print(",\"v_solarmain\":");  
  Serial.print(v_solarmain);
  Serial.print(",\"v_solartest\":");  
  Serial.print(v_solartest);

  Serial.println("}");
  //delay(10);
  
}
