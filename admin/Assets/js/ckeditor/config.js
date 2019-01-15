/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */


	// Define changes to default configuration here. For example:
	// config.language = 'fr';

	CKEDITOR.editorConfig = function( config ) {
	config.extraPlugins = 'html5video';
	//config.removePlugins = 'image';
	//config.extraPlugins = 'easyimage';

	//config.extraPlugins = 'uploadcare';
	//config.extraPlugins = 'imgupload';

	//config.skin = 'minimalist';

	//config.extraPlugins = 'imageuploader';
	//config.extraPlugins = 'videodetector';

	config.toolbarGroups = [
		{ name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
		{ name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
		{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
		{ name: 'forms', groups: [ 'forms' ] },
		'/',
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
		{ name: 'links', groups: [ 'links' ] },
		{ name: 'insert', groups: [ 'insert' ] },
		'/',
		{ name: 'styles', groups: [ 'styles' ] },
		{ name: 'colors', groups: [ 'colors' ] },
		{ name: 'tools', groups: [ 'tools' ] },
		{ name: 'others', groups: [ 'others' ] },
		{ name: 'about', groups: [ 'about' ] }
	];
		// config.uiColor = '#AADC6E';

		config.removeButtons = 'Form,Radio,Checkbox,TextField,Textarea,Select,Button,ImageButton,HiddenField,Flash,Iframe,PageBreak,About,Language,SelectAll,Scayt,Replace,Find,Cut,Copy,Paste,PasteText,PasteFromWord,Print,NewPage,Save,Anchor';


};

