# Comment-Buttons

To use this plugin add the following tag inside your comment form tag in your comment template:

    {exp:comment_buttons}


Note: You must add the following CSS to your stylesheet template in order to format the buttons:


    /*
    Formatting Buttons
    ------------------------------------------------------ */
    
    .buttonMode {
    	font-family: Verdana, Geneva, Tahoma, Trebuchet MS, Arial, Sans-serif;
    	font-size: 10px;
    	color: #73769D;
    	background-color: transparent;
    	white-space: nowrap;
    }
    
    .htmlButtonOuter, .htmlButtonOuterL {
    	background-color: #f6f6f6;
    	padding: 0;
    	border-top: #333 1px solid;
    	border-right: #333 1px solid;
    	border-bottom: #333 1px solid;
    }
    .htmlButtonOuterL {
    	border-left: #333 1px solid;
    }
    .htmlButtonInner {
    	background-color: transparent;
    	text-align: center;
    	padding: 0 3px 0 3px;
    	border-left: #fff 1px solid;
    	border-top: #fff 1px solid;
    	border-right: #ccc 1px solid;
    	border-bottom: #ccc 1px solid;
    }
    .htmlButtonOff {
    	font-family: Verdana, Arial, Trebuchet MS, Tahoma, Sans-serif;
    	font-size: 11px;
    	font-weight: bold;
    	padding: 1px 2px 2px 2px;
    	white-space: nowrap;
    }
    .htmlButtonOff a:link {
    	color: #000;
    	text-decoration: none;
    	white-space: nowrap;
    }
    .htmlButtonOff a:visited {
    	text-decoration: none;
    }
    .htmlButtonOff a:active {
    	text-decoration: none;
    	color: #999;
    }
    .htmlButtonOff a:hover {
    	background-color: #fff;
    	text-decoration: none;
    	color: #999;
    }
    .htmlButtonOn {
    	font-family: Verdana, Arial, Trebuchet MS, Tahoma, Verdana, Sans-serif;
    	font-size: 11px;
    	font-weight: bold;
    	background: #f6f6f6;
    	padding: 1px 2px 2px 2px;
    	white-space: nowrap;
    }
    .htmlButtonOn a:link {
    	color: #990000;
    	text-decoration: none;
    	white-space: nowrap;
    }
    .htmlButtonOn a:visited {
    	text-decoration: none;
    }
    .htmlButtonOn a:active {
    	text-decoration: none;
    	color: #999;
    }
    .htmlButtonOn a:hover {
    	background-color: #fff;
    	color: #999;
    	text-decoration: none;
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

