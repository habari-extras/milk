<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en-US">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if($request->display_entry && isset($post)) { echo "{$post->title} - "; } ?><?php Options::out( 'title' ) ?></title>
<meta name="generator" content="Habari" />
<link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php $theme->feed_alternate(); ?>" />
<link rel="edit" type="application/atom+xml" title="Atom Publishing Protocol" href="<?php URL::out( 'atompub_servicedocument' ); ?>" />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php URL::out( 'rsd' ); ?>" />
<link rel="stylesheet" type="text/css" media="screen" href="<?php Site::out_url( 'theme' ); ?>/css/screen.css" />
<link rel="stylesheet" type="text/css" media="print" href="<?php Site::out_url( 'theme' ); ?>/css/print.css" />
<?php $theme->header(); ?>
</head>

<body>

<div id="skiplinks">
<a href="#navigation">Jump to navigation</a>
<a href="#content">Jump to main content</a>
<a href="#searchform">Jump to search form</a>
</div>

<div id="container">
<h1><a href="<?php Site::out_url( 'habari' ); ?>"><?php Options::out( 'title' ); ?></a></h1>
<div id="main">
