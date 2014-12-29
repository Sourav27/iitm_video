<!DOCTYPE html>
<html>
    <head>
        <script src="latest.js"></script> 
    </head>
    <body>
        <video height="300" id="localVideo"></video>
        <div id="remotesVideos"></div>
    </body>
<script>
var webrtc = new SimpleWebRTC({
  // the id/element dom element that will hold "our" video
  localVideoEl: 'localVideo',
  // the id/element dom element that will hold remote videos
  remoteVideosEl: 'remotesVideos',
  // immediately ask for camera access
  autoRequestMedia: true
});

// we have to wait until it's ready
webrtc.on('readyToCall', function () {
  // you can name it anything
  webrtc.joinRoom('<?php echo $_GET['r']; ?>');
});

</script>



</html>
