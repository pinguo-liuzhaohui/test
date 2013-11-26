<?php

/**
 * SiteController is the default controller to handle user requests.
 */
//class SiteController extends CController
class SiteController
{
	/**
	 * Index action is the default action in a controller.
	 */
	public function actionIndex($params)
	{
		#echo 'Hello World';
		return $params;
	}
}
