<?php 
$ask = get_field('ask');
$title = $aks['title'];
$image = $aks['image'];
?>
<section class="ask">
    <div class="ask__wrap">
        <div class="ask__content">
            <h2 class="ask__title"><?php echo $title; ?></h2>
            <div class="accordion">
                <div class="accordion__item active">
                    <div class="accordion__title">Aliquet lectus urna viverra in odio?</div>
                    <div class="accordion__text">
                        Adipiscing nunc arcu enim elit mattis eu placerat proin. Imperdiet elementum
                        faucibus dignissim purus. Fusce parturient diam magna ullamcorper morbi semper massa ac facilisis.
                    </div>
                </div>
                <div class="accordion__item">
                    <div class="accordion__title">Orci commodo, viverra orci mollis ut euismod?</div>
                    <div class="accordion__text">
                        Adipiscing nunc arcu enim elit mattis eu placerat proin. Imperdiet elementum
                        faucibus dignissim purus. Fusce parturient diam magna ullamcorper morbi semper massa ac facilisis.
                    </div>
                </div>
                <div class="accordion__item">
                    <div class="accordion__title">Sagittis vitae facilisi rutrum amet mauris quisque vel convallis?</div>
                    <div class="accordion__text">
                        Adipiscing nunc arcu enim elit mattis eu placerat proin. Imperdiet elementum
                        faucibus dignissim purus. Fusce parturient diam magna ullamcorper morbi semper massa ac facilisis.
                    </div>
                </div>
                <div class="accordion__item">
                    <div class="accordion__title">In id dolor quis nunc, urna hendrerit pharetra?</div>
                    <div class="accordion__text">
                        Adipiscing nunc arcu enim elit mattis eu placerat proin. Imperdiet elementum
                        faucibus dignissim purus. Fusce parturient diam magna ullamcorper morbi semper massa ac facilisis.
                    </div>
                </div>
                <div class="accordion__item">
                    <div class="accordion__title">Orci commodo, viverra orci mollis ut euismod?</div>
                    <div class="accordion__text">
                        Adipiscing nunc arcu enim elit mattis eu placerat proin. Imperdiet elementum
                        faucibus dignissim purus. Fusce parturient diam magna ullamcorper morbi semper massa ac facilisis.
                    </div>
                </div>
                <div class="accordion__item">
                    <div class="accordion__title">Sagittis vitae facilisi rutrum amet mauris quisque vel convallis?</div>
                    <div class="accordion__text">
                        Adipiscing nunc arcu enim elit mattis eu placerat proin. Imperdiet elementum
                        faucibus dignissim purus. Fusce parturient diam magna ullamcorper morbi semper massa ac facilisis.
                    </div>
                </div>
                <div class="accordion__item">
                    <div class="accordion__title">In id dolor quis nunc, urna hendrerit pharetra?</div>
                    <div class="accordion__text">
                        Adipiscing nunc arcu enim elit mattis eu placerat proin. Imperdiet elementum
                        faucibus dignissim purus. Fusce parturient diam magna ullamcorper morbi semper massa ac facilisis.
                    </div>
                </div>
            </div>
        </div>
        <div class="ask__img">
            <img src="<?php echo $image; ?>" alt="">
        </div>
    </div>
</section>