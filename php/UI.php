<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/project/css/UI.css" />

    <script type="text/javascript">
        var conn = new WebSocket('ws://localhost:3000/chat');
        conn.onmessage = function(e) { console.log(e.data); };
        conn.onopen = function(e) { conn.send('Hello Me!'); };
    </script>

    <title>HOME</title>
</head>
<body>
    <div class="page">
        <span class="solomon"><h1>PC Assembly Station</h1></span>
        <div class="content">
            <div class="col1">
                <div class="cam">
                    <iframe src="https://www.youtube.com/watch?v=H-ScWmK4-MU"></iframe>
                </div>
            </div>
            <div class="col2">
                <div class="active">
                    <span><h2>Active Step</h2></span></br>
                    <div class="check">
                        <span class="check1">Cylinder Left</span><input type="checkbox"></br></br>
                        <span class="check2">Cylinder Right</span><input type="checkbox"></br></br>
                        <span class="check3">Electric Plug</span><input type="checkbox">
                    </div>
                </div>
                <div class="display">
                    <span><h2>Display Realtime</h2></span></br>
                    <div class="display_realtime">
                        <span class="dis1">Cylinder Left</span><span class="OK">OK</span></br></br>
                        <span class="dis2">Cylinder Left</span><span class="NG">NG</span></br></br>
                        <span class="dis3">Cylinder Right</span><span class="OK">OK</span></br></br>
                        <span class="dis4">Cylinder Right</span><span class="NG">NG</span></br></br>
                        <span class="dis5">Electric Plug</span><span class="OK">OK</span></br></br>
                        <span class="dis6">Electric Plug</span><span class="NG">NG</span>
                    </div>
                </div>
            </div>
            <div class="col3">
                <div class="details">
                    <span><h2>Details</h2></span></br>
                    <div class="detail">
                        <span class="name_detail">Name: </span></br>
                        <span class="time_detail">Time: </span></br>
                        <span class="processing_time_detail">Processing Time: </span></br></br>
                        <span class="name_detail">Name: </span></br>
                        <span class="time_detail">Time: </span></br>
                        <span class="processing_time_detail">Processing Time: </span></br></br>
                        <span class="name_detail">Name: </span></br>
                        <span class="time_detail">Time: </span></br>
                        <span class="processing_time_detail">Processing Time: </span></br></br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

