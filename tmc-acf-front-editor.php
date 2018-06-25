<?php
/**
 * Plugin Name: ACF Front Editor TMC
 * Description: Lightweight solution for front-end edition of Advanced Custom Fields. Designed to be used by developers.
 * Version:     1.0.0
 * Plugin URI:  https://themastercut.co
 * Author:      TheMasterCut.co
 * License:     GPL-2.0+
 * Text Domain: tmc-acffe
 * Domain Path: /langugages
 *
 * ACF Front Editor TMC is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 * ACF Front Editor TMC is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with The real Maintenance Mode TMC. If not, see https://www.gnu.org/licenses/old-licenses/gpl-2.0.html.
 */

//  ----------------------------------------
//  Requirements
//  ----------------------------------------

require dirname( __FILE__ ) . '/lib/ShellPress/src/Shared/Utility/RequirementChecker.php';

$requirementChecker = new ShellPress_RequirementChecker();

$checkPHP   = $requirementChecker->checkPHPVersion( '5.3', 'ACF Front Editor TMC requires PHP version >= 5.3' );
$checkWP    = $requirementChecker->checkWPVersion( '4.5', 'ACF Front Editor TMC requires WP version >= 4.3' );
$checkACF   = $requirementChecker->checkClassExistance( 'acf', 'ACF Front Editor TMC requires Advanced Custom Fields plugin.' );

if( ! $checkPHP || ! $checkWP || ! $checkACF ) return;

//  ----------------------------------------
//  ShellPress
//  ----------------------------------------

use tmc\acffe\src\App;

require_once( __DIR__ . '/lib/ShellPress/ShellPress.php' );
require_once( __DIR__ . '/src/App.php' );

App::initShellPress( __FILE__, 'tmc_acffe', '1.0.0' );   //  <--- Remember to always change version here
