<?php

require_once "../HTML_builder_class/html_builder.php";

	// login screen will have (all on one div): 
		// user icon in div
		// user login details on another div
			// text input for username
			// hashed input for password

// username 
$username_input_attributes = [
	"type = text",
	"name = usename",
	"placeholder = 'Username'",
	"title = 'Enter your username here'"
];
$username_input_attributes = implode(" ", $username_input_attributes);

$username_label = new HTML_text_builder("label", "username_label", "generic-label", "for = 'usename'", "Username");
$username_input = new HTML_text_builder("input", "username", "generic-input", $username_input_attributes);
$user_div_content = "" . $username_label . $username_input;
$username_div = new HTML_text_builder("div", "username_container", "input-container", null, $user_div_content);

// password
$password_input_attributes = [
	"type = text",
	"name = password",
	"placeholder = 'Password'",
	"title = 'Enter your password here'"
];
$password_input_attributes = implode(" ", $password_input_attributes);

$password_label = new HTML_text_builder("label", "username_label", "generic-label", "for = 'usename'", "Username");
$password_input = new HTML_text_builder("input", "username", "generic-input protected-input", $password_input_attributes);
$password_div_content = "" . $password_label . $password_input;
$password_div = new HTML_text_builder("div", "username_container", "input-container", null, $password_div_content);

// background div
$content = "" . $username_div . "<br>" . $password_div;
$content_container = new HTML_text_builder("div", "login_screen_container", "screen-container", null, $content )

echo $content_container;