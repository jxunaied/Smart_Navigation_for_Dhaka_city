   if (navigator.geolocation){
      navigator.geolocation.getCurrentPosition(showLocation);
      //alert("Geotrack working...");
   }

   function add(){
       if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(showLocation);
      //alert("Geotrack working...");
      } 
    //showLocation(position);
   }

  function errorGettingPosition(err)
  {
    if(err.code==1)
    {
      alert("User denied geolocation.");
    }
    else if(err.code==2)
    {
      alert("Position unavailable.");
    }
    else if(err.code==3)
    {
      alert("Timeout expired.");
    }
    else
    {
      alert("ERROR:"+ err.message);
    }
  }
    
  function showLocation(position){
    var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;
    var freightid = 1; //this is used to identify the freight
  $.ajax({
    type: 'POST',
    url: 'save/getlocation.php', //php to save the tracked locations
    data: 'latitude=' + latitude + '&freightid=' + freightid + '&longitude=' + longitude, //data with coordinates
    success: function(msg) {
      if (msg) {
        console.log("Success");
      } else {
        console.log("Very Bad"); 
      }
       setTimeout(function() {
         add();//this will send request again and again after 4 seconds or time you want. For your case i set it seconds for patients sake
      }, 4000);
    }
  });

}