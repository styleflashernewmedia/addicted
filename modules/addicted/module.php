<?php

// Created on: 2006/11*pike@labforculture.org
// Commissioned by: LabforCulture

// Copyright (C) 2006 Pike. All rights reserved.
//
// This file may be distributed and/or modified under the terms of the
// "GNU General Public License" version 2 as published by the Free
// Software Foundation and appearing in the file LICENSE included in
// the packaging of this file.
//
// This file is provided AS IS with NO WARRANTY OF ANY KIND, INCLUDING
// THE WARRANTY OF DESIGN, MERCHANTABILITY AND FITNESS FOR A PARTICULAR
// PURPOSE.
//
//
// The "GNU General Public License" (GPL) is available at
// http://www.gnu.org/copyleft/gpl.html.

// this file also describes the inputs and outputs of each
// view and associated template.

// the sequence is
// select dictionary (identified by file)
// select context (identified by name)
// select message (identified by source<status>translation)

// note how I treat source<status>translation like a rdf triplet ..
// the dicts would have been perfect rdf. comment -in my view-
// is a reification on the triplet.
// by using the whole triplet as a id for the message, i avoid
// concurrent changes


$Module = array( 'name' => 'addicted' );

$ViewList = array();

//---------------------------------
// addicted/menu
$ViewList['menu'] = array(
    'script' => 'menu.php',
    'functions' => array( 'linguist' ),
    'default_navigation_part' => 'addicted'
);

$ViewList['dictionaries'] = array(
    'script' => 'dictionaries.php',
    'functions' => array( 'linguist' ),
    'default_navigation_part' => 'addicted'
);
$ViewList['contexts'] = array(
    'script' => 'contexts.php',
    'functions' => array( 'linguist' ),
    'default_navigation_part' => 'addicted'
);

$ViewList['messages'] = array(
    'script' => 'messages.php',
    'functions' => array( 'linguist' ),
    'default_navigation_part' => 'addicted'
);

$FunctionList = array();
$FunctionList['linguist'] = array();
