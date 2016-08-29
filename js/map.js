function initialize() {
	var canvas = document.getElementById('map_canvas');
	var latlng = new google.maps.LatLng( 33.5960226, 130.2199818 );

	/*初期位置の設定*/
	var opts = {
		zoom: 14,
		center: latlng,
		mapTypeControl:false,
		scrollwheel:false,
		streetViewControl: false,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	var currentInfoWindow = "";
	var polyObj = ""; 
	map = new google.maps.Map(document.getElementById("map_canvas"), opts);
	
	/*アイコンの読み込み*/
	var school = new google.maps.MarkerImage( 
		'img/school.png',
		new google.maps.Size( 64, 64),/*アイコンのサイズ*/
		new google.maps.Point( 0,  0)/*アイコンの位置*/
	);

	var train = new google.maps.MarkerImage( 
		'img/train.png',
		new google.maps.Size( 48, 48),/*アイコンのサイズ*/
		new google.maps.Point( 0,  0)/*アイコンの位置*/
	);

	var bus = new google.maps.MarkerImage( 
		'img/bus.png',
		new google.maps.Size( 48, 48),/*アイコンのサイズ*/
		new google.maps.Point( 0,  0)/*アイコンの位置*/
	);

	//九大伊都キャンパスの情報ウィンドウとマーカー
	var latlng = new google.maps.LatLng( 33.5960226, 130.2199818);
	infowindow1 = new google.maps.InfoWindow({
		position : latlng,
		content  : '九州大学伊都キャンパス',
		maxWidth : 240
	});
	var marker1 = new google.maps.Marker({
		position : latlng,
		icon     : school
	});
	marker1.setMap(map);
	currentInfoWindow = infowindow1
	currentInfoWindow.open(map,marker1);
	google.maps.event.addListener(marker1, "click", function() {
		if (currentInfoWindow) {
			currentInfoWindow.close();
		};
		infowindow1.open(map,marker1);
		map.panTo(new google.maps.LatLng( 33.5960226, 130.2199818));
		currentInfoWindow = infowindow1;
	});

	//バス停のマーカー
	//九大工学部前
	var latlng = new google.maps.LatLng( 33.596508, 130.216324 );
	var marker2 = new google.maps.Marker({
		position : latlng,
		icon     : bus
	});
	google.maps.event.addListener(marker2, "click", function() {
		if (currentInfoWindow) {
			currentInfoWindow.close();
		};
		infowindow2 = new google.maps.InfoWindow({
			position : latlng,
			content  : '九大工学部前',
			maxWidth : 240
		});
		infowindow2.open(map,marker2);
		map.panTo(new google.maps.LatLng( 33.596508, 130.216324 ));
		currentInfoWindow = infowindow2;
	});
	marker2.setMap(map);

	//九大ビッグオレンジ前
	var latlng = new google.maps.LatLng( 33.598437, 130.223381 );
	var marker3 = new google.maps.Marker({
		position : latlng,
		icon     : bus
	});
	google.maps.event.addListener(marker3, "click", function() {
		if (currentInfoWindow) {
			currentInfoWindow.close();
		};
		infowindow3 = new google.maps.InfoWindow({
			position : latlng,
			content  : '九大ビッグオレンジ前',
			maxWidth : 240
		});
		infowindow3.open(map,marker3);
		map.panTo(new google.maps.LatLng( 33.598437, 130.223381 ));
		currentInfoWindow = infowindow3;
	});
	marker3.setMap(map);
	
	//天神北
	var latlng = new google.maps.LatLng(33.5930044,130.3959113);
	var marker4 = new google.maps.Marker({
		position : latlng,
		icon     : bus
	});
	google.maps.event.addListener(marker4, "click", function() {
		if (currentInfoWindow) {
			currentInfoWindow.close();
		};
		infowindow4 = new google.maps.InfoWindow({
			position : latlng,
			content  : '天神北',
			maxWidth : 240
		});
		infowindow4.open(map,marker4);
		map.panTo(new google.maps.LatLng(33.5930044,130.3959113));
		currentInfoWindow = infowindow4;
	});
	marker4.setMap(map);
	
	//天神ソラリアステージ前
	var latlng = new google.maps.LatLng(33.5902644,130.3969113);
	var marker5 = new google.maps.Marker({
		position : latlng,
		icon     : bus
	});
	google.maps.event.addListener(marker5, "click", function() {
		if (currentInfoWindow) {
			currentInfoWindow.close();
		};
		infowindow5 = new google.maps.InfoWindow({
			position : latlng,
			content  : '天神ソラリアステージ前',
			maxWidth : 240
		});
		infowindow5.open(map,marker5);
		map.panTo(new google.maps.LatLng(33.5902644,130.3969113));
		currentInfoWindow = infowindow5;
	});
	marker5.setMap(map);
	
	//博多駅前
	var latlng = new google.maps.LatLng(33.5922159,130.4156518 );
	var marker6 = new google.maps.Marker({
		position : latlng,
		icon     : bus
	});
	google.maps.event.addListener(marker6, "click", function() {
		if (currentInfoWindow) {
			currentInfoWindow.close();
		};
		infowindow6 = new google.maps.InfoWindow({
			position : latlng,
			content  : '博多駅前A',
			maxWidth : 240
		});
		infowindow6.open(map,marker6);
		map.panTo(new google.maps.LatLng(33.5922159,130.4156518 ));
		currentInfoWindow = infowindow6;
	});
	marker6.setMap(map);

	//九大学研都市駅
	var latlng = new google.maps.LatLng( 33.578162, 130.259879 );
	var marker7 = new google.maps.Marker({
		position : latlng,
		icon     : train
	});
	google.maps.event.addListener(marker7, "click", function() {
		if (currentInfoWindow) {
			currentInfoWindow.close();
		};
		infowindow7 = new google.maps.InfoWindow({
			position : latlng,
			content  : 'JR筑肥線 九大学研都市駅',
			maxWidth : 240
		});
		infowindow7.open(map,marker7);
		map.panTo(new google.maps.LatLng( 33.578162, 130.259879 ));
		currentInfoWindow = infowindow7;
	});
	marker7.setMap(map);

	//姪浜駅
	var latlng = new google.maps.LatLng( 33.583764, 130.32521 );
	var marker8 = new google.maps.Marker({
		position : latlng,
		icon     : train
	});
	google.maps.event.addListener(marker8, "click", function() {
		if (currentInfoWindow) {
			currentInfoWindow.close();
		};
		infowindow8 = new google.maps.InfoWindow({
			position : latlng,
			content  : 'JR筑肥線 姪浜駅',
			maxWidth : 240
		});
		infowindow8.open(map,marker8);
		map.panTo(new google.maps.LatLng( 33.583764, 130.32521 ));
		currentInfoWindow = infowindow8;
	});
	marker8.setMap(map);
	
	//天神
	var latlng = new google.maps.LatLng(33.5915353,130.3969276);
	var marker9 = new google.maps.Marker({
		position : latlng,
		icon     : train
	});
	google.maps.event.addListener(marker9, "click", function() {
		if (currentInfoWindow) {
			currentInfoWindow.close();
		};
		infowindow9 = new google.maps.InfoWindow({
			position : latlng,
			content  : '福岡市地下鉄 天神駅',
			maxWidth : 240
		});
		infowindow9.open(map,marker9);
		map.panTo(new google.maps.LatLng(33.5915353,130.3969276));
		currentInfoWindow = infowindow9;
	});
	marker9.setMap(map);

	//博多駅
	var latlng = new google.maps.LatLng( 33.5901519, 130.4206013 );
	var marker10 = new google.maps.Marker({
		position : latlng,
		icon     : train
	});
	google.maps.event.addListener(marker10, "click", function() {
		if (currentInfoWindow) {
			currentInfoWindow.close();
		};
		infowindow10 = new google.maps.InfoWindow({
			position : latlng,
			content  : '博多駅',
			maxWidth : 240
		});
		infowindow10.open(map,marker10);
		map.panTo(new google.maps.LatLng( 33.5901519, 130.4206013 ));
		currentInfoWindow = infowindow10;
	});
	marker10.setMap(map);

	//福岡空港
	var latlng = new google.maps.LatLng( 33.597055, 130.448598 );
	var marker11 = new google.maps.Marker({
		position : latlng,
		icon     : train
	});
	google.maps.event.addListener(marker11, "click", function() {
		if (currentInfoWindow) {
			currentInfoWindow.close();
		};
		infowindow11 = new google.maps.InfoWindow({
			position : latlng,
			content  : '福岡市地下鉄 福岡空港駅',
			maxWidth : 240
		});
		infowindow11.open(map,marker11);
		map.panTo(new google.maps.LatLng( 33.597055, 130.448598 ));
		currentInfoWindow = infowindow11;
	});
	marker11.setMap(map);
}
//｢博多駅から｣のボタンを押す時の動作
function fromHakata() {
	map.setZoom(11);
	var ll_sw = new google.maps.LatLng( 33.5960226, 130.2199818 );
	var ll_ne = new google.maps.LatLng( 33.5901519, 130.4206013 );
	var latLngBounds = new google.maps.LatLngBounds(ll_sw, ll_ne);
	map.panToBounds(latLngBounds);
	var points1 = [
		//博多～姪浜
		new google.maps.LatLng(33.5902414,130.4212219),
		new google.maps.LatLng(33.5941875,130.4137545),
		new google.maps.LatLng(33.5948404,130.4064208),
		new google.maps.LatLng(33.591493,130.3971905),
		new google.maps.LatLng(33.5891962,130.3888375),
		new google.maps.LatLng(33.5900469,130.3773221),
		new google.maps.LatLng(33.5902692,130.3682656),
		new google.maps.LatLng(33.5837978,130.3575093),
		new google.maps.LatLng(33.5813638,130.3460656),
		new google.maps.LatLng(33.5808739,130.3379754),
		new google.maps.LatLng( 33.583764, 130.32521 ),
		//姪浜～
		new google.maps.LatLng(33.5817901,130.3058124),
		new google.maps.LatLng(33.5792337,130.2715096),
		new google.maps.LatLng( 33.578162, 130.259879 ),
		new google.maps.LatLng(33.598437, 130.223381),
		new google.maps.LatLng(33.596508, 130.216324 ),
	];
	var polyLineOptions1 = new google.maps.Polyline({
		path: points1, 
		strokeWeight: 5, 
		strokeColor: "#0000ff", 
		strokeOpacity: "0.5", 
		clickable: false ,
	});
	polyObj1 = new google.maps.Polyline(polyLineOptions1); 
	polyObj1.setMap(map); 
	if(polyObj2){
		polyObj2.setMap(null); 
	}
}

function fromKuko() {
	map.setZoom(11);
	var ll_sw = new google.maps.LatLng(33.5960226, 130.2199818);
	var ll_ne = new google.maps.LatLng(33.597055, 130.448598);
	var latLngBounds = new google.maps.LatLngBounds(ll_sw, ll_ne);
	map.panToBounds(latLngBounds);
	var points2 = [
		//空港～姪浜
		new google.maps.LatLng(33.597055, 130.448598) ,
		new google.maps.LatLng(33.5898101,130.431305),
		new google.maps.LatLng(33.5902414,130.4212219),
		new google.maps.LatLng(33.5941875,130.4137545),
		new google.maps.LatLng(33.5948404,130.4064208),
		new google.maps.LatLng(33.591493,130.3971905),
		new google.maps.LatLng(33.5891962,130.3888375),
		new google.maps.LatLng(33.5900469,130.3773221),
		new google.maps.LatLng(33.5902692,130.3682656),
		new google.maps.LatLng(33.5837978,130.3575093),
		new google.maps.LatLng(33.5813638,130.3460656),
		new google.maps.LatLng(33.5808739,130.3379754),
		new google.maps.LatLng( 33.583764, 130.32521 ),
		//姪浜～
		new google.maps.LatLng(33.5817901,130.3058124),
		new google.maps.LatLng(33.5792337,130.2715096),
		new google.maps.LatLng( 33.578162, 130.259879 ),
		new google.maps.LatLng(33.598437, 130.223381),
		new google.maps.LatLng(33.596508, 130.216324 ),
	];
	var polyLineOptions2 = new google.maps.Polyline({
		path: points2, 
		strokeWeight: 5, 
		strokeColor: "#ff0000", 
		strokeOpacity: "0.5" ,
		clickable: false ,	
	});
	polyObj2 = new google.maps.Polyline(polyLineOptions2); 
	polyObj2.setMap(map); 
	if(polyObj1){
		polyObj1.setMap(null); 
	}
}
