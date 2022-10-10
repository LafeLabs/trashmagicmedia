import json
f = open("data/sensordata.txt", "r")
textdata = f.read()
data = json.loads(textdata)
import matplotlib.pyplot as plt
import numpy as np
pressurewave = []
temperaturewave = []
timewave = []
for x in data:
    #print(x['Pressure'])
    pressurewave.append(x['Pressure'])
    temperaturewave.append(x['Temperature'])
    timewave.append(x['timestamp'])
plt.plot(timewave,pressurewave)