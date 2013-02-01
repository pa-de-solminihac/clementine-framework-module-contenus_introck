<div>
<?php
/*
    $params = $data['params_contenu'];
    if (isset($params['bordure'])) {
?>
        <div class="generique_fond <?php echo $params['bordure']; ?> fond_<?php echo $params['bordure']; ?>">
            <div class="head">
                <div class="TL"> &nbsp;</div>
                <div class="TR"> &nbsp;</div>
                <div class="TOP"> &nbsp;</div>
            </div>
            <div class="fond">
                <div class="LEFT"> &nbsp;</div>
                <div class="RIGHT"> &nbsp;</div>
                <div class="CENTER">
                    <div class="fond-txt">
<?php
    }
 */
    if (isset($data['contenu']['contenu_html'])) {
        echo $data['contenu']['contenu_html'];
    }
    if (isset($data['contenu']['contenu_html_introck'])) {
        echo $data['contenu']['contenu_html_introck'];
    }
/*
    if (isset($params['bordure'])) {
?>
                    </div>
                </div>
            </div>
            <div class="foot">
                <div class="BL"> &nbsp;</div>
                <div class="BR"> &nbsp;</div>
                <div class="BOTTOM"> &nbsp;</div>
            </div>
            <div class="spacer"> &nbsp;</div>
        </div>
<?php
    }
 */
?>
</div>
