<?php
/*lab1 INFO 154 Jan 16, 2013
 * 
 * John Carrol-testNum
 * Jarrod Neser-testCases
 * Danica Dometita-testAlpha
 */        
        
        
        
        
        /*here is the function for verifying a string
         *is all alphabetic
         */
        function testAlpha ($str)
		{
			if (preg_match(/^['A-Za-z]+$/', $str)){
				return True;
                        }
                                
			else {
				return False;
		}
                
        /*test case for testAlpha
        */
          
        $abc = "abc";
        $alphabet = "abcdefghijklmnopqrstuvwxwz";
        $null = "";
        $nums = "123";
        $abc123 = "abc123";
        $ab12cd = "ab12cd";
        $numabc = "123abc";
        
        echo "abc is ".testAlpha($abc);
        echo "abcdefghijklmnopqrstuvwxwz is ".testAlpha($alphabet);
        echo " is ".testAlpha($null);
        echo "123 is ".testAlpha($nums);
        echo "abc123 is ".testAlpha($abc123);
        echo "ab12cd is ".testAlpha($ab12cd);
        echo "123abc is ".testAlpha($numabc);
 /*-----------------------------------------------------------------------------
  */      
        /*This function verities a given string is a valid number. 
         * 
         */
        
        function testNUM($input){
          
          if(is_numeric($input)){
              return TRUE;
          }
          
          return FALSE;
          }
          
          
        /*test case for testnumber
        */ 
        $num = "0";
        $digit = "0.1";
        $positive = "+4";
        $number = "123";
        $minusnum= "3-5";
        $numberabc = "123abc";
        $abcnumber = "abc123";
        $abnumcd = "ab12cd";
        $numnull = "";
        $alpha = "abc";
        $comma = "1,500";
        
        echo "0 is ".testNUM($num);
        echo "0.1 is ".testNUM($digit);
        echo "+4 is ".testNUM($positive);
        echo "123 is ".testNUM($number);
        echo "3-5 is ".testNUM($minusnum);
        echo "123abc is ".testNUM($numberabc);
        echo "abc123 is ".testNUM($abcnumber);
        echo "ab12cd is ".testNUM($abnumcd);
        echo " is ".testNUM($numnull);
        echo "abc is ".testNUM($alpha);
        echo "1,500 is ".testNUm($comma);
        
        ?>
