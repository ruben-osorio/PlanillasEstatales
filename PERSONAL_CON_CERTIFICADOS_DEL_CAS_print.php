<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");
require_once("include/dbcommon.php");
require_once('classes/searchclause.php');
require_once('include/xtempl.php');

if( @$_REQUEST["format"] != "excel" && @$_REQUEST["format"] != "word" ) 
	add_nocache_headers();

require_once("include/PERSONAL_CON_CERTIFICADOS_DEL_CAS_variables.php");


if( !Security::processPageSecurity( $strTableName, 'P' ) )
	return;

	
require_once('classes/reportpage.php');
require_once('classes/reportprintpage.php');	
	



$layout = new TLayout("report_print", "Rounded1Coral1", "MobileCoral1");
$layout->version = 2;
$layout->blocks["center"] = array();
$layout->containers["grid"] = array();
$layout->container_properties["grid"] = array(  );
$layout->containers["grid"][] = array("name"=>"report_print", 
	"block"=>"", "substyle"=>1  );

$layout->skins["grid"] = "empty";

$layout->blocks["center"][] = "grid";
$layout->blocks["top"] = array();
$layout->containers["pdf"] = array();
$layout->container_properties["pdf"] = array(  "print" => "none"  );
$layout->containers["pdf"][] = array("name"=>"printbuttons", 
	"block"=>"printbuttons", "substyle"=>1  );

$layout->skins["pdf"] = "empty";

$layout->blocks["top"][] = "pdf";
$layout->skins["master"] = "empty";

$layout->blocks["top"][] = "master";
$layout->containers["pageheader"] = array();
$layout->container_properties["pageheader"] = array(  "print" => "repeat"  );
$layout->containers["pageheader"][] = array("name"=>"report_style", 
	"block"=>"", "substyle"=>1  );

$layout->containers["pageheader"][] = array("name"=>"printheader", 
	"block"=>"printheader", "substyle"=>1  );

$layout->containers["pageheader"][] = array("name"=>"page_of_print", 
	"block"=>"page_number", "substyle"=>1  );

$layout->skins["pageheader"] = "empty";

$layout->blocks["top"][] = "pageheader";
$page_layouts["PERSONAL_CON_CERTIFICADOS_DEL_CAS_rprint"] = $layout;

$layout->skinsparams = array();
$layout->skinsparams["empty"] = array("button"=>"button2");
$layout->skinsparams["menu"] = array("button"=>"button1");
$layout->skinsparams["hmenu"] = array("button"=>"button1");
$layout->skinsparams["undermenu"] = array("button"=>"button1");
$layout->skinsparams["fields"] = array("button"=>"button1");
$layout->skinsparams["form"] = array("button"=>"button1");
$layout->skinsparams["1"] = array("button"=>"button1");
$layout->skinsparams["2"] = array("button"=>"button1");
$layout->skinsparams["3"] = array("button"=>"button1");



$xt = new Xtempl();
$id = postvalue("id");
$id = $id != "" ? $id : 1;

// an array of ReportPrintPage constructor params
$params = array();
$params["id"] = $id;
$params["xt"] = &$xt;
$params["mode"] = REPORT_SIMPLE;
$params["tName"] = $strTableName;
$params["pageType"] = PAGE_RPRINT;

$params["allPagesMode"] = postvalue("all");
$params["pdfMode"] = postvalue("pdf");
$params["pdfContent"] = postvalue("htmlPdfContent");
$params["pdfWidth"] = postvalue("width");
$params["format"] = postvalue("format");
$params["splitByGroups"] = postvalue("records");



$pageObject = new ReportPrintPage($params);
$pageObject->init();

$pageObject->assignPDFFormatSettings( @$_REQUEST["format"], postvalue("exportPdf") );


$forExport = false;
if (@$_REQUEST["format"] == "excel")
{
	$forExport = "excel";
	header("Content-Type: application/vnd.ms-excel");
	header("Content-Disposition: attachment;Filename=PERSONAL_CON_CERTIFICADOS_DEL_CAS.xls");
	echo "<html xmlns:o=\"urn:schemas-microsoft-com:office:office\" xmlns:x=\"urn:schemas-microsoft-com:office:excel\" xmlns=\"http://www.w3.org/TR/REC-html40\">";
	echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=".$cCharset."\">";
}
else if (@$_REQUEST["format"] == "word")
{
	$forExport = "word";
	header("Content-Type: application/vnd.ms-word");
	header("Content-Disposition: attachment;Filename=PERSONAL_CON_CERTIFICADOS_DEL_CAS.doc");
	echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=".$cCharset."\">";
}

if( @$_REQUEST["format"] )
	$xt->assign("stylesheetlink", false);
else
	$xt->assign("stylesheetlink", true);

	
// the table info params
$extraParams = $pageObject->getExtraReportParams();	
$extraParams['forExport'] = $forExport; 

$pageObject->setGoogleMapsParams( $extraParams['fieldsArr'] );
$pageObject->setReportData( $extraParams );


// add button events if exist
$pageObject->addButtonHandlers();
$pageObject->addCommonJs();

if( $pageObject->pSet->getReportPrintPartitionType() == 0 )
	$xt->assign("divideintopages_block", true);


$pageObject->body["begin"] .= GetBaseScriptsForPage(false);
$pageObject->body['end'] = XTempl::create_method_assignment( "assignBodyEnd", $pageObject);

$xt->assignbyref("body", $pageObject->body);
$xt->assign("grid_block", true);
$xt->assign("grid_header", true);

$xt->assign("fecha_registro_dato_fieldheader", true);
$xt->assign("id_old_cas_fieldheader", true);
$xt->assign("id_per_fieldheader", true);
$xt->assign("date_start_fieldheader", true);
$xt->assign("date_last_fieldheader", true);
$xt->assign("date_cas_fieldheader", true);
$xt->assign("year_rat_fieldheader", true);
$xt->assign("month_rat_fieldheader", true);
$xt->assign("day_rat_fieldheader", true);
$xt->assign("paterno_fieldheader", true);
$xt->assign("materno_fieldheader", true);
$xt->assign("nombres_fieldheader", true);
$xt->assign("cargo_fieldheader", true);
$xt->assign("unidad_fieldheader", true);
$xt->assign("item_contrato_fieldheader", true);
$xt->assign("ci_fieldheader", true);
$xt->assign("exp_fieldheader", true);



if( @$_REQUEST["format"] && $_REQUEST["format"] != "pdf" )
{
	//$pages[0]["page_summary"] = false;
	//$xt->assign_loopsection("pages", $pages);
	$xt->assign("pdflink_block", false);
	$xt->assign("divideintopages_block", false);
	$pageObject->body["begin"] = "";
	$pageObject->body["end"] = "";
	$xt->assignbyref("body", $pageObject->body);
}

if (@$_REQUEST["format"] !== "pdf")
	$xt->assign("bodyattrs", 'style="margin:10px;"');

$usePage2pdf = postvalue("pdf");

if( !$usePage2pdf )
{
	if(@$_REQUEST["format"] == "excel" || @$_REQUEST["format"] == "word") 
	{
		$xt->load_template($pageObject->templatefile);
		$contents = $pageObject->prepareWordOrExcelTemplate($xt->template);
		$xt->template = $contents;
		xt_process_template($xt, $xt->template);
	}
	else
	{
		$pageObject->display($pageObject->templatefile);		
	}
}
else
{
}

?>