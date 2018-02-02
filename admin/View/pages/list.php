<?php $this->theme->header(); ?>

<main>
    <div class="container">
        <h3>Pages <a href="/admin/pages/create/">Create</a></h3>

		<table class="table">
  			<thead>
    			<tr>
     				<th scope="col">#</th>
      				<th scope="col">Title</th>
      				<th scope="col">Date</th>
    			</tr>
  			</thead>
  			<tbody>
  				<?php foreach($pages as $page): ?>
    			<tr>
      				<th scope="row"><?= $page['id'] ?></th>
      				<td>
      					<a href="/admin/pages/edit/<?= $page['id'] ?>">
      					<?= $page['title'] ?>
      					</a>		
      				</td>
      				<td><?= $page['date'] ?></td>
    			</tr>
    		<?php endforeach; ?>
  			</tbody>
		</table>

    </div>
</main>

<?php $this->theme->footer(); ?>