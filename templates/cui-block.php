<div class="cui">
    <div class="cui__block">
        <div class="cui__interactions">
            <div class="cui__interaction cui-interaction cui-interaction--default">
                <div class="cui-interaction__avatar">
                    <img src="<?= CUIUtils::getAssetUrl('images/author-thumbnail.png') ?>" alt="author">
                </div>
                <div class="cui-interaction__content">
                    <span class="cui-interaction__name">Paul:</span>
                    <div class="cui-interaction__text">
                        <p>Hola! It's Paul...</p>
                    </div>
                    <span class="cui-interaction__footer">
                        14:00 PM
                    </span>
                </div>
            </div>
            <div class="cui__interaction cui-interaction cui-interaction--default">
                <div class="cui-interaction__avatar">
                    <img src="<?= CUIUtils::getAssetUrl('images/author-thumbnail.png') ?>" alt="author">
                </div>
                <div class="cui-interaction__content">
                    <span class="cui-interaction__name">Paul:</span>
                    <div class="cui-interaction__text">
                        <p>a brain preserved in a glass jar high up in the Himalayas (and writer of this piece) </p>
                    </div>
                    <span class="cui-interaction__footer">
                        14:00 PM
                    </span>
                </div>
            </div>
            <div class="cui__interaction cui-interaction cui-interaction--human cui-interaction--answer">
                <div class="cui-interaction__content">
                    <div class="cui-interaction__text cui-field cui-field--text">
                        <input type="text" class="cui-field__field" placeholder="Type your name here...">
                        <button class="cui-field__button"><img src="<?= CUIUtils::getAssetUrl('images/send.svg') ?>"></button>
                    </div>
                    <span class="cui-interaction__footer cui-interaction__footer--enter">Press ENTER</span>
                </div>
            </div>
            <div class="cui__interaction cui-interaction cui-interaction--human cui-interaction--answer">
                <div class="cui-interaction__content">
                    <div class="cui-interaction__text cui-field cui-field--multiple">
                        <div class="cui-field__option is-selected">I wanna see it!</div>
                        <div class="cui-field__option">I'm in a flow, let me keep reading!</div>
                    </div>
                    <span class="cui-interaction__footer cui-interaction__footer--enter">Press ENTER</span>
                </div>
            </div>
            <div class="cui__interaction cui-interaction cui-interaction--human cui-interaction--answer">
                <div class="cui-interaction__content">
                    <div class="cui-interaction__text cui-field cui-field--multiple">
                        <div class="cui-field__option is-selected">💩</div>
                        <div class="cui-field__option is-disabled">👄</div>
                        <div class="cui-field__option">😎</div>
                    </div>
                    <span class="cui-interaction__footer cui-interaction__footer--enter">Press ENTER</span>
                </div>
            </div>
        </div><!-- .cui__interaction -->
    </div><!-- .cui__block -->
</div><!-- .cui -->
