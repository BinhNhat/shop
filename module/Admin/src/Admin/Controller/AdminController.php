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
use Admin\Model\AdminTable;

class AdminController extends AbstractActionController
{

    //ham getAdminTable dung de ket noi toi DB(service) voi cac phuong thuc dc khai bao trong AdminTable
    protected $adminTable;
    public function getAdminTable()
    {
        if(!$this->adminTable)
        {
            $this->adminTable = $this->getServiceLocator()->get('Admin\Model\AdminTable');
        }
        return $this->adminTable;
    }
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
            'msg'=> $this->getAdminTable()->getAll(),
        );
        return new ViewModel($dataView);
    }
    public function testAction()
    {       
        return new ViewModel();
    }
}