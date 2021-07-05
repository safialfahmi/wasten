<!DOCTYPE html>
<html>
<head>
<body>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.button {
  background-color: #1abc9c;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
form{
margin-top :200px;
}

.header {
 padding: 11px;
  text-align: center;
  background: #1abc9c;
  color: white;
  font-size: 25px;
}
.m{
	margin-top:40px;
}
</style>
<div class="header">
  
  <p>the arm contol and base arm control</p>
</div>


<center>

<div class ="m"><button onclick="document.location='control.php'" name="forward" id="fa" class="button">ARM CONTROL</button> </div>

<div><button onclick="document.location='armbase2.php'" name="backward" id="ba" class="button">BASE CONTROL</button></div>
</center>
<script>
  window.watsonAssistantChatOptions = {
      integrationID: "d42c5546-e7d0-43ce-8ba1-3337d310fb4b", // The ID of this integration.
      region: "eu-gb", // The region your integration is hosted in.
      serviceInstanceID: "ce531fdf-eb66-4837-ab89-23e37af4be24", // The ID of your service instance.
      onLoad: function(instance) { instance.render(); }
    };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
    document.head.appendChild(t);
  });
</script>
</body>
</html>