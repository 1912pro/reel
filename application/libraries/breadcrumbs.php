<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Breadcrumbs Class
*/
class Breadcrumbs {
/**
* config variable
*/
var $crumb_divider = '<span class="divider">></span>';
var $tag_open = '<ul class="breadcrumb">';
var $tag_close = '</ul>';
var $crumb_open = '<li>';
var $crumb_last_open = '<li class="active">';
var $crumb_close = '</li>';
/**
* Breadcrumbs stack
*
*/
private $breadcrumbs = array();
/**
* Constructor
*
* @access public
*
*/
public function __construct($params = array())
{	
	{
		if (count($params) > 0)
		{
			$this->initialize($params);
		}

		log_message('debug', "Breadcrumbs Class Initialized");
	}
}
function initialize($params = array())
{
	if (count($params) > 0)
	{
		foreach ($params as $key => $val)
		{
			if (isset($this->$key))
			{
				$this->$key = $val;
			}
		}
	}
}
// --------------------------------------------------------------------
/**
* Append crumb to stack
*
* @access public
* @param string $page
* @param string $href
* @return void
*/	
function push($page, $href)
{
    // no page or href provided
    if (!$page OR !$href) return;
    // Prepend site url
    $href = site_url($href);
    // push breadcrumb
    $this->breadcrumbs[$href] = array('page' => $page, 'href' => $href);
}
// --------------------------------------------------------------------
/**
* Prepend crumb to stack
*
* @access public
* @param string $page
* @param string $href
* @return void
*/	
function unshift($page, $href)
{
    // no crumb provided
    if (!$page OR !$href) return;
    // add at firts
    array_unshift($this->breadcrumbs, array('page' => $page, 'href' => $href));
}
// --------------------------------------------------------------------
/**
* Generate breadcrumb
*
* @access public
* @return string
*/	
function show()
{
if ($this->breadcrumbs) {
    // set output variable
    $output = $this->tag_open;
    // construct output
    foreach ($this->breadcrumbs as $key => $crumb) {
        if (end(array_keys($this->breadcrumbs)) == $key) {
            $output .= $this->crumb_last_open . '' . $crumb['page'] . '' . $this->crumb_close;
        } else {
            $output .= $this->crumb_open.'<a href="' . $crumb['href'] . '">' . $crumb['page'] . '</a> '.$this->crumb_divider.$this->crumb_close;
        }
    }
    // return output
    return $output . $this->tag_close . PHP_EOL;
}
// no crumbs
return '';
}
}
// END Breadcrumbs Class
/* End of file Breadcrumbs.php */
/* Location: ./application/libraries/Breadcrumbs.php */