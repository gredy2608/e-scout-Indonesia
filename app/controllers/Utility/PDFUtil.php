<?php

class PDFUtil extends \BaseController
{

	/*

		$template = the pdf template in view folder
		$data = custom value in pdf template


	*/
	public static function export_view($template,$data){
		$pdf = PDF::loadView($template, $data);
		return $pdf->download('invoice.pdf');
	}

	/*

		$template = the pdf template in view folder
		$data = custom value in pdf template


	*/
	public static function export_download($template,$data){
		$pdf = PDF::loadView($template, $data);
		return $pdf->download('invoice.pdf');
	}
}
