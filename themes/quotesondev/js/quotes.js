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
      $('.entry-title').html(response[0].title.rendered);
      $('.entry-content').html(response[0].content.rendered);
      console.log(response);

      if (
        response[0]._qod_quote_source.length > 0 &&
        response[0]._qod_quote_source_url.length > 0
      ) {
        $('.link-source').html(
          `<a href="${response[0]._qod_quote_source_url}">${
            response[0]._qod_quote_source
          }</a>`
        );
      } else if (
        response[0]._qod_quote_source.length > 0 &&
        response[0]._qod_quote_source_url.length === 0
      ) {
        $('.link-source').html(response[0]._qod_quote_source);
      }
      if (
        response[0]._qod_quote_source.length === 0 &&
        response[0]._qod_quote_source_url.length === 0
      ) {
        $('.link-source').html('');
      }

      const url = red_vars.home_url + '/' + response[0].slug;
      history.pushState(null, null, url);
    });
  });

  $('#submit-quote').on('click', function(event) {
    event.preventDefault();
    const authors = {
      title: $('#author').val(),
      content: $('#quote').val(),
      _qod_quote_source: $('#source').val(),
      _qod_quote_source_url: $('#url').val()
    };
    $.ajax({
      method: 'post',
      url: red_vars.rest_url + 'wp/v2/posts/',
      data: authors,
      beforeSend: function(xhr) {
        xhr.setRequestHeader('X-WP-Nonce', red_vars.wpapi_nonce);
      }
    }).done(function(response) {
      alert('Success! your quote has been uploaded!.');
      console.log(response);
    });
  });
});
