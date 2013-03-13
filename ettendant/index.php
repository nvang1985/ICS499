render htmlHead(){
  renderScriptBundle();
  renderStyleBundle();
}

php renderHeader();

php renderNavigation(){
  <ul>
    <li></li>
    <li></li>
    <li></li>
  </ul>
}

php renderBody(){
  echo("<ul class="movieList">");
  forEach (movie in movies){
    echo("<li>" + $movie.title + "</li>");
  }
}

php renderFooter();
