function xd() {
  let x = document.getElementById("search-input").value;
  
  if (x === "Reddit") {
    document.getElementById('main').innerHTML = '          <div class="col s12 m4">\n' +
      '            <div class="container">\n' +
      '              <div class="card">\n' +
      '\n' +
      '                <div class="card-content">\n' +
      '                  <img src="../static/img/reddit.png" width="150" height="150">\n' +
      '                  <h5><b>Reddit</b></h5><br>\n' +
      '\n' +
      '                  <p>You don\'t have a Reddit account, go make one!</p>\n' +
      '                  <span>Overall Score:</span>\n' +
      '                  <h4>0</h4>\n' +
      '                </div>\n' +
      '                <div class="card-action red">\n' +
      '                  <a href="" class="white-text">Coming Soon!</a>\n' +
      '                </div>\n' +
      '              </div>\n' +
      '            </div>\n' +
      '          </div>';
  }
  else if (x === "Twitter") {
    document.getElementById('main').innerHTML = '          <div class="col s12 m4">\n' +
      '            <div class="container">\n' +
      '              <div class="card">\n' +
      '\n' +
      '                <div class="card-content">\n' +
      '                  <img src="../static/img/twitter.png" width="150" height="150">\n' +
      '                  <h5><b>Twitter</b></h5><br>\n' +
      '                  <p>You did not give a Twitter - you do not have a Twitter.</p>\n' +
      '                  <span>Overall Score:</span>\n' +
      '                  <h4> <?php echo file_get_contents("result.txt"); ?> </h4>\n' +
      '                </div>\n' +
      '                <div class="card-action blue">\n' +
      '                  <form action="twitter.php" method="POST">\n' +
      '                    <input type="text" name="username" placeholder="Username"><br><br>\n' +
      '                    <input type="submit"\n' +
      '                       class="z-depth-5 btn-large waves-effect waves-light btn-large"\n' +
      '                       style="width: 75%;" name="Analyze">\n' +
      '                  </form>\n' +
      '                  <a href="" class="white-text"></a>\n' +
      '                </div>\n' +
      '              </div>\n' +
      '            </div>\n' +
      '          </div>';
  }
  else if (x === "Facebook") {
    document.getElementById('main').innerHTML = '            <div class="col s12 m4">\n' +
      '              <div class="container">\n' +
      '                <div class="card left">\n' +
      '\n' +
      '                  <div class="card-content">\n' +
      '                    <img src="../static/img/facebook.png" width="150" height="150">\n' +
      '                    <h5><b>Facebook</b></h5><br>\n' +
      '                    <p>You do not have a Facebook - you didn\'t give us a FB account.</p>\n' +
      '                    <span>Overall Score:</span>\n' +
      '                    <h4>0</h4>\n' +
      '                  </div>\n' +
      '                  <div class="card-action darken-4" style="background-color: #3A4DA4;">\n' +
      '                    <a href="" class="white-text">Coming Soon!</a>\n' +
      '                  </div>\n' +
      '                </div>\n' +
      '              </div>\n' +
      '            </div>';
  }
  else {
    document.getElementById('main').innerHTML = 'We didn\'t find any results for the search: "' + x + '"';
  }

}
