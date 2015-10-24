 
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
		        }
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