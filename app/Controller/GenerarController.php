<?php
App::uses('AppController', 'Controller');
/**
 * Modulos Controller
 *
 * @property Modulo $Modulo
 */
class GenerarController extends AppController {

var $uses= array('Usuario');


/**
 * beforeFilter method
 *
 * @return void
 */
    public function beforeFilter(){
		$this->checkSession();
	}

/**
 * index method
 *
 * @return void
 */
    public function index(){
    	$this->layout = 'panel';
	}


/**
 * index method
 *
 * @return void
 */

     public function read_doc($archivo) {
        $fileHandle = fopen($archivo, "r");
        $line = @fread($fileHandle, filesize($archivo));
        $lines = explode(chr(0x0D),$line);
        $outtext = "";
        foreach($lines as $thisline)
          {
            $pos = strpos($thisline, chr(0x00));
            if (($pos !== FALSE)||(strlen($thisline)==0))
              {
              } else {
                $outtext .= $thisline." ";
              }
          }
         $outtext = preg_replace("/[^a-zA-Z0-9\s\,\.\-\n\r\t@\/\_\(\)]/","",$outtext);
        return $outtext;
    }

    public function generar(){
    	$this->layout = 'pdf';
         App::import('Vendor', 'PDF_EDIT', array('file' => 'PDF_EDIT-master/pdf_edit.php'));
         App::import('Vendor', 'TCPDF',         array('file' => 'TCPDF-master/tcpdf.php'));
    	 $this->set("file",$this->request->data["generar"]["file"]["tmp_name"]);
	}



	    public function pdf(){
    	$this->layout = 'pdf';

         App::import('Vendor', 'DocxConversion',         array('file' => 'DocConvert/docconvert.php'));
    	 $archivo        = $this->request->data["generar"]["file"];
//    	 $content = shell_exec('pdftotext '.$archivo["tmp_name"].' - -htmlmeta');
//         $content = shell_exec('antiword '.$archivo["tmp_name"].' ');

         /*
          * instalar apt-get install xpdf
          * instalar apt-get install poppler-utils
          * intalar ffmpg
          *
          */


//    	 pr($this->request->data["generar"]["file"]);
//    	App::import('Vendor', 'yt_downloader', array('file' => 'youtube/youtube-dl.class.php'));
//    	$mytube = new yt_downloader($this->request->data["generar"]["url1"], TRUE, "audio", $this->request->data["generar"]["inicio1"], $this->request->data["generar"]["fin1"]);
//		$audio   = $mytube->get_audio();
//		$path_dl = $mytube->get_downloads_dir();
//		clearstatcache();
//		if($audio !== FALSE && file_exists($path_dl . $audio) !== FALSE){
//
//		}
//		App::import('Vendor', 'TCPDF',         array('file' => 'TCPDF-master/tcpdf.php'));
//	    $this->set("name", "generado.pdf");
//	    $this->set("contenido", $content);
//	    $this->set("url", "/var/www/attach-pdf-system/app/webroot/videos/".$audio );

	}

/**
 * session method
 *
 * @return void
 */
    public function session(){
    	$this->layout = 'ajax';

	}
/**
 * sessionl method
 *
 * @return void
 */
    public function sessionl(){
    	$this->layout = 'ajax';

	}

/**
 * sessionll method
 *
 * @return void
 */
    public function sessionll(){
    	$this->layout = 'ajax';

	}
}
?>