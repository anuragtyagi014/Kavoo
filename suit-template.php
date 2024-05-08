<?php
// Template Name: Suit Builder
get_header();
$hidden_input_values = [];
?>
<style>
    table td input {
        width: 80%;

    }

    table {
        width: 100%;
    }
</style>
<div class="single-product-sec">
    <div class="container">
        <div class="row-box">
            <div class="tailor-sidebar">
                <div class="sidebar-options">
                    <ul class="mi_buttons_chooser list-unstyled" id="mi_main_menus">
                        <li class="mi_choose">
                            <a href="javascript:void(0);" class="mi_tabber" x-name="fabric">
                                <img src="http://devt56.sg-host.com/wp-content/uploads/2024/04/fab_icon.png" class="img-thumbnail img-fluid">
                                Fabric
                            </a>
                        </li>
                        <li><strong>Jacket</strong></li>
                        <li class="mi_choose">
                            <a href="javascript:void(0);" class="mi_tabber" x-name="jacket-style">
                                <img src="http://devt56.sg-host.com/wp-content/uploads/2024/04/sleeve-long-1.png" class="img-thumbnail img-fluid">
                                Style
                            </a>
                        </li>
                        <li class="mi_choose">
                            <a href="#" class="mi_tabber" x-name="jacket-lapel">
                                <img src="http://devt56.sg-host.com/wp-content/uploads/2024/04/bottom_down_collar.png" class="img-thumbnail img-fluid">
                                Lapel
                            </a>
                        </li>
                        <li class="mi_choose">
                            <a href="#" class="mi_tabber" x-name="jacket-bottom">
                                <img src="http://devt56.sg-host.com/wp-content/uploads/2024/04/cuff-icon.png" class="img-thumbnail img-fluid">
                                Bottom
                            </a>
                        </li>
                        <li class="mi_choose">
                            <a href="#" class="mi_tabber" x-name="jacket-pockets">
                                <img src="http://devt56.sg-host.com/wp-content/uploads/2024/04/pocket-icon.png" class="img-thumbnail img-fluid">
                                Pockets
                            </a>
                        </li>
                        <li class="mi_choose">
                            <a href="#" class="mi_tabber" x-name="jacket-sleeve-button">
                                <img src="http://devt56.sg-host.com/wp-content/uploads/2024/04/back-details-icon.png" class="img-thumbnail img-fluid">
                                Sleeve Button
                            </a>
                        </li>
                        <li class="mi_choose">
                            <a href="#" class="mi_tabber" x-name="jacket-vent">
                                <img src="http://devt56.sg-host.com/wp-content/uploads/2024/04/bottom-cut-icon.png" class="img-thumbnail img-fluid">
                                Vent
                            </a>
                        </li>
                        <li><strong>Pant</strong></li>
                        <li class="mi_choose">
                            <a href="#" class="mi_tabber" x-name="pant-style">
                                <img src="http://devt56.sg-host.com/wp-content/uploads/2024/04/bottom-cut-icon.png" class="img-thumbnail img-fluid">
                                Style
                            </a>
                        </li>
                        <li class="mi_choose">
                            <a href="#" class="mi_tabber" x-name="pant-pleat">
                                <img src="http://devt56.sg-host.com/wp-content/uploads/2024/04/bottom-cut-icon.png" class="img-thumbnail img-fluid">
                                Pleat
                            </a>
                        </li>
                        <li class="mi_choose">
                            <a href="#" class="mi_tabber" x-name="pant-pant-pocket">
                                <img src="http://devt56.sg-host.com/wp-content/uploads/2024/04/bottom-cut-icon.png" class="img-thumbnail img-fluid">
                                Pant Pocket
                            </a>
                        </li>
                        <li class="mi_choose">
                            <a href="#" class="mi_tabber" x-name="pant-back-pockets">
                                <img src="http://devt56.sg-host.com/wp-content/uploads/2024/04/bottom-cut-icon.png" class="img-thumbnail img-fluid">
                                Back Pockets
                            </a>
                        </li>
                        <li class="mi_choose">
                            <a href="#" class="mi_tabber" x-name="pant-belt-loops">
                                <img src="http://devt56.sg-host.com/wp-content/uploads/2024/04/bottom-cut-icon.png" class="img-thumbnail img-fluid">
                                Belt Loops
                            </a>
                        </li>
                        <li class="mi_choose">
                            <a href="#" class="mi_tabber" x-name="pant-cuffs">
                                <img src="http://devt56.sg-host.com/wp-content/uploads/2024/04/bottom-cut-icon.png" class="img-thumbnail img-fluid">
                                Cuffs
                            </a>
                        </li>
                        <li class="mi_choose">
                            <a href="#" class="mi_tabber" x-name="jacket-lining">
                                <img src="http://devt56.sg-host.com/wp-content/uploads/2024/04/bottom-cut-icon.png" class="img-thumbnail img-fluid">
                                Lining
                            </a>
                        </li>
                        <li class="mi_choose">
                            <a href="#" class="mi_tabber" x-name="monogram">
                                <img src="http://devt56.sg-host.com/wp-content/uploads/2024/04/bottom-cut-icon.png" class="img-thumbnail img-fluid">
                                Monogram
                            </a>
                        </li>
                        <li class="mi_choose">
                            <a href="#" class="mi_tabber" x-name="measurement">
                                <img src="http://devt56.sg-host.com/wp-content/uploads/2024/04/bottom-cut-icon.png" class="img-thumbnail img-fluid">
                                Measurement
                            </a>
                        </li>

                    </ul>
                </div>
            </div>

            <div class="tailor-preview-box">
                <div class="mi_tabber_options" y-name="fabric">
                    <div class="mi_tabber_options_header">
                        <h4>Fabric
                            <div class="close-box">
                                <span></span>
                                <span></span>
                            </div>
                        </h4>
                    </div>
                    <div class="mi_tabber_options_content">
                        <div class="mi_tabber_options_content_in">
                            <?php
                            $i = 0;
                            foreach (getShirtFabrics() as $k => $v) {
                                $i++;
                                $product = wc_get_product($v->ID);
                                $monogram_section = get_field('monogram_section', $v->ID);
                                $monogram_charge = !empty($monogram_section['monogram_price']) ? $monogram_section['monogram_price'] : 0;
                                if ($i == 1) {
                                    $hidden_input_values["fabric"] = $v->ID;
                                    $hidden_input_values["fabric_name"] = $product->get_name();
                                    $hidden_input_values["fabric_price"] = $product->get_price();
                                    $hidden_input_values["fabric_img"] = wp_get_attachment_image_url($product->get_image_id(), 'thumbnail');
                                    $hidden_input_values["monogram_price"] = $monogram_charge;
                                }

                            ?>
                                <div class="tabber_option">
                                    <div class="tabber_option_item fabric-item <?= $i == 1 ? 'selected' : ''; ?>" fabric-name="<?= $product->get_name(); ?>" fabric-id="<?= $v->ID; ?>" fabric-price="<?= $product->get_price(); ?>" fabric-image="<?= wp_get_attachment_image_url($product->get_image_id(), 'thumbnail'); ?>" fabric-monogram_price="<?= $monogram_charge; ?>">
                                        <img src="<?= wp_get_attachment_image_url($product->get_image_id(), 'thumbnail'); ?>">
                                        <div class="tabber_option_text">
                                            <div class="fab_name"><?= $product->get_name(); ?></div>
                                            <div class="fab_price">$<?= $product->get_price(); ?></div>
                                        </div>
                                    </div>
                                </div>
                            <?php  }
                            ?>
                        </div>
                    </div>
                    <div class="mi_tabber_options_footer">
                        <span class="mi_tabber_options_next" z-name="fabric">Next</span>
                    </div>
                </div>
                <div class="mi_tabber_options" y-name="jacket-style">
                    <div class="mi_tabber_options_header">
                        <h4>Style
                            <div class="close-box">
                                <span></span>
                                <span></span>
                            </div>
                        </h4>
                    </div>
                    <div class="mi_tabber_options_content">
                        <div class="mi_tabber_options_content_in">
                            <?php
                            $si = 0;
                            foreach (getSuitCollections()->jacket_style as $k => $v) {
                                $si++;
                                if ($si == 1) {
                                    $hidden_input_values["jacket_style"] = !empty($v['name']) ? $v['name'] : '';
                                    $hidden_input_values["jacket_style_part_img"] = !empty($v['part_img']) ? $v['part_img'] : '';
                                }

                            ?>
                                <div class="tabber_option">
                                    <div class="tabber_option_item jacket-style-item <?= $si == 1 ? 'selected' : ''; ?>" jacket-style-name="<?= !empty($v['name']) ? $v['name'] : ''; ?>" jacket-style-part_img="<?= !empty($v['part_img']) ? $v['part_img'] : ''; ?>">
                                        <img src="<?= !empty($v['image']) ? $v['image'] : ''; ?>">
                                        <div class="tabber_option_text">
                                            <div class="fab_name"><?= !empty($v['name']) ? $v['name'] : ''; ?></div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="mi_tabber_options_footer">
                        <span class="mi_tabber_options_next" z-name="jacket-style">Next</span>
                    </div>
                </div>
                <div class="mi_tabber_options" y-name="jacket-lapel">
                    <div class="mi_tabber_options_header">
                        <h4>Lapel
                            <div class="close-box">
                                <span></span>
                                <span></span>
                            </div>
                        </h4>
                    </div>
                    <div class="mi_tabber_options_content">
                        <div class="mi_tabber_options_content_in">
                            <h4 class="choose-lapel-style">Choose your lapel Style</h4>
                            <?php
                            $si = 0;
                            foreach (getSuitCollections()->jacket_lapel_style as $k => $v) {
                                $si++;
                                if ($si == 1) {
                                    $hidden_input_values["jacket_lapel_style"] = !empty($v['name']) ? $v['name'] : '';
                                    $hidden_input_values["jacket_lapel_style_part_img"] = !empty($v['part_img']) ? $v['part_img'] : '';
                                }
                            ?>
                                <div class="tabber_option">
                                    <div class="tabber_option_item jacket-lapel_style-item <?= $si == 1 ? 'selected' : ''; ?>" jacket-lapel_style-name="<?= !empty($v['name']) ? $v['name'] : ''; ?>" jacket-lapel_style-part_img="<?= !empty($v['part_img']) ? $v['part_img'] : ''; ?>">
                                        <img src="<?= !empty($v['image']) ? $v['image'] : ''; ?>">
                                        <div class="tabber_option_text">
                                            <div class="fab_name"><?= !empty($v['name']) ? $v['name'] : ''; ?></div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>

                            <h4 class="choose-lapel-buttonhole">Buttonhole on Lapel</h4>
                            <div class="choose--select-buttonhole">
                                <select class="form-control" y-name="buttonhole">
                                    <option value="No Buttonhole">No Buttonhole</option>
                                    <option value="With Lapel Buttonhole">With Lapel Buttonhole</option>
                                </select>
                            </div>
                            <h4 class="choose-lapel-width-title">Choose Your "Lapel Width" Here</h4>
                            <?php
                            $si = 0;
                            foreach (getSuitCollections()->jacket_lapel_width as $k => $v) {
                                $si++;
                                if ($si == 2) {
                                    $hidden_input_values["jacket_lapel_width"] = !empty($v['name']) ? $v['name'] : '';
                                    $hidden_input_values["jacket_lapel_width_part_img"] = !empty($v['Peak_Lapel_img']) ? $v['Peak_Lapel_img'] : '';
                                }
                            ?>
                                <div class="tabber_option">
                                    <div class="tabber_option_item jacket-lapel_width-item <?= $si == 2 ? 'selected' : ''; ?>" jacket-lapel_width-name="<?= !empty($v['name']) ? $v['name'] : ''; ?>" jacket-lapel_width-peak_lapel_img="<?= !empty($v['Peak_Lapel_img']) ? $v['Peak_Lapel_img'] : ''; ?>" jacket-lapel_width-notch_lapel_img="<?= !empty($v['Notch_Lapel_img']) ? $v['Notch_Lapel_img'] : ''; ?>" jacket-lapel_width-round_notch_img="<?= !empty($v['Round_Notch_img']) ? $v['Round_Notch_img'] : ''; ?>" jacket-lapel_width-shawl_lapel_img="<?= !empty($v['Shawl_Lapel_img']) ? $v['Shawl_Lapel_img'] : ''; ?>">
                                        <img src="<?= !empty($v['image']) ? $v['image'] : ''; ?>">
                                        <div class="tabber_option_text">
                                            <div class="fab_name"><?= !empty($v['name']) ? $v['name'] : ''; ?></div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>


                        </div>
                    </div>
                    <div class="mi_tabber_options_footer">
                        <span class="mi_tabber_options_next" z-name="jacket-lapel">Next</span>
                    </div>
                </div>
                <div class="mi_tabber_options" y-name="jacket-bottom">
                    <div class="mi_tabber_options_header">
                        <h4>Bottom
                            <div class="close-box">
                                <span></span>
                                <span></span>
                            </div>
                        </h4>
                    </div>
                    <div class="mi_tabber_options_content">
                        <div class="mi_tabber_options_content_in">
                            <h4 class="jacket-bottom-heading">Choose your Bottom</h4>
                            <?php
                            $si = 0;
                            foreach (getSuitCollections()->jacket_bottom as $k => $v) {
                                $si++;
                                if ($si == 1) {
                                    $hidden_input_values["jacket_bottom"] = !empty($v['name']) ? $v['name'] : '';
                                    $hidden_input_values["jacket_bottom_part_img"] = !empty($v['part_img']) ? $v['part_img'] : '';
                                }
                            ?>
                                <div class="tabber_option">
                                    <div class="tabber_option_item jacket-bottom-item <?= $si == 1 ? 'selected' : ''; ?>" jacket-bottom-name="<?= !empty($v['name']) ? $v['name'] : ''; ?>" jacket-bottom-part_img="<?= !empty($v['part_img']) ? $v['part_img'] : ''; ?>">
                                        <img src="<?= !empty($v['image']) ? $v['image'] : ''; ?>">
                                        <div class="tabber_option_text">
                                            <div class="fab_name"><?= !empty($v['name']) ? $v['name'] : ''; ?></div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="mi_tabber_options_footer">
                        <span class="mi_tabber_options_next" z-name="jacket-bottom">Next</span>
                    </div>
                </div>
                <div class="mi_tabber_options" y-name="jacket-pockets">
                    <div class="mi_tabber_options_header">
                        <h4>Pockets
                            <div class="close-box">
                                <span></span>
                                <span></span>
                            </div>
                        </h4>
                    </div>
                    <div class="mi_tabber_options_content">
                        <div class="mi_tabber_options_content_in">
                            <h4 class="jacket-pocket-heading">Choose your pocket</h4>
                            <?php
                            $si = 0;
                            foreach (getSuitCollections()->jacket_pockets as $k => $v) {
                                $si++;
                                if ($si == 1) {
                                    $hidden_input_values["jacket_pockets"] = !empty($v['name']) ? $v['name'] : '';
                                    $hidden_input_values["jacket_pockets_part_img"] = !empty($v['part_img']) ? $v['part_img'] : '';
                                }
                            ?>
                                <div class="tabber_option">
                                    <div class="tabber_option_item jacket-pockets-item <?= $si == 1 ? 'selected' : ''; ?>" jacket-pockets-name="<?= !empty($v['name']) ? $v['name'] : ''; ?>" jacket-pockets-part_img="<?= !empty($v['part_img']) ? $v['part_img'] : ''; ?>">
                                        <img src="<?= !empty($v['image']) ? $v['image'] : ''; ?>">
                                        <div class="tabber_option_text">
                                            <div class="fab_name"><?= !empty($v['name']) ? $v['name'] : ''; ?></div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="pocket-section-select">
                            <select class="form-control" y-name="jacket_pocket_side">
                                <option value="No Breast Pocket">No Breast Pocket</option>
                                <option value="Breast Pocket">Breast Pocket</option>
                            </select>
                        </div>
                    </div>
                    <div class="mi_tabber_options_footer">
                        <span class="mi_tabber_options_next" z-name="jacket-pockets">Next</span>
                    </div>
                </div>
                <div class="mi_tabber_options" y-name="jacket-sleeve-button">
                    <div class="mi_tabber_options_header">
                        <h4>Sleeve Button
                            <div class="close-box">
                                <span></span>
                                <span></span>
                            </div>
                        </h4>
                    </div>
                    <div class="mi_tabber_options_content">
                        <div class="mi_tabber_options_content_in">
                            <?php
                            $si = 0;
                            foreach (getSuitCollections()->jacket_sleeves_button as $k => $v) {
                                $si++;
                                if ($si == 1) {
                                    $hidden_input_values["jacket_sleeves_button"] = !empty($v['name']) ? $v['name'] : '';
                                    $hidden_input_values["jacket_sleeves_button_part_img"] = !empty($v['part_img']) ? $v['part_img'] : '';
                                }
                            ?>
                                <div class="tabber_option">
                                    <div class="tabber_option_item jacket-sleeves_button-item <?= $si == 1 ? 'selected' : ''; ?>" jacket-sleeves_button-name="<?= !empty($v['name']) ? $v['name'] : ''; ?>" jacket-sleeves_button-part_img="<?= !empty($v['part_img']) ? $v['part_img'] : ''; ?>">
                                        <img src="<?= !empty($v['image']) ? $v['image'] : ''; ?>">
                                        <div class="tabber_option_text">
                                            <div class="fab_name"><?= !empty($v['name']) ? $v['name'] : ''; ?></div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="mi_tabber_options_footer">
                        <span class="mi_tabber_options_next" z-name="jacket-sleeve-button">Next</span>
                    </div>
                </div>
                <div class="mi_tabber_options" y-name="jacket-vent">
                    <div class="mi_tabber_options_header">
                        <h4>Vent
                            <div class="close-box">
                                <span></span>
                                <span></span>
                            </div>
                        </h4>
                    </div>
                    <div class="mi_tabber_options_content">
                        <div class="mi_tabber_options_content_in">
                            <?php
                            $si = 0;
                            foreach (getSuitCollections()->jacket_sleeves_vent as $k => $v) {
                                $si++;
                                if ($si == 1) {
                                    $hidden_input_values["jacket_sleeves_vent"] = !empty($v['name']) ? $v['name'] : '';
                                    $hidden_input_values["jacket_sleeves_vent_part_img"] = !empty($v['part_img']) ? $v['part_img'] : '';
                                }
                            ?>
                                <div class="tabber_option">
                                    <div class="tabber_option_item jacket-sleeves_vent-item <?= $si == 1 ? 'selected' : ''; ?>" jacket-sleeves_vent-name="<?= !empty($v['name']) ? $v['name'] : ''; ?>" jacket-sleeves_vent-part_img="<?= !empty($v['part_img']) ? $v['part_img'] : ''; ?>">
                                        <img src="<?= !empty($v['image']) ? $v['image'] : ''; ?>">
                                        <div class="tabber_option_text">
                                            <div class="fab_name"><?= !empty($v['name']) ? $v['name'] : ''; ?></div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="mi_tabber_options_footer">
                        <span class="mi_tabber_options_next" z-name="jacket-vent">Next</span>
                    </div>
                </div>

                <div class="mi_tabber_options" y-name="pant-style">
                    <div class="mi_tabber_options_header">
                        <h4>Style
                            <div class="close-box">
                                <span></span>
                                <span></span>
                            </div>
                        </h4>
                    </div>
                    <div class="mi_tabber_options_content">
                        <div class="mi_tabber_options_content_in">
                            <?php
                            $si = 0;
                            foreach (getSuitCollections()->pant_style as $k => $v) {
                                $si++;
                                if ($si == 1) {
                                    $hidden_input_values["pant_style"] = !empty($v['name']) ? $v['name'] : '';
                                    $hidden_input_values["pant_style_part_img"] = !empty($v['part_img']) ? $v['part_img'] : '';
                                }
                            ?>
                                <div class="tabber_option">
                                    <div class="tabber_option_item pant-style-item <?= $si == 1 ? 'selected' : ''; ?>" pant-style-name="<?= !empty($v['name']) ? $v['name'] : ''; ?>" pant-style-part_img="<?= !empty($v['part_img']) ? $v['part_img'] : ''; ?>">
                                        <img src="<?= !empty($v['image']) ? $v['image'] : ''; ?>">
                                        <div class="tabber_option_text">
                                            <div class="fab_name"><?= !empty($v['name']) ? $v['name'] : ''; ?></div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="mi_tabber_options_footer">
                        <span class="mi_tabber_options_next" z-name="pant-style">Next</span>
                    </div>
                </div>


                <div class="mi_tabber_options" y-name="pant-pleat">
                    <div class="mi_tabber_options_header">
                        <h4>Pleat
                            <div class="close-box">
                                <span></span>
                                <span></span>
                            </div>
                        </h4>
                    </div>
                    <div class="mi_tabber_options_content">
                        <div class="mi_tabber_options_content_in">
                            <?php
                            $si = 0;
                            foreach (getSuitCollections()->pant_pleat as $k => $v) {
                                $si++;
                                if ($si == 1) {
                                    $hidden_input_values["pant_pleat"] = !empty($v['name']) ? $v['name'] : '';
                                    $hidden_input_values["pant_pleat_part_img"] = !empty($v['part_img']) ? $v['part_img'] : '';
                                }
                            ?>
                                <div class="tabber_option">
                                    <div class="tabber_option_item pant-pleat-item <?= $si == 1 ? 'selected' : ''; ?>" pant-pleat-name="<?= !empty($v['name']) ? $v['name'] : ''; ?>" pant-pleat-part_img="<?= !empty($v['part_img']) ? $v['part_img'] : ''; ?>">
                                        <img src="<?= !empty($v['image']) ? $v['image'] : ''; ?>">
                                        <div class="tabber_option_text">
                                            <div class="fab_name"><?= !empty($v['name']) ? $v['name'] : ''; ?></div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="mi_tabber_options_footer">
                        <span class="mi_tabber_options_next" z-name="pant-pleat">Next</span>
                    </div>
                </div>


                <div class="mi_tabber_options" y-name="pant-pant-pocket">
                    <div class="mi_tabber_options_header">
                        <h4>Pant Pocket
                            <div class="close-box">
                                <span></span>
                                <span></span>
                            </div>
                        </h4>
                    </div>
                    <div class="mi_tabber_options_content">
                        <div class="mi_tabber_options_content_in">
                            <?php
                            $si = 0;
                            foreach (getSuitCollections()->pant_pockets as $k => $v) {
                                $si++;
                                if ($si == 1) {
                                    $hidden_input_values["pant_pockets"] = !empty($v['name']) ? $v['name'] : '';
                                    $hidden_input_values["pant_pockets_part_img"] = !empty($v['part_img']) ? $v['part_img'] : '';
                                }
                            ?>
                                <div class="tabber_option">
                                    <div class="tabber_option_item pant-pockets-item <?= $si == 1 ? 'selected' : ''; ?>" pant-pockets-name="<?= !empty($v['name']) ? $v['name'] : ''; ?>" pant-pockets-part_img="<?= !empty($v['part_img']) ? $v['part_img'] : ''; ?>">
                                        <img src="<?= !empty($v['image']) ? $v['image'] : ''; ?>">
                                        <div class="tabber_option_text">
                                            <div class="fab_name"><?= !empty($v['name']) ? $v['name'] : ''; ?></div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="mi_tabber_options_footer">
                        <span class="mi_tabber_options_next" z-name="pant-pant-pocket">Next</span>
                    </div>
                </div>


                <div class="mi_tabber_options" y-name="pant-back-pockets">
                    <div class="mi_tabber_options_header">
                        <h4>Back Pockets
                            <div class="close-box">
                                <span></span>
                                <span></span>
                            </div>
                        </h4>
                    </div>
                    <div class="mi_tabber_options_content">
                        <div class="mi_tabber_options_content_in">
                            <?php
                            $si = 0;
                            foreach (getSuitCollections()->pant_back_pockets as $k => $v) {
                                $si++;
                                if ($si == 1) {
                                    $hidden_input_values["pant_back_pockets"] = !empty($v['name']) ? $v['name'] : '';
                                    $hidden_input_values["pant_back_pockets_part_img"] = !empty($v['part_img']) ? $v['part_img'] : '';
                                }
                            ?>
                                <div class="tabber_option">
                                    <div class="tabber_option_item pant-back-pockets-item <?= $si == 1 ? 'selected' : ''; ?>" pant-back-pockets-name="<?= !empty($v['name']) ? $v['name'] : ''; ?>" pant-back-pockets-part_img="<?= !empty($v['part_img']) ? $v['part_img'] : ''; ?>">
                                        <img src="<?= !empty($v['image']) ? $v['image'] : ''; ?>">
                                        <div class="tabber_option_text">
                                            <div class="fab_name"><?= !empty($v['name']) ? $v['name'] : ''; ?></div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="mi_tabber_options_footer">
                        <span class="mi_tabber_options_next" z-name="pant-back-pockets">Next</span>
                    </div>
                </div>


                <div class="mi_tabber_options" y-name="pant-belt-loops">
                    <div class="mi_tabber_options_header">
                        <h4>Belt Loops
                            <div class="close-box">
                                <span></span>
                                <span></span>
                            </div>
                        </h4>
                    </div>
                    <div class="mi_tabber_options_content">
                        <div class="mi_tabber_options_content_in">
                            <?php
                            $si = 0;
                            foreach (getSuitCollections()->pant_belt_loop as $k => $v) {
                                $si++;
                                if ($si == 1) {
                                    $hidden_input_values["pant_belt_loop"] = !empty($v['name']) ? $v['name'] : '';
                                    $hidden_input_values["pant_belt_loop_part_img"] = !empty($v['part_img']) ? $v['part_img'] : '';
                                }
                            ?>
                                <div class="tabber_option">
                                    <div class="tabber_option_item pant-belt_loop-item <?= $si == 1 ? 'selected' : ''; ?>" pant-belt_loop-name="<?= !empty($v['name']) ? $v['name'] : ''; ?>" pant-belt_loop-part_img="<?= !empty($v['part_img']) ? $v['part_img'] : ''; ?>">
                                        <img src="<?= !empty($v['image']) ? $v['image'] : ''; ?>">
                                        <div class="tabber_option_text">
                                            <div class="fab_name"><?= !empty($v['name']) ? $v['name'] : ''; ?></div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="mi_tabber_options_footer">
                        <span class="mi_tabber_options_next" z-name="pant-belt-loops">Next</span>
                    </div>
                </div>


                <div class="mi_tabber_options" y-name="pant-cuffs">
                    <div class="mi_tabber_options_header">
                        <h4>Cuffs
                            <div class="close-box">
                                <span></span>
                                <span></span>
                            </div>
                        </h4>
                    </div>
                    <div class="mi_tabber_options_content">
                        <div class="mi_tabber_options_content_in">
                            <?php
                            $si = 0;
                            foreach (getSuitCollections()->pant_cuffs as $k => $v) {
                                $si++;
                                if ($si == 1) {
                                    $hidden_input_values["pant_cuffs"] = !empty($v['name']) ? $v['name'] : '';
                                    $hidden_input_values["pant_cuffs_part_img"] = !empty($v['part_img']) ? $v['part_img'] : '';
                                }
                            ?>
                                <div class="tabber_option">
                                    <div class="tabber_option_item pant-cuffs-item <?= $si == 1 ? 'selected' : ''; ?>" pant-cuffs-name="<?= !empty($v['name']) ? $v['name'] : ''; ?>" pant-cuffs-part_img="<?= !empty($v['part_img']) ? $v['part_img'] : ''; ?>">
                                        <img src="<?= !empty($v['image']) ? $v['image'] : ''; ?>">
                                        <div class="tabber_option_text">
                                            <div class="fab_name"><?= !empty($v['name']) ? $v['name'] : ''; ?></div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="mi_tabber_options_footer">
                        <span class="mi_tabber_options_next" z-name="pant-cuffs">Next</span>
                    </div>
                </div>

                <div class="mi_tabber_options" y-name="monogram">
                    <div class="mi_tabber_options_header">
                        <h4>Monogram
                            <div class="close-box">
                                <span></span>
                                <span></span>
                            </div>
                        </h4>
                    </div>
                    <div class="mi_tabber_options_content">
                        <div class="mi_tabber_options_content_in">
                            <?php
                            $si = 0;
                            foreach (getShirtCollections()->monogram as $k => $v) {
                                $si++;
                                if ($si == 1) {
                                    $hidden_input_values["monogram_place"] = !empty($v['name']) ? $v['name'] : '';
                                    $hidden_input_values["monogram_text"] = '';
                                    $hidden_input_values["monogram_font_style"] = '';
                                }

                            ?>
                                <div class="tabber_option">
                                    <div class="tabber_option_item monogram-item <?= $si == 1 ? 'selected' : ''; ?>" monogram-name="<?= !empty($v['name']) ? $v['name'] : ''; ?>">
                                        <div class="tabber_option_text">
                                            <div class="fab_name"><?= !empty($v['name']) ? $v['name'] : ''; ?></div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>

                        </div>
                        <div class="font-style-section">
                            <select class="font-control" name="font_style">
                                <option value="Arial">Arial</option>
                                <option value="Verdana">Verdana</option>
                                <option value="Times New Roman">Times New Roman</option>
                                <option value="Helvetica">Helvetica</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Courier New">Courier New</option>
                                <option value="Tahoma">Tahoma</option>
                                <option value="Trebuchet MS">Trebuchet MS</option>
                                <option value="Arial Narrow">Arial Narrow</option>
                                <option value="Garamond">Garamond</option>
                                <option value="Palatino">Palatino</option>
                                <option value="Book Antiqua">Book Antiqua</option>
                                <option value="Century Gothic">Century Gothic</option>
                                <option value="Lucida Sans">Lucida Sans</option>
                                <option value="Impact">Impact</option>
                                <option value="Arial Black">Arial Black</option>
                                <option value="Comic Sans MS">Comic Sans MS</option>
                                <option value="Lucida Console">Lucida Console</option>
                                <option value="Candara">Candara</option>
                                <option value="Franklin Gothic Medium">Franklin Gothic Medium</option>
                            </select>
                        </div>
                        <div class="input-text-section">
                            <input type="text" class="form-control" name="monogram_input">
                        </div>
                        <div class="input-text-section">
                            <input type="color" class="form-control" name="monogram_color">
                        </div>
                    </div>
                    <div class="mi_tabber_options_footer">
                        <span class="mi_tabber_options_next" z-name="monogram">Next</span>
                    </div>
                </div>


                <div class="mi_tabber_options" y-name="measurement">
                    <div class="mi_tabber_options_header">
                        <h4>Measurement
                            <div class="close-box">
                                <span></span>
                                <span></span>
                            </div>
                        </h4>
                    </div>
                    <div class="mi_tabber_options_content">
                        <div class="mi_tabber_options_content_in">
                            <div class="tabber_option">
                                <div class="tabber_option_item measurement-item" measurement-name="Standard Sizes">
                                    <div class="tabber_option_text">
                                        <div class="fab_name">Standard Sizes</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tabber_option">
                                <div class="tabber_option_item measurement-item" measurement-name="Body Size">
                                    <div class="tabber_option_text">
                                        <div class="fab_name">Body Size</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mi_tabber_options_footer">
                        <span class="mi_tabber_options_next" z-name="measurement">Next</span>
                    </div>
                </div>


                <div class="preview-item">
                    <div class="front-img">
                        <!-- <img src="http://devt56.sg-host.com/wp-content/uploads/2024/04/shirt-img1.png"> -->
                        <div id="canvas-container">
                            <canvas id="shirt-canvas" width="500" height="600"></canvas>
                        </div>
                        <div id="measurement-container">
                            <div class="standard-sizes" style="display:none;">
                                <div class="measurement-header">
                                    <h4>Standard Sizes</h4>
                                </div>
                                <div class="measurement-body">
                                    <div class="measurement-unit">
                                        <div class="measurement-unit-label">Enter Your Measurement:</div>
                                        <div class="measurement-unit-control">
                                            <select class="form-control" name="standard_unint">
                                                <option value="inch">Inch</option>
                                                <option value="cm">cm</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="measurement-table">
                                        <table class="table standard-table-to-inch">
                                            <tr>
                                                <th>Size</th>
                                                <th>S</th>
                                                <th>M</th>
                                                <th>L</th>
                                                <th>XL</th>
                                                <th>XXL</th>
                                                <th>3XL</th>
                                                <th>4XL</th>
                                            </tr>
                                            <tr>
                                                <td>Neck</td>
                                                <td neck-size="S">15</td>
                                                <td neck-size="M">16</td>
                                                <td neck-size="L">16.5</td>
                                                <td neck-size="XL">17</td>
                                                <td neck-size="XXL">18</td>
                                                <td neck-size="3XL">19</td>
                                                <td neck-size="4XL">20</td>
                                            </tr>
                                            <tr>
                                                <td>Chest</td>
                                                <td chest-size="S">41.75</td>
                                                <td chest-size="M">44.5</td>
                                                <td chest-size="L">47.5</td>
                                                <td chest-size="XL">49.5</td>
                                                <td chest-size="XXL">52</td>
                                                <td chest-size="3XL">55</td>
                                                <td chest-size="4XL">58</td>
                                            </tr>
                                        </table>
                                        <table class="table standard-table-to-cm" style="display:none;">
                                            <tr>
                                                <th>Size</th>
                                                <th>S</th>
                                                <th>M</th>
                                                <th>L</th>
                                                <th>XL</th>
                                                <th>XXL</th>
                                                <th>3XL</th>
                                                <th>4XL</th>
                                            </tr>
                                            <tr>
                                                <td>Neck</td>
                                                <td neck-size="S">37.5</td>
                                                <td neck-size="M">40</td>
                                                <td neck-size="L">42</td>
                                                <td neck-size="XL">44</td>
                                                <td neck-size="XXL">46</td>
                                                <td neck-size="3XL">48.25</td>
                                                <td neck-size="4XL">51</td>

                                            </tr>
                                            <tr>
                                                <td>Chest</td>
                                                <td chest-size="S">106</td>
                                                <td chest-size="M">113</td>
                                                <td chest-size="L">121</td>
                                                <td chest-size="XL">126</td>
                                                <td chest-size="XXL">132</td>
                                                <td chest-size="3XL">140</td>
                                                <td chest-size="4XL">148</td>
                                            </tr>
                                        </table>
                                    </div>

                                    <div class="measurement-size">
                                        <div class="measurement-size-label">Select Your Size:</div>
                                        <div class="measurement-size-control">
                                            <select class="form-control" name="standard_size">
                                                <option value="S">S</option>
                                                <option value="M">M</option>
                                                <option value="L">L</option>
                                                <option value="XL">XL</option>
                                                <option value="XXL">XXL</option>
                                                <option value="3XL">3XL</option>
                                                <option value="4XL">4XL</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="measurement-qty">
                                        <div class="measurement-qty-label">Select Your Quantity:</div>
                                        <div class="measurement-qty-control">
                                            <select class="form-control" name="standard_qty">
                                                <?php
                                                for ($i = 1; $i <= 100; $i++) { ?>
                                                    <option value="<?= $i; ?>"><?= $i; ?></option>
                                                <?php }
                                                ?>

                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="measurement-add-to-cart">
                                    <button type="button" class="add-to-cart">Add To Cart</button>
                                </div>
                            </div>
                            <div class="body-size" style="display:none;">
                                <div class="measurement-header">
                                    <h4>Your Body Size</h4>
                                </div>
                                <div class="measurement-body">
                                    <div class="measurement-unit">
                                        <div class="measurement-unit-label">Enter Your Measurement:</div>
                                        <div class="measurement-unit-control">
                                            <select class="form-control" name="body_unit">
                                                <option value="inch">Inch</option>
                                                <option value="cm">cm</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="measurement-fit">
                                        <div class="measurement-unit-label">Select Your Fit:</div>
                                        <div class="measurement-unit-control">
                                            <select class="form-control" name="body_fit">
                                                <option value="Signature Standard Fit">Signature Standard Fit</option>
                                                <option value="Euro Slim Fit">Euro Slim Fit</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="measurement-table">
                                        <div class=""><span>Shirt:</span>
                                            <div class="errors" style="color:red;"></div>
                                        </div>
                                        <table class="table body-table-to-inch">
                                            <tr>
                                                <th>Neck</th>
                                                <th>Chest</th>
                                                <th>Stomach</th>
                                                <th>Hip</th>
                                                <th>Length</th>
                                                <th>Shoulder</th>
                                                <th>Sleeve</th>
                                            </tr>
                                            <tr>
                                                <td><input type="number" name="body_neck" min="9" max="23" placeholder="Neck" /></td>
                                                <td><input type="number" name="body_chest" min="28" max="75" placeholder="Chest" /></td>
                                                <td><input type="number" name="body_stomach" min="24" max="73" placeholder="Stomach" /></td>
                                                <td><input type="number" name="body_hip" min="24" max="73" placeholder="Hip" /></td>
                                                <td><input type="number" name="body_length" min="19" max="42" placeholder="Length" /></td>
                                                <td><input type="number" name="body_shoulder" min="14" max="27" placeholder="Shoulder" /></td>
                                                <td><input type="number" name="body_Sleeve" min="18" max="30" placeholder="Sleeve" /></td>
                                            </tr>
                                        </table>
                                    </div>


                                    <div class="measurement-qty">
                                        <div class="measurement-qty-label">Select Your Quantity:</div>
                                        <div class="measurement-qty-control">
                                            <select class="form-control" name="body_qty">
                                                <?php
                                                for ($i = 1; $i <= 100; $i++) { ?>
                                                    <option value="<?= $i; ?>"><?= $i; ?></option>
                                                <?php }
                                                ?>

                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="measurement-add-to-cart">
                                    <button type="button" class="add-to-cart">Add To Cart</button>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>




            <div class="product-details-box">
                <div class="pr-main-details">
                    <div class="pr-title">
                        <h1>Custom Shirt Design</h1>
                    </div>
                    <div class="pr-info">
                        <input type="hidden" name="fabric" value="<?= !empty($hidden_input_values['fabric']) ? $hidden_input_values['fabric'] : '' ?>">
                        <input type="hidden" name="jacket_style" value="<?= !empty($hidden_input_values['jacket_style']) ? $hidden_input_values['jacket_style'] : '' ?>">
                        <input type="hidden" name="jacket_style_part_img" value="<?= !empty($hidden_input_values['jacket_style_part_img']) ? $hidden_input_values['jacket_style_part_img'] : '' ?>">


                        <input type="hidden" name="jacket_lapel_style" value="<?= !empty($hidden_input_values['jacket_lapel_style']) ? $hidden_input_values['jacket_lapel_style'] : '' ?>">
                        <input type="hidden" name="jacket_lapel_style_part_img" value="<?= !empty($hidden_input_values['jacket_lapel_style_part_img']) ? $hidden_input_values['jacket_lapel_style_part_img'] : '' ?>">



                        <input type="hidden" name="jacket_lapel_buttonhole" value="No Buttonhole">
                        <input type="hidden" name="jacket_lapel_width" value="<?= !empty($hidden_input_values['jacket_lapel_width']) ? $hidden_input_values['jacket_lapel_width'] : '' ?>">
                        <!-- <input type="hidden" name="jacket_lapel_width_part_img" value=""> -->



                        <input type="hidden" name="jacket_bottom" value="<?= !empty($hidden_input_values['jacket_bottom']) ? $hidden_input_values['jacket_bottom'] : '' ?>">
                        <input type="hidden" name="jacket_bottom_part_img" value="<?= !empty($hidden_input_values['jacket_bottom_part_img']) ? $hidden_input_values['jacket_bottom_part_img'] : '' ?>">



                        <input type="hidden" name="jacket_pockets" value="<?= !empty($hidden_input_values['jacket_pockets']) ? $hidden_input_values['jacket_pockets'] : '' ?>">
                        <input type="hidden" name="jacket_pockets_part_img" value="<?= !empty($hidden_input_values['jacket_pockets_part_img']) ? $hidden_input_values['jacket_pockets_part_img'] : '' ?>">



                        <input type="hidden" name="jacket_pocket_side" value="No Breast Pocket">

                        <input type="hidden" name="jacket_sleeves_button" value="<?= !empty($hidden_input_values['jacket_sleeves_button']) ? $hidden_input_values['jacket_sleeves_button'] : '' ?>">
                        <input type="hidden" name="jacket_sleeves_button_part_img" value="<?= !empty($hidden_input_values['jacket_sleeves_button_part_img']) ? $hidden_input_values['jacket_sleeves_button_part_img'] : '' ?>">



                        <input type="hidden" name="jacket_sleeves_vent" value="<?= !empty($hidden_input_values['jacket_sleeves_vent']) ? $hidden_input_values['jacket_sleeves_vent'] : '' ?>">
                        <input type="hidden" name="pant_style" value="<?= !empty($hidden_input_values['pant_style']) ? $hidden_input_values['pant_style'] : '' ?>">
                        <input type="hidden" name="pant_pleat" value="<?= !empty($hidden_input_values['pant_pleat']) ? $hidden_input_values['pant_pleat'] : '' ?>">
                        <input type="hidden" name="pant_pockets" value="<?= !empty($hidden_input_values['pant_pockets']) ? $hidden_input_values['pant_pockets'] : '' ?>">
                        <input type="hidden" name="pant_back_pockets" value="<?= !empty($hidden_input_values['pant_back_pockets']) ? $hidden_input_values['pant_back_pockets'] : '' ?>">
                        <input type="hidden" name="pant_belt_loop" value="<?= !empty($hidden_input_values['pant_belt_loop']) ? $hidden_input_values['pant_belt_loop'] : '' ?>">
                        <input type="hidden" name="pant_cuffs" value="<?= !empty($hidden_input_values['pant_cuffs']) ? $hidden_input_values['pant_cuffs'] : '' ?>">


















                        <input type="hidden" name="monogram_place" value="<?= !empty($hidden_input_values['monogram_place']) ? $hidden_input_values['monogram_place'] : '' ?>">
                        <input type="hidden" name="monogram_text" value="<?= !empty($hidden_input_values['monogram_text']) ? $hidden_input_values['monogram_text'] : '' ?>">
                        <input type="hidden" name="monogram_font_style" value="<?= !empty($hidden_input_values['monogram_font_style']) ? $hidden_input_values['monogram_font_style'] : '' ?>">
                        <input type="hidden" name="monogram_color" value="#000">
                        <input type="hidden" name="monogram_price" value="<?= !empty($hidden_input_values['monogram_price']) ? $hidden_input_values['monogram_price'] : '' ?>">
                        <input type="hidden" name="fabric_price" value="<?= !empty($hidden_input_values['fabric_price']) ? $hidden_input_values['fabric_price'] : '' ?>">


                        <input type="hidden" name="measurement_type" value="Standard Sizes">
                        <img name="final_generated_img" src="" id="final_generated_img" style="display:none;">
                        <!---For Loading Images-->
                        <input type="hidden" name="fabric_img" value="<?= !empty($hidden_input_values['fabric_img']) ? $hidden_input_values['fabric_img'] : '' ?>">

                        <ul class="custom-details-list">
                            <li><strong>Fabric</strong>: <span class="fabric"><?= !empty($hidden_input_values['fabric_name']) ? $hidden_input_values['fabric_name'] : '' ?></span></li>
                            <li>
                                <div class="custom-details-heading">Jacket</div>
                            </li>
                            <li><strong>Style</strong>: <span class="jacket_style"><?= !empty($hidden_input_values['jacket_style']) ? $hidden_input_values['jacket_style'] : '' ?></span></li>
                            <li><strong>Lapel Style</strong>: <span class="jacket_lapel_Style"><?= !empty($hidden_input_values['jacket_lapel_style']) ? $hidden_input_values['jacket_lapel_style'] : '' ?></span></li>
                            <li><strong>Lapel Buttonhole</strong>: <span class="jacket_lapel_buttonhole">No Buttonhole</span></li>
                            <li><strong>Lapel Width</strong>: <span class="jacket_lapel_width"><?= !empty($hidden_input_values['jacket_lapel_width']) ? $hidden_input_values['jacket_lapel_width'] : '' ?></span></li>
                            <li><strong>Lapel Width</strong>: <span class="jacket_bottom"><?= !empty($hidden_input_values['jacket_bottom']) ? $hidden_input_values['jacket_bottom'] : '' ?></span></li>
                            <li><strong>Pockets</strong>: <span class="jacket_pockets"><?= !empty($hidden_input_values['jacket_pockets']) ? $hidden_input_values['jacket_pockets'] : '' ?></span></li>
                            <li><strong>Pockets</strong>: <span class="jacket_pocket_side">No Breast Pocket</span></li>
                            <li><strong>Sleeve Button</strong>: <span class="jacket_sleeves_button"><?= !empty($hidden_input_values['jacket_sleeves_button']) ? $hidden_input_values['jacket_sleeves_button'] : '' ?></span></li>
                            <li><strong>Vent</strong>: <span class="jacket_sleeves_vent"><?= !empty($hidden_input_values['jacket_sleeves_vent']) ? $hidden_input_values['jacket_sleeves_vent'] : '' ?></span></li>
                            <li>
                                <div class="custom-details-heading">Pant</div>
                            </li>
                            <li><strong>Style</strong>: <span class="pant_style"><?= !empty($hidden_input_values['pant_style']) ? $hidden_input_values['pant_style'] : '' ?></span></li>
                            <li><strong>Pleat</strong>: <span class="pant_pleat"><?= !empty($hidden_input_values['pant_pleat']) ? $hidden_input_values['pant_pleat'] : '' ?></span></li>
                            <li><strong>Pocket</strong>: <span class="pant_pockets"><?= !empty($hidden_input_values['pant_pockets']) ? $hidden_input_values['pant_pockets'] : '' ?></span></li>
                            <li><strong>Back Pocket</strong>: <span class="pant_back_pockets"><?= !empty($hidden_input_values['pant_back_pockets']) ? $hidden_input_values['pant_back_pockets'] : '' ?></span></li>
                            <li><strong>Belt Loop</strong>: <span class="pant_belt_loop"><?= !empty($hidden_input_values['pant_belt_loop']) ? $hidden_input_values['pant_belt_loop'] : '' ?></span></li>
                            <li><strong>Cuffs</strong>: <span class="pant_cuffs"><?= !empty($hidden_input_values['pant_cuffs']) ? $hidden_input_values['pant_cuffs'] : '' ?></span></li>



                            <li><strong>Total Amount</strong>: <span class="fabric_price">$<?= !empty($hidden_input_values['fabric_price']) ? $hidden_input_values['fabric_price'] : '' ?></span></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php get_footer(); ?>