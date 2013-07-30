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
    public $user_id;
    public $user_name;
    public $user_pass;
    public $user_email;
    public function exchangeArray($data)
    {
        $this->user_id = (isset($data['user_id']))? $data['user_id']: null;
        $this->user_name = (isset($data['user_name']))?$data['user_name']: null;
        $this->user_pass= (isset($data['user_pass']))? $data['user_pass']: null;
        $this->user_email = (isset($data['user_email'])) ? $data['user_email']: null;
    }
}