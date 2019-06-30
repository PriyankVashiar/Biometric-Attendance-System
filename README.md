## Biometric-Attendance-System
Attendance is taken using fingerprint.

![](https://github.com/PriyankVashiar/Biometric-Attendance-System/blob/master/images/Connection.jpg)

To do away with the traditional system of roll-call attendance, we've created a fingerprint attendance system which is portable and doesn't need power and is connected to a database for easy access of attendance data.

#Components Used:
1. Raspberry Pi 3B+(Any raspberry pi will do the job)
![](https://github.com/PriyankVashiar/Biometric-Attendance-System/blob/master/images/raspberry%20pi.webp)
2. Fingerprint Sensor R307(most will work but look for the connection with 3rd component)
![](https://github.com/PriyankVashiar/Biometric-Attendance-System/blob/master/images/fingerprint.jpg)
3. USB to Serial converter(USB UART)
![](https://github.com/PriyankVashiar/Biometric-Attendance-System/blob/master/images/usb%20ttl.jpg)
4. Push buttons
5. 16x2 LCD
6. Bread Board
7. Jumper wires

# Connection of the Fingerprint Sensor - 

The USB adapter is labeled, but the fingerprint sensor cables are not. However, the cables have a clear color, which we can identify and connect to the USB converter. We only need four of the cables (if your fingerprint sensor has more, you can ignore the remaining colors):

    Red: Depending on the accepted voltage of the sensor (3.3V or 5V).
    White: RXD
    Green: TXD
    Black: GND

![](https://github.com/PriyankVashiar/Biometric-Attendance-System/blob/master/images/circuit%20diag.png)
If your sensor needs a higher voltage than 3.3V (and the maximum value is equal to or greater than 5V), you can connect the red cable to the 5V pin.

To check whether the cabling is correct and whether the sensor is detected, you can open your console(terminal) and perform the following before and after connecting:

> ls /dev/ttyUSB*

If no other serial devices are connected via USB, nothing should be displayed first and afterwards /dev/ttyUSB0. If the name differs (because, for example, other devices are connected), you have to adapt it accordingly in the following steps.

# Installation of the Raspberry Pi Fingerprint Library

For some commands of the installation, root privileges are required. Therefore we start a terminal session and type the following, which executes all the following commands as root:

> sudo bash

Now we add the necessary package sources:

> wget -O - http://apt.pm-codeworks.de/pm-codeworks.de.gpg | apt-key add -
> wget http://apt.pm-codeworks.de/pm-codeworks.list -P /etc/apt/sources.list.d/

We then update the available packages and install the Python library:

> apt-get update
> apt-get install python-fingerprint --yes

If an error has occurred (in particular, that not all dependent packages have been installed), then execute the following:

> apt-get -f install

Now the code for enrolling, searching and deleting is there in the code folder. Directly run the script from terminal with(Make sure the current working directory is same as where you've stored the code):

> python3 fingurPrint_enroll.py

and similarly the name of the program you want to run. We can make this programs run using push buttons but that functionality has not been added yet.

Finally you can see the attendance on a website which we've made using php. Code for the website is stored in website code folder. Here are some screenshots of the website.

![](https://github.com/PriyankVashiar/Biometric-Attendance-System/blob/master/images/Screenshot%20(471).png)
![](https://github.com/PriyankVashiar/Biometric-Attendance-System/blob/master/images/Screenshot%20(472).png)
![](https://github.com/PriyankVashiar/Biometric-Attendance-System/blob/master/images/Screenshot%20(473).png)

We've not uploaded the database(not everything is provided for free;)) and therefore you've to create your own database. We used mysql database but you can use any database you're comfortable with.
