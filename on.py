import wiringpi  
wiringpi.wiringPiSetupGpio()
wiringpi.pinMode(4,1) 
wiringpi.digitalWrite(4,1)