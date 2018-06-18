<?php 
/**
* @filename: response.php
* @Author: Emmet Boylan (emmet.boylan@webelevate.ie)
* @project: WE6.0_WPD_A1
* @file description: A simple php controller file. Used to store data from the web form, until the resultPage can be
*     instantiated using this data.
*/
//include resultPage class
include_once "resultPage.class.php";

//store properties from web form 
$unit_name = $_POST["unit_name"];
$faction = $_POST["faction"];
$unit_weight = $_POST["unit_weight"];

//instantiate resultPage, passing above properties to the class constructor
$pageView = new resultPage($unit_name, $faction, $unit_weight);
?>
