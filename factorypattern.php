<?php
interface FriendFactoryInterface {

	public function create() : Friend ;
}

class FriendFactory implements FriendFactoryInterface {

	public function create () : Friend {

		$friend = new Friend();
		return $friend;
	}
}

class Friend extends FriendFactory {

	public function getname() {
		return 'First Name';
	}
}



$f1 = new FriendFactory();
$friendprod = $f1->create();
echo $friendprod->getname();
?>