function chomeCategory() {
    type = $("#typeCategory").val();
    showType(type);

}

function showType(type) {
    if (parseInt(type) == 1) {
        $("#groupLink").fadeOut(1);
        return false;
        //$("#customLink").val('');
    }
    $("#groupLink").fadeIn(1);
    return false;
}

function saveCategory() {
    id = $("#idCatefory").val();
    parentCa = $("#parent").val();
    typeCa = $("#typeCategory").val();
    nameCa = $("#name").val();
    customIcon = $("#customIcon").val();
    customLink = $("#customLink").val();

    if (parseInt(parentCa) == 0 && !customIcon) {
        errorMessage("Danh mục cha không được bỏ trông icon");
        return false;
    }

    if (!nameCa) {
        errorMessage("Tên danh mục không được bỏ trông");
        return false;
    }

    if (parseInt(typeCa) == 2 && !customLink) {

        errorMessage("Link không được bỏ trống");
        return false;
    }
    if (parseInt(typeCa) == 2 && !validateURL(customLink)) {
        errorMessage("Link không đúng định dạng");
        return false;
    }


    hideError();
    showFomoad();

    id = $("#idCatefory").val();
    parentCa = $("#parent").val();
    typeCa = $("#typeCategory").val();
    nameCa = $("#name").val();
    customIcon = $("#customIcon").val();
    customLink = $("#customLink").val();
    $.ajax({
        url: serverName + 'console/category/save/'+id,
        type: "post",
        dateType: "json",
        data: {
            parentCa: parentCa,
            typeCa: typeCa,
            nameCa: nameCa,
            customIcon: customIcon,
            customLink: customLink
        },
        success: function (result) {
            $("#fromloading").fadeOut(1);
            obj = parseJson(result);

            successMessage(obj.message);
            setTimeout(function () {
                location.reload();
            }, 3000);
        }, error(result) {

            obj = parseJson(result.responseText);
            showError(obj.message);
            return false;
        }
    });

}