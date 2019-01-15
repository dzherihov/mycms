<?php $this->theme->header(); ?>
 
<main>
    <div class="ui container">
        <div class="row">
            <div class="column page-title">
                <h3>Settings</h3>
            </div>
        </div>
        <div class="row">
                <div class="column">
                    <div class="setting-tabs">
                        <?php Theme::block('setting/tabs') ?>
                    </div>
                </div>
            </div>
        <div class="row">
            <div class="column">
                <form class="ui form" id="settingForm">
                    <?php foreach($settings as $setting):?>
                    

                    <div class="inline fields">
                        <label style="width: 20%" for="formNameSite" class="column-2 column-form-label">
                            <?= $setting->name ?>
                        </label>
                        <div style="width: 80%">
                            <input class="form-control" type="text" name="<?= $setting->key_field ?>" value="<?= $setting->value ?>" id="formNameSite">
                        </div>
                    </div>
                    <?php endforeach; ?>

   
                       

                   
                    <button id="loadButt" type="submit" class="ui primary button" onclick="setting.update(this); return false;">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</main>


<?php $this->theme->footer(); ?>
