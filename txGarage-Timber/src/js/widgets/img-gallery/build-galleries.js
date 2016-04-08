(function() {
  var buildGalleries = {
    init: function() {
      this.galleries = null;
      this.galleryHash = {};
      this.galleryArray = [];
      this.getDOM();
      this.parseGalleries();
      this.setGallery();
    },
    getDOM: function() {
      this.galleries = document.querySelectorAll('.gallery');
    },
    parseGalleries: function() {
      for (var i = 0; i < this.galleries.length; i++) {
        var gallery = this.galleries[i];
        this.galleryHash[gallery.id] = {};
        this.parseItems(gallery);
      }
    },
    parseItems: function(gallery) {
      var hash = this.galleryHash[gallery.id];
      var items = gallery.querySelectorAll('.gallery-item');
      for (var i = 0; i < items.length; i++) {
        var item = items[i];
        var hashName = 'item' + i;
        var img = item.querySelector('img');
        img.dataset.itemID = 'item' + i;
        img.dataset.imgID = 'img' + i;
        img.dataset.galleryID = gallery.id;
        hash.size = (i + 1);
        var imgObj = {
          imgID: i,
          imgURL: this.getURL(img),
          imgCap: this.getCaption(item),
          alink: item.querySelector('a').href,
          galleryID: gallery.id
        };
        this.galleryArray.push(imgObj);
        hash[hashName] = imgObj;
      }
    },
    getURL: function(img) {
      var imgSrc = img.getAttribute('src');
      var index = imgSrc.indexOf('-150x150');
      return imgSrc.substr(0, index) + '.jpg';
    },
    getCaption: function(item) {
      if(item.querySelector('.wp-caption-text')) {
        return item.querySelector('.wp-caption-text').innerText;
      }
      return '';
    },
    setGallery: function() {
      window.txGPostObject.post['galleries'] = this.galleryHash;
      return true;
    }
  }
  buildGalleries.init();
})();
