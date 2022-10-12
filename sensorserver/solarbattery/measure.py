# this measurement should be in a while(true) loop with a sleep(meastime) and be triggered to run in the background and it should run at boot so the server is always taking data when it's on
import serial
import time
import datetime
import json

while True:
    presentDate = datetime.datetime.now()
    unix_timestamp = datetime.datetime.timestamp(presentDate)*1000
    ser = serial.Serial('COM4', 9600, timeout=1)
    ser.flush()
    i = 0
    data = ""
    while i < 10:
        i += 1
        data += str(ser.readline())
    ser.close()
    data = data.split("\\r\\n\'b\'")[5]
    vbat = data.split(",")[0]
    vsolar = data.split(",")[1]
    jsondatapointstring = "{\"vbatt\":" + vbat + ",\"vsolar\":" + vsolar + ",\"timestamp\":" + str(unix_timestamp).split(".")[0] + "}"
    jsondatapoint = json.loads(jsondatapointstring)
    f = open("data/sensordata.txt", "r")
    textdata = f.read()
    data = json.loads(textdata)
    data.append(jsondatapoint)
    f.close()
    f = open("data/sensordata.txt", "w")
    f.write(json.dumps(data))
    f.close()
    time.sleep(60)# wait 60 seconds, so record a data point every minute until program break