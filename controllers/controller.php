<?php

	use eftec\bladeone\BladeOne;

	class controller
	{
		private $blade;

		public function __construct()
		{
			$this->blade = new BladeOne(__DIR__.'/../views', __DIR__.'/../cache', BladeOne::MODE_AUTO);
		}

		public function index()
		{
			$title = 'Main Page';

			echo $this->blade->run('main', compact('title'));
		}

		public function user($id)
		{
			$title = "User: $id";

			echo $this->blade->run('main', compact('title'));
		}
	}
?>