
function pagination(page, totalPage, limit, url) {

    $(".ountPagination .pagination").html('');
    if (totalPage == 1) {
        return false;
    }
    page = parseInt(page);
   // limit = parseInt(limit);
    nextPage = page - 4;
    prevPage = page + 5;

    pre = totalPage - page;
    if (pre < 10 && totalPage > 10) {
        nextPage = totalPage - 10;
    }
    if (nextPage < 1) {
        prevPage = (prevPage - nextPage) + 1;
        nextPage = 1;

    }

    for (i = 1; i <= totalPage; i++) {
        if (i < nextPage || i > prevPage) {
            continue;
        }

        itemPage = '<li><a href="' + serverName + url + '/' +i+'/' +limit+'">' + i + '</a></li>';
        if (i == page) {
            itemPage = '<li class="disabled"><a>' + i + '</a></li>';
        }

        $(".ountPagination .pagination").append(itemPage);
    }
}