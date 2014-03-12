<?php 
class Data{

	private aUser = new array(
								new array("id" => 1,"username" => "Admin","password" => "admin"),
								new array("id" => 2,"username" => "Player","password" => "player"),
								new array("id" => 3,"username" => "Capitain","password" => "admin"));
								
	private aPlayer = new array(new array(	"id" => 1,"pieliedie" => "Jacky Mao","role" => "Capitaine"),
											"id" => 2,"username" => "EternaLEnVy","role" => "player")
											"id" => 2,"username" => "SingSing","role" => "player")
											"id" => 2,"username" => "bOne7","role" => "player")
											"id" => 2,"username" => "Aui_2000","role" => "player")
											"id" => 2,"username" => "Fear","role" => "player")
											"id" => 2,"username" => "Arteezy","role" => "player")
											"id" => 2,"username" => "Universe","role" => "player")
											"id" => 2,"username" => "zai","role" => "player")
											"id" => 2,"username" => "ppd","role" => "Capitaine")
	);
	
	private aTeam = new array(new array("id" => 1, "name" => "Cloud 9", "win" => "6", "lost" =>"1", "membres" => new array(),
										"id" => 2, "name" => "Evil Geniuses", "win" => "5", "lost" =>"2", "membres" => new array(),
										"id" => 3, "name" => "Team Liquid", "win" => "3", "lost" =>"4", "membres" => new array(),
										"id" => 4, "name" => "Team eHugs", "win" => "3", "lost" =>"4", "membres" => new array(),
										"id" => 5, "name" => "Revenge eSports", "win" => "2", "lost" =>"5", "membres" => new array(),
										"id" => 6, "name" => "Denial eSports", "win" => "1", "lost" =>"6", "membres" => new array(),
										"id" => 7, "name" => "Swagenteiger", "win" => "1", "lost" =>"6", "membres" => new array(),
										"id" => 8, "name" => "Armata Gaming", "win" => "7", "lost" =>"0", "membres" => new array()));
	private aNews = new array();
}
?>