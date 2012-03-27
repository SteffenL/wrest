<?php
/**
 * @author Weavora Team <hello@weavora.com>
 * @link http://weavora.com
 * @copyright Copyright (c) 2011 Weavora LLC
 */

class WRestDeleteAction extends CAction
{

	public function run()
	{
		$model = $this->controller->getModel();
		if ($model->delete()) {
			$pk = $model->getMetaData()->tableSchema->primaryKey;
			$this->controller->sendResponse(200, array('id' => $model->$pk));
		} else {
			$this->controller->sendResponse(500);
		}
	}

}