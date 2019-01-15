<?php $this->theme->header(); ?>

    <main>
        <div class="container ui">
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
  
   
    <?php //$str[] = Post::getPage('publish', 'post', 'qual_view')[$i]->{'qual_view'}; ?>
    
            </div>
<br><br><br>
            <div class="two column stackable ui grid segment">
              <div class="column">
               
                        <div class="chart-wrap">
                          <div class="chart-title">
                            Топ постов
                          </div>
                          <div id="dashboard-stats" class="chart bars-horizontal brand-primary">
                            <?php for ($i=0; $i < count(Post::getPage('publish', 'post', 'qual_view')); $i++) : ?>
                            <?php if($i > 9) break; ?>
                            <div class="row">
                              <span class="label"><?php echo Post::getPage('publish', 'post', 'qual_view')[$i]->{'title'}; ?></span>
                              <div class="bar-wrap">
                                <div class="bar" data-value="<?php echo Post::getPage('publish', 'post', 'qual_view')[$i]->{'qual_view'}; ?>"></div>
                              </div>
                              <span class="number"><?php echo Post::getPage('publish', 'post', 'qual_view')[$i]->{'qual_view'}; ?></span>
                            </div>
                            <?php  endfor; ?>
                          </div>
                        </div>
               
            </div>
                <div class="column">
                
                        <div class="chart-wrap">
                          <div class="chart-title">
                            Топ проектов
                          </div>
                          <div id="dashboard-stats" class="chart bars-horizontal brand-primary">
                            <?php for ($i=0; $i < count(Post::getPage('publish', 'portfolio', 'qual_view')); $i++) : ?>
                            <?php if($i > 9) break; ?>
                            <div class="row">
                              <span class="label"><?php echo Post::getPage('publish', 'portfolio', 'qual_view')[$i]->{'title'}; ?></span>
                              <div class="bar-wrap">
                                <div class="bar" data-value="<?php echo Post::getPage('publish', 'portfolio', 'qual_view')[$i]->{'qual_view'}; ?>"></div>
                              </div>
                              <span class="number"><?php echo Post::getPage('publish', 'portfolio', 'qual_view')[$i]->{'qual_view'}; ?></span>
                            </div>
                            <?php  endfor; ?>
                          </div>
                        </div>
                
              </div>

            </div>

        </div>
    </main>


<?php $this->theme->footer(); ?>
    <script type="text/javascript">
(function($) {
  function generateBarGraph(wrapper) {
    // Set Up Values Array
    var values = [];

    // Get Values and save to Array
    $(wrapper + ' .bar').each(function(index, el) {
      values.push($(this).data('value'));
    });

    // Get Max Value From Array
    var max_value = Math.max.apply(Math, values);

    // Set width of bar to percent of max value
    $(wrapper + ' .bar').each(function(index, el) {
      var bar = $(this),
          value = bar.data('value'),
          percent = Math.ceil((value / max_value) * 100);

      // Set Width & Add Class
      bar.width(percent + '%');
      bar.addClass('in');
    });
  }

  // Generate the bar graph on window load...
  $(window).on('load', function(event) {
    generateBarGraph('#dashboard-stats');
  });
})(jQuery); // Fully reference jQuery after this point.

    </script>