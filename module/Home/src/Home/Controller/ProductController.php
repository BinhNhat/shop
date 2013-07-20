<?php
/**
 * Created by JetBrains PhpStorm.
 * User: BinhNhat
 * Date: 7/20/13
 * Time: 12:42 PM
 * To change this template use File | Settings | File Templates.
 */
namespace Home\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ProductController extends AbstractActionController
{
    public function indexAction()
    {
        $dataView = array(
            'msg'=>"Cai dat thanh cong module home, controller Product",
        );
        return new ViewModel($dataView);
    }
}