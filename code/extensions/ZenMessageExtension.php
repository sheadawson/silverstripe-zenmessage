<?php

class ZenMessageExtension extends Extension{

	/**
	 * setMessage function.
	 * 
	 * intended usage example: 
	 * <code>
	 * $controller->setMessage('Error', 'Please login to view this page');
	 * Director->Redirect('/login');
	 * </code>
	 *
	 *
	 * @access public
	 * @param string $type - sets the message box css class (Error, Success or Message)
	 * @param string $message (the message to be displayed)
	 * @return void
	 */
	public function setMessage($type, $message)
	{	
		Session::set('Message', array(
			'MessageType' => $type,
			'Message' => $message
		));
	}
	
	/**
	 * getMessage function.
	 * 
	 * @access public
	 * @return object $message
	 */
	public function getMessage()
	{
		if($message = Session::get('Message')){
			Session::clear('Message');
			$array = new ArrayData($message);
			return $array->renderWith('ZenMessage');
		}
	}

}