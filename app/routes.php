<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get('/', function()
// {
// 	return View::make('hello');
// });

Route::get('/coba', function()
{
	return View::make('Coba.coba');
});


// Route::get('/', ['as' => 'login', 'uses' => 'HomeController@view_login']);

// Route::post('/signin', ['as' => 'signin', 'uses' => 'HomeController@postSignIn']); //singin

// Route::get('/logout', ['as' => 'logout' , 'uses' => 'HomeController@postLogout']); //logout

Route::post('/sekolah', ['as' => 'create.school', 'uses' => 'SekolahController@tambah_sekolah']);

Route::get('/sekolah/{id}', ['as' => 'edit.school', 'uses' => 'SekolahController@delete_sekolah']);

// --------------------------------------------------- TEST VIEW ---------------------------------------------------

//NOT LOGIN -> PUBLIC VIEW
Route::get('/home', function()
{
	return View::make('home');
});
Route::get('/scout_now', function()
{
	return View::make('scout_now');
});
Route::get('/kids_list', function()
{
	return View::make('kids_list');
});
Route::get('/schools_list', function()
{

	return View::make('schools_list');
});
Route::get('/login', function()
{
	return View::make('login');
});

Route::post('/signin', function()
{
	$username = Input::get('username');
	$password = Input::get('password');
	$tipe = Input::get('tipe');

	if($tipe=="pengawas"){
		if($username == "scout" && $password == "scout"){
			//redirect pengawas
			return Redirect::to('/home_goverment');
		}
		else{
			return Redirect::to('/login?tipe=pengawas')->with("messages","Username atau Password Salah");
		}
	}
	else if($tipe=="sekolah"){
		if($username == "sekolah" && $password == "sekolah"){
			//redirect sekolah
			return Redirect::to('/home_school');
		}
		else{
			return Redirect::to('/login?tipe=sekolah')->with("messages","Username atau Password Salah");
		}
	}
	else if($tipe=="dinas"){
		if($username == "dinas" && $password == "dinas"){
			//redirect dinas
		}
		else{
			return Redirect::to('/login?tipe=dinas')->with("messages","Username atau Password Salah");
		}
	}
	else{
		return Redirect::to('/home');
	}
});

//SCHOOL
Route::get('/home_school', function()
{
	return View::make('school.home_school');
});
Route::get('/school_kids_list', function()
{
	return View::make('school.school_kids_list');
});


//PUBLIC
Route::get('/home_public', function()
{
	$rg = new ReportGenerator();
	$list_sekolah_berprestasi =json_decode($rg->getAllTopSchool()->getContent());
	$list_siswa_berprestasi = json_decode($rg->getAllTopStudent()->getContent());
	$list_siswa_berprestasi_tidak_sekolah = json_decode($rg->getAllTopStudentNotSchool()->getContent());
	return View::make('public.home_public',compact('list_sekolah_berprestasi','list_siswa_berprestasi','list_siswa_berprestasi_tidak_sekolah'));
});
Route::get('/public_kids_list', function()
{
	return View::make('public.public_kids_list');
});

// GOVERMENT
Route::get('/home_goverment', function()
{
	$dg = new DataGetter();
	$ranking_kota = json_decode($dg->getTopSchoolCity()->getContent());
	return View::make('goverment.home_goverment',compact("ranking_kota"));
});
Route::get('/goverment_schools_list', function()
{
	return View::make('goverment.goverment_schools_list');
});
Route::get('/goverment_kids_list', function()
{
	return View::make('goverment.goverment_kids_list');
});

Route::post('/laporan',function(){
	$laporan = new Laporan();
	$laporan->tipe = Input::get('subjek');
	$laporan->no_ktp_pelapor = Input::get('no_ktp');
	$laporan->nama_pelapor = Input::get('nama');
	$laporan->email_pelapor = Input::get('email');
	$laporan->no_telepon_pelapor = Input::get('no_telp');
	$laporan->nama_anak = Input::get('nama_anak');
	$laporan->umur_anak = Input::get('umur_anak');
	$laporan->sekolah_anak = Input::get('sekolah_anak');
	$laporan->alamat_anak = Input::get('alamat_anak');
	$laporan->kota_anak = Input::get('kota_anak');
	$laporan->keterangan = Input::get('keterangan');
	$laporan->created_by = 1;
	$laporan->save();
	return "Berhasil";
});

// SCOUTER
Route::get('/home_scouter', function()
{
	$rg = new ReportGenerator();
	$list_sekolah_berprestasi =json_decode($rg->getAllTopSchool()->getContent());
	$list_siswa_berprestasi = json_decode($rg->getAllTopStudent()->getContent());
	$list_siswa_berprestasi_tidak_sekolah = json_decode($rg->getAllTopStudentNotSchool()->getContent());
	return View::make('scouter.home_scouter',compact('list_sekolah_berprestasi','list_siswa_berprestasi','list_siswa_berprestasi_tidak_sekolah'));
});
Route::get('/scouter_schools_list', function()
{
	return View::make('scouter.scouter_schools_list');
});
Route::get('/scouter_kids_list', function()
{
	return View::make('scouter.scouter_kids_list');
});

//ADMIN
Route::get('/admin', function(){
	return View::make('admin.dashboard');
});
Route::get('/admin/user', function(){
	return View::make('admin.user');
});
Route::get('/admin/donation', function(){
	$list_donasi = Sumbangan::all();
	return View::make('admin.donation',compact('list_donasi'));
});
Route::get('/admin/campaign', function(){
	$list_campaign = Campaign::all();
	return View::make('admin.campaign',compact('list_campaign'));
});
Route::get('/admin/kid', function(){
	$list_siswa = Siswa::all();
	return View::make('admin.kid',compact('list_siswa'));
});
Route::get('/admin/school', function(){
	$list_sekolah = Sekolah::all();
	return View::make('admin.school',compact('list_sekolah'));
});
Route::get('/admin/report_citizen', function(){
	$list_laporan = Laporan::where('tipe','=',0)->get();
	return View::make('admin.report_citizen',compact('list_laporan'));
});
Route::get('/admin/report_achievement', function(){
	$list_laporan = Laporan::where('tipe','=',1)->get();
	return View::make('admin.report_achievement',compact('list_laporan'));
});

Route::get('/test123', 'DataGetter@getAnakGaSekolahByTahunPelajaran');//page
//------------------------------------------------------TEST EMAIL-------------------------------------------------
/*Route::get('/email_send',function(){
	Mail::send('emails.tes', array('key' => 'Tes Email 123'), function($message)
	{
			$message->from('gredy.prasetya@gmail.com', 'Gredy');
	    $message->to('gredy_2608@hotmail.co.uk', 'Gredy')->subject('Test Email');
	});
	return "Success";
});*/
