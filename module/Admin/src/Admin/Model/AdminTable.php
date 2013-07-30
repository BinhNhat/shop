<?php
/**
 * Created by JetBrains PhpStorm.
 * User: BinhNhat
 * Date: 7/21/13
 * Time: 1:05 PM
 * To change this template use File | Settings | File Templates.
 */
namespace Admin\Model;
use Zend\Db\TableGateway\TableGateway;
class AdminTable
{
    protected $tableGateway;
    public function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function getAll()
    {
        return $this->tableGateway->select();
    }
}