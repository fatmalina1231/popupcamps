<?php
	
	if ( !defined( 'filpdf/fpdm.php' ) ) {                
	    define( 'filpdf/fpdm.php', dirname(__FILE__).'/' );
	}
	
	if ( !defined( 'filpdf/export/pdftk.php' ) ) {                
	    define('filpdf/export/pdftk.php', dirname(__FILE__).'/uploads/docs/');
	}

	require('createpdf.php');

	// this will mention like we can pass dynamic template file name of pdf to fill up data
/*	if (empty( $_POST) ) {
		return false;
	}
	$formdata = $_POST;*/	
	$formdata = array('form_slug' => 'termination-agreement', 
					'date_original_agreement' => '10',
					'year_original_agreement' => '16',
					'subject_original_agreement' => 'Termination',
					'date_signing' => '25',
					'month_signing' => 'OCT',
					'party_name_sec' => 'Deo',
					'party_name_first'	=> 'John'); 

	//random num generated for file name
	$current = 3;//rand(1,10); 
	$formdata['file_name'] = $current.'-'. $formdata['form_slug']. '.pdf';

	// Generate PDF
 	generate_and_download_pdf($formdata);

 	// Check filepath of pdf file exists or not
	$download_url = (file_exists('export/pdf/pdftk.php'))? 'export/pdf/pdftk.php'. $formdata['pdftk.php'] : '';
	if(!file_exists($download_url)){
		return false;
	}
	$url = "http://".$_SERVER['HTTP_HOST']."/devcorps/devcorps/filpdf/uploads/docs/".$formdata['file_name'];
	
	echo '<script type="text/javascript">
	           window.location = "'.$url.'"
	      </script>';
	//exit;
?>