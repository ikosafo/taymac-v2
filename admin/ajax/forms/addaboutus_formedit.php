<?php include ('../../../config.php');
$random = rand(1,10000).date("Ymd");

$id_index = $_POST['theindex'];
$getabout = $mysqli->query("select * from `taymac_aboutus` where id = '$id_index'");
$resabout = $getabout->fetch_assoc();

?>
<!--begin::Form-->

<form class="" autocomplete="off">
    <div class="kt-portlet__body">

        <div class="form-group row">
            <div class="col-lg-12 col-md-12">
                <label for="aboutus_text">About Us Text</label>
                <textarea class="form-control summernote" id="aboutus_text"
                          placeholder="Enter About Us Text"><?php echo $resabout['aboutus'] ?></textarea>
            </div>
        </div>


    </div>
    <div class="kt-portlet__foot">
        <div class="kt-form__actions">
            <button type="button" class="btn btn-primary" id="editaboutus">Edit</button>
            <button type="reset" class="btn btn-secondary">Cancel</button>
        </div>
    </div>
</form>
<!--end::Form-->



<script>

    $(".summernote").summernote({
        placeholder: 'Enter About Us text here',
        tabsize: 2,
        height: 300
    });

    $("#editaboutus").click(function () {
        var aboutus_text = $("#aboutus_text").val();
        var id_index = '<?php echo $id_index ?>';

        var error = '';
        if (aboutus_text == "") {
            error += 'Please enter About Us text\n';
            $("#aboutus_text").focus();
        }

        if (error == "") {
            $.ajax({
                type: "POST",
                url: "ajax/queries/editform_aboutus.php",
                beforeSend: function () {
                    KTApp.blockPage({
                        overlayColor: "#000000",
                        type: "v2",
                        state: "success",
                        message: "Please wait..."
                    })
                },
                data: {
                    aboutus_text: aboutus_text,
                    id_index:id_index
                },
                success: function (text) {
                    //alert(text);
                    $.ajax({
                        type: "POST",
                        url: "ajax/forms/addaboutus_form.php",
                        beforeSend: function () {
                            KTApp.blockPage({
                                overlayColor: "#000000",
                                type: "v2",
                                state: "success",
                                message: "Please wait..."
                            })
                        },
                        success: function (text) {
                            $('#aboutusform_div').html(text);
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert(xhr.status + " " + thrownError);
                        },
                        complete: function () {
                            KTApp.unblockPage();
                        },
                    });


                    $.ajax({
                        type: "POST",
                        url: "ajax/tables/addaboutus_table.php",
                        beforeSend: function () {
                            KTApp.blockPage({
                                overlayColor: "#000000",
                                type: "v2",
                                state: "success",
                                message: "Please wait..."
                            })
                        },
                        success: function (text) {
                            $('#aboutustable_div').html(text);
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert(xhr.status + " " + thrownError);
                        },
                        complete: function () {
                            KTApp.unblockPage();
                        },
                    });
                },

                error: function (xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + " " + thrownError);
                },
                complete: function () {
                    KTApp.unblockPage();
                },
            });
        }
        else {
            $.notify(error, {position: "top center"});
        }
        return false;

    });

</script>