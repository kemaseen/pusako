<?php

namespace App\Controllers;

use App\Libraries\Thumbnails;

class Fileshow extends BaseController
{
    public function index($folder){
        
        helper("filesystem");
        $path = WRITEPATH . 'uploads/'.$folder.'/';
        $file = $this->request->getVar('q');
        $act = $this->request->getVar('act');
        $filename = base64_decode($file);
        $fullpath = $path . $filename;
        if($act == 'thumb'){            
            $fullpaththumb = $path.'thumbnails/'. $filename;
            $fullpathfiles = $path.'files/'. substr($filename,0,-4);
            if(!is_dir($fullpathfiles)){
                mkdir($fullpathfiles);
            }
            $targetfiles = $fullpathfiles."/file-0.png";
            if(!file_exists($targetfiles)){
                $target = $fullpathfiles."/file.png";
                $source = str_replace('png', 'pdf', $fullpath);
                $thumbnails = new Thumbnails(); // loads and creates instance
                $thumbnails->genPdfThumbnail($source, $target);
            }

            /*if(!file_exists($fullpaththumb)){
                $target = $fullpaththumb;
                $source = str_replace('png', 'pdf', $fullpath);
                $thumbnails = new Thumbnails(); // loads and creates instance
                $thumbnails->genPdfThumbnail($source, $target);
            }*/
            $fullpath = $fullpaththumb;
            
        }
        if(file_exists($fullpath)){
            $file = new \CodeIgniter\Files\File($fullpath, true);
            if($act == 'download'){
                return $this->response->download($fullpath, null);
            }else{
                $binary = readfile($fullpath);
                return $this->response
                        ->setHeader('Content-Type', $file->getMimeType())
                        ->setHeader('Content-disposition', 'inline; filename="' . $file->getBasename() . '"')
                        ->setStatusCode(200)
                        ->setBody($binary);
            }
        }
    }

    function generate($source){
        helper("filesystem");
        $sourcefile = WRITEPATH . "uploads/naskah/files/".$source."/Files.pdf";
        $watermark = PUBLICPATH.'watermark.png';
        $thumbnails = new Thumbnails(); // loads and creates instance
        $thumbnails->genPdfWatermark($sourcefile, $watermark);
    }

    private function genPdfThumbnail($source, $target)
	{
        
		//$source = realpath($source);
		$target = dirname($source).DIRECTORY_SEPARATOR.$target;
        $im     = new Imagick($source."[0]");
        echo $source;die;
		$im     = new Imagick($source."[0]"); // 0-first page, 1-second page
		$im->setImageColorspace(255); // prevent image colors from inverting
		$im->setimageformat("png");
		$im->thumbnailimage(160, 120); // width and height
		$im->writeimage($target);
		$im->clear();
		$im->destroy();
	}
}
