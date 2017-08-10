function initialize() {
  var china = new google.maps.LatLng(30.153903, 109.862968);
  var store1 = new google.maps.LatLng(23.1143626,113.2823445); /*setting the new location*/
  var store2= new google.maps.LatLng(31.2669242,121.4687722);
  var store3 = new google.maps.LatLng(22.5472827,114.0848396);
  var store4 = new google.maps.LatLng(25.0502396,102.6679957);
  var store5 = new google.maps.LatLng(34.2434366,108.959921);
  var store6 = new google.maps.LatLng(39.923529,116.5569273);
  var store7 = new google.maps.LatLng(24.463272,118.0787833);
  var store8 = new google.maps.LatLng(38.8342679,117.4547277);
  var store9 = new google.maps.LatLng(30.6817671,104.0750927);
  var store10 = new google.maps.LatLng(22.5362913,114.0277579);
  var store11 = new google.maps.LatLng(28.651625,121.4137743);
  var store12 = new google.maps.LatLng(23.1143626,113.4823445);
  var store13= new google.maps.LatLng(31.2569242,121.4687722);
  var store14 = new google.maps.LatLng(39.913529,116.5569273);
  var store15 = new google.maps.LatLng(32.033749,118.7853083);
  var store16 = new google.maps.LatLng(22.3185938,114.1677891);   
  var store17 = new google.maps.LatLng(22.3203007,114.1653514); 
  var store18 = new google.maps.LatLng(22.3203007,114.1653514); 
  var store19 = new google.maps.LatLng(22.2003636,113.5417955); 
  var store20 = new google.maps.LatLng(22.2837729,114.1536913);  
  var store21 = new google.maps.LatLng(22.3203007,114.1653514);  
  var store22 = new google.maps.LatLng(22.3322109,114.1588143);
  var store23 = new google.maps.LatLng(22.323475,114.1666233);    
  var store24 = new google.maps.LatLng(22.316106,114.1893973);  
  
  var mapOptions = {
    zoom: 5,
    center: china
  };
	/*open the new google map by ID*/
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
	
	/*set up the info window's content*/
  var infowindow1 = new google.maps.InfoWindow({
      content:'<div class= "info">&nbsp;<h6>（廣州）典範音響</h6> <p>地址：廣州市越秀區大沙頭路21號海印廣場A063檔</p> <p> 電話：020-83851190 </p><p>經營品牌：Scansonic、Raidho、Ansuz、Hana、MC</p></div>'
  })
  
  var infowindow2 = new google.maps.InfoWindow({
      content:'<div class= "info">&nbsp;<h6>（上海）一連視聽商行</h6> <p>地址：上海市虹口區廣中路88號一樓</p> <p> 電話：021-64475211</p><p>經營品牌：Scansonic、Aavik、Raidho、Ansuz、Hana</p></div>'
  }); 
  
   var infowindow3 = new google.maps.InfoWindow({
      content:'<div class= "info">&nbsp;<h6>（深圳）佳韻音響實業有限公司</h6> <p>地址：深圳市華強北路萬商電器城三樓3F39B</p><p>電話：0755-8376 3639</p><p>經營品牌：Scansonic、Ansuz</p> </div>'
  });
  
   var infowindow4 = new google.maps.InfoWindow({
      content:'<div class= "info">&nbsp;<h6>（雲南）藍途影音器材經營部</h6> <p>地址：昆明市高新區茭菱路正大紫都城4樓北區14號</p> <p> 電話：0871-5376233</p> <p>經營品牌：Scansonic</p></div>'
  });
   var infowindow5 = new google.maps.InfoWindow({
      content:'<div class= "info">&nbsp;<h6>（西安）別超音響</h6> <p>地址：西安市雁塔區雁塔路李家村萬達廣場二棟一單元15層15室</p> <p> 電話：029-85563223</p><p>經營品牌：Hana</p> </div>'
  });
   var infowindow6 = new google.maps.InfoWindow({
      content:'<div class= "info">&nbsp;<h6>（北京）百寶城影音體驗館</h6> <p>地址：北京市朝陽區朝陽北路50號——百寶城影音體驗館</p> <p> 電話：010-64828650</p><p>經營品牌：Scansonic、MC</p> </div>'
  });
   var infowindow7 = new google.maps.InfoWindow({
      content:'<div class= "info">&nbsp;<h6>（廈門）韻祥音響</h6> <p>地址：廈門市思明區禾祥西路8號-95</p> <p> 電話：0591-2280705</p><p>經營品牌：Scansonic、Ansuz</p> </div>'
  });
   var infowindow8 = new google.maps.InfoWindow({
      content:'<div class= "info">&nbsp;<h6>（天津） 菲凡音響</h6> <p>地址：天津市大港區迎新路174號</p> <p> 電話：022-63300011</p></div>'
  });
   var infowindow9 = new google.maps.InfoWindow({
      content:'<div class= "info">&nbsp;<h6>（成都）新德比音響</h6> <p>地址：成都市金牛區成華街9號附24-25號</p> <p> 電話：028-83228881</p></div>'
  });
   var infowindow10 = new google.maps.InfoWindow({
      content:'<div class= "info">&nbsp;<h6>（深圳）必達音響</h6> <p>地址：深圳市南山區深南大道6009號綠景廣場C棟26B</p> <p> 電話：0755-83287111</p> </div>'
  });
   var infowindow11 = new google.maps.InfoWindow({
      content:'<div class= "info">&nbsp;<h6>（台州）藝卿電子科技有限公司</h6> <p>地址：台州市椒江區鑫泰街132-136號</p> <p> 電話：0756-88300559</p> </div>'
  });
  
   var infowindow12 = new google.maps.InfoWindow({
      content:'<div class= "info">&nbsp;<h6>（廣州）恒業電子</h6> <p>地址：廣州市越秀區中山五路219 號中旅商業城五樓C12 鋪</p> <p> 電話：020－62929396</p> <p>經營品牌：Hana</p></div>'
  });
  
   var infowindow13 = new google.maps.InfoWindow({
      content:'<div class= "info">&nbsp;<h6>（上海）名線屋</h6> <p>地址：上海市黃浦區中山南路1820 號麗影音響廣場1 樓109 館</p> <p> 電話：021-33665810</p> <p>經營品牌：Ansuz</p></div>'
  });
  
   var infowindow14 = new google.maps.InfoWindow({
      content:'<div class= "info">&nbsp;<h6>（北京）高斯音響</h6> <p>地址：北京市海澱區馬甸東路19 號金澳國際2623 室</p> <p> 電話：010-82207838</p><p>經營品牌：Ansuz、Hana</p> </div>'
  });

   var infowindow15 = new google.maps.InfoWindow({
      content:'<div class= "info">&nbsp;<h6>（南京）三越音響</h6> <p>地址：南京市秦淮區洪武路261 號409 室</p> <p> 電話：025-84514296</p><p>經營品牌：M2Tech</p> </div>'
  });  
  
   var infowindow16 = new google.maps.InfoWindow({
      content:'<div class= "info">&nbsp;<h6>（旺角）華仁影音</h6> <p>地址：旺角西洋菜街51號友誠商業中心10字樓</p> <p> 電話：852-2787 7992</p><p>經銷品牌:Ansuz ,Hana ,M2tech , NAD , psb , Raidho , Scansonic</p> </div>'
  });  

   var infowindow17 = new google.maps.InfoWindow({
      content:'<div class= "info">&nbsp;<h6>（旺角）天下影音</h6> <p>地址：旺角西洋菜街51號友誠商業中心16字樓</p> <p> 電話：852-2789 1733</p><p>經銷品牌: NAD</p> </div>'
  });   
  
   var infowindow18 = new google.maps.InfoWindow({
      content:'<div class= "info">&nbsp;<h6>（旺角）國際影音</h6> <p>地址：旺角西洋菜街51號友誠商業中心7字樓</p> <p> 電話：852-2191 5803</p><p>經銷品牌: NAD</p> </div>'
  });  
  
   var infowindow19 = new google.maps.InfoWindow({
      content:'<div class= "info">&nbsp;<h6>（澳門）萬眾音響</h6> <p>地址：澳門連勝馬路12A-B, 信耀大廈地下(近鏡湖醫院-消防局)</p> <p> 電話：853-2853 0210</p><p>經銷品牌:Ansuz , NAD , Scansonic</p> </div>'
  });   
  
   var infowindow20 = new google.maps.InfoWindow({
      content:'<div class= "info">&nbsp;<h6>（中環）Choice Hi Fi Collection</h6> <p>地址：中環域多利皇后街8號鴻基大廈1702室</p> <p> 電話：852-2526 3383</p><p>經銷品牌: Hana</p> </div>'
  });   
  
   var infowindow21 = new google.maps.InfoWindow({
      content:'<div class= "info">&nbsp;<h6>（旺角）忠信影音中心</h6> <p>地址：旺角西洋菜南街2T號添置商業中心3樓</p> <p> 電話：852-2770 8600</p><p>經銷品牌: Hana , NAD </p> </div>'
  });  
  
   var infowindow22 = new google.maps.InfoWindow({
      content:'<div class= "info">&nbsp;<h6>（深水埗）九龍影音</h6> <p>地址：深水埗欽州街64A地下</p> <p> 電話：852-2720 8899</p><p>經銷品牌: NAD , PSB</p> </div>'
  }); 

   var infowindow23 = new google.maps.InfoWindow({
      content:'<div class= "info">&nbsp;<h6>（太子）新華音響</h6> <p>地址：旺角彌敦道760號東海大廈4樓33室</p> <p> 電話：852-2381 8125</p><p>經銷品牌: Hana</p> </div>'
  }); 
  
   var infowindow24 = new google.maps.InfoWindow({
      content:'<div class= "info">&nbsp;<h6>（土瓜灣）V8 HiFi</h6> <p>地址：九龍土瓜灣旭日街十一號 志聯昌工業大樓 四字樓B1室</p> <p> 電話：852- 2858 0638</p><p>經銷品牌: Ansuz ,Hana , NAD , Scansonic</p> </div>'
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
  var marker5 = new google.maps.Marker({
      position: store5,
      map: map,
      title: '（西安）別超音響 ',
	  icon: 'img/marker.png'
  });
  
  var marker6 = new google.maps.Marker({
      position: store6,
      map: map,
      title: '（北京）百寶城影音體驗館',
	  icon: 'img/marker.png'
  });
  
  var marker7 = new google.maps.Marker({
      position: store7,
      map: map,
      title: '（廈門）韻祥音響',
	  icon: 'img/marker.png'
  });
  var marker8 = new google.maps.Marker({
      position: store8,
      map: map,
      title: '（天津） 菲凡音響',
	  icon: 'img/marker.png'
  });
  var marker9 = new google.maps.Marker({
      position: store9,
      map: map,
      title: '（成都）新德比音響',
	  icon: 'img/marker.png'
  });
  
  var marker10 = new google.maps.Marker({
      position: store10,
      map: map,
      title: '（深圳）必達音響',
	  icon: 'img/marker.png'
  });
  var marker11 = new google.maps.Marker({
      position: store11,
      map: map,
      title: '（台州）藝卿電子科技有限公司',
	  icon: 'img/marker.png'
  });
  
  
  var marker12 = new google.maps.Marker({
      position: store12,
      map: map,
      title: '（廣州）恒業電子',
	  icon: 'img/marker.png'
  });
  
  var marker13 = new google.maps.Marker({
      position: store13,
      map: map,
      title: '（上海）名線屋',
	  icon: 'img/marker.png'
  });
  
  var marker14 = new google.maps.Marker({
      position: store14,
      map: map,
      title: '（北京）高斯音響',
	  icon: 'img/marker.png'
  });
  var marker15 = new google.maps.Marker({
      position: store15,
      map: map,
      title: '（南京）三越音響',
	  icon: 'img/marker.png'
  });
  var marker16 = new google.maps.Marker({
      position: store16,
      map: map,
      title: '（旺角）華仁影音 ',
	  icon: 'img/marker.png'
  });
  
  var marker17 = new google.maps.Marker({
      position: store17,
      map: map,
      title: '（旺角）天下影音',
	  icon: 'img/marker.png'
  });
  
  var marker18 = new google.maps.Marker({
      position: store18,
      map: map,
      title: '（旺角）國際影音',
	  icon: 'img/marker.png'
  });
  var marker19 = new google.maps.Marker({
      position: store19,
      map: map,
      title: '（澳門）萬眾音響',
	  icon: 'img/marker.png'
  });
  var marker20 = new google.maps.Marker({
      position: store20,
      map: map,
      title: '中環）Choice Hi Fi Collection',
	  icon: 'img/marker.png'
  });
  
  var marker21 = new google.maps.Marker({
      position: store21,
      map: map,
      title: '（旺角）忠信影音中心<',
	  icon: 'img/marker.png'
  });
  var marker22 = new google.maps.Marker({
      position: store22,
      map: map,
      title: '（深水埗）九龍影音',
	  icon: 'img/marker.png'
  });  
  
  var marker23 = new google.maps.Marker({
      position: store23,
      map: map,
      title: '（太子）新華音響<',
	  icon: 'img/marker.png'
  });
  var marker24 = new google.maps.Marker({
      position: store24,
      map: map,
      title: '（土瓜灣）V8 HiFi',
	  icon: 'img/marker.png'
  });
  
  /*make a click event*/
  google.maps.event.addListener(marker1, 'click', function() {
    infowindow2.close();
	infowindow3.close();
	infowindow4.close();
	infowindow5.close();
	infowindow6.close();
	infowindow7.close();
	infowindow8.close();
	infowindow9.close();
	infowindow10.close();
	infowindow11.close();
    infowindow12.close();
	infowindow13.close();
	infowindow14.close();
	infowindow15.close();
	infowindow16.close();
	infowindow17.close();
	infowindow18.close();
	infowindow19.close();
	infowindow20.close();
	infowindow21.close();
	infowindow22.close();
	infowindow23.close();
	infowindow24.close();		
    infowindow1.open(map,marker1);
  });
  
    google.maps.event.addListener(marker2, 'click', function() {
    infowindow1.close();
	infowindow3.close();
	infowindow4.close();
	infowindow5.close();
	infowindow6.close();
	infowindow7.close();
	infowindow8.close();
	infowindow9.close();
	infowindow10.close();
	infowindow11.close();
    infowindow12.close();
	infowindow13.close();
	infowindow14.close();
	infowindow15.close();
	infowindow16.close();
	infowindow17.close();
	infowindow18.close();
	infowindow19.close();
	infowindow20.close();
	infowindow21.close();
	infowindow22.close();
	infowindow23.close();
	infowindow24.close();
    infowindow2.open(map,marker2);	
  });
  
    google.maps.event.addListener(marker3, 'click', function() {
    infowindow1.close();
	infowindow2.close();
	infowindow4.close();
	infowindow5.close();
	infowindow6.close();
	infowindow7.close();
	infowindow8.close();
	infowindow9.close();
	infowindow10.close();
	infowindow11.close();
    infowindow12.close();
	infowindow13.close();
	infowindow14.close();
	infowindow15.close();
	infowindow16.close();
	infowindow17.close();
	infowindow18.close();
	infowindow19.close();
	infowindow20.close();
	infowindow21.close();
	infowindow22.close();
	infowindow23.close();
	infowindow24.close();
    infowindow3.open(map,marker3);	
  });
  
  google.maps.event.addListener(marker4, 'click', function() {
    infowindow1.close();
	infowindow2.close();
	infowindow3.close();
	infowindow5.close();
	infowindow6.close();
	infowindow7.close();
	infowindow8.close();
	infowindow9.close();
	infowindow10.close();
	infowindow11.close();
    infowindow12.close();
	infowindow13.close();
	infowindow14.close();
	infowindow15.close();
	infowindow16.close();
	infowindow17.close();
	infowindow18.close();
	infowindow19.close();
	infowindow20.close();
	infowindow21.close();
	infowindow22.close();
	infowindow23.close();
	infowindow24.close();
    infowindow4.open(map,marker4);	
  });
  
    google.maps.event.addListener(marker5, 'click', function() {
    infowindow1.close();
	infowindow2.close();
	infowindow3.close();
	infowindow4.close();
	infowindow6.close();
	infowindow7.close();
	infowindow8.close();
	infowindow9.close();
	infowindow10.close();
	infowindow11.close();
    infowindow12.close();
	infowindow13.close();
	infowindow14.close();
	infowindow15.close();
	infowindow16.close();
	infowindow17.close();
	infowindow18.close();
	infowindow19.close();
	infowindow20.close();
	infowindow21.close();
	infowindow22.close();
	infowindow23.close();
	infowindow24.close();
    infowindow5.open(map,marker5);	
  });
  
  google.maps.event.addListener(marker6, 'click', function() {
    infowindow1.close();
	infowindow3.close();
	infowindow4.close();
	infowindow5.close();
	infowindow2.close();
	infowindow7.close();
	infowindow8.close();
	infowindow9.close();
	infowindow10.close();
	infowindow11.close();
    infowindow12.close();
	infowindow13.close();
	infowindow14.close();
	infowindow15.close();
	infowindow16.close();
	infowindow17.close();
	infowindow18.close();
	infowindow19.close();
	infowindow20.close();
	infowindow21.close();
	infowindow22.close();
	infowindow23.close();
	infowindow24.close();
    infowindow6.open(map,marker6);	
  });
  
  google.maps.event.addListener(marker7, 'click', function() {
    infowindow1.close();
	infowindow3.close();
	infowindow4.close();
	infowindow5.close();
	infowindow6.close();
	infowindow2.close();
	infowindow8.close();
	infowindow9.close();
	infowindow10.close();
	infowindow11.close();
    infowindow12.close();
	infowindow13.close();
	infowindow14.close();
	infowindow15.close();
	infowindow16.close();
	infowindow17.close();
	infowindow18.close();
	infowindow19.close();
	infowindow20.close();
	infowindow21.close();
	infowindow22.close();
	infowindow23.close();
	infowindow24.close();
    infowindow7.open(map,marker7);	
  });
  
  google.maps.event.addListener(marker8, 'click', function() {
    infowindow1.close();
	infowindow3.close();
	infowindow4.close();
	infowindow5.close();
	infowindow6.close();
	infowindow7.close();
	infowindow2.close();
	infowindow9.close();
	infowindow10.close();
	infowindow11.close();
    infowindow12.close();
	infowindow13.close();
	infowindow14.close();
	infowindow15.close();
	infowindow16.close();
	infowindow17.close();
	infowindow18.close();
	infowindow19.close();
	infowindow20.close();
	infowindow21.close();
	infowindow22.close();
	infowindow23.close();
	infowindow24.close();
    infowindow8.open(map,marker8);	
  });
  
  google.maps.event.addListener(marker9, 'click', function() {
    infowindow1.close();
	infowindow3.close();
	infowindow4.close();
	infowindow5.close();
	infowindow6.close();
	infowindow7.close();
	infowindow8.close();
	infowindow2.close();
	infowindow10.close();
	infowindow11.close();
    infowindow12.close();
	infowindow13.close();
	infowindow14.close();
	infowindow15.close();
	infowindow16.close();
	infowindow17.close();
	infowindow18.close();
	infowindow19.close();
	infowindow20.close();
	infowindow21.close();
	infowindow22.close();
	infowindow23.close();
	infowindow24.close();
    infowindow9.open(map,marker9);	
  });
  
  google.maps.event.addListener(marker10, 'click', function() {
    infowindow1.close();
	infowindow3.close();
	infowindow4.close();
	infowindow5.close();
	infowindow6.close();
	infowindow7.close();
	infowindow8.close();
	infowindow9.close();
	infowindow2.close();
	infowindow11.close();
    infowindow12.close();
	infowindow13.close();
	infowindow14.close();
	infowindow15.close();
	infowindow16.close();
	infowindow17.close();
	infowindow18.close();
	infowindow19.close();
	infowindow20.close();
	infowindow21.close();
	infowindow22.close();
	infowindow23.close();
	infowindow24.close();
    infowindow10.open(map,marker10);	
  });
  
  google.maps.event.addListener(marker11, 'click', function() {
    infowindow1.close();
	infowindow3.close();
	infowindow4.close();
	infowindow5.close();
	infowindow6.close();
	infowindow7.close();
	infowindow8.close();
	infowindow9.close();
	infowindow10.close();
	infowindow2.close();
    infowindow12.close();
	infowindow13.close();
	infowindow14.close();
	infowindow15.close();
	infowindow16.close();
	infowindow17.close();
	infowindow18.close();
	infowindow19.close();
	infowindow20.close();
	infowindow21.close();
	infowindow22.close();
	infowindow23.close();
	infowindow24.close();
    infowindow11.open(map,marker11);	
  });
  
  

  google.maps.event.addListener(marker12, 'click', function() {
    infowindow1.close();
	infowindow3.close();
	infowindow4.close();
	infowindow5.close();
	infowindow6.close();
	infowindow7.close();
	infowindow8.close();
	infowindow9.close();
	infowindow10.close();
	infowindow11.close();
    infowindow2.close();
	infowindow13.close();
	infowindow14.close();
	infowindow15.close();
	infowindow16.close();
	infowindow17.close();
	infowindow18.close();
	infowindow19.close();
	infowindow20.close();
	infowindow21.close();
	infowindow22.close();
	infowindow23.close();
	infowindow24.close();
    infowindow12.open(map,marker12);	
  });
  
  google.maps.event.addListener(marker13, 'click', function() {
    infowindow1.close();
	infowindow3.close();
	infowindow4.close();
	infowindow5.close();
	infowindow6.close();
	infowindow7.close();
	infowindow8.close();
	infowindow9.close();
	infowindow10.close();
	infowindow11.close();
    infowindow12.close();
	infowindow2.close();
	infowindow14.close();
	infowindow15.close();
	infowindow16.close();
	infowindow17.close();
	infowindow18.close();
	infowindow19.close();
	infowindow20.close();
	infowindow21.close();
	infowindow22.close();
	infowindow23.close();
	infowindow24.close();
    infowindow13.open(map,marker13);	
  });
  
  google.maps.event.addListener(marker14, 'click', function() {
    infowindow1.close();
	infowindow3.close();
	infowindow4.close();
	infowindow5.close();
	infowindow6.close();
	infowindow7.close();
	infowindow8.close();
	infowindow9.close();
	infowindow10.close();
	infowindow11.close();
    infowindow12.close();
	infowindow13.close();
	infowindow2.close();
	infowindow15.close();
	infowindow16.close();
	infowindow17.close();
	infowindow18.close();
	infowindow19.close();
	infowindow20.close();
	infowindow21.close();
	infowindow22.close();
	infowindow23.close();
	infowindow24.close();
    infowindow14.open(map,marker14);	
  });
  
  google.maps.event.addListener(marker15, 'click', function() {
    infowindow1.close();
	infowindow3.close();
	infowindow4.close();
	infowindow5.close();
	infowindow6.close();
	infowindow7.close();
	infowindow8.close();
	infowindow9.close();
	infowindow10.close();
	infowindow11.close();
    infowindow12.close();
	infowindow13.close();
	infowindow14.close();
	infowindow2.close();
	infowindow16.close();
	infowindow17.close();
	infowindow18.close();
	infowindow19.close();
	infowindow20.close();
	infowindow21.close();
	infowindow22.close();
	infowindow23.close();
	infowindow24.close();
    infowindow15.open(map,marker15);	
  });
  
    google.maps.event.addListener(marker16, 'click', function() {
    infowindow1.close();
	infowindow3.close();
	infowindow4.close();
	infowindow5.close();
	infowindow6.close();
	infowindow7.close();
	infowindow8.close();
	infowindow9.close();
	infowindow10.close();
	infowindow11.close();
    infowindow12.close();
	infowindow13.close();
	infowindow14.close();
	infowindow15.close();
	infowindow2.close();
	infowindow17.close();
	infowindow18.close();
	infowindow19.close();
	infowindow20.close();
	infowindow21.close();
	infowindow22.close();
	infowindow23.close();
	infowindow24.close();
    infowindow16.open(map,marker16);	
  });
  
  google.maps.event.addListener(marker17, 'click', function() {
    infowindow1.close();
	infowindow3.close();
	infowindow4.close();
	infowindow5.close();
	infowindow6.close();
	infowindow7.close();
	infowindow8.close();
	infowindow9.close();
	infowindow10.close();
	infowindow11.close();
    infowindow12.close();
	infowindow13.close();
	infowindow14.close();
	infowindow15.close();
	infowindow16.close();
	infowindow2.close();
	infowindow18.close();
	infowindow19.close();
	infowindow20.close();
	infowindow21.close();
	infowindow22.close();
	infowindow23.close();
	infowindow24.close();
    infowindow17.open(map,marker17);	
  });
  
  google.maps.event.addListener(marker18, 'click', function() {
    infowindow1.close();
	infowindow3.close();
	infowindow4.close();
	infowindow5.close();
	infowindow6.close();
	infowindow7.close();
	infowindow8.close();
	infowindow9.close();
	infowindow10.close();
	infowindow11.close();
    infowindow12.close();
	infowindow13.close();
	infowindow14.close();
	infowindow15.close();
	infowindow16.close();
	infowindow17.close();
	infowindow2.close();
	infowindow19.close();
	infowindow20.close();
	infowindow21.close();
	infowindow22.close();
	infowindow23.close();
	infowindow24.close();
    infowindow18.open(map,marker18);	
  });
  
  google.maps.event.addListener(marker19, 'click', function() {
    infowindow1.close();
	infowindow3.close();
	infowindow4.close();
	infowindow5.close();
	infowindow6.close();
	infowindow7.close();
	infowindow8.close();
	infowindow9.close();
	infowindow10.close();
	infowindow11.close();
    infowindow12.close();
	infowindow13.close();
	infowindow14.close();
	infowindow15.close();
	infowindow16.close();
	infowindow17.close();
	infowindow18.close();
	infowindow2.close();
	infowindow20.close();
	infowindow21.close();
	infowindow22.close();
	infowindow23.close();
	infowindow24.close();
    infowindow19.open(map,marker19);	
  });
  
  google.maps.event.addListener(marker20, 'click', function() {
    infowindow1.close();
	infowindow3.close();
	infowindow4.close();
	infowindow5.close();
	infowindow6.close();
	infowindow7.close();
	infowindow8.close();
	infowindow9.close();
	infowindow10.close();
	infowindow11.close();
    infowindow12.close();
	infowindow13.close();
	infowindow14.close();
	infowindow15.close();
	infowindow16.close();
	infowindow17.close();
	infowindow18.close();
	infowindow19.close();
	infowindow2.close();
	infowindow21.close();
	infowindow22.close();
	infowindow23.close();
	infowindow24.close();
    infowindow20.open(map,marker20);	
  });
  
  google.maps.event.addListener(marker21, 'click', function() {
    infowindow1.close();
	infowindow3.close();
	infowindow4.close();
	infowindow5.close();
	infowindow6.close();
	infowindow7.close();
	infowindow8.close();
	infowindow9.close();
	infowindow10.close();
	infowindow11.close();
    infowindow12.close();
	infowindow13.close();
	infowindow14.close();
	infowindow15.close();
	infowindow16.close();
	infowindow17.close();
	infowindow18.close();
	infowindow19.close();
	infowindow20.close();
	infowindow2.close();
	infowindow22.close();
	infowindow23.close();
	infowindow24.close();
    infowindow21.open(map,marker21);	
  });
  
  google.maps.event.addListener(marker22, 'click', function() {
    infowindow1.close();
	infowindow3.close();
	infowindow4.close();
	infowindow5.close();
	infowindow6.close();
	infowindow7.close();
	infowindow8.close();
	infowindow9.close();
	infowindow10.close();
	infowindow11.close();
    infowindow12.close();
	infowindow13.close();
	infowindow14.close();
	infowindow15.close();
	infowindow16.close();
	infowindow17.close();
	infowindow18.close();
	infowindow19.close();
	infowindow20.close();
	infowindow21.close();
	infowindow2.close();
	infowindow23.close();
	infowindow24.close();
    infowindow22.open(map,marker22);	
  }); 

  
  google.maps.event.addListener(marker23, 'click', function() {
    infowindow1.close();
	infowindow3.close();
	infowindow4.close();
	infowindow5.close();
	infowindow6.close();
	infowindow7.close();
	infowindow8.close();
	infowindow9.close();
	infowindow10.close();
	infowindow11.close();
    infowindow12.close();
	infowindow13.close();
	infowindow14.close();
	infowindow15.close();
	infowindow16.close();
	infowindow17.close();
	infowindow18.close();
	infowindow19.close();
	infowindow20.close();
	infowindow21.close();
	infowindow22.close();
	infowindow2.close();
	infowindow24.close();
    infowindow23.open(map,marker23);	
  });
  
  google.maps.event.addListener(marker24, 'click', function() {
    infowindow1.close();
	infowindow3.close();
	infowindow4.close();
	infowindow5.close();
	infowindow6.close();
	infowindow7.close();
	infowindow8.close();
	infowindow9.close();
	infowindow10.close();
	infowindow11.close();
    infowindow12.close();
	infowindow13.close();
	infowindow14.close();
	infowindow15.close();
	infowindow16.close();
	infowindow17.close();
	infowindow18.close();
	infowindow19.close();
	infowindow20.close();
	infowindow21.close();
	infowindow22.close();
	infowindow23.close();
	infowindow2.close();
    infowindow24.open(map,marker24);	
  });
    
  
}