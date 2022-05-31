window.addEventListener("load", function(){
  window.cookieconsent.initialise({
    "palette": {
      "popup": {
        "background": "#F0F0F0",
        "text": "#000000"
      },
      "button": {
        "background": "#1a9afc",
        "text": "#ffffff"
      }
    },
    "position": "top",
    "static": true,
    "content": {
      "message": "Cookies erleichtern die Bereitstellung unseres Angebots. Durch die Nutzung unserer Website stimmen Sie der Verwendung von Cookies zu.",
      "dismiss": "OK",
      "link": "Mehr Informationen",
      "href": "https://www.devega-praesentationsmappen.de/datenschutz/"
    }
  })
});