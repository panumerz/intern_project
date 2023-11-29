function onSubmitMessage() {
    conn.send('text')
    //ดึง input ใส่ใน ตัวแปร
    //ตัวแปร ส่ง server
} 
function onMessageUpdate(e) {
    console.log(e.data)
    var message = e.data;
    //นำตัวแปร message ใส่ใน textbox
}
  // Then some JavaScript in the browser:
  var conn = new WebSocket('ws://localhost:3000/chat');
  conn.onmessage = onMessageUpdate;
  conn.onopen = function(e) { conn.send('Hello Me!'); };