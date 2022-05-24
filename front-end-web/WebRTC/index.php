<!DOCTYPE html>
<html>
<head>
    <title>Chat Video</title>
    <script src='https://cdn.scaledrone.com/scaledrone.min.js'></script>

</head>
<body>

    <style type="text/css">
        .welcome{
            text-align: center;
            padding: 10px 0;
        }

        body{
            display: flex;
            height: 100vh;
            margin: 0;
            align-items: center;
            justify-content: center;
            padding: 0 50px;
        }

        video{
            max-width: calc(50% - 100px);  
            margin: 0 50px;
            box-sizing: border-box;
            border-radius: 2px;
            padding: 0;
            border: 1px solid #ccc;
        }

        .title{
            position: fixed;
            top: 10px;
            left: 50%;
            transform: translate(-50%, 0);
            font-size: 30px;
        }

    </style>

    <div class="title">Welcome to our chat in real time!</div>

    <video id="localVideo" autoplay muted></video>
    <video id="remoteVideo" autoplay></video>

    <script>
        if(!location.hash){
            location.hash = Math.floor(Math.random() * 0xFFFFFF).toString(16);
        }

        //Location of video room with chat

        const roomHash = location.hash.substring(1);

        //

        //Only change ID if you want to apply in your project

        const drone = new ScaleDrone('yiS12Ts5RdNhebyM');

        //

        //Tracking when someone enters the room

        const roomName = 'observable-'+roomHash;

        //

        //Connection referral server provided by Google

        const configuration = {

            iceServers: [

                {
                    urls: 'stun:stun.l.google.com:19302'
                }
            ]
        }

        let room;
        let pc;

        //Control the number of people in the room

        let number = 0;

        //

        function onSuccess(){};

        function onError(error){
            console.log(error);
        };

        drone.on('open', error => {
            if(error)
                return console.log(error);
            
            room = drone.subscribe(roomName);

            room.on('open',error=>{
                //If an error occurs, we capture it here!
            });


            //Event when someone enters the room
            room.on('members', members=>{

                //console.log("Connected!");

                //console.log("Open connections: "+ members.length);
                number = members.length - 1;
                const isOfferer = members.length >= 2;

                startWebRTC(isOfferer);

            })
            //

        });

        function sendMessage(message){
            drone.publish({
                room: roomName,
                message
            })
        }

        function startWebRTC(isOfferer){

            pc = new RTCPeerConnection(configuration);

            pc.onicecandidate = event =>{
                if(event.candidate){
                    sendMessage({'candidate':event.candidate});
                }
            };

            if(isOfferer){
                pc.onnegotiationneeded = () => {
                    pc.createOffer().then(localDescCreated).catch(onError);
                }
            }

            pc.ontrack = event =>{
                const stream = event.streams[0];

                if(!remoteVideo.srcObject || remoteVideo.srcObject.id !== stream.id){
                    remoteVideo.srcObject = stream;
                }
            }

            navigator.mediaDevices.getUserMedia({
                audio: true,
                video: true,
            }).then(stream => {
                localVideo.srcObject = stream;
                stream.getTracks().forEach(track=>pc.addTrack(track,stream))
            }, onError)

            room.on('member_leave',function(member){
                //User is leave out!
                remoteVideo.style.display = "none";
            })

            room.on('data',(message, client)=>{

                if(client.id === drone.clientId){
                    return;
                }

                if(message.sdp){
                    pc.setRemoteDescription(new RTCSessionDescription(message.sdp), () => {
                        if(pc.remoteDescription.type === 'offer'){
                            pc.createAnswer().then(localDescCreated).catch(onError);
                        }
                    }, onError)
                }else if(message.candidate){
                    pc.addIceCandidate(
                        new RTCIceCandidate(message.candidate), onSuccess, onError
                    )
                }

            })

        }

        function localDescCreated(desc){
            pc.setLocalDescription(
                desc, () => sendMessage({'sdp': pc.localDescription}), onError
            );
        }
        
    </script>

</body>
</html>