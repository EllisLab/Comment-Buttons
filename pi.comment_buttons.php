<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$plugin_info = array(
						'pi_name'			=> 'Comment HTML Formatting Buttons',
						'pi_version'		=> '1.3',
						'pi_author'			=> 'Paul Burdick',
						'pi_author_url'		=> 'http://www.expressionengine.com/',
						'pi_description'	=> 'This plugin creates a set of HTML formatting buttons for use with the comment form.',
						'pi_usage'			=> Comment_buttons::usage()
					);

/**
 * Comment_buttons Class
 *
 * @package			ExpressionEngine
 * @category		Plugin
 * @author			ExpressionEngine Dev Team
 * @copyright		Copyright (c) 2005 - 2009, EllisLab, Inc.
 * @link			http://expressionengine.com/downloads/details/comment_html_formatting_buttons/
 */

class Comment_buttons {


    var $return_data = '';    
    
	/**
	 * Constructor
	 *
	 * @access	public
	 * @return	void
	 */

    function Comment_buttons($str = '')
    {
     	$this->EE =& get_instance();

     	$this->EE->lang->loadfile('member');  
     
     	// -------------------------------------
		//   Create the HTML formatting buttons
		// ------------------------------------- 
		
		//$buttons = '';
		//if ( ! class_exists('Html_buttons'))
		//{
		//	if (include_once(APPPATH.'libraries/Html_buttons'.EXT))
		//	{
		//		$BUTT = new EE_Html_buttons();
		//		$buttons = $BUTT->create_buttons();
		//	}
		//}
		
		$this->EE->load->library('html_buttons'); 
		$buttons = $this->EE->html_buttons->create_buttons();
		
		$this->return_data = str_replace('document.submit_post.', 'document.comment_form.', $buttons);
		$this->return_data = str_replace("document.getElementById('submit_post').", "document.getElementById('comment_form').", $this->return_data);
		$this->return_data = str_replace('{lang:close_tags}', $this->EE->lang->line('close_tags'), $this->return_data);
		$this->return_data = str_replace("var selField  = 'body';", "var selField  = 'comment';", $this->return_data);
        
        return $this->return_data;
	}

	// --------------------------------------------------------------------
	
	/**
	 * Usage
	 *
	 * Plugin Usage
	 *
	 * @access	public
	 * @return	string
	 */
	function usage()
	{
		ob_start(); 
		?>
		To use this plugin add the following tag inside your comment form tag in your comment template:

		{exp:comment_buttons}


		Note: You must add the following CSS to your stylesheet template in order to format the buttons:


		/*
		    Formatting Buttons
		------------------------------------------------------ */ 

		.buttonMode {
		 font-family:       Verdana, Geneva, Tahoma, Trebuchet MS, Arial, Sans-serif;
		 font-size:         10px;
		 color:             #73769D;
		 background-color:  transparent; 
		 white-space: 		nowrap;
		}

		.htmlButtonOuter, .htmlButtonOuterL {
		 background-color:  #f6f6f6;  
		 padding:           0;
		 border-top:        #333 1px solid;
		 border-right:      #333 1px solid;
		 border-bottom:     #333 1px solid;
		}
		.htmlButtonOuterL  {
		 border-left:       #333 1px solid;
		}
		.htmlButtonInner {
		 background-color:  transparent; 
		 text-align:		center;
		 padding:			0 3px 0 3px;
		 border-left:       #fff 1px solid;
		 border-top:        #fff 1px solid;
		 border-right:      #ccc 1px solid;
		 border-bottom:     #ccc 1px solid;
		}
		.htmlButtonOff {
		 font-family:       Verdana, Arial, Trebuchet MS, Tahoma, Sans-serif;
		 font-size:         11px;
		 font-weight:       bold;
		 padding:           1px 2px 2px 2px;
		 white-space:       nowrap;
		}
		.htmlButtonOff a:link { 
		 color:             #000;
		 text-decoration:   none;
		 white-space:       nowrap;
		}
		.htmlButtonOff  a:visited { 
		 text-decoration:   none;
		}
		.htmlButtonOff a:active { 
		 text-decoration:   none;
		 color:             #999;
		}
		.htmlButtonOff a:hover { 
		 background-color:	#fff;
		 text-decoration:   none;
		 color:             #999;
		}
		.htmlButtonOn {
		 font-family:       Verdana, Arial, Trebuchet MS, Tahoma, Verdana, Sans-serif;
		 font-size:         11px;
		 font-weight:       bold;
		 background:        #f6f6f6;
		 padding:           1px 2px 2px 2px;
		 white-space:       nowrap;
		}
		.htmlButtonOn a:link { 
		 color:             #990000;
		 text-decoration:   none;
		 white-space:       nowrap;
		}  
		.htmlButtonOn  a:visited { 
		 text-decoration:   none;
		} 
		.htmlButtonOn a:active { 
		 text-decoration:   none;
		 color:             #999;
		}
		.htmlButtonOn a:hover { 
		 background-color:	#fff;
		 color:             #999;
		 text-decoration:   none;
		}

		======================
		v 1.2
		======================

		Removed references for PHP 4.4.0 people.

		======================
		v 1.2.1
		======================

		Updated to work with EE 1.5

		======================
		v 1.3
		======================

		Updated plugin to be 2.0 compatible

		<?php
		$buffer = ob_get_contents();
	
		ob_end_clean(); 

		return $buffer;
	}

	// --------------------------------------------------------------------
	
}

// END CLASS
/* End of file pi.comment_buttons.php */
/* Location: ./system/expressionengine/third_party/comment_buttons/pi.comment_buttons.php */