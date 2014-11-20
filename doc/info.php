<?php
$config = <<<EOD
{
	"info":  {
		"name": "JSON-Editor",
		"description": {
			"en": "Edit JSON-Documents with a nice Tree-View of the JSON-Document",
			"de": "JSON Editor"
		},
		"io":  [
			"JSON-Data",
			"JSON-Data"
		],
		"authors":  ["Christoph Taubmann"],
		"homepage": "http://cms-kit.org",
		"mail": "info@cms-kit.org",
		"copyright": "Apace licence 2.0",
		"credits":  [
			"[JSON-Editor](http://jsoneditoronline.org)"
		]
	},
	"system":  {
		"version": 0.8,
		"inputs":  [
			"TEXT"
		],
		"dependencies":  {
			"system":  {
				"package_manager"  : 0
			}
		},
		"include":  ["wizard:jsoneditor\\nexternal:true"],
		"translations":  [
			"en",
			"de"
		]
	}
}
EOD;
?>
