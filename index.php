<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Prime | Маркетинговые push-рассылки</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap-grid.min.css" integrity="sha512-Aa+z1qgIG+Hv4H2W3EMl3btnnwTQRA47ZiSecYSkWavHUkBF2aPOIIvlvjLCsjapW1IfsGrEO3FU693ReouVTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<style>
		@import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap');

		:root {
			--first-color: #44c9c5;
			--second-color: #F5F5F5;
			--body-color: #EBECF0;
			--inactive-color-text: #B0B0B0;
			--logo-background-image: url(../img/logo2.svg);
			--home-menubar-image: url(../img/home.svg);
			--dashboard-menubar-image: url(../img/dashboard.svg);
			--user-menubar-image: url(../img/employeess.svg);
			--settings-menubar-image: url(../img/settings.svg);
			--exit-menubar-image: url(../img/exit.svg);
		}

		a {
			text-decoration: none !important;
		}

		*::placeholder {
			color: #B0B0B0 !important;
		}

		body {
			font-family: 'Inter';
			background-color: var(--body-color);
			font-family: 'Inter', sans-serif;
		}

		a {
			color: var(--first-color) !important;
			text-decoration: none;
		}

		p,
		h1,
		h2,
		h3,
		h4,
		h5,
		h6 {
			color: #0C1827 !important;
		}

		.content {
			background-color: #fff;
			border-radius: 24px;
			min-height: 100vh;
			overflow-x: hidden;
		}

		.align-center {
			align-items: center;
		}

		.just-between {
			justify-content: space-between;
		}

		.block_1 {
			margin-bottom: 36px;
		}

		.block_1 h4 {
			font-weight: 500;
		}

		.cut_info_title {
			margin: 36px 0 0 0;
		}

		.radio_input_box {
			align-items: center;
		}

		.radio_input_box input {
			margin: 0;
			padding: 0;
		}

		.radio_input_box p {
			margin: 0;
			padding: 0;
			font-size: 14px;
		}

		.radio_input_box input[type=radio] {
			position: absolute;
			visibility: hidden;
		}

		.radio_input_box label {
			display: flex;
			align-items: center;
			position: relative;
			font-size: 14px;
			z-index: 9;
			cursor: pointer;
			-webkit-transition: all 0.25s linear;
			color: var(--inactive-color-text);

		}

		.radio_input_box:hover label {
			color: var(--first-color);
		}

		.radio_input_box label .check {
			display: flex;
			justify-content: center;
			align-items: center;
			border: 2px solid var(--inactive-color-text);
			border-radius: 100%;
			height: 24px;
			width: 24px;
			z-index: 5;
			transition: border .25s linear;
			-webkit-transition: border .25s linear;
			margin-right: 8px;
		}

		.radio_input_box:hover .check {
			border: 2px solid var(--first-color);
		}

		.radio_input_box .check::before {
			display: block;
			content: '';
			border-radius: 100%;
			height: 20px;
			width: 20px;
			transition: background 0.25s linear;
			-webkit-transition: background 0.25s linear;
		}

		.radio_input_box input[type=radio]:checked~label>.check {
			border: 2px solid var(--first-color);
		}

		.radio_input_box input[type=radio]:checked~label>.check::before {
			background: var(--first-color);

		}

		.radio_input_box input[type=radio]:checked~label {
			color: var(--first-color);
		}

		/* TABS users */
		article {
			display: none;
		}

		article.on {
			display: block;
		}

		/* About users */

		.block_2 hr {
			background-color: #DEDEDE;
			height: 1px;
			border: 0;
		}

		.about_user_block .block_lable {
			display: flex;
			align-items: center;
		}

		.about_user_block .block_lable span {
			margin-bottom: -12px;
			margin-left: 4px;
		}

		.block_lable h4 {
			margin-bottom: 16px;
		}

		.block_lables h4 {
			margin-bottom: 16px;
		}

		.input-group {
			width: 100%;
		}

		.form-control {
			width: -webkit-fill-available;
			height: 52px;
			font-size: 14px;
			padding: 0 16px;
			border: 1px solid var(--inactive-color-text);
			border-radius: 12px;
			font-family: 'Inter', sans-serif;
		}

		input:focus-visible {
			outline: var(--first-color) auto 1px;
		}

		input {
			cursor: pointer;
			font-family: 'Inter', sans-serif;
		}

		/* input dropdown for all style */

		details {
			position: relative;
			width: 100%;
			margin-right: 1rem;
		}

		details[open] {
			z-index: 1;
		}

		summary {
			padding: 1rem;
			cursor: pointer;
			border-radius: 12px;
			list-style: none;
			border: 1px solid #B0B0B0;
		}

		summary::-webkit-details-marker {
			display: none;
		}

		/*details[open] summary:before {
			content: '';
			display: block;
			width: 100vw;
			height: 100vh;
			background: transparent;
			position: fixed;
			top: 0;
			left: 0;
		}*/

		summary:after {
			content: '';
			display: inline-block;
			float: right;
			width: .5rem;
			height: .5rem;
			border-bottom: 1px solid currentColor;
			border-left: 1px solid currentColor;
			border-bottom-left-radius: 2px;
			transform: rotate(45deg) translate(50%, 0%);
			transform-origin: center center;
			transition: transform ease-in-out 100ms
		}

		summary:focus {
			outline: var(--first-color) auto 1px;
		}

		details[open] summary:after {
			transform: rotate(-45deg) translate(0%, 0%);
		}

		ul.list {
			width: 100%;
			background: #fff;
			position: absolute;
			top: calc(100% + .5rem);
			left: 0;
			padding: 8px 16px;
			margin: 0;
			box-sizing: border-box;
			border-radius: 12px;
			list-style: none;
			box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075) !important;
			max-height: 200px;
			overflow-y: scroll;
			overflow-x: hidden;
		}

		ul.list {
			counter-reset: labels;
		}

		.list label {
			width: 100%;
			display: flex;
			cursor: pointer;
			justify-content: space-between;
			padding: 12px 12px;
		}

		.list label span {
			--display: none;
			display: var(--display);
			width: 1rem;
			height: 1rem;
			border: 1px solid #727272;
			border-radius: 3px;
		}

		.list li {
			margin: 0;
			border-radius: 12px;
		}

		.list li:hover {
			background-color: var(--body-color);
		}

		summary.role_id {
			counter-reset: role_id;
		}

		summary p {
			margin: 0;
			padding: 0;
			display: inline;
		}

		/* input role id */

		summary.role_id:before {
			content: var(--selection);
		}

		.role_id input[type=checkbox] {
			counter-increment: role_id;
			appearance: none;
			display: none;
		}

		.role_id input[type=radio] {
			counter-increment: role_id;
			appearance: none;
			display: none;
		}

		.role_id input[type=checkbox]:checked {
			display: inline;
			--display: block;
		}

		.role_id input[type=radio]:checked {
			display: inline;
			--display: block;
		}

		.role_id input[type=checkbox]:after {
			content: attr(title);
			display: inline;
			font-size: 1rem;
		}

		.role_id input[type=radio]:after {
			content: attr(title);
			display: inline;
			font-size: 1rem;
		}



		/* input language id */


		summary.language {
			counter-reset: language;
		}


		summary.language:before {
			content: var(--selection);
		}

		.language input[type=checkbox] {
			counter-increment: language;
			appearance: none;
			display: none;
		}

		.language input[type=radio] {
			counter-increment: language;
			appearance: none;
			display: none;
		}

		.language input[type=checkbox]:checked {
			display: inline;
			--display: block;
		}

		.language input[type=radio]:checked {
			display: inline;
			--display: block;
		}

		.language input[type=checkbox]:after {
			content: attr(title);
			display: inline;
			font-size: 1rem;
		}

		.language input[type=radio]:after {
			content: attr(title);
			display: inline;
			font-size: 1rem;
		}

		/* input PODPISKA id */

		summary.podpiska {
			counter-reset: podpiska;
		}


		summary.podpiska:before {
			content: var(--selection);
		}

		.podpiska input[type=checkbox] {
			counter-increment: podpiska;
			appearance: none;
			display: none;
		}

		.podpiska input[type=radio] {
			counter-increment: podpiska;
			appearance: none;
			display: none;
		}

		.podpiska input[type=checkbox]:checked {
			display: inline;
			--display: block;
		}

		.podpiska input[type=radio]:checked {
			display: inline;
			--display: block;
		}

		.podpiska input[type=checkbox]:after {
			content: attr(title);
			display: inline;
			font-size: 1rem;
		}

		.podpiska input[type=radio]:after {
			content: attr(title);
			display: inline;
			font-size: 1rem;
		}

		/* input Country id */

		.country ul {
			width: 100%;
			background: #ddd;
			position: absolute;
			top: calc(100% + .5rem);
			left: 0;
			padding: 1rem;
			margin: 0;
			box-sizing: border-box;
			border-radius: 5px;
			max-height: 200px;
			overflow-y: auto;
		}

		.country li {
			margin: 0;
			padding: 1rem 0;
			border-bottom: 1px solid #ccc;
		}

		.country li:first-child {
			padding-top: 0;
		}

		.country li:last-child {
			padding-bottom: 0;
			border-bottom: none;
		}

		summary.country {
			counter-reset: country;
		}

		summary.country:before {
			content: var(--selection);
		}

		.country input[type=radio] {
			counter-increment: country;
			appearance: none;
			display: none;
		}

		.country input[type=radio]:checked {
			display: inline;
			--display: block;
		}

		.country input[type=radio]:after {
			content: attr(title);
			display: inline;
			font-size: 1rem;
		}

		.country ul.list {
			counter-reset: labels;
		}

		.country label {
			width: 100%;
			display: flex;
			cursor: pointer;
			justify-content: space-between;
		}

		.country label span {
			--display: none;
			display: var(--display);
			width: 1rem;
			height: 1rem;
			border: 1px solid #727272;
			border-radius: 3px;
		}


		/* input Region id */

		summary.region {
			counter-reset: region;
		}


		summary.region:before {
			content: var(--selection);
		}

		.region input[type=checkbox] {
			counter-increment: region;
			appearance: none;
			display: none;
		}

		.region input[type=radio] {
			counter-increment: region;
			appearance: none;
			display: none;
		}

		.region input[type=checkbox]:checked {
			display: inline;
			--display: block;
		}

		.region input[type=radio]:checked {
			display: inline;
			--display: block;
		}

		.region input[type=checkbox]:after {
			content: attr(title);
			display: inline;
			font-size: 1rem;
		}

		.region input[type=radio]:after {
			content: attr(title);
			display: inline;
			font-size: 1rem;
		}

		/* input City id */

		summary.city {
			counter-reset: city;
		}


		summary.city:before {
			content: var(--selection);
		}

		.city input[type=checkbox] {
			counter-increment: city;
			appearance: none;
			display: none;
		}

		.city input[type=radio] {
			counter-increment: city;
			appearance: none;
			display: none;
		}

		.city input[type=checkbox]:checked {
			display: inline;
			--display: block;
		}

		.city input[type=radio]:checked {
			display: inline;
			--display: block;
		}

		.city input[type=checkbox]:after {
			content: attr(title);
			display: inline;
			font-size: 1rem;
		}

		.city input[type=radio]:after {
			content: attr(title);
			display: inline;
			font-size: 1rem;
		}

		/* input NPS id */

		summary.nps {
			counter-reset: nps;
		}


		summary.nps:before {
			content: var(--selection);
		}

		.nps input[type=checkbox] {
			counter-increment: nps;
			appearance: none;
			display: none;
		}

		.nps input[type=radio] {
			counter-increment: nps;
			appearance: none;
			display: none;
		}

		.nps input[type=checkbox]:checked {
			display: inline;
			--display: block;
		}

		.nps input[type=radio]:checked {
			display: inline;
			--display: block;
		}

		.nps input[type=checkbox]:after {
			content: attr(title);
			display: inline;
			font-size: 1rem;
		}

		.nps input[type=radio]:after {
			content: attr(title);
			display: inline;
			font-size: 1rem;
		}

		/* input Positive id */

		.positive ul {
			width: 100%;
			background: #ddd;
			position: absolute;
			top: calc(100% + .5rem);
			left: 0;
			padding: 1rem;
			margin: 0;
			box-sizing: border-box;
			border-radius: 5px;
			max-height: 200px;
			overflow-y: auto;
		}

		.positive li {
			margin: 0;
			padding: 1rem 0;
			border-bottom: 1px solid #ccc;
		}

		.positive li:first-child {
			padding-top: 0;
		}

		.positive li:last-child {
			padding-bottom: 0;
			border-bottom: none;
		}

		summary.positive {
			counter-reset: positive;
		}

		summary.positive:before {
			content: var(--selection);
		}

		.positive input[type=radio] {
			counter-increment: positive;
			appearance: none;
			display: none;
		}

		.positive input[type=radio]:checked {
			display: inline;
			--display: block;
		}

		.positive input[type=radio]:after {
			content: attr(title);
			display: inline;
			font-size: 1rem;
		}

		.positive ul.list {
			counter-reset: labels;
		}

		.positive label {
			width: 100%;
			display: flex;
			cursor: pointer;
			justify-content: space-between;
		}

		.positive label span {
			--display: none;
			display: var(--display);
			width: 1rem;
			height: 1rem;
			border: 1px solid #727272;
			border-radius: 3px;
		}

		/* input Type id */

		summary.type {
			counter-reset: nps;
		}


		summary.type:before {
			content: var(--selection);
		}

		.type input[type=checkbox] {
			counter-increment: type;
			appearance: none;
			display: none;
		}

		.type input[type=radio] {
			counter-increment: type;
			appearance: none;
			display: none;
		}

		.type input[type=checkbox]:checked {
			display: inline;
			--display: block;
		}

		.type input[type=radio]:checked {
			display: inline;
			--display: block;
		}

		.type input[type=checkbox]:after {
			content: attr(title);
			display: inline;
			font-size: 1rem;
		}

		.type input[type=radio]:after {
			content: attr(title);
			display: inline;
			font-size: 1rem;
		}

		/* input breaking id */

		summary.breaking {
			counter-reset: nps;
		}


		summary.breaking:before {
			content: var(--selection);
		}

		.breaking input[type=checkbox] {
			counter-increment: breaking;
			appearance: none;
			display: none;
		}

		.breaking input[type=radio] {
			counter-increment: breaking;
			appearance: none;
			display: none;
		}

		.breaking input[type=checkbox]:checked {
			display: inline;
			--display: block;
		}

		.breaking input[type=radio]:checked {
			display: inline;
			--display: block;
		}

		.breaking input[type=checkbox]:after {
			content: attr(title);
			display: inline;
			font-size: 1rem;
		}

		.breaking input[type=radio]:after {
			content: attr(title);
			display: inline;
			font-size: 1rem;
		}

		/* input verify id */

		summary.verify {
			counter-reset: nps;
		}


		summary.verify:before {
			content: var(--selection);
		}

		.verify input[type=checkbox] {
			counter-increment: verify;
			appearance: none;
			display: none;
		}

		.verify input[type=radio] {
			counter-increment: verify;
			appearance: none;
			display: none;
		}

		.verify input[type=checkbox]:checked {
			display: inline;
			--display: block;
		}

		.verify input[type=radio]:checked {
			display: inline;
			--display: block;
		}

		.verify input[type=checkbox]:after {
			content: attr(title);
			display: inline;
			font-size: 1rem;
		}

		.verify input[type=radio]:after {
			content: attr(title);
			display: inline;
			font-size: 1rem;
		}

		/* input date and time */
		#send_time {
			width: -webkit-fill-available;
			height: 52px;
			font-size: 14px;
			padding: 0 16px;
			border: 1px solid var(--inactive-color-text);
			border-radius: 12px;
		}

		#send_date {
			width: -webkit-fill-available;
			height: 52px;
			font-size: 14px;
			padding: 0 16px;
			border: 1px solid var(--inactive-color-text);
			border-radius: 12px;
		}

		#start {
			width: -webkit-fill-available;
			height: 52px;
			font-size: 14px;
			padding: 0 16px;
			border: 1px solid var(--inactive-color-text);
			border-radius: 12px;
		}

		#push_start {
			width: -webkit-fill-available;
			height: 52px;
			font-size: 14px;
			padding: 0 16px;
			border: 1px solid var(--inactive-color-text);
			border-radius: 12px;
		}

		#end {
			width: -webkit-fill-available;
			height: 52px;
			font-size: 14px;
			padding: 0 16px;
			border: 1px solid var(--inactive-color-text);
			border-radius: 12px;
		}

		#push_body {
			padding-top: 16px;
			width: -webkit-fill-available;
			resize: none;
			height: 56px;
		}

		.bottom {
			padding: 20px 0;
			position: fixed;
			bottom: 0;
			left: -10px;
			width: 100%;
			background-color: #fff;
			box-shadow: 0 -.125rem .25rem rgba(0, 0, 0, .075) !important;
			z-index: 3;
		}

		.total span {
			font-weight: 800;
		}

		.pic input {
			display: none;
		}

		.pic label {
			cursor: pointer;
			width: -webkit-fill-available;
			height: 52px;
			font-size: 20px !important;
			padding: 0 16px;
			border: 1px solid var(--inactive-color-text);
			color: var(--inactive-color-text);
			border-radius: 12px;
			display: flex;
			align-items: center;
			justify-content: center;
		}
		.one_pic input {
			display: none;
		}

		.one_pic label {
			cursor: pointer;
			width: -webkit-fill-available;
			height: 52px;
			font-size: 20px !important;
			padding: 0 16px;
			border: 1px solid var(--inactive-color-text);
			color: var(--inactive-color-text);
			border-radius: 12px;
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.submit_button input {
			width: 328px;
			height: 52px;
			background: #44C9C5;
			border-radius: 6px;
			color: #fff;
			font-weight: 500;
			font-size: 16px;
			border: none;
		}

		#tooltip+.tooltip>.tooltip-inner {
			background-color: #95b3d7;
			color: #FFFFFF;
			border: 1px solid transparent;
			padding: 2px 3px;
			font-size: 14px;
		}

		/* Tooltip on top */
		#tooltip+.tooltip.top>.tooltip-arrow {
			border-top: 5px solid #9fbadb;
		}

		[data-tooltip] {
			position: relative;
			z-index: 0;
			cursor: pointer;
		}

		/* Hide the tooltip content by default */
		[data-tooltip]:before,
		[data-tooltip]:after {
			visibility: hidden;
			-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
			filter: progid: DXImageTransform.Microsoft.Alpha(Opacity=0);
			opacity: 0;
			pointer-events: none;
		}

		/* Position tooltip above the element */
		[data-tooltip]:before {
			position: absolute;
			bottom: 150%;
			left: 50%;
			margin-bottom: 5px;
			margin-left: -175px;
			padding: 7px;
			width: 350px;
			-webkit-border-radius: 3px;
			-moz-border-radius: 3px;
			border-radius: 3px;
			background-color: #000;
			background-color: hsla(0, 0%, 20%, 0.9);
			color: #fff;
			content: attr(data-tooltip);
			text-align: center;
			font-size: 14px;
			line-height: 1.2;
			z-index: 9;
		}

		/* Triangle hack to make tooltip look like a speech bubble */
		[data-tooltip]:after {
			position: absolute;
			bottom: 150%;
			left: 50%;
			margin-left: -5px;
			width: 0;
			border-top: 5px solid #000;
			border-top: 5px solid hsla(0, 0%, 20%, 0.9);
			border-right: 5px solid transparent;
			border-left: 5px solid transparent;
			content: " ";
			font-size: 0;
			line-height: 0;
		}

		/* Show tooltip content on hover */
		[data-tooltip]:hover:before,
		[data-tooltip]:hover:after {
			visibility: visible;
			-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
			filter: progid: DXImageTransform.Microsoft.Alpha(Opacity=100);
			opacity: 1;
		}

		.fixed_bottom {
			height: 300px;
		}


		.one-mailing .block_lable {
			display: flex;
			align-items: center;
		}

		.one-mailing .block_lable span {
			margin-bottom: -8px;
			margin-left: 8px;
		}
		#singl_submit{ 
			margin-top: 40px;
			float: right;
		}
	</style>

