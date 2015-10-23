<?php

class FileUtil extends \BaseController
{
	public static function uploadFile($file, $destination){
		$result = $file->move($destinationPath);
		if($result){
			return StatusCode::OK("","Success");
		}
		else{
			return StatusCode::InternalServerError("","File is not uploaded");
		}
	}

	public static function uploadFileRename($file,$destination,$name=""){
		$finish = false;
		$file_extension = $file->getClientOriginalExtension();
		if($name == ""){
			$file_name = $file->getClientOriginalName();
		}
		else{
			$file_name = $name.".".$file_extension;
		}
		$file_name_only = FileUtil::get_filename($file_name);

		$count = 1;
		while($finish == false){
			$file_destination = $destination."/".$file_name;
			if(FileUtil::isExist($file_destination)){
				$file_name =$file_name_only."_".$count.".".$file_extension;
				$count++;
			}
			else{
				$result = $file->move($destination,$file_name);
				if($result){
					$finish = true;
				}
				else{
					return StatusCode::InternalServerError("","File is not uploaded");
				}
			}
		}
		return StatusCode::OK("",$file_name);
	}

	public static function downloadFile($file_destination){
		return Response::download($file_destination);
	}

	public static function deleteFile($file_destination){
		$result = File::delete($file_destination);
		if($result){
			return StatusCode::OK("","File has been deleted");
		}
		else{
			return StatusCode::InternalServerError("","File is not deleted");
		}
	}

	public static function deleteFolder($directory){
		$result = File::deleteDirectory($directory);
		if($result){
			return StatusCode::OK("","Folder has been deleted");
		}
		else{
			return StatusCode::InternalServerError("","Folder is not found");
		}
	}

	private static function isExist($destination){
		if(File::exists($destination)){
			return true;
		}
		else{
			return false;
		}
	}

	private static function get_filename($full_filename){
		$length = strlen($full_filename);
		$temp_length = $length;
		$finish = false;
		for($i = $length-1 ;$i>=0&&$finish==false;$i--){
			if($full_filename[$i]!='.'){
				$temp_length = $temp_length - 1;
			}
			else{
				$temp_length = $temp_length - 1;
				$finish = true;
			}
		}
		return substr($full_filename,0,$temp_length);
	}

	/*
	upload base64 from cropper
	*/
	public static function uploadBase64($file, $destination, $name){
		$image_temp = explode(',',$file);
		$path_temp = $destination;
		$data = base64_decode($image_temp[1]);
		if(!File::exists($path_temp)){
			File::makeDirectory($path_temp);
		}
		$path = $path_temp."/".$name.'.png';
		//$info = pathinfo($path, PATHINFO_EXTENSION);
		//if($info == ""){
		//}
		$count = 0;
		while(File::exists($path)){
			$count = $count+1;
			//$info = pathinfo($path, PATHINFO_EXTENSION);
			//if($info == ""){
			//	$path = $path_temp."/".$name.'_'.$count.'.png';
			//}else{
				$path = $path_temp."/".$name.'_'.$count.'.png';
			//}
			
		}
		$success = file_put_contents($path, $data);
		if($success){
			return StatusCode::OK("",$path);
		}else{
			return StatusCode::InternalServerError("","File is not uploaded");
		}
		
	}
}
