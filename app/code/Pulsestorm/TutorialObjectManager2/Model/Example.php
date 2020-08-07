<?php
namespace Pulsestorm\TutorialObjectManager2\Model;

class Example
{
    protected $messageObject;
	public function __construct( Message $message)
	{
//		$object = new Message; //
        $this->messageObject = $message;
	}
	
    public function sendHelloAgainMessage()
    {
        return $this->messageObject->getMessage();    
    }
}