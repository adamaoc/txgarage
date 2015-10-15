WebFontConfig = {
    google: { families: [ 'Raleway::latin' ] }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })();


  (function() {
    document.addEventListener('click', doOmniture);

    function date() {
    	var today = new Date();
    	var dd = today.getDate();
    	var mm = today.getMonth()+1;
    	var yyyy = today.getFullYear();
    	if(dd<10) {
    		dd='0'+dd;
    	}
    	if(mm<10) {
    		mm='0'+mm;
    	}
    	today = yyyy+'-'+mm+'-'+dd;
    	return today;
    }

    function doOmniture(event) {
    	if(event.target.className === 'ad-item__link') {
    		var data = {
    			datetime: date(),
    			campaign: event.target.attributes['data-ad'].value,
    			page: document.baseURI
    		}
    		$.post( "http://api.txgarage.com/clicks/post/", data);
    	}
    }
  })();
