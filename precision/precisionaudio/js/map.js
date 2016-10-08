function initialize() {
  var china = new google.maps.LatLng(30.153903, 109.862968);
  var store1 = new google.maps.LatLng(23.1143626,113.2823445); /*setting the new location*/
  var store2= new google.maps.LatLng(31.2669242,121.4687722);
  var store3 = new google.maps.LatLng(22.5472827,114.0848396);
  var store4 = new google.maps.LatLng(25.0502396,102.6679957);
  var mapOptions = {
    zoom: 5,
    center: china
  };
	/*open the new google map by ID*/
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
	
	/*set up the info window's content*/
  var infowindow1 = new google.maps.InfoWindow({
      content:'<div class= "info">&nbsp;<h6>（廣州）典範音響</h6> <p>地址：廣州市越秀區大沙頭路21號海印廣場A063檔</p> <p> 電話：020-83851190</p> </div>'
  })
  
  var infowindow2 = new google.maps.InfoWindow({
      content:'<div class= "info">&nbsp;<h6>（上海）一連視聽商行</h6> <p>地址：上海市虹口區廣中路88號一樓</p> <p> 電話：021-64475211</p> </div>'
  }); 
  
   var infowindow3 = new google.maps.InfoWindow({
      content:'<div class= "info">&nbsp;<h6>（深圳）佳韻音響實業有限公司</h6> <p>地址：深圳市華強北路萬商電器城三樓3F39B</p> <p> 電話：0755-83763639</p> </div>'
  });
  
   var infowindow4 = new google.maps.InfoWindow({
      content:'<div class= "info">&nbsp;<h6>（雲南）藍途影音器材經營部</h6> <p>地址：昆明市高新區茭菱路正大紫都城4樓北區14號</p> <p> 電話：0871-5376233</p> </div>'
  });
	/*set up the new Marker according to position */
  var marker1 = new google.maps.Marker({
      position: store1,
      map: map,
      title: '（廣州）典範音響',
	  icon: 'img/marker.png'
  });
  
  var marker2 = new google.maps.Marker({
      position: store2,
      map: map,
      title: '（上海）一連視聽商行',
	  icon: 'img/marker.png'
  });
  
  var marker3 = new google.maps.Marker({
      position: store3,
      map: map,
      title: '（深圳）佳韻音響實業有限公司',
	  icon: 'img/marker.png'
  });
  var marker4 = new google.maps.Marker({
      position: store4,
      map: map,
      title: '（雲南）藍途影音器材經營部',
	  icon: 'img/marker.png'
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