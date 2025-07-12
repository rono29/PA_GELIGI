<?php
use Dompdf\Dompdf;
use Dompdf\Options;

class Pdf
{
    protected $dompdf;

    public function __construct()
    {
        require_once APPPATH . '../vendor/autoload.php';

        $options = new Options();
        $options->set('isRemoteEnabled', true);

        $this->dompdf = new Dompdf($options);
    }

    public function generate($html, $filename = '', $stream = true, $paper = 'A4', $orientation = 'portrait')
    {
        $this->dompdf->setPaper($paper, $orientation);
        $this->dompdf->loadHtml($html);
        $this->dompdf->render();

        if ($stream) {
            $this->dompdf->stream($filename, ['Attachment' => 0]); // 0 = tampilkan di browser
        } else {
            return $this->dompdf->output();
        }
    }
}
