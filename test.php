<?php
	class MyClass{

	public static $a;
	public static $b = 'this is b';
	private static $c = 20;
	protected static $d = 'pro';
	public function sterling(){
			return 'b.blog status'
	}
		public static function rahim(){
		echo self::c;
		}

}
$raimsterling = new myclass;
	$raimsterling->sterling();