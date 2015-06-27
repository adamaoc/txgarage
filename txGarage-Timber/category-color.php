<?php 

if (in_category('News')) { ?>

	insta-box__news
  
<?php
} else if(in_category('Car Reviews')) { ?>

	insta-box__car-reviews

<?php 
} else { ?>

	insta-box__default

<?php
}; ?>