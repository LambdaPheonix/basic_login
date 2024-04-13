<?php

require_once "../HTML_builder_class/html_builder.php";

// basic planning
	// I need a login and sign up page
	// basic layout would be 
 		// 2 buttons on screen 1 login the other sign up
		// buttons will ajax in their goals.

	// login screen will have (all on one div): 
		// user icon in div
		// user login details on another div
			// text input for username
			// hashed input for password

	// Sign up for now will have (on one div):
		// user icon in div
		// user sign up details on another.
			// basic info
				//name, surname, email, cell
				// can make extra but not needed for now
			// user interaction details
				// username, password
			// role
				// will make default for now as it is not important

// main buttons
$sign_up_button = new HTML_text_builder("button", "sign_up", "generic_button", "title = 'click to sign up'", "Sign up");
$login_button = new HTML_text_builder("button", "login", "generic_button", "title = 'click to log in'", "Login");
$login_button = $login_button->build();
$sign_up_button = $sign_up_button->build();

$buttons_layout = [$login_button, $sign_up_button];

$button_container = new HTML_text_builder("div", null, "button_container", null, implode("<br>", $buttons_layout));

// dialog basics
$dialog_heading = "";
$dialog_heading = $dialog_heading->build();
$dialog_content = "";
$dialog_content = $dialog_content->build();
$dialog_buttons = "";
$dialog_buttons = $dialog_buttons->build();

$dialog_layout = [
	$dialog_heading,
	$dialog_content,
	$dialog_buttons
];

$dialog_container = new HTML_text_builder("div", "dialog_container", "hidden", null, );

$body = new HTML_text_builder("body", null, null, null, $button_container);

// header
$script_css = new HTML_text_builder("script", null, null, "src = 'css/main.css' rel='stylesheet' type='text/css'");
$script_jquery = new HTML_text_builder("script", null, null, "src = 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js' type = 'text/javascript'");

$script_css = $script_css->build();

$title =  new HTML_text_builder("title", null, null, null, "Testing Login/Sign up");
$title = $title->build();
$header = new HTML_text_builder("head", null, null, null, $title . $script_css);
$header = $header->build();

echo $header . $body;die();

$html_main = new HTML_text_builder("html", null, null, null, $header . $body);
$html_main = $html_main->build();

echo $html_main;


