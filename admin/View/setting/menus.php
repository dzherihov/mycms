<?php $this->theme->header(); ?>
    <main>
        <div class="ui container">
                <div class="col page-title">
                    <h3>Menus</h3>
                </div>
                <div class="col">
                    <div class="setting-tabs">
                        <?php Theme::block('setting/tabs') ?>
                    </div>
                </div>

            <div class="ui grid">
                <div class="six wide column">
                        <h4 class="heading-setting-section">
                            List menu
                        </h4>
                        <a id="addMenuButt" href="javascript:$('.ui.modal').modal('show');" class="ui primary button" data-toggle="modal" data-target="#addMenu">
                            Add Menu
                        </a>
                    
                    <?php if(!empty($menus)): ?>

                            <div class="ui fluid vertical menu">
                                <?php foreach($menus as $menu): ?>
                                        <!--<a class="<?php if ($menuId == $menu->id) //echo ' active'; ?> item" href="?menu_id=<?php //echo $menu->id ?>">
                                            <?php //echo $menu->name ?>
                                        </a> -->

                                    <div class="ui two attached selec buttons">
                                        <a style="width: 80%" class="ui <?php if ($menuId == $menu->id) echo ' active'; ?>basic icon button" href="?menu_id=<?php echo $menu->id ?>">
                                            <?php echo $menu->name ?>
                                        </a>
                                        
                                        <button onclick="menu.removeMenu(<?= $menu->id ?>)" style="width: 20%" class="ui  icon button">
                                            <i class="trash outline red icon"></i>
                                        </button>
                                    </div>


                                <?php endforeach; ?>
                            </div>

                            <div class="ui middle aligned divided list">
                                <?php foreach($menus as $menu): ?>

                                <?php endforeach; ?>
                            </div>
 
                    <?php else: ?>
                        <div class="empty-items">
                            <p>You do not have any menu created</p>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="ten wide column">
                    <?php if ($menuId !== null): ?>
                        <h4 class="heading-setting-section">
                            Edit menu
                        </h4>
                        <br>
                        <input type="hidden" id="sortMenuId" value="<?php echo $menuId ?>" />
                        <ol id="listItems" class="edit-menu">
                            <?php foreach($editMenu as $item) {
                                Theme::block('setting/menu_item', [
                                    'item' => $item
                                ]);
                            } ?>
                        </ol>
                        <button id="loadButt" style="margin-top: 0.6em" class="ui basic button" onclick="menu.addItem(<?php echo $menuId ?>, this);">
                            <i class="plus icon"></i> Add menu item
                        </button>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </main>



<div class="ui modal">
  <i class="close icon"></i>
  <div class="header">
    New menu
  </div>
  <div class="image content">
    <div class="description">
        <form class="ui form">
            <div class="equired field">
                <label>Name menu</label>
                <input type="text" id="menuName">
            </div>
        </form>
    </div>
  </div>
  <div class="actions">
    <button type="button" class="ui black deny button" data-dismiss="modal">
        Close
    </button>
    <button type="button" class="ui positive right labeled icon button" onclick="menu.add(this);">
        Save menu
        <i class="checkmark icon"></i>
    </button>
    </div>
</div>


<?php $this->theme->footer(); ?>