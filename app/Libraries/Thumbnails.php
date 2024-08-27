<?php namespace App\Libraries;

class Thumbnails
{

    function genPdfThumbnail($source, $target)
	{
        //$im     = new \Imagick($source."[0]"); // 0-first page, 1-second page
		//$im     = new \Imagick($source); // All page
		$image = new \imagick();
		$image->setResolution(300, 300);
		$image->readImage($source);
		$image->setImageCompressionQuality(100);
		$image->writeImages($target, false);
		/*$im->setImageColorspace(255); // prevent image colors from inverting
		$im->setimageformat("png");
		$im->thumbnailimage(570, 605); // width and height
		$im->writeimage($target);
		$im->clear();
		$im->destroy();*/
	}

	function genPdfFromImages($source, $target){
		$fp = fopen($target, 'w');
		$pdf = new \Imagick($source);
		$pdf->resetiterator();
		$pdf->setimageformat('pdf');
		$pdf->writeimagesfile($fp);
		fclose($fp);
	}

	function genPdfWatermark($source, $sourcewatermark){
		// Create instance of the original source pdf/images
		$image = new \imagick();
		$image->readImage($source);
		$pathsource = str_replace(basename($source), '', $source);
		
		

		// Create instance of the Watermark pdf/image
		$watermark = new \Imagick();
		$watermark->setBackgroundColor(new \ImagickPixel('transparent'));
		$watermark->readImage($sourcewatermark);
		//$watermark->setImageOpacity(0.2);		
		//$watermark->setImageFormat('png32');
		//$watermark->setImageAlpha(0.1);


		// Retrieve size of the Images to verify how to print the watermark on the image
		$img_Width = $image->getImageWidth();
		$img_Height = $image->getImageHeight();
		$watermark_Width = $watermark->getImageWidth();
		$watermark_Height = $watermark->getImageHeight();

		// Check if the dimensions of the image are less than the dimensions of the watermark
		// In case it is, then proceed to 
		if ($img_Height < $watermark_Height || $img_Width < $watermark_Width) {
			// Resize the watermark to be of the same size of the image
			$watermark->scaleImage($img_Width, $img_Height);

			// Update size of the watermark
			$watermark_Width = $watermark->getImageWidth();
			$watermark_Height = $watermark->getImageHeight();
		}

		// Calculate the position
		$x = ($img_Width - $watermark_Width) / 2;
		$y = ($img_Height - $watermark_Height) / 2;
		
		$num_pages = $image->getNumberImages();
		for($i = 0; $i < $num_pages; $i++){         
			$image->setIteratorIndex($i);
			// Draw watermark on the image file with the given coordinates
			$image->compositeImage($watermark, \Imagick::COMPOSITE_DARKEN, $x, $y);			
		}
		
		// Save image
		$image->writeImages($pathsource."file_watermark.pdf",true);
		
	}

}