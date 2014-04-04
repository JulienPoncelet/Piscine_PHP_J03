<?PHP

function			ft_set()
{
	setcookie($_GET["name"], $_GET["value"], time() + 3600);
}

function			ft_get()
{
	if ($_COOKIE[$_GET["name"]] !== NULL)
		echo $_COOKIE[$_GET["name"]]."\n";
}

function			ft_del()
{
	setcookie($_GET["name"], "", time() - 3600);
}

$action_tab = explode(";", "set;get;del");
$action_exec = explode(";", "ft_set;ft_get;ft_del");
$action_size = 3;

$i = 0;
while ($i < $action_size)
{
	if ($action_tab[$i] === $_GET["action"])
		$action_exec[$i]();
	$i++;
}

?>
