<html><head><title>MEDIAKG RedSys</title>

<?php
//$datei_bearbeiten = $_POST['datei_bearbeiten'];

$datei_bearbeiten = "tourdates.html";

$query = $_SERVER['QUERY_STRING'];
$split_query = explode("&",$query);

$anzahl = count($split_query);

for ($x=0;$x<=$anzahl-1;$x++)
{
  $varuwert[$x] = explode("=",$split_query[$x]);
  $varuwert[$x][1] = preg_replace("%40","@",$varuwert[$x][1]);
  ${$varuwert[$x][0]} = $varuwert[$x][1];
}

?>

<script language="javascript" type="text/javascript" src="tiny_mce/tiny_mce.js"></script>
<script language="javascript" type="text/javascript">
function insertatcursor(html) {
    tinyMCE.execInstanceCommand("mce_editor_0","mceInsertContent",false,html);
}

	tinyMCE.init({
      mode : "exact",
	   elements : "elm",
		theme : "advanced",
		plugins : "table,save,advhr,advlink,emotions,iespell,insertdatetime,preview,zoom,searchreplace,print,contextmenu,paste,directionality,ibrowser,cutnews",
		theme_advanced_buttons1_add_before : "save,newdocument,separator",
		theme_advanced_buttons1_add : "fontselect,fontsizeselect",
		theme_advanced_buttons2_add : "separator,insertdate,inserttime,preview,zoom,separator,forecolor,backcolor",
		theme_advanced_buttons2_add_before: "cut,copy,paste,pastetext,pasteword,separator,search,replace,separator",
		theme_advanced_buttons3_add_before : "tablecontrols,separator",
		theme_advanced_buttons3_add : "emotions,iespell,ibrowser,advhr,separator,print,separator,ltr,rtl,separator,cutnews",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
	    plugi2n_insertdate_dateFormat : "$d. %m. %Y",
	    plugi2n_insertdate_timeFormat : "%H:%M:%S",
		extended_valid_elements : "hr[class|width|size|noshade],font[face|size|color|style],span[class|align|style]",
		external_link_list_url : "example_link_list.js",
		external_image_list_url : "example_image_list.js",
		flash_external_list_url : "example_flash_list.js",
		file_browser_callback : "ibrowser",
		paste_use_dialog : false,
		theme_advanced_resizing : true,
		theme_advanced_resize_horizontal : false,
		theme_advanced_link_targets : "_something=My somthing;_something2=My somthing2;_something3=My somthing3;",
		paste_auto_cleanup_on_paste : true,
		paste_convert_headers_to_strong : false,
		paste_strip_class_attributes : "all",
                 language : "de",
                 width : "500",
                 height: "400",
                 content_css : "admin/tiny_mce/style.css"
	});

	function fileBrowserCallBack(field_name, url, type, win) {
		// This is where you insert your custom filebrowser logic
		alert("Filebrowser callback: field_name: " + field_name + ", url: " + url + ", type: " + type);

		// Insert new URL, this would normaly be done in a popup
		win.document.forms[0].elements[field_name].value = "someurl.htm";
	}
</script>


</head>
<body scroll="auto">
<a name="top"></a>
<h3>Bearbeiten Sie Ihre Seiten online</h3>
<form action="parse.php" method="POST" name="Formular" id="Formular">
<input type="hidden" name="datei_bearbeiten" value="<?php echo $datei_bearbeiten; ?>">
<textarea id="elm" name="elm" rows="15" cols="80" style="width:100%">
	<?php  include ($datei_bearbeiten); ?>

</textarea><br>



<input type="submit" value="Bearbeitung abschliessen">
</form>


<?php
//include("../footer.php");
?>