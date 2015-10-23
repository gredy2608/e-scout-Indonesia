<?php

class ExcelUtil extends \BaseController
{
	/*
	
	$filename = expected filename
	$title = title
	$creator = creator
	$company = company
	$description = description of the excel
	$sheets = one dimensional array which hold information about the name of sheets
	$data = one dimensional array which hold information about array of data in one sheet

	*/
	public static function exportExcel($filename ="excel", $title="", $creator="", $company="", $description="",$sheets,$data){
		if($data == "")
		{
			return StatusCode::BadRequest("","No Data Included");
		}
		else
		{
			$count = 0;
			Excel::create('Filename', function($excel) use($sheets,$data) {
				foreach($sheets as $sheet){
					$excel->sheet($sheet, function($sh) {
						$sh->fromArray($data[0]);
    				}
    				$count++;
				}
			})->download('xls');
		}
	}

	/*
		$filepath =  location of file in server (should be uploaded before this process)
	*/

	public static function readExcel($filepath)
	{
		if (File::exists($filepath)){
		    return Excel::load('file.xls', function($reader) {
		    	//$reader->toArray();
			})->get();
		}
		else{
			return StatusCode::NotFound("","File Not Found");
		}
	}
}
