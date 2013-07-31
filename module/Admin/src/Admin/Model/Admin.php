<?php
/**
 * Created by JetBrains PhpStorm.
 * User: BinhNhat
 * Date: 7/21/13
 * Time: 1:27 PM
 * To change this template use File | Settings | File Templates.
 */
namespace Admin\Model;

class Admin
{
    public $id;
    public $name;
    public $pass;
    public $mail;
    public function exchangeArray($data)
    {
        $this->id = (isset($data['id']))? $data['id']: null;
        $this->name = (isset($data['name']))?$data['name']: null;
        $this->pass= (isset($data['pass']))? $data['pass']: null;
        $this->mail = (isset($data['mail'])) ? $data['mail']: null;
    }
}