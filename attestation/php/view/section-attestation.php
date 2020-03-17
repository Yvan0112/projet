<section>
            <h2>FORMULAIRE DE DECLARATION POUR ATTESTATION</h2>
            <form action="" method="POST">
                <input type="text" name="nom" required placeholder="votre nom">
                <input type="text" name="prenom" required placeholder="votre prenom">
                <textarea name="adresse" cols="60" rows="6" required placeholder="votre adresse"></textarea>
                <h3>cocher la raison de votre déplacement</h3>

                <label>
                    <input type="radio" name="raison" required value="courses alimentaires">
                    <span>courses alimentaires</span>
                </label>

                <label>
                    <input type="radio" name="raison" required value="travail">
                    <span>travail</span>
                </label>

                <label>
                    <input type="radio" name="raison" required value="aide aux proches">
                    <span>aide aux proches</span>
                </label>

                <label>
                    <input type="radio" name="raison" required value="necessité médicale">
                    <span>nécessité médicale</span>
                </label>

                <label>
                    <input type="radio" name="raison" required value="necessité familiale">
                    <span>necessité familiale</span>
                </label>

                <label>
                    <input type="radio" name="raison" required value="sortie sport individuel">
                    <span>sortie sport individuel</span>
                </label>

                <button type="submit">enregistrer ma déclaration</button>
                <input type="hidden" name="identifiantFormulaire" value="declaration">
                <div class="confirmation">

<?php

function filtrer($name)
{
    $info = $_REQUEST[$name];
    return $info;
}
$identifiantFormulaire = filtrer("identifiantFormulaire");

if ($identifiantFormulaire == "declaration")
{
    $tabAssoColonneValeur = ["nom" => filtrer("nom"),
                             "prenom"=> filtrer("prenom"),
                             "adresse"=> filtrer("adresse"),
                             "raison"=> filtrer("raison"),
                             ];
    extract($tabAssoColonneValeur);
    if ( $nom != ""
        && $prenom != ""
        && $adresse != ""
        && $raison != "")
     { 
        $tabAssoColonneValeur["numero"] = uniqid();
        $tabAssoColonneValeur["dateDeclaration"] = date("Y-m-d H:i:s");
        $requeteSQL =
        <<<CODESQL
        
        INSERT INTO declaration
        (nom, prenom, adresse, raison, numero, dateDeclaration) 
        VALUES 
        (:nom, :prenom, :adresse, :raison, :numero, :dateDeclaration) 
        
        CODESQL;
        $pdo = new PDO("mysql:host=localhost;dbname=attestation;charset=utf8;", "root", "");
        $pdoStatement = $pdo->prepare($requeteSQL);
        $pdoStatement->execute($tabAssoColonneValeur);
        echo "votre déclaration est bien enregistrée. NOTEZ BIEN VOTRE NUMERO D'ATTESTATION {$tabAssoColonneValeur["numero"]}";
    }
    else
    {
        echo "VEUILLEZ FOURNIR TOUTES LES INFORMATIONS SVP...";
    }

}

?>
                </div>
            </form>
        </section>








