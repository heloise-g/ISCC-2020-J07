<?php
    $produits = array(
        't-shirt rouge ' => "15.50",
        't-shirt vert ' => "15.50",
        't-shirt argent ' => "16.50",
        'short bleu ' => "19.99",
        'short vert ' => "19.99",
        'veste argent ' => "35");
    foreach($produits as $cle => $element)
    {
        echo $cle;
        echo $element . "<br/>";
    }
?>

<?php
$shop = array( array("produit"=>"t-shirt rouge", "prix"=>15.50),
               array("produit"=>"t-shirt vert", "prix"=>15.50),
               array("produit"=>"t-shirt argent", "prix"=>16.50),
               array("produit"=>"short bleu", "prix"=>19.99),
               array("produit"=>"short vert", "prix"=>19.99),
               array("produit"=>"veste argent", "prix"=>35),
             ); 
?>
<?php if (count($shop) > 0): ?>
<table>
  <thead>
    <tr>
      <th><?php echo implode('</th><th>', array_keys(current($shop))); ?></th>
    </tr>
  </thead>
  <tbody>
<?php foreach ($shop as $row): array_map('htmlentities', $row); ?>
    <tr>
      <td><?php echo implode('</td><td>', $row); ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
<?php endif; ?>