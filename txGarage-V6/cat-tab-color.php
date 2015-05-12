<?php 

if (in_category('News')) { ?>news
  
<?php
} else if(in_category('Car Reviews')) { ?>reviews

<?php 
} else { ?>video

<?php
}; ?>