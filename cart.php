<?php 
require 'inc/head.php';
require 'inc/data/products.php';
 ?>

<?php 

if (!isset($_SESSION['loginname'])){
    header('Location: /');
}

?>


<section class="cookies container-fluid">
    <div class="row">
        <?php 
            if (!isset($_SESSION['panier']) || count($_SESSION['panier']) === 0) : ?>
                <div>Votre panier est vide</div>
            <?php else : ?>
                <?php foreach(array_unique($_SESSION['panier']) as $cookie_id): ?>
                   <div class="cookie">
                       <img src="/assets/img/product-<?= $cookie_id ?>.jpg" width="150" alt="">
                       <p>Vous voulez <?= array_count_values($_SESSION['panier']) [$cookie_id]. " ". $catalog[$cookie_id]['name'] ?></p>
                    </div> 
                <?php endforeach ?>
            <?php endif ?>
            
    </div>
</section>
<?php require 'inc/foot.php'; ?>
