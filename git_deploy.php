<?php
/*
 * Resica Falls Scout Reservation
 * Git Deployment Script
 * ----------------------------------------------------
 * Triggers webserver deployment based on request from GitHub
 * ----------------------------------------------------
 * |Version History|
 *
 * 1.0
 * 3/8/17
 *
 * ----------------------------------------------------
 * Questions?
 * David Gibbons - me@davidgibbons.me
 * ----------------------------------------------------
 */

	// Bash script location and name
	$bash_script = "../github_request.sh";
	$log_file = "../git_deploy.log";

	// Get user info
	$remote_addr = $_SERVER['REMOTE_ADDR'];
	$user_agent =  $_SERVER['HTTP_USER_AGENT'];

	$timestamp = date("Y-m-d h:i:s", time());

	// Log user info
	$user_log = PHP_EOL . 
	"Time: " . $timestamp . PHP_EOL . 
	"Remote IP: " . $remote_addr . PHP_EOL . 
	"UA: " . $user_agent . PHP_EOL;

	file_put_contents($log_file, $user_log, FILE_APPEND | LOCK_EX);

	// Update local repository
	$command = 'git pull >> ' . $log_file . ' &';
	shell_exec($command);

?>