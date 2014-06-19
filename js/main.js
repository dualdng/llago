$(function(){
	var H=$('nav').offset().top;
	$(window).scroll(function()
		{
			var scroh=$(this).scrollTop();
			if(scroh>=H)
	{
		$('#navibar2').css({'display':'none'})
		$('header').fadeOut('slow');
	}

	/**			else
	  {
	  $('#navibar2').css({'display':'none'})
	  }
	  */
		})

});
window.onload=function(){
	$('.wipe-overlay').css('width','0px');
/**	$('.line img').each(function()
			{
				var width=$(this).width();
				$(this).css('width',width);
			}
			)
			**/

}
function rand_line()
{
	$('#line').fadeOut();
	$('.spinner').css('display','block');
	$.ajax({
		url:'include/rand_line.php',
		type:'POST',
		success:function(data)
	{
		$('.spinner').css('display','none');
		$('#line').empty();
		$('#line').fadeIn();
		$('#line').append(data);
	}
	})
};
/**
function rand_line()
{
	$('#line').load('include/rand_line.php');
}
**/
$(document).on('click','#loadmore',function()
{
		$('.spinner').css('display','block');
		var url=$(this).attr('href');
		$.ajax({
				url:url,
				type:'POST',
				success:function(data)
				{
				$('.spinner').css('display','none');
				var result=$(data).find('.line');
				var nexturl=$(data).find('#loadmore').attr('href');
				$('#line').append(result);
				$('#loadmore').attr('href',nexturl);
				}
		})
		return false;
});








