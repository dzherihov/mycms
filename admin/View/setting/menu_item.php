<!--<li class="menu-item-<?= $item->id ?>" data-id="<?= $item->id ?>">
    
   <div class="ui transparent left icon input">
    	<input  type="text" value="<?= $item->name ?>" placeholder="Title item menu...">
    	<i class="write icon"></i> 
	</div>
    
    <div class="ui left icon transparent input">
     	<input type="text" value="<?= $item->link ?>" placeholder="Link menu...">
		<i class="linkify icon"></i>
 	</div>
    <div class="menu-item-event">
        <button data-tooltip="Delete item menu" class="button-remove" onclick="menu.removeItem(<?= $item->id ?>)">
            <i class="trash outline icon"></i>
        </button>
        <i class="icon-cursor-move move icon"></i>
    </div>
</li> -->


<li class="menu-item-<?= $item->id ?> ui three steps" data-id="<?= $item->id ?>">
  <div class="step">
    <div class="content">
     <div class="ui transparent left icon input">
    	<input  type="text" value="<?= $item->name ?>" onchange="menu.updateItem(<?= $item->id ?>, 'name', this)" placeholder="Title item menu...">
    	<i class="write icon"></i> 
	</div>
    </div>
  </div>
  <div class="step">
    <div class="content">
      <div class="ui left icon transparent input">
     	<input type="text" value="<?= $item->link ?>" onchange="menu.updateItem(<?= $item->id ?>, 'link', this);" placeholder="Link menu...">
		<i class="linkify icon"></i>
 	</div>
    </div>
  </div>
  <div class="step">
    <div class="content">
     <div class="menu-item-event">
        <button data-tooltip="Delete item menu" class="button-remove" onclick="menu.removeItem(<?= $item->id ?>)">
            <i class="trash outline icon"></i>
        </button>
        <i class="icon-cursor-move move icon"></i>
    </div>
    </div>
  </div>
</li>