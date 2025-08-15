<?php
    function renderCarBrandCard($brand) {
        $brandName = htmlspecialchars($brand['name']);
        $brandLogo = htmlspecialchars($brand['imageURL']);
?>
    <div class="card col-2 text-center brand-card" data-name="<?php echo $brandName; ?>">
        <div class="card-body d-flex justify-content-center align-items-center">
            <img src="<?php echo $brandLogo; ?>" alt="<?php echo $brandName; ?>" class="brand-img">
            <span class="mx-3 brand-span"><?php echo $brandName; ?></span>                
        </div>
    </div>
<?php
    }

?>

