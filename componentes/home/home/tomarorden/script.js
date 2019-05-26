/*function iniciarMap(){
    var options = {
        enableHighAccuracy: true,
        timeout: 6000,
        maximumAge: 0
      };
      
      navigator.geolocation.getCurrentPosition( success, error, options );
      
      function success(position) {
        var coordenadas = position.coords;
      
        console.log('Tu posición actual es:');
        console.log('Latitud : ' + coordenadas.latitude);
        console.log('Longitud: ' + coordenadas.longitude);
        console.log('Más o menos ' + coordenadas.accuracy + ' metros.');
        var coord = {lat: coordenadas.latitude ,lng: coordenadas.longitude};
        var map = new google.maps.Map(document.getElementById('map'),{
          zoom: 10,
          center: coord
        });
        var marker = new google.maps.Marker({
          position: coord,
          map: map
        });
      };
      function error(error) {
        console.warn('ERROR(' + error.code + '): ' + error.message);
      };
}*/

