 
<script>

	var map;

	AmCharts.ready(function() {
		map = new AmCharts.AmMap();


		map.balloon.color = "#000000";

		var dataProvider = {
			mapVar: AmCharts.maps.indonesiaHigh,
			getAreasFromMap:true,
			areas: [
			{
		        	// "id":"ID-JK",
		        	// "color": "#000000"
		        },
		        {
		        	"id":"ID-AC",
		        	"title":"Aceh", 
		        },
		        {
		        	"id":"ID-BA",
		        	"title":"Bali", 
		        },
		        {
		        	"id":"ID-BB",
		        	"title":"Bangka Belitung", 
		        },
		        {
		        	"id":"ID-BE",
		        	"title":"Bengkulu", 
		        },
		        {
		        	"id":"ID-BT",
		        	"title":"Banten", 
		        },
		        {
		        	"id":"ID-GO",
		        	"title":"Gorontalo", 
		        },
		        {
		        	"id":"ID-JA",
		        	"title":"Jambi", 
		        },
		        {
		        	"id":"ID-JB",
		        	"title":"Jawa Barat", 
		        },
		        {
		        	"id":"ID-JI",
		        	"title":"Jawa Timur", 
		        },
		        {
		        	"id":"ID-JK",
		        	"title":"Jakarta Raya", 
		        },
		        {
		        	"id":"ID-JT",
		        	"title":"Jawa Tengah", 
		        },
		        {
		        	"id":"ID-KB",
		        	"title":"Kalimantan Barat", 
		        },
		        {
		        	"id":"ID-KI",
		        	"title":"Kalimantan Timur", 
		        },
		        {
		        	"id":"ID-KR",
		        	"title":"Kepulauan Riau", 
		        },
		        {
		        	"id":"ID-KS",
		        	"title":"Kalimantan Selatan", 
		        },
		        {
		        	"id":"ID-KT",
		        	"title":"Kalimantan Tengah", 
		        },
		        {
		        	"id":"ID-KU",
		        	"title":"Kalimantan Utara", 
		        },
		        {
		        	"id":"ID-LA",
		        	"title":"Lampung", 
		        },
		        {
		        	"id":"ID-MA",
		        	"title":"Maluku", 
		        },
		        {
		        	"id":"ID-MU",
		        	"title":"Maluku Utara", 
		        },
		        {
		        	"id":"ID-NB",
		        	"title":"Nusa Tenggara Barat", 
		        },
		        {
		        	"id":"ID-NT",
		        	"title":"Nusa Tenggara Timur", 
		        },
		        {
		        	"id":"ID-PA",
		        	"title":"Papua", 
		        },
		        {
		        	"id":"ID-PB",
		        	"title":"Papua Barat", 
		        },
		        {
		        	"id":"ID-RI",
		        	"title":"Riau", 
		        },
		        {
		        	"id":"ID-SA",
		        	"title":"Sulawesi Utara", 
		        },
		        {
		        	"id":"ID-SB",
		        	"title":"Sumatera Barat", 
		        },
		        {
		        	"id":"ID-SG",
		        	"title":"Sulawesi Tenggara", 
		        },
		        {
		        	"id":"ID-SN",
		        	"title":"Sulawesi Selatan", 
		        },
		        {
		        	"id":"ID-SR",
		        	"title":"Sulawesi Barat", 
		        },
		        {
		        	"id":"ID-SS",
		        	"title":"Sumatera Selatan", 
		        },
		        {
		        	"id":"ID-ST",
		        	"title":"Sulawesi Tengah", 
		        },
		        {
		        	"id":"ID-SU",
		        	"title":"Sumatera Utara", 
		        },
		        {
		        	"id":"ID-YO",
		        	"title":"Yogyakarta", 
		        },  
		        ]
		    };

		    map.dataProvider = dataProvider;

		    map.areasSettings = {
		    	autoZoom: true,
		    	color: "#a6e2af",
		    	selectedColor: "#CC0000"
		    };

		    map.smallMap = new AmCharts.SmallMap();

		    map.write("mapdiv");

		});
 

	</script> 