<?php
$massiv = [
	["FIO" => "Петров В.А.", "Kurs"=>1,"DR"=>"01.02.1987","Ocenki"=>["Himiya"=>5,
									 "Biologiya"=>4,
									 "Fizika"=>3
									]
	],

	["FIO" => "Петрова П.И.", "Kurs"=>2,"DR"=>"12.05.1988","Ocenki"=>["Himiya"=>5,
									 "Biologiya"=>5,
									 "Fizika"=>5
									]
	],

	["FIO" => "Иванов А.П.", "Kurs"=>1,"DR"=>"01.10.1987","Ocenki"=>["Himiya"=>5,
									 "Biologiya"=>3,
									 "Fizika"=>3
									]
	],

	["FIO" => "Шишкина А.П.", "Kurs"=>2,"DR"=>"01.02.1987","Ocenki"=>["Himiya"=>5,
									 "Biologiya"=>5,
									 "Fizika"=>5
									]
	]

	  ];

	echo print_r($massiv);
	echo "<p></p>";
	  foreach ($massiv as $value)
{
	$srbal=($value["Ocenki"]["Himiya"]+$value["Ocenki"]["Biologiya"]+$value["Ocenki"]["Fizika"])/3;
	echo "Cредний балл ".$value["FIO"].": ".$srbal;
	echo "<p></p>";
}

?>