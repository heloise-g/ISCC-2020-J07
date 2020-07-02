
<html>
        <?php
        $panier = array(
            $tableau1 = array("produit : "=>"t-shirt rouge", "prix" => 15.50, "quantite" => 5),
            $tableau2 = array("produit : "=>"t-shirt vert", "prix" =>15.50, "quantite" => 6),
            $tableau3 = array("produit : "=>"t-shirt argent", "prix" => 16.50, "quantite" => 8),
            $tableau4 = array("produit : "=>"short bleu", "prix" => 16.50, "quantite" => 5),
            $tableau5 = array("produit : "=>"short vert", "prix" => 19.99, "quantite" => 5),
            $tableau6 = array("produit : "=>"veste argent", "prix" => 19.99, "quantite" => 10),
            $tableau7 = array("produit : "=>"veste argent", "prix" => 35, "quantite" => 3),
        );
            foreach ($panier as $ligne){
            echo "<ul>";
            foreach ($ligne as $key => $value) {
                echo "<li>";
                echo $value;
                echo "</li>";
            }
            echo $ligne["prix"] * $ligne["quantite"];
            echo "</ul>";
            }
        ?>

        <?php
            function afficher_panier($panier){

            }
        ?>
</html>