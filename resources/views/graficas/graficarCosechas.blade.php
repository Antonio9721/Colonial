<body>
	<div class="container"></div>
</body>

<script src="https://code.highcharts.com/highcharts.js"></script>

<script type="text/javascript">
   var cosechas = <?php echo json_encode($cosechas) ?>;
   Highcharts.chart('container', {
   title: {
   text: 'Cosechas registradas en el sistema'
},

subtitle: {
	text: 'Grafica de cosechas del sistema'
},

xAxis:{
	categories: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic']
},

yAxis: {
	title: {
	text: 'Nuevas Cosechas'
}
},

legend: {
	layout: 'vertical',
	align: 'right',
	verticalAlign: 'middle'
},

plotOptions: {
	series: {
	  allowPointSelect: true
}
},

series: [
{
	name: 'Nuevas Cosechas'
	data: cosechas
}
],

responsive: {
	rules: [
	{
		condition: {
		maxWidth: 500
	},

	chartOptions:{
	legend: 'horizontal',
	align: 'center',
	verticalAlign:'bottom'
}
	}
	

	]
}

}
);
</script>