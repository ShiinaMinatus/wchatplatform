/* 代码整理：懒人之家 www.lanrenzhijia.com */
$(function(){
    var numpic = $('#slides li').size()-1;

    if(numpic <= 0){

        return false;

    }
    var nownow = 0;
    var inout = 500;
    var TT = 0;
    var SPEED = 5000;

        
        
    $('#slides li').eq(0).siblings('li').css({
        'display':'none'
    });


    var ulstart = '<ul id="pagination" style="z-index:99999;">',
    ulcontent = '',
    ulend = '</ul>';
    ADDLI();
    var pagination = $('#pagination li');
    var paginationwidth = $('#pagination').width();
    //$('#pagination').css('margin-left',(470-paginationwidth))
	
    pagination.eq(0).addClass('current')
		
    function ADDLI(){
        //var lilicount = numpic + 1;
        for(var i = 0; i <= numpic; i++){
            ulcontent += '<li>' + '<a href="javascript:vold(0)">' + (i+1) + '</a>' + '</li>';
        }
		
        $('#slides').after(ulstart + ulcontent + ulend);	
    }

    pagination.on('click',DOTCHANGE)
    $("#slides li").bind("swipeleft", GOPer);
    $("#slides li").bind("swiperight", GONext);
    function GOPer(){
        var changenow = nownow-1;
        if(nownow-1<0){
            changenow=numpic;
        }
        $('#slides li').eq(nownow).css('z-index','900');
        $('#slides li').eq(changenow).css({
            'z-index':'800'
        }).show();
        pagination.eq(changenow).addClass('current').siblings('li').removeClass('current');
        $('#slides li').eq(nownow).fadeOut(400,function(){
            $('#slides li').eq(changenow).fadeIn(500);
        });
        nownow = changenow;
    }
    function GONext(){
		
        var changenow = nownow+1;
        if(nownow+1>numpic){
            changenow=0;
        }
        $('#slides li').eq(nownow).css('z-index','900');
        $('#slides li').eq(changenow).css({
            'z-index':'800'
        }).show();
        pagination.eq(changenow).addClass('current').siblings('li').removeClass('current');
        $('#slides li').eq(nownow).fadeOut(400,function(){
            $('#slides li').eq(changenow).fadeIn(500);
        });
        nownow = changenow;
    }
    
    function DOTCHANGE(){
		
                
                
        var changenow = $(this).index();
		
        $('#slides li').eq(nownow).css('z-index','900');
        $('#slides li').eq(changenow).css({
            'z-index':'800'
        }).show();
        pagination.eq(changenow).addClass('current').siblings('li').removeClass('current');
        $('#slides li').eq(nownow).fadeOut(400,function(){
            $('#slides li').eq(changenow).fadeIn(500);
        });
        nownow = changenow;
    }
	
    pagination.mouseenter(function(){
        inout = 1;
    })
	
    pagination.mouseleave(function(){
        inout = 0;
    })
	
    function GOGO(){
		
        var NN = nownow+1;
        $('#slides li').css('display','none');
        if( inout == 1 ){
        } else {
            if(nownow < numpic){
                $('#slides li').eq(nownow).css('z-index','900');
                $('#slides li').eq(NN).css({
                    'z-index':'800'
                }).show();
                pagination.eq(NN).addClass('current').siblings('li').removeClass('current');
                $('#slides li').eq(nownow).fadeOut(400,function(){
                    $('#slides li').eq(NN).fadeIn(500);
                });
                nownow += 1;

            }else{
                NN = 0;
                $('#slides li').eq(nownow).css('z-index','900');
                $('#slides li').eq(NN).stop(true,true).css({
                    'z-index':'800'
                }).show();
                $('#slides li').eq(nownow).fadeOut(400,function(){
                    $('#slides li').eq(0).fadeIn(500);
                });
                pagination.eq(NN).addClass('current').siblings('li').removeClass('current');

                nownow=0;

            }
        }
        TT = setTimeout(GOGO, SPEED);
    }
    TT = setTimeout(GOGO, SPEED); 

})
/* 代码整理：懒人之家 www.lanrenzhijia.com */
