<!DOCTYPE html>
<html>
<body style="font-family:Arial; text-align:center; background:#f8f8f8;">

<h3>Selecciona un video</h3>


<div style="display:flex; justify-content:center; gap:20px; margin-top:20px;">

  <div onclick="openVideo(1)" style="cursor:pointer; width:200px; border:1px solid #ccc; padding:5px; background:white;">
    <img src="https://img.youtube.com/vi/kPWodVMtVOY/hqdefault.jpg" width="100%">
    <p style="margin-top:5px; font-size:14px;">Como hacer un pan de muerto</p>
  </div>

  <div onclick="openVideo(2)" style="cursor:pointer; width:200px; border:1px solid #ccc; padding:5px; background:white;">
    <img src="https://img.youtube.com/vi/CrXIlcJR1uQ/hqdefault.jpg" width="100%">
    <p style="margin-top:5px; font-size:14px;">Como hacer una catrina</p>
  </div>

  <div onclick="openVideo(3)" style="cursor:pointer; width:200px; border:1px solid #ccc; padding:5px; background:white;">
    <img src="https://img.youtube.com/vi/vzPIlA8S22c/hqdefault.jpg" width="100%">
    <p style="margin-top:5px; font-size:14px;">Como hacer una ofrenda</p>
  </div>

</div>


<div id="popup" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.7); padding:30px; text-align:center;">
  <button onclick="closeVideo()" style="margin-bottom:10px;">Close</button>
  <div id="videoBox" style="max-width:600px; margin:auto;"></div>
</div>

<script>
function openVideo(id){
  var x = new XMLHttpRequest();
  x.open("GET","video.php?id="+id);
  x.onload = function(){
    document.getElementById("videoBox").innerHTML = x.responseText;
    document.getElementById("popup").style.display = "block";
  }
  x.send();
}

function closeVideo(){
  document.getElementById("popup").style.display = "none";
  document.getElementById("videoBox").innerHTML = "";
}
</script>

</body>
</html>
