# VideoStreamShow
The repository is a sipmple rtmpserver that can use for realtime streaming and video for demand.

Installation:

1. install nginx or any other webserver;
2. install php, use module or cgi;
3. unpack this repo to your webroot.
4. install crtmpserver,needs cmake,openssl,etc.;
5. configure crtmpserver.lua, set mediaFolder where video is.
6. adapt the flowplayer setting in pages/*.html to meet your video.
7. start the nginx and crtmpserver.

Bootstrap is used to build the site and webplayer is flowplayer.<br>
Here is a sample site:101.251.247.18, for reference.
