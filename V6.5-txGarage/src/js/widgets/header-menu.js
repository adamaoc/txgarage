(function() {
  var headerMenu = {
    init: function() {
      this.cashDOM();
      this.getMenuData();
      this.setSections();
      this.addBtns();
      this.addEventListeners();
    },
    cashDOM: function() {
      this.menuWrap = document.getElementById('header-menu');
      this.body = document.body;
      this.styleBody(this.body);
    },
    getMenuData: function() {
      this.data = window.txGPostObject.post;
    },
    createPageModal: function() {
      this.modal = document.createElement('div');
      this.modal.id = 'site-modal';
      this.modalBox = document.createElement('div');
      this.modalCloser = document.createElement('span');
      this.body.appendChild(this.modal);
      this.modal.classList.add('modal-bg');
      this.modalBox.classList.add('modal-box');
      this.modalCloser.classList.add('modal-closer');
      this.modalCloser.innerHTML = 'X';
      this.modalCloser.id = 'modal-closer';
      this.modal.appendChild(this.modalBox);
      this.modalBox.appendChild(this.modalCloser);
      this.setBoxTop(this.modalBox);
      this.modal.addEventListener('click', this.closeModal.bind(this), false);
    },
    setSections: function() {
      if(this.data.tldr) {
        this.tldr = this.data.tldr;
      }
    },
    addBtns: function() {
      this.tldrBtn = document.createElement('a');
      this.tldrBtn.id = 'tldrBtn';
      this.tldrBtn.innerHTML = 'TL;DR';
      this.tldrBtn.classList.add('post-hero__menu__btn');
      if(this.data.tldr !== '') {
        setTimeout(function() {
          this.menuWrap.classList.add('post-hero__menu--open');
          this.menuWrap.appendChild(this.tldrBtn);
        }.bind(this), 1000);
      }
    },
    closeModal: function(e) {
      var target = e.target;
      if(target.id === 'modal-closer' || target.id === 'site-modal') {
        this.modal.removeEventListener('click', this.openModal.bind(this), false);
        this.modal.remove();
      }
      return true;
    },
    getTLDR: function() {
      var text = this.data.tldr;
      var tldrBox = document.createElement('div');
      tldrBox.innerHTML = '<h2>TL;DR</h2>' + text;
      this.modalBox.appendChild(tldrBox);
    },
    contentSwitcher: function(content) {
      switch (content) {
        case 'tldrBtn':
          this.getTLDR();
          break;
      }
    },
    openModal: function(e) {
      e.preventDefault();
      this.top = e.target.offsetTop;
      var target = e.target.id;
      this.createPageModal();
      this.contentSwitcher(target);
    },
    addEventListeners: function() {
      this.tldrBtn.addEventListener('click', this.openModal.bind(this), false);
    },
    styleBody: function(el) {
      var styled = el.style;
      styled.position = 'relative';
    },
    setBoxTop: function(el) {
      var styled = el.style;
      styled.marginTop = this.top + 'px';
    }
  }
  headerMenu.init();
})();
