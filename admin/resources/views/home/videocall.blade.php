<html>

    <head>
        <title>Delta Meet</title>
          <link rel="stylesheet" type="text/css" href="{{asset('css/videocall.css')}}">
    </head>
    <body>
        <h1 class="title">Meet Agropedia
            <button ><a href="/home">End meeting</a></button>
        </h1>

        <p id="notification" hidden></p>
        <div class="entry-modal" id="entry-modal">
            <p><h2>Create or Join Meeting</h2> </p>
            <input id="room-input" class="room-input" placeholder="Enter Room ID">
            <div>
                <button onclick="createRoom()">Create Room</button>
                <button onclick="joinRoom()">Join Room</button>

            </div>
        </div>

        <div class="meet-area">
            <!-- Remote Video Element-->

            <video id="remote-video"></video>





            <!-- Local Video Element-->
            <video id="local-video"></video>

        </div>

    </body>

    <script src="https://unpkg.com/peerjs@1.3.1/dist/peerjs.min.js"></script>
    <script type="text/javascript" src="{{asset('js/videocall.js')}}"></script>

</html>
