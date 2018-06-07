<?php $this->theme->header(); ?>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div ">
                            <?php foreach (Post::get('published') as $item): ?>
                            <div class="post-preview">
                                    <a href="#">
                                        <h2  style="padding-top:10px" class="post-title">
                                            <?php echo $item->title ?>
                                        </h2>
                                    </a>
                                    <p class="post-subtitle">
                                        <?php echo $item->content ?>
                                    </p>
                                
                                <p class="post-meta">Posted on <?php echo $item->date ?></p>
                                </div>
                            <?php  endforeach; ?>
                            
                <hr>
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <hr>

<?php $this->theme->footer(); ?>