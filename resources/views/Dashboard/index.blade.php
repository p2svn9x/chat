
@include('dashboard.layouts.header')
<div class="shell mainStage" id="shellMainStage">
    @include('dashboard.layouts.profile')
    <div class="shell main" id="chatServiceContainer">
        @include('dashboard.layouts.friends')
        <div class="chatContainer">
            <div class="chatComponentContainer swx" id="chatComponent" dir="ltr">
                <div id="swxContent1" class="swxContent">
                    <div class="fragmentsContainer hideContent">
                        <div class="fragment">
                            <div class="conversationControl chat themeLight allowTextSelection">
                                @include('dashboard.chat.conversation')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('dashboard.layouts.footer')