jQuery(function(){
    var cat;
    var postData = {};
    const urlParams = new URLSearchParams(window.location.search);
    cat = urlParams.get('pcat');
    state = urlParams.get('state');

    if(!cat)
    {
        cat = 0;
        updateFilter();
    }
    else
    {
        updateFilter();
    }

    if(!state)
    {
        state = 0;
        updateFilter();
    }
    else
    {
        updateFilter();
    }

    // jQuery(".grid-latest").css("display",'flex');


    jQuery(".cat-filter").click(function(e){
        e.preventDefault();
        cat = jQuery(this).attr("catid");
        updateFilter();
        updateURL();
        location.reload(); 
    });

    jQuery(".state-filter").click(function(e){
        e.preventDefault();
        state = jQuery(this).attr("catid");
        updateFilter();
        updateURL();
        // alert(state);
        location.reload(); 
    })

    function updateURL()
    {
        var current_url = window.location.href;
        var url_segment_array = current_url.split("/");
        if(url_segment_array[6])
        {
            current_url ="";
            for(var i=0;i<url_segment_array.length;i++)
            {
                if(url_segment_array[i]!="page")
                {
                current_url+=url_segment_array[i];
                current_url+='/';
                
                }
                else
                {
                break;
                }
            }
        }
        theURL= new URL(current_url);
        
        theURL.searchParams.set('pcat',cat);
        
        theURL.searchParams.set('state',state);
        
        window.history.pushState("", "", theURL);
        
    }

    function updateFilter()
    {
        jQuery('.cat-filter').removeClass("active");
        jQuery('.state-filter').removeClass("active");
        jQuery('.parent-list').find('[catid='+state+']').addClass('active');
        jQuery('.child-list').find('[catid='+cat+']').addClass('active');
    }

    
    // function updateData()
    // {
    //     console.log(postData);
    //     jQuery.ajax({
    //             type: 'post',
    //             url: ajax_params.ajaxurl,
    //             data: {
    //                 query: postData,
    //                 action: 'load_posts',
    //                 security_var: ajax_params.security
    //             },
    //             success: function (response, data) {
    //                 jQuery(".related-article-wrapper").replaceWith(response);
    //             }
    //         });
    // }

    jQuery(window).on('popstate', function() {
        location.reload(true);
     });
    
})