<?php include 'settings.php'; ?>
</head>

<body>
	<?php
	// URL страницы, которую открываем
	
	$url = 'https://hwrytlirwhrrkppcaepm.prime.ax/api/users/';
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		'Content-type: application/json',
		'Authorization: Bearer '.$token,
	));
	$res_role = curl_exec($ch);
	curl_close($ch);
	$all_users = json_decode($res_role);
	print_r("<script>var users=" . $res_role . "</script>");
	// echo '<pre>';
	// print_r($all_users);
	// echo '</pre>';
	// GET ROLES
	$role_id = [];
	foreach ($all_users as $key => $value) {
		$role_id[] = $value->role_id;
	}
	$roles = array_unique($role_id);

	// GET PODPISKA
	$podpiska = [];
	foreach ($all_users as $key => $value) {
		$podpiska[] = $value->user_sub_type;
	}
	$podpiska_info = array_unique($podpiska);
	// print_r($podpiska_info);

	// GET Country
	$country = [];
	foreach ($all_users as $key => $value) {
		$country[] = $value->country;
	}
	$country_info = array_unique($country);
	// print_r($country_info);

	// GET Region
	$region = [];
	foreach ($all_users as $key => $value) {
		$region[] = $value->region;
	}
	$region_info = array_unique($region);
	// print_r($region_info);

	// GET City
	$city = [];
	foreach ($all_users as $key => $value) {
		$city[] = $value->city;
	}
	$city_info = array_unique($city);
	// print_r($city_info);

	// GET NPS
	$nps = [];
	foreach ($all_users as $key => $value) {

		$nps[] = $value->nps_level;
	}
	$nps_info = array_unique($nps);
	// print_r($nps_info);

	// GET Positive
	$positive = [];
	foreach ($all_users as $key => $value) {

		if ($value->positiveness_id == null) {
			unset($value->positiveness_id);
		} else {
			$positive[] = $value->positiveness_id;
		}
	}
	$positive_info = array_unique($positive);
	// print_r($positive_info);

	// GET Positive
	$breaking = [];
	foreach ($all_users as $key => $value) {

		if ($value->breaking_status == null || $value->breaking_status == false) {
			$breaking[] = 'false';
		}
		if ($value->breaking_status == true) {
			$breaking[] = 'true';
		}
	}
	$breaking_info = array_unique($breaking);
	// print_r($breaking);

	// GET Positive
	$verify = [];
	foreach ($all_users as $key => $value) {

		if ($value->verified_newsmakers_only == null || $value->verified_newsmakers_only == false) {
			$verify[] = 'false';
		}
		if ($value->verified_newsmakers_only == true) {
			$verify[] = 'true';
		}
	}
	$verify_info = array_unique($verify);
	// print_r($verify_info);

	// GET DATA
	$first_date_user = [];
	foreach ($all_users as $key => $value) {
		$get_data = $value->email_verified_at;
		$first_date_user[] = substr($get_data, 0, 10);
	}
	$res_data = array_unique($first_date_user);
	function cmp($a, $b)
	{
		return $a <=> $b;
	}

	$a = $res_data;

	usort($a, "cmp");
	$old_date = [];
	foreach ($a as $key => $value) {
		$old_date[] = $value;
	}
	// print_r($old_date);
	$email = [];
	foreach ($all_users as $key => $value) {
		// if(in_array())
	}


	// GET All LANGUAGE
	$url = 'https://hwrytlirwhrrkppcaepm.prime.ax/api/language/all';
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		'Content-type: application/json',
		'Authorization: Bearer '.$token,	
	));
	$res_lang_iso = curl_exec($ch);
	curl_close($ch);
	$all_lang = json_decode($res_lang_iso);
	$lang_info = $all_lang->languages;
	print_r("<script>var lang=" . $res_lang_iso . "</script>");



	print_r($timezone = date_default_timezone_get('Asia/Almaty'));
	?>

	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-10 offset-1">
					<div class="block_1">
						<div class="col-12">
							<h4>
								Тип рассылки
							</h4>
						</div>
						<div class="row">
							<div class="col-3">
								<div class="d-flex radio_input_box">
									<input type="radio" id="all-mailing" name="selector" checked>

									<label for="all-mailing">
										<div class="check"></div>
										Общая рассылка
									</label>
								</div>
							</div>
							<div class="col-3">
								<div class="d-flex radio_input_box">
									<input type="radio" id="one-mailing" name="selector">

									<label for="one-mailing">
										<div class="check"></div>
										Точечная рассылка
									</label>
								</div>
							</div>
						</div>
					</div>
					<div class="block_2">
						<article class="all-mailing">

							<form action="users_hundler.php" method="POST" enctype="multipart/form-data">
								<div class="about_user_block">
									<h3>
										Данные о пользователях:
									</h3>
									<hr>
									<div class="block_lable">
										<h4>Подтверждение почтового ящика</h4>
										<span data-tooltip="Данный атрибут служит для отсеивания пользователей которые прошли подтверждения через почту! Выбрав диапазон дат вы отсеете пользователей по дате подтверждения с почтового ящика">
											<img src="img/vopros.svg" alt="">
										</span>
									</div>
									<div class="row">
										<div class="col-6">
											<div class="input-group">
												<input type="text" id="start" name="email-start" min="<?php echo $old_date[1]; ?>" placeholder="Дата с" onchange="datestart();" onfocus="(this.type='date')">
											</div>
										</div>
										<div class="col-6">
											<div class="input-group">
												<input type="text" id="end" name="email-end" min="2022-01-01" max="2030-01-01" placeholder="Дата по" onchange="dateend();" onfocus="(this.type='date')">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-4">
											<div class="block_lable">
												<h4>Роль в системе</h4>
											</div>

											<div class="form-group">
												<details class="custom-select">
													<summary class="role_id">
														<p>User role ID:</p>
														<?php foreach ($roles as $val) { ?>
															<input type="checkbox" name="role-<?php echo $val ?>" id="role-<?php echo $val ?>" title="<?php echo $val ?>" value="<?php echo $val ?>">
														<?php } ?>
													</summary>

													<ul class="list">
														<?php foreach ($roles as $val) { ?>
															<li>
																<label for="role-<?php echo $val ?>"><?php echo $val  ?></label>
															</li>
														<?php } ?>
													</ul>

												</details>
											</div>

										</div>
										<div class="col-4">
											<div class="block_lable">
												<h4>Язык</h4>
											</div>
											<div class="input-group">
												<details class="custom-select">
													<summary class="language">
														<p>Language:</p>
														<input type="checkbox" name="lang-1" id="lang-1" title="RU" value="1">
														<input type="checkbox" name="lang-2" id="lang-2" title="EN" value="2">
														<input type="checkbox" name="lang-7" id="lang-7" title="KZ" value="7">
													</summary>
													<ul class="list">
														<li>
															<label for="lang-1">RU</label>
														</li>
														<li>
															<label for="lang-2">EN</label>
														</li>
														<li>
															<label for="lang-7">KK</label>
														</li>
													</ul>
												</details>
											</div>
										</div>
										<div class="col-4">
											<div class="block_lable">
												<h4>Наличие подписки</h4>
											</div>
											<div class="input-group">
												<details class="custom-select">
													<summary class="podpiska">
														<p>Подписка:</p>
														<?php foreach ($podpiska_info as $val) { ?>
															<input type="checkbox" name="pod-<?php echo $val ?>" id="pod-<?php echo $val ?>" title="<?php if ($val === 'subscribed') {
																																						$val = 'Активна';
																																					} else if ($val === 'unsubscribed') {
																																						$val = 'Не активна';
																																					}
																																					echo $val ?>" value="<?php echo $val ?>">
														<?php } ?>
													</summary>
													<ul class="list">
														<?php foreach ($podpiska_info as $val) { ?>
															<li>
																<label for="pod-<?php echo $val ?>"><?php if ($val === 'subscribed') {
																										$val = 'Активна';
																									} else if ($val === 'unsubscribed') {
																										$val = 'Не активна';
																									}
																									echo $val ?></label>
															</li>
														<?php } ?>

													</ul>
												</details>
											</div>
										</div>
									</div>

									<div class="cut_info_title">
										<h3>
											Данные о локации
										</h3>
										<hr>
									</div>

									<div class="row">
										<div class="col-4">
											<div class="block_lable">
												<h4>Страна</h4>
											</div>
											<div class="input-group">

												<details class="custom-select">
													<summary class="country">
														<p>&nbsp;</p>
														<?php foreach ($country_info as $val) { ?>
															<input type="radio" name="country" id="country-<?php echo $val ?>" title="<?php echo $val ?>" value="<?php echo $val ?>">
														<?php } ?>

													</summary>
													<ul class="list">
														<?php foreach ($country_info as $val) { ?>
															<li>
																<label for="country-<?php echo $val ?>"><?php echo $val ?></label>
															</li>
														<?php } ?>

													</ul>
												</details>
											</div>
										</div>
										<div class="col-4">
											<div class="block_lable">
												<h4>Регион</h4>
											</div>
											<div class="input-group">
												<details class="custom-select">
													<summary class="region">
														<p>&nbsp;</p>
														<?php foreach ($region_info as $val) { ?>
															<input type="checkbox" name="region-<?php echo $val ?>" id="region-<?php echo $val ?>" title="<?php echo $val ?>" data-id="<?php echo $val ?>" value="<?php echo $val ?>">
														<?php } ?>
													</summary>
													<ul class="list">
														<?php foreach ($region_info as $val) { ?>
															<li>
																<label for="region-<?php echo $val ?>"><?php echo $val ?></label>
															</li>
														<?php } ?>

													</ul>
												</details>
											</div>
										</div>
										<div class="col-4">
											<div class="block_lable">
												<h4>Город</h4>
											</div>
											<div class="input-group">
												<details class="custom-select">
													<summary class="city">
														<p>&nbsp;</p>
														<?php foreach ($city_info as $val) { ?>
															<input type="checkbox" name="city-<?php echo $val ?>" id="city-<?php echo $val ?>" title="<?php echo $val ?>" value="<?php echo $val ?>">
														<?php } ?>
													</summary>
													<ul class="list">
														<?php foreach ($city_info as $val) { ?>
															<li>
																<label for="city-<?php echo $val ?>"><?php echo $val ?></label>
															</li>
														<?php } ?>
													</ul>
												</details>
											</div>
										</div>
									</div>

									<div class="cut_info_title">
										<h3>
											Данные о предпочтениях
										</h3>
										<hr>
									</div>

									<div class="row align-center">
										<div class="col-3">
											<div class="block_lable">
												<h4>NPS</h4>
											</div>
											<div class="input-group">
												<details class="custom-select">
													<summary class="nps">
														<p>&nbsp;</p>
														<?php foreach ($nps_info as $val) { ?>
															<input type="checkbox" name="nps-<?php echo $val ?>" id="nps-<?php echo $val ?>" title="<?php echo $val ?>" value="<?php echo $val ?>">
														<?php } ?>

													</summary>
													<ul class="list">
														<?php foreach ($nps_info as $val) {  ?>
															<li>
																<label for="nps-<?php echo $val ?>"><?php echo $val ?></label>
															</li>
														<?php } ?>
													</ul>
												</details>

											</div>
										</div>
										<div class="col-3">
											<div class="block_lable">
												<h4>positiveness_id</h4>
											</div>
											<div class="input-group">
												<details class="custom-select">
													<summary class="positive">
														<p>&nbsp;</p>
														<?php foreach ($positive_info as $val) {
															if ($val == '1') {
																$val_name = 'Негативные';
															} else if ($val == '2') {
																$val_name = 'Нейтральные';
															} ?>
															<input type="radio" name="positive" id="pos-<?php echo $val ?>" title="<?php echo $val_name ?>" value="<?php echo $val_name ?>">
														<?php } ?>


													</summary>
													<ul class="list">
														<?php foreach ($positive_info as $val) {
															if ($val == '1') {
																$val_name = 'Негативные';
															} else if ($val == '2') {
																$val_name = 'Нейтральные';
															} ?>
															<li>
																<label for="pos-<?php echo $val ?>"><?php echo $val_name ?></label>
															</li>
														<?php } ?>
													</ul>
												</details>

											</div>
										</div>
										<div class="col-3">
											<div class="block_lable">
												<h4>Breaking status</h4>
											</div>
											<div class="input-group">
												<details class="custom-select">
													<summary class="breaking">
														<p>&nbsp;</p>
														<?php foreach ($breaking_info as $val) { ?>
															<input type="checkbox" name="breaking-<?php echo $val ?>" id="breaking-<?php echo $val ?>" title="<?php echo $val ?>" value="<?php echo $val ?>">
														<?php } ?>

													</summary>
													<ul class="list">
														<?php foreach ($breaking_info as $val) { ?>
															<li>
																<label for="breaking-<?php echo $val ?>"><?php echo $val ?></label>
															</li>
														<?php } ?>

													</ul>
												</details>

											</div>
										</div>
										<div class="col-3">
											<div class="block_lable">
												<h4>Verify newsmaker status</h4>
											</div>
											<div class="input-group">
												<details class="custom-select">
													<summary class="verify">
														<p>&nbsp;</p>
														<?php foreach ($verify_info as $val) { ?>
															<input type="checkbox" name="ver-<?php echo $val ?>" id="ver-<?php echo $val ?>" title="<?php echo $val ?>" value="<?php echo $val ?>">
														<?php } ?>

													</summary>
													<ul class="list">
														<?php foreach ($verify_info as $val) { ?>
															<li>
																<label for="ver-<?php echo $val ?>"><?php echo $val ?></label>
															</li>
														<?php } ?>

													</ul>
												</details>

											</div>
										</div>
									</div>

									<div class="cut_info_title">
										<h3>
											Настройки пуш-уведомления
										</h3>
										<hr>
									</div>

									<div class="row">

										<div class="col-12">
											<div class="block_lable">
												<h4>Заголовок</h4>
											</div>
											<div class="input-group">
												<input type="text" class="form-control" id="push_title" name="push_title" min="5" max="1000" placeholder="Заголовок">
											</div>
										</div>
										<div class="col-12">
											<div class="block_lable">
												<h4>Описание</h4>
											</div>
											<div class="input-group">
												<textarea class="form-control" name="push_body" id="push_body" cols="20" rows="5" placeholder="Описание"></textarea>
											</div>
										</div>
										<div class="col-3">
											<div class="block_lable">
												<h4>Картинка</h4>
												<span data-tooltip="Действуют ограничение по загрузки картинки для PUSH рассылок! Для корректного отображения файла максимальный размер файла не должен привышать 2 МБ. и максимальное разрешение картинки 1024x1024">
													<img src="img/vopros.svg" alt="">
												</span>
											</div>
											<div>
												<div class="input-group pic">
													<label for="push_pic" class="form-control">+</label>
													<input type="file" id="push_pic" name="push_pic" accept=".jpg, .jpeg, .png" />
												</div>
											</div>
										</div>

										<div class="col-3">
											<div class="block_lable">
												<h4>Дата и время отправки</h4>
											</div>
											<div class="input-group">
												<input type="datetime-local" id="push_start" name="send_push_at">
											</div>
										</div>
										<div class="col-3">
											<div class="block_lable">
												<h4>Тип уведомления</h4>
											</div>
											<div class="input-group">
												<details class="custom-select">
													<summary class="type">
														<p>&nbsp;</p>
														<input type="radio" name="type" id="type1" title="Promo podcast" value="promo_podcast">
														<input type="radio" name="type" id="type2" title="Promo selection" value="promo_selection">
														<input type="radio" name="type" id="type3" title="Promo podcast item" value="promo_item">
														<input type="radio" name="type" id="type4" title="Promo selection voice" value="promo_voice">
														<input type="radio" name="type" id="url_link" title="URL link" value="url">
													</summary>
													<ul class="list">
														<li>
															<label for="type1">Promo podcast</label>
														</li>
														<li>
															<label for="type2">Promo selection</label>
														</li>
														<li>
															<label for="type3">Promo podcast item</label>
														</li>
														<li>
															<label for="type4">Promo selection voice</label>
														</li>
														<li>
															<label for="url_link">URL link</label>
														</li>
													</ul>
												</details>
											</div>
										</div>
										<div class="col-3">
											<div class="block_lables">
												<h4>Ссылка</h4>
												<div class="input-group">
													<input type="url" class="form-control" id="type_push">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="fixed_bottom"></div>
									<div class="bottom">
										<div class="container-fluid">

											<div class="col-10 offset-1">
												<div class="d-flex align-center just-between">
													<div class="total">
														<p>Получателей в базе:
														<input type="text" id="all_user_filter_input" style="display:none;" name="count_user" >
															<span id="all_user_filter">
																
																<?php
																foreach ($all_users as $user) {
																	print_r($user->role_id);
																}
																echo count($all_users);
																?>
															</span>
															<span style="display:none;" id="all_user"></span>
														</p>
													</div>
													<div class="submit_button">
														<input type="submit" value="Отправить">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</form>

						</article>
						<article class="one-mailing">

							<form action="single_push.php" method="POST" enctype="multipart/form-data">
								<div class="block_lable">
									<h4>Email</h4>
								</div>
								<div class="input-group">
									<input type="email" class="form-control" id="push_title" name="email"  placeholder="Введите email" required>
								</div>
								<div class="cut_info_title">
									<h3>
										Настройки пуш-уведомления
									</h3>
									<hr>
								</div>

								<div class="row">

									<div class="col-12">
										<div class="block_lable">
											<h4>Заголовок</h4>
										</div>
										<div class="input-group">
											<input type="text" class="form-control" id="push_title" name="push_title" min="5" max="1000" placeholder="Заголовок">
										</div>
									</div>
									<div class="col-12">
										<div class="block_lable">
											<h4>Описание</h4>
										</div>
										<div class="input-group">
											<textarea class="form-control" name="push_body" id="push_body" cols="20" rows="5" placeholder="Описание"></textarea>
										</div>
									</div>
									<div class="col-3">
										<div class="block_lable">
											<h4>Картинка</h4>
											<span data-tooltip="Действуют ограничение по загрузки картинки для PUSH рассылок! Для корректного отображения файла максимальный размер файла не должен привышать 2 МБ. и максимальное разрешение картинки 1024x1024">
												<img src="img/vopros.svg" alt="">
											</span>
										</div>
										<div>
											<div class="input-group one_pic">
												<label for="one_push_pic" class="form-control">+</label>
												<input type="file" id="one_push_pic" name="one_push_pic" accept=".jpg, .jpeg, .png" />
											</div>
										</div>
									</div>

									<div class="col-3">
										<div class="block_lable">
											<h4>Дата и время отправки</h4>
										</div>
										<div class="input-group">
											<input type="datetime-local" id="push_start" name="send_push_at">
										</div>
									</div>
									<div class="col-3">
										<div class="block_lable">
											<h4>Тип уведомления</h4>
										</div>
										<div class="input-group">
											<details class="custom-select">
												<summary class="type">
													<p>&nbsp;</p>
													<input type="radio" name="one_type" id="one_type1" title="Promo podcast" value="promo_podcast">
													<input type="radio" name="one_type" id="one_type2" title="Promo selection" value="promo_selection">
													<input type="radio" name="one_type" id="one_type3" title="Promo podcast item" value="promo_item">
													<input type="radio" name="one_type" id="one_type4" title="Promo selection voice" value="promo_voice">
													<input type="radio" name="one_type" id="one_url_link" title="URL link" value="url">
												</summary>
												<ul class="list">
													<li>
														<label for="one_type1">Promo podcast</label>
													</li>
													<li>
														<label for="one_type2">Promo selection</label>
													</li>
													<li>
														<label for="one_type3">Promo podcast item</label>
													</li>
													<li>
														<label for="one_type4">Promo selection voice</label>
													</li>
													<li>
														<label for="one_url_link">URL link</label>
													</li>
												</ul>
											</details>
										</div>
									</div>
									<div class="col-3">
										<div class="block_lables">
											<h4>Ссылка</h4>
											<div class="input-group">
												<input type="url" class="form-control" id="one_type_push">
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="submit_button">
										<input type="submit" id="singl_submit" value="Отправить">
									</div>
								</div>
							</form>
						</article>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/js/bootstrap.bundle.min.js" integrity="sha512-i9cEfJwUwViEPFKdC1enz4ZRGBj8YQo6QByFTF92YXHi7waCqyexvRD75S5NVTsSiTv7rKWqG9Y5eFxmRsOn0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.2/js/umd/util.js"></script>
	<script>
		document.getElementsByClassName('custom-select')[4].style.pointerEvents = 'none';
		document.getElementsByClassName('custom-select')[4].style.background = '#f5f5f5';
		document.getElementsByClassName('custom-select')[5].style.pointerEvents = 'none';
		document.getElementsByClassName('custom-select')[5].style.background = '#f5f5f5';

		var filters = [];
		document.onclick = function(e) {
			if (e.target.localName != 'summary') {
				document.getElementsByClassName('custom-select')[0].removeAttribute('open');
				document.getElementsByClassName('custom-select')[1].removeAttribute('open');
				document.getElementsByClassName('custom-select')[2].removeAttribute('open');
				document.getElementsByClassName('custom-select')[3].removeAttribute('open');
				document.getElementsByClassName('custom-select')[4].removeAttribute('open');
				document.getElementsByClassName('custom-select')[5].removeAttribute('open');
				document.getElementsByClassName('custom-select')[6].removeAttribute('open');
				document.getElementsByClassName('custom-select')[7].removeAttribute('open');
				document.getElementsByClassName('custom-select')[8].removeAttribute('open');
				document.getElementsByClassName('custom-select')[9].removeAttribute('open');
				document.getElementsByClassName('custom-select')[10].removeAttribute('open');
			}
		}

		var Datestart = new Set();

		function datestart() {
			Datestart.clear();
			Datestart.add(document.getElementById('start').value);
			console.log(Datestart);
			schet();
		}


		var Dateend = new Set();

		function dateend() {
			Dateend.clear();
			Dateend.add(document.getElementById('end').value);
			console.log(Dateend);
			schet();
		}


		$('[name=selector]').each(function(i, d) {
			var p = $(this).prop('checked');
			console.log(p);
			if (p) {
				$('article').eq(i)
					.addClass('on');
			}
		});

		$('[name=selector]').on('change', function() {
			var p = $(this).prop('checked');

			// $(type).index(this) == nth-of-type
			var i = $('[name=selector]').index(this);

			$('article').removeClass('on');
			$('article').eq(i).addClass('on');
		});

		$(function() {
			$('[data-toggle="tooltip"]').tooltip();
		})


		var RoleID = new Set();
		var LangID = new Set();
		var Podpiska = new Set();
		var Country = new Set();
		var Region = new Set();
		var City = new Set();
		var NPS = new Set();
		var Positiv = new Set();
		var Breaking = new Set();
		var Verify = new Set();

		$("input").click(function(e) {
			if (e.target.id[0] + e.target.id[1] == 'ro') { //ROLE-ID
				if (RoleID.has(e.target.getAttribute('title')) == true) {
					RoleID.delete(e.target.getAttribute('title'));
				} else {
					RoleID.add(e.target.getAttribute('title'));
				};
				console.log(RoleID);
				document.getElementsByClassName('custom-select')[0].removeAttribute('open');
				schet();
			} else if (e.target.id[0] == 'l') { //LANGUAGE
				console.log(e.target.getAttribute('title'));
				var langid = '';
				for (var io = 0; io < lang['languages'].length; io++) {
					if (lang['languages'][io]['iso'] == e.target.getAttribute('title').toLowerCase()) {
						langid = lang['languages'][io]['id'];
					}
				}

				if (LangID.has(langid) == true) {
					LangID.delete(langid);
				} else {
					LangID.add(langid);
				};

				console.log(LangID);
				document.getElementsByClassName('custom-select')[1].removeAttribute('open');
				schet();
			} else if (e.target.id[0] + e.target.id[1] + e.target.id[2] == 'pod') { //PODPISKA
				var perevod_podpiski = '';
				if (e.target.getAttribute('title') == 'Активна') { //Перевод из строки в нужный параметр
					perevod_podpiski = 'subscribed';
				} else {
					perevod_podpiski = 'unsubscribed';
				}

				if (Podpiska.has(perevod_podpiski) == true) {
					Podpiska.delete(perevod_podpiski);
				} else {
					Podpiska.add(perevod_podpiski);
				};

				console.log(Podpiska);
				document.getElementsByClassName('custom-select')[2].removeAttribute('open');
				schet();
			} else if (e.target.id[0] + e.target.id[1] == 'co') {
				if (Country.has(e.target.getAttribute('title')) == true) {
					Country.delete(e.target.getAttribute('title'));

					document.getElementsByClassName('custom-select')[4].style.pointerEvents = 'none';
					document.getElementsByClassName('custom-select')[4].style.background = '#f5f5f5';
					document.getElementsByClassName('custom-select')[5].style.pointerEvents = 'none';
					document.getElementsByClassName('custom-select')[5].style.background = '#f5f5f5';
					document.getElementById('country-KZ').setAttribute('title', '');
					document.getElementById('country-KZ').setAttribute('title', '');
					document.getElementById('country-KZ').setAttribute('title', '');


					if (document.getElementById('region-Astana').checked == true) {
						document.getElementById('region-Astana').click();
					}

					if (document.getElementById('city-Astana').checked == true) {
						document.getElementById('city-Astana').click();
					}
				} else {
					Country.add(e.target.getAttribute('value'));

					document.getElementsByClassName('custom-select')[4].style.pointerEvents = 'all';
					document.getElementsByClassName('custom-select')[4].style.background = 'none';
					document.getElementById('country-KZ').setAttribute('title', e.target.getAttribute('value'));
				};

				console.log(Country);
				schet();
			} else if (e.target.id[0] + e.target.id[1] == 're') {
				if (Region.has(e.target.getAttribute('data-id')) == true) {
					Region.delete(e.target.getAttribute('data-id'));
					document.getElementsByClassName('custom-select')[5].style.pointerEvents = 'none';
					document.getElementsByClassName('custom-select')[5].style.background = '#f5f5f5';
				} else {
					Region.add(e.target.getAttribute('data-id'));
					document.getElementsByClassName('custom-select')[5].style.pointerEvents = 'all';
					document.getElementsByClassName('custom-select')[5].style.background = 'none';
				};

				if (document.getElementById('city-Astana').checked == true) {
					document.getElementById('city-Astana').click();
				}
				console.log(Region);
				document.getElementsByClassName('custom-select')[4].removeAttribute('open');
				schet();
			} else if (e.target.id[0] + e.target.id[1] == 'ci') {
				if (City.has(e.target.getAttribute('title')) == true) {
					City.delete(e.target.getAttribute('title'));
				} else {
					City.add(e.target.getAttribute('title'));
				};

				console.log(City);
				document.getElementsByClassName('custom-select')[5].removeAttribute('open');
				schet();
			} else if (e.target.id[0] + e.target.id[1] + e.target.id[2] == 'pos') {
				var positiv = '';
				if (e.target.getAttribute('value') == 'Негативные') { //Перевод из строки в нужный параметр
					positiv = '1';
				} else {
					positiv = '2';
				}
				document.getElementById('pos-2').setAttribute('title', e.target.getAttribute('value'));

				if (Positiv.has(positiv) == true) {
					Positiv.delete(positiv);
				} else {
					Positiv.clear();
					Positiv.add(positiv);
				};

				console.log(Positiv);
				document.getElementsByClassName('custom-select')[7].removeAttribute('open');
				schet();
			} else if (e.target.id[0] + e.target.id[1] == 'np') {
				if (NPS.has(e.target.getAttribute('title')) == true) {
					NPS.delete(e.target.getAttribute('title'));
				} else {
					NPS.add(e.target.getAttribute('title'));
				};

				console.log(NPS);
				document.getElementsByClassName('custom-select')[6].removeAttribute('open');
				schet();
			} else if (e.target.id[0] + e.target.id[1] + e.target.id[2] == 'bre') {
				if (Breaking.has(JSON.parse(e.target.getAttribute('title'))) == true) {
					Breaking.delete(JSON.parse(e.target.getAttribute('title')));
				} else {
					Breaking.add(JSON.parse(e.target.getAttribute('title')));
				};
				console.log(Breaking);
				document.getElementsByClassName('custom-select')[6].removeAttribute('open');
				schet();


				/*if(e.target.checked==true){
					Breaking.delete(false);
					Breaking.add(true);
				}else{
					Breaking.delete(true);
                    Breaking.delete(false);
				}
				
                console.log(Breaking);
				document.getElementsByClassName('custom-select')[6].removeAttribute('open');
				schet();*/
			} else if (e.target.id[0] + e.target.id[1] + e.target.id[2] == 'ver') {
				/*if(e.target.checked==true){
					Verify.delete(false);
					Verify.add(true);
				}else{
					Verify.delete(true);
                    Verify.delete(false);
				}
				
                console.log(Verify);
				document.getElementsByClassName('custom-select')[6].removeAttribute('open');
				schet();*/


				if (Verify.has(JSON.parse(e.target.getAttribute('title'))) == true) {
					Verify.delete(JSON.parse(e.target.getAttribute('title')));
				} else {
					Verify.add(JSON.parse(e.target.getAttribute('title')));
				};
				console.log(Verify);
				document.getElementsByClassName('custom-select')[6].removeAttribute('open');
				schet();
			}

		});



		var MassivContainer = [];
		var MassivVremyanka = [];
		var massiv = 0;

		function schet() {
			massiv = 0;
			MassivContainer = [];
			MassivVremyanka = [];

			if (RoleID.size != 0) {
				massiv = 1;
				for (var q = 0; q < users.length; q++) {
					for (var RoleValue of RoleID) { //Фильтруем по выбранной роли/ролям
						if (users[q]['role_id'] == RoleValue) {
							MassivContainer.push(users[q]);
						}
					}
				}
			}



			if (LangID.size != 0) {
				massiv = 1;
				if (MassivContainer.length != 0) {
					for (var q1 = 0; q1 < MassivContainer.length; q1++) {
						for (var LangValue of LangID) {
							if (MassivContainer[q1]['language_id'] == LangValue) {
								MassivVremyanka.push(MassivContainer[q1]);
							}
						}
					}
					MassivContainer = MassivVremyanka;
					MassivVremyanka = [];
				} else {
					for (var q1 = 0; q1 < users.length; q1++) {
						for (var LangValue of LangID) {
							if (users[q1]['language_id'] == LangValue) {
								MassivContainer.push(users[q1]);
							}
						}
					}
				}
			}




			if (Podpiska.size != 0) {
				massiv = 1;
				if (MassivContainer.length != 0) {
					for (var q2 = 0; q2 < MassivContainer.length; q2++) {
						for (var PodpiskaValue of Podpiska) {
							if (MassivContainer[q2]['user_sub_type'] == PodpiskaValue) {
								MassivVremyanka.push(MassivContainer[q2]);
							}
						}
					}
					MassivContainer = MassivVremyanka;
					MassivVremyanka = [];
				} else { //Если до этого ничего не выбиралось,и это первое поле
					for (var q2 = 0; q2 < users.length; q2++) {
						for (var PodpiskaValue of Podpiska) {
							if (users[q2]['user_sub_type'] == PodpiskaValue) {
								MassivContainer.push(users[q2]);
							}
						}
					}
				}
			}




			if (Country.size != 0) {
				massiv = 1;
				if (MassivContainer.length != 0) {
					for (var q3 = 0; q3 < MassivContainer.length; q3++) {
						for (var CountryValue of Country) {
							if (MassivContainer[q3]['country'] == CountryValue) {
								MassivVremyanka.push(MassivContainer[q3]);
							}
						}
					}
					MassivContainer = MassivVremyanka;
					MassivVremyanka = [];
				} else { //Если до этого ничего не выбиралось,и это первое поле
					for (var q3 = 0; q3 < users.length; q3++) {
						for (var CountryValue of Country) {
							if (users[q3]['country'] == CountryValue) {
								MassivContainer.push(users[q3]);
							}
						}
					}
				}
			}



			if (Region.size != 0) {
				massiv = 1;
				if (MassivContainer.length != 0) {
					for (var q4 = 0; q4 < MassivContainer.length; q4++) {
						for (var RegionValue of Region) {
							if (MassivContainer[q4]['region'] == RegionValue) {
								MassivVremyanka.push(MassivContainer[q4]);
							}
						}
					}
					MassivContainer = MassivVremyanka;
					MassivVremyanka = [];
				} else { //Если до этого ничего не выбиралось,и это первое поле
					for (var q4 = 0; q4 < users.length; q4++) {
						for (var RegionValue of Region) {
							if (users[q4]['region'] == RegionValue) {
								MassivContainer.push(users[q4]);
							}
						}
					}
				}
			}


			if (City.size != 0) {
				massiv = 1;
				if (MassivContainer.length != 0) {
					for (var q5 = 0; q5 < MassivContainer.length; q5++) {
						for (var CityValue of City) {
							if (MassivContainer[q5]['city'] == CityValue) {
								MassivVremyanka.push(MassivContainer[q5]);
							}
						}
					}
					MassivContainer = MassivVremyanka;
					MassivVremyanka = [];
				} else { //Если до этого ничего не выбиралось,и это первое поле
					for (var q5 = 0; q5 < users.length; q5++) {
						for (var CityValue of City) {
							if (users[q5]['city'] == CityValue) {
								MassivContainer.push(users[q5]);
							}
						}
					}
				}
			}


			if (NPS.size != 0) {
				massiv = 1;
				if (MassivContainer.length != 0) {
					for (var q6 = 0; q6 < MassivContainer.length; q6++) {
						for (var NPSValue of NPS) {
							if (MassivContainer[q6]['nps_level'] == NPSValue) {
								MassivVremyanka.push(MassivContainer[q6]);
							}
						}
					}
					MassivContainer = MassivVremyanka;
					MassivVremyanka = [];
				} else { //Если до этого ничего не выбиралось,и это первое поле
					for (var q6 = 0; q6 < users.length; q6++) {
						for (var NPSValue of NPS) {
							if (users[q6]['nps_level'] == NPSValue) {
								MassivContainer.push(users[q6]);
							}
						}
					}
				}
			}




			if (Positiv.size != 0) {
				massiv = 1;
				if (MassivContainer.length != 0) {
					for (var q7 = 0; q7 < MassivContainer.length; q7++) {
						for (var PositivValue of Positiv) {
							if (MassivContainer[q7]['positiveness_id'] == PositivValue) {
								MassivVremyanka.push(MassivContainer[q7]);
							}
						}
					}
					MassivContainer = MassivVremyanka;
					MassivVremyanka = [];
				} else { //Если до этого ничего не выбиралось,и это первое поле
					for (var q7 = 0; q7 < users.length; q7++) {
						for (var PositivValue of Positiv) {
							if (users[q7]['positiveness_id'] == PositivValue) {
								MassivContainer.push(users[q7]);
							}
						}
					}
				}
			}



			/*if(Breaking.size != 0 ){
			massiv=1;
            if(MassivContainer.length !=0){
                for(var q8=0;q8<MassivContainer.length;q8++){
					for (var BreakingValue of Breaking){
						if(BreakingValue==true){
                            if(MassivContainer[q8]['breaking_status']==true){
                                MassivVremyanka.push(MassivContainer[q8]);
				            }
						}else{
							Breaking.delete(false);
							Breaking.delete(true);
						}
					}
				}
                MassivContainer=MassivVremyanka;
				MassivVremyanka=[];
		    }else{//Если до этого ничего не выбиралось,и это первое поле
				for(var q8=0;q8<users.length;q8++){
					for (var BreakingValue of Breaking){
						if(BreakingValue==true){
							if(users[q8]['breaking_status']==true){
                                MassivContainer.push(users[q8]);
				            } 
						}
					}
				}
		    }
		}*/
			if (Breaking.size != 0) {
				massiv = 1;
				if (MassivContainer.length != 0) {
					for (var q8 = 0; q8 < MassivContainer.length; q8++) {
						for (var BreakingValue of Breaking) {
							if (MassivContainer[q8]['breaking_status'] == BreakingValue) {
								MassivVremyanka.push(MassivContainer[q8]);
							}
						}
					}
					MassivContainer = MassivVremyanka;
					MassivVremyanka = [];
				} else {
					for (var q8 = 0; q8 < users.length; q8++) {
						for (var BreakingValue of Breaking) {
							if (users[q8]['breaking_status'] == BreakingValue) {
								MassivContainer.push(users[q8]);
							}
						}
					}
				}
			}




			/*if(Verify.size != 0 ){
			massiv=1;
            if(MassivContainer.length !=0){
                for(var q8=0;q8<MassivContainer.length;q8++){
					for (var VerifyValue of Verify){
						if(VerifyValue==true){
                            if(MassivContainer[q8]['verified_newsmakers_only']==true){
                                MassivVremyanka.push(MassivContainer[q8]);
				            }
						}else{
							Verify.delete(false);
							Verify.delete(true);
						}
					}
				}
                MassivContainer=MassivVremyanka;
				MassivVremyanka=[];
		    }else{//Если до этого ничего не выбиралось,и это первое поле
				for(var q8=0;q8<users.length;q8++){
					for (var VerifyValue of Verify){
						if(VerifyValue==true){
							if(users[q8]['verified_newsmakers_only']==true){
                                MassivContainer.push(users[q8]);
				            } 
						}
					}
				}
		    }
		}*/
			if (Verify.size != 0) {
				massiv = 1;
				if (MassivContainer.length != 0) {
					for (var q8 = 0; q8 < MassivContainer.length; q8++) {
						for (var VerifyValue of Verify) {
							if (MassivContainer[q8]['verified_newsmakers_only'] == VerifyValue) {
								MassivVremyanka.push(MassivContainer[q8]);
							}
						}
					}
					MassivContainer = MassivVremyanka;
					MassivVremyanka = [];
				} else {
					for (var q8 = 0; q8 < users.length; q8++) {
						for (var VerifyValue of Verify) {
							if (users[q8]['verified_newsmakers_only'] == VerifyValue) {
								MassivContainer.push(users[q8]);
							}
						}
					}
				}
			}



			if (Datestart.size != 0) {
				massiv = 1;
				if (MassivContainer.length != 0) {
					for (var q8 = 0; q8 < MassivContainer.length; q8++) {
						for (var DatestartValue of Datestart) {
							if (MassivContainer[q8]['email_verified_at'] != null) {
								if (parseInt(DatestartValue.substring(0, 4)) <= parseInt(MassivContainer[q8]['email_verified_at'].substring(0, 4))) { //Фильтрация года
									if (parseInt(DatestartValue.substring(0, 4)) < parseInt(MassivContainer[q8]['email_verified_at'].substring(0, 4))) { //Если год меньше текущего
										MassivVremyanka.push(users[q8]);
									} else if (parseInt(DatestartValue.substring(0, 4)) == parseInt(MassivContainer[q8]['email_verified_at'].substring(0, 4))) { //Если год равен текущему
										if (parseInt(DatestartValue.substring(5, 7)) <= parseInt(MassivContainer[q8]['email_verified_at'].substring(5, 7))) { //Фильтрация месяца
											if (parseInt(DatestartValue.substring(5, 7)) < parseInt(MassivContainer[q8]['email_verified_at'].substring(5, 7))) { //Если месяц меньше текущего
												MassivVremyanka.push(MassivContainer[q8]);
											} else if (parseInt(DatestartValue.substring(5, 7)) == parseInt(MassivContainer[q8]['email_verified_at'].substring(5, 7))) { //Если месяц равен текущему
												if (parseInt(DatestartValue.substring(8, 10)) <= parseInt(MassivContainer[q8]['email_verified_at'].substring(8, 10))) { //Фильтрация даты
													MassivVremyanka.push(MassivContainer[q8]);
												}
											}
										}
									}
								}

							}
						}
					}
					MassivContainer = MassivVremyanka;
					MassivVremyanka = [];
				} else {
					for (var q8 = 0; q8 < users.length; q8++) {
						for (var DatestartValue of Datestart) {
							if (users[q8]['email_verified_at'] != null) {
								if (parseInt(DatestartValue.substring(0, 4)) <= parseInt(users[q8]['email_verified_at'].substring(0, 4))) { //Фильтрация года
									if (parseInt(DatestartValue.substring(0, 4)) < parseInt(users[q8]['email_verified_at'].substring(0, 4))) { //Если год меньше текущего
										MassivContainer.push(users[q8]);
									} else if (parseInt(DatestartValue.substring(0, 4)) == parseInt(users[q8]['email_verified_at'].substring(0, 4))) { //Если год равен текущему
										if (parseInt(DatestartValue.substring(5, 7)) <= parseInt(users[q8]['email_verified_at'].substring(5, 7))) { //Фильтрация месяца
											if (parseInt(DatestartValue.substring(5, 7)) < parseInt(users[q8]['email_verified_at'].substring(5, 7))) { //Если месяц меньше текущего
												MassivContainer.push(users[q8]);
											} else if (parseInt(DatestartValue.substring(5, 7)) == parseInt(users[q8]['email_verified_at'].substring(5, 7))) { //Если месяц равен текущему
												if (parseInt(DatestartValue.substring(8, 10)) <= parseInt(users[q8]['email_verified_at'].substring(8, 10))) { //Фильтрация даты
													MassivContainer.push(users[q8]);
												}
											}
										}
									}
								}
							}
						}
					}
				}
			}




			if (Dateend.size != 0) {
				massiv = 1;
				if (MassivContainer.length != 0) {
					for (var q8 = 0; q8 < MassivContainer.length; q8++) {
						for (var DateendValue of Dateend) {
							if (MassivContainer[q8]['email_verified_at'] != null) {
								if (parseInt(DateendValue.substring(0, 4)) >= parseInt(MassivContainer[q8]['email_verified_at'].substring(0, 4))) { //Фильтрация года
									if (parseInt(DateendValue.substring(0, 4)) > parseInt(MassivContainer[q8]['email_verified_at'].substring(0, 4))) { //Если год меньше текущего
										MassivVremyanka.push(users[q8]);
									} else if (parseInt(DateendValue.substring(0, 4)) == parseInt(MassivContainer[q8]['email_verified_at'].substring(0, 4))) { //Если год равен текущему
										if (parseInt(DateendValue.substring(5, 7)) >= parseInt(MassivContainer[q8]['email_verified_at'].substring(5, 7))) { //Фильтрация месяца
											if (parseInt(DateendValue.substring(5, 7)) > parseInt(MassivContainer[q8]['email_verified_at'].substring(5, 7))) { //Если месяц меньше текущего
												MassivVremyanka.push(MassivContainer[q8]);
											} else if (parseInt(DateendValue.substring(5, 7)) == parseInt(MassivContainer[q8]['email_verified_at'].substring(5, 7))) { //Если месяц равен текущему
												if (parseInt(DateendValue.substring(8, 10)) >= parseInt(MassivContainer[q8]['email_verified_at'].substring(8, 10))) { //Фильтрация даты
													MassivVremyanka.push(MassivContainer[q8]);
												}
											}
										}
									}
								}

							}
						}
					}
					MassivContainer = MassivVremyanka;
					MassivVremyanka = [];
				} else {
					for (var q8 = 0; q8 < users.length; q8++) {
						for (var DateendValue of Dateend) {
							if (users[q8]['email_verified_at'] != null) {
								if (parseInt(DateendValue.substring(0, 4)) >= parseInt(users[q8]['email_verified_at'].substring(0, 4))) { //Фильтрация года
									if (parseInt(DateendValue.substring(0, 4)) > parseInt(users[q8]['email_verified_at'].substring(0, 4))) { //Если год меньше текущего
										MassivContainer.push(users[q8]);
									} else if (parseInt(DateendValue.substring(0, 4)) == parseInt(users[q8]['email_verified_at'].substring(0, 4))) { //Если год равен текущему
										if (parseInt(DateendValue.substring(5, 7)) >= parseInt(users[q8]['email_verified_at'].substring(5, 7))) { //Фильтрация месяца
											if (parseInt(DateendValue.substring(5, 7)) > parseInt(users[q8]['email_verified_at'].substring(5, 7))) { //Если месяц меньше текущего
												MassivContainer.push(users[q8]);
											} else if (parseInt(DateendValue.substring(5, 7)) == parseInt(users[q8]['email_verified_at'].substring(5, 7))) { //Если месяц равен текущему
												if (parseInt(DateendValue.substring(8, 10)) >= parseInt(users[q8]['email_verified_at'].substring(8, 10))) { //Фильтрация даты
													MassivContainer.push(users[q8]);
												}
											}
										}
									}
								}
							}
						}
					}
				}
			}


			for (var ko = 0; ko < MassivContainer.length; ko++) {
				if (MassivContainer[ko]['fcm_token'] == null) {
					//console.log(MassivContainer[ko
				} else {
					MassivVremyanka.push(MassivContainer[ko]);
				}
			}

			MassivContainer = MassivVremyanka;
			MassivVremyanka = [];






			if (massiv == 0) { //Ничего не выбрано
				var quantiny1 = 0;
				for (var i = 0; i < users.length; i++) {
					if (users[i]['fcm_token'] == null) {
						//console.log(MassivContainer[ko]);
					} else {
						MassivVremyanka.push(users[i]);
					}
					quantiny1++;
				}
				MassivContainer = MassivVremyanka;
				MassivVremyanka = [];
				document.getElementById('all_user_filter').innerHTML = MassivContainer.length;
				document.getElementById('all_user_filter_input').setAttribute('value', MassivContainer.length);
			} else {
				document.getElementById('all_user_filter').innerHTML = MassivContainer.length;
				document.getElementById('all_user_filter_input').setAttribute('value', MassivContainer.length);
			}
			console.log(MassivContainer);

		}


		$('summary').click();
	</script>

	<script>
		console.log(users);
		console.log(lang);


		//Вывод колличества юзеров 
		var quantiny = 0;
		for (var i = 0; i < users.length; i++) {
			if (users[i]['fcm_token'] == null) {
				//console.log(MassivContainer[ko]);
			} else {
				MassivVremyanka.push(users[i]);
			}

			quantiny++;
		}

		MassivContainer = MassivVremyanka;
		MassivVremyanka = [];
		document.getElementById('all_user_filter').innerHTML = MassivContainer.length;
		document.getElementById('all_user_filter_input').setAttribute('value', MassivContainer.length);
		document.getElementById('all_user').innerHTML = quantiny;
		console.log(MassivContainer);

		document.getElementsByClassName('custom-select')[0].removeAttribute('open');
		document.getElementsByClassName('custom-select')[1].removeAttribute('open');
		document.getElementsByClassName('custom-select')[2].removeAttribute('open');
		document.getElementsByClassName('custom-select')[3].removeAttribute('open');
		document.getElementsByClassName('custom-select')[4].removeAttribute('open');
		document.getElementsByClassName('custom-select')[5].removeAttribute('open');
		document.getElementsByClassName('custom-select')[6].removeAttribute('open');
		document.getElementsByClassName('custom-select')[7].removeAttribute('open');
		document.getElementsByClassName('custom-select')[8].removeAttribute('open');
		document.getElementsByClassName('custom-select')[9].removeAttribute('open');
		document.getElementsByClassName('custom-select')[10].removeAttribute('open');
		document.getElementsByClassName('custom-select')[11].removeAttribute('open');


		document.getElementById('push_pic').onchange = function() {
			document.getElementsByClassName('form-control')[2].innerHTML = this.files[0].name;
		}
		document.getElementById('one_push_pic').onchange = function() {
			document.getElementsByClassName('form-control')[2].innerHTML = this.files[0].name;
		}
		$(document).ready(function() {
			$('#start').on('change input', function() {
				var datearray = $(this).val().split("-");
				var d = parseInt(datearray[2]) + 1;
				var day = ('0' + d).slice(-2);
				var month = ('0' + parseInt(datearray[1])).slice(-2);
				var year = datearray[0];
				// Chek Leap Year
				var leapYear = ((parseInt(year) + 1) % 100 === 0) ? ((parseInt(year) + 1) % 400 === 0) : ((parseInt(year) + 1) % 4 === 0);
				//Without Leap Year Feb(28 days)
				if (day == "00" && month == "03" && leapYear != true) {
					day = "28";
					month = "02";
				}
				//With Leap Year Feb(29 days)
				else if (day == "00" && month == "03" && leapYear == true) {
					day = "29";
					month = "02";
				}
				//For 1st Day + 1st Month to set same year last month
				else if (day == "00" && month == "01") {
					day = "31";
					month = "12";
					year = (parseInt(year) - 1)
				}
				// For 1st day selection in Feb
				else if (day == "00" && month == "02") {
					day = "31";
					month = "01";
				}
				// For 1st day selection in April
				else if (day == "00" && month == "04") {
					day = "31";
					month = "03";
				}
				// For 1st day selection in May
				else if (day == "00" && month == "05") {
					day = "30";
					month = "04";
				}
				// For 1st day selection in June
				else if (day == "00" && month == "06") {
					day = "31";
					month = "05";
				}
				// For 1st day selection in July
				else if (day == "00" && month == "07") {
					day = "30";
					month = "06";
				}
				// For 1st day selection in Aug
				else if (day == "00" && month == "08") {
					day = "31";
					month = "07";
				}
				// For 1st day selection in Sep
				else if (day == "00" && month == "09") {
					day = "31";
					month = "08";
				}
				// For 1st day selection in Oct
				else if (day == "00" && month == "10") {
					day = "30";
					month = "09";
				}
				// For 1st day selection in Nov
				else if (day == "00" && month == "11") {
					day = "31";
					month = "10";
				}
				// For 1st day selection in Dec
				else if (day == "00" && month == "12") {
					day = "30";
					month = "11";
				}
				var valueDate = day + "." + month + "." + parseInt(year);
				var minDate = parseInt(year) + "-" + month + "-" + day;
				$('#end').val(minDate);
				$('#end').attr('value', valueDate);
				$('#end').attr('min', minDate);
				$('#end').attr('placeholder', valueDate);
			});
		});
		$(document).ready(function() {

			$("#type1").on('change input', function() {
				$('#type_push').attr('type', 'text');
				$('#type_push').attr('placeholder', 'Введите id');
				$('#type_push').attr('name', 'promo');
				$('#type_push').removeAttr('pattern');
				$('#type_push').removeAttr('size', '30');
				$('#type_push').removeAttr('required');
			});
			$("#type2").on('change input', function() {
				$('#type_push').attr('type', 'text');
				$('#type_push').attr('placeholder', 'Введите id');
				$('#type_push').attr('name', 'promo');
				$('#type_push').removeAttr('pattern');
				$('#type_push').removeAttr('size');
				$('#type_push').removeAttr('required');
			});
			$("#type3").on('change input', function() {
				$('#type_push').attr('type', 'text');
				$('#type_push').attr('placeholder', 'Введите id');
				$('#type_push').attr('name', 'promo');
				$('#type_push').removeAttr('pattern');
				$('#type_push').removeAttr('size');
				$('#type_push').removeAttr('required');
			});
			$("#type4").on('change input', function() {
				$('#type_push').attr('type', 'text');
				$('#type_push').attr('placeholder', 'Введите id');
				$('#type_push').attr('name', 'promo');
				$('#type_push').removeAttr('pattern');
				$('#type_push').removeAttr('size');
				$('#type_push').removeAttr('required');
			});

			$("#url_link").on('change input', function() {
				$('#type_push').attr('type', 'url');
				$('#type_push').attr('placeholder', 'https://example.com');
				$('#type_push').attr('name', 'url');
				$('#type_push').attr('pattern', 'https://.*');
				$('#type_push').attr('size', '30');
				$('#type_push').attr('required');
			});


			$("#singl_submit").on('click', function() {
				
			});

			$("#one_type1").on('change input', function() {
				$('#one_type_push').attr('type', 'text');
				$('#one_type_push').attr('placeholder', 'Введите id');
				$('#one_type_push').attr('name', 'promo');
				$('#one_type_push').removeAttr('pattern');
				$('#one_type_push').removeAttr('size');
				$('#one_type_push').removeAttr('required');
			});
			$("#one_type2").on('change input', function() {
				$('#one_type_push').attr('type', 'text');
				$('#one_type_push').attr('placeholder', 'Введите id');
				$('#one_type_push').attr('name', 'promo');
				$('#one_type_push').removeAttr('pattern');
				$('#one_type_push').removeAttr('size');
				$('#one_type_push').removeAttr('required');
			});
			$("#one_type3").on('change input', function() {
				$('#one_type_push').attr('type', 'text');
				$('#one_type_push').attr('placeholder', 'Введите id');
				$('#one_type_push').attr('name', 'promo');
				$('#one_type_push').removeAttr('pattern');
				$('#one_type_push').removeAttr('size');
				$('#one_type_push').removeAttr('required');
			});
			$("#one_type4").on('change input', function() {
				$('#one_type_push').attr('type', 'text');
				$('#one_type_push').attr('placeholder', 'Введите id');
				$('#one_type_push').attr('name', 'promo');
				$('#one_type_push').removeAttr('pattern');
				$('#one_type_push').removeAttr('size');
				$('#one_type_push').removeAttr('required');
			});

			$("#one_url_link").on('change input', function() {
				$('#one_type_push').attr('type', 'url');
				$('#one_type_push').attr('placeholder', 'https://example.com');
				$('#one_type_push').attr('name', 'url');
				$('#one_type_push').attr('pattern', 'https://.*');
				$('#one_type_push').attr('size', '30');
				$('#one_type_push').attr('required');
			});

		});


		$(document).ready(function() {
			var current_day = new Date().toLocaleString("ru-RU", {
				timeZone: "Asia/Almaty"
			});
			var date = new Date().toLocaleString("ru-RU", {
				timeZone: "Asia/Almaty"
			}).slice(0, 10);
			var time = new Date().toLocaleString("ru-RU", {
				timeZone: "Asia/Almaty"
			}).substring(12);
			var cuted_time = time.slice(0, -3);
			// alert(date+'T'+cuted_time);
			$('input[type=datetime-local]').attr({
				"min": new Date().toJSON().slice(0, -8)
			});
		});
		
	</script>




</body>

</html>