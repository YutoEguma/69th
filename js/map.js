function initMap() {
	// マップを設置します
	var myLatlng = new google.maps.LatLng(33.5960226, 130.2199818);
	var mapOptions = {
		zoom: 14,
		center: myLatlng,
		mapTypeControl:false,
		scrollwheel:false,
		streetViewControl: false,
	}
	var map = new google.maps.Map(document.getElementById('map'), mapOptions);
	// ダミーinfowndow
	var contentString = "";
	// マーカーを読み込みます
	var campus = 'img/campus.png';
	var train = 'img/train.png';
	var bus = 'img/bus.png';
	// キャンパスのマーカー
	var ItoCampus = new google.maps.LatLng(33.5960226, 130.2199818);
	var markerCampus = new google.maps.Marker({
		position: ItoCampus,
		map: map,
		icon: campus,
	});
	markerCampus.setMap(map);
	markerCampus.addListener('click', function(){
		var contentString = '九州大学 伊都キャンパス';
		var infowindow = new google.maps.InfoWindow({
			content: contentString
		});
		infowindow.open(map, markerCampus);
	});
	// バス停マーカー
	// 天神北
	var TenjinBus = new google.maps.LatLng(33.5930044,130.3959113);
	var markerTenjinBus = new google.maps.Marker({
		position : TenjinBus,
		map: map,
		icon: bus
	});
	markerTenjinBus.setMap(map);
	markerTenjinBus.addListener('click', function(){
		var contentString = '天神北';
		var infowindow = new google.maps.InfoWindow({
			content: contentString
		});
		infowindow.open(map, markerTenjinBus);
	});
	// 天神ソラリアステージ前
	var Solaria = new google.maps.LatLng(33.5902644,130.3969113);
	var markerSolaria = new google.maps.Marker({
		position : Solaria,
		map: map,
		icon: bus,
	});
	markerSolaria.setMap(map);
	markerSolaria.addListener('click', function(){
		var contentString = '天神ソラリアステージ前';
		var infowindow = new google.maps.InfoWindow({
			content: contentString
		});
		infowindow.open(map, markerSolaria);
	});
	//博多駅前A
	var HakataBus = new google.maps.LatLng(33.5922159,130.4156518 );
	var markerHakataBus = new google.maps.Marker({
		position : HakataBus,
		map: map,
		icon: bus
	});
	markerHakataBus.setMap(map);
	markerHakataBus.addListener('click', function(){
		var contentString = '博多駅前A';
		var infowindow = new google.maps.InfoWindow({
			content: contentString
		});
		infowindow.open(map, markerHakataBus);
	});
	// 駅マーカー
	//九大学研都市駅
	var Gakken = new google.maps.LatLng( 33.578162, 130.259879 );
	var markerGakken = new google.maps.Marker({
		position : Gakken,
		map: map,
		icon: train
	});
	markerGakken.setMap(map);
	markerGakken.addListener('click', function(){
		var contentString = '九大学研都市駅';
		var infowindow = new google.maps.InfoWindow({
			content: contentString
		});
		infowindow.open(map, markerGakken);
	});
	//姪浜駅
	var Meinohama = new google.maps.LatLng( 33.583764, 130.32521 );
	var markerMeinohama = new google.maps.Marker({
		position : Meinohama,
		map: map,
		icon: train
	});
	markerMeinohama.setMap(map);
	markerMeinohama.addListener('click', function(){
		var contentString = '姪浜駅';
		var infowindow = new google.maps.InfoWindow({
			content: contentString
		});
		infowindow.open(map, markerMeinohama);
	});
	//天神駅
	var Tenjin = new google.maps.LatLng(33.5915353,130.3969276);
	var markerTenjin = new google.maps.Marker({
		position : Tenjin,
		map: map,
		icon: train
	});
	markerTenjin.setMap(map);
	markerTenjin.addListener('click', function(){
		var contentString = '天神駅';
		var infowindow = new google.maps.InfoWindow({
			content: contentString
		});
		infowindow.open(map, markerTenjin);
	});
	//博多駅
	var Hakata = new google.maps.LatLng( 33.5901519, 130.4206013 );
	var markerHakata = new google.maps.Marker({
		position: Hakata,
		map: map,
		icon: train
	});
	markerHakata.setMap(map);
	markerHakata.addListener('click', function(){
		var contentString = '博多駅';
		var infowindow = new google.maps.InfoWindow({
			content: contentString
		});
		infowindow.open(map, markerHakata);
	});
	//福岡空港
	var Airport = new google.maps.LatLng( 33.597055, 130.448598 );
	var markerAirport = new google.maps.Marker({
		position : Airport,
		map: map,
		icon: train
	});
	markerAirport.setMap(map);
	markerAirport.addListener('click', function(){
		var contentString = '福岡空港';
		var infowindow = new google.maps.InfoWindow({
			content: contentString
		});
		infowindow.open(map, markerAirport);
	});
}
