<?php
	# Load controllers class
	spl_autoload_register(function ($class)
	{
		require_once __DIR__."/models/$class.php";
	});
	use eftec\bladeone\BladeOne;

	class UserController
	{
		private $blade;

		public function __construct()
		{
			$this->blade = new BladeOne(__DIR__.'/../views', __DIR__.'/../cache', BladeOne::MODE_AUTO);
		}
	}
?>