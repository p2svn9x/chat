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
                    <span data-bind="text: displayNameUnescaped">{{$user['username']}}</span>
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
                                       role="button" tabindex="0">{{$user['username']}}</p>
								</span>
                        <p class="Me-moodMessage" role="button" tabindex="0">Online</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>