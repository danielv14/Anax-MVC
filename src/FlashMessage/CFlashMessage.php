<?php 

namespace Anax\FlashMessage; 

 

class CFlashMessage implements \Anax\DI\IInjectionAware 
{ 
    use \Anax\DI\TInjectable; 
     
    private $msgType = ['success', 'error']; 
     

    public function getMessage() 
    { 
        $htmlMessages = null; 
        foreach($this->findMessages() as $key => $msg){ 
            $htmlMessages .= "<div id=\"{$msg['msgType']}\">{$msg['msg']}</div>";         
        } 
        $this->clearMessages(); 
         
        return $htmlMessages; 
    } 

      public function setMessage($msgType, $msg = null) 
    { 
        if(!in_array($msgType, $this->msgType)){ 
            die("Ogiltig typ av flashmeddelande. Använd antingen success eller error"); 
        } 
         
        if(isset($msg)){ 
            $this->addMessage($msgType, $msg); 
             
        } elseif ($msgType == 'success'){ 
            $this->addMessage($msgType, "Success"); 
             
                     
        } elseif ($msgType == 'error'){ 
            $this->addMessage($msgType, "Error"); 
        } 
    } 

        
    private function addMessage($msgType, $msg) 
    { 
        $messages = $this->findMessages(); 
        $messages[] = [ 
                'msgType' => $msgType, 
                'msg' => $msg 
                ]; 
        $this->session->set('FlashMsg', $messages); 
    } 
     
    private function findMessages() 
    { 
        $messages = $this->session->get("FlashMsg", []); 
         if(!isset($messages))     
        { 
            return null; 
        }  
        return $messages; 
    } 
     
    private function clearMessages(){ 
        $this->session->set("FlashMsg", null); 
    } 
     
} 
