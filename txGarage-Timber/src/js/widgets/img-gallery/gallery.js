(function() {
  var gallery = {
    init: function() {
      this.selectedImg = '';
      events.on('imgChanged', this.setupImg.bind(this));
      events.on('openGallery', this.openGallery.bind(this));
      events.on('closeGallery', this.closeGallery.bind(this));
      this.cashDOM();
    },
    cashDOM: function() {
      this.galleryWrap = document.querySelector('.post-gallery--wrapper');
      this.imgWrap = document.querySelector('.post-gallery--image');
      this.imgCap = document.querySelector('.post-gallery--image__cap');
      this.alink = document.querySelector('.image-toolbox--attachment__link');
      this.imgCount = document.querySelector('.image-toolbox--count');
      this.image = this.imgWrap.querySelector('img');
      this.downloadLink = document.querySelector('.image-toolbox--download--wrap a');
    },
    setupImg: function(img) {
      this.selectedImg = {
        imgURL: img.imgURL,
        imgID: img.imgID,
        imgCap: img.imgCap,
        alink: img.alink,
        galleryID: img.galleryID
      };
      this.render();
    },
    openGallery: function() {
      document.body.style.overflow = 'hidden';
      this.galleryWrap.style.display = 'block';
    },
    closeGallery: function() {
      document.body.style.overflow = 'auto';
      this.galleryWrap.style.display = 'none';
    },
    getCountTxt: function() {
      var curImg = this.selectedImg.imgID + 1;
      var galleryTotal = window.txGPostObject.post
        .galleries[this.selectedImg.galleryID].size;
      return 'image ' + curImg + ' of ' + galleryTotal;
    },
    render: function() {
      this.image.src = this.selectedImg.imgURL;
      this.alink.href = this.selectedImg.alink;
      this.imgCap.innerHTML = this.selectedImg.imgCap;
      this.imgCount.innerText = this.getCountTxt();
      this.downloadLink.download = this.selectedImg.imgURL;
    }
  }
  gallery.init();
})();
