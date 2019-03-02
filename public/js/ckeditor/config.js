/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here.
	// For complete reference see:
	// http://docs.ckeditor.com/#!/api/CKEDITOR.config

	// The toolbar groups arrangement, optimized for two toolbar rows.
	config.toolbarGroups = [
		{ name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
		{ name: 'editing',     groups: [ 'find', 'selection', 'spellchecker' ] },
		{ name: 'links' },
		{ name: 'insert' },
		{ name: 'forms' },
		{ name: 'tools' },
		{ name: 'document',	   groups: [ 'mode', 'document', 'doctools' ] },
		{ name: 'others' },
		'/',
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
		{ name: 'styles' },
		{ name: 'colors' },
		{ name: 'about' }
	];

	// Remove some buttons provided by the standard plugins, which are
	// not needed in the Standard(s) toolbar.
	config.removeButtons = 'Underline,Subscript,Superscript';

	// Set the most common block elements.
	config.format_tags = 'p;h1;h2;h3;pre';

	// Simplify the dialog windows.
	config.removeDialogTabs = 'image:advanced;link:advanced';
    config.removeDialogTabs = 'image:advanced;link:advanced';
    config.filebrowserBrowseUrl =  serverName+'js/ckeditor/kcfinder/browse.php?opener=ckeditor&type=files';
    config.filebrowserBrowseUrl =  serverName+'js/ckeditor/kcfinder/browse.php?opener=ckeditor&type=files';
    config.filebrowserImageBrowseUrl =  serverName+'js/ckeditor/kcfinder/browse.php?opener=ckeditor&type=images';
    config.filebrowserFlashBrowseUrl =  serverName+'js/ckeditor/kcfinder/browse.php?opener=ckeditor&type=flash';
    config.filebrowserUploadUrl =  serverName+'js/ckeditor/kcfinder/upload.php?opener=ckeditor&type=files';
    config.filebrowserImageUploadUrl =  serverName+'js/ckeditor/kcfinder/upload.php?opener=ckeditor&type=images';
    config.filebrowserFlashUploadUrl =  serverName+'js/ckeditor/kcfinder/upload.php?opener=ckeditor&type=flash';

    //config.filebrowserBrowseUrl = serverName+'public/ckfinder/ckfinder.html';
    //
    // config.filebrowserImageBrowseUrl = serverName+'public/ckfinder/ckfinder.html?type=Images';
    //
    // config.filebrowserFlashBrowseUrl = serverName+'public/ckfinder/ckfinder.html?type=Flash';
    //
    // config.filebrowserUploadUrl = serverName+'public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
    //
    // config.filebrowserImageUploadUrl = serverName+'public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
    //
    // config.filebrowserFlashUploadUrl = serverName+'public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
};
