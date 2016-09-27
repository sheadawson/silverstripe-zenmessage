SilverStripe ZENMessage Module
========================================

Maintainer Contacts
-------------------
*  Shea Dawson (<shea@silverstripe.com.au>)

Requirements
------------
* SilverStripe 3.0 +

Installation Instructions
-------------------------

1. Place this directory in the root of your SilverStripe installation, make sure it's named "zenmessage"
2. Visit yoursite.com/dev/build?flush=all.

Usage Overview
--------------

This simple module gives developers an easy way to display feedback messages to the website user.

### Setting Messages

To set a message simply call the setMessage($messageType, $message) method on your controller. Passing in the message type as the first parameter and the message as the second

	$this->setMessage('success', 'You have successfully set a message');

### Displaying Messages

Place the $Message variable into your page template, wherever you would like your message to be displayed. If a message has been set (using the setMessage() method) before the template is rendered, the message will be displayed.

### Default Styles

Some basic default message styles can be applied by including zenmessage/css/zenmessage.css in your website or application

### Notes

* The messageType can be any string, it's only used to give the message a css class. success, notice and error are typical messageTypes.
