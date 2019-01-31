<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 31/01/2019
 * Time: 09:29
 */

class email
{
    private $dest;
    private $message;
    private $titremess;




    /**
     * @param mixed $dest
     */
    public function setDest($dest)
    {
        $this->dest = $dest;

    }

    /**
     * @param mixed $titremess
     */
    public function setTitremess($titremess)
    {
        $this->titremess = $titremess;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

public function envoyer(){

       $header= 'from:bryanbultot@gmail.com'."\r\n";
       'Reply-to:bryanbultot@gmail.com'."\r\n";
        'X-mailer:PHP/.'.phpversion();
        mail($this->dest,$this->message,$this->titremess,$header);
        echo "message envoyer";
}



}
