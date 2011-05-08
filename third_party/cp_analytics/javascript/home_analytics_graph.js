$(document).ready(function(){
	
	var statWindowStyle = {
		'float' 		: 'left',
		'marginLeft' 	: '3.3%',
		'width'			: '93.6%',
		'marginBottom'	: '3.3%',
		'padding'		: '5px 0 0 0'
	}
	
	var imageStyle = {
		'width' 		: '100%',
		'display'		: 'block',
		'margin'		: 0
		
	}
	
	
	var src = 'http://chart.apis.google.com/chart?cht=lc&chs=1000x150&chxt=y&chxl=1:|1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|21|22|23|24|25|26|27|28|29|30|&chtt=Visits%20in%20the%20last%2030%20days&chm=B,ECF1F4FF,0,0,0&chco=ABB7C3FF&chf=c,s,FFFFFF00|bg,s,FFFFFF00&chd=t:85,100,101,81,59,100,89,104,75,76,92,68,107,98,87,101,61,83,48,70,115,96,177,71,94,73,78,137,120,126&chds=0,177';
	
	var image = $('<img />').attr('src', src).css(imageStyle);
	
	
	var statWindow = $('<div/>').css(statWindowStyle).append(image);
	
	$("#mainContent").prepend(statWindow);
	
	
})