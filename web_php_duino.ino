

char c;

void setup(){

Serial.begin(9600);
//Serial2.begin(9600);

pinMode(13, OUTPUT);
}

void loop(){
   Serial.print ("a");
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
    if (c=='n')////valve 1
    {
      digitalWrite(12,HIGH);
    }else
    if (c=='f')
    {
      digitalWrite(12,LOW);
    }

    //////////////++++++++++++++++++++++++++seconds
    if(c=='a')///valve 2
    {
     digitalWrite(11,HIGH); 
    }else
    if(c=='b')
    {
      digitalWrite(11,LOW);  
    }

      if(c=='c')
    {
     digitalWrite(10,HIGH); 
    }else
    if(c=='d')
    {
      digitalWrite(10,LOW);      
    } 
    if(c=='e')
    {
     digitalWrite(9,HIGH); 
    }else
    if(c=='g')
    {
      digitalWrite(9,LOW);      
    } 
     if(c=='h')
    {
     digitalWrite(8,HIGH); 
    }else
    if(c=='i')//wate
    {
      digitalWrite(8,LOW);      
    } 
    
    
   
      //c='\0';

}

