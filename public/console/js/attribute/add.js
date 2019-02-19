var selectOptions = [{'1':"Input"},{'2':"Textarea"},{'3':"Word"}];
function addAttribute(idTime = '') {
    if (!idTime) {
        idTime = new Date().getTime();
    }
    item = '<div class="attribule" id="attribule'+idTime+'" rel ="'+idTime+'">' +
        '   <div class="form-group">' +
        '       <label for="subDomain" id="titleAddMenu" class="titleAttribule">Kiểu thuộc tính * ' +
        '           <span><i onclick="removeAttributes('+idTime+')" class="fa fa-times"></i></span>' +
        '       </label>'+
        '       <select class="form-control input_add_item" onchange="chomeOption('+idTime+',this)">' +
        '           <option value="">Kiểu thuộc tính *</option>' +
        '           <option value="1">Input</option>' +
        '           <option value="5">Textarea</option>' +
        '           <option value="6">Word</option>' +
        '       </select>' +
        '    </div>' +
        '   <div class="resultAttribute"></div>' +
        '</div>';
    $("#result").append(item);
    return idTime;
}

function chomeOption(idTime, sel) {
    addOption(idTime, sel);
}

function addOption(idTime, sel) {
    if ($("#attribule"+idTime+" .resultAttribute .textlabel").length != 0){
        console.log("va");
        return false;
    }
    item = '<div class="form-group">' +
        '   <label for="subDomain" id="titleAddMenu">Tên Thuộc tính *</label>' +
        '   <input type="text" class="form-control textlabel">' +
        '</div>';
    $("#attribule"+idTime+" .resultAttribute").html(item);
}

function removeAttributes(idTime) {

    if (!confirm("Bạn có muốn xóa?")) {
        return false;
    }
    $("#attribule"+idTime).remove();
}

function save() {
    id = $("#idAttribute").val();
    ca = $("#category").val();
    if (!ca) {
        errorMessage("Danh mục sản phẩm không được bỏ trống");
        return false;
    }

    rsult = getAttribute();
    if (typeof rsult === 'string') {
        errorMessage(rsult);
        return false;
    }

    if (rsult.length < 1) {
        errorMessage("Bạn chưa có thuộc tính nào");
        return false;
    }
    attribute = JSON.stringify(rsult);

    hideError();
    showFomoad();
    $.ajax({
        url: serverName + 'console/attribute/save/' + id,
        type: "post",
        dateType: "json",
        data: {
            category: ca,
            attribute: attribute
        },
        success: function (result) {
            $("#fromloading").fadeOut(1);
            obj = parseJson(result);
            successMessage(obj.message);
            setTimeout(function () {
                //location.href = serverName+'console/attribute/list';
            }, 1000);
        }, error(result) {

            obj = parseJson(result.responseText);
            showError(obj.message);
            return false;
        }
    });

}

function getAttribute() {

    attribute = [];
    textError = '';
    $('.attribule').each(function () {
        idAttribute = $(this).attr('id');
        typeAttribute = $("#"+idAttribute+" .input_add_item").val();
        textlabel = $("#"+idAttribute+" .resultAttribute .textlabel").val();
        if (!typeAttribute) {
            $("#"+idAttribute+" .input_add_item").focus();
            textError = 'Khiểu thuộc tính không được bỏ trống';
            return false;
        }

        if (!textlabel) {

            $("#"+idAttribute+" .resultAttribute .textlabel").focus();
            textError = 'Tên thuộc tính không được bỏ trống';
            return false;
        }
        alias = $(this).attr('rel');

        innerObj = {
            typeAttribute: typeAttribute,
            textlabel: textlabel,
            alias: alias
        };
        attribute.push(innerObj);
    });
    if (textError) {
        return textError;
    }
    return attribute;
}