<?php 
class Data{

	private $aUser =   array(
								  array("id" => 1,"username" => "Admin","password" => "admin"),
								  array("id" => 2,"username" => "Player","password" => "player"),
								  array("id" => 3,"username" => "Capitain","password" => "admin"));
								
	private $aPlayer =   array(  array(	"id" => 1,"username" => "pieliedie","role" => "Capitaine", "email" => "pieliedie@email.com", "country" => "Canada", "team" => 1,"previousTeam" => ""),
								  array(	"id" => 2,"username" => "EternaLEnVy","role" => "player", "email" => "EternaLEnVy@email.com", "country" => "France","team" =>1,"previousTeam" => ""),
								  array(	"id" => 3,"username" => "SingSing","role" => "player", "email" => "SingSing@email.com", "country" => "Canada","team" =>1,"previousTeam" => ""),
								  array(	"id" => 4,"username" => "bOne7","role" => "player", "email" => "bOne7@email.com", "country" => "France","team" =>1,"previousTeam" => ""),
								  array(	"id" => 5,"username" => "Aui_2000","role" => "player", "email" => "Aui_2000@email.com", "country" => "Canada","team" =>1,"previousTeam" => ""),
								  array(	"id" => 6,"username" => "Fear","role" => "player", "email" => "Fear@email.com","country" => "Chine","team" =>2,"previousTeam" => ""),
								  array(	"id" => 7,"username" => "Arteezy","role" => "player", "email" => "Arteezy@email.com", "country" => "Canada","team" =>2,"previousTeam" => ""),
								  array(	"id" => 8,"username" => "Universe","role" => "player", "email" => "Universe@email.com","country" => "Chine","team" =>2,"previousTeam" => ""),
								  array(	"id" => 9,"username" => "zai","role" => "player", "email" => "zai@email.com", "country" => "France","team" =>2,"previousTeam" => ""),
								  array(	"id" => 10,"username" => "ppd","role" => "Capitaine", "email" => "ppd@email.com", "country" => "Canada","team" =>2,"previousTeam" => ""),	
								  array(	"id" => 11,"username" => "Waytosexy","role" => "player", "email" => "Waytosexy@email.com","country" => "Chine","team" =>3,"previousTeam" => ""),
								  array(	"id" => 12,"username" => "FLUFFNSTUFF","role" => "player", "email" => "FLUFFNSTUFF@email.com", "country" => "Canada","team" =>3,"previousTeam" => ""),
								  array(	"id" => 13,"username" => "TC","role" => "player", "email" => "TC@email.com","country" => "Chine","team" =>3,"previousTeam" => ""),
								  array(	"id" => 14,"username" => "qojqva","role" => "player", "email" => "qojqva@email.com","country" => "Chine","team" =>3,"previousTeam" => ""),
								  array(	"id" => 15,"username" => "patrondonoso","role" => "Capitaine", "email" => "patrondonoso@email.com", "country" => "Canada","team" =>3, "previousTeam" => 1),
								  array(	"id" => 16,"username" => "RyuUboruZ","role" => "player", "email" => "RyuUboruZ@email.com", "country" => "Canada","team" =>4,"previousTeam" => ""),
								  array(	"id" => 17,"username" => "Cak3z","role" => "player", "email" => "Cak3z@email.com", "country" => "France","team" =>4,"previousTeam" => ""),
								  array(	"id" => 18,"username" => "ima_sheep(sux)","role" => "player", "email" => "sux@email.com", "country" => "France","team" =>4,"previousTeam" => ""),
								  array(	"id" => 19,"username" => "jigglebilly","role" => "player", "email" => "jigglebilly@email.com","country" => "Chine","team" =>4,"previousTeam" => ""),
								  array(	"id" => 20,"username" => "Pandaego","role" => "player", "email" => "Pandaego@email.com", "country" => "Canada","team" =>4,"previousTeam" => "")
	);
	
	private $aTeam =   array(	  array("id" => 1, "name" => "Cloud 9", "win" => "5", "lost" =>"2", "membres" =>   array(1,2,3,4,5)),
								  array("id" => 2, "name" => "Evil Geniuses", "win" => "1", "lost" =>"6", "membres" =>   array(6,7,8,9,10)),
								  array("id" => 3, "name" => "Team Liquid", "win" => "2", "lost" =>"7", "membres" =>   array(16,17,18,19,20)),
								  array("id" => 8, "name" => "Armata Gaming", "win" => "7", "lost" =>"0", "membres" =>   array(11,12,13,14,15)));
								
	private $aMatch =   array(   array("id" => 1, "winTeam" => 1, "lostTeam" =>2, "date" =>"1st april 2014"),
								  array("id" => 1, "winTeam" => 1, "lostTeam" =>3, "date" =>"17th april 2014"),
								  array("id" => 1, "winTeam" => 1, "lostTeam" =>2, "date" =>"1st march 2014"),
								  array("id" => 1, "winTeam" => 1, "lostTeam" =>3, "date" =>"11th march 2014"),
								  array("id" => 1, "winTeam" => 1, "lostTeam" =>2, "date" =>"6th march 2014"),
								  array("id" => 1, "winTeam" => 3, "lostTeam" =>3, "date" =>"2nd april 2014"),
								  array("id" => 1, "winTeam" => 3, "lostTeam" =>3, "date" =>"23th april 2014"),
								  array("id" => 1, "winTeam" => 7, "lostTeam" =>3, "date" =>"28th march 2014"),
								  array("id" => 1, "winTeam" => 7, "lostTeam" =>2, "date" =>"18th april 2014"),
								  array("id" => 1, "winTeam" => 7, "lostTeam" =>2, "date" =>"10th april 2014"),
								  array("id" => 1, "winTeam" => 7, "lostTeam" =>3, "date" =>"6th april 2014"),
								  array("id" => 1, "winTeam" => 7, "lostTeam" =>3, "date" =>"10th march 2014"),
								  array("id" => 1, "winTeam" => 7, "lostTeam" =>1, "date" =>"15th april 2014"),
								 array("id" => 1, "winTeam" => 7, "lostTeam" =>1, "date" =>"13th march 2014"),
								 array("id" => 1, "winTeam" => 2, "lostTeam" =>2, "date" =>"22th april 2014"));
	private $aNews =  array();

	public function getPlayer(){
		return $this->aPlayer;
	}
}
?>