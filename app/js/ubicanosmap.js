function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 13,
    center: {lat: 20.685930, lng: -103.381067},
    mapTypeControl: false
  });
  //var image = 'http://google.com/mapfiles/ms/miconslightblue.png';
  var marker = new google.maps.Marker({
    position: {lat: 20.70873875014936, lng: -103.31315025947072},
    map: map,
    //icon: image
  });

  $(document).ready(function() {
    $("#cdc1").click(function(){
        var center = new google.maps.LatLng(20.70873875014936,-103.31315025947072);
        map.panTo(center);
        infowindow.open(map, marker);
    });
  });

  var contentString = '<div id="content" style="font-family:Exo;">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h6 id="firstHeading" class="firstHeading" style="color:#1fcfcb;"><b>CDC 01</b></h6>'+
            '<div id="bodyContent">'+
            '<p>Belisario Domínguez No. 2635'+
            '<br>Col. La Esperanza'+
            '<br>Tel. 1202-4860</p>'+
            '</div></div>';
  var infowindow = new google.maps.InfoWindow({
    content: contentString,
    maxWidth: 200
  });
  marker.addListener('click', function() {
    infowindow.open(map, marker);
  });
}
