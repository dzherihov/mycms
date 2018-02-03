<?php $this->theme->header(); ?>

<main>
    <div class="container">
        <h3>Posts <a href="/admin/posts/create/">Create</a></h3>

		<table class="table">
  			<thead>
    			<tr>
     				<th scope="col">#</th>
      				<th scope="col">Title</th>
      				<th scope="col">Date</th>
    			</tr>
  			</thead>
  			<tbody>
  				<?php foreach($posts as $post): ?>
    			<tr>
      				<th scope="row"><?= $post->id?></th>
      				<td>
      					<a href="/admin/posts/edit/<?= $post->id ?>">
      					<?= $post->title ?>
      					</a>		
      				</td>
      				<td><?= $post->date ?></td>
    			</tr>
    		<?php endforeach; ?>
  			</tbody>
		</table>

    </div>
</main>

<?php $this->theme->footer(); ?>