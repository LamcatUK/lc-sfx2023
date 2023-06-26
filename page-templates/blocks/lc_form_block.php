<?php
$title = get_field('title') ?: get_field('form_block_title', 'options');
$content = get_field('intro') ?: get_field('form_block_content', 'options');
$formid = get_field('form_id') ?: get_field('form_block_form_id', 'options');
$bg = get_field('theme') == 'Dark' ? 'bg--grey' : '';
?>
<section class="form_block py-5 <?=$bg?>">
    <div class="container-xl">
        <h2><?=$title?></h2>
        <div class="row">
            <div class="col-md-6">
                <div class="intro mb-4">
                    <?=$content?>
                </div>
            </div>
            <div class="col-md-6">
                <?=do_shortcode('[contact-form-7 id="' . $formid . '"]')?>
            </div>
        </div>
    </div>
</section>