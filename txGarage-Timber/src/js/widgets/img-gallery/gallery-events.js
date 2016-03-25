(function() {
  var galleryEvents = {
    init: function() {
      this.postGalleries = window.txGPostObject.post.galleries;
      this.galleryBox = document.querySelector('.post-gallery--wrapper');
      this.galleries = document.querySelectorAll('.gallery');
      this.parseGalleries();
    },
    parseGalleries: function() {
      for (var i = 0; i < this.galleries.length; i++) {
        var gallery = this.galleries[i];
        gallery.addEventListener('click', this.imgClicked.bind(this));
      }
    },
    imgClicked: function(e) {
      e.preventDefault();
      var target = e.target;
      if (target.tagName === 'IMG') {
        var data = target.dataset;
        var img = this.postGalleries[data.galleryID][data.itemID];
        this.galleryBox.addEventListener('click', this.galleryClick.bind(this));
        events.emit('openGallery', img);
      }
    },
    galleryClick: function(e) {
      var className = e.target.className
      if (className === 'image-toolbox--attachment__link' || className.animVal === 'image-toolbox--attachment') {
        return true;
      }
      if (className === 'image-toolbox--download' || className.animVal === 'image-toolbox--download') {
        return true;
      }
      e.preventDefault();
      if (className === this.galleryBox.className) {
        events.emit('closeGallery');
      }
      if (className === 'post-gallery--closer' || className.animVal === 'post-gallery--closer') {
        events.emit('closeGallery');
      }
      if (className === 'post-gallery--next' || className.animVal === 'post-gallery--next') {
        events.emit('nextImg');
      }
      if (className === 'post-gallery--prev' || className.animVal === 'post-gallery--prev') {
        events.emit('prevImg');
      }
    }
  }
  galleryEvents.init();
})();
