

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style='background-color: #c3dfff;'>
        <div class="modal-content" style='background-color: #c3dfff;border: none;'>
            <div class="modal-header" style=' border: none; height: 48px; padding: 12px'>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick='location.reload();'>&times;</button>
                
            </div>
            <div class="modal-body" style='padding-top: 4px;'>
                
                {if $awardtype == 1}
                    
                    <h4 class="modal-title" id="myModalLabel" style='text-align: center;color: #353535; font-size: 16px;'>{$title}</h4>
                    
                    <div style='height: 33px;'>&nbsp;</div>
                    <div style='text-align: center;color: #353535; font-size: 15px;'>{$name}</div>
                    
                    <div style=' height: 11px;' >&nbsp;</div>
                    
                     <div style='text-align: center; height: 45px; background-color: #f4f4f4; line-height: 42px;color:#353535; font-size: 16px;'>{$textName}</div>
                    
                    {/if}
                
            </div>
            <div class="modal-footer" style=' border: none;'>

                {if $type == 2}

                    <button type="button" id="reloadPage"  onclick='location.reload();' class="btn btn-default" data-dismiss="modal">关闭</button>
                {else}
                    
                    
                    {if $awardtype != 1}
                    <button type="button" onclick='location.reload();' class="btn btn-default" data-dismiss="modal">关闭</button>
                    
                    {/if}
                {/if}
                
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
