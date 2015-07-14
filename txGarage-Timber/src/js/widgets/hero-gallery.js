var heroEl = document.getElementById('post-hero');
var heroImg = heroEl.dataset.img;
var imgStyle = { width: '100%'};
var heroIndex = galleryList.indexOf(heroImg);

var Hero = React.createClass({
  getInitialState: function() {
    var listLength = this.props.list.length - 1;
    var mainImg = this.props.mainImg;
    var prevImg = function() {
      if((mainImg - 1) < 0) {
        return listLength;
      }else{
        return mainImg - 1;
      }
    };
    var nextImg = function() {
      if((mainImg + 1) > listLength) {
        return 0;
      }else{
        return mainImg + 1;
      }
    };
    console.log(mainImg, nextImg, prevImg);
    return {
      currImg: this.props.list[mainImg],
      prevImg: this.props.list[prevImg()],
      nextImg: this.props.list[nextImg()],
      arrowNext: ">",
      arrowPrev: "<"
    }
  },

  moveForward: function() {
    var fullList = this.props.list;
    var currImg = this.state.currImg;
    var nextImg = this.state.nextImg;
    var pos = fullList.indexOf(nextImg) + 1;
    if(pos > (fullList.length -1)) {
      pos = 0;
    }
    var newNext = fullList[pos];

    this.setState({
      currImg: nextImg,
      prevImg: currImg,
      nextImg: newNext
    });
  },
  moveBack: function() {
    var fullList = this.props.list;
    var currImg = this.state.currImg;
    var prevImg = this.state.prevImg;
    var pos = fullList.indexOf(prevImg) - 1;
    if(pos === 0) {
      pos = fullList.length -1;
    }
    var newPrev = fullList[pos];

    this.setState({
      currImg: prevImg,
      prevImg: newPrev,
      nextImg: currImg
    });
  },
  render: function() {
    return (
      // <div className="post-hero--list">
      // 	<div className="post-hero--prev">
      // 		<img src={this.state.prevImg} style={imgStyle} />
      // 	</div>
      // 	<div className="post-hero--img">
      // 		<div className="img--prev" onClick={this.moveBack}>
      // 			{this.state.arrowPrev}
      // 		</div>
      // 		<article class="center-img-wrapper">
      // 		<img src={this.state.currImg} style={imgStyle} />
      // 		</article>
      // 		<div className="img--next" onClick={this.moveForward}>
      // 			{this.state.arrowNext}
      // 		</div>
      // 	</div>
      // 	<div className="post-hero--prev">
      // 		<img src={this.state.nextImg} style={imgStyle} />
      // 	</div>
      // </div>
      //
      //
      //Justin's Hacky way
      <div className="post-hero--list">
        <div className="post-hero--prev">
          <img src={this.state.prevImg} style={imgStyle} />
        </div>
        <div className="post-hero--img">
          <div className="img--prev" onClick={this.moveBack}>
            {this.state.arrowPrev}
          </div>
          <article class="center-img-wrapper">
          <img src={this.state.currImg} style={imgStyle} />
          </article>
          <div className="img--next" onClick={this.moveForward}>
            {this.state.arrowNext}
          </div>
        </div>
        <div className="post-hero--prev">
          <img src={this.state.nextImg} style={imgStyle} />
        </div>
      </div>
    );
  }
});

React.render(<Hero mainImg={heroIndex} list={galleryList} />, heroEl);
