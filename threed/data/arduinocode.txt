//char coin[] = "";

int delayus = 500;//delayMicroseconds(delayus);

int unit = 100;
int side = unit;

//these are the pin numbers of the buttons on the controller.  Connect to ground to activate.
int xleftPin = 7;
int xrightPin = 10;
int yawayPin = 9;
int ytowardsPin = 8;
int zdownPin = 11;
int zupPin = 12;

int goPin = 6;
int stopPin = 5;

//connect these pins to the MP6500 stepper motor control board:
int dirPin3 = 19;
int stepPin3 = 18;
int enPin3 = 17;
int dirPin1 = 16;
int stepPin1 = 15;

int enPin1 = 13;

int dirPin2 = 2;
int stepPin2 = 3;
int enPin2 = 4;

boolean xleftBool = false;
boolean xrightBool = false;
boolean yawayBool = false;
boolean ytowardsBool = false;
boolean zdownBool = false;
boolean zupBool = false;
boolean goBool = false;
boolean stopBool = false;

int select = 0;

void setup() {

    pinMode(xleftPin,INPUT_PULLUP); 
    pinMode(xrightPin,INPUT_PULLUP); 
    pinMode(yawayPin,INPUT_PULLUP); 
    pinMode(ytowardsPin,INPUT_PULLUP); 
    pinMode(zdownPin,INPUT_PULLUP); 
    pinMode(zupPin,INPUT_PULLUP); 
    pinMode(goPin,INPUT_PULLUP); 
    pinMode(stopPin,INPUT_PULLUP); 

    pinMode(dirPin1,OUTPUT);
    pinMode(stepPin1,OUTPUT);
    pinMode(enPin1,OUTPUT);
    pinMode(dirPin2,OUTPUT);
    pinMode(stepPin2,OUTPUT);
    pinMode(enPin2,OUTPUT);
    pinMode(dirPin3,OUTPUT);
    pinMode(stepPin3,OUTPUT);
    pinMode(enPin3,OUTPUT);

    digitalWrite(dirPin1,LOW);
    digitalWrite(stepPin1,LOW);
    digitalWrite(enPin1,HIGH);
    digitalWrite(dirPin2,LOW);
    digitalWrite(stepPin2,LOW);
    digitalWrite(enPin2,HIGH);
    digitalWrite(dirPin3,LOW);
    digitalWrite(stepPin3,LOW);
    digitalWrite(enPin3,HIGH);
    
    Serial.begin(9600);

}

void loop() { 
  
  
  xleftBool = !digitalRead(xleftPin);
  xrightBool = !digitalRead(xrightPin);
  yawayBool = !digitalRead(yawayPin);
  ytowardsBool = !digitalRead(ytowardsPin);
  zdownBool = !digitalRead(zdownPin);
  zupBool = !digitalRead(zupPin);
  goBool = !digitalRead(goPin);
  stopBool = !digitalRead(stopPin);
  
   //Serial.println(goBool); 
  if(goBool){
      printCoin(); 
  }

  if(xleftBool){
     moveLeft(1);
  }
  if(xrightBool){
     moveRight(1);
  }
  if(zdownBool){
    moveUp(1); 
  }
  if(zupBool){
    moveDown(1); 
  }
  if(yawayBool){
    moveAway(1);
  }
  if(ytowardsBool){
    moveTowards(1);
 }
}

void moveLeft(int nSteps){
     digitalWrite(dirPin1,LOW);
     digitalWrite(enPin1,LOW);
     digitalWrite(dirPin3,HIGH);
     digitalWrite(enPin3,LOW);
     
     for(int index = 0;index < nSteps;index++){
       digitalWrite(stepPin1,HIGH);
       delayMicroseconds(delayus); 
       digitalWrite(stepPin1,LOW);
       delayMicroseconds(delayus); 
       digitalWrite(stepPin3,HIGH);
       delayMicroseconds(delayus); 
       digitalWrite(stepPin3,LOW);
       delayMicroseconds(delayus); 

     }          
     digitalWrite(enPin1,HIGH);   
     digitalWrite(enPin2,HIGH);   
}

