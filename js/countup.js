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
	var countUp = floatFormat(secSpeed * leftSec,4);
	
	
	
	// 100%を超えたら遷移、それ以外はカウントアップ
	if(countUp > 100){
		location.href = "http://kyudaisai.jp/69th/guest";
	}else{
		$("span#countUp").html("...接続中...<br><!--残念ながらここに情報はない。続報を待て。--><br>...ゲストの情報をダウンロードしています..." + countUp + "%<br><br>...接続を終了します...");
	}
}
