<script type="text/javascript">
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
	
	

	
	
	var src = 'http://chart.apis.google.com/chart?cht=lc&chs=1000x150&chxt=y,x,x&chxl=0:|<?=implode('|', $lastmonth['visits_data']['datapoints_yaxis'])?>|1:|<?=implode('|', $datapoint_dates)?>|2:|<?=implode('|', $datapoint_months)?>&chtt=Visits%20in%20the%20last%2030%20days&chm=B,ECF1F4FF,0,0,0&chco=ABB7C3FF&chf=c,s,FFFFFF00|bg,s,FFFFFF00&chd=t:<?=implode(',',$lastmonth['visits_data']['datapoints'])?>&chds=0,<?=$lastmonth['visits_data']['datapoints_max']?>';
	
	var image = $('<img />').attr('src', src).css(imageStyle);
	
	
	var statWindow = $('<div/>').css(statWindowStyle).append(image);
	
	$("#mainContent").prepend(statWindow);
	
	
})
</script>

<!--

<?=var_dump($lastmonth)?>

-->