
function getDataAttribute() {
    category = $("#category").val();
    $("#attribute").html('');
    $.ajax({
        url: serverName + 'console/attribute/production/' + category,
        type: "get",
        dateType: "json",
        data: {
        },
        success: function (result) {
            obj = parseJson(result);
           // showDataAttribute(obj.data)
            //console.log(obj)
            addAttribute(obj.data)

        }, error(result) {
            obj = parseJson(result.responseText);
            showError(obj.message);
            return false;
        }
    });
}

function addAttribute(data) {

    if (!data) {
        return false;
    }

    for(i = 0; i < data.length; i++) {
        item = '<div class="form-group">' +
            '  <label for="">'+data[i].title+'</label>' +
            '   <input type="text" id="attributeValue'+data[i].id+'" rel="'+data[i].id+'" class="form-control input_add_item attributeValue">' +
            '   <span id="attributeValue'+data[i].id+'Error" class="error"></span>'+
            '</div>';
        $("#attribute").append(item);
    }
}