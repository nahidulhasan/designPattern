<?php

 /*
 * Allows behavior to be added to an individual object,
 *  either statically or dynamically, without affecting the behavior of other objects from the same class.
 */

interface eMailBody{
    public function loadBody();
}

class eMail implements eMailBody{

    public function loadBody()
    {
        echo "This is eMail Body".'</br>';
    }
}


abstract class eMailBodyDecorator implements eMailBody{

    protected $eMailBody;

    public function __construct(eMailBody $eMailBody)
    {
        $this->eMailBody = $eMailBody;
    }

    abstract public function loadBody();
}

class eidFestivalEmailBody extends eMailBodyDecorator{

    public function loadBody()
    {

        echo 'This is extra content for eid Festival'.'</br>';
        $this->eMailBody->loadBody();
    }
}

class newYearEmailBody extends eMailBodyDecorator{

    public function loadBody()
    {
        echo 'This is extra content for New Year'.'</br>';
        $this->eMailBody->loadBody();

    }
}


// normal
$eMail = new eMail();
$eMail->loadBody();

// New Year

$eMail = new eMail();
$eMail = new newYearEmailBody($eMail);
$eMail->loadBody();
