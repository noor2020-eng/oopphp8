<?php include 'person.php'?>
<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title></title>

</head>

<body>

	<?php

		

	$person1 = new Person("Noor","black",21);
	echo $person1->getDA();
	
	?>
</body>

</html>
