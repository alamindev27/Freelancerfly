<script>
    $(function() {

        var current_fs, next_fs, previous_fs;
        var left, opacity, scale, step = 0;
        var animating;


        $(".next").click(function() {

            // scrol to top for mobile start
            var windowsize = $(window).width();
            $(window).resize(function() {
                var windowsize = $(window).width();
            });

            if (windowsize < 767) {
                window.scrollTo(0, 500);
            } else {
                window.scrollTo(0, 150);
            }
            // scrol to top for mobile end


            if (step == 2) {
                calculate_cost();
                min_each_worker_earn();
                var job_title = $('#job_title').val();
                let proof_error = false;

                if (job_title == '') {
                    $('#job_title').css('border', '1px solid #f00');
                    proof_error = true;

                } else {
                    $('#job_title').css('border', 'none');
                }

                $(".proof").each(function() {
                    if ($(this).val() == '') {
                        $(this).addClass('input_error');
                        proof_error = true;
                    } else {
                        $(this).removeClass('input_error');
                    }
                });


                $(".proof_type").each(function() {

                    if ($(this).val() == '') {
                        if ($(this).attr('select') == "true") {
                            proof_error = true;
                        }
                        $(this).addClass('input_error');

                    } else {
                        $(this).parent().removeClass('input_error');
                    }

                });

                if (proof_error) {
                    return false;
                }


            }
            step++

            if (animating) return false;
            animating = true;
            // current_fs = $(this).parent();
            // next_fs = $(this).parent().next();
            current_fs = $(".msform-fieldset.current");
            next_fs = $(current_fs).next();
            console.log(next_fs);
            if (next_fs.length <= 0) {
                animating = false;
                return false;
            }
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

            current_fs.slideUp();
            next_fs.slideDown();
            $(current_fs).removeClass('current');
            $(next_fs).addClass('current');
            animating = false;
            /*current_fs.animate({opacity: 0}, {
                step: function(now, mx) {
                    scale = 1 - (1 - now) * 0.2;
                    left = (now * 50)+"%";
                    opacity = 1 - now;
                    current_fs.css({'transform': 'scale('+scale+')'});
                    next_fs.css({'left': left, 'opacity': opacity});
                },
                duration: 1000,
                complete: function(){
                    current_fs.hide();
                    animating = false;
                },
                easing: 'easeInOutBack'
            });
            next_fs.show();*/
        });



        $(".previous").click(function() {
            step--
            if (animating) return false;
            animating = true;

            /*current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();*/
            current_fs = $(".msform-fieldset.current");
            previous_fs = $(current_fs).prev();
            if (previous_fs.length <= 0) {
                animating = false;
                return false;
            }
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

            current_fs.slideUp();
            previous_fs.slideDown();
            $(current_fs).removeClass('current');
            $(previous_fs).addClass('current');
            animating = false;
        });

        // $(".submit").click(function () {
        //     return false;
        // })

        $('input[type=radio][name=select]').change(function() {
            if (this.value == 'custom') {
                $("#custom-feature-time").slideDown();
            } else {
                $("#custom-feature-time").slideUp();
            }
        });

    });




    // count proof
    var screenshot_proof = 0;
    var proof_price = 0;
    $(document).on("change", ".proof_type", function() {
        var screenshot_proof = 0;

        $(".proof_type").each(function() {
            if ($(this).val() == 1) {
                screenshot_proof++;
            }
        });

        proof_price = screenshot_proof * setting.screenshot_proof.value;
        $("[name='proof_price']").val(proof_price);
        $('#proof_price').text('$' + Number(proof_price).toFixed(2));
        calculate_cost();
    });



    $(document).ready(function() {
        var id = $('.zone_item').attr('selected_zone_id');

        $('#side_zone').text($('.zone_item').attr('selected_zone_name'));

        // calculate_cost();
        summery()
    });

    $('.zone_item').click(function() {
        $('.zone_item').removeClass('active');
        $(this).addClass('active');
        var id = $(this).attr('for');

    })

    var max_block_country = 0;

    // function get_country(id) {
    //     $.ajaxSetup({
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         }
    //     });

    //     $.ajax({
    //         url: "https://gpsfreelancer.com/get-country",
    //         method: 'POST',
    //         data: {
    //             id: id
    //         },
    //         dataType: 'JSON',
    //         success: function(response) {
    //             if (response.status == 'success') {
    //                 $('.country-exclude-wrapper').html(response.data);
    //                 max_block_country = response.block_country;
    //                 $('.exclude_country').text(max_block_country);
    //             }
    //         }
    //     });
    // }

    // Select Country
        // $(document).on('change', '.country_input', function(evt) {
        //     var checkedBoxes = $('.country_input:checked');
        //     var country_name = '';
        //     if (checkedBoxes.length > max_block_country) {
        //         $(this).prop('checked', false);
        //         showErrorAlert('Warning', 'You can select maximum ' + max_block_country + ' countries.', 'toastr');
        //     } else {
        //         $(this).closest('.country-exclude-item').toggleClass('active');
        //     }

        //     summery();

        // });

        function getCountry(el){
            var regionId = $(el).val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ route('client.getCountry') }}",
                method: 'POST',
                data: {
                    regionId: regionId
                },
                success: function(response) {
                    $('.country-exclude-wrapper').html(response);
                }
            });
        }



        $(document).on('change', '.country_input', function(evt) {
            var checkedBoxes = $('.country_input:checked');
            var country_name = '';
            if (checkedBoxes.length > 4) {
                $(this).prop('checked', false);
                showErrorAlert('Warning', 'You can select maximum 4 countries.', 'toastr');
            } else {
                $(this).closest('.country-exclude-item').toggleClass('active');
            }

            summery();

        });










    // Category and Subcategory Section ===========================================================
    $(document).ready(function() {
        var id = $('.category_item').attr('selected_category');
    });

    $('.category_item').click(function() {
        $('.category_item').removeClass('active');
        $(this).addClass('active');
        summery();
    })

    function get_subcategory(id) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "{{ route('client.getSubcategory') }}",
            method: 'POST',
            data: {
                id: id
            },
            success: function(response) {
                $('.country-exclude-wrapper').html(response);
                $('.subcategory-wrapper').html(response);
            }
        });
    }


    $(document).on('click', '.subcategory-item', function() {
        $('.subcategory-item').removeClass('active');
        $(this).addClass('active');
        var subCatNme = $(this).attr('subcategory_name');
        var rate = $(this).attr('rate');
        $('#subcategor_summary').text(subCatNme);
        $('#each_worker_earnInput').val(rate);
        $('#rate').val(rate);
        $('#rate_price').text('$ '+rate);
        calculate_cost();
        summery();
    })


    // Add Step for job details menu
    var step_count = 2;
    $('.add_step_btn').click(function() {
        step_count++;
        $(this).parent('div').before('<div class="ls-inputicon-box custom-i-box ">\
        <label>Step ' + step_count + '</label>\
        <div class="d-flex align-items-center">\
            <input class="form-control me-2" name="step[]" placeholder="Enter job step" type="text"> <i class="fa fa-close text-danger remove_item"></i>\
        </div> \
        </div>');
    })

    $(document).on('click', '.remove_item', function() {
        $(this).closest('.custom-i-box').remove();
    })



    // Add Proff for job details menu
    var proof_count = 1;
    $('.add_proof_btn').click(function() {
        proof_count++;
        $(this).parent('div').before('<div class="ls-inputicon-box custom-i-box mt-4">\
            <div class="d-flex justify-content-between">\
                <label >Proof ' + proof_count + '</label>\
                <i class="fa fa-close text-danger remove_item"></i>\
            </div>\
            <input class="form-control proof" name="proofs[]" placeholder="Enter job proof" maxlength="255" type="text">\
            <select class="wt-select-box selectpicker mt-2 proof_type" name="proofs_type[]" select="true"  data-live-search="true" title="" id="s-category" data-bv-field="size" required>\
                <option value="">Select Proof Type</option>\
                <option value="0">Text Proof</option>\
                <option value="1">Screenshot Proof</option>\
            </select>\
        </div>');
        $('.selectpicker').selectpicker('render');
    })



    // Calcualte Cost
    function calculate_cost() {
        var worker_earn = $('#each_worker_earnInput').val();
        var total_worker = $('#total_worker').val();
        var estimate_job_cost = worker_earn * total_worker;

        $('#estimated_price').text('$' + estimate_job_cost.toFixed(2));
        var commision_rate = 1;
        var commision_amount = (estimate_job_cost * commision_rate) / 100;
        $('#commision').text('$' + commision_amount.toFixed(2));

        var total_cost = estimate_job_cost + commision_amount + proof_price;

        // var featured_price = parseFloat($(".featured_price:checked").attr('price'));
        // if (featured_price > 0) {
        //     var total_cost = featured_price + estimate_job_cost + commision_amount + proof_price;
        //     $('#feature_price').text('$' + featured_price.toFixed(2));
        // } else {

        // }



        $('#total_cost').text('$' + total_cost.toFixed(2));

        // var min_val_per_job = 0.70;

        // if (min_val_per_job > Number(total_cost)) {
        //     $('.min_total_price_alert').fadeIn();
        //     $('.submit').prop('disabled', true);
        // } else {
        //     $('.min_total_price_alert').fadeOut();
        //     $('.submit').prop('disabled', false);
        // }

        summery();
    }

    function min_each_worker_earn() {
        var level_increase_rate = $("select[name='user_level'] option:selected").attr("increase_rate");
        var region_increase_rate = $("input[name='region_id']:checked").attr('increase_rate');

        var total_increase_rate = Number(level_increase_rate) + Number(region_increase_rate);
        var category_min_price = $("input[name='subcategory_id']:checked").attr('min_price');

        var min_price = Number(category_min_price) + Number(((total_increase_rate / 100) * category_min_price));

        $('.worker_earn').val(Number(min_price).toFixed(2));
        $('.worker_earn').attr('min', Number(min_price).toFixed(2));
    }

    $('#worker_level').change(function() {
        summery();
        calculate_cost();
        min_each_worker_earn()
    })


    $('input[name="estimated_approval_day"]').change(function() {
        summery();
    });

    function summery() {
        var checkedCountries = [];
        var allCountryId = [];
        $('.country_input:checked').each(function() {
            checkedCountries.push($(this).attr('country_name'));
            allCountryId.push($(this).attr('value'));
        });
        var excludedCountries = checkedCountries.join(', ');
        if (excludedCountries == '') {
            $('#exclude_summery').text("N/A");
            $('#allCountryId').val("");
        } else {
            $('#exclude_summery').text(excludedCountries);
            $('#allCountryId').val(allCountryId);
        }

        var category = $('input[name="category_id"]:checked').attr('category_name');
        $('#category_summary').text(category);

        var subcategory = $('input[name="subcategory_id"]:checked').attr('subcategory_name');
        $('#subcategor_summary').text(subcategory);

        var selectedText = $('#worker_level option:selected').text();
        $('#level').text(selectedText);

        var total_worker_needed = $('input[name="total_worker_needed"]').val();
        $('#worker_summary').text(total_worker_needed);

        var each_worker_earn = $('input[name="each_worker_earn"]').val();
        $('#worker_earn_summary').text(each_worker_earn);

        var estimated_approval_day = $('input[name="estimated_approval_day"]').val();
        $('#approval_day_summary').text(estimated_approval_day);

    }
</script>
