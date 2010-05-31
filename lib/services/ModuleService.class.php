<?php
/**
 * @package modules.dboracle.lib.services
 */
class dboracle_ModuleService extends ModuleBaseService
{
	/**
	 * Singleton
	 * @var dboracle_ModuleService
	 */
	private static $instance = null;

	/**
	 * @return dboracle_ModuleService
	 */
	public static function getInstance()
	{
		if (is_null(self::$instance))
		{
			self::$instance = self::getServiceClassInstance(get_class());
		}
		return self::$instance;
	}
	
	/**
	 * @param Integer $documentId
	 * @return f_persistentdocument_PersistentTreeNode
	 */
//	public function getParentNodeForPermissions($documentId)
//	{
//		// Define this method to handle permissions on a virtual tree node. Example available in list module.
//	}
}