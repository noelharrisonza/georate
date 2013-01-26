<?php 

	class Navigate
	{
		public function __construct()
		{

		}

		/* execute
		 * This drives the calling of files and classes for georate.
		 * ---------------------------------------------------------
		 * @param data:	The data being passed through the API
		 * @return:		Data from the controller / action in a jSON format.
		 */

		public function execute($data=null)
		{
			if(!$data) die;

			$controller = $data['controller'];
			$action 	= $data['action'];

			if(file_exists(SRV_DIR.'/controllers/'.$controller.'.php'))
			{
				require SRV_DIR.'/controllers/'.$controller.'.php';
				call_user_func($action);
			}
			else
			{
				die;
			}

		}
	}

