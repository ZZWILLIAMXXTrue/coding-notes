<?php

  /*
  Big comment
  */

  #  Small
  // Comments

  // Variable Example 1

  $test = "This can be used anywhere!";
  echo $test; # Prints 'This can be used anywhere!"

  // Variable Example 2
  $test = $test . " \nAlso periods let you add more stuff!"; # The '\n' makes a new line
  echo $test; # Prints 'This can be used anywhere! Also periods let you add more stuff!'
  
  // Variable Example 3
  $test .= $test "You can even add more text without making a new variable";
  echo 

  $kill = "kill";
  echo "Human ${kill}ers are good for stopping overpopulation"; # Put {} around the variable so the variable works(the 'ers' would have made it not work)

  /*
  There is also
  $test =& $example - for aliases
  */
