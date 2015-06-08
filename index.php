<?php
    // Converting to pdf

ob_start();
?>
<table>
    <tr>
        <td>Salut</td>
    </tr>
</table>


<?php
    $content = ob_get_clean();
    require('html2pdf/html2pdf.class.php');
    try{
        $pdf = new HTML2PDF('P', 'A4', 'fr');
        $pdf->pdf->SetDisplayMode('fullpage');
        $pdf->writeHTML($content);
        $pdf->Output('test.pdf');

        $dossier = 'upload';
        if(!is_dir($dossier)){
            mkdir($dossier);
            $pdf->Output('upload/fichier_xxxx.pdf', 'F');
        }else{
            $pdf->Output('upload/fichier_xxxx.pdf', 'F');
        }




    }catch(HTML2PDF_exception $e){
        die($e);
    }

?>

