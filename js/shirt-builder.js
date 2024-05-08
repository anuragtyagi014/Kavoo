(function ($) {

    generateShirt();
    function generateShirt() {
        $("#canvas-container").show();
        hideMeasurement();
        const canvas = document.getElementById('shirt-canvas');
        const context = canvas.getContext('2d');
        // Create Image objects for the fabric background and base shirt
        const fabricBackground = new Image();
        const baseShirt = new Image();
        const collar = new Image();
        const cuffs = new Image();
        const pockets = new Image();
        // Define the source URLs for the images
        fabricBackground.src = $('[name="fabric_img"]').val();
        // To change sleeves based on buttom cut
        let botton_cut = $('[name="botton_cut"]').val();
        if (botton_cut == "Tri-Tab") {
            baseShirt.src = $('[name="sleeves_part_img"]').val();
        } else if (botton_cut == "Straight") {
            baseShirt.src = $('[name="sleeves_straight_part_img"]').val();
        } else if (botton_cut == "Straight Vents") {
            baseShirt.src = $('[name="sleeves_straight_vents_part_img"]').val();
        }
        collar.src = $('[name="collars_part_img"]').val();


        // To change cuffs
        let sleeves_name = $('[name="sleeves"]').val();
        if (sleeves_name == "Long Sleeve") {
            cuffs.src = $('[name="cuffs_part_img"]').val();
        } else if (sleeves_name == "Long Sleeve Roll Up") {
            cuffs.src = $('[name="cuffs_right_part_img"]').val();
        } else {
            cuffs.src = "";
        }




        // To change pockets
        let pocket_side = $('[name="pocket_side"]').val();
        if (pocket_side == "Both Side") {
            pockets.src = $('[name="pockets_both_part_img"]').val();
        } else {
            pockets.src = $('[name="pockets_left_part_img"]').val();
        }


        let is_pockets = $('[name="pockets"]').val();
        if (is_pockets == "No Pocket") {
            $(".pocket_side").text("No Pocket");
        } else {
            $(".pocket_side").text(pocket_side);
        }


        // Function to draw the images on the canvas
        function drawImages() {
            // Clear the canvas
            context.clearRect(0, 0, canvas.width, canvas.height);

            // Draw the fabric background image first
            context.drawImage(fabricBackground, 0, 0, canvas.width, canvas.height);

            // Draw the base shirt image on top of the fabric background
            context.drawImage(baseShirt, 0, 0, canvas.width, canvas.height);

            // Draw the base shirt image on top of the fabric background
            context.drawImage(collar, 0, 0, canvas.width, canvas.height);

            context.drawImage(cuffs, 0, 0, canvas.width, canvas.height);

            context.drawImage(pockets, 0, 0, canvas.width, canvas.height);


            /*** For start adding Monogram Test */
            // Save the current transformation matrix

            let monogram_font_style = $('[name="monogram_font_style"]').val();
            let monogram_text = $('[name="monogram_text"]').val();
            let monogram_place = $('[name="monogram_place"]').val();
            let monogram_color = $('[name="monogram_color"]').val();
            let fabric_price = $('[name="fabric_price"]').val() ? parseFloat($('[name="fabric_price"]').val()) : 0;
            let monogram_price = $('[name="monogram_price"]').val() ? parseFloat($('[name="monogram_price"]').val()) : 0;
            if (monogram_text) {
                switch (monogram_place) {
                    case 'On Collar':
                        context.save();
                        // Translate and rotate the context to position and rotate the text
                        context.translate(canvas.width / 2, canvas.height / 2); // Move the origin to (50, 50)
                        context.rotate(-(Math.PI / 3)); // Rotate by 45 degrees (in radians)  
                        // Add text
                        context.fillStyle = monogram_color; // Set text color
                        context.font = `12px ${monogram_font_style}`; // Set font size and type
                        context.fillText(`${monogram_text}`, 175, -60); // Add text at position (50, 50)
                        // Restore the previous transformation matrix
                        context.restore();
                        // Add Total Price:
                        $(".fabric_price").text('$' + '' + (fabric_price + monogram_price));
                        break;
                    case 'On Chest':
                        context.save();
                        // Translate and rotate the context to position and rotate the text
                        context.translate(canvas.width / 2, canvas.height / 2); // Move the origin to (50, 50)
                        //context.rotate((Math.PI / 8)); // Rotate by 45 degrees (in radians)  
                        // Add text
                        context.fillStyle = monogram_color; // Set text color
                        context.font = `12px ${monogram_font_style}`; // Set font size and type
                        context.fillText(`${monogram_text}`, 50, -65); // Add text at position (50, 50)
                        // Restore the previous transformation matrix
                        context.restore();
                        $(".fabric_price").text('$' + '' + (fabric_price + monogram_price));
                        break;
                    case 'On Waist':
                        context.save();
                        // Translate and rotate the context to position and rotate the text
                        context.translate(canvas.width / 2, canvas.height / 2); // Move the origin to (50, 50)
                        //context.rotate((Math.PI / 8)); // Rotate by 45 degrees (in radians)  
                        // Add text
                        context.fillStyle = monogram_color; // Set text color
                        context.font = `12px ${monogram_font_style}`; // Set font size and type
                        context.fillText(`${monogram_text}`, 70, 60); // Add text at position (50, 50)
                        // Restore the previous transformation matrix
                        context.restore();
                        $(".fabric_price").text('$' + '' + (fabric_price + monogram_price));
                        break;
                    case 'On Sleeve':
                        context.save();
                        // Translate and rotate the context to position and rotate the text
                        context.translate(canvas.width / 2, canvas.height / 2); // Move the origin to (50, 50)
                        //context.rotate((Math.PI / 8)); // Rotate by 45 degrees (in radians)  
                        // Add text
                        context.fillStyle = monogram_color; // Set text color
                        context.font = `14px ${monogram_font_style}`; // Set font size and type
                        context.fillText(`${monogram_text}`, 155, -40); // Add text at position (50, 50)
                        // Restore the previous transformation matrix
                        context.restore();
                        $(".fabric_price").text('$' + '' + (fabric_price + monogram_price));
                        break;
                    case 'On Placket':
                        context.save();
                        // Translate and rotate the context to position and rotate the text
                        context.translate(canvas.width / 2, canvas.height / 2); // Move the origin to (50, 50)
                        context.rotate(-(Math.PI / 2)); // Rotate by 45 degrees (in radians)  
                        // Add text
                        context.fillStyle = monogram_color; // Set text color
                        context.font = `14px ${monogram_font_style}`; // Set font size and type
                        context.fillText(`${monogram_text}`, -160, 10); // Add text at position (50, 50)
                        // Restore the previous transformation matrix
                        context.restore();
                        $(".fabric_price").text('$' + '' + (fabric_price + monogram_price));
                        break;
                    case 'On Cuff (Left)':
                        let x_sleeves = $('[name="sleeves"]').val();
                        console.log("Y", x_sleeves);
                        if (x_sleeves == 'Long Sleeve') {
                            context.save();
                            // Translate and rotate the context to position and rotate the text
                            context.translate(canvas.width / 2, canvas.height / 2); // Move the origin to (50, 50)
                            //context.rotate(-(Math.PI / 2)); // Rotate by 45 degrees (in radians)  
                            // Add text
                            context.fillStyle = monogram_color; // Set text color
                            context.font = `14px ${monogram_font_style}`; // Set font size and type
                            context.fillText(`${monogram_text}`, 195, 150); // Add text at position (50, 50)
                            // Restore the previous transformation matrix
                            context.restore();
                            $(".fabric_price").text('$' + '' + (fabric_price + monogram_price));
                        }

                        break;
                    case 'On Cuff (Right)':
                        let y_sleeves = $('[name="sleeves"]').val();
                        console.log("If", y_sleeves);
                        if (y_sleeves != 'Short Sleeve') {
                            context.save();
                            // Translate and rotate the context to position and rotate the text
                            context.translate(canvas.width / 2, canvas.height / 2); // Move the origin to (50, 50)
                            //context.rotate(-(Math.PI / 2)); // Rotate by 45 degrees (in radians)  
                            // Add text
                            context.fillStyle = monogram_color; // Set text color
                            context.font = `14px ${monogram_font_style}`; // Set font size and type
                            context.fillText(`${monogram_text}`, -218, 150); // Add text at position (50, 50)
                            // Restore the previous transformation matrix
                            context.restore();
                            $(".fabric_price").text('$' + '' + (fabric_price + monogram_price));

                        }
                        break;
                    default:
                        $(".fabric_price").text('$' + '' + fabric_price);
                    //console.log('Mongogram not allowed..');

                }

            }
            const finalImageID = document.getElementById('final_generated_img');
            finalImageID.src = canvas.toDataURL();

            // $('[name="final_generated_img"]').val(finalImage);
            //console.log("Image", finalImage);
        }

        // Assign the onload event handlers for both images
        fabricBackground.onload = drawImages;
        baseShirt.onload = drawImages;
        collar.onload = drawImages;
        cuffs.onload = drawImages;
        pockets.onload = drawImages;

        // Optional: Handle potential errors
        fabricBackground.onerror = function () {
            console.error('Failed to load fabric background image:', fabricBackground.src);
        };

        baseShirt.onerror = function () {
            console.error('Failed to load base shirt image:', baseShirt.src);
        };
        collar.onerror = function () {
            console.error('Failed to load Collar shirt image:', collar.src);
        };
        cuffs.onerror = function () {
            console.error('Failed to load cuffs shirt image:', cuffs.src);
        };

        pockets.onerror = function () {
            console.info('Failed to load cuffs shirt image:', pockets.src);
        };

    }



    function generateBackShirt() {
        $("#canvas-container").show();
        const canvas = document.getElementById('shirt-canvas');
        const context = canvas.getContext('2d');

        // Create Image objects for the fabric background and base shirt
        const fabricBackground = new Image();
        const baseShirt = new Image();


        // Define the source URLs for the images
        fabricBackground.src = $('[name="fabric_img"]').val();


        // To change cuffs
        let sleeves_name = $('[name="sleeves"]').val();
        if (sleeves_name == "Long Sleeve") {
            baseShirt.src = $('[name="back_part_img"]').val();
        } else if (sleeves_name == "Long Sleeve Roll Up") {
            baseShirt.src = $('[name="back_sleeves_foldable_part_img"]').val();
        } else if (sleeves_name == "Short Sleeve") {
            baseShirt.src = $('[name="back_sleeves_no_sleeves_part_img"]').val();
        }

        // Function to draw the images on the canvas
        function drawImages() {
            // Clear the canvas
            context.clearRect(0, 0, canvas.width, canvas.height);

            // Draw the fabric background image first
            context.drawImage(fabricBackground, 0, 0, canvas.width, canvas.height);

            // Draw the base shirt image on top of the fabric background
            context.drawImage(baseShirt, 0, 0, canvas.width, canvas.height);

        }

        // Assign the onload event handlers for both images
        fabricBackground.onload = drawImages;
        baseShirt.onload = drawImages;


        // Optional: Handle potential errors
        fabricBackground.onerror = function () {
            console.error('Failed to load fabric background image:', fabricBackground.src);
        };

        baseShirt.onerror = function () {
            console.error('Failed to load base shirt image:', baseShirt.src);
        };


    }





    // Fire event on Fabric

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

    // Fire event on Sleeves
    $(".sleeves-item").click(function () {
        $(".sleeves-item").removeClass("selected");
        $(this).closest(".tabber_option").find(".sleeves-item").addClass("selected");
        let sleeves_name = $(this).closest(".tabber_option").find(".sleeves-item").attr("sleeves-name");
        let sleeves_part_img = $(this).closest(".tabber_option").find(".sleeves-item").attr("sleeves-part_img");
        let straight_part_img = $(this).closest(".tabber_option").find(".sleeves-item").attr("sleeves-straight_part_img");
        let straight_vents_part_img = $(this).closest(".tabber_option").find(".sleeves-item").attr("sleeves-straight_vents_part_img");

        console.log(straight_part_img, straight_vents_part_img);
        $('[name="sleeves"]').val(sleeves_name);
        $('[name="sleeves_part_img"]').val(sleeves_part_img);
        $('[name="sleeves_straight_part_img"]').val(straight_part_img);
        $('[name="sleeves_straight_vents_part_img"]').val(straight_vents_part_img);
        $(".custom-details-list li .sleeves").text(sleeves_name);
        generateShirt();
    });

    // Fire event on Collars
    $(".collars-item").click(function () {
        $(".collars-item").removeClass("selected");
        $(this).closest(".tabber_option").find(".collars-item").addClass("selected");
        let collars_name = $(this).closest(".tabber_option").find(".collars-item").attr("collars-name");
        let collars_part_img = $(this).closest(".tabber_option").find(".collars-item").attr("collars-part_img");
        $('[name="collars"]').val(collars_name);
        $('[name="collars_part_img"]').val(collars_part_img);
        $(".custom-details-list li .collars").text(collars_name);
        generateShirt();

    });

    // Fire event on Cuffs
    $(".cuffs-item").click(function () {
        $(".cuffs-item").removeClass("selected");
        $(this).closest(".tabber_option").find(".cuffs-item").addClass("selected");
        let cuffs_name = $(this).closest(".tabber_option").find(".cuffs-item").attr("cuffs-name");
        let cuffs_part_img = $(this).closest(".tabber_option").find(".cuffs-item").attr("cuffs-part_img");
        let cuffs_right_part_img = $(this).closest(".tabber_option").find(".cuffs-item").attr("cuffs-right_part_img");

        $('[name="cuffs"]').val(cuffs_name);
        $('[name="cuffs_part_img"]').val(cuffs_part_img);
        $('[name="cuffs_right_part_img"]').val(cuffs_right_part_img);

        $(".custom-details-list li .cuffs").text(cuffs_name);
        generateShirt();
    });
    // Fire event on Pokets
    $(".pockets-item").click(function () {
        $(".pockets-item").removeClass("selected");
        $(this).closest(".tabber_option").find(".pockets-item").addClass("selected");
        let pockets_name = $(this).closest(".tabber_option").find(".pockets-item").attr("pockets-name");
        let pockets_left_part_img = $(this).closest(".tabber_option").find(".pockets-item").attr("pockets-left_part_img");
        let pockets_both_part_img = $(this).closest(".tabber_option").find(".pockets-item").attr("pockets-both_part_img");

        $('[name="pockets"]').val(pockets_name);
        $('[name="pockets_left_part_img"]').val(pockets_left_part_img);
        $('[name="pockets_both_part_img"]').val(pockets_both_part_img);
        $(".custom-details-list li .pockets").text(pockets_name);

        generateShirt();
    });

    // Fir event on change Pocket's Sides

    $('[y-name="pocket_side"]').on("change", function () {
        let pocket_side = $(this).val();
        $('[name="pocket_side"]').val(pocket_side);
        generateShirt();
    });



    // Fire event on Back Details
    $(".back-item").click(function () {
        $(".back-item").removeClass("selected");
        $(this).closest(".tabber_option").find(".back-item").addClass("selected");
        let back_name = $(this).closest(".tabber_option").find(".back-item").attr("back-name");
        let back_part_img = $(this).closest(".tabber_option").find(".back-item").attr("back-part_img");

        let back_sleeves_foldable_part_img = $(this).closest(".tabber_option").find(".back-item").attr("back-sleeves_foldable_part_img");
        let back_sleeves_no_sleeves_part_img = $(this).closest(".tabber_option").find(".back-item").attr("back-sleeves_no_sleeves_part_img");

        $('[name="back"]').val(back_name);
        $('[name="back_part_img"]').val(back_part_img);
        $('[name="back_sleeves_foldable_part_img"]').val(back_sleeves_foldable_part_img);
        $('[name="back_sleeves_no_sleeves_part_img"]').val(back_sleeves_no_sleeves_part_img);

        $(".custom-details-list li .back").text(back_name);
        generateBackShirt();
    });


    // Fire event on Bottom Details
    $(".botton_cut-item").click(function () {
        $(".botton_cut-item").removeClass("selected");
        $(this).closest(".tabber_option").find(".botton_cut-item").addClass("selected");
        let botton_cut_name = $(this).closest(".tabber_option").find(".botton_cut-item").attr("botton_cut-name");
        $('[name="botton_cut"]').val(botton_cut_name);
        $(".custom-details-list li .botton_cut").text(botton_cut_name);
        generateShirt();
    });


    // Fire event on Monogram
    $(".monogram-item").click(function () {
        $(".monogram-item").removeClass("selected");
        $(this).closest(".tabber_option").find(".monogram-item").addClass("selected");
        let monogram_place = $(this).closest(".tabber_option").find(".monogram-item").attr("monogram-name");
        $('[name="monogram_place"]').val(monogram_place);
        $(".custom-details-list li .monogram_place").text(monogram_place);
        generateShirt();
    });



    // On change Monogram font style state.
    $('[name="font_style"]').on("change", function () {
        let font_style = $(this).val();
        let text_name = $('[name="monogram_input"]').val();
        let monogram_color = $('[name="monogram_color"]').val();
        $('[name="monogram_font_style"]').val(font_style);
        $('[name="monogram_text"]').val(text_name);
        $('.monogram_font_style').text(font_style);
        $('.monogram_text').text(text_name);
        $('[name="monogram_color"]').val(monogram_color);
        $('.monogram_color').text(monogram_color);
        generateShirt();
    });

    // On change Monogram text

    $('[name="monogram_input"]').on("input", function () {
        let text_name = $(this).val();
        let font_style = $('[name="font_style"]').val();
        let monogram_color = $('[name="monogram_color"]').val();
        $('[name="monogram_font_style"]').val(font_style);
        $('[name="monogram_text"]').val(text_name);
        $('.monogram_font_style').text(font_style);
        $('.monogram_text').text(text_name);
        $('[name="monogram_color"]').val(monogram_color);
        $('.monogram_color').text(monogram_color);
        generateShirt();
    });

    // On change Monogram text

    $('[name="monogram_color"]').on("input", function () {
        let monogram_color = $(this).val();
        let font_style = $('[name="font_style"]').val();
        let text_name = $('[name="monogram_input"]').val();

        $('[name="monogram_font_style"]').val(font_style);
        $('[name="monogram_text"]').val(text_name);
        $('.monogram_font_style').text(font_style);
        $('.monogram_text').text(text_name);

        $('[name="monogram_color"]').val(monogram_color);
        $('.monogram_color').text(monogram_color);
        generateShirt();
    });





    // Fire event on Measurement
    $(".measurement-item").click(function () {
        $(".measurement-item").removeClass("selected");
        $(this).closest(".tabber_option").find(".measurement-item").addClass("selected");
        let monogram_place = $(this).closest(".tabber_option").find(".measurement-item").attr("measurement-name");
        hideMeasurement();
        $("#canvas-container").hide();
        if (monogram_place == "Standard Sizes") {
            $(".standard-sizes").show();
        } else {
            $(".body-size").show();
        }
        $('[name="measurement_type"]').val(monogram_place);
        $('[name="measurement_unit"]').val("Inch");
        $('[name="measurement_size"]').val("S");
        $('[name="measurement_qty"]').val("1");
    });


    $('[name="standard_unint"]').click(function () {
        let standard_unint = $(this).val();
        if (standard_unint == "inch") {
            $(".standard-table-to-cm").hide();
            $(".standard-table-to-inch").show();
        } else {
            $(".standard-table-to-inch").hide();
            $(".standard-table-to-cm").show();
        }
    });





















    // Side Menu trigger 

    $('[x-name="fabric"]').click(function () {
        hideSideMenu();
        $('[y-name="fabric"]').addClass('mi_tabber_options_active');
    });

    $('[x-name="sleeves"]').click(function () {
        hideSideMenu();
        $('[y-name="sleeves"]').addClass('mi_tabber_options_active');
        console.log("sleeves Is working");
    });

    $('[x-name="collars"]').click(function () {
        hideSideMenu();
        $('[y-name="collars"]').addClass('mi_tabber_options_active');
        console.log("collars Is working");
    });

    $('[x-name="cuffs"]').click(function () {
        hideSideMenu();
        $('[y-name="cuffs"]').addClass('mi_tabber_options_active');
        console.log("cuffs Is working");
    });

    $('[x-name="pockets"]').click(function () {
        hideSideMenu();
        $('[y-name="pockets"]').addClass('mi_tabber_options_active');
        console.log("pockets Is working");
    });

    $('[x-name="back"]').click(function () {
        hideSideMenu();
        $('[y-name="back"]').addClass('mi_tabber_options_active');
        console.log("back Is working");
    });

    $('[x-name="botton_cut"]').click(function () {
        hideSideMenu();
        $('[y-name="botton_cut"]').addClass('mi_tabber_options_active');
        console.log("botton_cut Is working");
    });

    $('[x-name="monogram"]').click(function () {
        hideSideMenu();
        $('[y-name="monogram"]').addClass('mi_tabber_options_active');
        console.log("monogram Is working");
    });


    $('[x-name="measurement"]').click(function () {
        hideSideMenu();
        $('[y-name="measurement"]').addClass('mi_tabber_options_active');
        console.log("measurement Is working");
    });



    // For Next botton trigger

    $('[z-name="fabric"]').click(function () {
        $('[x-name="sleeves"]').trigger("click");
    });
    $('[z-name="sleeves"]').click(function () {
        $('[x-name="collars"]').trigger("click");
    });
    $('[z-name="collars"]').click(function () {
        $('[x-name="cuffs"]').trigger("click");
    });
    $('[z-name="cuffs"]').click(function () {
        $('[x-name="pockets"]').trigger("click");
    });
    $('[z-name="pockets"]').click(function () {
        $('[x-name="back"]').trigger("click");
    });
    $('[z-name="back"]').click(function () {
        $('[x-name="botton_cut"]').trigger("click");
    });
    $('[z-name="botton_cut"]').click(function () {
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

    // Add To cart functionality

    $(document).delegate('.measurement-add-to-cart .add-to-cart', 'click', function () {
        let product_id = $('[name="fabric"]').val();
        let sleeves = $('[name="sleeves"]').val();
        let collars = $('[name="collars"]').val();
        let cuffs = $('[name="cuffs"]').val();
        let pockets = $('[name="pockets"]').val();
        let pocket_side = $('[name="pocket_side"]').val();
        let back = $('[name="back"]').val();
        let botton_cut = $('[name="botton_cut"]').val();
        let monogram_place = $('[name="monogram_place"]').val();
        let monogram_text = $('[name="monogram_text"]').val();
        let monogram_font_style = $('[name="monogram_font_style"]').val();
        let monogram_color = $('[name="monogram_color"]').val();
        let fabric_price = $('[name="fabric_price"]').val();





        let measurement_type = $('[name="measurement_type"]').val();
        let measurement_unit = '';
        let measurement_size = '';
        let measurement_qty = '';
        let measurement_fit = '';
        let Neck = '';
        let Chest = '';
        let Stomach = '';
        let Hip = '';
        let Length = '';
        let Shoulder = '';
        let Sleeve = '';

        if (measurement_type == "Standard Sizes") {

            measurement_unit = $('[name="standard_unint"]').val();
            measurement_size = $('[name="standard_size"]').val();
            measurement_qty = $('[name="standard_qty"]').val();
            if (measurement_unit == "inch") {
                Neck = $('.standard-table-to-inch [neck-size="' + measurement_size + '"]').text();
                Chest = $('.standard-table-to-inch [chest-size="' + measurement_size + '"]').text();
            } else {
                Neck = $('.standard-table-to-cm [neck-size="' + measurement_size + '"]').text();
                Chest = $('.standard-table-to-cm [chest-size="' + measurement_size + '"]').text();
            }
            addToCart(product_id, sleeves, collars, cuffs, pockets, pocket_side, back, botton_cut, monogram_place, monogram_text, monogram_font_style, monogram_color, fabric_price, measurement_type, measurement_unit, measurement_size, measurement_qty, measurement_fit, Neck, Chest, Stomach, Hip, Length, Shoulder, Sleeve);
            console.log("Now You can add to cart");
        } else if (measurement_type == "Body Size") {
            measurement_unit = $('[name="body_unit"]').val();
            measurement_fit = $('[name="body_fit"]').val();
            measurement_qty = $('[name="body_qty"]').val();

            Neck = parseFloat($('[name="body_neck"]').val()) ? parseFloat($('[name="body_neck"]').val()) : 0;
            Chest = parseFloat($('[name="body_chest"]').val()) ? parseFloat($('[name="body_chest"]').val()) : 0;
            Stomach = parseFloat($('[name="body_stomach"]').val()) ? parseFloat($('[name="body_stomach"]').val()) : 0;
            Hip = parseFloat($('[name="body_hip"]').val()) ? parseFloat($('[name="body_hip"]').val()) : 0;
            Length = parseFloat($('[name="body_length"]').val()) ? parseFloat($('[name="body_length"]').val()) : 0;
            Shoulder = parseFloat($('[name="body_shoulder"]').val()) ? parseFloat($('[name="body_shoulder"]').val()) : 0;
            Sleeve = parseFloat($('[name="body_Sleeve"]').val()) ? parseFloat($('[name="body_Sleeve"]').val()) : 0;
            generatingErrors();
            $(".errors").text("");
            if (measurement_unit == 'inch') {
                if (Neck < 9 || Neck > 23) {
                    $(".errors").text('Neck generally range from 9 To 23');
                } else if (Chest < 28 || Chest > 75) {
                    $(".errors").text('Chest generally range from 28 To 75');
                } else if (Stomach < 24 || Stomach > 73) {
                    $(".errors").text('Stomach generally range from 24 To 73');
                } else if (Hip < 24 || Hip > 73) {
                    $(".errors").text('Hip generally range from 24 To 73');
                } else if (Length < 19 || Length > 42) {
                    $(".errors").text('Length generally range from 19 To 42');
                } else if (Shoulder < 14 || Shoulder > 27) {
                    $(".errors").text('Shoulder generally range from 14 To 27');
                } else if (Sleeve < 18 || Sleeve > 30) {
                    $(".errors").text('Sleeve generally range from 18 To 30');
                } else {
                    addToCart(product_id, sleeves, collars, cuffs, pockets, pocket_side, back, botton_cut, monogram_place, monogram_text, monogram_font_style, monogram_color, fabric_price, measurement_type, measurement_unit, measurement_size, measurement_qty, measurement_fit, Neck, Chest, Stomach, Hip, Length, Shoulder, Sleeve);
                    console.log("Now You can add to cart");
                }
            } else {
                if (Neck < 23 || Neck > 58) {
                    $(".errors").text('Neck generally range from 23 To 58');
                } else if (Chest < 71 || Chest > 190) {
                    $(".errors").text('Chest generally range from 71 To 190');
                } else if (Stomach < 61 || Stomach > 185.25) {
                    $(".errors").text('Stomach generally range from 61 To 185.25');
                } else if (Hip < 71 || Hip > 191) {
                    $(".errors").text('Hip generally range from 71 To 191');
                } else if (Length < 48 || Length > 108) {
                    $(".errors").text('Length generally range from 48 To 108');
                } else if (Shoulder < 38 || Shoulder > 69) {
                    $(".errors").text('Shoulder generally range from 38 To 69');
                } else if (Sleeve < 46 || Sleeve > 77) {
                    $(".errors").text('Sleeve generally range from 46 To 77');
                } else {
                    addToCart(product_id, sleeves, collars, cuffs, pockets, pocket_side, back, botton_cut, monogram_place, monogram_text, monogram_font_style, monogram_color, fabric_price, measurement_type, measurement_unit, measurement_size, measurement_qty, measurement_fit, Neck, Chest, Stomach, Hip, Length, Shoulder, Sleeve);
                    console.log("Now You can add to cart");
                }
            }

        }
    });



    function addToCart(product_id, sleeves, collars, cuffs, pockets, pocket_side, back, botton_cut, monogram_place, monogram_text, monogram_font_style, monogram_color, fabric_price, measurement_type, measurement_unit, measurement_size, measurement_qty, measurement_fit, Neck, Chest, Stomach, Hip, Length, Shoulder, Sleeve) {
        let final_generated_img = $('#final_generated_img').attr("src");
        let obj = {
            action: 'addToCartShirt',
            product_id: product_id,
            sleeves: sleeves,
            collars: collars,
            cuffs: cuffs,
            pockets: pockets,
            pocket_side: pocket_side,
            back: back,
            botton_cut: botton_cut,
            monogram_place: monogram_place,
            monogram_text: monogram_text,
            monogram_font_style: monogram_font_style,
            monogram_color: monogram_color,
            fabric_price: fabric_price,
            measurement_type: measurement_type,
            measurement_unit: measurement_unit,
            measurement_qty: measurement_qty,
            measurement_fit: measurement_fit,
            measurement_size: measurement_size,
            Neck: Neck,
            Chest: Chest,
            Stomach: Stomach,
            Hip: Hip,
            Length: Length,
            Shoulder: Shoulder,
            Sleeve: Sleeve,
            final_generated_img: final_generated_img
        };

        $.ajax({
            url: window.location.origin + "/wp-admin/admin-ajax.php",
            method: "POST",
            data: obj,
            dataType: 'json',
            success: function (res) {
                if (res.status == 'success') {

                    Swal.fire({
                        title: "Success",
                        text: "Customized shirt has been added to the cart...",
                        timer: 2000,
                        timerProgressBar: true,
                        icon: "success",
                        didOpen: () => {
                            Swal.showLoading()
                        }
                    }).then((result) => {
                        if (result.dismiss === Swal.DismissReason.timer) {
                            window.location.href = window.location.origin + "/cart";
                        }
                    });

                }
            }
        });
    }



    // end Add To cart functionality

    // Hiding Menu
    function hideSideMenu() {
        $(".mi_tabber_options").removeClass("mi_tabber_options_active");
    }

    function hideMeasurement() {
        $(".standard-sizes").hide();
        $(".body-size").hide();

    }


    function removeBorderColor() {
        $('[name="body_neck"]').css({ "border": "" });
        $('[name="body_chest"]').css({ "border": "" });
        $('[name="body_stomach"]').css({ "border": "" });
        $('[name="body_hip"]').css({ "border": "" });
        $('[name="body_length"]').css({ "border": "" });
        $('[name="body_shoulder"]').css({ "border": "" });
        $('[name="body_Sleeve"]').css({ "border": "" });

    }

    function generatingErrors() {
        Neck = $('[name="body_neck"]').val();
        Chest = $('[name="body_chest"]').val();
        Stomach = $('[name="body_stomach"]').val();
        Hip = $('[name="body_hip"]').val();
        Length = $('[name="body_length"]').val();
        Shoulder = $('[name="body_shoulder"]').val();
        Sleeve = $('[name="body_Sleeve"]').val();
        removeBorderColor(); // Remove validation errors
        if (Neck.length < 1) {
            $('[name="body_neck"]').css({ "border": "1px solid red" });
        }
        if (Chest.length < 1) {
            $('[name="body_chest"]').css({ "border": "1px solid red" });
        }
        if (Stomach.length < 1) {
            $('[name="body_stomach"]').css({ "border": "1px solid red" });
        }
        if (Hip.length < 1) {
            $('[name="body_hip"]').css({ "border": "1px solid red" });
        }
        if (Length.length < 1) {
            $('[name="body_length"]').css({ "border": "1px solid red" });
        }
        if (Shoulder.length < 1) {
            $('[name="body_shoulder"]').css({ "border": "1px solid red" });
        }
        if (Sleeve.length < 1) {
            $('[name="body_Sleeve"]').css({ "border": "1px solid red" });
        }
    }
})(jQuery);