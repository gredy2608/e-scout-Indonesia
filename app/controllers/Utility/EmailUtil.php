<?php

class EmailUtil extends \BaseController
{

	/*
		$template = email template that want to be used
		$data = custom value in email template
		$to = email receiver
		$to_as = email receiver name / alliases
		$cc = carbon copy
		$subject = email subject
		$attachments = array of string which stored information about files path to be attach in email
	*/

	public static function send($template,$data,$to,$to_as = "",$cc="",$subject="Random Email",$attachments)
	{
		Mail::send($template, $data, function($message)
		{
		    //$message->from('us@example.com', 'Laravel');

			if($to_as != ""){
				$message->to($to,$to_as);				
			}
			else{
				$message->to($to);
			}

			if($cc != ""){
				$message->cc($cc);
			}
		    
		    $message->subject($subject);

		    foreach($attachments as $attach){
		    	if($attach != "" || $attach != null){
		    		if(File::exists($attach)){
		    			$message->attach($attach);
		    		}
		    		
		    	}
		    }
		    
		});
	}

	/*
		$template = email template that want to be used
		$data = custom value in email template
		$to = email receiver
		$to_as = email receiver name / alliases
		$cc = carbon copy
		$subject = email subject
		$attachments = array of string which stored information about files path to be attach in email
	*/

	public static function sendQueue($template,$data,$to,$to_as = "",$cc="",$subject="Random Email",$attachments)
	{
		Mail::queue($template, $data, function($message)
		{
		    //$message->from('us@example.com', 'Laravel');

			if($to_as != ""){
				$message->to($to,$to_as);				
			}
			else{
				$message->to($to);
			}

			if($cc != ""){
				$message->cc($cc);
			}
		    
		    $message->subject($subject);

		    foreach($attachments as $attach){
		    	if($attach != "" || $attach != null){
		    		if(File::exists($attach)){
		    			$message->attach($attach);
		    		}
		    		
		    	}
		    }
		    
		});
	}

	/*
		$template = email template that want to be used
		$data = custom value in email template
		$to = email receiver
		$to_as = email receiver name / alliases
		$cc = carbon copy
		$subject = email subject
		$attachments = array of string which stored information about files path to be attach in email
		$seconds = the number of second, the email will be sent $seconds second later
	*/

	public static function sendLater($template,$data,$to,$to_as = "",$cc="",$subject="Random Email",$attachments,$seconds)
	{
		Mail::later($seconds,$template, $data, function($message)
		{
		    //$message->from('us@example.com', 'Laravel');

			if($to_as != ""){
				$message->to($to,$to_as);				
			}
			else{
				$message->to($to);
			}

			if($cc != ""){
				$message->cc($cc);
			}
		    
		    $message->subject($subject);

		    foreach($attachments as $attach){
		    	if($attach != "" || $attach != null){
		    		if(File::exists($attach)){
		    			$message->attach($attach);
		    		}
		    		
		    	}
		    }
		    
		});
	}
}
