import json
import serial
import time
import datetime

f = open("sensordata.txt", "w")
f.write("[]")
f.close()

connection = serial.Serial(port="COM3", baudrate=9600)
connection.reset_input_buffer()
connection.flush()

#numpoints = 60
sleeptime = 10 #[seconds]

while True:
    data = connection.readline().decode("utf-8")
    # print(data)
    try:
        dict_json = json.loads(data)
        presentDate = datetime.datetime.now()
        unix_timestamp = round((datetime.datetime.timestamp(presentDate)*1000))
        dict_json["timestamp"] = unix_timestamp
        dict_json["timenow"] = str(presentDate)
        dict_json["Temperature[F]"] = 32 + dict_json["Temperature[C]"]*9/5
        f = open("sensordata.txt", "r")
        sensordata = json.loads(f.read())
        f.close()
        f = open("sensordata.txt", "w")
        sensordata.append(dict_json)
        f.write(json.dumps(sensordata))
        f.close()
        print(dict_json)
    except json.JSONDecodeError as e:
        print("JSON:", e)
    time.sleep(sleeptime)
connection.close()
f.close()