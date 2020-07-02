<html>
    <body>
        <?php
        $panier = array(
            $tableau1 = array("produit : "=>"t-shirt rouge", "prix : "=>15.50, 5),
            $tableau2 = array("produit : "=>"t-shirt vert", "prix : "=>15.50, 6),
            $tableau3 = array("produit : "=>"t-shirt argent", "prix : "=>16.50, 8),
            $tableau4 = array("produit : "=>"short bleu", "prix : "=>16.50, 5),
            $tableau5 = array("produit : "=>"short vert", "prix : "=>19.99, 5),
            $tableau6 = array("produit : "=>"veste argent", "prix : "=>19.99, 10),
            $tableau7 = array("produit : "=>"veste argent", "prix : "=>35, 3),
        );
        ?>
        <?php 
            function afficher_panier($panier){
            //Lecture de chaque ligne du tableau
            foreach ($panier as $ligne){
            //Lecture de chaque tableau de chaque ligne
            foreach ($ligne as $key => $value) {
                echo $key;
                echo $value . "<br/>";
            }
            }
            }
        ?>

        <?php
        afficher_panier($panier)
        ?>

    <ul>
        <li> T-shirt rouge </li>
        <li> 15.50 </li>
        <li> 5 </li>
    </ul>
 
    <ul>
        <li> T-shirt vert </li>
        <li> 15.50 </li>
        <li> 6 </li>
    </ul>
 
    <ul>
        <li> T-shirt argent </li>
        <li> 15.50 </li>
        <li> 8 </li>
    </ul>
 
    <ul>
        <li> Short bleu </li>
        <li> 16.50 </li>
        <li> 5 </li>
    </ul>
 
    <ul>
        <li> Short vert </li>
        <li> 19.99 </li>
        <li> 5 </li>
    </ul>
 
    <ul>
        <li> Veste argent </li>
        <li> 19.99 </li>
        <li> 5 </li>
    </ul>
 
    <ul>
        <li> Veste argent </li>
        <li> 35 </li>
        <li> 3 </li>
    </ul>
    </body>
</html>