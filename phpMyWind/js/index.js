	var curIndex=0;
	//时间间隔(单位毫秒)，每2秒钟显示一张，数组共有3张图片放在Photos文件夹下。
	var timeInterval=2000;
	var arr=new Array();

	arr[0]="images/banner1.jpg";
	arr[1]="images/banner2.jpg";
	arr[2]="images/banner3.jpg";

	setInterval(changeImg,timeInterval);

	function changeImg(){

		var obj=document.getElementById("obj");

		if (curIndex==arr.length-1) {
			curIndex=0; 
		}
		else {
		curIndex+=1;
		} 
		
		obj.src=arr[curIndex];
	 }