# netv
**IMPORTANT NOTE** See below

My experiment in web-based teletext emulators. NETV (Non-Editing Teletext Viewer, pronounced Net-VEE) is designed to read in a 7-bit 
teletext page in the tti format and output it as an html page. I got the original html from "https://al.zerostem.io/~al/teletext/" I originally intended NETV to act as the back-end for some front-end controller
page, but I never got round to making that bit. Maybe sombody here can? At the moment, NETV has support for pretty much all colours,
contiguous graphics (not seperated, though it wouldn't be hard to add) and double height. However, more than one control code in succession
is complicated because of the way the html works, and I haven't implemented this yet. If such a 'group' of codes appears in a page, the 
rest of the line is ignored and replaced with 'group'. I should have fixed this, but I haven't bothered because... reasons. The script
is designed to be called on a web server. The page number and subpage number go in the URL.

# NETV IS NOW DISCONTINUED
As of 15/01/2019, I will no longer be working on Netv. It was a fun experiment, but ended up being too complicated for me to get to work properly. As a result, I have abandoned it in favour of viewer-tf, for which I have written some code to use it with .tti. It works a lot better and has better interactivity, etc. You're welcome to fiddle around with this code, but I won't be fixing any more issues.
