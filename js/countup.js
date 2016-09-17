// 小数点以下を指定するプログラム
function floatFormat( number, n ) {
	var _pow = Math.pow( 10 , n ) ;
	return Math.round( number * _pow ) / _pow ;
}
$(function() {
	countDown();
});
function countDown() {
	// 秒速を計算する
	var startDate = new Date("October 01,2016 17:00");
	var endDate = new Date("October 04,2016 17:00");
	var wholeSec = endDate - startDate;
	var secSpeed = 100 / wholeSec;
	
	// 残り秒から進行度合いを計算する
	var nowDate = new Date();
	var leftSec = nowDate - startDate;
	var countUp = floatFormat(secSpeed * leftSec,3);
	
	// カウントダウン
	var a_day = 24 * 60 * 60 * 1000;
	var d = Math.floor(leftSec / a_day) 
	var h = Math.floor((leftSec % a_day) / (60 * 60 * 1000)) 
	var m = Math.floor((leftSec % a_day) / (60 * 1000)) % 60 
	var s = Math.floor((leftSec % a_day) / 1000) % 60 % 60 
	
	// 100%を超えたら遷移、それ以外はカウントアップ
	if(countUp > 100){
		location.href = "http://kyudaisai.jp/69th/guest";
	}else{
		$("span#countUp").html(
			"<p style='text-align: center; font-family: \'Concert One\', cursive;'>" + countUp + "%<br><br>" + d + "日" + h + "時間" + m + "分" + s + "秒</p>");
		setInterval(countDown, 1000);
	}
}
