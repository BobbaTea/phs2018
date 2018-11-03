if (window.location.href === "https://twitter.com/intent/tweet") {
    scrapeThePage();
} else if (!(window.location.href === "https://twitter.com/intent/tweet")) {
    cannotScrapePage();
}

function scrapeThePage() {
    let text = document.getElementById("status").value; 
    if (text === "kill the world")
      return "<h3>Bad words were detected.</h3>";
    else
    console.log("Scraped page! Received: " + text);
}

function cannotScrapePage() {
    document.getElementById("main").innerHTML = "Sorry Twitter does not allow use to get your text from this page - please go to: https://twitter.com/intent/tweet";
}
