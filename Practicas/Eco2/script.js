function iniciarMap(){
    var coord = {lat:9.7489166 ,lng: -83.7534256}; //cordenadas de Costa Rica
    var coord1 = {lat:10.3242185,lng:-84.4313478};//ciudad quesada
    var coord2 = {lat:10.0843362,lng:-84.1118458};//san jose de la montana
    var coord3 = {lat:10.007124, lng:-84.1318386 };//mercedes norte
    var coord4 = {lat: 9.5186381, lng: -84.3305394 }; //parrita
    var coord5 = {lat:9.8642362 , lng: -83.926991}; //biblioteca cartago
    var coord6 = {lat: 9.9370425, lng:-84.0505754 };//ucr
    
    var map = new google.maps.Map(document.getElementById('map'),{
      zoom: 8,
      center: coord
    });
    var marker = new google.maps.Marker({
      position: coord1,
      map: map
    });
    var marker = new google.maps.Marker({
      position: coord2,
      map: map
    });
    var marker = new google.maps.Marker({
      position: coord3,
      map: map
    });
    var marker = new google.maps.Marker({
      position: coord4,
      map: map
    });
    var marker = new google.maps.Marker({
      position: coord5,
      map: map
    });
    var marker = new google.maps.Marker({
      position: coord6,
      map: map
    });
}
