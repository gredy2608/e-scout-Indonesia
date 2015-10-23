<?php

class StatusCode extends \BaseController
{

	/*
		2XX 'status' ''code''
	*/
	public static function OK($view="", $message="")
	{
		return Response::json(array('code' => 200, 'status' => "OK",'view' => $view, 'message' => $message));
	}

	public static function Created($view="", $message="")
	{
		return Response::json(array('code' => 201, 'status' => "Created",'view' => $view, 'message' => $message));
	}

	public static function NoContent($view="", $message="")
	{
		return Response::json(array('code' => 204, 'status' => "No Content",'view' => $view, 'message' => $message));
	}


	/*
		3XX 'status' 'code'
	*/
	public static function MovedPermanently($view="", $message="")
	{
		return Response::json(array('code' => 301, 'status' => "Moved Permanently",'view' => $view, 'message' => $message));
	}

	public static function Found($view="", $message="")
	{
		return Response::json(array('code' => 302, 'status' => "Found",'view' => $view, 'message' => $message));
	}

	/*
		4XX 'status' 'code'
	*/
	public static function BadRequest($view="", $message="")
	{
		return Response::json(array('code' => 400, 'status' => "Bad Request",'view' => $view, 'message' => $message));
	}

	public static function Unauthorized($view="", $message="")
	{
		return Response::json(array('code' => 401, 'status' => "Unauthorized",'view'=> $view, 'message' => $message));
	}

	public static function Forbidden($view="", $message="")
	{
		return Response::json(array('code' => 403, 'status' => "Forbidden",'view' => $view, 'message' => $message));
	}

	public static function NotFound($view="", $message="")
	{
		return Response::json(array('code' => 404, 'status' => "Not Found",'view' => $view, 'message' => $message));
	}

	public static function MethodNotAllowed($view="", $message="")
	{
		return Response::json(array('code' => 405, 'status' => "Method not Allowed",'view' => $view, 'message' => $message));
	}

	public static function RequestTimeOut($view="", $message="")
	{
		return Response::json(array('code' => 408, 'status' => "Request Time Out",'view' => $view, 'message' => $message));
	}

	/*
		5XX 'status' 'code'
	*/
	public static function InternalServerError($view="", $message="")
	{
		return Response::json(array('code' => 500, 'status' => "Internal Server Error",'view' => $view, 'message' => $message));
	}
}
