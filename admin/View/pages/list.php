<?php $this->theme->header(); ?>

<main>

<div class="ui container">
  <div style="margin: 30px 30px 0;">
    <div class="ui left floated header">
       <h2 class="ui header">
        <i class="settings icon"></i>
        <div class="content">Pages
          <div class="sub header">Creation and editing of site pages</div>
        </div>
      </h2>
    </div>

         <div class="ui right floated header"><button onclick="location.href = '/admin/pages/create/'" class="ui primary button">Create </button></div>
  </div>

        
		<table class="ui single line table">
  			<thead>
    			<tr>
     				  <th scope="col">№</th>
      				<th scope="col">Title</th>
      				<th scope="col">Date</th>
              <th style="width: 10%"></th>
    			</tr>
  			</thead>
  			<tbody>
  				<?php foreach($pages as $page): ?>
    			<tr>
      				<td>
      					<?= $page->id ?>
      				</td>
      				<td>
      					<a href="/admin/pages/edit/<?= $page->id ?>">
      					<?= $page->title ?>
      					</a>		
      				</td>
      				<td><?= $page->date ?></td>
              <td class="center aligned collapsing">
                <div class="ui small basic icon buttons">
                  <button data-tooltip="Edit page" onclick="location.href = '/admin/pages/edit/<?= $page->id ?>'" class="ui button"><i class="edit icon"></i></button>
                  <button data-tooltip="Delete page" onclick="page.remove(<?= $page->id ?>)" class="ui  button"><i class="trash outline icon"></i></button>
                </div>
              </td>
    			</tr>
    		<?php endforeach; ?>
  			</tbody>
		</table>

    </div>
</main>

<?php $this->theme->footer(); ?>