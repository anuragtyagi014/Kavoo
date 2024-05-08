(function ($) {



    generateShirt();
    function generateShirt() {
        const canvas = document.getElementById('shirt-canvas');
        const context = canvas.getContext('2d');
        // Create Image objects for the fabric background and base shirt
        const fabricBackground = new Image();
        const baseShirt = new Image();
        const style = new Image();
        const lapel_style = new Image();
        const jacket_bottom = new Image();
        const jacket_pockets = new Image();
        const jacket_sleeves_button = new Image();
        const jacket_lapel_width = new Image();





        // Define the source URLs for the images
        fabricBackground.src = $('[name="fabric_img"]').val();
        baseShirt.src = '/wp-content/uploads/2024/05/Frame.png'; // $('[name="jacket_style_part_img"]').val();
        style.src = $('[name="jacket_style_part_img"]').val();
        lapel_style.src = $('[name="jacket_lapel_style_part_img"]').val();
        jacket_bottom.src = $('[name="jacket_bottom_part_img"]').val();
        jacket_pockets.src = $('[name="jacket_pockets_part_img"]').val();
        jacket_sleeves_button.src = $('[name="jacket_sleeves_button_part_img"]').val();








        // Function to draw the images on the canvas
        function drawImages() {
            // Clear the canvas
            context.clearRect(0, 0, canvas.width, canvas.height);
            // Draw the fabric background image first
            context.drawImage(fabricBackground, 0, 0, canvas.width, canvas.height);
            context.drawImage(baseShirt, 0, 0, canvas.width, canvas.height);
            context.drawImage(style, 0, 0, canvas.width, canvas.height);
            context.drawImage(lapel_style, 0, 0, canvas.width, canvas.height);
            context.drawImage(jacket_pockets, 0, 0, canvas.width, canvas.height);
            context.drawImage(jacket_bottom, 0, 0, canvas.width, canvas.height);
            context.drawImage(jacket_sleeves_button, 0, 0, canvas.width, canvas.height);
            context.drawImage(jacket_lapel_width, 0, 0, canvas.width, canvas.height);










            const finalImageID = document.getElementById('final_generated_img');
            finalImageID.src = canvas.toDataURL();
        }

        // Assign the onload event handlers for both images
        fabricBackground.onload = drawImages;
        baseShirt.onload = drawImages;
        style.onload = drawImages;
        lapel_style.onload = drawImages;
        jacket_pockets.onload = drawImages;
        jacket_bottom.onload = drawImages;
        jacket_sleeves_button.onload = drawImages;
        jacket_lapel_width.onload = drawImages;




        // Optional: Handle potential errors
        fabricBackground.onerror = function () {
            console.error('Failed to load fabric background image:', fabricBackground.src);
        };


    }






    // Action on trigger side menu items
    $(".fabric-item").click(function () {
        $(".fabric-item").removeClass("selected");
        $(this).closest(".tabber_option").find(".fabric-item").addClass("selected");
        let fabric_name = $(this).closest(".tabber_option").find(".fabric-item").attr("fabric-name");
        let fabric_id = $(this).closest(".tabber_option").find(".fabric-item").attr("fabric-id");
        let fabric_price = $(this).closest(".tabber_option").find(".fabric-item").attr("fabric-price");
        let monogram_price = $(this).closest(".tabber_option").find(".fabric-item").attr("fabric-monogram_price");
        let fabric_image = $(this).closest(".tabber_option").find(".fabric-item").attr("fabric-image");
        $('[name="fabric"]').val(fabric_id);
        $('[name="fabric_img"]').val(fabric_image);
        $(".custom-details-list li .fabric").text(fabric_name);
        $(".custom-details-list li .fabric_price").text(fabric_price);
        $('[name="fabric_price"]').val(fabric_price);
        $('[name="monogram_price"]').val(monogram_price);
        generateShirt();
    });

    $('.jacket-style-item').click(function () {
        $(".jacket-style-item").removeClass("selected");
        $(this).closest(".tabber_option").find(".jacket-style-item").addClass("selected");
        let jacket_style = $(this).closest(".tabber_option").find(".jacket-style-item").attr("jacket-style-name");
        let jacket_style_part_img = $(this).closest(".tabber_option").find(".jacket-style-item").attr("jacket-style-part_img");
        $('[name="jacket_style"]').val(jacket_style);
        $('.jacket_style').text(jacket_style);
        $('[name="jacket_style_part_img"]').val(jacket_style_part_img);
        generateShirt();
    });

    $('.jacket-lapel_style-item').click(function () {
        $(".jacket-lapel_style-item").removeClass("selected");
        $(this).closest(".tabber_option").find(".jacket-lapel_style-item").addClass("selected");
        let jacket_lapel_style = $(this).closest(".tabber_option").find(".jacket-lapel_style-item").attr("jacket-lapel_style-name");
        let jacket_lapel_style_part_img = $(this).closest(".tabber_option").find(".jacket-lapel_style-item").attr("jacket-lapel_style-part_img");
        $('[name="jacket_lapel_style"]').val(jacket_lapel_style);
        $('.jacket_lapel_Style').text(jacket_lapel_style);
        $('[name="jacket_lapel_style_part_img"]').val(jacket_lapel_style_part_img);
        $(".jacket-lapel_width-item").removeClass("selected");
        $('[jacket-lapel_width-name="Regular"]').addClass("selected");
        generateShirt();
    });

    $('[y-name="buttonhole"]').on("change", function () {
        let buttonhole = $(this).val();
        $('[name="jacket_lapel_buttonhole"]').val(buttonhole);
        $('.jacket_lapel_buttonhole').text(buttonhole);
    });


    $('.jacket-lapel_width-item').click(function () {
        $(".jacket-lapel_width-item").removeClass("selected");
        $(this).closest(".tabber_option").find(".jacket-lapel_width-item").addClass("selected");
        let jacket_lapel_width_name = $(this).closest(".tabber_option").find(".jacket-lapel_width-item").attr("jacket-lapel_width-name");
        //let jacket_lapel_width_part_img = $(this).closest(".tabber_option").find(".jacket-lapel_width-item").attr("jacket-lapel_width-part_img");

        $('[name="jacket_lapel_width"]').val(jacket_lapel_width_name);
        $('.jacket_lapel_width').text(jacket_lapel_width_name);


        let jacket_lapel_style = $('[name="jacket_lapel_style"]').val();
        let convertedStr = jacket_lapel_style.replace(/\s/g, '_');
        let complete_path = "jacket-lapel_width-" + convertedStr + "_img";
        let jacket_lapel_width_part_img = $(this).closest(".tabber_option").find(".jacket-lapel_width-item").attr("jacket-lapel_width-" + convertedStr + "_img");
        $('[name="jacket_lapel_style_part_img"]').val(jacket_lapel_width_part_img);
        generateShirt();
    });


    $('.jacket-bottom-item').click(function () {
        $(".jacket-bottom-item").removeClass("selected");
        $(this).closest(".tabber_option").find(".jacket-bottom-item").addClass("selected");
        let jacket_bottom_name = $(this).closest(".tabber_option").find(".jacket-bottom-item").attr("jacket-bottom-name");
        let jacket_bottom_part_img = $(this).closest(".tabber_option").find(".jacket-bottom-item").attr("jacket-bottom-part_img");
        $('[name="jacket_bottom"]').val(jacket_bottom_name);
        $('.jacket_bottom').text(jacket_bottom_name);
        $('[name="jacket_bottom_part_img"]').val(jacket_bottom_part_img);
        generateShirt();
    });

    $('.jacket-pockets-item').click(function () {
        $(".jacket-pockets-item").removeClass("selected");
        $(this).closest(".tabber_option").find(".jacket-pockets-item").addClass("selected");
        let jacket_pockets = $(this).closest(".tabber_option").find(".jacket-pockets-item").attr("jacket-pockets-name");
        let jacket_pockets_part_img = $(this).closest(".tabber_option").find(".jacket-pockets-item").attr("jacket-pockets-part_img");
        $('[name="jacket_pockets"]').val(jacket_pockets);
        $('.jacket_pockets').text(jacket_pockets);
        $('[name="jacket_pockets_part_img"]').val(jacket_pockets_part_img);
        generateShirt();
    });

    $('[y-name="jacket_pocket_side"]').on("change", function () {
        let jacket_pocket_side = $(this).val();
        $('[name="jacket_pocket_side"]').val(jacket_pocket_side);
        $('.jacket_pocket_side').text(jacket_pocket_side);
    });

    $('.jacket-sleeves_button-item').click(function () {
        $(".jacket-sleeves_button-item").removeClass("selected");
        $(this).closest(".tabber_option").find(".jacket-sleeves_button-item").addClass("selected");
        let jacket_sleeves_button = $(this).closest(".tabber_option").find(".jacket-sleeves_button-item").attr("jacket-sleeves_button-name");
        let jacket_sleeves_button_part_img = $(this).closest(".tabber_option").find(".jacket-sleeves_button-item").attr("jacket-sleeves_button-part_img");
        $('[name="jacket_sleeves_button"]').val(jacket_sleeves_button);
        $('.jacket_sleeves_button').text(jacket_sleeves_button);
        $('[name="jacket_sleeves_button_part_img"]').val(jacket_sleeves_button_part_img);
        generateShirt();
    });

    $('.jacket-sleeves_vent-item').click(function () {
        $(".jacket-sleeves_vent-item").removeClass("selected");
        $(this).closest(".tabber_option").find(".jacket-sleeves_vent-item").addClass("selected");
        let jacket_sleeves_vent = $(this).closest(".tabber_option").find(".jacket-sleeves_vent-item").attr("jacket-sleeves_vent-name");
        $('[name="jacket_sleeves_vent"]').val(jacket_sleeves_vent);
        $('.jacket_sleeves_vent').text(jacket_sleeves_vent);
    });


    $('.pant-style-item').click(function () {
        $(".pant-style-item").removeClass("selected");
        $(this).closest(".tabber_option").find(".pant-style-item").addClass("selected");
        let pant_style = $(this).closest(".tabber_option").find(".pant-style-item").attr("pant-style-name");
        $('[name="pant_style"]').val(pant_style);
        $('.pant_style').text(pant_style);
    });

    $('.pant-pleat-item').click(function () {
        $(".pant-pleat-item").removeClass("selected");
        $(this).closest(".tabber_option").find(".pant-pleat-item").addClass("selected");
        let pant_pleat = $(this).closest(".tabber_option").find(".pant-pleat-item").attr("pant-pleat-name");
        $('[name="pant_pleat"]').val(pant_pleat);
        $('.pant_pleat').text(pant_pleat);
    });

    $('.pant-pockets-item').click(function () {
        $(".pant-pockets-item").removeClass("selected");
        $(this).closest(".tabber_option").find(".pant-pockets-item").addClass("selected");
        let pant_pockets = $(this).closest(".tabber_option").find(".pant-pockets-item").attr("pant-pockets-name");
        $('[name="pant_pockets"]').val(pant_pockets);
        $('.pant_pockets').text(pant_pockets);
    });

    $('.pant-back-pockets-item').click(function () {
        $(".pant-back-pockets-item").removeClass("selected");
        $(this).closest(".tabber_option").find(".pant-back-pockets-item").addClass("selected");
        let pant_back_pockets = $(this).closest(".tabber_option").find(".pant-back-pockets-item").attr("pant-back-pockets-name");
        $('[name="pant_back_pockets"]').val(pant_back_pockets);
        $('.pant_back_pockets').text(pant_back_pockets);
    });

    $('.pant-belt_loop-item').click(function () {
        $(".pant-belt_loop-item").removeClass("selected");
        $(this).closest(".tabber_option").find(".pant-belt_loop-item").addClass("selected");
        let pant_belt_loop = $(this).closest(".tabber_option").find(".pant-belt_loop-item").attr("pant-belt_loop-name");
        $('[name="pant_belt_loop"]').val(pant_belt_loop);
        $('.pant_belt_loop').text(pant_belt_loop);
    });



    $('.pant-cuffs-item').click(function () {
        $(".pant-cuffs-item").removeClass("selected");
        $(this).closest(".tabber_option").find(".pant-cuffs-item").addClass("selected");
        let pant_cuffs = $(this).closest(".tabber_option").find(".pant-cuffs-item").attr("pant-cuffs-name");
        $('[name="pant_cuffs"]').val(pant_cuffs);
        $('.pant_cuffs').text(pant_cuffs);
    });










    // Side Menu trigger 
    $('[x-name="fabric"]').click(function () {
        hideSideMenu();
        $('[y-name="fabric"]').addClass('mi_tabber_options_active');
    });
    $('[x-name="jacket-style"]').click(function () {
        hideSideMenu();
        $('[y-name="jacket-style"]').addClass('mi_tabber_options_active');
    });
    $('[x-name="jacket-lapel"]').click(function () {
        hideSideMenu();
        $('[y-name="jacket-lapel"]').addClass('mi_tabber_options_active');
    });
    $('[x-name="jacket-bottom"]').click(function () {
        hideSideMenu();
        $('[y-name="jacket-bottom"]').addClass('mi_tabber_options_active');
    });
    $('[x-name="jacket-pockets"]').click(function () {
        hideSideMenu();
        $('[y-name="jacket-pockets"]').addClass('mi_tabber_options_active');
    });
    $('[x-name="jacket-sleeve-button"]').click(function () {
        hideSideMenu();
        $('[y-name="jacket-sleeve-button"]').addClass('mi_tabber_options_active');
    });
    $('[x-name="jacket-vent"]').click(function () {
        hideSideMenu();
        $('[y-name="jacket-vent"]').addClass('mi_tabber_options_active');
        console.log("botton_cut Is working");
    });
    $('[x-name="pant-style"]').click(function () {
        hideSideMenu();
        $('[y-name="pant-style"]').addClass('mi_tabber_options_active');
        console.log("botton_cut Is working");
    });
    $('[x-name="pant-pleat"]').click(function () {
        hideSideMenu();
        $('[y-name="pant-pleat"]').addClass('mi_tabber_options_active');
        console.log("botton_cut Is working");
    });
    $('[x-name="pant-pant-pocket"]').click(function () {
        hideSideMenu();
        $('[y-name="pant-pant-pocket"]').addClass('mi_tabber_options_active');
        console.log("botton_cut Is working");
    });
    $('[x-name="pant-back-pockets"]').click(function () {
        hideSideMenu();
        $('[y-name="pant-back-pockets"]').addClass('mi_tabber_options_active');
        console.log("botton_cut Is working");
    });
    $('[x-name="pant-belt-loops"]').click(function () {
        hideSideMenu();
        $('[y-name="pant-belt-loops"]').addClass('mi_tabber_options_active');
        console.log("botton_cut Is working");
    });
    $('[x-name="pant-cuffs"]').click(function () {
        hideSideMenu();
        $('[y-name="pant-cuffs"]').addClass('mi_tabber_options_active');
        console.log("botton_cut Is working");
    });
    $('[x-name="monogram"]').click(function () {
        hideSideMenu();
        $('[y-name="monogram"]').addClass('mi_tabber_options_active');
    });
    $('[x-name="measurement"]').click(function () {
        hideSideMenu();
        $('[y-name="measurement"]').addClass('mi_tabber_options_active');
    });
    // Manage Next Button

    $('[z-name="fabric"]').click(function () {
        $('[x-name="jacket-style"]').trigger("click");
    });
    $('[z-name="jacket-style"]').click(function () {
        $('[x-name="jacket-lapel"]').trigger("click");
    });
    $('[z-name="jacket-lapel"]').click(function () {
        $('[x-name="jacket-bottom"]').trigger("click");
    });


    $('[z-name="jacket-bottom"]').click(function () {
        $('[x-name="jacket-pockets"]').trigger("click");
    });
    $('[z-name="jacket-pockets"]').click(function () {
        $('[x-name="jacket-sleeve-button"]').trigger("click");
    });
    $('[z-name="jacket-sleeve-button"]').click(function () {
        $('[x-name="jacket-vent"]').trigger("click");
    });
    $('[z-name="jacket-vent"]').click(function () {
        $('[x-name="pant-style"]').trigger("click");
    });
    $('[z-name="pant-style"]').click(function () {
        $('[x-name="pant-pleat"]').trigger("click");
    });
    $('[z-name="pant-pleat"]').click(function () {
        $('[x-name="pant-pant-pocket"]').trigger("click");
    });
    $('[z-name="pant-pant-pocket"]').click(function () {
        $('[x-name="pant-back-pockets"]').trigger("click");
    });
    $('[z-name="pant-back-pockets"]').click(function () {
        $('[x-name="pant-belt-loops"]').trigger("click");
    });
    $('[z-name="pant-belt-loops"]').click(function () {
        $('[x-name="pant-cuffs"]').trigger("click");
    });
    $('[z-name="pant-cuffs"]').click(function () {
        $('[x-name="monogram"]').trigger("click");
    });
    $('[z-name="monogram"]').click(function () {
        $('[x-name="measurement"]').trigger("click");
    });
    $('[z-name="measurement"]').click(function () {
        if (!$(".measurement-item").hasClass("selected")) {
            $(".measurement-item:first()").trigger("click");
        }
        $('[y-name="measurement"]').removeClass('mi_tabber_options_active');
    });


    function hideSideMenu() {
        $(".mi_tabber_options").removeClass("mi_tabber_options_active");
    }
})(jQuery);