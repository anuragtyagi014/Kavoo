<?php
/*
 * This is the child theme for Codeflies theme, generated with Generate Child Theme plugin by catchthemes.
 *
 * (Please see https://developer.wordpress.org/themes/advanced-topics/child-themes/#how-to-create-a-child-theme)
 */
add_action('wp_enqueue_scripts', 'codeflies_child_enqueue_styles');
function codeflies_child_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style(
        'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}

add_action('after_setup_theme', 'setup_woocommerce_support');
/**
 * Summary of setup_woocommerce_support
 * @return void
 */
function setup_woocommerce_support()
{
    add_theme_support('woocommerce');
}

function mytheme_customize_register($wp_customize)
{
    // Add a section for general theme options
    $wp_customize->add_section('mytheme_general_options', array(
        'title'    => __('General Options', 'mytheme'),
        'priority' => 30,
    ));

    // Add a setting for a custom text option
    $wp_customize->add_setting('mytheme_custom_text', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    // Add a control for the custom text option
    $wp_customize->add_control('mytheme_custom_text', array(
        'label'    => __('Custom Text', 'mytheme'),
        'section'  => 'mytheme_general_options',
        'type'     => 'text',
    ));
}
add_action('customize_register', 'mytheme_customize_register');


/*
 * Your code goes below
 */






function getShirtCollections()
{
    return (object) [
        "sleeves" => [
            "Long_Sleeve" => [
                "name" => "Long Sleeve",
                "image" => "/wp-content/uploads/2024/04/Long-Sleeve.png",
                "part_img" => "/wp-content/uploads/2024/04/shirt-body.png",
                "straight_part_img" => "/wp-content/uploads/2024/04/Full-Sleave-Straight_.png",
                "straight_vents_part_img" => "/wp-content/uploads/2024/04/Full-Sleave-Straight_.png",
            ],
            "Long_Sleeve_Roll_Up" => [
                "name" => "Long Sleeve Roll Up",
                "image" => "/wp-content/uploads/2024/04/Long-Sleeve-Roll-Up.png",
                "part_img" => "/wp-content/uploads/2024/04/Fold-Shirt-without-neck.png",
                "straight_part_img" => "/wp-content/uploads/2024/04/stret-bottom1.png",
                "straight_vents_part_img" => "/wp-content/uploads/2024/04/stret-bottom1.png",

            ],
            "Short_Sleeve" => [
                "name" => "Short Sleeve",
                "image" => "/wp-content/uploads/2024/04/Short-Sleeve.png",
                "part_img" => "/wp-content/uploads/2024/04/body.png",
                "straight_part_img" => "/wp-content/uploads/2024/04/Cut-sleeve-Stret-Bottom.png",
                "straight_vents_part_img" => "/wp-content/uploads/2024/04/Cut-sleeve-Stret-Bottom.png",
            ]

        ],
        "collars" => [
            "Italian_Collar_1_Button" => [
                "name" => "Italian Collar 1 Button",
                "image" => "/wp-content/uploads/2024/04/CL-1.png",
                "part_img" => "/wp-content/uploads/2024/04/Coller-2.png"
            ],
            "Italian_Collar_2_Button" => [
                "name" => "Italian Collar 2 Button",
                "image" => "/wp-content/uploads/2024/04/CL-4.png",
                "part_img" => "/wp-content/uploads/2024/04/CL-4-1.png"
            ],
            "French_Collar_1_Button" => [
                "name" => "French Collar 1 Button",
                "image" => "/wp-content/uploads/2024/04/CL-2.png",
                "part_img" => "/wp-content/uploads/2024/04/CL-2-1.png"
            ],
            "French_Collar_2_Button" => [
                "name" => "French Collar 2 Button",
                "image" => "/wp-content/uploads/2024/04/CL-5.png",
                "part_img" => "/wp-content/uploads/2024/04/CL-5-1.png"
            ],
            "Cut_Away_1_Button" => [
                "name" => "Cut Away 1 Button",
                "image" => "/wp-content/uploads/2024/04/CL-3.png",
                "part_img" => "/wp-content/uploads/2024/04/Coller-2.png"
            ],
            "Cut_Away_2_Button" => [
                "name" => "Cut Away 2 Button",
                "image" => "/wp-content/uploads/2024/04/CL-6.png",
                "part_img" => "/wp-content/uploads/2024/04/CL-6-1-1.png"
            ],
            "Round_Collar" => [
                "name" => "Round Collar",
                "image" => "/wp-content/uploads/2024/04/CL-7.png",
                "part_img" => "/wp-content/uploads/2024/04/CL-7-1.png"
            ],
            "Button_Down" => [
                "name" => "Button Down",
                "image" => "/wp-content/uploads/2024/04/CL-14.png",
                "part_img" => "/wp-content/uploads/2024/04/CL-14-1.png"
            ],
            "Hidden_Button" => [
                "name" => "Hidden Button",
                "image" => "/wp-content/uploads/2024/04/CL-13.png",
                "part_img" => "/wp-content/uploads/2024/04/CL-13-1.png"
            ],
            "Tab" => [
                "name" => "Tab",
                "image" => "/wp-content/uploads/2024/04/CL-8.png",
                "part_img" => "/wp-content/uploads/2024/04/CL-8-1.png"
            ],
            "Batman_Collar" => [
                "name" => "Batman Collar",
                "image" => "/wp-content/uploads/2024/04/CL-9.png",
                "part_img" => "/wp-content/uploads/2024/04/CL-9-1-1.png"
            ],
            "Modern_Collar" => [
                "name" => "Modern Collar",
                "image" => "/wp-content/uploads/2024/04/CL-10.png",
                "part_img" => "/wp-content/uploads/2024/04/CL-10-1.png"
            ],
            "tuxedo" => [
                "name" => "tuxedo",
                "image" => "/wp-content/uploads/2024/04/CL-11.png",
                "part_img" => "/wp-content/uploads/2024/04/CL-12.3.png"
            ],
            "Band" => [
                "name" => "Band",
                "image" => "/wp-content/uploads/2024/04/CL-12.png",
                "part_img" => "/wp-content/uploads/2024/04/CL-12.2.png"
            ],
            "Spread_Club_Collar" => [
                "name" => "Spread Club Collar",
                "image" => "/wp-content/uploads/2024/04/CL-18.png",
                "part_img" => "/wp-content/uploads/2024/04/CL-12-.png"
            ],
            "Club_Collar_Luxury" => [
                "name" => "Club Collar Luxury",
                "image" => "/wp-content/uploads/2024/04/CL-19.png",
                "part_img" => "/wp-content/uploads/2024/04/CL-19-1.png"
            ],
            "Club_Collar_Luxury_Pin Holes" => [
                "name" => "Club Collar Luxury + Pin Holes",
                "image" => "/wp-content/uploads/2024/04/CL-20.png",
                "part_img" => "/wp-content/uploads/2024/04/coller.png"
            ]
        ],
        "cuffs" => [
            "1_Button_Round" => [
                "name" => "1 Button Round",
                "image" => "/wp-content/uploads/2024/04/CU-1.png",
                "part_img" => "/wp-content/uploads/2024/04/C-1-Both.png",
                "right_part_img" => "/wp-content/uploads/2024/04/C-1-Left.png",
            ],
            "1_Button_Angle" => [
                "name" => "1 Button Angle",
                "image" => "/wp-content/uploads/2024/04/CU-2.png",
                "part_img" => "/wp-content/uploads/2024/04/C-2-Both.png",
                "right_part_img" => "/wp-content/uploads/2024/04/C-2-Left.png",
            ],
            "1_Button_Square" => [
                "name" => "1 Button Square",
                "image" => "/wp-content/uploads/2024/04/CU-3.png",
                "part_img" => "/wp-content/uploads/2024/04/C-3-Both.png",
                "right_part_img" => "/wp-content/uploads/2024/04/C-3.png",
            ],
            "2_Button_Round" => [
                "name" => "2 Button Round",
                "image" => "/wp-content/uploads/2024/04/CU-4.png",
                "part_img" => "/wp-content/uploads/2024/04/C-4-Both.png",
                "right_part_img" => "/wp-content/uploads/2024/04/C-4-Left.png",
            ],
            "2_Button_Angle" => [
                "name" => "2 Button Angle",
                "image" => "/wp-content/uploads/2024/04/CU-5-2.png",
                "part_img" => "/wp-content/uploads/2024/04/C-5-Both.png",
                "right_part_img" => "/wp-content/uploads/2024/04/C-5-Left.png",
            ],
            "2_Button_Square" => [
                "name" => "2 Button Square",
                "image" => "/wp-content/uploads/2024/04/CU-6.png",
                "part_img" => "/wp-content/uploads/2024/04/C-6-Both.png",
                "right_part_img" => "/wp-content/uploads/2024/04/C-6-Left.png",
            ],
            "French_Round" => [
                "name" => "French Round",
                "image" => "/wp-content/uploads/2024/04/CU-7.png",
                "part_img" => "/wp-content/uploads/2024/04/C-7-Both.png",
                "right_part_img" => "/wp-content/uploads/2024/04/C-7-Left.png",
            ],
            "French_Angle" => [
                "name" => "French Angle",
                "image" => "/wp-content/uploads/2024/04/CU-8.png",
                "part_img" => "/wp-content/uploads/2024/04/C-8-Both.png",
                "right_part_img" => "/wp-content/uploads/2024/04/C-8-Left.png",
            ],
            "French_Square" => [
                "name" => "French Square",
                "image" => "/wp-content/uploads/2024/04/CU-9.png",
                "part_img" => "/wp-content/uploads/2024/04/C-9-Both.png",
                "right_part_img" => "/wp-content/uploads/2024/04/C-9-Left.png",
            ]
        ],
        "pockets" => [
            "No_Pocket" => [
                "name" => "No Pocket",
                "image" => "/wp-content/uploads/2024/04/No-pocket.png"
            ],
            "Classic_Round" => [
                "name" => "Classic Round",
                "image" => "/wp-content/uploads/2024/04/PK-1.png",
                "left_part_img" => "/wp-content/uploads/2024/04/PK-1-Right.png",
                "both_part_img" => "/wp-content/uploads/2024/04/PK-1-Both.png"
            ],
            "Classic_Angle" => [
                "name" => "Classic Angle",
                "image" => "/wp-content/uploads/2024/04/PK-2.png",
                "left_part_img" => "/wp-content/uploads/2024/04/PK-3-Right.png",
                "both_part_img" => "/wp-content/uploads/2024/04/PK-3-Right.png"
            ],
            "Diamond_Straight" => [
                "name" => "Diamond Straight",
                "image" => "/wp-content/uploads/2024/04/PK-3.png",
                "left_part_img" => "/wp-content/uploads/2024/04/PK-4-Right.png",
                "both_part_img" => "/wp-content/uploads/2024/04/PK-4-Both.png"
            ],
            "Classic_Square" => [
                "name" => "Classic Square",
                "image" => "/wp-content/uploads/2024/04/PK-4.png",
                "left_part_img" => "/wp-content/uploads/2024/04/PK-2-Right.png",
                "both_part_img" => "/wp-content/uploads/2024/04/PK-2-Both.png"
            ],
            "Round_Flap" => [
                "name" => "Round Flap",
                "image" => "/wp-content/uploads/2024/04/PK-5.png",
                "left_part_img" => "/wp-content/uploads/2024/04/PK-6-Right.png",
                "both_part_img" => "/wp-content/uploads/2024/04/PK-6-Both.png"
            ],
            "Angle_Flap" => [
                "name" => "Angle Flap",
                "image" => "/wp-content/uploads/2024/04/PK-6.png",
                "left_part_img" => "/wp-content/uploads/2024/04/Left-Pocket.png",
                "both_part_img" => "/wp-content/uploads/2024/04/pocket.png"
            ],
            "Diamond_Flap" => [
                "name" => "Diamond Flap",
                "image" => "/wp-content/uploads/2024/04/PK-7.png",
                "left_part_img" => "/wp-content/uploads/2024/04/PK-5-Right.png",
                "both_part_img" => "/wp-content/uploads/2024/04/PK-5-Both.png"
            ],
            "Round_with_glass" => [
                "name" => "Round with glass",
                "image" => "/wp-content/uploads/2024/04/PK-8.png",
                "left_part_img" => "/wp-content/uploads/2024/04/PK-7-Right.png",
                "both_part_img" => "/wp-content/uploads/2024/04/PK-7-Both.png"
            ]
        ],
        "back" => [
            "plain" => [
                "name" => "Plain",
                "image" => "/wp-content/uploads/2024/04/Plain.png",
                "part_img" => "/wp-content/uploads/2024/04/Back-No-line.png",
                "sleeves_foldable_part_img" => "/wp-content/uploads/2024/04/Long-Fold-Back-4.png",
                "sleeves_no_sleeves_part_img" => "/wp-content/uploads/2024/04/back-cut-sleve-2.png",


            ],
            "Box_Pleat" => [
                "name" => "Box Pleat",
                "image" => "/wp-content/uploads/2024/04/Box.png",
                "part_img" => "/wp-content/uploads/2024/04/Back-Full-line.png",
                "sleeves_foldable_part_img" => "/wp-content/uploads/2024/04/Long-Fold-Back-2.png",
                "sleeves_no_sleeves_part_img" => "/wp-content/uploads/2024/04/back-cut-sleve-1.png",
            ],
            "Side_Pleats" => [
                "name" => "Side Pleats",
                "image" => "/wp-content/uploads/2024/04/Side.png",
                "part_img" => "/wp-content/uploads/2024/04/Two-Side-line.png",
                "sleeves_foldable_part_img" => "/wp-content/uploads/2024/04/Long-Fold-Back-1.png",
                "sleeves_no_sleeves_part_img" => "/wp-content/uploads/2024/04/back-cut-sleve-3.png",
            ],
            "Center Pleats" => [
                "name" => "Center Pleats",
                "image" => "/wp-content/uploads/2024/04/Center.png",
                "part_img" => "/wp-content/uploads/2024/04/Two-half-Line.png",
                "sleeves_foldable_part_img" => "/wp-content/uploads/2024/04/Long-Fold-Back-3.png",
                "sleeves_no_sleeves_part_img" => "/wp-content/uploads/2024/04/back-cut-sleve-4.png",
            ],

        ],
        "botton_cut" => [
            "Tri_Tab" => [
                "name" => "Tri-Tab",
                "image" => "/wp-content/uploads/2024/04/Round.png",

            ],
            "Straight" => [
                "name" => "Straight",
                "image" => "/wp-content/uploads/2024/04/Straight.png",

            ],
            "Straight_Vents" => [
                "name" => "Straight Vents",
                "image" => "/wp-content/uploads/2024/04/Straight_Vent.png",
            ]

        ],
        "monogram" => [
            "No_Monogram" => [
                "name" => "No Monogram",
            ],
            "On_Collar" => [
                "name" => "On Collar",
            ],
            "On_Chest" => [
                "name" => "On Chest",
            ],
            "On_Sleeve" => [
                "name" => "On Sleeve",
            ],
            "On_Cuff_Left" => [
                "name" => "On Cuff (Left)",
            ],
            "On_Cuff_Right" => [
                "name" => "On Cuff (Right)",
            ],
            "On_Waist" => [
                "name" => "On Waist",
            ],
            "On_Placket" => [
                "name" => "On Placket",
            ]
        ]

    ];
}


function getShirtFabrics()
{
    return get_posts([
        "post_type" => "product",
        "post_status" => "publish",
        "orderby" => "date",
        "order" => "asc",
        "posts_per_page" => -1
    ]);
}




add_action('wp_ajax_nopriv_addToCartShirt', 'addToCartShirt');
add_action('wp_ajax_addToCartShirt', 'addToCartShirt');
function addToCartShirt()
{

    if (!empty($_POST['product_id'])) {
        $product_id = !empty($_POST['product_id']) ? $_POST['product_id'] : 0;
        $sleeves = !empty($_POST['sleeves']) ? $_POST['sleeves'] : '';
        $collars = !empty($_POST['collars']) ? $_POST['collars'] : '';
        $cuffs = !empty($_POST['cuffs']) ? $_POST['cuffs'] : '';
        $pockets = !empty($_POST['pockets']) ? $_POST['pockets'] : '';
        $pocket_side = !empty($_POST['pocket_side']) ? $_POST['pocket_side'] : '';
        $back = !empty($_POST['back']) ? $_POST['back'] : '';
        $botton_cut = !empty($_POST['botton_cut']) ? $_POST['botton_cut'] : '';
        $final_generated_img = !empty($_POST['final_generated_img']) ? $_POST['final_generated_img'] : '';



        $monogram_place = !empty($_POST['monogram_place']) ? $_POST['monogram_place'] : '';
        $monogram_text = !empty($_POST['monogram_text']) ? $_POST['monogram_text'] : '';
        $monogram_font_style = !empty($_POST['monogram_font_style']) ? $_POST['monogram_font_style'] : '';
        $monogram_color = !empty($_POST['monogram_color']) ? $_POST['monogram_color'] : '';
        $monogram = [];
        if (!empty($monogram_text)) {
            $monogram['monogram_place'] = $monogram_place;
            $monogram['monogram_text'] = $monogram_text;
            $monogram['monogram_font_style'] = $monogram_font_style;
            $monogram['monogram_color'] = $monogram_color;
        }


        $fabric_price = !empty($_POST['fabric_price']) ? $_POST['fabric_price'] : '';
        $measurement_type = !empty($_POST['measurement_type']) ? $_POST['measurement_type'] : '';
        $measurement_unit = !empty($_POST['measurement_unit']) ? $_POST['measurement_unit'] : '';
        $measurement_qty = !empty($_POST['measurement_qty']) ? (int)$_POST['measurement_qty'] : 1;
        $measurement_fit = !empty($_POST['measurement_fit']) ? $_POST['measurement_fit'] : '';
        $measurement_size = !empty($_POST['measurement_size']) ? $_POST['measurement_size'] : '';



        $Neck = !empty($_POST['Neck']) ? $_POST['Neck'] : '';
        $Chest = !empty($_POST['Chest']) ? $_POST['Chest'] : '';
        $Stomach = !empty($_POST['Stomach']) ? $_POST['Stomach'] : '';
        $Hip = !empty($_POST['Hip']) ? $_POST['Hip'] : '';
        $Length = !empty($_POST['Length']) ? $_POST['Length'] : '';
        $Shoulder = !empty($_POST['Shoulder']) ? $_POST['Shoulder'] : '';
        $Sleeve = !empty($_POST['Sleeve']) ? $_POST['Sleeve'] : '';
        $measurement = [];
        if ($measurement_type == "Standard Sizes") {
            $measurement['measurement_type'] = $measurement_type;
            $measurement['measurement_unit'] = $measurement_unit;
            $measurement['measurement_qty'] = $measurement_qty;
            $measurement['measurement_size'] = $measurement_size;
            $measurement['Neck'] = $Neck;
            $measurement['Chest'] = $Chest;
        } else {
            $measurement['measurement_type'] = $measurement_type;
            $measurement['measurement_unit'] = $measurement_unit;
            $measurement['measurement_qty'] = $measurement_qty;
            $measurement['measurement_fit'] = $measurement_fit;

            $measurement['Neck'] = $Neck;
            $measurement['Chest'] = $Chest;
            $measurement['Stomach'] = $Stomach;
            $measurement['Hip'] = $Hip;
            $measurement['Length'] = $Length;
            $measurement['Shoulder'] = $Shoulder;
            $measurement['Sleeve'] = $Sleeve;
        }
        WC()->cart->add_to_cart($product_id, $measurement_qty, 0, [], [
            'sleeves' => $sleeves,
            'collars' => $collars,
            'cuffs' => $cuffs,
            'pockets' => $pockets,
            'pocket_side' => $pocket_side,
            'back' => $back,
            'botton_cut' => $botton_cut,
            'monogram' => $monogram,
            'measurement' => $measurement,
            'final_generated_img' => $final_generated_img
        ]);
        echo json_encode(['status' => 'success']);
        exit;
    }
    echo json_encode(['status' => 'failed']);
    wp_die();
}

add_action('woocommerce_before_calculate_totals', 'before_calculate_total', 1000, 1);
function before_calculate_total($cart)
{
    foreach ($cart->get_cart() as $cart_item_key => $cart_item) {
        $id = $cart_item['data']->get_id();
        $price = $cart_item['data']->get_price();
        $monogram_section = get_field('monogram_section', $id);
        $monogram_charge = !empty($monogram_section['monogram_price']) ? $monogram_section['monogram_price'] : 0;




        if (!empty($cart_item['monogram'])) {
            $price = $price + $monogram_charge;
            $cart_item['data']->set_price($price);
        }

        $cart_item['data']->set_name($cart_item['data']->get_name()); //. $element
    }
    WC()->cart->set_session();
}


function footer_js_script()
{
?>
    <!-- <script type="text/javascript" src="<?= site_url(); ?>/wp-content/themes/codeflies-child/js/jquery-3.7.1.min.js?<?= rand(); ?>"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script type="text/javascript" src="<?= site_url(); ?>/wp-content/themes/codeflies-child/js/slick.min.js?<?= rand(); ?>"></script>
    <script type="text/javascript" src="<?= site_url(); ?>/wp-content/themes/codeflies-child/js/local.js?<?= rand(); ?>"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php
    if (is_page(1219)) { ?>
        <script src="<?= get_stylesheet_directory_uri() . '/js/shirt-builder.js?vt=' . time(); ?>"></script>
    <?php } else if (is_page(1392)) { ?>
        <script src="<?= get_stylesheet_directory_uri() . '/js/suit-builder.js?vt=' . time(); ?>"></script>
    <?php }

    ?>




<?php
}
add_action('wp_footer', 'footer_js_script');




function urlGeneratedImage($final_generated_img)
{
    ob_start();
?>
    <img src='<?= $final_generated_img; ?>' alt="Embedded Image" style="width: 30%;">
<?php
    return ob_get_clean();
}






function genarateAdditionalInfo($cart_item)
{
    $id = $cart_item['data']->get_id();
    $price = $cart_item['data']->get_price();
    $monogram_section = get_field('monogram_section', $id);
    $monogram_charge = !empty($monogram_section['monogram_price']) ? $monogram_section['monogram_price'] : 0;
    $element = '<div class="item-image">';
    if (!empty($cart_item["final_generated_img"])) {
        $final_generated_img = $cart_item["final_generated_img"];
        $element .= urlGeneratedImage($final_generated_img);
    }

    if (!empty($cart_item["sleeves"])) {
        $element .= '</div><ul class="additional-details"><li>Sleeves: ' . $cart_item["sleeves"] . '</li>';
    }
    if (!empty($cart_item["collars"])) {
        $element .= '<li>Collar: ' . $cart_item["collars"] . '</li>';
    }
    if (!empty($cart_item["cuffs"])) {
        $element .= '<li>Cuffs: ' . $cart_item["cuffs"] . '</li>';
    }
    if (!empty($cart_item["pockets"])) {
        $element .= '<li>Pockets: ' . $cart_item["pockets"] . '</li>';
    }
    if (!empty($cart_item["pocket_side"])) {
        $element .= '<li>Pocket Side: ' . $cart_item["pocket_side"] . '</li>';
    }

    if (!empty($cart_item["back"])) {
        $element .= '<li>Back: ' . $cart_item["back"] . '</li>';
    }
    if (!empty($cart_item["botton_cut"])) {
        $element .= '<li>Botton Cut: ' . $cart_item["botton_cut"] . '</li>';
    }

    if (!empty($cart_item["monogram"])) {
        $monogram = $cart_item["monogram"];

        $element .= '<li><div class="monogram-heading">Monogram</div></li>';
        if (!empty($monogram['monogram_place'])) {
            $element .= '<li>Monogram Place : ' . $monogram["monogram_place"] . '</li>';
        }
        if (!empty($monogram['monogram_text'])) {
            $element .= '<li>Monogram Text: ' . $monogram["monogram_text"] . '</li>';
        }
        if (!empty($monogram['monogram_font_style'])) {
            $element .= '<li>Monogram Style: ' . $monogram["monogram_font_style"] . '</li>';
        }
        if (!empty($monogram['monogram_color'])) {
            $element .= '<li>Monogram Color: <span style="background: ' . $monogram["monogram_color"] . '">' . $monogram["monogram_color"] . '</span></li>';
        }
        if (!empty($monogram_charge)) {
            $element .= '<li>Monogram Charges: $' . $monogram_charge . '</li>';
        }
    }

    if (!empty($cart_item["measurement"])) {
        $measurement = $cart_item["measurement"];
        $measurement_type = $measurement['measurement_type'];
        if ($measurement_type == "Standard Sizes") {
            $element .= '<li><div class="monogram-heading">Measurement</div></li>';
            if (!empty($measurement["measurement_type"])) {
                $element .= '<li>Measurement Type : ' . $measurement["measurement_type"] . '</li>';
            }
            if (!empty($measurement["measurement_unit"])) {
                $element .= '<li>Unit: ' . $measurement["measurement_unit"] . '</li>';
            }
            if (!empty($measurement["measurement_size"])) {
                $element .= '<li>Size: ' . $measurement["measurement_size"] . '</li>';
            }
            if (!empty($measurement["measurement_qty"])) {
                $element .= '<li>Qty: ' . $measurement["measurement_qty"] . '</li>';
            }
            if (!empty($measurement["Neck"])) {
                $element .= '<li>Neck: ' . $measurement["Neck"] . '</li>';
            }
            if (!empty($measurement["Chest"])) {
                $element .= '<li>Chest: ' . $measurement["Chest"] . '</li>';
            }
        } else {

            $element .= '<li><div class="monogram-heading">Measurement</div></li>';
            if (!empty($measurement["measurement_type"])) {
                $element .= '<li>Measurement Type : ' . $measurement["measurement_type"] . '</li>';
            }

            if (!empty($measurement["measurement_unit"])) {
                $element .= '<li>Unit: ' . $measurement["measurement_unit"] . '</li>';
            }
            if (!empty($measurement["measurement_fit"])) {
                $element .= '<li>Fit: ' . $measurement["measurement_fit"] . '</li>';
            }

            if (!empty($measurement["measurement_qty"])) {
                $element .= '<li>Qty: ' . $measurement["measurement_qty"] . '</li>';
            }
            if (!empty($measurement["Neck"])) {
                $element .= '<li>Neck: ' . $measurement["Neck"] . '</li>';
            }

            if (!empty($measurement["Chest"])) {
                $element .= '<li>Chest: ' . $measurement["Chest"] . '</li>';
            }

            if (!empty($measurement["Stomach"])) {
                $element .= '<li>Stomach: ' . $measurement["Stomach"] . '</li>';
            }

            if (!empty($measurement["Hip"])) {
                $element .= '<li>Hip: ' . $measurement["Hip"] . '</li>';
            }

            if (!empty($measurement["Length"])) {
                $element .= '<li>Length: ' . $measurement["Length"] . '</li>';
            }

            if (!empty($measurement["Shoulder"])) {
                $element .= '<li>Shoulder: ' . $measurement["Shoulder"] . '</li>';
            }

            if (!empty($measurement["Sleeve"])) {
                $element .= '<li>Sleeve: ' . $measurement["Sleeve"] . '</li>';
            }
        }
    }

    return  $element .= '</ul>';
}



// Add custom column to cart table
















// For Displaying additional data for testing purpose

add_action('woocommerce_checkout_create_order_line_item', 'save_custom_cart_item_data_as_order_meta', 10, 4);

function save_custom_cart_item_data_as_order_meta($item, $cart_item_key, $values, $order)
{
    // Retrieve custom data from cart item data
    $additional_information = genarateAdditionalInfo($values);
    // Save custom data as order item meta
    if (!empty($additional_information)) {
        $item->add_meta_data('Additional Information', $additional_information);
    }
}

// Add the data URI scheme to the list of allowed protocols
function allow_data_uri_scheme($protocols)
{
    $protocols[] = 'data';
    return $protocols;
}
add_filter('kses_allowed_protocols', 'allow_data_uri_scheme');


include_once "includes/suit-builder-functions.php";
