<?php
/* Call to file containing external support methods */
require_once ("support.php");
/* Class name definition */
class member
{
    /* Attribute, Field */
    private $fullname;
    private $email;
    private $idmember;

    public function __construct($fullname, $email)
    {
        $this->fullname = $fullname;
        $this->email = $email;
        $this->idmember = idcontinue();
    }

    public function __destruct()
    {
        $this->fullname = NULL;
        $this->email = NULL;
        $this->status = NULL;
        $this->idmember = NULL;
    }

    public function get_fullname()
    {
        return $this->fullname;
    }

    public function get_email()
    {
        return $this->email;
    }

    public function get_id()
    {
        return $this->idmember;
    }
}

?>