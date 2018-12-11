
<html lang="en" class="ltr" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="https://s4w.cdn.skype.com/0-245-0/images/favicon.ico" id="favicon">
    <meta property="og:image" content="https://s4w.cdn.skype.com/0-245-0/images/socialLogo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Langtuhoabinh</title>
    <link rel="stylesheet" href="http://cntt.com/css/dashboard/webClient.css"/>
    <link rel="stylesheet" href="http://cntt.com/css/dashboard/common.css"/>
    <link rel="stylesheet" href="http://cntt.com/css/dashboard/swx.css"/>
    <link rel="stylesheet" href="http://cntt.com/css/dashboard/style.css"/>
</head>

<body class="swx desktop" tabindex="-1">
<div class="shell notifications" id="notifications" aria-live="polite" aria-atomic="true"></div><div class="shell mainStage" id="shellMainStage">
    <div class="shell meComponent swx" id="meComponent" dir="ltr">
        <div class="swxMe">
            <div class="Me">
                <div class="Me-small">
                    <div class="Me-presenceStatus" tabindex="0">
                        <button class="btn secondary circle Me-openPresencePopup" type="button">
                            <span class="iconfont chevronDown"></span>
                        </button>
                    </div>

                    <div id="expandMeProfileLabel" class="offScreen">
                        <span data-bind="text: displayNameUnescaped">langtuhoabinh</span>
                        <span>Expand profile</span>
                    </div>
                    <div class="Me-skyContainer" data-bind="click: toggleMeSize">
                        <div class="Me-sky"></div>
                        <div class="Me-avatar">
                            <div role="button" class="Avatar Avatar--presence Avatar--online Avatar--defaultAvatar">
                                <img class="Avatar-image" alt="" aria-hidden="true" role="presentation"
                                     src="https://swx.cdn.skype.com/v/1.125.40/assets/images/avatars/default-avatar-contact.svg"
                                     style="display: block;">
                            </div>
                        </div>
                        <div class="Me-info">
                                <span class="Me-displayNameContainer">
									<p aria-labelledby="expandMeProfileLabel" class="Me-displayName fontSize-h3 strong"
                                       role="button" tabindex="0">langtuhoabinh</p>
								</span>
                            <p class="Me-moodMessage" role="button" tabindex="0">Online</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    <div class="shell main" id="chatServiceContainer">
        <aside class="sideContainer">
            <div class="timelineComponentContainer swx" id="timelineComponent" dir="ltr">
                <div class="side themeWhite slideLeftToRight inactive">
                    <div class="search beforeMenuItems">

                    </div>
                    <div class="navigation afterSearch">
                        <div role="menubar" tabindex="0" class="navigationMenuIcons">
                            <a href="#" role="menuitem" class="navItem icon" aria-label="Contacts"
                               id="menuItem-contacts" style="">
                                <span class="icon">
                                    <span class="iconfont skypeAddressBook" title="Contacts"></span>
                                </span>
                                <span class="text">
                                    <h4 data-bind="text: text">Contacts</h4>
                                </span>
                            </a>

                            <a href="#" role="menuitem" class="navItem icon" aria-label="Call phones"
                               id="menuItem-dialpad" style="">
                                <span class="icon">
                                    <span class="iconfont dialpad" title="Call phones"> </span>
                                </span>
                                <span class="text">
                                    <h4 data-bind="text: text">Call phones</h4>
                                </span>
                            </a>


                            <a href="#" role="menuitem" class="navItem icon" aria-label="Settings"
                               id="menuItem-userSettings" style="">
                                <span class="icon">
                                    <span class="iconfont settings" title="Settings"></span>
                                </span>
                                <span class="text">
                                    <h4 data-bind="text: text">Settings</h4>
                                </span>
                            </a>
                            <a href="#" role="menuitem" class="navItem icon" aria-label="New Chat"
                               id="menuItem-newChat">
                                <span class="icon">
                                    <span class="iconfont add" title="New Chat"></span>
                                </span>
                                <span class="text"> <h4 data-bind="text: text">New Chat</h4> </span>
                            </a>
                        </div>
                    </div>
                    <div class="hide">
                        <div class="current">
                            <div class="separator">
                                <p class="strong">Current call</p>
                            </div>
                        </div>
                    </div>

                    <div class="scrollingWrapper ltroverride hyperscroll hyperscrollV active" tabindex="0">
                        <div class="history scrollable scrollViewport scrollViewportV fixSmall" tabindex="-1">
                        </div>
                    </div>
                </div>
            </div>
        </aside>        <div class="chatContainer">
            <div class="chatComponentContainer swx" id="chatComponent" dir="ltr">
                <div id="swxContent1" class="swxContent">
                    <div class="fragmentsContainer hideContent">
                        <div class="fragment">
                            <div class="conversationControl chat themeLight allowTextSelection">
                                <swx-header class="conversationHeader newConversationV2">
                                    <div class="headerMain conversationHeader newConversationV2">
                                        <div class="roster">
                                            <div class="grid">
                                                <swx-avatar role="button" class="avatar Avatar--fogTheme">
                                                    <div role="button"
                                                         class="Avatar Avatar--presence Avatar--online Avatar--absolute"
                                                         tabindex="">
                                                        <img class="Avatar-image" alt="" aria-hidden="true"
                                                             role="presentation"
                                                             src="https://avatar.skype.com/v1/avatars/live%3A41d4639954740993?auth_key=-554228535&amp;returnDefaultImage=false&amp;cacheHeaders=true"
                                                             style="display: block;">
                                                    </div>
                                                </swx-avatar>

                                                <div class="tile conversationTopic online" style="max-height: 50px">
                    <span class="tileText">
                        <span class="tileName square">
                            <h3>
                                <span role="button" class="iconfont button chevronUp hide"></span>
                                <span class="hoverWrap">
                                    <span data-swx-testid="conversationTopic" tabindex="0">Linh Hoàng Tùng</span>
                                    <span role="button" class="iconfont chevronDown"></span>
                                </span>
                                <button class="iconfont edit hide" type="button"></button>
                            </h3>
                        </span>
                        <span class="tileMessage presence circle">
                            <div class="message fixSmall">
                                <div class="displayMessage" style="max-height: 100px;overflow: hidden;">
                                    <span class="iconfont groupParticipantsLabel fontSize-p" title="dưqdưq"> noi dung tieu de</span>
                                </div>
                            </div>
                        </span>
                    </span>
                                                </div>

                                                <div class="headerControls newConversationV2">
                                                    <div class="buttonRow">
                                                        <swx-button class="callButtons">
                                                            <button type="button" class="btn disabled swx-video-call-btn primary circle">
                                                                <span class="iconfont videoOn">Video Call</span>
                                                            </button>
                                                        </swx-button>
                                                        <swx-button class="callButtons">
                                                            <button type="button" class="btn swx-audio-call-btn primary circle">
                                                                <span class="iconfont callStart">Audio Call</span>

                                                            </button>
                                                        </swx-button>
                                                        <swx-button data-swx-testid="addParticipantAction">
                                                            <button type="button" role="button" class="btn secondary circle stroke">
                                                                <span class="iconfont contactAdd">Add</span>
                                                            </button>
                                                        </swx-button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </swx-header><div class="clearfix"></div>
                                <div class="conversation">
                                    <div class="messageConversation" style="">
                                        <ul>
                                            <div class="me-out">
                                                <div class="img-me">
                                                    <div class="cover-img">
                                                        <img src="img/img.png">
                                                    </div>
                                                </div>
                                                <div class="me-message">
                                                    <li class="me">By this User, First message</li>
                                                </div>
                                            </div>

                                            <div class="me-out">
                                                <div class="img-me">
                                                    <div class="cover-img">
                                                        <img src="img/img.png">
                                                    </div>
                                                </div>
                                                <div class="me-message">
                                                    <li class="me">By this User, First messageBy this User, First messageBy this User, First messageBy
                                                        this User, First messageBy this User, First message
                                                    </li>
                                                    <li class="me">By this User, First messageBy this User, First messageBy this User, First messageBy
                                                        this User, First messageBy this User, First message
                                                    </li>
                                                    <li class="me">By this User, First messageBy this User, First messageBy this User, First messageBy
                                                        this User, First messageBy this User, First message
                                                    </li>
                                                </div>
                                            </div>
                                            <div class="dateConversation">
                                                <p> 11/26/2019</p>
                                            </div>
                                            <div class="me-out">
                                                <div class="img-me">
                                                    <div class="cover-img">
                                                        <img src="img/img.png">
                                                    </div>
                                                </div>
                                                <div class="me-message">
                                                    <li class="me">By this User, Fourth message</li>
                                                </div>
                                            </div>
                                            <div class="him-out">
                                                <div class="img-him">
                                                    <div class="cover-img">
                                                        <img src="img/img.png">
                                                    </div>
                                                </div>
                                                <div class="him-message">
                                                    <li class="him">By Other User</li>
                                                </div>
                                            </div>
                                            <div class="me-out">
                                                <div class="img-me">
                                                    <div class="cover-img">
                                                        <img src="img/img.png">
                                                    </div>
                                                </div>
                                                <div class="me-message">
                                                    <li class="me">By this User, Fourth message</li>
                                                </div>
                                            </div>
                                            <div class="him-out">
                                                <div class="img-him">
                                                    <div class="cover-img">
                                                        <img src="img/img.png">
                                                    </div>
                                                </div>
                                                <div class="him-message">
                                                    <li class="him">By Other User</li>
                                                </div>
                                            </div>
                                            <div class="me-out">
                                                <div class="img-me">
                                                    <div class="cover-img">
                                                        <img src="img/img.png">
                                                    </div>
                                                </div>
                                                <div class="me-message">
                                                    <li class="me">By this User, Fourth message</li>
                                                </div>
                                            </div>
                                            <div class="him-out">
                                                <div class="img-him">
                                                    <div class="cover-img">
                                                        <img src="img/img.png">
                                                    </div>
                                                </div>
                                                <div class="him-message">
                                                    <li class="him">By Other User</li>
                                                </div>
                                            </div>
                                            <div class="me-out">
                                                <div class="img-me">
                                                    <div class="cover-img">
                                                        <img src="img/img.png">
                                                    </div>
                                                </div>
                                                <div class="me-message">
                                                    <li class="me">By this User, Fourth message</li>
                                                </div>
                                            </div>
                                            <div class="him-out">
                                                <div class="img-him">
                                                    <div class="cover-img">
                                                        <img src="img/img.png">
                                                    </div>
                                                </div>
                                                <div class="him-message">
                                                    <li class="him">By Other User</li>
                                                </div>
                                            </div>
                                        </ul>
                                    </div>    <div class="mesOption">
                                        <form action="#" onsubmit="return sendMessage();" id="formMessage">
                                            <textarea type="text" id="inputMessages" placeholder="Type a message here"></textarea>
                                        </form>
                                        <div class="buttonOption">
                                            <button class="attachmentButton">
                <span title="Attachment">
                    <i class="fa fa-paperclip"></i>
                </span>
                                            </button>
                                            <button class="emoticonsButton">
                <span title="Emoticons">
                    <i class="fa fa-smile-o"></i>
                </span>
                                            </button>
                                            <button class="sendButton">
                <span title="Send">
                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="http://cntt.com//js/dashboard/layout.js"></script>
</body>
</html>