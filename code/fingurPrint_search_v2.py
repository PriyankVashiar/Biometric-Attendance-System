#!/usr/bin/env python
# -*- coding: utf-8 -*-

# @author: Parixit Sanghani

"""
PyFingerprint
Copyright (C) 2015 Bastian Raschke <bastian.raschke@posteo.de>
All rights reserved.

"""

import hashlib
from pyfingerprint.pyfingerprint import PyFingerprint
import mysql.connector
import datetime




mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  passwd="",
  database="erp"
)
mycursor = mydb.cursor()

def getFaculty(student_class = "c1"):
    # authenticated = 1
    while(1):
        while ( f.readImage() == False ):
            pass

        ## Converts read image to characteristics and stores it in charbuffer 1
        f.convertImage(0x01)

        ## Searchs template
        result = f.searchTemplate()

        positionNumber = result[0]
        accuracyScore = result[1]
        if(positionNumber == -1):
            print('No match found!! Put Finger Again')
            # print("Put Finger Again")
            #exit(0)
            
            
            continue

        if(positionNumber<=1):
            mycursor.execute("SELECT subject from `faculty_info` WHERE id = {0}".format(positionNumber))
            sub =mycursor.fetchall()
            sb = sub[0][0]
            try:
                    mycursor.execute("INSERT into c1_{0} (date) values (now())".format(sb))
                    print("In Try...")
                    mydb.commit()
                    
            except:
                mycursor.execute("DELETE From c1_{0} where date=curdate()".format(sb))
                mydb.commit()
                mycursor.execute("INSERT into c1_{0} (date) values (now())".format(sb))
                mydb.commit()
            
            print("Faculty Authentication Done...")                
            return sb,positionNumber
        else:
            print("Not Valid Faculty")


def getStudentAttendace(faculty,sb,cls="c1"):
    while(True):
            while ( f.readImage() == False ):
                pass

    ## Converts read image to characteristics and stores it in charbuffer 1
            f.convertImage(0x01)

    ## Searchs template
            result = f.searchTemplate()

            positionNumber = result[0]
            accuracyScore = result[1]


            if ( positionNumber == -1 ):
                print('No match found!! Invalid Entry!')
            
                continue
                #exit(0)


            Id = positionNumber - 1
            if(Id>=1):
                # wating for finger which return hash so have to do -2
                print("Attendace Taken")
                print("Your Id {0}".format(Id))
            
                mycursor.execute("UPDATE c1_{0} SET `{1}`=1".format(sb,Id))
                mydb.commit()
            elif(positionNumber==faculty):
                print("Faculty End Attendce!!")
                break
            else:
                print("Invalid Faculty")

## Search for a finger
##

## Tries to initialize the sensor
try:
    f = PyFingerprint('/dev/ttyUSB0', 57600, 0xFFFFFFFF, 0x00000000)

    if ( f.verifyPassword() == False ):
        raise ValueError('The given fingerprint sensor password is wrong!')

except Exception as e:
    print('The fingerprint sensor could not be initialized!')
    print('Exception message: ' + str(e))
    exit(1)

## Gets some sensor information
print('Currently used templates: ' + str(f.getTemplateCount()) +'/'+ str(f.getStorageCapacity()))

## Tries to search the finger and calculate hash
try:
    print('Waiting for finger Faculty....')

    ## Wait that finger is read

    #Faculty
    sub,Faculty = getFaculty("c1")
    
    # print("Faculty authentication Done....")
    if(sub=="sub1"):
        getStudentAttendace(Faculty,sub,cls="c1")
    elif(sub=="sub2"):
        getStudentAttendace(Faculty,sub,cls="c1")




    #  while
    #   student

   # if ( positionNumber == -1 ):
    #    print('No match found!')
     #   exit(0)
    #else:
     #   print('Found template at position #' + str(positionNumber))
      #  print('The accuracy score is: ' + str(accuracyScore))

    ## OPTIONAL stuff
    ##

    ## Loads the found template to charbuffer 1
    # f.loadTemplate(positionNumber, 0x01)
    #
    # ## Downloads the characteristics of template loaded in charbuffer 1
    # characterics = str(f.downloadCharacteristics(0x01)).encode('utf-8')
    #
    # ## Hashes characteristics of template
    # print('SHA-2 hash of template: ' + hashlib.sha256(characterics).hexdigest())

except Exception as e:
    print('Operation failed!')
    print('Exception message: ' + str(e))
    exit(1)
