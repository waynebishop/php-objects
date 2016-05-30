<?php

abstract class Page {

	private $title;
	private $desc;
	private $stylesheets;
	private $jsFiles;

	public function buildHeaderHTML() {

	}

	public function buildFooterHTML() {

	}

	abstract public function contentHTML();

}