void moveRight(int nSteps){
     digitalWrite(dirPin1,HIGH);
     digitalWrite(enPin1,LOW);
     digitalWrite(dirPin3,LOW);
     digitalWrite(enPin3,LOW);
    
     for(int index = 0;index < nSteps;index++){
       digitalWrite(stepPin1,HIGH);
       delayMicroseconds(delayus); 
       digitalWrite(stepPin1,LOW);
       delayMicroseconds(delayus); 
       digitalWrite(stepPin3,HIGH);
       delayMicroseconds(delayus); 
       digitalWrite(stepPin3,LOW);
       delayMicroseconds(delayus); 

     }          
     digitalWrite(enPin1,HIGH);   
     digitalWrite(enPin3,HIGH);   

}

void moveDown(int nSteps){
     digitalWrite(dirPin1,HIGH);
     digitalWrite(enPin1,LOW);
     digitalWrite(dirPin3,HIGH);
     digitalWrite(enPin3,LOW);
     
     for(int index = 0;index < nSteps;index++){
       digitalWrite(stepPin1,HIGH);
       delayMicroseconds(delayus); 
       digitalWrite(stepPin1,LOW);
       delayMicroseconds(delayus); 
       digitalWrite(stepPin3,HIGH);
       delayMicroseconds(delayus); 
       digitalWrite(stepPin3,LOW);
       delayMicroseconds(delayus); 
     }          
     digitalWrite(enPin1,HIGH);   
     digitalWrite(enPin3,HIGH);   

}

void moveUp(int nSteps){
     digitalWrite(dirPin1,LOW);
     digitalWrite(enPin1,LOW);
     digitalWrite(dirPin3,LOW);
     digitalWrite(enPin3,LOW);     
     for(int index = 0;index < nSteps;index++){
       digitalWrite(stepPin1,HIGH);
       delayMicroseconds(delayus); 
       digitalWrite(stepPin1,LOW);
       delayMicroseconds(delayus); 
       digitalWrite(stepPin3,HIGH);
       delayMicroseconds(delayus); 
       digitalWrite(stepPin3,LOW);
       delayMicroseconds(delayus); 
     }          
     digitalWrite(enPin3,HIGH);    
     digitalWrite(enPin1,HIGH);

}

void moveAway(int nSteps){
     digitalWrite(dirPin2,LOW);
     digitalWrite(enPin2,LOW);
     
     for(int index = 0;index < nSteps;index++){
       digitalWrite(stepPin2,HIGH);
       delayMicroseconds(delayus); 
       digitalWrite(stepPin2,LOW);
       delayMicroseconds(delayus); 
     }          
     digitalWrite(enPin2,HIGH);   
}

void moveTowards(int nSteps){
     digitalWrite(dirPin2,HIGH);
     digitalWrite(enPin2,LOW);
     
     for(int index = 0;index < nSteps;index++){
       digitalWrite(stepPin2,HIGH);
       delayMicroseconds(delayus); 
       digitalWrite(stepPin2,LOW);
       delayMicroseconds(delayus); 
     }          
     digitalWrite(enPin2,HIGH);   
}


void geometronAction(char action){
  stopBool = !digitalRead(stopPin);
  if(action == 'a'){
     moveRight(side);
  }
  if(action == 'b'){
     moveLeft(side);
  }
  if(action == 'c'){
    moveAway(side);
  }
  if(action == 'd'){
    moveTowards(side);
  }
  if(action == 'e'){
    moveUp(side);
  }
  if(action == 'f'){
    moveDown(side);
  }
  if(action == 'g'){
    side /= 2;
  }
  if(action == 'h'){
    side *= 2;
  }
  if(action == 'A'){
    geometronSequence("ggdhhef");
  }
  if(action == 'B'){
    geometronSequence("ggchhef");
  }
  if(action == 'C'){
    geometronSequence("ggbhhef");
  }
  if(action == 'D'){
    geometronSequence("ggahhef");
  }
  if(action == 'E'){
    geometronSequence("ggdhh");
  }
  if(action == 'F'){
    geometronSequence("ggchh");
  }
  if(action == 'G'){
    geometronSequence("ggbhh");
  }
  if(action == 'H'){
    geometronSequence("ggahh");
  }
}


void printCoin(){
   for(int index = 0;index <= sizeof(coin);index++){
    if(!stopBool){
      geometronAction(coin[index]);    
    }
   }  
}


void geometronSequence(String glyph){
  //for loop thru the String
  int index = 0;
  for(index = 0;index < glyph.length();index++){
    if(!stopBool){
      geometronAction(glyph.charAt(index));      
    }
   }
}