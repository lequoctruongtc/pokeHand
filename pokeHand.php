<?php

class Poke
{
	private $stringPoke;

	public function __construct($string)
	{
		$this->stringPoke = $string;
	}

	public function validPokeHand()
	{
		for($i = 1;$i < 10;$i = $i+2) {
			$arr[] = substr($this->stringPoke, $i, 1);
		}
		echo '<pre>';
		$arrPoke = array();
		foreach ($arr as $key => $value) {
			if (in_array($value, array_keys($arrPoke))) {
				$arrPoke[$value] = $arrPoke[$value] + 1;
			} else {
				$arrPoke[$value] = 1;
			}
		}
		if (count($arrPoke) == 2) {
			foreach ($arr as $key => $value) {
				if ($value == 4) {
					return '4C';
				} else if ($value == 3){
					return 'FH';				}
			}
		} else if(count($arrPoke) == 3) {
			$i = 0;
			foreach ($arrPoke as $key => $value) {
				if ($value  == 3) {
					return '3C';
				} else if ($value == 2) {
					if (isset($P1)) {
						return '2p';
					} else {
						if (isset($P1)) {
							return '1P';
						} else {
							$P1 = '1P';
						}
					}
				}
			}
		} else if (count($arrPoke) == 4) {
			return '1P';
		} else {
			return '--';
		}
	}
}

// $poke = new Poke('D4C4C8D8S4');
$poke = new Poke('S8D3HQS3CQ');
echo $poke->validPokeHand();

