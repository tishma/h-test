# Notifications Demo

##Purpose
The purpose of this repo is to show possible OO design of a simple (SMS and Email)
notification system.

## Features
The NotificationDemo is an abstraction layer that can help an application developer
to use Sms and Email providers of choice by wrapping them into uniform interfaces
(EmailServiceWrapper, SmsServiceWrapper and AbstractNotification).

## Examples
Example implementations can be found in examples directory, along with example.php script
that can be run from command line.

The implementation of ServiceWrappers is intentionally hard-coded to write 'sent' messages
to /tmp/sendserviceslog.txt, so running requires linux or Mac OS X.

The example successfully runs on PHP 5.5.18 and Mac OS X 10.10.4
