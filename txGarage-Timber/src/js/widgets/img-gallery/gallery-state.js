(function() {
  var galleryState = {
    init: function() {
      this.currentGallery = '';
      this.currentImg = '';
      this.prevImg = '';
      this.nextImg = '';
      events.on('openGallery', this.openGallery.bind(this));
      events.on('closeGallery', this.clearGallery.bind(this));
      events.on('nextImg', this.updateNextImg.bind(this));
      events.on('prevImg', this.updatePrevImg.bind(this));
    },
    clearGallery: function() {
      this.currentImg = '';
      this.prevImg = '';
      this.nextImg = '';
      this.currentGallery = '';
    },
    updateCurrentGallery: function(curGal) {
      this.currentGallery = curGal;
    },
    updateNextImg: function() {
      debugger;
      var gallery = window.txGPostObject.post
        .galleries[this.currentGallery];
      this.currentImg = gallery['item' + this.nextImg];
      var imgID = this.currentImg.imgID;
      this.updateState(imgID);
    },
    updatePrevImg: function() {
      var gallery = window.txGPostObject.post
        .galleries[this.currentGallery];
      this.currentImg = gallery['item' + this.prevImg];
      var imgID = this.currentImg.imgID;
      this.updateState(imgID);
    },
    openGallery: function(curImg) {
      debugger;
      this.currentGallery = curImg.galleryID;
      this.currentImg = curImg;
      var imgID = curImg.imgID;
      this.updateState(imgID)
    },
    updateState: function(imgID) {
      this.prevImg = this.getPrevID(imgID);
      this.nextImg = this.getNextID(imgID);
      events.emit('imgChanged', this.currentImg);
    },
    getPrevID: function(imgID) {
      var curGal = window.txGPostObject.post
        .galleries[this.currentGallery];
      var id = parseInt(imgID);
      if(id === 0) {
        return (curGal.size - 1);
      }else{
        return (id - 1);
      }
    },
    getNextID: function(imgID) {
      debugger;
      var curGal = window.txGPostObject.post
        .galleries[this.currentGallery];
      var id = parseInt(imgID);
      if(id === (curGal.size - 1)) {
        return 0;
      }else{
        return (id + 1);
      }
    }
  }
  galleryState.init();
})()
