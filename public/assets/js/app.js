const pageTop = $('#totopBtn');
const speed = 500;
pageTop.on('click', () => {
  $('body,html').animate({
      scrollTop:0
  }, speed);
});
