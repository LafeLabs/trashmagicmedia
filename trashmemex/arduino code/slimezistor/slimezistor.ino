
//slimezistor
//public domain
//trash robot
//digital output pin 12 goes to one electrode in the fluid, the other goes to A0, with cap to ground
//slider bar potentiometers are used to set the trigger voltages 

int outpin = 12;
int x0 = 0;//value of analog pin A0
int x1 = 0;//value of analog pin A1
int x2 = 0;//value of analog pin A2
int vmin = 0;//upper voltage trigger to toggle digital LOW
int vmax = 0;//lower voltage trigger to toggle digital HIGH

void setup() {
  
    pinMode(outpin,OUTPUT);
    digitalWrite(outpin,LOW);
    Serial.begin(115200);
    
}

void loop() {
  x0 = analogRead(A0);
  x1 = analogRead(A1);
  x2 = analogRead(A2);
  vmax = max(x1,x2);
  vmin = min(x1,x2);
  if(x0 > vmax){
    digitalWrite(outpin,LOW);  
  }
  if(x0 < vmin){
    digitalWrite(outpin,HIGH);
  }
  Serial.println(x0);
   
}
