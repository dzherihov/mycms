<?php $this->theme->header(); 
use Engine\Helper\Cookie;
?>

<main>
  <div class="ui container">
  <div style="margin: 30px 30px 0;">
    <div class="ui left floated header">
       <h2 class="ui header">
        <i class="settings icon"></i>
        <div class="content">Post
          <div class="sub header">Creation and editing of site posts</div>
        </div>
      </h2>
    </div>

  <div class="ui right floated header"><button onclick="location.href = '/admin/posts/create/'" class="ui primary button">Create </button>
  </div>
  </div>

		<table class="ui single line table">
  			<thead>
    			<tr>
     				<th scope="col">Id</th>
      				<th scope="col">Title</th>
              <th scope="col">Author</th>
      				<th scope="col">Date</th>
              <th scope="col">Status</th>
              <th style="width: 10%"></th>
    			</tr>
  			</thead>
  			<tbody>
  				<?php foreach($posts as $post): ?>
    			<tr>
      				<td><?= $post->id ?></td>
      				<td>
      					<a href="/admin/posts/edit/<?= $post->id ?>">
      					<?= $post->title ?>
      					</a>		
      				</td>
              <td>
                 <?php foreach (User::get($post->id_author) as $item): ?>
                    
                        <?php echo stristr($item->email, '@', true); ?>
                    <?php  endforeach; ?>

              </td>
      				<td><?= $post->date ?></td>
              <td><?= $post->status ?></td>
              <td class="center aligned collapsing">
                <div class="ui small basic icon buttons">
                  <button data-tooltip="Edit post" onclick="location.href = '/admin/posts/edit/<?= $post->id ?>'" class="ui button"><i class="edit icon"></i></button>
                  <button data-tooltip="Delete post" onclick="post.remove(<?= $post->id ?>)" class="ui button"><i class="trash outline icon"></i></button>
                </div>
              </td>
    			</tr>
    		<?php endforeach; ?>
  			</tbody>
		</table>

    </div>
</main>

<?php $this->theme->footer(); ?>