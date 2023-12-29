<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>reviews</title>
  <link href="styles\css\main.css" rel="stylesheet" type="text/css">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" href="imagies/favicon.jpg">
</head>

<body>
  <header>
    <div>Kaito Kuroba <br> <i>aka Kaito Kid</i> Wiki</div>
  </header>

  <nav class="nav">
    <a class="nav-item-link" href="mainPage.html">Home</a>
    <div class="dropdown-nav">
      <a class="nav-item-link" id="dropbtn"> Catigories </a>
      <div id="myDropdown" class="dropdown-content">
        <a class="drop-item" href="mainInfo.html">General information</a>
        <a class="drop-item" href="background.html">Background and personality</a>
        <a class="drop-item" href="relationships.html">Relationships and other characters</a>
        <a class="drop-item" href="disguises.html">Disguises as Kid</a>
      </div>
    </div>
  </nav>

  <div class="row">

    <aside class="aside-left" style="background-image: url(imagies/side1.jpg); order: 1;"></aside>

    <main style="background-image: url(imagies/1685181221_fons-pibig-info-p-biryuzovoe-nebo-fon-8.jpg); order: 2;">
      <div id="main-container" style="height: 100vh;">
        <div class="btn-group" style="margin-bottom: 10px;">
          <button class="footer-button  medium-blue" onclick="sortTable('desc')">sort from greatest</button>
          <button class="footer-button  medium-blue" onclick="sortTable('asc')">sort from smallest</button>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th>
                <h4>Email</h4>
              </th>
              <th>
                <h4>Review</h4>
              </th>
              <th>
                <h4>Rating</h4>
              </th>
              <th>
              </th>
            </tr>
          </thead>
          <tbody id="feedbackTableBody">
            <?php include 'get_feedback.php'; ?>
          </tbody>
        </table>
      </div>
    </main>

    <aside class="aside-right" style="background-image: url(imagies/doves.jpg); order: 3;"></aside>

  </div>

  <a href="#" id="signature"><img id="signature-img" height="100" src="imagies/Kaito_Kid_signature.png">
    <svg width="0" height="0" viewbox="0 0 0 0">
      <defs>
        <filter id="filter">
          <fecomponenttransfer>
            <fefuncr type="discrete" tablevalues="0 0" />
            <fefuncg type="discrete" tablevalues="0 0" />
            <fefuncb type="discrete" tablevalues="0 0" />
          </fecomponenttransfer>
        </filter>
      </defs>
    </svg>
  </a>

  <footer>
    <div class="row">
      <div class="col-footer">
        <div class="btn-group">
          <a href="review.html"><button type="button" class=" medium-blue footer-button">Leave feedback</button></a>
          <a href="mainPage.html"><button type="button" class=" medium-blue footer-button">Main</button></a>
        </div>
      </div>
      <div class="col-footer">
        <div id="link">
          <a href="#">KaitoMyBeloved</a>
        </div>
      </div>
    </div>
  </footer>
  <script src="styles\js\wiki.js"></script>
  <script>
    function sortTable(sort) {
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("feedbackTableBody").innerHTML = this.responseText;
        }
      };
      xhttp.open("GET", "sort_feedback.php?sort=" + sort, true);
      xhttp.send();
    }

    function deleteFeedback(id) {
      if (confirm("Are you sure you want to delete this feedback?")) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("feedbackTableBody").innerHTML = this.responseText;
          }
        };
        xhttp.open("GET", "delete_feedback.php?id=" + id, true);
        xhttp.send();
      }
    }
  </script>
</body>

</html>