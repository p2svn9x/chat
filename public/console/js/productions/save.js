
var errorInput = 0;
function save() {
    errorInput = 0;
    id = $("#idProduct").val();
    category = getValueInput("#category", 1);
    nameproduct = getValueInput("#nameProduct", 1);
    avartar = getValueInput("#avartar", 1);
    discriptions = getValueInput("#discriptions", 1);
    cuarantee = getValueInput("#cuarantee", 0);
    price = getValueInput("#price", 1);
    currency = getValueInput("#currency", 0);
    sale = getValueInput("#sale", 0);
    currenSale = getValueInput("#currenSale", 0);
    // currency = getValueInput("#currency", 0);
    // currency = getValueInput("#currency", 0);
    // currency = getValueInput("#currency", 0);
    content = CKEDITOR.instances['content'].getData();
    if (!content) {
        $("#contentError").html("Bạn không được bỏ trống trường này");
        errorInput = 1;
    }

    //getColorValue();
    attribite = attribiteValue();
    colorValue = getColorValue();
    console.log(id);
    console.log(category);

    console.log(avartar);
    console.log(discriptions);
    console.log(cuarantee);
    console.log(price);
    console.log(currency);
    console.log(sale);
    console.log(currenSale);
    console.log(attribite);
    console.log(colorValue);
    console.log(content);
    if (errorInput == 1) {
        return false
    }
    $(".error").html('');
}

function attribiteValue() {
    arrayValueAttribute = [];
    if( $('.attributeValue').length < 1) {
        return JSON.stringify(arrayValueAttribute);
    }

    $('.attributeValue').each(function () {
        tagAttribite = $(this).attr('id');
        idAttribite = $("#" + tagAttribite).attr('rel');
        valueAttribite = getValueInput("#" + tagAttribite, 1);
        item = {id:idAttribite, attribite: valueAttribite};
        arrayValueAttribute.push(item);
    });

    return JSON.stringify(arrayValueAttribute);
}

function getValueInput(tag, required) {

    valueTag = $(tag).val();
    if(!valueTag && required == 0) {
        return valueTag;
    }

    if (!valueTag && required == 1) {
        $(tag+"Error").html("Bạn không được bỏ trống trường này");
        errorInput = 1;
    }
    return valueTag;
}

function getColorValue() {

    arrayValueColor = [];
    if( $('.tagColor').length < 1) {

        $("#rowClomError").html("Bạn chưa chọn màu và ảnh cho sản phẩm");
        errorInput = 1;
        return JSON.stringify(arrayValueColor);
    }

    $('.tagColor').each(function () {
        tagTime= $(this).attr('rel');
        color =  getValueInput("#colorDefaultInput" + tagTime, 1);
        quantily = getValueInput("#quantily" + tagTime, 0);
        images = getValueInput("#urlImages" + tagTime, 1);
        active = getValueInput("#activeImg" + tagTime, 0);
        item = {color:color, quantily:quantily, images:images, active:active};
        arrayValueColor.push(item);
    });
    return JSON.stringify(arrayValueColor);
}
//CKEDITOR.instances['contentArticle'].setData(data.content);