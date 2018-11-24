# netv
My experiment in web-based teletext emulators. NETV (Non-Editing Teletext Viewer, pronounced Net-VEE) is designed to read in a 7-bit 
teletext page in the tti format and output it as an html page. I got the original html from "https://al.zerostem.io/~al/teletext/" I originally intended NETV to act as the back-end for some front-end controller
page, but I never got round to making that bit. Maybe sombody here can? At the moment, NETV has support for pretty much all colours,
contiguous graphics (not seperated, though it wouldn't be hard to add) and double height. However, more than one control code in succession
is complicated because of the way the html works, and I haven't implemented this yet. If such a 'group' of codes appears in a page, the 
rest of the line is ignored and replaced with 'group'. I should have fixed this, but I haven't bothered because... reasons. The script
is designed to be called on a web server. The page number and subpage number go in the URL.
