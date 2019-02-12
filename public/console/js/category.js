$('.switchStatus input').click(function () {
    var status = 0;
    var id = $(this).attr('rel');
    if ($(this).is(':checked')) {
        status = 1;
    }
    $.ajax({
        url: serverName + 'console/category/status/' + id + '/' + status,
        type: "get",
        dateType: "json",
        data: {},
        success: function (result) {

            obj = parseJson(result);
            dangerSuccess(obj.message);
        }, error(result) {
            obj = parseJson(result.responseText);
            dangerEroor(obj.message);
            return false;
        }
    });
});

function updateSort(id, e) {

    sort = e.value;
    $.ajax({
        url: serverName + 'console/category/sort/' + id + '/' + sort,
        type: "get",
        dateType: "json",
        data: {},
        success: function (result) {

            obj = parseJson(result);
            dangerSuccess(obj.message);
        }, error(result) {
            obj = parseJson(result.responseText);
            dangerEroor(obj.message);
            return false;
        }
    });
}

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
        errorMessage("Icon không được bỏ trông");
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
        url: serverName + 'console/category/save/' + id,
        type: "post",
        dateType: "json",
        data: {
            parentCa: parentCa,
            typeCa: typeCa,
            nameCa: nameCa,
            customIcon: customIcon.replace(/</g, "&lt;").replace(/>/g, "&gt;"),
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

function editCategory(id) {

    if (!id) {
        return false;
    }
    showFomoad();
    $.ajax({
        url: serverName + 'console/category/edit/' + id,
        type: "get",
        dateType: "json",
        data: {
            //  id: id
        },
        success: function (result) {
            obj = parseJson(result);
            $("#addpayinbox #addpayinboxin button").prop("disable", true);
            $("#fromloading").fadeOut(1);
            if (obj.status == 401) {

                authorization()
                return false;
            }

            if (obj.status != 200) {
                saveError(obj.message);
                return false;
            }

            data = obj.data;
            $("#additem #idCatefory").val(id);
            $("#additem #name").val(data.name);
            $("#additem #customLink").val(data.link);
            $("#additem #customIcon").val(data.icon);
            $("#additem #parent").val(data.parent);
            $("#additem #typeCategory").val(data.type);
            $('#location' + id).fadeOut(1);
            showType(data.type);
            addItem();
        },
        error(result) {
            obj = parseJson(result.responseText);
            dangerEroor(obj.message);
            return false;
        }
    });
}

var idUserDelete;
function fomDelete(id) {
    if (!id) {
        return false;
    }

    idUserDelete = id;
    $("#fomDeleteUser").modal("show");
}

function deleteUser() {
    $("#fomDeleteUser").modal("hide");
    //$("#fromloading").fadeIn(1);
    showFomoad();
    $.ajax({
        url: serverName + 'console/category/delete/'+idUserDelete,
        type: "get",
        dateType: "json",
        data: {
            //id: idUserDelete
        },
        success: function (result) {
            obj = parseJson(result);
            dangerSuccess(obj.message);
            setTimeout(function(){
                location.reload();
            }, 3000);

        }, error(result) {
            obj = parseJson(result.responseText);
            dangerEroor(obj.message);
            return false;
        }
    });
}