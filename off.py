import wiringpi  
io = wiringpi.GPIO(wiringpi.GPIO.WPI_MODE_SYS)  
io.pinMode(4,io.OUTPUT)
io.digitalWrite(4,io.LOW)