<?php $this->theme->header(); ?>

    <main>
        <div class="container">
            <br><br><br>
            <div style="text-align:center;">
                <h1><i class="icon-heart icons"></i> <?php echo Setting::get('name_site'); ?> </h1>
                Walcome!
                <?php
// Выводит строку типа 'Текущая версия PHP: 7.0.10'
echo 'Текущая версия PHP: ' . phpversion();

// Выводит строку типа '2.0' или ничего, если расширение не включено
echo phpversion('tidy');
?>
            </div>
        </div>
    </main>

<?php $this->theme->footer(); ?>