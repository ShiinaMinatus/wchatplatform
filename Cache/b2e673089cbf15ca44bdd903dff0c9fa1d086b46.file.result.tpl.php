<?php /* Smarty version Smarty-3.0-RC2, created on 2014-06-05 17:40:08
         compiled from "/web/www/wchatplatform/Lib//Jiantang/Tpl/Public/result.tpl" */ ?>
<?php /*%%SmartyHeaderCode:174148209853903af83e4c00-10021341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2e673089cbf15ca44bdd903dff0c9fa1d086b46' => 
    array (
      0 => '/web/www/wchatplatform/Lib//Jiantang/Tpl/Public/result.tpl',
      1 => 1401846812,
    ),
  ),
  'nocache_hash' => '174148209853903af83e4c00-10021341',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"><?php echo $_smarty_tpl->getVariable('title')->value;?>
</h4>
            </div>
            <div class="modal-body">
                <?php echo $_smarty_tpl->getVariable('name')->value;?>

            </div>
            <div class="modal-footer">

                <?php if ($_smarty_tpl->getVariable('type')->value==2){?>

                    <button type="button" id="reloadPage"  onclick='location.reload();' class="btn btn-default" data-dismiss="modal">关闭</button>
                <?php }else{ ?>
                    
                    <button type="button" onclick='location.reload();' class="btn btn-default" data-dismiss="modal">关闭</button>

                <?php }?>
                
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
