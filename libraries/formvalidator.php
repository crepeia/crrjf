<?

function isblank($input)
{
	if ($input == ' ') {
		return true;
	} else {
		return false;
	}
}


function isvaliddate($input, $separator='/')
{
	list ($month, $day, $year) = explode($separator, $input);
	return checkdate($day, $month, $year);
}

function isvalidemail($email)
{
	if (preg_match(
				   '/^([_a-z0-9-]+)(\+)*(\.[_a-z0-9-]+)*
				   @([a-z0-9-]+)
				   (\.[a-z0-9-]+)*
				   (\.[a-z]{2,6})$/',
				   $email)) {
		return true;
	} else {
		return false;
	}
}

?>