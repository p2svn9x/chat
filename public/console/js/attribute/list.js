$('.switchStatus input').click(function () {
    var status = 0;
    var id = $(this).attr('rel');
    if ($(this).is(':checked')) {
        status = 1;
    }
    $.ajax({
        url: serverName + 'console/attribute/status/' + id + '/' + status,
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


var idUserDelete;
function fomDelete(id) {
    if (!id) {
        return false;
    }

    idUserDelete = id;
    $("#fomDeleteUser").modal("show");
}
setTimeout(function(){

    pageList = parseJson(pageList);
    $(".selectCategory").val(parseInt(findCategory));
    pagination(pageList.pageCurrent, pageList.count, pageList.limit,"console/attribute/list/"+findCategory);
}, 1000);

function deleteUser() {
    $("#fomDeleteUser").modal("hide");
    //$("#fromloading").fadeIn(1);
    showFomoad();
    $.ajax({
        url: serverName + 'console/attribute/delete/'+idUserDelete,
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
            }, 1000);

        }, error(result) {
            obj = parseJson(result.responseText);
            dangerEroor(obj.message);
            return false;
        }
    });
}

function findByCategory() {
    ca = $(".selectCategory").val();
    if (!ca) {
        return false;
    }

    location.href = serverName + 'console/attribute/list/'+ca;
}