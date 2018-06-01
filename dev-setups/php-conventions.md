# PHP Conventions

1. [docstrings / docblocks](http://phpdocu.sourceforge.net/howto.php)
> PHPDocumentor based
> A DocBlock contains three basic segments in this order:
* Short Description
* Long Description
* Tags: 
```PHP
/**
* The short description
*
* As many lines of extendend description as you want {@link element} links to an element
* {@link http://www.example.com Example hyperlink inline link} links to a website
* Below this goes the tags to further describe element you are documenting
*
* @param  	type	$varname	description
* @return 	type	description
* @access 	public or private
* @author 	author name 
* @copyright	name date
* @version	version
* @see		name of another element that can be documented, produces a link to it in the documentation
* @link		a url
* @since  	a version or a date
* @deprecated	description
* @deprec	alias for deprecated
* @magic	phpdoc.de compatibility
* @todo		phpdoc.de compatibility
* @exception	Javadoc-compatible, use as needed
* @throws  	Javadoc-compatible, use as needed
* @var		type	a data type for a class variable
* @package	package name
* @subpackage	sub package name, groupings inside of a project
*/
```