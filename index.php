<?php
    // Converting to pdf

ob_start();
?>

<!-- Style Sheet -->
<style>
    table{
        width: 100%;
    }

    table strong{
        font-weight: bold;
    }

    .center{
        text-align: center;
    }
</style>


<!-- Configuration Page PDF (margin)-->
<page backtop="20mm" backleft="20mm" backright="20mm" backbottom="20mm">

    <!-- IMAGE IIM -->
    <table>
        <!-- Titre principal -->
        <tr>
            <td style="width:100%;" class="center">
                <h1>DEMANDE D'INSCRIPTION <br/> BOURSE AUX PROJETS DE L'IIM</h1>
            </td>
        </tr>
    </table>

    <table style="margin-top: 20px;">
        <!-- Project Name Row -->
        <tr>
            <td style="width:60%;">
                <h2>NOM DU PROJET:</h2>
            </td>

            <td style="width:40%;">
                TEST NAME
            </td>
        </tr>

        <!-- Commanditaire row -->
        <tr>
            <td style="width:60%;">
                <h3>Nom, prénom et fonction <br/>du commanditaire du projet:</h3>
            </td>

            <td style="width:40%;">
                TEST NAME
            </td>
        </tr>

        <!-- Contact row -->
        <tr>
            <td style="width:60%;">
                <h3>Nom, prénom et fonction <br/>du contact pour le suivi du projet <br/>avec les étudiants:</h3>
            </td>

            <td style="width:40%;">
                TEST NAME
            </td>
        </tr>

        <!-- Adress row -->
        <tr>
            <td style="width:60%;">
                <h3>Adresse Postale:</h3>
            </td>

            <td style="width:40%;">
                TEST NAME
            </td>
        </tr>

        <!-- Email row -->
        <tr>
            <td style="width:60%;">
                <h3>Email:</h3>
            </td>

            <td style="width:40%;">
                TEST NAME
            </td>
        </tr>

        <!-- Tél row -->
        <tr>
            <td style="width:60%;">
                <h3>Téléphone:</h3>
            </td>

            <td style="width:40%;">
                TEST NAME
            </td>
        </tr>

        <!-- Decriptif row -->
        <tr>
            <td style="width:60%;">
                <h3>Descriptif de la société <br/>(en quelques mots):</h3>
            </td>

            <td style="width:40%;">
                TEST NAME
            </td>
        </tr>


    </table>



    <!-- Project Type Table -->
    <table style="margin-top: 20px;">
        <tr>
            <td style="width:100%;" class="center">
                <h2>Type de projet</h2>
            </td>
        </tr>

        <tr>
            <td style="width:85%;" class="center">
                SITE INTERNET
            </td>

            <td style="width:15%;">
                X
            </td>
        </tr>

        <tr>
            <td style="width:85%;" class="center">
                3D
            </td>

            <td style="width:15%;">
                X
            </td>
        </tr>

        <tr>
            <td style="width:85%;" class="center">
                ANIMATION 2D
            </td>

            <td style="width:15%;">
                X
            </td>
        </tr>

        <tr>
            <td style="width:85%;" class="center">
                INSTALLATION MULTIMEDIA
            </td>

            <td style="width:15%;">
                X
            </td>
        </tr>

        <tr>
            <td style="width:85%;" class="center">
                JEUX VIDEO
            </td>

            <td style="width:15%;">
                X
            </td>
        </tr>

        <tr>
            <td style="width:85%;" class="center">
                DVD
            </td>

            <td style="width:15%;">
                X
            </td>
        </tr>

        <tr>
            <td style="width:85%;" class="center">
                PRINT
            </td>

            <td style="width:15%;">
                X
            </td>
        </tr>

        <tr>
            <td style="width:85%;" class="center">
                CD ROM
            </td>

            <td style="width:15%;">
                X
            </td>
        </tr>

        <tr>
            <td style="width:85%;" class="center">
                EVENEMENT
            </td>

            <td style="width:15%;">
                X
            </td>
        </tr>

        <tr>
            <td style="width:85%;" class="center">
                APPEL D'OFFRE
            </td>

            <td style="width:15%;">
                X
            </td>
        </tr>

        <tr>
            <td style="width:85%;" class="center">
                BUSINESS PLAN
            </td>

            <td style="width:15%;">
                X
            </td>
        </tr>

        <tr>
            <td style="width:85%;" class="center">
                AUTRE
            </td>

            <td style="width:15%;">
                X
            </td>
        </tr>


    </table>

    <!-- Descriptif Table -->
    <table style="margin-top: 20px;">
        <tr>
            <td style="width:100%;" class="center">
                <h3>DESCRIPTIF DU PROJET</h3>
            </td>
        </tr>

        <tr>
            <td style="width:100%;" class="center">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br/>
                Amet asperiores assumenda autem beatae consectetur cupiditate delectus <br/>
                distinctio ea est eum illo impedit nam nostrum qui repellat sed tempore ullam, vero.
            </td>
        </tr>

    </table>


    <!-- Context Table -->
    <table style="margin-top: 30px;">
        <tr>
            <td style="width:100%;" class="center">
                <h3>CONTEXTE DE LA DEMANDE</h3>
            </td>
        </tr>

        <tr>
            <td style="width:100%;" class="center">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br/>
                Amet asperiores assumenda autem beatae consectetur cupiditate delectus <br/>
                distinctio ea est eum illo impedit nam nostrum qui repellat sed tempore ullam, vero.
            </td>
        </tr>

    </table>

    <!-- Goals Table -->
    <table style="margin-top: 30px;">
        <tr>
            <td style="width:100%;" class="center">
                <h3>VOS OBJECTIFS</h3>
            </td>
        </tr>

        <tr>
            <td style="width:100%;" class="center">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br/>
                Amet asperiores assumenda autem beatae consectetur cupiditate delectus <br/>
                distinctio ea est eum illo impedit nam nostrum qui repellat sed tempore ullam, vero.
            </td>
        </tr>

    </table>

    <!-- Problem Table -->
    <table style="margin-top: 30px;">
        <tr>
            <td style="width:100%;" class="center">
                <h3>CONTRAINTES Particulière éventuelles <br/> et informations complémentaires</h3>
            </td>
        </tr>

        <tr>
            <td style="width:100%;" class="center">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br/>
                Amet asperiores assumenda autem beatae consectetur cupiditate delectus <br/>
                distinctio ea est eum illo impedit nam nostrum qui repellat sed tempore ullam, vero.
            </td>
        </tr>

    </table>

</page>


<?php
    $content = ob_get_clean();
    require('html2pdf/html2pdf.class.php');
    try{
        $pdf = new HTML2PDF('P', 'A4', 'fr');
        $pdf->pdf->SetDisplayMode('fullpage');
        $pdf->writeHTML($content);
        $pdf->Output('test.pdf');

        /* Create a directory and dl the pdf inside
        $dossier = 'upload';
        if(!is_dir($dossier)){
            mkdir($dossier);
            $pdf->Output('upload/fichier_xxxx.pdf', 'F');
        }else{
            $pdf->Output('upload/fichier_xxxx.pdf', 'F');
        }

        */


    }catch(HTML2PDF_exception $e){
        die($e);
    }

?>

