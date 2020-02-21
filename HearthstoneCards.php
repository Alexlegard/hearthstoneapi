<?php
class HearthstoneCards
{
	private $data;
	
	//Properties
	/*
	["artist"]=> string(19) "Nutthapon Petchthai"
	["cardClass"]=> string(4) "MAGE"
	["collectible"]=> bool(true)
	["cost"]=> int(5)
	["dbfId"]=> int(2539)
	["flavor"]=> string(73) "It's on the rack next to ice lance, acid lance, and English muffin lance."
	["id"]=> string(6) "AT_001"
	["name"]=> string(11) "Flame Lance"
	["playRequirements"]=> object(stdClass)#2 (2) { ["REQ_MINION_TARGET"]=> int(0) ["REQ_TARGET_TO_PLAY"]=> int(0) } ["rarity"]=> string(6) "COMMON" ["set"]=> string(3) "TGT" ["text"]=> string(27) "Deal $8 damage to a minion." ["type"]=> string(5) "SPELL" } [1]=> object(stdClass)#3
	*/
	
	
	
	public function __construct(){
		
	}
	
	public function getAllCards(){
		
		return $this->data;
	}
	
	public function setData(){
		
		$curl = curl_init();

		//Set request url
		curl_setopt($curl, CURLOPT_URL, "https://api.hearthstonejson.com/v1/30103/enUS/cards.collectible.json");
		
		
		//Set return transfer to 1
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);

		//Get the output_add_rewrite_var
		$output = curl_exec($curl);

		//Close connection to save system resources
		curl_close($curl);

		$this->data = json_decode($output);
	}
	
	public function getCard($name){
		foreach($this->data as $card){
			
			if($card->name == $name){
				//The two colons are for static functions or methods
				//Once you reach the card, end the function with a return
				return $card;
			}
		}
		return null;
	}
}
?>