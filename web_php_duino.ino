

char c;
int sensorPin=0;//A0
int sensorVal=0;
void setup(){

Serial.begin(9600);
//Serial2.begin(9600);

pinMode(13, OUTPUT);
}

void loop(){
   sensorVal=analogRead(sensorPin);
   sensorVal=sensorVal*0.0049;
   Serial.print(sensorVal);
   if (Serial.available() > 0)
    {
       c = Serial.read();
      // Serial2.println(c);
    }
    else
    {
      delay(100); 
    }
/////////////////+++++++++++++++++++++++++++++++++++
    if (c=='n')////valve 1//Add fertilizer
    {
      digitalWrite(12,HIGH);
      delay(2000);
      digitalWrite(12,LOW);
      c='q';//q for off state
    }

    //////////////++++++++++++++++++++++++++seconds
    if(c=='a')///Dilute,Add Water
    {
     digitalWrite(11,HIGH); 
     delay(2000);
     digitalWrite(11,LOW);  
     c='q';
    }

    if(c=='c')//PH UP
    {
     digitalWrite(10,HIGH); 
     delay(2000);
     digitalWrite(10,LOW);
     c='q';
       
    }

     
    if(c=='e')//PH Down
    {
     digitalWrite(9,HIGH); 
     delay(2000);
     digitalWrite(9,LOW); 
     c='q';     
    }
    
     
     if(c=='h')//Add air
    {
     digitalWrite(8,HIGH); 
     delay(2000);
     digitalWrite(8,LOW); 
     c='q'; 
    }
    
    
   
      //c='\0';

}

