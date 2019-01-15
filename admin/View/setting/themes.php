<?php $this->theme->header(); ?>
<main>
    <div class="ui container">
        <div class="ui grid">
            <div class="sixteen wide column">
                <div class="col page-title">
                    <h3 class="ui header">
                        <!--<?php //__('settings.themes.heading') ?>-->
                        Themes
                    </h3>
                </div>
            </div>
        </div>
        <div class="ui grid">
            <div class="sixteen wide column">
                <div class="setting-tabs">
                    <?php echo Theme::block('setting/tabs') ?>
                </div>
            </div>
        </div>

        <div class="ui grid">
            <?php foreach($themes as $theme): ?>
                <div class="four wide column">
                    <div class="ui card">
                        <div class="image">
                            <img class="img-theme" src="<?= $theme->screen ?>">
                        </div>
                        <div class="content">
                            <span class="header"><?= $theme->name ?></span>
                            <div class="meta">
                                <span>Version: <?= $theme->version ?></span>
                            </div>
                            <div class="description description-theme">
                                <?= $theme->description ?>
                            </div>
                        </div>
                        <div class="extra content">
                            <?php if ($activeTheme == $theme->dirTheme): ?>
                                <button class="ui button" disabled>
                                    Activated
                                </button>
                            <?php else: ?>
                                <button class="ui primary button" onclick="setting.setActiveTheme(this, '<?= $theme->dirTheme ?>')">
                                    Activate
                                </button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>
<?php $this->theme->footer(); ?>