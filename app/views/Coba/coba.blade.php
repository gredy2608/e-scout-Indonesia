<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <script src="{{ asset('assets/js/jquery-1.11.2.min.js') }}"></script>
	<title>Testing Page</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
	</style>
</head>
<body>
	<div class="welcome">

    <input type="button" value="Test" id="test_button" />


	</div>
</body>

<script type="text/javascript">
  $('body').on('click','#test_button',function(){
    var data = {
      "nama sekolah" : "SMAN 2",
      "alamat_sekolah" : "Jl. Dago no 100",
      "kota_sekolah" : "Bandung",
      "kode_pos_sekolah" : 40231,
      "telepon_sekolah" :"02283828",
      "username" : "sman1admin",
      "password" : "passsman1"
    }
    $.post("{{URL::route('create.school')}}",data,function(response){
      alert(response);
    });
  });
</script>

</html>
