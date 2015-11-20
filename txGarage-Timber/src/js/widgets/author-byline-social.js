(function() {
  var socialBuilder = {
    init: function() {
      this.socialBar;
      this.authorName;
      this.socialHash;
      this.cashDOM();
      this.getAuthorName();
      this.authorContext();
    },
    cashDOM: function() {
      this.socialBar = document.getElementById('author-byline-social');
    },
    getAuthorName: function() {
      this.authorName = this.socialBar.dataset.author;
    },
    authorContext: function() {
      var wasKnownAuthor = false;
      if(this.authorName === 'adamaoc' || this.authorName === 'admin') {
        wasKnownAuthor = true;
        this.buildAdamsSocial();
      }
      if(this.authorName === '') {
        wasKnownAuthor = true;
        this.buildJustinsSocial();
      }
      if(wasKnownAuthor) {
        this.addSocial();
      }
    },
    buildAdamsSocial: function() {
      this.socialHash = [
        {
          'network': 'facebook',
          'link': 'http://facebook.com/adamaoc',
          'icon': 'icon-facebook2'
        },
        {
          'network': 'instagram',
          'link': 'http://instagram.com/adamac',
          'icon': 'icon-instagram'
        },
        {
          'network': 'twitter',
          'link': 'http://twitter.com/adamaoc',
          'icon': 'icon-twitter'
        }
      ];
    },
    setStyles: function() {
      var setHoverStyles = '.author-byline:hover #author-byline-social { left: -80px; }';
      var css = setHoverStyles;
      style = document.createElement('style');
      if (style.styleSheet) {
        style.styleSheet.cssText = css;
      } else {
        style.appendChild(document.createTextNode(css));
      }
      document.getElementsByTagName('head')[0].appendChild(style);
    },
    addSocial: function() {
      var _this = this;
      this.setStyles();
      this.socialHash.forEach(function(item) {
        var btn = document.createElement('a');
        btn.classList.add('author-social-btn');
        btn.setAttribute('href', item.link);
        btn.setAttribute('target', '_blank');
        btn.innerHTML = '<svg class="icon-logo"><use xlink:href="#'+ item.icon +'"></svg>';
        _this.socialBar.appendChild(btn);
      });
    }
  }
  socialBuilder.init();
})();
