<?php
/**
 * TestFonts
 *
 * Generates a PDF and loads all fonts in the unicode font folder
 *
 * @author Tim Peters <info@faimmedia.nl>
 * @copyright FaimMedia B.V. 2017
 */

define('ROOT_PATH', realpath(__DIR__.'/..').'/');

require_once ROOT_PATH.'/vendor/autoload.php';

$fpdf = new \tFPDF\PDF();
$fpdf->AddPage();

$fontFolder = ROOT_PATH.'src/font/unifont/';
$fontFiles = glob($fontFolder.'*.ttf');

foreach($fontFiles as $fontFile) {
	$baseName = basename($fontFile, '.ttf');

	$fpdf->AddFont($baseName, '', basename($fontFile), true);
	$fpdf->SetFont($baseName);

	$fpdf->SetTextColor(0,0,0);
	$fpdf->Cell(30, 5, $baseName, 0, 1);

	$fpdf->setX($fpdf->getX() + 10);
	$fpdf->Cell(100, 5, 'Nice to meet you', 0, 1);

	$fpdf->setY($fpdf->getY() + 5);
}

if(isset($_GET['output'])) {
	header('Content-Type: application/pdf; Charset=UTF-8');

	echo $fpdf->output();
} else {
	$str_file = sys_get_temp_dir() . '/tfpdf_unicode_test.pdf';
	file_put_contents($str_file, $fpdf->output());

	echo "Written file " . $str_file . PHP_EOL;
}
