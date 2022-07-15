<?php defined('BASEPATH') or exit('No direct script access allowed');
require_once("./application/third_party/dompdf/autoload.inc.php");

use Dompdf\Dompdf;

class Pdf extends Dompdf
{
    /**
     * PDF filename
     * @var String
     */
    // public $filename;
    public function __construct()
    {
        parent::__construct();
        // $this->filename = "laporan.pdf";
    }
    /**
     * Get an instance of CodeIgniter
     *
     * @access    protected
     * @return    void
     */
    // protected function ci()
    // {
    //     return get_instance();
    // }
    /**
     * Load a CodeIgniter view into domPDF
     *
     * @access    public
     * @param    string    $view The view to load
     * @param    array    $data The view data
     * @return    void
     */
    // public function load_view($view, $data = array())
    // {
    //     $CI = &get_instance();
    //     $html = $this->$CI->load->view($view, $data, TRUE);
    //     $this->load_html($html);
    //     // Render the PDF
    //     $this->render();
    //     // Output the generated PDF to Browser
    //     $this->stream($this->filename, array("Attachment" => false));
    // }
    public function generate($html, $filename = '', $stream = TRUE, $paper = 'A4', $orientation = "portrait", $prodiordekan)
    {
        $dompdf = new DOMPDF();
        $dompdf->loadHtml($html);
        $dompdf->setPaper($paper, $orientation);
        $dompdf->render();
        if ($stream) {
            $output = $dompdf->output();
            if($prodiordekan == "prodi"){
                file_put_contents('./surat_rekomendasi/prodi/'.$filename.'.pdf', $output);
            }else if($prodiordekan == "dekan"){
                file_put_contents('./surat_rekomendasi/fakultas/'.$filename.'.pdf', $output);
            }
            $dompdf->stream($filename.".pdf", array("Attachment" => 0));
        } else {
           
            return $dompdf->output();
        }
    }

    public function generates($html, $filename = '', $stream = TRUE, $paper = 'A4', $orientation = "portrait")
    {
        $dompdf = new DOMPDF();
        $dompdf->loadHtml($html);
        $dompdf->setPaper($paper, $orientation);
        $dompdf->render();
        if ($stream) {
            $dompdf->stream($filename.".pdf", array("Attachment" => 0));
        } else {
           
            return $dompdf->output();
        }
    }
}
