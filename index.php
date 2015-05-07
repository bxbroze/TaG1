<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.tag1
 * 
 * @copyright   Copyright (C) 2005 - 2014 TaG
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined( '_JEXEC' ) or die( 'Restricted access' );
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>">

<head>
<jdoc:include type="head" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/style1.css" type="text/css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<div id="super-conteneur">   <!--Englobe header, corps et footer-->

<div id="conteneur">         <!--Englobe Header et corps-->
		
	<div id="header">
		<div id="logo"></div>
		<jdoc:include type="modules" name="top" /> 
		<jdoc:include type="modules" name="menu-h" /> 
	</div>
	<div id="corps">
		<jdoc:include type="component" />
		<jdoc:include type="modules" name="user1" />
	</div>
</div>     <!--Fin du conteneur-->

<div id="bas">
	<p> <jdoc:include type="modules" name="footer" /> </p>
</div>

</div>  <!--Fin du super-conteneur-->

</body>

</html>
