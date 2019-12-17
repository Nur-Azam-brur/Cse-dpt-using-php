<script type="text/javascript" src="js/jquery-2.x-git.min.js"></script>
<script type="text/javascript">
	$(document).ready(() => {
  $('.active').on('mouseenter', () => {
    $('.a_l').hide();
    $('.p_l').hide();
    $('.acti_l').hide();
  })

  $('.a_m').on('mouseenter', () => {
    $('.a_l').show();
    $('.p_l').hide();
    $('.acti_l').hide();
  })
  
  $('.a_l').on('mouseleave', () => {
    $('.a_l').hide();
  })

  $('.p_m').on('mouseenter', () => {
    $('.p_l').show();
    $('.a_l').hide();
    $('.acti_l').hide();
  })
  
  $('.p_l').on('mouseleave', () => {
    $('.p_l').hide();
  })

  $('.acti_m').on('mouseenter', () => {
    $('.p_l').hide();
    $('.a_l').hide();
    $('.acti_l').show();
  })
  
  $('.acti_l').on('mouseleave', () => {
    $('.acti_l').hide();
  })
  
}); 
</script>