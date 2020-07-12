Developers notes and install instructions:


wfbooks is a hacked/clone of the module wflinks version 1.15 RC2.
The original wflinks was developed by WF project. Later on McDonalds got on this module and developed it further into what it is now.
You can grab his wflinks module at: http://members.lycos.nl/mcdonaldsstore/
WF-Links 1.05 RC-3 (this was his recent version on the 3th of march 2008)

After his release of wflinks version RC1 and later RC2 I started to clone the module and made some changes to make it usable as a book module.
Because of my personal needs this book module (which I use as a kind of library module) had to have 2 options: a bookpresentation with partnerlink, but also the option of opening files.


Partnerlink:
During my rewrite I encountered that the standard URL link (which makes use of the visit.php redirection) rewrote the entire partnerlink which took me to the wrong partner linkaddress. 
Therefore the partnerlink URL has to be placed within another textfield (below the description)
If you want to enter a normal URL, you can place that one within the standard URL field.


Open File:
As you can see the module has a second url field. The meaning of this field is for those who want to add files, which visitors can open.
You can use this field for pdf/doc,... whatever files.
Within the directory: uploads/wfbooks/
you will find a dir: files. This directory will be used for this meaning.
Upload your files by FTP to this directory and during adding a new bookresource which has a file, just enter the name.extensions in the specific url field. It will show itself.

To make your life easier, so that you only have to add the 'filename.extension' behind the predefined url, you have to adjust some things within one wfbooks file.
admin/index.php :  Prox lines: 51, 451 (where it says: ADJUST THE URL)
Be sure that if you are going to move your website, to adjust simply these lines. All the open file links will then be automaticly adjusted!


Visitcounter:
Normally the visit.php clicks are countered. But within the wfbooks, the singlelink.php clicks are countered.
Why? Because you want to know how often the full details of a book have been viewed. Within Full detail the visitor can order the book or open the file.
After all, on your partner account you can see how often people have clicked the specific book for eventually placing an order. ;-)


Flags:
The wflinks module makes use of flags. Wfbooks does it also. The flags are used within the sfbooks for the book/file language information.
Because lot of people will, or are using wflinks, and I didn't want to upload all the flags again and again for each separate wfmodule, I changed the directory of the flags to a central place within the uploads: uploads/wfflags/flags_small Instead of the original: uploads/images/flags/flags_small
If you want to make use of this directory also for your wflinks module, there is one file of the wflinks module which you have to adjust:
include/linkloadinfo
Prox line: 109
Adjust: $link['country'] = XOOPS_URL . "/uploads/images/flags/flags_small/" . $country. ".gif";
into:
$link['country'] = XOOPS_URL . "/uploads/wfflags/flags_small/" . $country. ".gif";

In future I will include this adjusted wflinks file within the wfbooks module.
03-03-2008: DONE. wflinks file included. Modules/wflinks/include/linkloadinfo.php  (wflinks version 1.15 RC3). You can simply upload the adjusted file into your wflinks/include directory.



PLease consider, this module has been developed for my personal need, nevertheless I wanted to share it with you. I hope you will enjoy this module and it will fit your needs as it does mine.


Grtz., Shine
For support or bugs please use the forum: www.impresscms.org
or in future:
www.impresscms.nl


This module has been tested under impresscms (Janus version)


Releases:
- 03-03-2008: wfbooks 1.15 RC2



----------------------------

TODO 03-03-2008:

Clean up code further
Make specific updates within wfbooks, which have been done during the release of WFLinks version RC3.








 