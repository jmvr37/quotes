jQuery(document).ready(function($) {
  $('#new-quote').on('click', function(event) {
    event.preventDefault();
    $.ajax({
      method: 'Get',
      url:
        red_vars.rest_url +
        'wp/v2/posts?filter[orderby]=rand&filter[posts_per_page]=1',
      data: {
        comment_status: 'closed'
      },
      beforeSend: function(xhr) {
        xhr.setRequestHeader('X-WP-Nonce', red_vars.wpapi_nonce);
      }
    }).done(function(response) {
      $('.entry-title').html(response[0].content.rendered);
      $('.entry-content').html(response[0].title.rendered);
      console.log(response);

      const url = red_vars.home_url + '/' + response[0].slug;
      history.pushState(null, null, url);
    });
  });
});
