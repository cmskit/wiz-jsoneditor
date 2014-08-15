<?php
require dirname(dirname(__DIR__)) . '/inc/php/session.php';
error_reporting(0);
$projectName = htmlentities($_GET['project']);
$lang = ($_SESSION[$projectName]['lang'] ? $_SESSION[$projectName]['lang'] : 'en');
$LL = array();
include 'locales/'.$lang.'.php';

?>
<!DOCTYPE html>
<html>
<head>
	<!--
		based on: http://jsoneditoronline.org
	-->
	<link rel="stylesheet" type="text/css" href="jsoneditor/jsoneditor.css" />
	<link rel="stylesheet" type="text/css" href="add/add.css" />
	<script type="text/javascript" src="jsoneditor/jsoneditor.js"></script>
	

</head>
<body>

<button onclick="save()" class="jsoneditor-addbuttons jsoneditor-save" title="Save"></button>
<div id="jsoneditor" style="width: 100%; height: 95%;"></div>

<script type="text/javascript" >
	
	// create the editor. Optionally, parameters json and options can be
	// specified in the constructor.
	var container = document.getElementById("jsoneditor");
	var editor = new jsoneditor.JSONEditor(container);
	var str = parent.$('#'+parent.targetFieldId).val();
	if(!str || str.length<2) str = '{}';
	editor.set(JSON.parse(str));
	
	// save json
	function save() {
		var json = editor.get();
		//alert(JSON.stringify(json, null, 2));
		// save JSON to parent Field
		parent.$('#'+parent.targetFieldId).val( JSON.stringify(json, null, 2) );
		parent.saveContent("<?php echo $_GET['objectId'];?>");
		parent.$('#dialog2').dialog('close');
		//parent.hasCanged = true;
	}
</script>
</body>
</html>
