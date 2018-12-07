<html lang="en">

<head>
    <meta name="viewport" content="width=device-width,minimum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta property="og:image" content="https://stc-chat.zdn.vn/images/banner/zalo-thumb-link.png">
    <meta name="description" content="">
    <meta name="google-site-verification" content="">
    <meta name="keywords" content="">
    <title>Zalo Web</title>
    <link id="favico" rel="icon" type="image/png" href="">

    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('/') }}css/dashboard/style.css" />
</head>

<body class="default web active   " style="--nav-width:400px;">
<div id="app" style="display:none">
    <div class="flx flx-col default" id="app-page">
        <div id="titleBar" class="draggable  titlebar"></div>
        <div id="container">
            <nav class="flx ">
                <div id="main-tab" class="nav__tabs flx flx-col flx-sp-btw" style="background-image: linear-gradient(rgb(72, 198, 239), rgb(111, 134, 214));">
                    <div class="user-mode-icon-avt" style="top: 46px;">
                        <div style="width: 10px; height: 10px; background: rgb(98, 203, 0); border-radius: 50%; display: inline-block; border: 1px solid white; top: -1px; position: relative;"></div><i class="fa"></i>
                    </div>
                    <div class="nav__tabs__zalo web">
                        <div class="avatar avatar--nav clickable">
                            <div class="avatar-img " style="background-image: url(&quot;//s120.avatar.talk.zdn.vn/4/6/0/6/7/120/9ef33d72aa38a99628130da2ea63278e.jpg&quot;);"></div>
                        </div>
                        <div data-tooltip="" data-position="" class="popover-container " id=""></div>
                    </div>
                    <div class="nav__tabs__top">
                        <div class="nav__tabs__bottom__btn nav__tabs__bottom__btn__mention flx flx-col flx-al-c tooltip " style="position: relative; top: -15px;">
                            <div style="top: -6px; left: 60px; position: absolute; pointer-events: none;"></div><i class="fa clickable  fa-tab-icon-notification" data-translate-title="STR_MENTIONED_YOU_CONVERSATION" title="Nhắc đến bạn"></i>
                        </div>
                        <div id="message-tab" class="clickable main-tab-btn main-tab-btn__icon-message flx flx-col flx-al-c  selected" data-translate-title="STR_TAB_MESSAGE" title="Tin nhắn (Alt+1)" style="position: relative;"><i class="fa #main-tab   fa-tab-message-selected" style="font-size: 23px; top: 1px; left: 2px; position: relative;"></i>
                        </div>
                        <div id="contact-tab" class="clickable main-tab-btn main-tab-btn__icon-contact flx flx-col flx-al-c " data-translate-title="STR_TAB_CONTACT" title="Danh bạ (Alt+2)" style="position: relative;"><i class="fa fa-tab-contact" style="font-size: 27px; left: 1.2px; position: relative;"></i>
                        </div>
                        <div id="shop-tab" class="clickable main-tab-btn tooltip main-tab-btn__icon-shop flx flx-col flx-al-c " style="position: relative;">
                            <div style="top: -6px; left: 60px; position: absolute; pointer-events: none;"></div><i class="fa  fa-shop" data-translate-title="STR_TAB_ZALOSHOP" title="Shop"></i>
                        </div>
                    </div>
                    <div class="nav__tabs__bottom">
                        <div class="nav__tabs__bottom__btn nav__tabs__bottom__btn__star flx flx-center tooltip" style="position: relative;">
                            <div style="top: -15px; left: 60px; position: absolute; pointer-events: none;"></div><i class="fa  clickable  fa-sidebar-icon-star" data-translate-title="STR_STARRED_MESSAGES" title="Tin Đánh Dấu"></i>
                        </div>
                        <div class="nav__tabs__bottom__btn flx flx-center">
                            <div data-tooltip="" data-position="" class="popover-container " id=""><i class="fa fa-tab-icon-setting nav__tabs__bottom__btn__menu clickable" data-translate-title="STR_TAB_SETTING" title="Cài đặt"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flx-cell flx flx-col" style="position: relative; width: 0px;">
                    <div id="user-name">
                        <div class="truncate title-name">Zalo - Langtu Hoabinh</div>
                    </div>
                    <div id="contact-search" class="ovf-hidden web">
                        <div class="group-search">
                            <div>
                                <div style="top: 40px; left: -1px; position: absolute; pointer-events: none;"></div><i class="tooltip btn fa fa-search group-search__icon" aria-hidden="true"></i>
                            </div><span class="fake-textholder truncate" data-translate-inner="STR_SEARCH_FRIEND">Tìm bạn bè, nhóm và tin nhắn</span>
                            <input type="text" id="contact-search-input" value="" tabindex="-1" maxlength="100">
                        </div><span id="inviteBtn" style="position: relative; top: 10px; padding-right: 0px;"><div tabindex="0" aria-hidden="true" class="clickable btn nav-button_add_friend" data-translate-title="STR_CONTACT_ADD_FRIEND" title="Thêm bạn" style="font-size: 22px; top: -6px;"><i class="fa "></i></div></span><span id="composeBtn" style="position: relative; top: 10px;"><div style="top: 35px; left: -5px; position: absolute; pointer-events: none;"></div><div tabindex="1" aria-hidden="true" class="clickable btn" data-translate-title="STR_CREATE_CHAT_GROUP" title="Tạo nhóm chat"><i class="fa fa-tag-add-conversation icon"></i></div></span>
                    </div>
                    <div class="conv-container">
                        <div class="filter-tags-container ">
                            <div>
                                <div style="padding-top: 6px; margin-bottom: 2px; display: flex; justify-content: space-between;"><span class="filter-tag-title filter-title" data-translate-inner="STR_LABEL_CLASS_2">Phân loại</span>
                                    <div style="margin-right: -5px;">
                                        <div class="filter-tag-title filter-button-section" data-translate-title="STR_CREATE_LBL" title="Tạo thẻ mới"><i class="setting-icon fa fa-tag-add" style="top: -1px;"></i>
                                        </div>
                                        <div style="width: 1px; height: 20px; background: rgb(229, 229, 233); margin: 0px 5px; display: inline-block;"></div>
                                        <div class="filter-tag-title filter-button-section" data-translate-title="STR_HIDE_2" title="Ẩn thẻ"><i class="setting-icon fa fa-chevron-up"></i>
                                            <div style="top: 32px; left: -25px; width: 275px; position: absolute; pointer-events: none;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="filter-tags">
                                        <div class="filter-tag-item normal selected" style="padding: 0px 8px;">
                                            <div class="text" style="right: 1px; max-width: 100%;"><span data-translate-inner="STR_ALL_LABEL">Tất cả</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="padding-top: 6px; margin-bottom: 2px; display: flex; justify-content: space-between; border-top: 1px solid rgb(229, 229, 233);">
                                <div style="max-width: 200px; width: calc(100% - 120px);">
                                    <div class="conv-label-title">
                                        <span class="filter-tag-title filter-title truncate" data-translate-inner="STR_CONV_ALL">Tin nhắn</span>
                                        <i class="fa fa-caret-down" style="position: relative; top: -2px; padding: 5px; font-size: 10px;"></i>
                                    </div>
                                    <div data-tooltip="" data-position="" class="popover-container " id=""></div>
                                </div>
                                <div style="flex: 1 1 0%;"></div>
                                <div class="filter-tail-text disabled" data-translate-inner="STR_LABEL_MARK_READ">Đánh dấu đã đọc</div>
                            </div>
                        </div>
                        <div class="web" id="conversationListId" tabindex="999" style="position: relative; display: block; flex: 2 1 0%;">
                            <div data-tooltip="" data-position="" class="popover-container func-setting popover-container" id=""></div>
                            <div style="overflow: visible; height: 0px; width: 0px;">
                                <div class="virtualized-scroll" style="height: 0px; width: 329px;">
                                    <div aria-label="grid" class="ReactVirtualized__Grid ReactVirtualized__List" role="grid" tabindex="-2" style="box-sizing: border-box; direction: ltr; height: 0px; position: absolute; width: 329px; will-change: transform; overflow: auto;"></div>
                                    <div class="scroll-content" id="conversationListScrollbar" style="position: relative; overflow: hidden; width: 12px; height: 0px;">
                                        <div style="position: absolute; top: 0px; left: 0px; right: 0px; bottom: 0px; overflow: scroll; margin-right: -7px; margin-bottom: -7px;">
                                            <div class="scrollbar-container" style="height: 666px;"></div>
                                        </div>
                                        <div style="position: absolute; height: 6px; transition: opacity 200ms ease 0s; opacity: 0; right: 2px; bottom: 2px; left: 2px; border-radius: 3px;">
                                            <div style="position: relative; display: block; height: 100%; cursor: pointer; border-radius: inherit; background-color: rgba(0, 0, 0, 0.2); width: 0px;"></div>
                                        </div>
                                        <div style="position: absolute; width: 6px; transition: opacity 200ms ease 0s; opacity: 0; right: 2px; bottom: 2px; top: 2px; border-radius: 3px;">
                                            <div style="position: relative; display: block; width: 8px; background-color: rgb(204, 204, 204); border-radius: 3px; height: 0px; transform: translateY(0px);"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 330px; height: 1px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <div id="resize-handle"></div>
            <main>
                <div class=" main__center dib fl-l animated show-right-bar expand-right" tabindex="1">
                    <header>
                        <div class="threadChat nocall">
                            <div class="threadChat__avatar clickable">
                                <div style="position: absolute; top: 44px; left: 43px; z-index: 1;">
                                    <div style="width: 14px; height: 14px; background: rgb(98, 203, 0); border-radius: 50%; display: inline-block; border: 2px solid white;"></div>
                                </div>
                                <div class="avatar avatar--sl">
                                    <div class="avatar-img " style="background-image: url(&quot;//s120.avatar.talk.zdn.vn/9/c/d/2/54/120/1af1a2c93c788d7cf1cbf50ae87ac972.jpg&quot;);"></div>
                                </div>
                            </div>
                            <div class="threadChat__title  ">
                                <div id="groupNameInput--change">
                                    <div class="title header-title group-title user">
                                        <div class="truncate content">My love</div><i class="fa fa-edit edit-icon clickable "></i>
                                    </div>
                                </div>
                                <div class="flx" style="min-width: 0px; text-overflow: ellipsis; white-space: nowrap; color: rgb(109, 115, 121);"><span class="subtitle header-subtitle"><span> <span> <span data-translate-inner="STR_JUST_NOW">Mới truy cập</span></span>
                                        </span>
                                        </span>
                                    <div><span class="subtitle-separator" style="position: relative; display: inline-block;"></span><i class="fa fa-header-icon-tag label-ico-header" data-translate-title="STR_LABEL_CLASS" title="Phân loại" style="font-size: 17px; position: relative; top: 2px; margin: 0px 4px;"></i>
                                        <div data-tooltip="" data-position="" class="popover-container " id=""></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flx-fix flx flx-al-c" id="headerBtns">
                            <a class="header-btn func-create-group " data-translate-title="STR_ADD_FRIEND_TO_CONVERSATION" title="Thêm bạn vào trò chuyện">
                                <i class="btn fa fa-plus "></i>
                            </a>
                            <a class="header-btn tooltip" data-translate-title="STR_VIDEO_CALL" title="Cuộc gọi video" style="position: relative;">
                                <i class="btn fa fa-chat-header-icon-video" style="font-size: 17px;"></i>
                                <div style="top: 33px; left: -226px; position: absolute; pointer-events: none;"></div>
                            </a>
                            <a class="header-btn func-search tooltip" data-translate-title="STR_SEARCH_MESSAGES" title="Tìm kiếm tin nhắn" style="position: relative;">
                                <div style="top: 33px; left: -226px; position: absolute; pointer-events: none;"></div><i class="btn fa fa-search " style="font-size: 20px;"></i>
                            </a>
                            <a class="header-btn func-menu" data-translate-title="STR_CONVERSATION_INFO" title="Thông tin cuộc trò chuyện" style="position: relative;">
                                <div style="top: 33px; left: -278px; position: absolute; pointer-events: none;"></div><i class="tooltip btn fa fa-sidebar-icn info-highlight" style="font-size: 20px;"></i>
                            </a>
                        </div>
                    </header>
                    <article id="chatView" class="">
                        <canvas width="1005" id="effectcanvas" height="630" style="display: none; z-index: 9999; position: fixed;"></canvas>
                        <div id="effectdiv" style="height: 600px; width: 600px; top: 15px; left: 202.5px; display: none; z-index: 9999; position: absolute;"></div>
                        <div id="messageView" class="message-view" tabindex="21">
                            <div class="">
                                <div data-tooltip="" data-position="" class="popover-container func-setting popover-container" id=""></div>
                            </div>
                            <div data-tooltip="" data-position="" class="popover-container " id=""></div>
                            <div class="message-view__blur__overlay"></div>
                            <div id="dragOverlayMessageView" class="drag-over-overlay"></div>
                            <div id="messageViewContainer" class=" message-view__scroll " style="position: relative; overflow: hidden; width: 100%; height: 100%;">
                                <div style="position: absolute; top: 0px; left: 0px; right: 0px; bottom: 0px; overflow: scroll; margin-right: -7px; margin-bottom: -7px; will-change: transform;">
                                    <div class="message-view__scroll__inner fadeInAndOut " id="messageViewScroll">
                                        <div class="chat-date"><span>09:11 07/12/2018</span>
                                        </div>
                                        <div class="chat-item flx me">
                                            <div class="avatar avatar--s" style="z-index: 1;">
                                                <div class="avatar-img  outline" style="background-image: url(&quot;//s120.avatar.talk.zdn.vn/4/6/0/6/7/120/9ef33d72aa38a99628130da2ea63278e.jpg&quot;);"></div>
                                            </div>
                                            <div class="chat-content flx flx-col flx-cell  me">
                                                <div class="chat-message wrap-message rotate-container me ">
                                                    <div class="" style="display: flex; align-items: flex-start; justify-content: flex-end;">
                                                        <div class="chat-message__actionholder  me "></div>
                                                        <div class="card  me  card--text">
                                                            <div><span><span class="text">vo oi sang em an j chua</span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat-message wrap-message rotate-container me ">
                                                    <div class="" style="display: flex; align-items: flex-start; justify-content: flex-end;">
                                                        <div class="chat-message__actionholder  me "></div>
                                                        <div class="card  me  card--text">
                                                            <div><span><span class="text">anh dan an trung luoc</span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat-message wrap-message rotate-container me ">
                                                    <div class="" style="display: flex; align-items: flex-start; justify-content: flex-end;">
                                                        <div class="chat-message__actionholder  me  last-msg"></div>
                                                        <div class="card  me  last-msg card--text">
                                                            <div><span><span class="text">chuc vo yeu ngay moi  vui ve lam viec tot vo nhe yeu vo yeu </span></span>
                                                            </div>
                                                            <div class="card-send-time me "><span class="card-send-time__sendTime">09:26</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat-item flx ">
                                            <div class="avatar avatar--s" style="z-index: 1;">
                                                <div class="avatar-img  outline" style="background-image: url(&quot;//s120.avatar.talk.zdn.vn/9/c/d/2/54/120/1af1a2c93c788d7cf1cbf50ae87ac972.jpg&quot;);"></div>
                                            </div>
                                            <div class="chat-content flx flx-col flx-cell ">
                                                <div class="chat-message wrap-message rotate-container ">
                                                    <div class="" style="display: flex; align-items: flex-start;">
                                                        <div class="card  card--text">
                                                            <div><span><span class="text">chúc anh ngày mới tốt lành</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="chat-message__actionholder "></div>
                                                    </div>
                                                </div>
                                                <div class="chat-message wrap-message rotate-container ">
                                                    <div class="" style="display: flex; align-items: flex-start;">
                                                        <div class="card  card--text">
                                                            <div><span><span class="text">yêu anh</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="chat-message__actionholder "></div>
                                                    </div>
                                                </div>
                                                <div class="chat-message wrap-message rotate-container ">
                                                    <div class="" style="display: flex; align-items: flex-start;">
                                                        <div class="card  last-msg card--text">
                                                            <div><span><span class="text">sáng anh ăn mấy quả trứng a?</span></span>
                                                            </div>
                                                            <div class="card-send-time "><span class="card-send-time__sendTime">09:30</span>
                                                            </div>
                                                        </div>
                                                        <div class="chat-message__actionholder  last-msg"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat-item flx me">
                                            <div class="avatar avatar--s" style="z-index: 1;">
                                                <div class="avatar-img  outline" style="background-image: url(&quot;//s120.avatar.talk.zdn.vn/4/6/0/6/7/120/9ef33d72aa38a99628130da2ea63278e.jpg&quot;);"></div>
                                            </div>
                                            <div class="chat-content flx flx-col flx-cell  me">
                                                <div class="chat-message wrap-message rotate-container me ">
                                                    <div class="" style="display: flex; align-items: flex-start; justify-content: flex-end;">
                                                        <div class="chat-message__actionholder  me "></div>
                                                        <div class="card  me  card--text">
                                                            <div><span><span class="text">anh an 2 qua hehe</span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat-message wrap-message rotate-container me ">
                                                    <div class="" style="display: flex; align-items: flex-start; justify-content: flex-end;">
                                                        <div class="chat-message__actionholder  me  last-msg"></div>
                                                        <div class="card  me  last-msg card--text">
                                                            <div><span><span class="text">sang vo yêu an j</span></span>
                                                            </div>
                                                            <div class="card-send-time me "><span class="card-send-time__sendTime">09:49</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat-item flx ">
                                            <div class="avatar avatar--s" style="z-index: 1;">
                                                <div class="avatar-img  outline" style="background-image: url(&quot;//s120.avatar.talk.zdn.vn/9/c/d/2/54/120/1af1a2c93c788d7cf1cbf50ae87ac972.jpg&quot;);"></div>
                                            </div>
                                            <div class="chat-content flx flx-col flx-cell ">
                                                <div class="chat-message wrap-message rotate-container ">
                                                    <div class="" style="display: flex; align-items: flex-start;">
                                                        <div class="card  card--text">
                                                            <div><span><span class="text">sáng em ăn nem trạo</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="chat-message__actionholder "></div>
                                                    </div>
                                                </div>
                                                <div class="chat-message wrap-message rotate-container ">
                                                    <div class="" style="display: flex; align-items: flex-start;">
                                                        <div class="card  last-msg card--text">
                                                            <div><span><span class="text">chi Trang mang đi nên mấy chị em ngồi gói</span></span>
                                                            </div>
                                                            <div class="card-send-time "><span class="card-send-time__sendTime">10:05</span>
                                                            </div>
                                                        </div>
                                                        <div class="chat-message__actionholder  last-msg"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat-item flx me">
                                            <div class="avatar avatar--s" style="z-index: 1;">
                                                <div class="avatar-img  outline" style="background-image: url(&quot;//s120.avatar.talk.zdn.vn/4/6/0/6/7/120/9ef33d72aa38a99628130da2ea63278e.jpg&quot;);"></div>
                                            </div>
                                            <div class="chat-content flx flx-col flx-cell  me">
                                                <div class="chat-message wrap-message rotate-container me ">
                                                    <div class="" style="display: flex; align-items: flex-start; justify-content: flex-end;">
                                                        <div class="chat-message__actionholder  me  last-msg"></div>
                                                        <div class="card  me  last-msg card--text">
                                                            <div><span><span class="text">co làm cốc bia không</span></span>
                                                            </div>
                                                            <div class="card-send-time me "><span class="card-send-time__sendTime">10:06</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat-item flx ">
                                            <div class="avatar avatar--s" style="z-index: 1;">
                                                <div class="avatar-img  outline" style="background-image: url(&quot;//s120.avatar.talk.zdn.vn/9/c/d/2/54/120/1af1a2c93c788d7cf1cbf50ae87ac972.jpg&quot;);"></div>
                                            </div>
                                            <div class="chat-content flx flx-col flx-cell ">
                                                <div class="chat-message wrap-message rotate-container ">
                                                    <div class="" style="display: flex; align-items: flex-start;">
                                                        <div class="card  last-msg card--text">
                                                            <div><span><span class="text">hâm hấp</span></span>
                                                            </div>
                                                            <div class="card-send-time "><span class="card-send-time__sendTime">10:06</span>
                                                            </div>
                                                        </div>
                                                        <div class="chat-message__actionholder  last-msg"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat-item flx me">
                                            <div class="avatar avatar--s" style="z-index: 1;">
                                                <div class="avatar-img  outline" style="background-image: url(&quot;//s120.avatar.talk.zdn.vn/4/6/0/6/7/120/9ef33d72aa38a99628130da2ea63278e.jpg&quot;);"></div>
                                            </div>
                                            <div class="chat-content flx flx-col flx-cell  me">
                                                <div class="chat-message wrap-message rotate-container me ">
                                                    <div class="" style="display: flex; align-items: flex-start; justify-content: flex-end;">
                                                        <div class="chat-message__actionholder  me "></div>
                                                        <div class="card  me  card--text">
                                                            <div><span><span class="text">làm cốc bia làm việc cho nó tít</span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat-message wrap-message rotate-container me ">
                                                    <div class="" style="display: flex; align-items: flex-start; justify-content: flex-end;">
                                                        <div class="chat-message__actionholder  me "></div>
                                                        <div class="card  me  card--text">
                                                            <div>
																	<span>
																	<span class="emoji-sizer emoji-outer  larger" style="background: url(&quot;https://zalo-chat-static.zadn.vn/emoji.png?v=20180604&quot;) 82% 5% / 5100%; -webkit-user-drag: element; margin: 0px 0px -3px;">:')</span>
																		<span class="text"> </span>
																	</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat-message wrap-message rotate-container me ">
                                                    <div class="" style="display: flex; align-items: flex-start; justify-content: flex-end;">
                                                        <div class="chat-message__actionholder  me  last-msg has-status "></div>
                                                        <div class="card  me  last-msg has-status  card--text">
                                                            <div><span><span class="text">em con nhieu viec khong </span></span>
                                                            </div>
                                                            <div class="card-send-time me ">
                                                                <span class="card-send-time__sendTime">10:11</span>
                                                                <span class="card-send-status ">
																		<span data-translate-inner="STR_SEEN">Đã xem</span>
																	</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="position: absolute; height: 6px; transition: opacity 200ms ease 0s; opacity: 0; width: 0px;">
                                    <div style="position: relative; display: block; height: 100%; cursor: pointer; border-radius: inherit; background-color: rgba(0, 0, 0, 0.2); width: 0px;"></div>
                                </div>
                                <div style="position: absolute; width: 8px; transition: opacity 200ms ease 0s; opacity: 0; right: 2px; bottom: 2px; top: 2px; border-radius: 3px;">
                                    <div style="position: relative; display: block; width: 100%; cursor: pointer; border-radius: inherit; background-color: rgba(0, 0, 0, 0.2); height: 0px; transform: translateY(0px);"></div>
                                </div>
                            </div><img class="message-view__blur " src="blob:https://chat.zalo.me/76e8a003-9e3d-4b21-a06f-0f1c3a5d0f98" style="opacity: 0.85; image-rendering: pixelated;">
                            <div class="flx flx-al-c chat-notify scroll-to-bottom"><i class="fa fa-csc-icon-bottom"></i>
                            </div>
                        </div>
                        <div id="chatInput" class="chat-input web">
                            <div id="chatInput-popover-container"></div>
                            <div id="dragOverlayInputbox" class="drag-over-overlay"></div>
                            <div id="chatInputTools" class="chat-input__tools flx-fix flx flx-al-s flx-sp-btw">
                                <div class="" style="margin-left: 6px; margin-top: 1px; width: 100%;">
                                    <div style="position: relative; width: 24px;">
                                        <div style="left: -28px; bottom: 5px; position: absolute; pointer-events: none;"></div>
                                        <div data-tooltip="" data-position="" class="popover-container chat-input__tools__btn" id="StickerPopupButton"><i class="btn fa fa-smile-o" data-translate-title="STR_SEND_STICKER" title="Gửi Sticker"></i>
                                        </div>
                                    </div>
                                    <a class="chat-input__tools__btn" data-translate-title="STR_SEND_PHOTO" title="Gửi hình ảnh">
                                        <div class="inputfile-container" style="position: relative;">
                                            <input type="file" name="file" id="file" class="inputfile" accept=".png, .jpg, .jpeg, .gif" multiple="">
                                            <div style="left: -20px; bottom: 40px; position: absolute; pointer-events: none;"></div>
                                            <label class="tooltip btn fa fa-chatbar-icon-photo iup-image" for="file"></label>
                                        </div>
                                    </a>
                                    <div style="position: relative;">
                                        <div style="left: 85px; bottom: 10px; position: absolute; pointer-events: none;"></div>
                                        <div style="left: 85px; bottom: 10px; position: absolute; pointer-events: none;"></div>
                                        <a class="chat-input__tools__btn" data-translate-title="STR_SEND_FILE_1GB" title="Gửi File lên đến 1GB" style="margin-top: 6px;">
                                            <div class="inputfile-container">
                                                <input type="file" name="file2" id="file2" class="inputfile" multiple="">
                                                <label class="btn fa fa-paperclip iup-file" for="file2" style="padding-right: 25px; padding-left: 10px; margin-right: -25px; margin-left: -10px;"></label>
                                                <span title="Gửi File lên đến 1GB" style="font-size: 10px; font-weight: 700; color: rgb(0, 104, 255); margin-right: -25px; margin-left: -15px; padding: 15px; cursor: pointer;">1GB</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="chat-input__tools__btn" style="margin-top: 10px;"><i class="btn fa fa-capture-zalo capture-icon "></i>
                                    </div>
                                    <div style="position: relative;">
                                        <div style="left: 189px; bottom: 7px; position: absolute; pointer-events: none;"></div>
                                        <a class="chat-input__tools__btn" data-translate-title="STR_SEND_CONTACT" title="Gửi danh thiếp" style="margin-right: 11px; margin-left: 13px;">
                                            <div class="inputfile-container">
                                                <label class="drive-btn fa  fa-chatbar-icon-contact" for="namecard"></label>
                                            </div>
                                        </a>
                                    </div>
                                    <div style="position: relative; display: inline-block; top: 5px;">
                                        <div data-tooltip="" data-position="" class="popover-container chat-input__tools__btn" id="" style="font-size: 5px;"><i class="btn btn--s fa fa-chatbar-icon-more-input" data-translate-title="STR_MORE" title="Thêm" style="font-size: 5px;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-input__content">
                                <div class="chat-input__content__input">
                                    <div style="display: flex;">
                                        <div contenteditable="true" id="richInput" class="rich-input empty" spellcheck="false" tabindex="1" suggestion="@ - gợi ý" autocomplete="off" autocorrect="off" alt="" data-translate-placeholder="STR_MESSAGE_TO" placeholder="Nhập @, tin nhắn tới  My love" data-trailer="My love">
                                            <div id="input_line_0">
                                                <br>
                                            </div>
                                        </div>
                                        <div data-tooltip="" data-position="" class="popover-container " id=""><i class="btn emoji-style emoji-chat-bar fa fa-chat-bar-icon-emoticon" data-translate-title="STR_EMOTICON_TT" title="Biểu cảm"></i>
                                        </div>
                                        <div class="mention-style" id="chatbar-mention" data-translate-title="STR_TOOLTIP_MENTION_1_1" title="Gợi ý tiện tích">
                                            <div style="position: relative;"><i class="fa fa-chatbar-icon-mention" id="chatbar-mention-icon"></i>
                                            </div>
                                        </div>
                                        <div class="chat-input__content__send">
                                            <div data-translate-title="STR_TOOLTIP_EMOJI" title="Gửi nhanh biểu tượng cảm xúc" style="padding-right: 4px; cursor: pointer; position: relative; top: -2px;">
                                                <span class="emoji-sizer emoji-outer " style="background: url(&quot;https://zalo-chat-static.zadn.vn/emoji.png?v=20180604&quot;) 84% 82.5% / 5100%; -webkit-user-drag: none; margin: 0px 18.5px 0px 10px; width: 26px; height: 26px; cursor: pointer;">/-strong</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <aside class="dib fl-lweb" style="height: 100vh;">
                    <div id="chatInfo" class="flx-cell chat-info ">
                        <div class="chat-info__header web" style="height: 85px;">
                            <div class="chat-info__header__title" style="padding-top: 40px; text-transform: uppercase;"><span data-translate-inner="STR_CONVERSATION_INFO" style="text-transform: uppercase;">Thông tin cuộc trò chuyện</span>
                            </div>
                        </div>
                        <div id="sideBodyScrollBox" class="chat-info__body">
                            <div id="chatInfoGeneral" class="chat-info-general animatedundefined">
                                <div style="position: relative; overflow: hidden; width: 100%; height: 100%;">
                                    <div style="position: absolute; top: 0px; left: 0px; right: 0px; bottom: 0px; overflow: scroll; margin-right: -7px; margin-bottom: -7px;">
                                        <div id="chatInfoEdit" class="chat-info-general__options chat-info-general__section">
                                            <div id="add-setting-box" class="chat-info-general__action flx-cell" style="overflow: visible; contain: inherit;">
                                                <div id="addFriendGroup" class="chat-info-general__section chat-info-general__action__item chat-info-general__action__item--align clickable"><i class="fa fa-add-member-group chat-info-general__action__item__icon--top" style="top: 1px; font-size: 17px; padding-right: 5px;"></i><span data-translate-inner="STR_CREATE_CONVERSATION_GROUP">Tạo nhóm trò chuyện</span>
                                                </div>
                                                <div style="position: relative; display: flex;">
                                                    <div style="top: 43px; left: 9px; position: absolute; pointer-events: none;"></div>
                                                    <div id="editAlias" class="chat-info-general__action__item chat-info-general__section chat-info-general__action__item--align clickable" style="width: 100%;"><span class="fa  fa-sidebar-icon-alias chat-info-general__action__item__icon--top" style="top: 1px; left: 2px; font-size: 18px; padding-right: 12px;"></span><span data-translate-inner="STR_RENAME_ALIAS">Đặt tên gợi nhớ </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="group-emoji" class="chat-info-general__section">
                                            <div class="chat-info-general__action__item chat-info-general__action__item--align  chat-info-general__action__item--no-after">
                                                <div><span class="emoji-sizer emoji-outer " style="background: url(&quot;https://zalo-chat-static.zadn.vn/emoji.png?v=20180604&quot;) 84% 82.5% / 5100%; -webkit-user-drag: none; margin: -1px 5px 0px 0px; width: 21px; height: 21px; cursor: default;">/-strong</span>
                                                </div><span data-translate-inner="STR_EMOJI_SETTING">Cài đặt biểu tượng cảm xúc</span>
                                            </div>
                                        </div>
                                        <div id="group-media" class="chat-info-general__section chat-info-general__section--media chat-info-general__action__item--no-after chat-info-general__section--border">
                                            <div class="chat-info-general__section__body  ">
                                                <div class="limit-media-container" style="" id="shared-images-container">
                                                    <div class="chat-info-general__action__item  chat-info-general__action__item--align chat-info-general__action__item--no-after "><span class="fa fa-chatbar-icon-photo chat-info-general__action__item__icon--top" style="top: 1px; font-size: 18px; padding-right: 7px;"></span>Media</div>
                                                    <div class="media-store-preview">
                                                        <div class=" media-store-preview-item  common-overlay ">
                                                            <div class="select-media-btn "><i class="fa  fa-multiselect-stroke-checkbox unselect-msg "></i><i class=" fa fa-multiselect_checkbox_hover hover-unselected-item"></i>
                                                            </div><img class="thumb media-store-preview-item__picture" src="//t.f10.photo.talk.zdn.vn/8187708092986772372/6302465e7b2b9875c13a.jpg" crossorigin="Anonymous" data-drag-src="http://f10.photo.talk.zdn.vn/8187708092986772372/6302465e7b2b9875c13a.jpg">
                                                            <div class="image-menu-container"><i class="fa fa-media-stroke-menu image-menu-icon"></i><i class="fa fa-media-bg-menu image-menu-background"></i>
                                                            </div>
                                                        </div>
                                                        <div class=" media-store-preview-item  common-overlay ">
                                                            <div class="select-media-btn "><i class="fa  fa-multiselect-stroke-checkbox unselect-msg "></i><i class=" fa fa-multiselect_checkbox_hover hover-unselected-item"></i>
                                                            </div><img class="thumb media-store-preview-item__picture" src="//t.f10.photo.talk.zdn.vn/8584884328517813415/eb99889f28fccba292ed.jpg" crossorigin="Anonymous" data-drag-src="http://b.f6.photo.talk.zdn.vn/8584884328517813415/eb99889f28fccba292ed.jpg">
                                                            <div class="image-menu-container"><i class="fa fa-media-stroke-menu image-menu-icon"></i><i class="fa fa-media-bg-menu image-menu-background"></i>
                                                            </div>
                                                        </div>
                                                        <div class=" media-store-preview-item  common-overlay ">
                                                            <div class="select-media-btn "><i class="fa  fa-multiselect-stroke-checkbox unselect-msg "></i><i class=" fa fa-multiselect_checkbox_hover hover-unselected-item"></i>
                                                            </div><img class="thumb media-store-preview-item__picture" src="//t.f3.photo.talk.zdn.vn/5260435216782665007/f92747ff4299a1c7f888.jpg" crossorigin="Anonymous" data-drag-src="http://f3.photo.talk.zdn.vn/5260435216782665007/f92747ff4299a1c7f888.jpg">
                                                            <div class="image-menu-container"><i class="fa fa-media-stroke-menu image-menu-icon"></i><i class="fa fa-media-bg-menu image-menu-background"></i>
                                                            </div>
                                                        </div>
                                                        <div class=" media-store-preview-item  common-overlay ">
                                                            <div class="select-media-btn "><i class="fa  fa-multiselect-stroke-checkbox unselect-msg "></i><i class=" fa fa-multiselect_checkbox_hover hover-unselected-item"></i>
                                                            </div><img class="thumb media-store-preview-item__picture" src="//t.f7.photo.talk.zdn.vn/5589645467067752853/ee58aff701ade2f3bbbc.jpg" crossorigin="Anonymous" data-drag-src="http://f7.photo.talk.zdn.vn/5589645467067752853/ee58aff701ade2f3bbbc.jpg">
                                                            <div class="image-menu-container"><i class="fa fa-media-stroke-menu image-menu-icon"></i><i class="fa fa-media-bg-menu image-menu-background"></i>
                                                            </div>
                                                        </div>
                                                        <div class=" media-store-preview-item  common-overlay ">
                                                            <div class="select-media-btn "><i class="fa  fa-multiselect-stroke-checkbox unselect-msg "></i><i class=" fa fa-multiselect_checkbox_hover hover-unselected-item"></i>
                                                            </div><img class="thumb media-store-preview-item__picture" src="//t.f2.photo.talk.zdn.vn/6335036471589390266/64e0e120e9780a265369.jpg" crossorigin="Anonymous" data-drag-src="http://f2.photo.talk.zdn.vn/6335036471589390266/64e0e120e9780a265369.jpg">
                                                            <div class="image-menu-container"><i class="fa fa-media-stroke-menu image-menu-icon"></i><i class="fa fa-media-bg-menu image-menu-background"></i>
                                                            </div>
                                                        </div>
                                                        <div class=" media-store-preview-item  common-overlay ">
                                                            <div class="select-media-btn "><i class="fa  fa-multiselect-stroke-checkbox unselect-msg "></i><i class=" fa fa-multiselect_checkbox_hover hover-unselected-item"></i>
                                                            </div><img class="thumb media-store-preview-item__picture" src="//t.f9.photo.talk.zdn.vn/6102857452877415379/7466981c7341901fc950.jpg" crossorigin="Anonymous" data-drag-src="http://f9.photo.talk.zdn.vn/6102857452877415379/7466981c7341901fc950.jpg">
                                                            <div class="image-menu-container"><i class="fa fa-media-stroke-menu image-menu-icon"></i><i class="fa fa-media-bg-menu image-menu-background"></i>
                                                            </div>
                                                        </div>
                                                        <div class=" media-store-preview-item  common-overlay ">
                                                            <div class="select-media-btn "><i class="fa  fa-multiselect-stroke-checkbox unselect-msg "></i><i class=" fa fa-multiselect_checkbox_hover hover-unselected-item"></i>
                                                            </div><img class="thumb media-store-preview-item__picture" src="//t.f10.photo.talk.zdn.vn/567715746405866796/90267605fc561f084647.jpg" crossorigin="Anonymous" data-drag-src="http://f10.photo.talk.zdn.vn/567715746405866796/90267605fc561f084647.jpg">
                                                            <div class="image-menu-container"><i class="fa fa-media-stroke-menu image-menu-icon"></i><i class="fa fa-media-bg-menu image-menu-background"></i>
                                                            </div>
                                                        </div>
                                                        <div class=" media-store-preview-item  common-overlay ">
                                                            <div class="select-media-btn "><i class="fa  fa-multiselect-stroke-checkbox unselect-msg "></i><i class=" fa fa-multiselect_checkbox_hover hover-unselected-item"></i>
                                                            </div><img class="thumb media-store-preview-item__picture" src="//t.f9.photo.talk.zdn.vn/4743124420464548079/292fb7e032b3d1ed88a2.jpg" crossorigin="Anonymous" data-drag-src="http://f9.photo.talk.zdn.vn/4743124420464548079/292fb7e032b3d1ed88a2.jpg">
                                                            <div class="image-menu-container"><i class="fa fa-media-stroke-menu image-menu-icon"></i><i class="fa fa-media-bg-menu image-menu-background"></i>
                                                            </div>
                                                        </div>
                                                        <div class="view-more" style="padding: 5px 0px 15px; position: absolute; width: inherit; top: 14px; right: 13px; display: block; pointer-events: none;">
                                                            <div class="btn view-more__text"><span data-translate-inner="STR_VIEW_ALL">Xem tất cả</span><i class="fa fa-chevron-right"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat-info-general__section chat-info-general__section--media  chat-info-general__section--border chat-info-general__action__item--no-after">
                                            <div class="animated ">
                                                <div class="limit-media-container" id="info-files-container">
                                                    <div class="chat-info-general__action__item chat-info-general__action__item--align chat-info-general__action__item--no-after"><span class="fa fa-sidebar-icon-file chat-info-general__action__item__icon--top" style="top: 1px; font-size: 19px; padding-right: 8px;"></span>File</div>
                                                    <div>
                                                        <div class="flx flx-col chat-info-file__group__items">
                                                            <div class=" media-item flx ">
                                                                <div class="select-file-btn "><i class="fa  fa-multiselect-stroke-checkbox unselect-msg "></i><i class=" fa fa-multiselect_checkbox_hover hover-unselected-item"></i>
                                                                </div>
                                                                <div class="avatar media-item__file-type" style=""><img src="https://zalo-file-dl2.zdn.vn/be2af8e19eda74842dcb/2150126695870328665" class="media-item__file-type__photo">
                                                                </div>
                                                                <div class=" z-ml flx-cell">
                                                                    <div class="flx flx-sp-btw">
                                                                        <div title="Capture.PNG" class="media-item-title">Capture.PNG</div>
                                                                        <div class="media-item-date media-item-date__file">26/11</div>
                                                                    </div>
                                                                    <div class="flx flx-sp-btw" style="margin-top: 8px;">
                                                                        <div>
                                                                            <div class="hide-on-hover"><span class="media-item-subtitle__size">13 KB</span>
                                                                            </div>
                                                                            <div class="show-on-hover">
                                                                                <div class="media-item-subtitle"><span class="media-item-subtitle__size" data-translate-inner="STR_CLICK_TO_VIEW">Nhấn để xem trước</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="media-item__file-action">
                                                                            <a class="clickable media-item__file-action__btn" data-translate-title="STR_VIEW_IN_FOLDER" title="Hiển thị trong thư mục">
                                                                                <i class="fa fa-search"></i>
                                                                            </a>
                                                                            <a class="clickable media-item__file-action__btn" data-translate-title="STR_SAVE" title="Lưu">
                                                                                <i class="fa fa-file-preview-download-icon" style="font-size: 16px;"></i>
                                                                            </a>
                                                                            <a class="clickable media-item__file-action__btn" data-translate-title="STR_FORWARD_MSG" title="Chia sẻ">
                                                                                <i class="fa fa-sidebar-icon-share" style="font-size: 14px;"></i></a>
                                                                            <a class="clickable media-item__file-action__btn" data-translate-title="STR_MORE_ACTION" title="Xem thêm">
                                                                                <i class="fa fa-tab-icon-more" style="font-size: 22px; position: relative; top: 5px;"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=" media-item flx ">
                                                                <div class="select-file-btn "><i class="fa  fa-multiselect-stroke-checkbox unselect-msg "></i><i class=" fa fa-multiselect_checkbox_hover hover-unselected-item"></i>
                                                                </div>
                                                                <div class="avatar media-item__file-type" style=""><img src="https://zalo-file-dl3.zdn.vn/2e60c881b8ba52e40bab/5758536509293220125" class="media-item__file-type__photo">
                                                                </div>
                                                                <div class=" z-ml flx-cell">
                                                                    <div class="flx flx-sp-btw">
                                                                        <div title="tong.PNG" class="media-item-title">tong.PNG</div>
                                                                        <div class="media-item-date media-item-date__file">26/11</div>
                                                                    </div>
                                                                    <div class="flx flx-sp-btw" style="margin-top: 8px;">
                                                                        <div>
                                                                            <div class="hide-on-hover"><span class="media-item-subtitle__size">28 KB</span>
                                                                            </div>
                                                                            <div class="show-on-hover">
                                                                                <div class="media-item-subtitle"><span class="media-item-subtitle__size" data-translate-inner="STR_CLICK_TO_VIEW">Nhấn để xem trước</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="media-item__file-action"><a class="clickable media-item__file-action__btn" data-translate-title="STR_VIEW_IN_FOLDER" title="Hiển thị trong thư mục"><i class="fa fa-search"></i></a><a class="clickable media-item__file-action__btn" data-translate-title="STR_SAVE" title="Lưu"><i class="fa fa-file-preview-download-icon" style="font-size: 16px;"></i></a><a class="clickable media-item__file-action__btn" data-translate-title="STR_FORWARD_MSG" title="Chia sẻ"><i class="fa fa-sidebar-icon-share" style="font-size: 14px;"></i></a><a class="clickable media-item__file-action__btn" data-translate-title="STR_MORE_ACTION" title="Xem thêm"><i class="fa fa-tab-icon-more" style="font-size: 22px; position: relative; top: 5px;"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat-info-general__section  chat-info-general__section--border" style="margin-top: 10px;">
                                            <div class="animated ">
                                                <div class="limit-media-container" id="info-links-container">
                                                    <div class="chat-info-general__action__item chat-info-general__action__item--align chat-info-general__action__item--no-after"><span class="fa fa-sidebar-icon-link chat-info-general__action__item__icon--top" style="top: 5px; font-size: 12px; padding-right: 8px;"></span>Link</div>
                                                    <div class="chat-info-link__group__items">
                                                        <div class=" media-item library-media flx ">
                                                            <div class="select-file-btn "><i class="fa  fa-multiselect-stroke-checkbox unselect-msg "></i><i class=" fa fa-multiselect_checkbox_hover hover-unselected-item"></i>
                                                            </div><img class=" link-thumb flx-fix " src="https://link.photo.talk.zdn.vn/photolink/720/aHR0cHM6Ly9yZXMtemFsby56YWRuLnZuL3VwbG9hZC9tZWRpYS8yMDE4LzkvMTQvaW1fcGFyc2VsaW5rX2VtcHR5XzE1MzY5MDI2Mjg2MDZfMjM2NjQzLnBuZw==" crossorigin="Anonymous">
                                                            <div class="z-ml">
                                                                <div class="media-item-date flx">
                                                                    <div title="https://testchar.herokuapp.com/chat.php" class="media-item-title library-media__title-item  library-media__title-item__link ">https://testchar.herokuapp.com/chat.php</div><span class="media-item-date__link">06/12 </span>
                                                                </div>
                                                                <div class="flx flx-sp-btw">
                                                                    <div class="chat-info-link__group__items__subtitle">testchar.herokuapp.com</div>
                                                                </div><i class="fa fa-chevron-down chat-info-link__group__items__menubtn"></i>
                                                            </div>
                                                        </div>
                                                        <div class=" media-item library-media flx ">
                                                            <div class="select-file-btn "><i class="fa  fa-multiselect-stroke-checkbox unselect-msg "></i><i class=" fa fa-multiselect_checkbox_hover hover-unselected-item"></i>
                                                            </div><img class=" link-thumb flx-fix " src="//link.photo.talk.zdn.vn/photolink/720/aHR0cHM6Ly96bmV3cy1waG90by1mYmNyYXdsZXIuemFkbi52bi93NzIwL1VwbG9hZGVkL3NndG5yYi8yMDE4XzExXzE5L2NvYWwxMTU5NzlzcXVhcmU5MDBfeDJfMV90aHVtYi5qcGc=" crossorigin="Anonymous">
                                                            <div class="z-ml">
                                                                <div class="media-item-date flx">
                                                                    <div title="Tiền của Trung Quốc `phủ sóng` toàn cầu như thế nào? - Thế giới" class="media-item-title library-media__title-item  library-media__title-item__link ">Tiền của Trung Quốc `phủ sóng` toàn cầu như thế nào? - Thế giới</div><span class="media-item-date__link">20/11 </span>
                                                                </div>
                                                                <div class="flx flx-sp-btw">
                                                                    <div class="chat-info-link__group__items__subtitle">news.zing.vn</div>
                                                                </div><i class="fa fa-chevron-down chat-info-link__group__items__menubtn"></i>
                                                            </div>
                                                        </div>
                                                        <div class=" media-item library-media flx ">
                                                            <div class="select-file-btn "><i class="fa  fa-multiselect-stroke-checkbox unselect-msg "></i><i class=" fa fa-multiselect_checkbox_hover hover-unselected-item"></i>
                                                            </div><img class=" link-thumb flx-fix " src="https://link.photo.talk.zdn.vn/photolink/720/aHR0cHM6Ly9yZXMtemFsby56YWRuLnZuL3VwbG9hZC9tZWRpYS8yMDE4LzkvMTQvaW1fcGFyc2VsaW5rX2VtcHR5XzE1MzY5MDI2Mjg2MDZfMjM2NjQzLnBuZw==" crossorigin="Anonymous">
                                                            <div class="z-ml">
                                                                <div class="media-item-date flx">
                                                                    <div title="https://myaccount.google.com/device-activity" class="media-item-title library-media__title-item  library-media__title-item__link ">https://myaccount.google.com/device-activity</div><span class="media-item-date__link">20/11 </span>
                                                                </div>
                                                                <div class="flx flx-sp-btw">
                                                                    <div class="chat-info-link__group__items__subtitle">myaccount.google.com</div>
                                                                </div><i class="fa fa-chevron-down chat-info-link__group__items__menubtn"></i>
                                                            </div>
                                                        </div>
                                                        <div class="view-more" style="padding: 5px 0px 15px; position: absolute; width: inherit; top: 14px; right: 13px; display: block; pointer-events: none;">
                                                            <div class="btn view-more__text" style="padding-left: 15px;"><span data-translate-inner="STR_VIEW_ALL">Xem tất cả</span><i class="fa fa-chevron-right"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="position: absolute; height: 6px; transition: opacity 200ms ease 0s; opacity: 0; right: 2px; bottom: 2px; left: 2px; border-radius: 3px;">
                                        <div style="position: relative; display: block; height: 100%; cursor: pointer; border-radius: inherit; background-color: rgba(0, 0, 0, 0.2); width: 0px;"></div>
                                    </div>
                                    <div style="position: absolute; width: 8px; transition: opacity 200ms ease 0s; opacity: 0; right: 2px; bottom: 2px; top: 2px; border-radius: 3px;">
                                        <div style="position: relative; display: block; width: 100%; cursor: pointer; border-radius: inherit; background-color: rgba(0, 0, 0, 0.2); height: 30px; transform: translateY(0px);"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </main>
        </div>
        <div class="modal animated fadeIn dark" style="display: none;">
            <div class="modal-container flx-cell flx flx-center flx-al-c ovf-hidden">
                <div class="modal-dialog animated zoomIn fullscreen flx flx-center flx-col flx-cell">
                    <div class="modal-dialog-body" style="padding: 0px;">
                        <div style="margin: auto;">
                            <canvas id="cocos-layer" width="480" height="800"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>