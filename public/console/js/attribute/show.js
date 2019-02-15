getDataAttribute();
function getDataAttribute() {

    $("#result").html('');
    id = $("#idAttribute").val();
    if (!id) {
        addAttribute();
        return false;
    }

    $.ajax({
        url: serverName + 'console/attribute/show/' + id,
        type: "get",
        dateType: "json",
        data: {
        },
        success: function (result) {
            obj = parseJson(result);
            showDataAttribute(obj.data)

        }, error(result) {
            obj = parseJson(result.responseText);
            showError(obj.message);
            return false;
        }
    });
}

function showDataAttribute(data) {
   // optionAttri = parseJson(data.data);
    $("#category").val(data.category_id);
    optionAttri = parseJson(data.data);

    for (i = 0; i < optionAttri.length; i++) {
        idTime = addAttribute();
        addOption(idTime, '');
        id = "attribule"+idTime;
        $("#"+id+" .input_add_item").val(optionAttri[i]['typeAttribute']);
        $("#"+id+" .resultAttribute .textlabel").val(optionAttri[i]['textlabel']);
    }
}