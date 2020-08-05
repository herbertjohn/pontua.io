<?php
// Prevent direct access to file
defined('shoppingcart') or exit;
// Remove all the products in cart, no longer needed as the order has been processed
unset($_SESSION['cart']);
?>

<?=template_header('Pedido Feito')?>


<br><br><br>

<?php if ($error): ?>
<p><?=$error?></p>
<?php else: ?>
<div style="text-align: center;">
    <h1>Seu pedido foi feito!</h1>
    <p>Obrigado por fazer o pedido conosco, entraremos em contato por e-mail com os detalhes do pedido.</p>
</div>
<?php endif; ?>






</div></div>
<?php include("sidebar.php"); ?>
<?=template_footer()?>