$(document).ready(function () {
    const lang = $("html").attr("lang");
    const maxMb = 2;
    var output = $("#output").attr("src");
    // var IDFrontoutput = $("#IDFrontoutput").attr("src");
    // var IDBackoutput = $("#IDBackoutput").attr("src");
    // var GraduationImgoutput = $("#GraduationImgoutput").attr("src");
    function ValidateFileUpload() {
        var fuData = document.getElementById("profile-img");

        var FileUploadPath = fuData.value;

        if (FileUploadPath == "") {
            return;
        } else {
            var Extension = FileUploadPath.substring(
                FileUploadPath.lastIndexOf(".") + 1
            ).toLowerCase();
            if (
                Extension == "gif" ||
                Extension == "png" ||
                Extension == "bmp" ||
                Extension == "jpeg" ||
                Extension == "jpg"
            ) {
                if (fuData.files && fuData.files[0]) {
                    var size = fuData.files[0].size;
                    let kb = size / 1024; // convert the file size into byte to kb
                    let mb = kb / 1024;
                    if (mb > 2) {
                        $("#profile-img-error").show();
                        $("#profile-img").val("");
                        $("#output").attr("src", output);
                        $("#profile-img-error").html(
                            lang === "en"
                                ? `Image should be less than ${maxMb} MB`
                                : `يجب أن تكون الصورة أقل من ${maxMb} ميغابايت`
                        );
                        return;
                    } else {
                        $("#profile-img-error").hide();
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            $("#output").attr("src", e.target.result);
                        };
                        reader.readAsDataURL(fuData.files[0]);
                    }
                }
            } else {
                $("#profile-img-error").show();
                $("#profile-img").val("");
                $("#output").attr("src", output);
                $("#profile-img-error").html(
                    lang === "en"
                        ? "Photo only allows file types of GIF, PNG, JPG, JPEG and BMP."
                        : "تسمح الصور بأنواع ملفات GIF و PNG و JPG و JPEG و BMP فقط."
                );
            }
        }
    }

    // function ValidateIDFrontUpload() {
    //     var IDFront = document.getElementById("IDFront");
    //     var IDFrontUploadPath = IDFront.value;

    //     if (IDFrontUploadPath == "") {
    //         return;
    //     } else {
    //         var Extension = IDFrontUploadPath.substring(
    //             IDFrontUploadPath.lastIndexOf(".") + 1
    //         ).toLowerCase();
    //         if (
    //             Extension == "gif" ||
    //             Extension == "png" ||
    //             Extension == "bmp" ||
    //             Extension == "jpeg" ||
    //             Extension == "jpg"
    //         ) {
    //             if (IDFront.files && IDFront.files[0]) {
    //                 var size = IDFront.files[0].size;
    //                 let kb = size / 1024; // convert the file size into byte to kb
    //                 let mb = kb / 1024;
    //                 if (mb > 2) {
    //                     $("#IDFront-error").show();
    //                     $("#IDFront").val("");
    //                     $("#IDFrontoutput").attr("src", IDFrontoutput);
    //                     $("#IDFront-error").html(
    //                         lang === "en"
    //                             ? `Image should be less than ${maxMb} MB`
    //                             : `يجب أن تكون الصورة أقل من ${maxMb} ميغابايت`
    //                     );
    //                     return;
    //                 } else {
    //                     $("#IDFront-error").hide();
    //                     var reader = new FileReader();
    //                     reader.onload = function (e) {
    //                         $("#IDFrontoutput").attr("src", e.target.result);
    //                     };
    //                     reader.readAsDataURL(IDFront.files[0]);
    //                 }
    //             }
    //         } else {
    //             $("#IDFront-error").show();
    //             $("#IDFront").val("");
    //             $("#IDFrontoutput").attr("src", IDFrontoutput);
    //             $("#IDFront-error").html(
    //                 lang === "en"
    //                     ? "Photo only allows file types of GIF, PNG, JPG, JPEG and BMP."
    //                     : "تسمح الصور بأنواع ملفات GIF و PNG و JPG و JPEG و BMP فقط."
    //             );
    //         }
    //     }
    // }

    // function ValidateIDBackUpload() {
    //     var IDBack = document.getElementById("IDBack");
    //     var IDBackUploadPath = IDBack.value;

    //     if (IDBackUploadPath == "") {
    //         return;
    //     } else {
    //         var Extension = IDBackUploadPath.substring(
    //             IDBackUploadPath.lastIndexOf(".") + 1
    //         ).toLowerCase();
    //         if (
    //             Extension == "gif" ||
    //             Extension == "png" ||
    //             Extension == "bmp" ||
    //             Extension == "jpeg" ||
    //             Extension == "jpg"
    //         ) {
    //             if (IDBack.files && IDBack.files[0]) {
    //                 var size = IDBack.files[0].size;
    //                 let kb = size / 1024; // convert the file size into byte to kb
    //                 let mb = kb / 1024;
    //                 if (mb > 2) {
    //                     $("#IDBack-error").show();
    //                     $("#IDBack").val("");
    //                     $("#IDBackoutput").attr("src", IDBackoutput);
    //                     $("#IDBack-error").html(
    //                         lang === "en"
    //                             ? `Image should be less than ${maxMb} MB`
    //                             : `يجب أن تكون الصورة أقل من ${maxMb} ميغابايت`
    //                     );
    //                     return;
    //                 } else {
    //                     $("#IDBack-error").hide();
    //                     var reader = new FileReader();
    //                     reader.onload = function (e) {
    //                         $("#IDBackoutput").attr("src", e.target.result);
    //                     };
    //                     reader.readAsDataURL(IDBack.files[0]);
    //                 }
    //             }
    //         } else {
    //             $("#IDBack-error").show();
    //             $("#IDBack").val("");
    //             $("#IDBackoutput").attr("src", IDBackoutput);
    //             $("#IDBack-error").html(
    //                 lang === "en"
    //                     ? "Photo only allows file types of GIF, PNG, JPG, JPEG and BMP."
    //                     : "تسمح الصور بأنواع ملفات GIF و PNG و JPG و JPEG و BMP فقط."
    //             );
    //         }
    //     }
    // }

    // function ValidateIGraduationImgUpload() {
    //     var GraduationImg = document.getElementById("GraduationImg");
    //     var GraduationImgUploadPath = GraduationImg.value;

    //     if (GraduationImgUploadPath == "") {
    //         return;
    //     } else {
    //         var Extension = GraduationImgUploadPath.substring(
    //             GraduationImgUploadPath.lastIndexOf(".") + 1
    //         ).toLowerCase();
    //         if (
    //             Extension == "gif" ||
    //             Extension == "png" ||
    //             Extension == "bmp" ||
    //             Extension == "jpeg" ||
    //             Extension == "jpg"
    //         ) {
    //             if (GraduationImg.files && GraduationImg.files[0]) {
    //                 var size = GraduationImg.files[0].size;
    //                 let kb = size / 1024; // convert the file size into byte to kb
    //                 let mb = kb / 1024;
    //                 if (mb > 2) {
    //                     $("#GraduationImg-error").show();
    //                     $("#GraduationImg").val("");
    //                     $("#GraduationImgoutput").attr(
    //                         "src",
    //                         GraduationImgoutput
    //                     );
    //                     $("#GraduationImg-error").html(
    //                         lang === "en"
    //                             ? `Image should be less than ${maxMb} MB`
    //                             : `يجب أن تكون الصورة أقل من ${maxMb} ميغابايت`
    //                     );
    //                     return;
    //                 } else {
    //                     $("#GraduationImg-error").hide();
    //                     var reader = new FileReader();
    //                     reader.onload = function (e) {
    //                         $("#GraduationImgoutput").attr(
    //                             "src",
    //                             e.target.result
    //                         );
    //                     };
    //                     reader.readAsDataURL(GraduationImg.files[0]);
    //                 }
    //             }
    //         } else {
    //             $("#GraduationImg-error").show();
    //             $("#GraduationImg").val("");
    //             $("#GraduationImgoutput").attr("src", GraduationImgoutput);
    //             $("#GraduationImg-error").html(
    //                 lang === "en"
    //                     ? "Photo only allows file types of GIF, PNG, JPG, JPEG and BMP."
    //                     : "تسمح الصور بأنواع ملفات GIF و PNG و JPG و JPEG و BMP فقط."
    //             );
    //         }
    //     }
    // }

    $("#profile-img").change(function (event) {
        ValidateFileUpload();
    });
    // $("#IDFront").change(function (event) {
    //     ValidateIDFrontUpload();
    // });
    // $("#IDBack").change(function (event) {
    //     ValidateIDBackUpload();
    // });
    // $("#GraduationImg").change(function (event) {
    //     ValidateIGraduationImgUpload();
    // });
});
