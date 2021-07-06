<?php
namespace Printq\NewFields\Model\ResourceModel;

use \Magento\Framework\Model\AbstractModel;

class NewFields extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
	protected function _construct()
	{
		$this->_init('printq_new_field', 'id');
	}
}