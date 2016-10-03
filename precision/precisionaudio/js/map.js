function initialize() {
  var anzacSquare = new google.maps.LatLng(-27.46652294,153.0266484); /*setting the new location*/
  var cathedralSquare= new google.maps.LatLng(-27.46346688,153.0290839);
  var kingEdwardPark = new google.maps.LatLng(-27.46592964,153.0240113);
  var postOfficeSquare = new google.maps.LatLng(-27.4672845,153.027396);
  var mapOptions = {
    zoom: 15,
    center: anzacSquare
  };
	/*open the new google map by ID*/
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
	
	/*set up the info window's content*/
  var infowindow1 = new google.maps.InfoWindow({
      content:'<div style="width:200px; height:80px" ><h6>More inforatmion:</h6> <br>Visit &nbsp; <a href="anzacSquare.html"> Anzac Square</a></div>'
  });
  
  var infowindow2 = new google.maps.InfoWindow({
      content:'<div style="width:200px; height:80px" ><h6>More inforatmion:</h6> <br>Visit &nbsp; <a href="cathedralSquare.html"> Cathedral Square</a></div>'
  }); 
  
   var infowindow3 = new google.maps.InfoWindow({
      content:'<div style="width:200px; height:80px" ><h6>More inforatmion:</h6> <br>Visit &nbsp; <a href="kingEdwardPark.html"> King Edward Park</a></div>'
  });
  
   var infowindow4 = new google.maps.InfoWindow({
      content:'<div style="width:200px; height:80px" ><h6>More inforatmion:</h6> <br>Visit &nbsp; <a href="postOfficeSquare.html"> Post Office Square</a></div>'
  });
	/*set up the new Marker according to position */
  var marker1 = new google.maps.Marker({
      position: anzacSquare,
      map: map,
      title: 'Anzac Square',
	  icon: 'images/blue_MarkerA.png'
  });
  
  var marker2 = new google.maps.Marker({
      position: cathedralSquare,
      map: map,
      title: 'Cathedral Square',
	  icon: 'images/darkgreen_MarkerB.png'
  });
  
  var marker3 = new google.maps.Marker({
      position: kingEdwardPark,
      map: map,
      title: 'King Edward Park)',
	  icon: 'images/orange_MarkerC.png'
  });
  var marker4 = new google.maps.Marker({
      position: postOfficeSquare,
      map: map,
      title: 'Post Office Square',
	  icon: 'images/pink_MarkerD.png'
  });
  
  /*make a click event*/
  google.maps.event.addListener(marker1, 'click', function() {
    infowindow2.close();
	infowindow3.close();
	infowindow4.close();
    infowindow1.open(map,marker1);
  });
  
  google.maps.event.addListener(marker2, 'click', function() {
    infowindow1.close();
	infowindow3.close();
	infowindow4.close();
    infowindow2.open(map,marker2);
  });
  
  google.maps.event.addListener(marker3, 'click', function() {
	infowindow1.close();
	infowindow2.close();
	infowindow4.close();
    infowindow3.open(map,marker3);
  });
  
  google.maps.event.addListener(marker4, 'click', function() {
    infowindow1.close();
	infowindow2.close();
	infowindow3.close();
    infowindow4.open(map,marker4);
  });
  
  
}