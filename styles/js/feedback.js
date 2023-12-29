document.getElementById('feedbackForm').addEventListener('submit', function (event) {
  event.preventDefault();

  var email = document.getElementById('email').value;
  var message = document.getElementById('message').value;
  var rating = document.querySelector('input[name="rating"]:checked');

  if (message.length > 500) {
    alert('Feedback is too big ⊙.☉');
    return;
  }

  if (rating === null || rating === undefined) {
    alert('Choose a rating (◠‿◠)');
    return;
  }

  var xhr = new XMLHttpRequest();
  var url = 'http://localhost:3000//add_feedback.php';
  var params = '&email=' + email + '&message=' + message + '&rating=' + rating.value;
  xhr.open('POST', url, true);
  xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xhr.send(params);
  

  switch (rating.value) {
    case '1':
      alert('＞﹏＜');
      break;
    case '2':
      alert('(^._.^)');
      break;
    case '3':
      alert('(。・ω・。)');
      break;
    case '4':
      alert('ღゝ◡╹)ノ♡');
      break;
    case '5':
      alert('(ﾉ◕ヮ◕)ﾉ*:･ﾟ✧♡:･ﾟ✧*:~⊰♡･.*･ﾟ');
      break;
  }
});
