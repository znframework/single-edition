<?php
//--------------------------------------------------------------------------------------------------
// ZERONEED PHP WEB FRAMEWORK
//--------------------------------------------------------------------------------------------------
//
// Author     : Ozan UYKUN <ozanbote@windowslive.com> | <ozanbote@gmail.com>
// Site       : www.znframework.com
// License    : The MIT License
// Copyright  : Copyright (c) 2012-2016, ZN Framework
//
//--------------------------------------------------------------------------------------------------

//--------------------------------------------------------------------------------------------------
// Start
//--------------------------------------------------------------------------------------------------
//
// Microtime
//
//--------------------------------------------------------------------------------------------------
$start = microtime();

//--------------------------------------------------------------------------------------------------
// DS
//--------------------------------------------------------------------------------------------------
//
// @return const DIRECTORY_SEPARATOR
//
//--------------------------------------------------------------------------------------------------
define('DS', DIRECTORY_SEPARATOR);

//--------------------------------------------------------------------------------------------------
// REAL_BASE_DIR
//--------------------------------------------------------------------------------------------------
//
// @return /
//
//--------------------------------------------------------------------------------------------------
define('REAL_BASE_DIR', realpath(__DIR__) . DS);

//--------------------------------------------------------------------------------------------------
// Current Working Dir
//--------------------------------------------------------------------------------------------------
//
// @return /
//
//--------------------------------------------------------------------------------------------------
chdir(REAL_BASE_DIR);

//--------------------------------------------------------------------------------------------------
// CORE_DIR
//--------------------------------------------------------------------------------------------------
//
// @return Internal/
//
//--------------------------------------------------------------------------------------------------
define('RESOURCES_DIR', 'Resources' . DS);

//--------------------------------------------------------------------------------------------------
// CORE_DIR
//--------------------------------------------------------------------------------------------------
//
// @return Internal/
//
//--------------------------------------------------------------------------------------------------
define('CORE_DIR', RESOURCES_DIR . 'Core' . DS);

//--------------------------------------------------------------------------------------------------
// PRIORITY_LEVELS
//--------------------------------------------------------------------------------------------------
//
// @return Internal/Core/Priority.php
//
//--------------------------------------------------------------------------------------------------
define('PRIORITY_LEVELS', CORE_DIR . 'PriorityLevels.php');

//--------------------------------------------------------------------------------------------------
// PRIORTY_LEVELS_DIR
//--------------------------------------------------------------------------------------------------
//
// @return Internal/Core/Priority
//
//--------------------------------------------------------------------------------------------------
define('PRIORITY_DIR', RESOURCES_DIR . 'Priority' . DS);

//--------------------------------------------------------------------------------------------------
// Core File
//--------------------------------------------------------------------------------------------------
//
// Internal/Core/PriorityLevels.php
//
//--------------------------------------------------------------------------------------------------
require_once PRIORITY_LEVELS;

//--------------------------------------------------------------------------------------------------
// Finish
//--------------------------------------------------------------------------------------------------
//
// Microtime
//
//--------------------------------------------------------------------------------------------------
$finish = microtime();

//--------------------------------------------------------------------------------------------------
// Benchmark Table
//--------------------------------------------------------------------------------------------------
//
// Benchmark
//
//--------------------------------------------------------------------------------------------------
internalBenchmarkReport((float) $start, (float) $finish);
