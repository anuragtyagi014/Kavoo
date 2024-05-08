<?php
// Template Name: Shirt Builder
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
                        <li class="mi_choose">
                            <a href="javascript:void(0);" class="mi_tabber" x-name="sleeves">
                                <img src="http://devt56.sg-host.com/wp-content/uploads/2024/04/sleeve-long-1.png" class="img-thumbnail img-fluid">
                                Sleeves
                            </a>
                        </li>
                        <li class="mi_choose">
                            <a href="#" class="mi_tabber" x-name="collars">
                                <img src="http://devt56.sg-host.com/wp-content/uploads/2024/04/bottom_down_collar.png" class="img-thumbnail img-fluid">
                                Collars
                            </a>
                        </li>
                        <li class="mi_choose">
                            <a href="#" class="mi_tabber" x-name="cuffs">
                                <img src="http://devt56.sg-host.com/wp-content/uploads/2024/04/cuff-icon.png" class="img-thumbnail img-fluid">
                                Cuff
                            </a>
                        </li>
                        <li class="mi_choose">
                            <a href="#" class="mi_tabber" x-name="pockets">
                                <img src="http://devt56.sg-host.com/wp-content/uploads/2024/04/pocket-icon.png" class="img-thumbnail img-fluid">
                                Pocket
                            </a>
                        </li>
                        <li class="mi_choose">
                            <a href="#" class="mi_tabber" x-name="back">
                                <img src="http://devt56.sg-host.com/wp-content/uploads/2024/04/back-details-icon.png" class="img-thumbnail img-fluid">
                                Back Details
                            </a>
                        </li>
                        <li class="mi_choose">
                            <a href="#" class="mi_tabber" x-name="botton_cut">
                                <img src="http://devt56.sg-host.com/wp-content/uploads/2024/04/bottom-cut-icon.png" class="img-thumbnail img-fluid">
                                Bottom Cut
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
                <div class="mi_tabber_options" y-name="sleeves">
                    <div class="mi_tabber_options_header">
                        <h4>Sleeves
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
                            foreach (getShirtCollections()->sleeves as $k => $v) {
                                $si++;
                                if ($si == 1) {
                                    $hidden_input_values["sleeves"] = !empty($v['name']) ? $v['name'] : '';
                                    $hidden_input_values["sleeves_part_img"] = !empty($v['part_img']) ? $v['part_img'] : '';
                                    $hidden_input_values["sleeves_straight_part_img"] = !empty($v['straight_part_img']) ? $v['straight_part_img'] : '';
                                    $hidden_input_values["sleeves_straight_vents_part_img"] = !empty($v['straight_vents_part_img']) ? $v['straight_vents_part_img'] : '';
                                }

                            ?>
                                <div class="tabber_option">
                                    <div class="tabber_option_item sleeves-item <?= $si == 1 ? 'selected' : ''; ?>" sleeves-name="<?= !empty($v['name']) ? $v['name'] : ''; ?>" sleeves-part_img="<?= !empty($v['part_img']) ? $v['part_img'] : ''; ?>" sleeves-straight_part_img="<?= !empty($v['straight_part_img']) ? $v['straight_part_img'] : ''; ?>" sleeves-straight_vents_part_img="<?= !empty($v['straight_vents_part_img']) ? $v['straight_vents_part_img'] : ''; ?>">
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
                        <span class="mi_tabber_options_prev" z-name="sleeves">Prev</span>
                        <span class="mi_tabber_options_next" z-name="sleeves">Next</span>
                    </div>
                </div>
                <div class="mi_tabber_options" y-name="collars">
                    <div class="mi_tabber_options_header">
                        <h4>Collars
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
                            foreach (getShirtCollections()->collars as $k => $v) {
                                $si++;
                                if ($si == 1) {
                                    $hidden_input_values["collars"] = !empty($v['name']) ? $v['name'] : '';
                                    $hidden_input_values["collars_part_img"] = !empty($v['part_img']) ? $v['part_img'] : '';
                                }

                            ?>
                                <div class="tabber_option">
                                    <div class="tabber_option_item collars-item <?= $si == 1 ? 'selected' : ''; ?>" collars-name="<?= !empty($v['name']) ? $v['name'] : ''; ?>" collars-part_img="<?= !empty($v['part_img']) ? $v['part_img'] : ''; ?>">
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
                        <span class="mi_tabber_options_prev" z-name="collars">Prev</span>
                        <span class="mi_tabber_options_next" z-name="collars">Next</span>
                    </div>
                </div>
                <div class="mi_tabber_options" y-name="cuffs">
                    <div class="mi_tabber_options_header">
                        <h4>Cuff
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
                            foreach (getShirtCollections()->cuffs as $k => $v) {
                                $si++;
                                if ($si == 1) {
                                    $hidden_input_values["cuffs"] = !empty($v['name']) ? $v['name'] : '';
                                    $hidden_input_values["cuffs_part_img"] = !empty($v['part_img']) ? $v['part_img'] : '';
                                    $hidden_input_values["cuffs_right_part_img"] = !empty($v['right_part_img']) ? $v['right_part_img'] : '';
                                }

                            ?>
                                <div class="tabber_option">
                                    <div class="tabber_option_item cuffs-item <?= $si == 1 ? 'selected' : ''; ?>" cuffs-name="<?= !empty($v['name']) ? $v['name'] : ''; ?>" cuffs-part_img="<?= !empty($v['part_img']) ? $v['part_img'] : ''; ?>" cuffs-right_part_img="<?= !empty($v['right_part_img']) ? $v['right_part_img'] : ''; ?>">
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
                        <span class="mi_tabber_options_prev" z-name="cuffs">Prev</span>
                        <span class="mi_tabber_options_next" z-name="cuffs">Next</span>
                    </div>
                </div>
                <div class="mi_tabber_options" y-name="pockets">
                    <div class="mi_tabber_options_header">
                        <h4>Pocket
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
                            foreach (getShirtCollections()->pockets as $k => $v) {
                                $si++;
                                if ($si == 1) {
                                    $hidden_input_values["pockets"] = !empty($v['name']) ? $v['name'] : '';
                                    $hidden_input_values["pockets_left_part_img"] = !empty($v['left_part_img']) ? $v['left_part_img'] : '';
                                    $hidden_input_values["pockets_both_part_img"] = !empty($v['both_part_img']) ? $v['both_part_img'] : '';
                                }

                            ?>
                                <div class="tabber_option">
                                    <div class="tabber_option_item pockets-item <?= $si == 1 ? 'selected' : ''; ?>" pockets-name="<?= !empty($v['name']) ? $v['name'] : ''; ?>" pockets-left_part_img="<?= !empty($v['left_part_img']) ? $v['left_part_img'] : ''; ?>" pockets-both_part_img="<?= !empty($v['both_part_img']) ? $v['both_part_img'] : ''; ?>">
                                        <img src=" <?= !empty($v['image']) ? $v['image'] : ''; ?>">
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
                            <select class="form-control" y-name="pocket_side">
                                <option value="Left Side">Left Side</option>
                                <option value="Both Side">Both Side</option>
                            </select>
                        </div>
                    </div>
                    <div class="mi_tabber_options_footer">
                        <span class="mi_tabber_options_prev" z-name="pockets">Prev</span>
                        <span class="mi_tabber_options_next" z-name="pockets">Next</span>
                    </div>
                </div>
                <div class="mi_tabber_options" y-name="back">
                    <div class="mi_tabber_options_header">
                        <h4>Back Details
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
                            foreach (getShirtCollections()->back as $k => $v) {
                                $si++;
                                if ($si == 1) {
                                    $hidden_input_values["back"] = !empty($v['name']) ? $v['name'] : '';
                                    $hidden_input_values["back_part_img"] = !empty($v['part_img']) ? $v['part_img'] : '';
                                    $hidden_input_values["back_sleeves_foldable_part_img"] = !empty($v['sleeves_foldable_part_img']) ? $v['sleeves_foldable_part_img'] : '';
                                    $hidden_input_values["back_sleeves_no_sleeves_part_img"] = !empty($v['sleeves_no_sleeves_part_img']) ? $v['sleeves_no_sleeves_part_img'] : '';
                                }

                            ?>
                                <div class="tabber_option">
                                    <div class="tabber_option_item back-item <?= $si == 1 ? 'selected' : ''; ?>" back-name="<?= !empty($v['name']) ? $v['name'] : ''; ?>" back-part_img="<?= !empty($v['part_img']) ? $v['part_img'] : ''; ?>" back-sleeves_foldable_part_img="<?= !empty($v['sleeves_foldable_part_img']) ? $v['sleeves_foldable_part_img'] : ''; ?>" back-sleeves_no_sleeves_part_img="<?= !empty($v['sleeves_no_sleeves_part_img']) ? $v['sleeves_no_sleeves_part_img'] : ''; ?>">
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
                        <span class="mi_tabber_options_prev" z-name="back">Prev</span>
                        <span class="mi_tabber_options_next" z-name="back">Next</span>
                    </div>
                </div>
                <div class="mi_tabber_options" y-name="botton_cut">
                    <div class="mi_tabber_options_header">
                        <h4>Bottom Cut
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
                            foreach (getShirtCollections()->botton_cut as $k => $v) {
                                $si++;
                                if ($si == 1) {
                                    $hidden_input_values["botton_cut"] = !empty($v['name']) ? $v['name'] : '';
                                }

                            ?>
                                <div class="tabber_option">
                                    <div class="tabber_option_item botton_cut-item <?= $si == 1 ? 'selected' : ''; ?>" botton_cut-name="<?= !empty($v['name']) ? $v['name'] : ''; ?>">
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
                        <span class="mi_tabber_options_prev" z-name="botton_cut">Prev</span>
                        <span class="mi_tabber_options_next" z-name="botton_cut">Next</span>
                    </div>
                </div>
                <div class="mi_tabber_options" y-name="monogram">
                    <div class="mi_tabber_options_header">
                        <h4>Bottom Cut
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
                        <span class="mi_tabber_options_prev" z-name="monogram">Prev</span>
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
                        <span class="mi_tabber_options_prev" z-name="measurement">Prev</span>
                        <span class="mi_tabber_options_next" z-name="measurement">Next</span>
                    </div>
                </div>


                <div class="preview-item">
                    <div class="front-img">
                        <!-- <img src="http://devt56.sg-host.com/wp-content/uploads/2024/04/shirt-img1.png"> -->
                        <div id="canvas-container">
                            <canvas id="shirt-canvas" width="500" height="500"></canvas>
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
                                        <div class="body-table-to-inch variation-group-section">
                                            <div class="element-input">
                                                <label>Neck</label>
                                                <input type="number" name="body_neck" min="9" max="23" placeholder="Neck" />
                                            </div>
                                            <div class="element-input">
                                                <label>Chest</label>
                                                <input type="number" name="body_chest" min="28" max="75" placeholder="Chest" />
                                            </div>

                                            <div class="element-input">
                                                <label>Stomach</label>
                                                <input type="number" name="body_stomach" min="24" max="73" placeholder="Stomach" />
                                            </div>

                                            <div class="element-input">
                                                <label>Hip</label>
                                                <input type="number" name="body_hip" min="24" max="73" placeholder="Hip" />
                                            </div>

                                            <div class="element-input">
                                                <label>Length</label>
                                                <input type="number" name="body_length" min="19" max="42" placeholder="Length" />
                                            </div>

                                            <div class="element-input">
                                                <label>Shoulder</label>
                                                <input type="number" name="body_shoulder" min="14" max="27" placeholder="Shoulder" />
                                            </div>

                                            <div class="element-input">
                                                <label>Sleeve</label>
                                                <input type="number" name="body_Sleeve" min="18" max="30" placeholder="Sleeve" />
                                            </div>


                                        </div>

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
                        <input type="hidden" name="sleeves" value="<?= !empty($hidden_input_values['sleeves']) ? $hidden_input_values['sleeves'] : '' ?>">
                        <input type="hidden" name="sleeves_part_img" value="<?= !empty($hidden_input_values['sleeves_part_img']) ? $hidden_input_values['sleeves_part_img'] : '' ?>">
                        <input type="hidden" name="sleeves_straight_part_img" value="<?= !empty($hidden_input_values['sleeves_straight_part_img']) ? $hidden_input_values['sleeves_straight_part_img'] : '' ?>">
                        <input type="hidden" name="sleeves_straight_vents_part_img" value="<?= !empty($hidden_input_values['sleeves_straight_vents_part_img']) ? $hidden_input_values['sleeves_straight_vents_part_img'] : '' ?>">


                        <input type="hidden" name="collars" value="<?= !empty($hidden_input_values['collars']) ? $hidden_input_values['collars'] : '' ?>">
                        <input type="hidden" name="collars_part_img" value="<?= !empty($hidden_input_values['collars_part_img']) ? $hidden_input_values['collars_part_img'] : '' ?>">



                        <input type="hidden" name="cuffs" value="<?= !empty($hidden_input_values['cuffs']) ? $hidden_input_values['cuffs'] : '' ?>">
                        <input type="hidden" name="cuffs_part_img" value="<?= !empty($hidden_input_values['cuffs_part_img']) ? $hidden_input_values['cuffs_part_img'] : '' ?>">
                        <input type="hidden" name="cuffs_right_part_img" value="<?= !empty($hidden_input_values['cuffs_right_part_img']) ? $hidden_input_values['cuffs_right_part_img'] : '' ?>">




                        <input type="hidden" name="pockets" value="<?= !empty($hidden_input_values['pockets']) ? $hidden_input_values['pockets'] : '' ?>">
                        <input type="hidden" name="pocket_side" value="Left Side">
                        <input type="hidden" name="pockets_left_part_img" value="<?= !empty($hidden_input_values['pockets_left_part_img']) ? $hidden_input_values['pockets_left_part_img'] : '' ?>">
                        <input type="hidden" name="pockets_both_part_img" value="<?= !empty($hidden_input_values['pockets_both_part_img']) ? $hidden_input_values['pockets_both_part_img'] : '' ?>">


                        <input type="hidden" name="back" value="<?= !empty($hidden_input_values['back']) ? $hidden_input_values['back'] : '' ?>">
                        <input type="hidden" name="back_part_img" value="<?= !empty($hidden_input_values['back_part_img']) ? $hidden_input_values['back_part_img'] : '' ?>">
                        <input type="hidden" name="back_sleeves_foldable_part_img" value="<?= !empty($hidden_input_values['back_sleeves_foldable_part_img']) ? $hidden_input_values['back_sleeves_foldable_part_img'] : '' ?>">
                        <input type="hidden" name="back_sleeves_no_sleeves_part_img" value="<?= !empty($hidden_input_values['back_sleeves_no_sleeves_part_img']) ? $hidden_input_values['back_sleeves_no_sleeves_part_img'] : '' ?>">


                        <input type="hidden" name="botton_cut" value="<?= !empty($hidden_input_values['botton_cut']) ? $hidden_input_values['botton_cut'] : '' ?>">
                        <input type="hidden" name="monogram_place" value="<?= !empty($hidden_input_values['monogram_place']) ? $hidden_input_values['monogram_place'] : '' ?>">
                        <input type="hidden" name="monogram_text" value="<?= !empty($hidden_input_values['monogram_text']) ? $hidden_input_values['monogram_text'] : '' ?>">
                        <input type="hidden" name="monogram_font_style" value="<?= !empty($hidden_input_values['monogram_font_style']) ? $hidden_input_values['monogram_font_style'] : '' ?>">
                        <input type="hidden" name="monogram_color" value="#000">
                        <input type="hidden" name="monogram_price" value="<?= !empty($hidden_input_values['monogram_price']) ? $hidden_input_values['monogram_price'] : '' ?>">
                        <input type="hidden" name="fabric_price" value="<?= !empty($hidden_input_values['fabric_price']) ? $hidden_input_values['fabric_price'] : '' ?>">


                        <input type="hidden" name="measurement_type" value="Standard Sizes">
                        <img name="final_generated_img" src="" id="final_generated_img" style="display:none;">

                        <!-- <input type="hidden" name="measurement_unit" value="Inch"> -->
                        <!-- <input type="hidden" name="measurement_size" value="S">
                        <input type="hidden" name="measurement_qty" value="1"> -->










                        <!---For Loading Images-->
                        <input type="hidden" name="fabric_img" value="<?= !empty($hidden_input_values['fabric_img']) ? $hidden_input_values['fabric_img'] : '' ?>">

                        <ul class="custom-details-list">
                            <li><strong>Fabric</strong>: <span class="fabric"><?= !empty($hidden_input_values['fabric_name']) ? $hidden_input_values['fabric_name'] : '' ?></span></li>
                            <li><strong>Sleeve</strong>: <span class="sleeves"><?= !empty($hidden_input_values['sleeves']) ? $hidden_input_values['sleeves'] : '' ?></span></li>
                            <li><strong>Collar</strong>: <span class="collars"><?= !empty($hidden_input_values['collars']) ? $hidden_input_values['collars'] : '' ?></span></li>
                            <li><strong>Cuff</strong>: <span class="cuffs"><?= !empty($hidden_input_values['cuffs']) ? $hidden_input_values['cuffs'] : '' ?></span></li>
                            <li><strong>Pockets</strong>: <span class="pockets"><?= !empty($hidden_input_values['pockets']) ? $hidden_input_values['pockets'] : '' ?></span></li>
                            <li><strong>Pocket's Side</strong>: <span class="pocket_side">No Packet</span></li>
                            <li><strong>Back Detail</strong>: <span class="back"><?= !empty($hidden_input_values['back']) ? $hidden_input_values['back'] : '' ?></span></li>
                            <li><strong>Bottom Cut</strong>: <span class="botton_cut"><?= !empty($hidden_input_values['botton_cut']) ? $hidden_input_values['botton_cut'] : '' ?></span></li>
                            <li><strong>Monogram Place</strong>: <span class="monogram_place"><?= !empty($hidden_input_values['monogram_place']) ? $hidden_input_values['monogram_place'] : '' ?></span></li>
                            <li><strong>Monogram Text</strong>: <span class="monogram_text"><?= !empty($hidden_input_values['monogram_text']) ? $hidden_input_values['monogram_text'] : '' ?></span></li>
                            <li><strong>Monogram Font</strong>: <span class="monogram_font_style"><?= !empty($hidden_input_values['monogram_font_style']) ? $hidden_input_values['monogram_font_style'] : '' ?></span></li>
                            <li><strong>Monogram Color</strong>: <span class="monogram_color">#000</span></li>
                            <li><strong>Total Amount</strong>: <span class="fabric_price">$<?= !empty($hidden_input_values['fabric_price']) ? $hidden_input_values['fabric_price'] : '' ?></span></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php get_footer(); ?>