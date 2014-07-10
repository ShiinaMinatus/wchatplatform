<?php /* Smarty version Smarty-3.0-RC2, created on 2014-07-09 18:03:10
         compiled from "/web/www/wchatplatform/Lib//Yajie/Tpl/Public/result.tpl" */ ?>
<?php /*%%SmartyHeaderCode:141304998853bd135e6fad67-31004957%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8afcd2d801c3e59abbd6bfc56bc23028c937d7af' => 
    array (
      0 => '/web/www/wchatplatform/Lib//Yajie/Tpl/Public/result.tpl',
      1 => 1404900170,
    ),
  ),
  'nocache_hash' => '141304998853bd135e6fad67-31004957',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style='background-color: #c3dfff;'>
        <div class="modal-content" style='background-color: #c3dfff;border: none;'>
            <div class="modal-header" style=' border: none; height: 48px; padding: 12px'>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick='location.reload();'>&times;</button>
                
            </div>
            <div class="modal-body" style='padding-top: 4px;'>
                
                <?php if ($_smarty_tpl->getVariable('awardtype')->value==1){?>
                    
                    <h4 class="modal-title" id="myModalLabel" style='text-align: center;color: #353535; font-size: 16px;'><?php echo $_smarty_tpl->getVariable('title')->value;?>
</h4>
                    
                    <div style='height: 33px;'>&nbsp;</div>
                    <div style='text-align: center;color: #353535; font-size: 15px;'><?php echo $_smarty_tpl->getVariable('name')->value;?>
</div>
                    
                    <div style=' height: 11px;' >&nbsp;</div>
                    
                     <div style='text-align: center; height: 45px; background-color: #f4f4f4; line-height: 42px;color:#353535; font-size: 16px;'><?php echo $_smarty_tpl->getVariable('textName')->value;?>
</div>
                    
                    <?php }?>
                
            </div>
            <div class="modal-footer" style=' border: none;'>

                <?php if ($_smarty_tpl->getVariable('type')->value==2){?>

                    <button type="button" id="reloadPage"  onclick='location.reload();' class="btn btn-default" data-dismiss="modal">关闭</button>
                <?php }else{ ?>
                    
                    
                    <?php if ($_smarty_tpl->getVariable('awardtype')->value!=1){?>
                    <button type="button" onclick='location.reload();' class="btn btn-default" data-dismiss="modal">关闭</button>
                    
                    <?php }?>
                <?php }?>
                
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
