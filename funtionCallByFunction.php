<?php
//Function call by Function
	function x()
	{
		echo 'Hello! Function call by Function';
	}
		
	function y()
	{
		x();
	}
		
	function z()
	{
		y();
	}
	


 z();

echo "<br/><br/><br/>";
#######################################################################################################


function a()
{


echo "Hello ";
	function b()
	{
		echo "Nawal <br/>";
		
		function c()
		{
			echo "How Are you ";
			
			function d()
			{
				
			echo "?";	
				
			}
			
		}
		
	}

}

a().b().c().d();