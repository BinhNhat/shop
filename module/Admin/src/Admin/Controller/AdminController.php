<?php
/**
 * Created by JetBrains PhpStorm.
 * User: BinhNhat
 * Date: 7/20/13
 * Time: 12:05 PM
 * To change this template use File | Settings | File Templates.
 */
namespace Admin\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class AdminController extends AbstractActionController
{
    public function indexAction()
    {
        $dataView= array(
            'msg' => "Cai dat thanh cong module Admin",
        );
        return new ViewModel($dataView);
    }
    public function adminAction()
    {
        $dataView= array(
            'msg'=> 'Day la action admin cua controller Admin'
        );
        return new ViewModel($dataView);
    }
}